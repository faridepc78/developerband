<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\StoreProjectRequest;
use App\Http\Requests\Admin\Project\UpdateProjectRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use App\Repositories\ProjectRepository;
use App\Services\Media\MediaFileService;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    private ProjectRepository $projectRepository;
    private CategoryRepository $categoryRepository;

    public function __construct(ProjectRepository  $projectRepository,
                                CategoryRepository $categoryRepository)
    {
        $this->projectRepository = $projectRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(): Factory|View|Application
    {
        $projects = $this->projectRepository->paginateByFilters();
        return view('admin.projects.index', compact('projects'));
    }

    public function create(): Factory|View|Application
    {
        $categories = $this->categoryRepository->getAll(Category::Project);
        return view('admin.projects.create', compact('categories'));
    }

    public function store(StoreProjectRequest $request): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request) {

                $project = $this->projectRepository->store($request);

                $image_id = MediaFileService::normalUpload($request->file('image'),
                    'projects', null)->id;

                $this->projectRepository->addImage($image_id, $project->id);
            });

            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('projects.create');
    }

    public function edit($id): Factory|View|Application
    {
        $categories = $this->categoryRepository->getAll(Category::Project);
        $project = $this->projectRepository->findById($id);
        return view('admin.projects.edit', compact('categories', 'project'));
    }

    public function update(UpdateProjectRequest $request, $id): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request, $id) {

                $project = $this->projectRepository->findById($id);

                if ($request->hasFile('image')) {

                    $this->projectRepository->update($request, null, $id);

                    $image_id = MediaFileService::normalUpload($request->file('image'),
                        'projects', null)->id;

                    $this->projectRepository->addImage($image_id, $project->id);

                    if ($project->image) {
                        $project->image->delete();
                    }

                } else {
                    $this->projectRepository->update($request, $project->image_id, $id);
                }
            });
            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('projects.edit', $id);
    }

    public function destroy($id): RedirectResponse
    {
        try {
            DB::transaction(function () use ($id) {
                $project = $this->projectRepository->findById($id);

                if ($project->image) {
                    $project->image->delete();
                }

                if (count($project->gallery)) {
                    foreach ($project->gallery as $image) {
                        $image->image->delete();
                    }
                }

                $project->delete();
            });
            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('projects.index');
    }
}

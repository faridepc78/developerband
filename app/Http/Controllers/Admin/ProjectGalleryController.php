<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectGallery\ProjectGalleryRequest;
use App\Repositories\ProjectGalleryRepository;
use App\Repositories\ProjectRepository;
use App\Services\Media\MediaFileService;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class ProjectGalleryController extends Controller
{
    private ProjectRepository $projectRepository;
    private ProjectGalleryRepository $projectGalleryRepository;

    public function __construct(ProjectRepository        $projectRepository,
                                ProjectGalleryRepository $projectGalleryRepository)
    {
        $this->projectRepository = $projectRepository;
        $this->projectGalleryRepository = $projectGalleryRepository;
    }

    public function index($project_id): Factory|View|Application
    {
        $project = $this->projectRepository->findById($project_id);
        $gallery = $this->projectGalleryRepository->findGalleryByProjectId($project_id);
        return view('admin.projects.gallery.index', compact('project', 'gallery'));
    }

    public function store(ProjectGalleryRequest $request, $project_id): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request) {
                $gallery = $this->projectGalleryRepository->store($request);

                $image_id = MediaFileService::normalUpload($request->file('image'),
                    'projects/gallery', null)->id;

                $this->projectGalleryRepository->addImage($image_id, $gallery->id);
            });

            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('projects.gallery.index', $project_id);
    }

    public function destroy($project_id, $id): RedirectResponse
    {
        try {
            DB::transaction(function () use ($id) {
                $gallery = $this->projectGalleryRepository->findById($id);

                if ($gallery->image) {
                    $gallery->image->delete();
                }

                $gallery->delete();
            });

            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('projects.gallery.index', $project_id);
    }
}

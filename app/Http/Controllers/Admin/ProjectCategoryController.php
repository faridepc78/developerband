<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectCategory\StoreProjectCategoryRequest;
use App\Http\Requests\Admin\ProjectCategory\UpdateProjectCategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProjectCategoryController extends Controller
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(): Factory|View|Application
    {
        $categories = $this->categoryRepository->paginate(Category::Project);
        return view('admin.projects.categories.index', compact('categories'));
    }

    public function create(): Factory|View|Application
    {
        return view('admin.projects.categories.create');
    }

    public function store(StoreProjectCategoryRequest $request): RedirectResponse
    {
        try {
            $this->categoryRepository->store($request, Category::Project);
            newFeedback();
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('projects.categories.create');
    }

    public function edit($id): Factory|View|Application
    {
        $category = $this->categoryRepository->findById($id);
        return view('admin.projects.categories.edit', compact('category'));
    }

    public function update(UpdateProjectCategoryRequest $request, $id): RedirectResponse
    {
        try {
            $this->categoryRepository->update($request, $id);
            newFeedback();
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('projects.categories.edit', $id);
    }

    public function destroy($id): RedirectResponse
    {
        try {
            $category = $this->categoryRepository->findById($id);
            $category->delete();
            newFeedback();
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('projects.categories.index');
    }
}

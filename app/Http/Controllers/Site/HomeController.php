<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Contact\ContactRequest;
use App\Models\Category;
use App\Notifications\Contact\SendContactEmailToAdminsNotification;
use App\Notifications\Contact\SendContactSmsToAdminsNotification;
use App\Repositories\CategoryRepository;
use App\Repositories\ContactRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\UserRepository;
use Artesaos\SEOTools\Facades\SEOMeta;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    private ProjectRepository $projectRepository;
    private CategoryRepository $categoryRepository;
    private ContactRepository $contactRepository;
    private UserRepository $userRepository;

    public function __construct(ProjectRepository  $projectRepository,
                                CategoryRepository $categoryRepository,
                                ContactRepository  $contactRepository,
                                UserRepository     $userRepository)
    {
        $this->projectRepository = $projectRepository;
        $this->categoryRepository = $categoryRepository;
        $this->contactRepository = $contactRepository;
        $this->userRepository = $userRepository;
    }

    public function index(): Factory|View|Application
    {
        SEOMeta::addKeyword(
            [
                'developerband',
                'دولوپربند',
                'طراحی و برنامه نویسی سایت و اپلیکیشن',
                'home',
                'خانه'
            ]
        );

        $this->seo()
            ->setTitle('خانه | developerband | طراحی و برنامه نویسی سایت و اپلیکیشن | دولوپربند')
            ->setDescription('صفحه اصلی وب سایت دولوپربند | developerband');

        $projects = $this->projectRepository->getNewProjects(10);

        return view('site.home.index', compact('projects'));
    }

    public function projects(): Factory|View|Application
    {
        SEOMeta::addKeyword(
            [
                'developerband',
                'دولوپربند',
                'طراحی و برنامه نویسی سایت و اپلیکیشن',
                'projects',
                'نمونه کارها'
            ]
        );

        $this->seo()
            ->setTitle('نمونه کارها | developerband | طراحی و برنامه نویسی سایت و اپلیکیشن | دولوپربند')
            ->setDescription('صفحه نمونه کارها وب سایت دولوپربند | developerband');

        $categories = $this->categoryRepository->getAll(Category::Project);

        $projects = $this->projectRepository->paginateForSite(15);

        return view('site.projects.index', compact('categories', 'projects'));
    }

    public function project($slug): Factory|View|Application
    {
        $project = $this->projectRepository->findById(extractId($slug));

        SEOMeta::addKeyword(
            [
                'developerband',
                'دولوپربند',
                'طراحی و برنامه نویسی سایت و اپلیکیشن',
                'project ' . $project->name,
                'پروژه ' . $project->name
            ]
        );

        $this->seo()
            ->setTitle($project->slug . ' پروژه | developerband | طراحی و برنامه نویسی سایت و اپلیکیشن | دولوپربند')
            ->setDescription('صفحه پروژه سایت دولوپربند | developerband');

        return view('site.projects.single.index', compact('project'));
    }

    public function contact_us(): Factory|View|Application
    {
        SEOMeta::addKeyword(
            [
                'developerband',
                'دولوپربند',
                'طراحی و برنامه نویسی سایت و اپلیکیشن',
                'contact_us',
                'تماس با ما'
            ]
        );

        $this->seo()
            ->setTitle('تماس با ما | developerband | طراحی و برنامه نویسی سایت و اپلیکیشن | دولوپربند')
            ->setDescription('صفحه تماس با ما وب سایت دولوپربند | developerband');

        return view('site.contact-us.index');
    }

    public function send_contact_us(ContactRequest $request): RedirectResponse
    {
        try {
            $contact = $this->contactRepository->store($request->validated());

            $admins = $this->userRepository->getAllAdmins();

            foreach ($admins as $admin) {
                $admin->notify(new SendContactEmailToAdminsNotification($contact));

                $admin->notify(new SendContactSmsToAdminsNotification($contact));
            }

            newFeedback('پیام', 'پیام شما با موفقیت ارسال شد به زودی با شما تماس میگیریم', 'success');
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('contact-us');
    }

    public function about_us(): Factory|View|Application
    {
        SEOMeta::addKeyword(
            [
                'developerband',
                'دولوپربند',
                'طراحی و برنامه نویسی سایت و اپلیکیشن',
                'about_us',
                'درباره ما'
            ]
        );

        $this->seo()
            ->setTitle('درباره ما | developerband | طراحی و برنامه نویسی سایت و اپلیکیشن | دولوپربند')
            ->setDescription('صفحه درباره ما وب سایت دولوپربند | developerband');

        return view('site.about-us.index');
    }
}

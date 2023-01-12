<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\StatisticsRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    private StatisticsRepository $statisticsRepository;

    public function __construct(StatisticsRepository $statisticsRepository)
    {
        $this->statisticsRepository = $statisticsRepository;
    }

    public function index(): Factory|View|Application
    {
        $users = $this->statisticsRepository->getUsersCount();
        $contacts = $this->statisticsRepository->getContactsCount();
        $categories = $this->statisticsRepository->getCategoriesCount();
        $projects = $this->statisticsRepository->getProjectsCount();

        return view('admin.dashboard.index',
            compact('users', 'contacts', 'categories', 'projects'));
    }
}

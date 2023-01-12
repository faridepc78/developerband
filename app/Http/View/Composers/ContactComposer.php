<?php


namespace App\Http\View\Composers;

use App\Repositories\StatisticsRepository;
use Illuminate\View\View;

class ContactComposer
{
    private StatisticsRepository $statisticsRepository;

    public function __construct(StatisticsRepository $statisticsRepository)
    {
        $this->statisticsRepository = $statisticsRepository;
    }

    public function compose(View $view)
    {
        $view->with([
            'unread_contacts' => $this->statisticsRepository->getUnreadContactsCount()
        ]);
    }
}

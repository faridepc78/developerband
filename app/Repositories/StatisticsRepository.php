<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Project;
use App\Models\User;

class StatisticsRepository
{
    public function getUsersCount(): int
    {
        return User::query()
            ->count();
    }

    public function getContactsCount(): int
    {
        return Contact::query()
            ->count();
    }

    public function getCategoriesCount(): int
    {
        return Category::query()
            ->count();
    }

    public function getProjectsCount(): int
    {
        return Project::query()
            ->count();
    }

    public function getUnreadContactsCount(): int
    {
        return Contact::query()
            ->where('status', '=', Contact::UNREAD)
            ->count();
    }
}

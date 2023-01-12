<?php

namespace App\Providers;

use App\Http\View\Composers\ContactComposer;
use App\Http\View\Composers\SettingComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('site.*', SettingComposer::class);
        View::composer('admin.layout.header', ContactComposer::class);
    }
}

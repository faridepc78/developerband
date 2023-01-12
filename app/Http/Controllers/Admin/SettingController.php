<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\SettingRequest;
use App\Repositories\SettingRepository;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SettingController extends Controller
{
    private SettingRepository $settingRepository;

    public function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    public function index(): Factory|View|Application
    {
        $setting = $this->settingRepository->show();

        if ($setting['status'] == 'store') {
            $setting =
                [
                    'id' => 0,
                    'projects_count' => null,
                    'customers_count' => null,
                    'team_count' => null,
                    'experience_count' => null,
                    'linkedin' => null,
                    'instagram' => null,
                    'telegram' => null,
                    'whatsapp' => null,
                    'email' => null,
                    'address' => null,
                    'phone' => null,
                    'mobile1' => null,
                    'mobile2' => null,
                    'status' => 'store'
                ];
        }

        return view('admin.settings.index', compact('setting'));
    }

    public function do(SettingRequest $request): RedirectResponse
    {
        try {
            $array = $request->except('_token');

            if (empty($array['projects_count']) && empty($array['customers_count'])
                && empty($array['team_count']) && empty($array['experience_count'])
                && empty($array['linkedin']) && empty($array['instagram'])
                && empty($array['telegram']) && empty($array['whatsapp'])
                && empty($array['email']) && empty($array['address'])
                && empty($array['phone']) && empty($array['mobile1']) && empty($array['mobile2'])) {

                newFeedback('پیام', 'هیچ دیتایی به سمت سرور ارسال نشده است', 'warning');
                return redirect()->route('settings.index');
            }

            $setting = $this->settingRepository->show();
            if ($setting['status'] == 'store') {
                $this->settingRepository->store($request);
            } else {
                $this->settingRepository->update($request, $setting['id']);
            }
            newFeedback();
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('settings.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Profile\ProfileRequest;
use App\Repositories\UserRepository;
use App\Services\Media\MediaFileService;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(): Factory|View|Application
    {
        $user = Auth::user();
        return view('admin.profile.index', compact('user'));
    }

    public function update(ProfileRequest $request): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request) {
                $user = $this->userRepository->findById(Auth::id());

                if ($request->hasFile('avatar')) {

                    $this->userRepository->update($request, null, Auth::id());

                    $avatar_id = MediaFileService::normalUpload($request->file('avatar'),
                        'users', null)->id;

                    $this->userRepository->addAvatar($avatar_id, $user->id);

                    if ($user->avatar) {
                        $user->avatar->delete();
                    }

                } else {
                    $this->userRepository->update($request, $user->avatar_id, Auth::id());
                }

                if (!empty($request->get('password'))) {
                    $this->userRepository->updatePassword($request->get('password'), Auth::id());
                }

            });
            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('profile');
    }
}

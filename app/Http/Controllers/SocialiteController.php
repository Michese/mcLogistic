<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Socialite;

class SocialiteController extends Controller
{
    public function redirectVK()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function responseVK()
    {
        $user = Socialite::driver('vkontakte')->user();
        $ownUser = User::query()
            ->where(['vk_id' => $user->id])
            ->get();
        if($ownUser->count() == 0) {
            $model = new User();
            $model->fill([
                'name' => $user->name,
                'email' => $user->email,
                'phone' => null,
                'password' => null,
            ]);
            $model->vk_id = $user->id;
            $model->save();
            \Auth::login($model);
        }
        else {
            \Auth::login($ownUser[0]);
        }
        return redirect()->route('home');
    }
}

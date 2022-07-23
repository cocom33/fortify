<?php

namespace App\Http\Controllers\Profile;

use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends UpdateUserProfileInformation
{
    public function edit()
    {
        return view('profile/update-profile');
    }

    public function updateProfileInfomation()
    {
        $this->update(request()->user(), request()->all());
        return back()->with('success', 'PRofile berhasil di edit');
    }
}

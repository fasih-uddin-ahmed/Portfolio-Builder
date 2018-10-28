<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $profile = optional(auth()->user()->profile);
        return view('dashboard.profile.show', compact('profile'));
    }

    public function update()
    {
        $rules = Profile::rules();
        $attributes = array_keys($rules);

        $this->validate(request($attributes), $rules);

        Profile::updateOrCreate([
            'user_id' => auth()->user()->id
        ], request($attributes));

        return back()
            ->withInput()
            ->withSuccess('Profile has been updated successfully!');
    }
}

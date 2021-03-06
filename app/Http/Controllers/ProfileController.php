<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        return view('edit', [
            'user' => $request->user()
        ]);
    }
    public function update(UpdateProfileRequest $request)
    {
        $request->user()->update(
        $request->all()
        );

        return redirect()->route('profile.edit');
    
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function getProfiles()
    {
        $profileCount = DB::table('profiles')
            ->join('users', 'profiles.user_id', '=', 'users.id')
            ->where('users.email')
            ->count();

        return $profileCount;
    }
}
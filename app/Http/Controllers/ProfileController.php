<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all(); // Ambil semua data profil
        return view('front.index', compact('profiles')); // Kirim data ke tampilan 'profile.index'
    }
}

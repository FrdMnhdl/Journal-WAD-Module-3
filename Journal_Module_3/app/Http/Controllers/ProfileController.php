<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# 1. Import the User model so it can be used inside the controller.

class ProfileController extends Controller
{

    public function index()
    {
        # 2. Retrieve one student record from the User model using the first() function.
        # 3. Send the $mahasiswa data to the profile view using the compact() function.
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# 1. Import the User model so it can be used inside the controller.

class DashboardController extends Controller
{

    public function index()
    {
        # 2. Retrieve one student record from the User model using the first() function.
        # 3. Add logic to determine the greeting message.
        # 4. Create a variable to display the access time in H format.
        # 5. Create a new variable to store the result from the getTanggal() method.
        # 6. Send the data to the dashboard view using the compact() function.
    }

     # 7. Create a private method getTanggal() to generate the current date in d-m-Y format.
}

<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function destroy()
    {
       
        
        Auth::logout();

        return redirect('login');
    }
}

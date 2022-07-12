<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use Hash;
use Carbon\Carbon;

class DashboardController extends Controller
{
  // Dashboard - Analytics
  public function dashboardAnalytics()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/content/dashboard/dashboard-analytics', ['pageConfigs' => $pageConfigs]);
  }

  public function index()
  {
    $pageConfigs = ['pageHeader' => false];

    if(!Auth::check()) {
      return redirect()->route('auth-login');
    }

    return view('/content/dashboard/dashboard-analytics', ['pageConfigs' => $pageConfigs]);
  }

  public function teste() {
    $user = new Member;

    $user->name = 'Gabriel Botelho Laporte Pinto';
    $user->password = Hash::make('buraga123');
    $user->family = 'Botelho';
    $user->email = 'gabrielblpp@gmail.com';
    $user->phone = '(31) 99838-0623';
    $user->birth_date = Carbon::createFromFormat('d/m/Y', '23/04/2003')->format('Y-m-d');
    $user->gender = 'H';

    return 'a';
  }
}

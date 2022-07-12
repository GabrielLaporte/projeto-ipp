<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiscellaneousController extends Controller
{
  // Coming Soon
  public function coming_soon()
  {
    $pageConfigs = ['blankPage' => true];

    return view('/content/miscellaneous/page-coming-soon', ['pageConfigs' => $pageConfigs]);
  }

  // Error
  public function error()
  {
    $pageConfigs = ['blankPage' => true];

    return view('/content/miscellaneous/error', ['pageConfigs' => $pageConfigs]);
  }

  // Not-authorized
  public function not_authorized()
  {
    $pageConfigs = ['blankPage' => true];

    return view('/content/miscellaneous/page-not-authorized', ['pageConfigs' => $pageConfigs]);
  }

  // Maintenance
  public function maintenance()
  {
    $pageConfigs = ['blankPage' => true];

    return view('/content/miscellaneous/page-maintenance', [
      'pageConfigs' => $pageConfigs
    ]);
  }
}

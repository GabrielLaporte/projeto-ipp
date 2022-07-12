<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartsController extends Controller
{
    // Apex Charts
    public function apex()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Charts & Maps"], ['name' => "Apex"]
        ];
        return view('/content/charts-maps/chart-apex', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Chartjs Charts
    public function chartjs()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Charts & Maps"], ['name' => "Chartjs"]
        ];
        return view('/content/charts-maps/chart-chartjs', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Google Maps
    public function maps_leaflet()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Maps"], ['name' => "Leaflet Maps"]
        ];
        return view('/content/charts-maps/maps-leaflet', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}

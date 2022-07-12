<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtensionController extends Controller
{
    // Sweet Alert
    public function sweet_alert()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Sweet Alerts"]
        ];
        return view('/content/extensions/ext-component-sweet-alerts', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // block ui
    public function block_ui()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "BlockUI"]
        ];
        return view('/content/extensions/ext-component-block-ui', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Toastr
    public function toastr()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Toastr"]
        ];
        return view('/content/extensions/ext-component-toastr', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // NoUi Slider
    public function sliders()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Sliders"]
        ];
        return view('/content/extensions/ext-component-sliders', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Drag Drop
    public function drag_drop()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Drag & Drop"]
        ];
        return view('/content/extensions/ext-component-drag-drop', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Tour
    public function tour()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Tour"]
        ];
        return view('/content/extensions/ext-component-tour', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Clipboard
    public function clipboard()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Clipboard"]
        ];
        return view('/content/extensions/ext-component-clipboard', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Media Player
    public function plyr()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Media Player"]
        ];
        return view('/content/extensions/ext-component-media-player', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Context Menu
    public function context_menu()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Context Menu"]
        ];
        return view('/content/extensions/ext-component-context-menu', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // swiper
    public function swiper()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Swiper"]
        ];
        return view('/content/extensions/ext-component-swiper', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // tree
    public function tree()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Tree"]
        ];
        return view('/content/extensions/ext-component-tree', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // ratings
    public function ratings()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Ratings"]
        ];
        return view('/content/extensions/ext-component-ratings', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // I18n
    public function locale()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Locale"]
        ];
        return view('/content/locale/locale', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    // Component accordion
    public function accordion()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Accordion"]
        ];
        return view('/content/components/component-accordion', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Alert
    public function alert()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Alerts"]
        ];
        return view('/content/components/component-alerts', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component - Avatar
    public function avatar()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Avatar"]
        ];
        return view('/content/components/component-avatar', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Badges
    public function badges()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Badges"]
        ];
        return view('/content/components/component-badges', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Breadcrumbs
    public function breadcrumbs()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Breadcrumbs"]
        ];
        return view('/content/components/component-breadcrumbs', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Buttons
    public function buttons()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Buttons"]
        ];
        return view('/content/components/component-buttons', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Carousel
    public function carousel()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Carousel"]
        ];
        return view('/content/components/component-carousel', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Collapse
    public function collapse()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Collapse"]
        ];
        return view('/content/components/component-collapse', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component - Divider
    public function divider()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Divider"]
        ];
        return view('/content/components/component-divider', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Dropdowns
    public function dropdowns()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Dropdowns"]
        ];
        return view('/content/components/component-dropdowns', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component List Group
    public function list_group()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "List Group"]
        ];
        return view('/content/components/component-list-group', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Modals
    public function modals()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Modals"]
        ];
        return view('/content/components/component-modals', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Navs
    public function navs()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Navs"]
        ];
        return view('/content/components/component-navs', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component offcanvas
    public function offcanvas()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "OffCanvas"]
        ];
        return view('/content/components/component-offcanvas', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Pagination
    public function pagination()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Pagination"]
        ];
        return view('/content/components/component-pagination', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Pill Badges
    public function pill_badges()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Pill Badges"]
        ];
        return view('/content/components/component-pill-badges', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Pills
    public function pills()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Pills"]
        ];
        return view('/content/components/component-pills', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Tabs
    public function tabs()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Tabs"]
        ];
        return view('/content/components/component-tabs', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }


    // Component Tooltips
    public function tooltips()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Tooltips"]
        ];
        return view('/content/components/component-tooltips', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Popovers
    public function popovers()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Popovers"]
        ];
        return view('/content/components/component-popovers', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Progress
    public function progress()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Progress"]
        ];
        return view('/content/components/component-progress', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Spinner
    public function spinner()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Spinner"]
        ];
        return view('/content/components/component-spinner', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Timeline
    public function timeline()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Timeline"]
        ];
        return view('/content/components/component-timeline', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Toast
    public function toast()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Toasts"]
        ];
        return view('/content/components/component-bs-toast', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}

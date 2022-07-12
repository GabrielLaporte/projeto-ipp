<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    // Bootstrap Table
    public function table()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['name' => "Table Bootstrap"]];
        return view('/content/table/table-bootstrap/table-bootstrap', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Datatable Basic
    public function datatable_basic()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Datatable"], ['name' => "Basic"]];
        return view('/content/table/table-datatable/table-datatable-basic', ['breadcrumbs' => $breadcrumbs]);
    }

    // Datatable Basic
    public function datatable_advance()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Datatable"], ['name' => "Advanced"]
        ];
        return view('/content/table/table-datatable/table-datatable-advance', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}

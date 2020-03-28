<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $modules = array();
        foreach (Module::all() as $module) {
            if(array_key_exists($module->block, $modules)) {
                array_push($modules[$module->block], $module);
            } else {
                $modules[$module->block] = array($module);
            }
        }
        return view('dashboard', compact('modules'));
    }
}

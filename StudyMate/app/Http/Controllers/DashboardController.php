<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $modules = array('credits' => 0);
        foreach (Module::all() as $module) {
            if(array_key_exists($module->block, $modules)) {
                array_push($modules[$module->block], $module);
                $modules[$module->block]['credits'] += $module->obtained_credits;
            } else {
                $modules[$module->block] = array('credits' => $module->obtained_credits, $module);
            }
            $modules['credits'] += $module->obtained_credits;
        }
        return view('dashboard', compact('modules'));
    }
}

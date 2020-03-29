<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use DateTime;

class DeadlineController extends Controller
{
    public function index(Request $request)
    {
        $tests = Test::all();

        switch ($request->sort) {
            case 'is_complete':
                $tests = $tests->sortBy('is_complete');
                break;

            case 'module':
                $tests = $tests->sort(
                    function ($a, $b) {
                        return strcmp($a->module->name, $b->module->name);
                    }
                );
                break;    

            case 'type':
                $tests = $tests->sort(
                    function ($a, $b) {
                      return strcmp($a->type->name, $b->type->name);
                    }
                );
                break;

            case 'name':
                $tests = $tests->sortBy('name');
                break;

            case 'teacher':
                $tests = $tests->sort(
                    function ($a, $b) {
                        foreach($a->module->teachers as $teacherA){
                            if($teacherA->pivot->is_my_teacher === 1){
                                $a = $teacherA->fullName();
                            }
                        }
                        foreach($b->module->teachers as $teacherB){
                            if($teacherB->pivot->is_my_teacher === 1){
                                $b = $teacherB->fullName();
                            }
                        }
                        return strcmp($a, $b);
                    }
                );
                break;

            case 'date':
                $tests = $tests->sortBy('date');
                break;
            
            default:
            $tests = $tests->sort(
                function ($a, $b) {
                    $dateA = new DateTime($a->date);
                    $dateB = new DateTime($b->date);
    
                    $result = 1;
                    if($dateA > $dateB) {
                        $result = -1;
                    }
                    // sort by column1 first, then 2, and so on
                    return strcmp($a->is_complete, $b->is_complete) ?: $result;
                });
                break;
        }
       
        return view('deadline/index', compact('tests'));
    }

    public function save($tests)
    {
      
    }
}

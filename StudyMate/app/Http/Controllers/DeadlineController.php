<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use DateTime;
use App\Module;
use App\Type;
use App\Tag;

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

    public function save(Request $request)
    {
        $test = Test::find($request->get('id'));
        $test->is_complete = ($request->get('completed') == 'on' ? true : false);
        
        $test->save();
        return redirect('deadline/index');
    }

    public function show(Request $request){
        $test = Test::find($request->get('id'));
        return view('deadline/show', compact('test'));
    }

    public function edit(Request $request){
        $test = Test::find($request->get('id'));
        $modules = Module::all();
        $tags = Tag::all()->diff(Tag::whereIn('id', array_column($test->tags->toArray(), 'id'))->get());
        $types = Type::all();
        return view('deadline/edit', compact('test', 'modules', 'tags', 'types'));
    }

    public function update(Request $request){
        $test = Test::find($request->get('id'));
        $test->tags()->sync($request->get('tags'));
        $test->date = $request->get('date');

        $test->save();

        return redirect('deadline/index');
    }
}

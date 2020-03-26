<?php

namespace App\Http\Controllers;

use App\Module;
use App\Teacher;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $modules = Module::all();
        return view('admin/modules/index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('admin/modules/create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'period'=>'required',
            'block'=>'required',
            'total_credits'=>'required',
            'obtained_credits'=>'required'
        ]);

        $module = new Module([
            'name' => $request->get('name'),
            'period' => $request->get('period'),
            'block' => $request->get('block'),
            'total_credits' => $request->get('total_credits'),
            'obtained_credits' => $request->get('obtained_credits'),
            'created_at' => now()
        ]);
        $module->save();

        foreach ($request->get('teachers') as $teacher) {
            $module->teachers()->attach($teacher, ['is_coordinator' => ($teacher == $request->get('coordinator')), 'is_my_teacher' => ($teacher == $request->get('teacher')), 'created_at' => now()]);
        }
        $module->save();

        return redirect('/admin/modules')->with('success', 'Vak opgeslagen!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Module $module)
    {
        $teachers = Teacher::all()->diff(Teacher::whereIn('id', array_column($module->teachers->toArray(), 'id'))->get());
        return view('admin/modules/edit', compact('module', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Module $module)
    {
        $request->validate([
            'name'=>'required',
            'period'=>'required',
            'block'=>'required',
            'total_credits'=>'required',
            'obtained_credits'=>'required'
        ]);

        $module->name = $request->get('name');
        $module->period = $request->get('period');
        $module->block = $request->get('block');
        $module->total_credits = $request->get('total_credits');
        $module->obtained_credits = $request->get('obtained_credits');
        $module->updated_at = now();
        $module->save();

        $data = array();
        foreach ($request->get('teachers') as $teacher) {
            $data[$teacher] = ['is_coordinator' => ($teacher == $request->get('coordinator')), 'is_my_teacher' => ($teacher == $request->get('teacher'))];
        }

        $module->teachers()->sync($data);

        return redirect('/admin/modules')->with('success', 'Vak geupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Module $module
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect('/admin/modules')->with('success', 'Vak verwijderd!');
    }
}

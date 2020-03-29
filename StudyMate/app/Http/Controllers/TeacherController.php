<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Gate;
use Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin/teachers/index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin/teachers/create');
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
            'first_name'=>'required|max:25',
            'last_name'=>'required|max:50'
        ]);

        $teacher = new Teacher([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'created_at' => now()
        ]);

        $teacher->save();
        return redirect('/admin/teachers')->with('success', 'Docent opgeslagen!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Teacher $teacher)
    {
        return view('admin/teachers/show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Teacher $teacher)
    {
        return view('admin/teachers/edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required'
        ]);

        $teacher->first_name =  $request->get('first_name');
        $teacher->last_name = $request->get('last_name');
        $teacher->updated_at = now();
        $teacher->save();

        return redirect('/admin/teachers')->with('success', 'Docent geupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Teacher $teacher
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect('/admin/teachers')->with('success', 'Docent verwijderd!');
    }
}

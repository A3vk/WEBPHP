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
        if (Gate::allows('admin', Auth::user())){
            $teachers = Teacher::all();
            return view('admin/teachers/index', compact('teachers'));
        } else {
            return view ('/auth/wrongRole');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (Gate::allows('admin', Auth::user())){
            return view('admin/teachers/create');
        } else{
            return view ('/auth/wrongRole');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        if (Gate::allows('admin', Auth::user())){
            $request->validate([
                'first_name'=>'required',
                'last_name'=>'required'
            ]);

            $teacher = new Teacher([
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'created_at' => now()
            ]);

            $teacher->save();
            return redirect('/admin/teachers')->with('success', 'Docent opgeslagen!');
        } else{
            return view ('/auth/wrongRole');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Teacher $teacher)
    {
        if (Gate::allows('admin', Auth::user())){
            return view('admin/teachers/show', compact('teacher'));
        } else {
            return view ('/auth/wrongRole');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Teacher $teacher)
    {
        if (Gate::allows('admin', Auth::user())){
            return view('admin/teachers/edit', compact('teacher'));
        } else{
            return view ('/auth/wrongRole');
        }
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
        if (Gate::allows('admin', Auth::user())){
            $request->validate([
                'first_name'=>'required',
                'last_name'=>'required'
            ]);

            $teacher->first_name =  $request->get('first_name');
            $teacher->last_name = $request->get('last_name');
            $teacher->updated_at = now();
            $teacher->save();

            return redirect('/admin/teachers')->with('success', 'Docent geupdate!');
        } else {
            return view ('/auth/wrongRole');
        }
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
        if (Gate::allows('admin', Auth::user())){
            $teacher->delete();
            return redirect('/admin/teachers')->with('success', 'Docent verwijderd!');
        } else {
            return view ('/auth/wrongRole');
        }
    }
}

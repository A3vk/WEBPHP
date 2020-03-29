<?php

namespace App\Http\Controllers;

use App\Module;
use App\Tag;
use App\Test;
use App\Type;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tests = Test::all();
        return view('admin/tests/index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $types = Type::all();
        $modules = Module::all();
        $tags = Tag::all();
        return view('admin/tests/create', compact('types', 'modules', 'tags'));
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
        ]);

        $test = new Test([
            'type_id' => $request->get('type'),
            'module_id' => $request->get('module'),
            'name' => $request->get('name'),
            'grade' => $request->get('grade'),
            'date' => null,
            'is_complete' => false,
            'created_at' => now()
        ]);
        $test->save();

        $ext = $request->file('file')->extension();
        $request->file('file')->storeAs('public/files/' . $test->module->name, $test->name . $test->id . '.' . $ext);
        $test->file = 'files/' . $test->module->name . '/' . $test->name . $test->id  . '.' . $ext;
        $test->save();

        return redirect('/admin/tests')->with('success', 'Toets opgeslagen!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Test $test)
    {
        return view('admin/tests/show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Test $test)
    {
        $modules = Module::all();
        $tags = Tag::all()->diff(Tag::whereIn('id', array_column($test->tags->toArray(), 'id'))->get());
        $types = Type::all();
        return view('admin/tests/edit', compact('test', 'modules', 'tags', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Test $test)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $test->type_id = $request->get('type');
        $test->module_id = $request->get('module');
        $test->name = $request->get('name');
        $test->grade = $request->get('grade');
        $test->updated_at = now();

        $ext = $request->file('file')->extension();
        $request->file('file')->storeAs('public/files/' . $test->module->name, $test->name . $test->id . '.' . $ext);
        $test->file = 'files/' . $test->module->name . '/' . $test->name . $test->id  . '.' . $ext;
        $test->save();

        return redirect('/admin/tests')->with('success', 'Toets geupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Test $test
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Test $test)
    {
        $test->delete();
        return redirect('/admin/tests')->with('success', 'Toets verwijderd!');
    }
}

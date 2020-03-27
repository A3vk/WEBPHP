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
            'completed'=>'required'
        ]);

        $test = new Test([
            'type' => $request->get('type'),
            'module' => $request->get('module'),
            'name' => $request->get('name'),
            'grade' => $request->get('grade'),
            'date' => $request->get('date'),
            'is_complete' => ($request->get('completed') == 'on' ? true : false),
            'created_at' => now()
        ]);
        $test->save();

        $test->tags()->sync($request->get('tags'));

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
            'completed'=>'required'
        ]);

        $test->type = $request->get('type');
        $test->module = $request->get('module');
        $test->name = $request->get('name');
        $test->grade = $request->get('grade');
        $test->date = $request->get('date');
        $test->is_complete = ($request->get('completed') == 'on' ? true : false);
        $test->updated_at = now();

        $test->tags()->sync($request->get('tags'));
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

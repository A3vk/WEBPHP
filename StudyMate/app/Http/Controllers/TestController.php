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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'completed'=>'required'
        ]);

        $test = new Test([
            'type_id' => $request->get('type'),
            'module_id' => $request->get('module'),
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
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        return view('admin/tests/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        dd($test);
    }
}

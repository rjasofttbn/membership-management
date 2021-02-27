<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {
        return view('frontend.pages.index');
    }


    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function index()
    {
        //$tasks = Task::orderBy('id', 'desc')->get();
        $tasks = Task::orderBy('id', 'desc')->paginate(2);
        return view('tasks.index', compact('tasks'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->details = $request->details;
        $task->status = $request->status;
        $task->save();
        return redirect()->route('tasks.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $task = task::find($id);
        if (is_Null($task)) {
            return redirect()->route('tasks.home');
        }
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = task::find($id);
        if (is_Null($task)) {
            return redirect()->route('tasks.home');
        }
        $task->title = $request->title;
        $task->details = $request->details;
        $task->status = $request->status;
        $task->save();
        return redirect()->route('tasks.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $task = task::find($id);
        //var_dump($task);
        //return;
        //dd($task);
        if (is_Null($task)) {
            return redirect()->route('tasks.home');
        }

        $task->delete();
        return redirect()->route('tasks.home');
    }
}

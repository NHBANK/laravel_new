<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task; // 아래에서 Task를 이용하기 위해 선언

class TaskController extends Controller
{
    //
    public function index()
    {
        //$tasks = Task::all();
        $tasks = auth()->user()->tasks()->latest()->get();//로그인한 유저가 갖고있는 tasks를 알려줘! 다만, 최신순으로 갖고오고 그거를 get(가져다줘)
        //Task::latest()->where('user_id', auth()->id())->get();
        
        return view('tasks.index',[
            'tasks'=>$tasks
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        request()->validate([
            'title'=>'required',
            'body' =>'required'
        ]);

        $values = request(['title', 'body']);

        $values['user_id'] = auth()->id();
        // $request->input('title');
        // $request->input('body');
        // $task = Task::create(request(['title', 'body']));
        /* $task = Task::create([
            'title' => request('title'),
            'body' => request('body')
        ]);*/ //아니면 \App\Task:: 이런식으로 해도됨 

        $task = Task::create($values);
        return redirect('/tasks/'.$task->id); //만들고 나서 그 만들어진 디테일 페이지로 바로 이동
    }
    
    public function show(Task $task)
    {
        /*if(auth()->id() != $task->user_id){
            abort(403);
        }*/

        //abort_if(auth()->id()!=$task->user_id, 403);
        abort_unless(auth()->user()->owns($task), 403);
        //abort_if(!auth()->user()->owns($task), 403);
        
        return view('tasks.show', [
            'task'=>$task
        ]);
    }

    public function edit(Task $task)
    {
        abort_unless(auth()->user()->owns($task), 403);

        return view('tasks.edit', [
            'task'=>$task
        ]);
    }

    public function update(Task $task)
    {
        abort_unless(auth()->user()->owns($task), 403);

        request()->validate([
            'title'=>'required',
            'body' =>'required'
        ]);

        $task->update([
            'title'=>request('title'),
            'body' =>request('body')
        ]);
        
        return redirect('/tasks/'.$task->id);
    }

    public function destroy(Task $task)
    {
        abort_unless(auth()->user()->owns($task), 403);

        $task->delete();

        return redirect('/tasks');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function home()
    {
        return 'Hello, World! this is task home';
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request->input('title');
//        $task->title = Input::get('title');
        $task->description = $request->input('description');
        $task->save();
        return redirect('task');   // 重定向到 GET task 路由
    }
}

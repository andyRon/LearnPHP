<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function index(Request $request): View
    {

        return view('user.index', [
            'user' => 123,
            'name' => 'andy'
        ]);
    }

    public function show(string $id): Response
    {
        return Inertia::render('', [
            'user' => 'ddxx'
        ]);
    }

    public function test(Request $request): View
    {
        print_r($request->except('id'));
        return view('user.test', [
            'user' => 123,
            'name' => 'andy',
            'time' => time()
        ]);
    }

    public function form(Request $request)
    {
        // 通过 $request 实例获取请求数据
        dd($request->all());

    }

}

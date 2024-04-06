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
        ]);
    }

    public function show(string $id): Response
    {
        return Inertia::render('', [
            'user' => 'ddxx'
        ]);
    }
}

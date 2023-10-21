<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo = ToDo::all();
        foreach ($todo as $do) {
            dump($do->title);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $todoarr = [
            [
                "title" => "Do homework of Netology",
                "description" => "Read documentation about MVC on Laravel. Create project and try to do step by step tasks of home work",
                "is_completed" => true,
            ],
            [
                "title" => "Do homework 2 of Netology",
                "description" => "Read documentation 2 about MVC on Laravel. Create project and try to do step by step tasks of home work",
                "is_completed" => true,
            ]
        ];

        foreach ($todoarr as $todo) {
            ToDo::created($todo);
        }

        dd("created");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ToDo $toDo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToDo $toDo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ToDo $toDo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToDo $toDo)
    {
        //
    }
}

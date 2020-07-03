<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Repositories\TodoRepository;

class TodolistController extends Controller
{

    protected $_todoRepository;

    public function __construct(TodoRepository $todoRepository)
    {
        $this->_todoRepository = $todoRepository;
    }

    public function show()
    {
        return view('home');
    }

    public function store(TodoRequest $request)
    {
        $todo = $this->_todoRepository->store($request->all());
        return redirect('home').withOk("to do added !");
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}

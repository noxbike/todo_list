<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Repositories\TodoRepository;

class TodolistController extends Controller
{
    protected $_todoRepository;

    protected $_nbrPerPage = 6;

    public function __construct(TodoRepository $todoRepository)
    {
        $this->_todoRepository = $todoRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo = $this->_todoRepository->getPaginate($this->_nbrPerPage);
        $links = $todo->render();

        return view('home', compact('todo', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = $this->_todoRepository->store($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = $this->_todoRepository->getById($id);

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TodoRequest $request, $id)
    {
        $this->_todoRepository->update($id, $request->all());

        return redirect('todo');
    }

    public function indexdate($day)
    {
        $todo = $this->_todoRepository->date($this->_nbrPerPage, $day);
        $links = $todo->render();

        return view('home', compact('todo', 'links'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->_todoRepository->destroy($id);

        return redirect()->back();
    }
}

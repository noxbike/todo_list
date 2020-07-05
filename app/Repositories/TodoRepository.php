<?php

namespace App\Repositories;

use App\Todo;

class TodoRepository
{

    protected $_todo;

    public function __construct(Todo $todo)
    {
        $this->_todo = $todo;
    }

    public function getById($id)
    {
        return $this->_todo->findOrFail($id);
    }

    public function store(Array $inputs)
    {
        $todo = new $this->_todo;
        $this->save($todo, $inputs);
    }

    private function save(Todo $todo, Array $inputs)
    {
        $todo->todo = $inputs['todo'];
        $todo->date = $inputs['date'];

        $todo->save();
    }

    public function getPaginate($n)
    {
        return $this->_todo->orderBy('todos.date', 'asc')->paginate($n);
    }

    public function update($id, Array $inputs)
    {
        $this->save($this->getById($id), $inputs);
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

    public function date($n, $day)
    {
        $compare = $day < date('Y-m-d') ? '<=' : '=';

        return $this->_todo->where('date', $compare , $day)->orderBy('todos.date', 'asc')->paginate($n);
    }
}
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

    public function store(Array $inputs)
    {
        $todo = new $this->_todo;
        $this->save($todo, $inputs);
    }

    private function save(Todo $todo, Array $inputs)
    {
        $todo->todo = $inputs['todo'];
        $todo->description = $inputs['description'];

        $todo->save();
    }
}
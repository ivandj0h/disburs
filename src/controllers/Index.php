<?php

namespace Controllers;

use \Models\Disburs;

class Index
{
  public $model;


  public function __construct()
  {
    $this->model = new Disburs;
  }

  public function index()
  {
    view('Index/index');
  }

  public function show()
  {
    view('Index/show', $this->getDisburs());
  }

    // READ all tasks
    private function getDisburs() : array
    {
      return $this->model->selectData();
    }
}

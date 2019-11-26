<?php
namespace Controllers;

class Index
{
  public function index()
  {
    view('Index/index');
  }

  public function show()
  {
    view('Index/show');
  }
}
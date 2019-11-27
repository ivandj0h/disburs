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

  /**
   * THIS IS A FUNCTION 
   * WILL RUN WHEN THE APPLICATION START
   */
  public function index()
  {
    view('Index/index');
  }

  /**
   * THIS IS A FUNCTION 
   * TO SHOW ALL THE DATA FROM DATABASE
   */
  public function show()
  {
    view('Index/show', $this->getDisburs());
  }

  /**
   * THIS IS A FUNCTION TO READ ALL THE DATA FROM DATABASE
   * @return array
   */
  private function getDisburs(): array
  {
    return $this->model->selectData();
  }

 
  /**
   * THIS IS A FUNCTION 
   * TO CREATE DATA AND UPDATED INTO DATABASE
   */
  public function create()
  {
    view('Index/create', $this->getDisburs());
  }


  /**
   * THIS IS A FUNCTION 
   * TO CREATE DATA AND UPDATED INTO DATABASE
   */
  public function save()
  {		
		$param = [
      "bank_code" => $_POST['bank_code'],
      "account_number" =>$_POST['account_number'],
			"amount" =>$_POST['amount'],
			"remark" =>$_POST['remark'],
		];

		$this->model->saveData($param);
		$this->show();    
  }  
}

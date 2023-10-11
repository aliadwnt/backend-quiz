<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\TodosModel;

class TodosController extends BaseController {
    public function __construct(){
        $this->todos = new TodosModel();
    }

    public function getTodos(){
        //Buat Get Disini
    }

    public function createTodo(){
        //Buat Create Disini
    }

    //Buat Fungsi Lainnya
}
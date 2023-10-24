<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\TodosModel;

class TodosController extends BaseController {
    public function __construct(){
        $this->todos = new TodosModel();
    }

    public function getTodos(){
        $data['todos'] = $this->todos->findAll();
        return view('todo_index', $data);
    }

    public function createTodo(){
        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'todo' => 'required',
                'deadline' => 'required',
            ];

            if ($this->validate($validationRules)) {
                $data = [
                    'todo' => $this->request->getPost('todo'),
                    'deadline' => $this->request->getPost('deadline'),
                    'status' => 'Belum Selesai',
                ];

                $this->todos->insert($data);
                return redirect()->to('/');
            } else {
                return view('todo_index');
            }
        }

        return view('todo_index');
    }

    public function deleteTodo($id){
        $todo = $this->todos->find($id);
    
        if ($todo) {
            $this->todos->delete($id);
    
            return redirect()->to('/')->with('status', 'Todo deleted successfully');
        } else {
            return redirect()->to('/')->with('error', 'Todo not found');
        }
    }
    
}
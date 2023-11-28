<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoModel;
use App\Models\ListTodoTotalModel;
use App\Models\ListTodoParsialModel;
use App\Models\TodoTotalModel;
use App\Models\TodoParsialModel;
use App\Models\InfoPanenModel;
use App\Models\InfoBudidayaModel;
use App\Models\FaqModel;

class HomeController extends Controller
{
    //
    public function index(){
        $data = InfoPanenModel::where('user_id', session('id_user'))->count();
        $databudidaya = InfoBudidayaModel::where('user_id', session('id_user'))->count();
    
        // Get all harvest entries for the user
        $infoPanenEntries = InfoPanenModel::where('user_id', session('id_user'))->get();
    
        // Initialize a variable to store the total count of tasks
        $totalTaskCount = 0;
    
        // Initialize an array to store tasks for each harvest entry
        $tasksByPanen = [];
    
        foreach ($infoPanenEntries as $infoPanenEntry) {
            // Count the tasks associated with each harvest entry
            $tasks = TodoModel::where('id_panen', $infoPanenEntry->_id)->get();
            $taskCount = $tasks->count();
    
            // Add the task count to the total
            $totalTaskCount += $taskCount;
    
            // Store tasks in the array using the harvest entry ID as the key
            $tasksByPanen[$infoPanenEntry->_id] = $tasks;
        }
    
        return view("index", compact('data', 'databudidaya', 'totalTaskCount', 'tasksByPanen'));
    }    

    public function onboard(){
        return view("onboarding");
    }

    public function authlogin(){
        return view("auth-login");
    }

    public function profile(){
        return view("profile");
    }

    public function authregister(){
        return view("auth-register");
    }

    public function AddDataPanen(){
        $data = [];
        return view("formaddpanen", compact('data'));
    }

    public function AddDataBudidaya(){
        $data = [];
        return view("formaddbudidaya", compact('data'));
    }

    public function faq(){

        $data = FaqModel::all();       
        return view("faq", compact('data'));
    }

    public function viewmentor(){
        return view ("viewmentor");
    }

    public function kontenedukasi(){
        return view ("kontenedu");
    }

    public function daftartugas(){
        return view ("daftartugas");
    }
    public function viewtotal($id){
        $todo = TodoModel::find($id);
        $accordionItems = TodoTotalModel::all();
        $listTodoTotal = ListTodoTotalModel::where('id_todo_total', $id)->get();
    
        return view("viewtugas", [
            'todo' => $todo,
            'accordionItems' => $accordionItems,
            'listTodoTotal' => $listTodoTotal
        ]);
    }

    public function viewparsial($id){
        $todo = TodoModel::find($id);
        $accordionItems = TodoParsialModel::all();
        $listTodoParsial = ListTodoParsialModel::where('id_todo_parsial', $id)->get();
        return view("viewtugasparsial", ['todo' => $todo, 'accordionItems' => $accordionItems,  'listTodoParsial' => $listTodoParsial]);
    }
}

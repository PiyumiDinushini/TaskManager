<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;

class taskController extends Controller
{
   public function store(Request $request){

      $task=new Tasks;

      $this->validate($request,[

         'task'=>'required|max:100|min:5',

      ]);


      $task->task=$request->task;
      $task->save();

      $data=tasks::all();
      //dd($data);

      return view('task')->with('tasks',$data);

      //dd($request->all()) ;
   }
   public function UpdateTaskAsCompleted($id){
      $task=tasks::find($id);
      $task->iscompleted=1;
      $task->save();
      return redirect()->back();
   }
   public function UpdateTaskAsNotCompleted($id){
      $task=tasks::find($id);
      $task->iscompleted=0 ;
      $task->save();
      return redirect()->back();
   }
   public function deletetask($id){
      $task=tasks::find($id);
      $task->delete();
      return redirect()->back();
   }
   public function updatetaskview($id){
      $task=tasks::find($id);
      return view('updatetask')->with('taskdata',$task);
   }
   public function updatetask(Request $request){
    
      $id=$request->id;
      $task=$request->task;
      $data=tasks::find($id);
      $data->task=$task;
      $data->save();
      $data=tasks::all();

      return view('/task')->with('tasks',$data);



   }
}

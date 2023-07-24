<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('body.task', [
            "tasks"=>$tasks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->all();
        //dd($data);
        unset($data["_token"]);
        $task = Task::create($data);
        return redirect('task');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::findOrFail($id);

        return view('show_task', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);

        return view('edit_task', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::findOrFail($id);

        $task->name_task = $request->input('name_task');
        $task->task_description = $request->input('task_description');
        $task->task_status = $request->input('task_status');
        $task->start_task = $request->input('start_task');
        $task->end_task = $request->input('end_task');

        $task->save();

        return redirect()->back()->with('success', 'La tâche a été mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->back()->with('success', 'La tache a été supprimée !');
    }

    public function task(){
        return view('body.task');
    }

    public function addtask(){

        $projets = Projet::all();
        return view('body.addtask', [
            "projets"=>$projets,
        ]);
    }

    public function showstats() {
        $dateActu = Carbon::now();

        $activeTasks = Task::whereDate('start_task', '<=', $dateActu)->whereDate('end_task', '>=', $dateActu)->get();

        $finishedTasks = Task::whereDate('end_task', '<', $dateActu)->get();

        $remainingTasks = Task::whereDate('start_task', '>', $dateActu)->get();

        $activeNum = Task::whereDate('start_task', '<=', $dateActu)->whereDate('end_task', '>=', $dateActu)->count();

        $finishedNum = Task::whereDate('end_task', '<', $dateActu)->count();

        $remainingNum = Task::whereDate('start_task', '>', $dateActu)->count();


        return view('stats', compact('activeTasks', 'finishedTasks', 'remainingTasks',
        'activeNum', 'remainingNum', 'finishedNum'));
    }
}

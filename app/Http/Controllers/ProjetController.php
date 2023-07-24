<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::all();
        return view('body.projet', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_projet');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        unset($data["_token"]);

        $projet = Projet::create($data);

        return redirect()->route('projets.show', $projet->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $projet = Projet::findOrFail($id);
         return view('show_projet', compact('projet'));
    }

    public function addTask(Request $request, $projet_id){
        $projet = Projet::findOrFail($projet_id);

        $task = new Task;
        $task->name_task = $request->name_task;
        $task->task_description = $request->task_description;
        $task->task_status = $request->task_status;
        $task->start_task = $request->start_task;
        $task->end_task = $request->end_task;
        $projet->tasks()->save($task);

        return redirect()->route('projets.show', $projet->id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $projet = Projet::findOrFail($id);
        $tasks = $projet->tasks;
        foreach($tasks as $task){
            $task->delete();
        }
        $projet->delete();

        return redirect()->back()->with('success', 'Le projet a été suprimé');
    }

    public function projet(){
        return view('body.projet');
    }

}

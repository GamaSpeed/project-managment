@extends('dashboard')

@section('show-projet')

<div class="container">
    <div class="text-center">
        <h1 class="mt-5" style="font-size: 26px">Nom du Projet : {{$projet->name_project}}</h1><br>
        <p style="font-size: 22px">Description    : {{$projet->description}}</p><br>

        <h3 style="font-size: 22px">Tâches associées:</h3><br>
        <ul style="font-size: 20px">
            @foreach($projet->tasks as $task)
                <li>{{$task->name_task}}</li>
            @endforeach
        </ul>
    </div>
</div>

<hr>

<div class="container">
    <div class="card" style="background-color:rgb(124, 148, 142)">
        <h1 class=" card-header text-center bg-info">Ajouter une nouvelle tâche</h1><br>
        <div class="card-body">
            <form action="/task" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name_task" class="form-label">Nom</label>
                    <input name="name_task" type="text" class="form-control" id="name" placeholder="Nom de la tache">
                    <div id="emailHelp" class="form-text">Au moins 03 caractères</div>
                </div>
                <div class="mb-3">
                    <label for="task_description" class="form-label">Description</label>
                    <textarea name="task_description" class="form-control" id="description" placeholder="Description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="task_status">Status</label>
                    <select name="task_status" class="form-select" >
                        <option selected>Select Status</option>
                        <option value="1">Debut</option>
                        <option value="2">en cours</option>
                        <option value="3">terminée</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="start_task" class="form-label">Debut</label>
                    <input name="start_task" type="date" class="form-control" id="date">
                </div>
                <div class="mb-3">
                    <label for="end_task" class="form-label">Fin</label>
                    <input name="end_task" type="date" class="form-control" id="description">
                </div>
                <div class="hidden">
                    <input type="text" name="projet_id" value="{{$projet->id}}">
                </div>
                <button type="submit" class="btn btn-primary text-dark">Add Task</button>
            </form>
        </div>
    </div>
</div>

@endsection
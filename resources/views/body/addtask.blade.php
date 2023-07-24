@extends('dashboard')

@section('task-add')

<div class="container">
    <div class="card mb-20 ml-50 mr-50">
        <div class="card-header text-center">
            Ajouter une tache
        </div>
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
                    <label for="projet_id">Projet</label>
                    <select name="projet_id" class="form-select" >
                        <option selected>Select Project</option>
                        @foreach ($projets as $projet)
                        <option value="{{$projet->id}}">{{$projet->name_project}} </option>
                        
                            
                        @endforeach
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
                <button type="submit" class="btn btn-primary text-dark">Add Task</button>
            </form>
        </div>
    </div>
</div>

@endsection
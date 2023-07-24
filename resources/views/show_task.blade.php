@extends('dashboard')

@section('show_task')
<div class="container">
    <div class="card row col-md-6 mx-auto">
        <div class="card-header text-center">
            <h1>Détails de la Tâche {{$task->id}}</h1>
        </div>
        <div class="card-body text-center bg-info">
            <p>Nom : {{$task->name_task}}</p>
            <p>Description : {{$task->task_description}}</p>
            <p>Statut : {{$task->task_status}}</p>
            <p>Début : {{$task->start_task}}</p>
            <p>Fin : {{$task->end_task}}</p>
        </div>
    </div>
</div>
 
@endsection

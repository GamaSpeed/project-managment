@extends('dashboard')

@section('edit-task')

<div class="container">
    <div class="card mb-20 ml-50 mr-50">
        <div class="card-header text-center">
            <h1>Editer la tache</h1>
        </div>
        <div class="card-body">
            <form action="{{route('tasks.update', $task->id)}}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="name_task">Nom</label>
                    <input class="form-control" type="text" name="name_task" value="{{$task->name_task}}">
                </div>
                <div class="mb-3">
                    <label for="task_description" >Description</label>
                    <textarea name="task_description" class="form-control" required>{{$task->task_description}}</textarea>
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
                    <label for="start_task">Debut</label>
                    <input type="date" name="start_task" value="{{$task->start_task}}">
                </div>
                <div class="mb-3">
                    <label for="end_task">Fin</label>
                    <input type="date" name="end_task" value="{{$task->end_task}}">
                </div>
                <button class="btn btn-info" type="submit">Mettre à jour</button>
            </form>
        </div>
    </div>
</div>

@endsection
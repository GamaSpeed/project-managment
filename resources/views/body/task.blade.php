@extends('dashboard')

@section('content-header')
  <br>
  <h1 class="text-center text-weight-bold">LISTES DES TACHES</h1>
@endsection

@section('task')

<div class="container">
  <div class="row my-5">
    <div class="col md-18 mx-auto">
      <div class="card my-3">
        <div class="card-header">
          <div class="text-center text-uppercase text-weight-body">
            Tâches
          </div>
        </div>
        <div class="card-body">
          <table id="myTable" class="table table-bordered table-stripped">
            <thead>
              <tr>
                <th>ID</th>
                <th>nom</th>
                <th>description</th>
                <th>status</th>
                <th>Projet</th>
                <th>Traitement</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tasks as $key => $task)
                <tr>
                  <td>{{$key+=1}}</td>
                  <td>{{$task -> name_task}}</td>
                  <td>{{$task -> task_description}}</td>
                  <td>{{$task -> task_status}}</td>
                  <td>{{$task -> projet_id}}</td>
                  <td class="d-flex justify-content-center align-items-center">
                    <a href="{{route('tasks.show', $task->id)}}" class="btn btn-sm btn-primary">
                      see
                    </a>

                    <a href="{{route('tasks.edit', $task->id)}}" class="btn btn-sm btn-info">
                      edit
                    </a>
                    <form method="POST" action="{{route('tasks.destroy', $task->id)}}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm text-dark btn-danger">
                        delete
                      </button>
                    </form>
                    
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <a class="btn btn-primary btn-sm" href="addtask">Ajouter</a>
      </div>
    </div>
  </div>
</div>
    
@endsection
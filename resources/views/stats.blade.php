@extends('dashboard')

@section('stat-task')
<div class="container">
    <div class="card row col-md-8 mx-auto text-center">
        <div class="card-header">
            <h1 class="card-title">Statistiques des tâches</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h2>Tâches actives</h2>
                        </div>
                        <div class="card-body">

                            <ul>
                                @foreach ($activeTasks as $task)
                                    <li class="bg-primary">
                                        <h1>Nom de la tache : {{$task->name_task}}</h1>
                                        (debut:{{$task->start_task}}---fin:{{$task->end_task}})
                                    </li><br><br>
                                @endforeach
                            </ul>
                            <p>Nombre : {{$activeNum}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h2>Tâches Terminées</h2>
                        </div>
                        <div class="card-body">
                            <ul>
                                @foreach ($finishedTasks as $task)
                                    <li class="bg-danger">
                                        <h1>Nom de la tahe : {{$task->name_task}}</h1>(debut:{{$task->start_task}}---fin:{{$task->end_task}})
                                    </li><br><br>
                                @endforeach
                            </ul>
                            <p>Nombre : {{$finishedNum}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h2>Tâches Restantes</h2>
                        </div>
                        <div class="card-body">
                            <ul>
                                @foreach ($remainingTasks as $task)
                                    <li class="bg-success">
                                        <h1>Nom de la tache : {{$task->name_task}}</h1>(debut:{{$task->start_task}}---fin:{{$task->end_task}})
                                    </li><br><br>
                                @endforeach
                            </ul>
                            <p>Nombre : {{$remainingNum}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@extends('dashboard')

@section('projet-header')
  <br>
  <h1 class="text-center text-weight-bold">LISTES DES PROJETS</h1>
@endsection

@section('projet')

<div class="container">
  <div class="row my-5">
    <div class="col md-18 mx-auto">
      <div class="card my-3">
        <div class="card-header">
          <div class="text-center text-uppercase text-weight-body">
            Projets
          </div>
        </div>
        <div class="card-body">
          <table id="myTable" class="table table-bordered table-stripped">
            <thead>
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">nom</th>
                <th class="text-center">description</th>
                <th class="text-center">status</th>
                <th class="text-center">Traitement</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projets as $key => $projet)
                    <tr>
                    <td>{{$key+=1}}</td>
                    <td>{{$projet -> name_project}}</td>
                    <td>{{$projet -> description}}</td>
                    <td>{{$projet -> status}}</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <a href="{{route('projets.show', $projet->id)}}" class="btn btn-sm btn-primary">
                          view
                        </a>

                        <form action="{{route('projets.destroy', $projet->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="text-dark btn btn-sm btn-danger">
                            delete
                          </button>
                        </form>
                        
                    </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <a class="btn btn-primary btn-sm" href="/projets/create">Ajouter</a>
      </div>
    </div>
  </div>
</div>
    
@endsection
@extends('dashboard')

@section('add-projet')


    <div class="container">
        <div class="card mb-20 ml-50 mr-50">
            <div class="card-header text-center">
                Ajouter un projet
            </div>
            <div class="card-body">
                <form action="{{route('projets.store')}}" method="POST">
                    @csrf
    
                    <div class="mb-3">
                        <label for="name_project" class="form-label">Nom</label>
                        <input name="name_project" type="text" class="form-control" id="name" placeholder="Nom de la tache">
                        <div id="nameId" class="form-text">Au moins 03 caractères</div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" placeholder="Description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <select name="status" class="form-select" >
                            <option selected>Select Status</option>
                            <option value="1">Debut</option>
                            <option value="2">en cours</option>
                            <option value="3">terminée</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="start" class="form-label">Debut</label>
                        <input name="start" type="date" class="form-control" id="date">
                    </div>
                    <div class="mb-3">
                        <label for="end" class="form-label">Fin</label>
                        <input name="end" type="date" class="form-control" id="description">
                    </div>
                    <button type="submit" class="btn btn-primary">Créer Projet</button>
                </form>
            </div>
        </div>
    </div>

@endsection

    
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4"> 
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Se déconnecter</button>
      </form>
    </div>

    <div class="container text-center">
  <div class="row">
    <div class="col s12">
    <h1>LISTE DES UTILISATEURS INSCRITS</h1>
    <hr>       
        <a href="/ajouter" class="btn btn-primary">Ajouter un utilisateur</a>
    <hr>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          @php
          $ide = 1;
          @endphp
            @foreach($etudiants as $etudiant)
            <tr>
                <td> {{ $ide }} </td>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->prenom }}</td>
                <td>{{ $etudiant->date_de_naissance }}</td>
                <td>
                    
                    <a href="/update-etudiant/{{ $etudiant->id }}" class="btn btn-info">Update</a>
                    <a href="/delete-etudiant/{{ $etudiant->id }}" class="btn btn-danger">Delete</a>
                    
                </td>
            </tr>
            @php
            $ide += 1;
            @endphp 
           @endforeach 
        </tbody>
    </table>
      {{ $etudiants->links() }}
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
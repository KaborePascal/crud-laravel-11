<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">
  <div class="row">
    <div class="col s12">
    <h1>MODIFIER UN UTILISATEUR</h1>
    <hr>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <ul>
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger"> {{ $error }} </li>
    @endforeach
    </ul>
   
    <form 
    action="/update/traitement" method="POST" class="mb-3"> 
    @csrf

    <input type="text" name="id" style="display: none;" value="{{ $etudiants->id}}">

    <label for="Nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" value="{{ $etudiants->nom}}">
  </div>

  <div class="mb-3">
    <label for="Prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="Prenom" name="prenom"  value="{{ $etudiants->prenom}}">
  </div>

  
  <div class="mb-3">
    <label for="date" class="form-label">Date de naissance</label>
    <input type="date" class="form-control"  name="date_de_naissance" required  value="{{ $etudiants->date_de_naissance}}">
  </div>
  
       
  </div>
  <br>   
  <button type="submit" class="btn btn-primary">MODIFIER UN UTILISATEUR</button>
</form> <br>
<a href="/etudiant" class="btn btn-danger">Revenir à la liste des utilisateurs</a>
  </div> 
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
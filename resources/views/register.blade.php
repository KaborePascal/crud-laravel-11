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
    <h1>Connexion administrateur</h1>
    <hr>

    </div>
  
   
    <form action=" {{ route('register') }}" method="POST" class="mb-3"> 
     @csrf 
    <label for="Nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

  
  <div class="mb-3">
    <label for="date" class="form-label">Date de naissance</label>
    <input type="date" class="form-control"  name="date_de_naissance" required>
  </div>
  
       
  </div>
  <br>  
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form> <br>
  </div> 
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
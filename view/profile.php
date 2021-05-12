<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
      include 'nav-dash.php';
      ?>
  <div class="col-12 w-100 d-flex justify-content-between p-4">
  
  <div class=" col-2 ">

      <ul class="list-group ">
  <a href="profile.php"><li class="list-group-item active">Profil</li></a>
  <a href="utilisa.php"><li class="list-group-item">Utlisateurs</li></a>
  <a href="garage.php"><li class="list-group-item">Garrage</li></a>
  <a href="statics.php"><li class="list-group-item">statistique</li></a>
  <a href=""><li class="list-group-item">categorie</li></a>
  <a href=""><li class="list-group-item">Corbeille</li></a>
  <a href=""><li class="list-group-item">inbox</li></a>
</ul>

</div>
      <fieldset disabled  class="col-5 p-2 " style="background-color:rgba(255, 255, 255, 0.5);border-radius:15px;">
      
  <form >
  <div class="form-group col-9 ">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control border border-primary" id="exampleFormControlInput1" >
  
  <div>
  <label for="exampleFormControlInput1">Full name</label>
    <input type="email" class="form-control border border-primary" id="exampleFormControlInput1" >
  </div>
  <div>
  <label for="exampleFormControlInput1">Phone</label>
    <input type="email" class="form-control border border-primary" id="exampleFormControlInput1" >
  </div>
  <div>
  <label for="exampleFormControlInput1">Pseudo</label>
    <input type="email" class="form-control border border-primary" id="exampleFormControlInput1" >
  </div>
  <div>
  <label for="exampleFormControlInput1">password</label>
  <div class="d-flex ">
    <input type="email" class="form-control border border-primary" id="exampleFormControlInput1" >
  
  </div>
  </div>
  </div>
  </form>
      </fieldset>

  <form class="col-4 p-2 " style="background-color:rgba(255, 255, 255, 0.5);border-radius:15px;">
  <h1 class="title text-warning">Changer mot de passe?</h1>

  <div class="form-group col-9 item-center">
    <label for="exampleFormControlInput1">votre mot de passe</label>
    <input type="email" class="form-control border border-primary" id="exampleFormControlInput1" >
  
  <div>
  <label for="exampleFormControlInput1">nouveaux mot de passe</label>
    <input type="email" class="form-control border border-primary" id="exampleFormControlInput1" >
  </div>
  <div>
  <label for="exampleFormControlInput1">confirmer le nv mot de passe</label>
  <div class="d-flex ">
    <input type="email" class="form-control border border-primary" id="exampleFormControlInput1" >
  
  </div>
  </div>
<button type="button" class="btn btn-outline-primary m-2 float-right ">changer</button>
  </div>
  </form>



  </div>
  




















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
 <?php 
 include "sessions.php";
 include "produits.php";
  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">My-Ecom</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?type=blouson">blouson</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?type=chemise">chemise</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?type=veston">veston</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php">tous</a>
        </div>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-light my-2 my-sm-0" href="#panier">Panier</a>
      <a style="margin-left: 10px;" class="btn btn-outline-light my-2 my-sm-0" href="">Login</a>
    </div>
  </div>
</nav>
<div class="container">
	<div class="row">
	<?php foreach ($produits as $k): ?>
	<div class="col-md-4 grid">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="images/<?= $k["type"].'/'.$k["photo"] ?>" alt="Card image cap"/>
				  <div class="card-body">
				  	<center>
				  		 <h6 class="card-title name"><?= $k["designation"] ?> </h6>
					  	</center>
					   <center>
					   	
					   	<b>
					   	<strike>
					   		<p class="card-text email"><?=$k["prixPromo"];  ?> </p>
					   	</strike>
					   	</b>
					   </center>
						<center> <b> <p class="card-text email"><?= $k["prixNormal"] ?> $</p>
						</b></center>
				    
				    <a  class="btn btn-dark btn-block" href="add_panier.php?id=<?= $k["reference"] ?>">Add to card</a>
				  </div>
				</div>
			</div>
		

<?php endforeach ?>
</div>
<div id="panier">
	<?php include "panier.php"; ?>
</div>

</div>
</body>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
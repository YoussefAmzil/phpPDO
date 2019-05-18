<?php 
include "conn.php";
$panier=$_SESSION['panier'];

$q="SELECT DISTINCT *  FROM produits WHERE reference in (";
foreach ($panier as $id => $qte) {
	$q.="'$id'".",";
};
$q=substr($q,0,-1);
$q.=")";

 $re=$conn->query($q);
 $p = $re->fetchAll();
 ?>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">designation</th>
      <th scope="col">Prix</th>
      <th scope="col">Qte</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  		foreach ($p as $k): 
  	 ?>
    <tr>
      <td><?= $k["designation"] ?></td>
      <td><?= $k["prixNormal"] ?></td>
      <td>1</td>
      <td>total</td>

    </tr>
<?php endforeach ?>        
  </tbody>
</table>



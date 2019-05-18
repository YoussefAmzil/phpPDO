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
 <br>
 <br>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">designation</th>
      <th scope="col">image</th>
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
      <td>
        <img src="images/<?= $k["type"].'/'.$k["photo"] ?>" width="30"; height="30">
      </td>
      <td><?= $k["prixNormal"] ?> $</td>
      <td>1</td>
      <td><?= $k["prixNormal"]*1 ?> $</td>

    </tr>
<?php endforeach ?>        
  </tbody>
</table>



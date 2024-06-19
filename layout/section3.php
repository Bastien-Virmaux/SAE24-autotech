<?php
//connexion à la bd
try {
     $mySqlConnection = new PDO('mysql:host=localhost:8889; dbname=autotech; charset=utf8', 'root', 'root');
} catch (Exception $e) {
     die('Erreur : ' . $e->getMessage());
}

$voitureRequest = "SELECT * FROM `voiture`";

$request = $mySqlConnection->prepare($voitureRequest);
$request->execute();
$resultat = $request->fetchAll($mode = PDO::FETCH_CLASS);

$resultatDecode = json_decode(json_encode($resultat), true);


?>

<!-- <pre>
     <?php
     print_r($resultat);
     ?>
</pre> -->

<section class="section sec3" id="aVendre">
     <h1 class="titleSection">Véhicule à Vendre</h1>

     <div class="containerVoiture">
          <?php foreach ($resultatDecode as $voiture) : ?>
               <div class="voitures">
                    <img class="img" src="<?php echo $voiture["img"] ?>" alt="photo de voiture">
                    <p class="nom"><?php echo $voiture["nom"] ?></p>
                    <p class="marque"><?php echo $voiture["marque"] ?></p>
                    <p class="kil"><?php echo $voiture["kilometrage"] ?></p>
                    <p class="prix"><?php echo $voiture["prix"] ?></p>
               </div>
          <?php endforeach ?>
     </div>


</section>
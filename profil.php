<?php
$nom = "KHANFIR";
$prenom = "Mariem";
$email = "mariem.khanfir@edu.isetcom.tn";
$ville = "Ariana";
$formation = "Gtic";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Profil utilisateur</title>
</head>
<body>
<h1>Profil utilisateur</h1>
<p><strong>Nom :</strong> <?= $nom ?></p>
<p><strong>Prénom :</strong> <?= $prenom ?></p>
<p><strong>Email :</strong> <?= $email ?></p>
<p>Date : <?= date("H:i:s") ?></p>
<?php
echo "<p>Bienvenue $prenom dans la formation $formation</p>";
?>
</body>

</html>

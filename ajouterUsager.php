<?php
define("MYHOST","localhost"); define("MYUSER","root"); define("MYPASS","");

$id_client=$_POST['CIN']; $NOM=$_POST['NOM']; $PRENOM=$_POST['PRENOM']; $Adress=$_POST['ADRESS'];  $tel=$_POST['TEL'];
$mail=$_POST['mail']; $statut=$_POST['STATUT'];

//Requête SQL : insertion 
if (!empty($_POST['CIN'])){//adress et nom doit etre comme attribut name 
$requete="INSERT INTO usagers VALUES ('$id_client','$NOM','$PRENOM','$Adress','$tel','$mail','$statut')";
$idcom=@mysqli_connect(MYHOST,MYUSER,MYPASS,'gestion_biblio');
$result= mysqli_query($idcom,$requete);
if(!$result)
{
echo "<h2>Erreur d'insertion \n </h2>";
}
else
{
	echo "Vous êtes enregistré.";
 }
}
else {echo "Formulaire à compléter!";
}

?>
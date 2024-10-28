<?php
define("MYHOST","localhost"); define("MYUSER","root"); define("MYPASS","");

if($_POST['envoyer']!='Enregistrer') {
	$idcom=@mysqli_connect(MYHOST,MYUSER,MYPASS,'gestion_biblio');
	$cin=mysqli_escape_string($idcom,$_POST['CIN']);
	$requete="SELECT * FROM usagers WHERE cin ='$cin'";
	$result=@mysqli_query($idcom,$requete);
	$coord=@mysqli_fetch_row($result);
	mysqli_close($idcom);
//creation du formulaire 
echo "<form action= \"". $_SERVER['PHP_SELF']."\" method=\"post\">";
echo "<fieldset>"; 
echo "<legend><b>Modifiez vos coordonnées</b></legend>";
echo "<table>";
echo "<tr><td>Nom:</td><td><input type=\"text\" name=\"NOM\" value=\"$coord[1]\"/> </td></tr></br>";
echo "<tr><td>Prenom:</td><td><input type=\"text\" name=\"PRENOM\" value=\"$coord[2]\"/> </td></tr></br>";
echo "<tr><td>adresse : </td><td><input type=\"text\" name=\"adress\" value=\"$coord[3]\"/> </td></tr></br>";
echo "<tr><td>telephone : </td><td><input type=\"text\" name=\"Tel\" value=\"$coord[4]\"/> </td></tr></br>";
echo "<tr><td>email : </td><td><input type=\"text\" name=\"email\" value=\"$coord[5]\"/> </td></tr></br>";
echo "<tr><td>statut : </td><td><input type=\"text\" name=\"statut\" value=\"$coord[6]\"/> </td></tr></br>";
echo "<tr><td><input type=\"submit\" name=\"envoyer\" value=\"Enregistrer\"></td></tr></table>";
echo "</fieldset>";
echo "<input type=\"hidden\" name=\"cin\" value=\"$cin\"/>";
echo "</form>";
}
else if(isset($_POST['NOM'])) 
{

	$CIN=$_POST['cin'];
	$nom=$_POST['NOM'];
	$prenom=$_POST['PRENOM'];
	$adresse=$_POST['adress'];
	$telephone=$_POST['Tel'];
	$mail=$_POST['email'];
	$statut=$_POST['statut'];
	
	$requet="UPDATE usagers SET `nom`='$nom',`prenom`='$prenom',
	`adresse`='$adresse',`Telephone`='$telephone',`email`='$mail',`statut`='$statut' WHERE `CIN`='$CIN' ";
	$idcom=@mysqli_connect(MYHOST,MYUSER,MYPASS,'gestion_biblio');
	$result=@mysqli_query($idcom,$requet);
	//$coord=mysqli_fetch_row($result);
	//mysqli_close($idcom);
	if (!$result){
	echo " probleme de modification ";}
	else {
	echo " la modification est reussit !";}		
}
else {
echo " modifier votre formulaire !!!";}

?>

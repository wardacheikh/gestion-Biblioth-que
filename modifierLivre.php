<?php
define("MYHOST","localhost"); define("MYUSER","root"); define("MYPASS","");

if($_POST['envoyer']!='Enregistrer') {
	$idcom=@mysqli_connect(MYHOST,MYUSER,MYPASS,'gestion_biblio');
	$id=mysqli_escape_string($idcom,$_POST['id']);
	$requete="SELECT * FROM livres WHERE id ='$id'";
	$result=@mysqli_query($idcom,$requete);
	$coord=@mysqli_fetch_row($result);
	mysqli_close($idcom);
//creation du formulaire 
echo "<form action= \"". $_SERVER['PHP_SELF']."\" method=\"post\">";
echo "<fieldset>"; 
echo "<legend><b>Modifiez les informations du livre avec id : $id </b></legend>";
echo "<table>";
echo "<tr><td>numero:</td><td><input type=\"text\" name=\"numero\" value=\"$coord[1]\"/> </td></tr></br>";
echo "<tr><td>titre:</td><td><input type=\"text\" name=\"titre\" value=\"$coord[2]\"/> </td></tr></br>";
echo "<tr><td>theme:</td><td><input type=\"text\" name=\"theme\" value=\"$coord[3]\"/> </td></tr></br>";
echo "<tr><td>auteurs  : </td><td><input type=\"text\" name=\"auteurs\" value=\"$coord[4]\"/> </td></tr></br>";
echo "<tr><td>maison d'edition : </td><td><input type=\"text\" name=\"maisonEdition\" value=\"$coord[5]\"/> </td></tr></br>";
echo "<tr><td>nombre de page : </td><td><input type=\"text\" name=\"nombrePage\" value=\"$coord[6]\"/> </td></tr></br>";
echo "<tr><td>nombre d'exemplaire : </td><td><input type=\"text\" name=\"nombreExemple\" value=\"$coord[7]\"/> </td></tr></br>";
echo "<tr><td><input type=\"submit\" name=\"envoyer\" value=\"Enregistrer\"></td></tr></table>";
echo "</fieldset>";
echo "<input type=\"hidden\" name=\"ID\" value=\"$id\"/>";
echo "</form>";
}
else if(isset($_POST['ID'])) 
{

	$id=$_POST['ID'];
	$numero=$_POST['numero'];
	$titre=$_POST['titre'];
	$theme=$_POST['theme'];
	$auteurs=$_POST['auteurs'];
	$maisonED=$_POST['maisonEdition'];
	$nbrpage=$_POST['nombrePage'];
	$nbrexemple=$_POST['nombreExemple'];
	$requet="UPDATE `livres` SET `numero`='$numero',`titre`='$titre',`Theme`='$theme',`auteurs`='$auteurs',
	         `maison_edition`='$maisonED',`nombre_pages`='$nbrpage',`nombre_exemplaires`='$nbrexemple' WHERE `id`='$id'";
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

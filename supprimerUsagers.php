<?php
define("MYHOST","localhost"); define("MYUSER","root"); define("MYPASS","");
$cin=$_POST['CIN'];
$idcom=@mysqli_connect(MYHOST,MYUSER,MYPASS,'gestion_biblio');
$requete="DELETE FROM usagers WHERE CIN ='$cin'";
$result=@mysqli_query($idcom,$requete);
mysqli_close($idcom);
if(!$result)
{
echo "<h2>Erreur de supression \n </h2>";
}
else
{
	echo "le clients est suprimer.";
 }

?>
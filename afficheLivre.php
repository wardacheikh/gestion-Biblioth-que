<?php
define("MYHOST","localhost"); define("MYUSER","root"); define("MYPASS","");
$idcom=@mysqli_connect(MYHOST,MYUSER,MYPASS,'gestion_biblio');
$requete="SELECT*FROM livres";
$result=@mysqli_query($idcom,$requete);
if(!$result)
{
echo "<h2>Erreur de selection  \n n˚";
}
else
{
$nbcolonne=mysqli_num_fields($result);
$nbrligne=mysqli_num_rows($result);
   for($i=0;$i<$nbrligne;$i++){
	 $coordon=mysqli_fetch_row($result);
	 echo "<table><tr><td>ID : </td> <td>$coordon[0]</td></tr><br>";
	 echo "<tr><td>numero : </td> <td>$coordon[1]</td></tr><br>";
	 echo "<tr><td>titre : </td> <td>$coordon[2]</td></tr><br>";
	 echo "<tr><td>theme : </td> <td>$coordon[3]</td></tr><br>";
	 echo "<tr><td>auteur : </td> <td>$coordon[4]</td></tr><br>";
	 echo "<tr><td>maison d'edition : </td> <td>$coordon[5]</td></tr><br>";
	 echo "<tr><td>nombre de page  : </td> <td>$coordon[6]</td></tr><br>";
	 echo "<tr><td>nombre d'exemplaire  : </td> <td>$coordon[7]</td></tr><br></table>";
     

 }
}
?>
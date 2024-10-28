<?php
define("MYHOST","localhost"); define("MYUSER","root"); define("MYPASS","");
$titre=$_POST['titre'];
$idcom=@mysqli_connect(MYHOST,MYUSER,MYPASS,'gestion_biblio');
$requete="SELECT * FROM livres WHERE titre='$titre'";
$result=@mysqli_query($idcom,$requete);
$coordon=@mysqli_fetch_row($result);
mysqli_close($idcom);
	//creation de la formulaire 
	 echo "<tr><td>ID : </td> <td>$coordon[0]</td></tr><br>";
	 echo "<tr><td>numero : </td> <td>$coordon[1]</td></tr><br>";
	 echo "<tr><td>titre : </td> <td>$coordon[2]</td></tr><br>";
	 echo "<tr><td>theme : </td> <td>$coordon[3]</td></tr><br>";
	 echo "<tr><td>auteur : </td> <td>$coordon[4]</td></tr><br>";
	 echo "<tr><td>maison d'edition : </td> <td>$coordon[5]</td></tr><br>";
	 echo "<tr><td>nombre de page  : </td> <td>$coordon[6]</td></tr><br>";
	 echo "<tr><td>nombre d'exemplaire  : </td> <td>$coordon[7]</td></tr><br>";
echo "</table>";
?>
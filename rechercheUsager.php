<?php
define("MYHOST","localhost"); define("MYUSER","root"); define("MYPASS","");
$CIN=$_POST['CIN'];
$idcom=@mysqli_connect(MYHOST,MYUSER,MYPASS,'gestion_biblio');
$requete="SELECT * FROM usagers WHERE CIN='$CIN' ";
$result=@mysqli_query($idcom,$requete);
$coordon=@mysqli_fetch_row($result);
mysqli_close($idcom);
	//creation de la formulaire 
	 echo "<tr><td>ID : </td> <td>$coordon[0]</td></tr><br>";
	 echo "<tr><td>NOM : </td> <td>$coordon[1]</td></tr><br>";
	 echo "<tr><td>PRENOM : </td> <td>$coordon[2]</td></tr><br>";
	 echo "<tr><td>ADRESS : </td> <td>$coordon[3]</td></tr><br>";
	 echo "<tr><td>Telephone : </td> <td>$coordon[4]</td></tr><br>";
	 echo "<tr><td>Mail : </td> <td>$coordon[5]</td></tr><br>";
	 echo "<tr><td>Statut  : </td> <td>$coordon[6]</td></tr><br>";
echo "</table>";
?>
<?php
define("MYHOST","localhost"); define("MYUSER","root"); define("MYPASS","");
$idcom=@mysqli_connect(MYHOST,MYUSER,MYPASS,'gestion_biblio');
$requete="SELECT*FROM usagers";
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
	 echo "<table border=2>";
	 echo "<tr><td>ID : </td> <td>$coordon[0]</td></tr>";
	 echo "<tr><td>NOM : </td> <td>$coordon[1]</td></tr>";
	 echo "<tr><td>PRENOM : </td> <td>$coordon[2]</td></tr>";
	 echo "<tr><td>ADRESS : </td> <td>$coordon[3]</td></tr>";
	 echo "<tr><td>Telephone : </td> <td>$coordon[4]</td></tr>";
	 echo "<tr><td>Mail : </td> <td>$coordon[5]</td></tr>";
	 echo "<tr><td>Statut  : </td> <td>$coordon[6]</td></tr>";
	 echo "</table>";
 }
}
?>
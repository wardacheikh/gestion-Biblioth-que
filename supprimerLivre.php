<?php
define("MYHOST","localhost"); define("MYUSER","root"); define("MYPASS","");

$idcom=@mysqli_connect(MYHOST,MYUSER,MYPASS,'gestion_biblio');
if (!empty($_POST['titre'])){
$titre=$_POST['titre'];
$requete="DELETE FROM livres WHERE titre ='$titre'";
$result=@mysqli_query($idcom,$requete);
mysqli_close($idcom);
if(!$result)
{
echo "<h2>Erreur de supression \n </h2>";
}
else
{
	echo "le livre est suprimer.";
 }
}
?>
<html>
<head>
</head>
<body>
<form method="post" action= "<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> supprimer un livre  : </legend>
<h6>donner le titre du livre à supprimer : <h6>
<table>
<tr>
<td><label >titre </label></td>
<td><input type ="text" name="titre"  maxlength="25" > <br></td>
</tr>
</table> 
<input type="submit" name="envoyer" value="supprimer">
</fieldset>
</form>
</body>
</html>
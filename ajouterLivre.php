
<?php
define("MYHOST","localhost"); define("MYUSER","root"); define("MYPASS","");
//Requête SQL : insertion 
if (!empty($_POST['numero']) && !empty($_POST['titre'])){//adress et nom doit etre comme attribut name 

$id=$_POST['id']; $numero=$_POST['numero']; $titre=$_POST['titre']; $theme=$_POST['theme'];  $auteurs=$_POST['auteurs'];
$maison=$_POST['maisonED']; $nbrpage=$_POST['numPage'];$nbrExemple=$_POST['numExemple'];
$requete="INSERT INTO livres VALUES ('$id','$numero','$titre','$theme','$auteurs','$maison','$nbrpage','$nbrExemple')";
$idcom=@mysqli_connect(MYHOST,MYUSER,MYPASS,'gestion_biblio');
$result= mysqli_query($idcom,$requete);
if(!$result)
{
echo "<h2>Erreur d'insertion \n </h2>";
}
else
{
	echo "livre est enregistré.";
 }
}
else {echo "Formulaire à compléter!";
}

?>


<html>
<head>
<title></title>
  <meta charset="utf-8">
  <form method="post" action= "<?php echo $_SERVER['PHP_SELF'];?>" >

</head>
<body>
<form>
 <div class="form-group">
    <label> id :</label>
    <input class="form-control" type="text" name="id" value="">
  </div>
  <div class="form-group">
    <label>numero :</label>
    <input class="form-control" type="text" name="numero" value="">
  </div>
  <div class="form-group">
    <label>titre :</label>
    <input class="form-control" type="text" name="titre" value="">
  </div>
  <div class="form-group">
    <label>theme :</label>
    <input class="form-control" type="text" name="theme" value="">
  </div>
  <div class="form-group">
    <label>auteurs :</label>
    <input class="form-control" type="text" name="auteurs" value="">
  </div>
  <div class="form-group">
    <label>maison d'edition  :</label>
    <input class="form-control" type="text" name="maisonED" value="">
  </div>
   <div class="form-group">
    <label>nombre de page :</label>
    <input class="form-control" type="text" name="numPage" value="">
  </div>
  <div class="form-group">
    <label>nombre d'exemplaire :</label>
    <input class="form-control" type="text" name="numExemple" value="">
  </div>
  <div class="text-center">
    <input  class="btn bgViolet" type="submit" name="Ajouter" value="Ajouter">
  </div>
</form>
	<a href="Gestion_biblio.html" >Home </a>
</body>
</html>

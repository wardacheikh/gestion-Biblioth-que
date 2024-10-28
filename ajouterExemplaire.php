<?php
define("MYHOST","localhost");
define("MYUSER","root");
define("MYPASS","");
$idcom = @mysqli_connect(MYHOST, MYUSER, MYPASS, 'gestion_biblio');

$titre = $_POST['titre'];
$requete = "SELECT * FROM livres WHERE titre ='$titre'";
$result = mysqli_query($idcom, $requete);

if (!$result) {
    echo "Le livre avec le titre \"$titre\" n'existe pas !";
} else {
    $nbrExemplaire = $_POST["nbrExemplaire"];
    $requete = "UPDATE livres SET nombre_exemplaires = nombre_exemplaires + '$nbrExemplaire' WHERE titre ='$titre'";
    $result = mysqli_query($idcom, $requete);

    if (!$result) {
        echo "Erreur lors de l'ajout de l'exemplaire.";
    } else {
        echo "L'exemplaire a été ajouté avec succès.";
    }
}

mysqli_close($idcom);
?>

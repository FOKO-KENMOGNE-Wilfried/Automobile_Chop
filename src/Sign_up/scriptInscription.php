<?php

// PDO
$bdd = new PDO('mysql:host=localhost;dbname=automobile;charset=utf8', 'root', '');

// User information
$nom = $_POST['Nom'];
$premon = $_POST['Prenom'];
$email = $_POST['email'];
$mot_de_passe = $_POST['password'];
$pays = $_POST['country'];
$ville = $_POST['city'];
$quartier = $_POST['quartier'];
$numero_telephone = $_POST['phone'];

// Verification of the existence of user information
$userCollect = $bdd->prepare("SELECT * FROM users WHERE email = :email");
$userCollect->bindValue(":email", $email);
$userCollect->execute();

$result = $userCollect->fetch(PDO::FETCH_ASSOC);
print $result;

if($result){

    print '<script>alert("The user already exist")</script>';

} else {

    // Requete preparee pour empecher les injections SQL
    $requete = $bdd->prepare("INSERT INTO users (name, surname, email, password, country, ville, quartier, numero_telephone) VALUES( :name, :surname, :email, :password, :country, :ville, :quartier, :numero_telephone )");

    $requete->bindValue(':name', $nom, PDO::PARAM_STR);
    $requete->bindValue(':surname', $premon, PDO::PARAM_STR);
    $requete->bindValue(':email', $email, PDO::PARAM_STR);
    $requete->bindValue(':password', $mot_de_passe, PDO::PARAM_STR);
    $requete->bindValue(':country', $pays, PDO::PARAM_STR);
    $requete->bindValue(':ville', $ville, PDO::PARAM_STR);
    $requete->bindValue(':quartier', $quartier, PDO::PARAM_STR);
    $requete->bindValue(':numero_telephone', $numero_telephone, PDO::PARAM_STR);
    $requete->execute();

    header("Location: ../Home/index.html");
    exiit();

}

?>
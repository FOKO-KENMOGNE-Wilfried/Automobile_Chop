<?php

// PDO
$bdd = new PDO('mysql:host=localhost;dbname=automobile;charset=utf8', 'root', '');

// User information
$email = $_POST['email'];
$mot_de_passe = $_POST['password'];

// Verification of the existence of user information
$userCollect = $bdd->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
$userCollect->bindValue(":email", $email);
$userCollect->bindValue(":password", $mot_de_passe);
$userCollect->execute();

$result = $userCollect->fetch(PDO::FETCH_ASSOC);

if($result){

    // Redirection of the user to the home page
    header("Location: ../Home/index.html");
    exiit();

} else {

    print '<script>alert("The user not exist")</script>';

}


$requete->execute();
?>
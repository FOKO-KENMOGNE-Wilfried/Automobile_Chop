<?php

// PDO
$bdd = new PDO('mysql:host=localhost;dbname=automobile;charset=utf8', 'root', '');

// User information
$email = $_POST['email'];
$mot_de_passe = $_POST['password'];

// Collect of the name of user
$surnameCollect = $bdd->prepare("SELECT * FROM users WHERE email = :email");
$surnameCollect->bindValue(":email", $email);
$surnameCollect->execute();

$surname = $surnameCollect->fetch(PDO::FETCH_ASSOC);

// Verification of the existence of user information
$userCollect = $bdd->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
$userCollect->bindValue(":email", $email);
$userCollect->bindValue(":password", $mot_de_passe);
$userCollect->execute();

$result = $userCollect->fetch(PDO::FETCH_ASSOC);

if($result){

    // Create a cookies
    setcookie(
        "LOGGED_USER",
        $surname["name"],
        time() + 365*24*3600,
        '/',
    );

    // Redirection of the user to the home page
    header("Location: ../Home/index.php");
    exit();

} else {

    print '<script>alert("The user not exist")</script>';

}


$requete->execute();
?>
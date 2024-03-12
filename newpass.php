<?php
if (isset($_POST['submit'])){
    include './pages/conixion.php';
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $requete = "SELECT * FROM users WHERE Username = '$username' and Email = '$email'";
    $statment = $con -> prepare($requete);
    $statment -> execute();
    $result = $statment -> fetch();
    if ($username == $result['Username'] && $email == $result['Email']){
        header("location:newpass.php");
        echo $result['Username'];
        echo $result['Email'];
    }
    }
?>
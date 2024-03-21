<?php

if(isset($_POST['update'])){
    include 'conixion.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
   
    if(isset($_SESSION['email'])) { 
        $requete = "UPDATE users SET username = '$username', Email = '$email', pass = '$password' WHERE Email = '".$_SESSION['email']."'";
        $statment = $con -> prepare($requete);
        $statment -> execute();

        if ($statment) {
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $password;
            
            header("location:dashboard.php");
        } else {
            header("location:update_profile.php?error=Failed to update");
        }
    } else {
        echo "Erro: Email de sessão não definido";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        .password-icon {
            position: relative;
        }
        .password-icon .fa {
            position: absolute;
            top: 35px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px">
        <?php 
            include "component/header.php";
        ?>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <h2>Perfil do administrador</h2>
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username">Usuario:</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                        </div>
                        <div class="form-group mb-3 password-icon">
                            <label for="pass">Senha:</label>
                            <input type="password" class="form-control" id="pass" name="pass" value="<?php echo $_SESSION['password']; ?>">
                            <i id="togglePassword" class="fa fa-eye"></i>
                        </div>
                        <div class="form-group mb-3">
                        <button type="submit" name="update" class="btn btn-primary mb-3">Atualizar perfil</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#togglePassword').click(function() {
            if ($('#pass').attr('type') === 'password') {
                $('#pass').attr('type', 'text');
                $('#togglePassword').removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                $('#pass').attr('type', 'password');
                $('#togglePassword').removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
    });
    </script>
</body>
</html>


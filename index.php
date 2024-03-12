<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sing-in</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
   
</head>
<body>
   <main class="bg-sign-in d-flex justify-content-center align-items-center">
      <div class=" form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-2 pe-4 ps-4 d-flex flex-column">
        <h1 class="E-classe text-start ms-3 ps-1" >AdminClass</h1>
        <div>
          <h2 class=" sign-in text-uppercase">Login</h2>
        <p>Insira suas credenciais para acessar sua conta</p>
        </div>
        <?php

          if(isset($_GET['error'])){
            if($_GET['error'] == "please enter your email or password"){
              echo '<div sclass="alert alert-danger" role="alert">
            please enter your email or password
          </div>';
            }
            elseif($_GET['error'] == "email or password not found"){
              echo '<div class="alert alert-danger" role="alert">
              email or password not found
          </div>';
            }
          }    
        ?>
        <form method="POST" action="login.php">
          <div class="mb-3 mt-3 text-start">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Coloque seu email" name="email" value="<?php  if(isset($_COOKIE['email'])){echo $_COOKIE['email']; }?>">
          </div>
          <div class="mb-3 text-start">
            <label for="pwd">Senha:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Coloque sua senha" name="pass" value="<?php  if(isset($_COOKIE['password'])){echo $_COOKIE['password']; }?>" autocomplete="on">
          </div>
          <div class="mb-3 form-check d-flex gap-2">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">Lembre de mim</label>
  </div>
          <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">Login</button>
          <p class="mt-4">Esqueceu a senha? <a href="resetpass.php">Recuperar a senha</a></p>
          
        </form>
        <button href="" class="btn-register btn btn-success mb-3">Criar conta</button>

     </div>

   </main>

          <div class="bg"></div>

   <div class="register d-flex justify-content-center align-items-center">
   <div class="sign-up bg-white mt-2 h-auto mb-2 text-center pt-4 pb-3 pe-4 ps-4 d-flex flex-column">
       <div>
           <h2 class=" sign-in text-uppercase">Cadastro</h2>
       </div>
       <form method="POST" id="signup" action="createaccout.php">
           <div class="mb-3 mt-3 text-start">
               <label class="label-signup" for="username">Úsuario: <span class="valid"></span></label>
               <input type="text" class="form-control" id="username" placeholder="Coloque seu nome de úsuario" name="username">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="email">Email: <span class="valid"></span></label>
               <input type="email" class="form-control" id="Email" placeholder="Coloque seu Email" name="email">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="pwd">Criar senha: <span class="valid"></span></label>
               <input type="password" class="form-control" id="Pwd" placeholder="Coloque sua senha" name="pass" autocomplete="on">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="conPwd">Cofirmar senha: <span class="valid"></span></label>
               <input type="password" class="form-control" id="conPwd" placeholder="Cofirmar senha" name="conPass" autocomplete="on">
           </div>
           <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">Cadastrar</button>
           <p class="mt-4">Tem uma conta cadastrada? <a href="index.php">sign-in</a></p>
       </form>
   </div>
   </div>
   <script src="/js/bootstrap.bundle.js"></script>
   <script src="./js/validation.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <style>
        .about-text {
            margin: 20px;
        }
    </style>
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- inicio sidebar -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- fim sidebar -->

        <!-- inicio corpo -->
        <div class="container-fluid px">
        <?php 
            include "component/header.php";
        ?>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 text-center">
                    <h1 class="display-4">Sobre o projeto</h1>
                </div>
                
                <div class="col-md-8 about-text">
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero adipisci eveniet beatae reprehenderit suscipit temporibus veniam ducimus rem, expedita 
                        tenetur, hic enim magnam quisquam architecto repellendus fuga error quae?</p>

                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero adipisci eveniet beatae reprehenderit suscipit temporibus veniam ducimus rem, expedita 
                        tenetur, hic enim magnam quisquam architecto repellendus fuga error quae?</p>

                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
   
                <div class="col-md-8 ">
                    <a href="https://github.com/SAMUKISZHSD/CrudStudents" class="btn btn-primary">Código fonte</a>
                </div>
            </div>

            <!-- inicio section time de desenvolvedores -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 text-center">
                    <h1 class="display-4">Time de Desenvolvedores</h1>
                </div>
                
                <!-- inicio card desenvolvedores-->
                <div class="col-md-8 about-text">
                    <div class="card">
                      
                        <div class="card-body">
                            <h5 class="card-title">Nome do Desenvolvedor</h5>
                            <p class="card-text">Descrição do Desenvolvedor</p>
                            <a href="github_link" class="btn btn-primary"><i class="fab fa-github"></i></a>
                            <a href="linkedin_link" class="btn btn-primary"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                 <!-- inicio card desenvolvedores -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 text-center">
                  
                </div>
                
                <!-- inicio card desenvolvedores -->
                <div class="col-md-8 about-text">
                    <div class="card">
                      
                        <div class="card-body">
                            <h5 class="card-title">Nome do Desenvolvedor</h5>
                            <p class="card-text">Descrição do Desenvolvedor</p>
                            <a href="github_link" class="btn btn-primary"><i class="fab fa-github"></i></a>
                            <a href="linkedin_link" class="btn btn-primary"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>


                     <!-- inicio card desenvolvedores -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 text-center">
                  
                </div>
                
                <!-- inicio card desenvolvedores -->
                <div class="col-md-8 about-text">
                    <div class="card">
                     
                        <div class="card-body">
                            <h5 class="card-title">Nome do Desenvolvedor</h5>
                            <p class="card-text">Descrição do Desenvolvedor</p>
                            <a href="github_link" class="btn btn-primary"><i class="fab fa-github"></i></a>
                            <a href="linkedin_link" class="btn btn-primary"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
    </main>
    
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>

</body>
</html>

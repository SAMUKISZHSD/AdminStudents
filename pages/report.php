<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px-4">
        <?php 
            include "component/header.php";
            include 'conixion.php';
            $statement = $con->prepare("SELECT * FROM students_list");
            $statement->execute();
            $students = $statement->fetchAll(PDO::FETCH_ASSOC);
            $nbr_students = $con->query("SELECT * FROM students_list");
            $nbr_students = $nbr_students->rowCount();
        ?>
        <div class="student-list-header d-flex justify-content-between align-items-center py-2">
            <div class="title h6 fw-bold">Alunos cadastrados</div>
            <a href="generete_report.php" class="btn btn-primary">Baixar report</a>
        </div>
        <div class="table-responsive">
            <table class="table student_list table-borderless">
                <thead>
                    <tr class="align-middle">
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Número de matrícula</th>
                        <th>Data de matrícula</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr class="bg-white align-middle">
                            <td><?php echo $student['Id']; ?></td>
                            <td><?php echo $student['Name']; ?></td>
                            <td><?php echo $student['Email']; ?></td>
                            <td><?php echo $student['Phone']; ?></td>
                            <td><?php echo $student['EnrollNumber']; ?></td>
                            <td><?php echo $student['DateOfAdmission']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        
     <!--    <div class="card">
    <div class="card-body">
        <h5 class="card-title">Painel de Controle</h5>
        <canvas id="myChart"></canvas>
    </div> -->
        
        </div>
        <!-- end content page -->

    </main>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Alunos e administradores'],
            datasets: [
                {
                    label: 'Alunos',
                    data: [<?php echo $nbr_students; ?>],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Adminstrador',
                    data: [1], // Valor fixo para Administrador
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
    
</body>
</html>

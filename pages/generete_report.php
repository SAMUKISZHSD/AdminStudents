<?php
require_once '../dompdf/vendor/autoload.php';
include 'conixion.php';

$dompdf = new Dompdf\Dompdf();

$statement = $con->prepare("SELECT * FROM students_list");
$statement->execute();
$students = $statement->fetchAll(PDO::FETCH_ASSOC);

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        ' . file_get_contents('../css/bootstrap.css') . '
        ' . file_get_contents('../css/style.css') . '
    </style>
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <div class="container-fluid px-4">
        <div class="student-list-header d-flex justify-content-between align-items-center py-2">
            <div class="title h6 fw-bold">Alunos cadastrados</div>
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
                <tbody>';

foreach ($students as $student) {
    $html .= '<tr class="bg-white align-middle">
                <td>' . $student['Id'] . '</td>
                <td>' . $student['Name'] . '</td>
                <td>' . $student['Email'] . '</td>
                <td>' . $student['Phone'] . '</td>
                <td>' . $student['EnrollNumber'] . '</td>
                <td>' . $student['DateOfAdmission'] . '</td>
              </tr>';
}

$html .= '    </tbody>
            </table>
        </div>
        </div>
    </main>
</body>
</html>';

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream();
?>

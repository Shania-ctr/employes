<?php
// lien question3.1
include("fonction.php");
$id_emp = $_GET['num_emp'];
$emp = get_employee($id_emp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="bootstrap/font/bootstrap-icons.css">
    <link rel="stylesheet"  href="style.css">
    <title>Employe</title>
</head>
<body>

<div class="container mt-4">
    <h1 class="text-center mb-5">Fiche de l'employe <?= $id_emp ?></h1>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Num</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Naissance</th>
                <th>Age</th>
                <th>Num departement</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emp as $emp_chacun) : ?>
            <tr>
                <td><?php echo htmlspecialchars($emp_chacun['Num_emp']); ?></a></td>
                <td><?php echo htmlspecialchars($emp_chacun['Nom_emp']); ?></td>
                <td><?php echo htmlspecialchars($emp_chacun['Prenom_emp']); ?></td>
                <td><?php echo htmlspecialchars($emp_chacun['Naissance']); ?></td>
                <td><?php echo htmlspecialchars($emp_chacun['age']); ?></td>
                <td><?php echo htmlspecialchars($emp_chacun['Num_dep']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
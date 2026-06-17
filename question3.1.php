<?php
// lien question1.1
include("fonction.php");
$dep = $_GET['dep'];
$liste_emp = get_liste_employee($dep);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="bootstrap/font/bootstrap-icons.css">
    <link rel="stylesheet"  href="style.css">
    <title>LISTE</title>
</head>
<body>

<div class="container mt-4">
    <h1 class="text-center mb-5">Liste des employees du departement <?= $dep ?></h1>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Num employee</th>
                <th>Num departement</th>
                <th>Nom employee</th>
                <th>Prenom employee</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($liste_emp as $liste_emp_chacun) : ?>
            <tr>
                <td><a href="question2.2.php?num_emp=<?= $liste_emp_chacun['Num_emp'] ?>"><?php echo htmlspecialchars($liste_emp_chacun['Num_emp']); ?></a></td>
                <td><?php echo htmlspecialchars($liste_emp_chacun['Num_dep']); ?></td>
                <td><?php echo htmlspecialchars($liste_emp_chacun['Nom_emp']); ?></td>
                <td><?php echo htmlspecialchars($liste_emp_chacun['Prenom_emp']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
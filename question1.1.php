<?php
include("fonction.php");
$liste_dep = get_liste_departements();
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
    <h1 class="text-center mb-5">Liste des departements</h1>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Num département</th>
                <th>Nom département</th></tr>
        </thead>
        <tbody>
            <?php foreach ($liste_dep as $liste_dep_chacun) : ?>
            <tr>
                <td><a href="question3.1.php?dep=<?= $liste_dep_chacun['dept_no']; ?>"><?php echo htmlspecialchars($liste_dep_chacun['dept_no']); ?></a></td>
                <td><?php echo htmlspecialchars($liste_dep_chacun['dept_name']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div></body>
</html>
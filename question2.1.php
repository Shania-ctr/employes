<?php
include("fonction.php");
$liste_dep = get_liste_departements();
$liste_current_manager = get_liste_current_manager();
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
    <h1 class="text-center mb-5">Liste des Manager en cours</h1>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Num département</th>
                <th>Nom département</th>
                <th>Manager en cours</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($liste_current_manager as $liste_current_manager_chacun) : ?>
            <tr>
                <td><?php echo htmlspecialchars($liste_current_manager_chacun['Num_dep']); ?></td>
                <td><?php echo htmlspecialchars($liste_current_manager_chacun['Nom_dep']); ?></td>
                <td><?php echo htmlspecialchars($liste_current_manager_chacun['Nom']) . " " . htmlspecialchars($liste_current_manager_chacun['Prenom']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div></body>
</html>
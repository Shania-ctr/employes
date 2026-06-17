<?php
include("fonction.php");
$nb_emp_m = get_count_emp_par_sex('M');
$nb_emp_f = get_count_emp_par_sex('F');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employe femme / homme</title>
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="bootstrap/font/bootstrap-icons.css">

</head>
<body>

<div class="container mt-4">
    <h1 class="text-center mb-5">Liste des departements</h1>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nombre d'employe Homme</th>
                <th>Nombre d'employe Femme</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo htmlspecialchars($nb_emp_m[0]['nombre']); ?></a></td>
                <td><?php echo htmlspecialchars($nb_emp_f[0]['nombre']); ?></td>
            </tr>
        </tbody>
    </table>
</div>
</body>

</html>
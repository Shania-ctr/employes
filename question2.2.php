abcd
klmn
<?php
//lien question3.1
include("fonction.php");
$id_emp = $_GET['num_emp'];
$emp = get_employee($id_emp);
$salaire = get_salaire_employee($id_emp);
$emploi = get_emploi_employee($id_emp);
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
    <table class="table table-bordered table-striped table-hover mb-5">
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
            <tr>
                <td><?php echo htmlspecialchars($emp[0]['Num_emp']); ?></td>
                <td><?php echo htmlspecialchars($emp[0]['Nom_emp']); ?></td>
                <td><?php echo htmlspecialchars($emp[0]['Prenom_emp']); ?></td>
                <td><?php echo htmlspecialchars($emp[0]['Naissance']); ?></td>
                <td><?php echo htmlspecialchars($emp[0]['age']); ?></td>
                <td><?php echo htmlspecialchars($emp[0]['Num_dep']); ?></td>
            </tr>
        </tbody>
    </table>

    <hr class="border-dark border-3 opacity-50">
    <div class="row">
        
        <div class="col-md-6 mb-4">
            <h3 class="mb-3">Historique de salaire</h3>
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Debut salaire</th>
                        <th>Fin salaire</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($salaire as $emp_chacun) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($emp_chacun['debut_salaire']); ?></td>
                        <td><?php echo htmlspecialchars($emp_chacun['fin_salaire']); ?></td>
                        <td><?php echo htmlspecialchars($emp_chacun['prix_salaire']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="col-md-6 mb-4">
            <h3 class="mb-3">Historique d'emploi</h3>
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Debut emploi</th>
                        <th>Fin emploi</th>
                        <th>emploi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($emploi as $emp_chacun) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($emp_chacun['debut_emploi']); ?></td>
                        <td><?php echo htmlspecialchars($emp_chacun['fin_emploi']); ?></td>
                        <td><?php echo htmlspecialchars($emp_chacun['emploi']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
    </div>

</body>
</html>
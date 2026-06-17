<?php
// lien question3.2
session_start();
include("fonction.php");

if (empty($_GET['age_min'])) $_GET['age_min'] = 0;
if (empty($_GET['age_min'])) $_GET['age_max'] = 100;

if (!empty($_GET['departement'])){
    $_SESSION['dep'] = $_GET['departement'];
    $_SESSION['nom_emp'] = $_GET['nom_employe'];
    $_SESSION['prenom_emp'] = $_GET['prenom_employe'];
    $_SESSION['age_min'] = $_GET['age_min'];
    $_SESSION['age_max'] = $_GET['age_max'];    
    $result = get_formulaire($_SESSION['dep'] , $_SESSION['nom_emp'] 
    , $_SESSION['prenom_emp'] , $_SESSION['age_min'] , $_SESSION['age_max']);
    echo count($result);
}
$limit = 20;
$saut_actuel = 0;

if (isset($_GET['saut'])){
    $saut_actuel = $_GET['saut'];
    $limit = $_GET['limit'];
    $dep = $_SESSION['dep'];
    $nom_emp = $_SESSION['nom_emp'];
    $prenom_emp = $_SESSION['prenom_emp'];
    $age_min = $_SESSION['age_min'];
    $age_max = $_SESSION['age_max'];    
    $result = get_formulaire_lien($dep , $nom_emp , $prenom_emp , $age_min , $age_max , $saut_actuel , $limit);
    }

$saut_precedent = $saut_actuel - $limit;
$saut_suivant = $saut_actuel + $limit;
if ($saut_precedent < 0) $saut_precedent = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="bootstrap/font/bootstrap-icons.css">
    <link rel="stylesheet"  href="style.css">
    <title>Resultat</title>
</head>
<body>

<div class="container mt-4">
    <div class="d-flex justify-content-center gap-3 mb-4">
        <a href="question4.2.php?saut=<?= $saut_precedent ?>&limit=20" class="btn btn-outline-dark">
            <i class="bi bi-arrow-left me-2"></i>Voir les 20 lignes précédentes
        </a>        
        <a href="question4.2.php?saut=<?= $saut_suivant ?>&limit=20" class="btn btn-outline-dark">
            Voir les 20 lignes suivantes<i class="bi bi-arrow-right ms-2"></i>
        </a>
    </div>

    <h1 class="text-center mb-5">Liste des employees du departement <?= $_SESSION['dep'] ?></h1>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Num_employee</th>
                <th>Num_departement</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $result_chacun) : ?>
            <tr>
                <td><?php echo htmlspecialchars($result_chacun['Num_emp']); ?></td>
                <td><?php echo htmlspecialchars($result_chacun['Num_dep']); ?></td>
                <td><?php echo htmlspecialchars($result_chacun['Nom_emp']); ?></td>
                <td><?php echo htmlspecialchars($result_chacun['Prenom_emp']); ?></td>
                <td><?php echo htmlspecialchars($result_chacun['age']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
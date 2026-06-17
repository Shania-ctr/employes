<?php
include("fonction.php");
$liste_emp = get_all_liste_employee();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="bootstrap/font/bootstrap-icons.css">
    <link rel="stylesheet"  href="style.css">
    <title>Formulaire</title>
</head>
<body>

<div class="container mt-5">
    <div class="card shadow-sm mx-auto" style="max-width: 600px;">
        <div class="card-header bg-dark text-white text-center py-3">
            <h5 class="mb-0"><i class="bi bi-search me-2"></i>Formulaire de recherche d'employés</h5>
        </div>
        <div class="card-body p-4">
            
            <form action="question4.2.php" method="get">
                
                <div class="mb-3">
                    <label class="form-label fw-bold">Département</label>
                    <select name="departement" class="form-select">
                        <option value=""></option>
                    <?php foreach($liste_emp as $liste_emp_chacun) {?>
                        <option value="<?= $liste_emp_chacun['dept_no'] ?>"><?= $liste_emp_chacun['dept_no'] ?></option>
                    <?php }?>
                    </select>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Nom</label>
                        <input type="text" name="nom_employe" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Prénom</label>
                        <input type="text" name="prenom_employe" class="form-control">
                    </div>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Âge minimum</label>
                        <input type="number" name="age_min" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Âge maximum</label>
                        <input type="number" name="age_max" class="form-control">
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-dark py-2">
                        <i class="bi bi-search me-2"></i>Rechercher
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

</body>
</html>
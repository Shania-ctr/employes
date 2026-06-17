<?php
function dbconnect()
{
    static $connect = null;

    if ($connect === null) {
        $connect = mysqli_connect('localhost', 'root', '', 'employees');

        if (!$connect) {
            die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
        }

        mysqli_set_charset($connect, 'utf8mb4');
    }

    return $connect;
}

function get_liste_departements()
{
    $sql =" SELECT * FROM departments order by dept_no";
    $users_req = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($user = mysqli_fetch_assoc($users_req)) {
        $result[] = $user;
    }
    mysqli_free_result($users_req);
    return $result;
}

function get_liste_current_manager()
{
    $sql =" SELECT * FROM v_nom_manager";
    $users_req = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($user = mysqli_fetch_assoc($users_req)) {
        $result[] = $user;
    }
    mysqli_free_result($users_req);
    return $result;
}


function get_all_liste_employee(){
    $sql =" SELECT * FROM departments group by dept_no";
    $users_req = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($user = mysqli_fetch_assoc($users_req)) {
        $result[] = $user;
    }
    mysqli_free_result($users_req);
    return $result;
}


function get_liste_employee($dep){
    $sql ="SELECT * from v_employe where `Num_dep` = '$dep' group by `Num_emp`";
    $users_req = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($user = mysqli_fetch_assoc($users_req)) {
        $result[] = $user;
    }
    mysqli_free_result($users_req);
    return $result;
}

function get_employee($num_e){
    $sql =" SELECT * FROM v_employe where Num_emp = '$num_e'";
    $users_req = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($user = mysqli_fetch_assoc($users_req)) {
        $result[] = $user;
    }
    mysqli_free_result($users_req);
    return $result;
}

function get_salaire_employee($num_e){
    $sql ="SELECT * FROM v_employe where Num_emp = '$num_e' group by debut_salaire;";
    $users_req = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($user = mysqli_fetch_assoc($users_req)) {
        $result[] = $user;
    }
    mysqli_free_result($users_req);
    return $result;
}

function get_emploi_employee($num_e){
    $sql ="SELECT * FROM v_employe where Num_emp = '$num_e' group by emploi;";
    $users_req = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($user = mysqli_fetch_assoc($users_req)) {
        $result[] = $user;
    }
    mysqli_free_result($users_req);
    return $result;
}


function get_formulaire($dep , $nom_emp , $prenom_emp , $age_min , $age_max ){
    $sql =" SELECT * FROM v_employe where Num_dep = '$dep' AND (Nom_emp LIKE '%$nom_emp%') 
    AND (Prenom_emp LIKE '%$prenom_emp%') AND (age > $age_min AND age < $age_max) 
    group by `Num_emp` LIMIT 20" ;
    $users_req = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($user = mysqli_fetch_assoc($users_req)) {
        $result[] = $user;
    }
    mysqli_free_result($users_req);
    return $result;
}

function get_formulaire_lien($dep , $nom_emp , $prenom_emp , $age_min , $age_max , $saut , $limit){
    $sql =" SELECT * FROM v_employe where Num_dep = '$dep' AND (Nom_emp LIKE '%$nom_emp%') 
    AND (Prenom_emp LIKE '%$prenom_emp%') AND (age > $age_min AND age < $age_max) 
    group by `Num_emp` LIMIT $saut , $limit" ;
    $users_req = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($user = mysqli_fetch_assoc($users_req)) {
        $result[] = $user;
    }
    mysqli_free_result($users_req);
    return $result;
}

function get_count_emp_par_sex($sex){
    $sql ="SELECT count(emp_no) as nombre FROM employees where gender = '$sex'";
    $users_req = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($user = mysqli_fetch_assoc($users_req)) {
        $result[] = $user;
    }
    mysqli_free_result($users_req);
    return $result;
}

?>
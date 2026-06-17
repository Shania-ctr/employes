index.php
    - html
        - Table (liste des departements -> dept_no, dept_name)
        - lien vers employe de chaque departement (question3.1.php)
    - css
        - bootstrap
    - php
        - boucle foreach des departements
    - fonction 
        - get_liste_departements()

question2.1.php (question 2 / version 1)
    - html
        - Table (liste des managers en cours -> Num_dep , Nom_dep , Nom , Prenom)
    - css
        - bootstrap
    - php
        - boucle foreach des managers
    - fonction 
        - get_liste_current_manager()

question3.1.php (question 3 / version 1)
    - html
        - Titre dynamique (Nom du departement actuel)
        - Table (liste des employees -> Num_emp , Num_dep , Nom_emp , Prenom_emp)
        - lien vers la fiche detaillee de l'employe ( question2.2.php )
    - css
        - bootstrap
    - php
        - recuperer le parametre GET['dep']
        - boucle foreach des employes du departement
    - fonction 
        - get_liste_employee($dep)

question1.2.php (question 1 / version 2)
    - html
        - Table (fiche de l'employe simple -> Num_emp, Nom_emp, Prenom_emp, Naissance, age, Num_dep)
    - css
        - bootstrap
    - php
        - recuperer le parametre GET['num_emp']
        - boucle foreach de chaque employe
    - fonction 
        - get_employee($id_emp)

question2.2.php (question 2 / version 2)
    - html
        - Table (fiche d'identite de l'employe -> Num_emp, Nom_emp, Prenom_emp, Naissance, age, Num_dep)
        - Table Historique de salaire (debut_salaire, fin_salaire, prix_salaire)
        - Table Historique d'emploi (debut_emploi, fin_emploi, emploi)
    - css
        - bootstrap (systeme de colonnes row/col-md-6)
    - php
        - recuperer le parametre GET['num_emp']
        - cibler l'index [0] pour la fiche d'identite (index de l'employe choisi dans le lien)
        - boucle foreach de salaire (pour l'historique des salaires)
        - boucle foreach de l'emploi (pour l'historique des emplois)
    - fonctions 
        - get_employee($id_emp)
        - get_salaire_employee($id_emp)
        - get_emploi_employee($id_emp)

question3.2.php (question 3 / version 2)
    - html
        - Formulaire de recherche d'employes
        - select (departement)
        - input text (nom_employe)
        - input text (prenom_employe)
        - input number (age_min)
        - input number (age_max)
        - input valider (Rechercher)
    - css
        - bootstrap (composant card, form-control, form-select)
    - php
        - boucle foreach pour remplir le select des departements
    - fonction 
        - get_all_liste_employee()

question4.2.php (question 4 / version 2)
    - html
        - Table (liste des resultats de recherche -> Num_emp, Num_dep, Nom_emp , Prenom_emp , age)
        - lien (Voir les 20 lignes precedentes)
        - lien (Voir les 20 lignes suivantes)
    - css
        - bootstrap 
    - php
        - session_start()
        - verifier et initialiser les parmetres par defaut (age_min, age_max)
        - if (formulaire soumis via GET) -> enregistrer en SESSION et appeler get_formulaire()
        - if (navigation via lien GET['saut']) -> recuperer la SESSION et appeler get_formulaire_lien()
        - calcul des variables de saut ($saut_precedent , $saut_suivant)
        - boucle foreach pour afficher les 20 lignes de resultats
    - fonctions s
        - get_formulaire($dep, $nom, $prenom, $min, $max)
        - get_formulaire_lien($dep, $nom, $prenom, $min, $max, $saut, $limit)

fonction.php
    -dbconnect()
        |-> Initialise la connexion avec la base de données 'employees' (ou test_db)

    -get_liste_departements()
        |-> Recupere la liste complete de tous les departements

    -get_liste_current_manager()
        |-> Recupere les départements avec le nom et prenom de leur manager actuel(to_date = '9999-01-01')

    -get_liste_employee($dep)
        |-> Recupere la liste des employes appartenant a un departement specifique ($dep)

    -get_employee($id_emp)
        |-> Recupere les informations personnelles d'un employe precis (Nom, Prenom, Naissance, Age calcule)

    -get_salaire_employee($id_emp)
        |-> Recupere l'historique complet des salaires (dates et montants) d'un employe precis

    -get_emploi_employee($id_emp)
        |-> Recupere l'historique complet des postes occupes par un employe precis

    -get_all_liste_employee()
        |-> Recupere la liste de tous les numeros de departements existants pour alimenter le select du formulaire

    -get_formulaire($dep, $nom, $prenom, $min, $max)
        |-> Execute la recherche initiale avec les filtres et renvoie tous les resultats correspondants (pour faire le count)

    -get_formulaire_lien($dep, $nom, $prenom, $min, $max, $saut, $limit)
        |-> Execute la meme recherche mais applique un LIMIT et un OFFSET ($saut) pour la pagination des 20 lignes
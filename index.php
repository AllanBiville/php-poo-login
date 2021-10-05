<?php
include "header.php";

try {
    include "conf.php";
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $userManager = new UserManager($db);
    $users = $userManager->getAll();
    print("<h2 class='text-center'>Voir DB</h2>");
    print("<table class='table table-hover table-bordered' width=80%>
    <thead class='thead-dark'>
    <th scope='col'> ID </th>
    <th scope='col'> Email </th>
    <th scope='col'> Mot de passe </th>
    <th scope='col'> Role </th>
    <th scope='col'> Actions </th>
    </thead>");
    foreach ($users as $personnage) {
        print("<tr>");
        print("<td>" . $personnage->getId() . "</td>");
        print("<td>" . $personnage->getEmail() . "</td>");
        print("<td>" . $personnage->getPassword() . "</td>");
        print("<td>" . $personnage->getRole() . "</td>");
        print("<td><a href='read_user.php?id=" . $personnage->getId() . "'> <i class='fas fa-eye btn btn-primary'></i> </a>");
        print("<a href='update_user.php?id=" . $personnage->getId() . "'> <i class='fas fa-edit btn btn-warning'></i> </a>");
        print("<a href='remove_user.php?id=" . $personnage->getId() . "'> <i class='fas fa-trash btn btn-danger'></i> </a></td></tr>");
    }
    print("</table>");
    print("<a href='add_user.php' class='btn btn-primary'>Ajouter Utilisateur</a>");
} catch (PDOException $e) {
    print('<br/>Erreur de connexion : ' . $e->getMessage());
}
include "footer.php";
?>
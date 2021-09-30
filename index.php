<?php
include "header.php";

try {
    include "conf.php";
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $userManager = new UserManager($db);
    $users = $userManager->getAll();
    print("<h2 class='text-center'>Voir DB</h2>");
    print("<a href='add_user.php' class='btn btn-primary'>Ajouter Utilisateur</a>");

    print("<table class='table table-hover table-bordered' width=80%><thead class='thead-dark'><th scope='col'> ID </th><th scope='col'> Email </th><th scope='col'> Mot de passe </th><th scope='col'> Role </th></thead>");
    foreach ($users as $personnage) {
        print("<tr>");
        print("<td>" . $personnage->getId() . "</td>");
        print("<td>" . $personnage->getEmail() . "</td>");
        print("<td>" . $personnage->getPassword() . "</td>");
        print("<td>" . $personnage->getRole() . "</td>");
        print("</tr>");
    }
    print("</table>");
} catch (PDOException $e) {
    print('<br/>Erreur de connexion : ' . $e->getMessage());
}
include "footer.php";

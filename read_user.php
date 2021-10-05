<?php
include "header.php";
if (isset($_GET['id'])) {
    try {
        include "conf.php";
        $db = new PDO($dsn, $user, $password);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $userManager = new UserManager($db);
        $user = $userManager->getOne($_GET['id']);
        print("<h1>Details ID : ". $user->getId() . "</h1>");
        print("<p>Email = ".$user->getEmail()."</p>");
        print("<p>Password = ".$user->getPassword()."</p>");
        print("<p>Role = ".$user->getRole()."</p>");
        print("<a class ='btn btn-primary' href='index.php'>Retour à la liste</a>");
    } catch (PDOException $e) {
        print('<br/>Erreur de connexion : ' . $e->getMessage());
    }
}
include "footer.php";
?>

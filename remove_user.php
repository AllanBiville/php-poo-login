<?php
include "header.php";
if (isset($_GET['id'])) {
    try {
        include "conf.php";
        $db = new PDO($dsn, $user, $password);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $userManager = new UserManager($db);
        $userManager->delete($user);
        //header("location:index.php");
    } catch (PDOException $e) {
        print('<br/>Erreur de connexion : ' . $e->getMessage());
    }
}
include "footer.php";
?>

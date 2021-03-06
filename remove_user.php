<?php
include "header.php";
if (isset($_GET['id'])) {
    try {
        include "conf.php";
        $db = new PDO($dsn, $user, $password);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $userManager = new UserManager($db);
        $user = $userManager->getOne($_GET['id']);
        $userManager->delete($user);
        
    } catch (PDOException $e) {
        print('<br/>Erreur de connexion : ' . $e->getMessage());
    }
}
header("location:index.php");
include "footer.php";
?>

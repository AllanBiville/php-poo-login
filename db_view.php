<?php   
include("header.php");
?>
<style> body,html {color:white !important;background-image: url('https://i.imgur.com/xhiRfL6.jpg');height: 100%;} #profile-img {height:200px; margin-bottom:50px;} .h-80 {height: 80% !important;} input::placeholder{color:blue !important;}h2{color:white;font-weight:bolder;font-size:30px; margin-bottom:50px;}</style>

<div class="container h-80">
<div class="row align-items-center h-100">
    <!-- <div class="col-3 mx-auto"> -->
        
        <div class="text-center">
            <h2>Voir DB</h2>
            <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
            <a href="add_user.php" class="btn btn-lg btn-secondary btn-block btn-signin">Ajouter Utilisateur</a>


            <?php
            
    try {
        include "conf.php";
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $userManager = new UserManager($db);
    $users = $userManager->getAll();

    foreach ($users as $personnage) {
        print($personnage);  
    }
} catch (PDOException $e) {
    print('<br/>Erreur de connexion : ' . $e->getMessage());
}
?>
        </div>
    </div>
</div>
</div>

<?php   
include("footer.php");
?>
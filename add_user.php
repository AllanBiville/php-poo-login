<?php
include "header.php";
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {
    try {
        include "conf.php";
        $db = new PDO($dsn, $user, $password);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $userManager = new UserManager($db);
        $user = new User(["email" => $_POST['email'], "password" => $_POST['password'], "role" => $_POST['role']]);

    } catch (PDOException $e) {
        print('<br/>Erreur de connexion : ' . $e->getMessage());
    }
}

?>
<style> body,html {color:white !important;background-image: url('https://i.imgur.com/xhiRfL6.jpg');height: 100%;} #profile-img {height:200px; margin-bottom:50px;} .h-80 {height: 80% !important;} input::placeholder{color:blue !important;}h2{color:white;font-weight:bolder;font-size:30px; margin-bottom:50px;}</style>

<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
            <h2>Ajouter Utilisateur</h2>
            <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
            <form  class="form-signin" method="POST">
                <input type="text" name="email"     id="email" class="form-control form-group" placeholder="### Email" autofocus>
                <input type="password" name="password" id="password" class="form-control form-group" placeholder="### Password">
                <input type="text" name="role" id="role" class="form-control form-group" placeholder="### Role (0 = Null / 1 = Admin)">
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
</div>
</div>

<?php
include "footer.php";
?>
<?php
include "footer.php";
?>
<?php
include "header.php";
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {
    try {
        include "conf.php";
        $db = new PDO($dsn, $user, $password);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $userManager = new UserManager($db);
        $user = new User(["email" => $_POST['email'], "password" => $_POST['password'], "role" => $_POST['role']]);
        $userManager->add($user);
        header("location:index.php");
    } catch (PDOException $e) {
        print('<br/>Erreur de connexion : ' . $e->getMessage());
    }
}

?>

            <h2 class='text-center'>Ajouter Utilisateur</h2>
          
            <form  class="form-signin" method="POST">
                <input type="text" name="email"     id="email" class="form-control form-group" placeholder="Email" autofocus>
                <input type="password" name="password" id="password" class="form-control form-group" placeholder="Password">
                <input type="text" name="role" id="role" class="form-control form-group" placeholder="Role (0 = Null / 1 = Admin)">
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Ajouter</button>
            </form>
<?php
include "footer.php";
?>

<?php   
include("header.php");
?>
            <h2>Inscrivez-vous</h2>

            <form  class="form-signin" method="POST">
                <input type="text" name="email"     id="email" class="form-control form-group" placeholder="### Email" autofocus>
                <input type="password" name="password" id="password" class="form-control form-group" placeholder="### Password">
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">S'inscrire</button>
            </form>


<?php   
include("footer.php");
?>
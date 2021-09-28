<?php   
include("header.php");
?>
<style> body,html {color:white !important;background-image: url('https://i.imgur.com/xhiRfL6.jpg');height: 100%;} #profile-img {height:200px; margin-bottom:50px;} .h-80 {height: 80% !important;} input::placeholder{color:blue !important;}h2{color:white;font-weight:bolder;font-size:30px; margin-bottom:50px;}</style>

<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
            <h2>Connectez-vous</h2>
            <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
            <form  class="form-signin" method="POST">
                <input type="text" name="email"     id="email" class="form-control form-group" placeholder="### Email" autofocus>
                <input type="password" name="password" id="password" class="form-control form-group" placeholder="### Password">
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Se connecter</button>
                <a href="register.php" class="btn btn-lg btn-secondary btn-block btn-signin">S'inscrire</a>
            </form>
        </div>
    </div>
</div>
</div>

<?php   
include("footer.php");
?>
<?php 
    use App\Models\User;
    $user = new User();
if(isset($_POST['submit'])):
    $user->newUser((object) [
        'fullName' => $_POST['username'],
        'sex' => 'M',
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]);
    endif;
?>
<?php layout('head', get_defined_vars()); ?>

<?php layout('navbar', get_defined_vars()) ?>

<div class="container">
<div class="row mTop mRight">
    <!-- ADMIN LOGIN FORM -->
<div class="col-md-6">
    <h4>ADMIN LOGIN</h4>
<form action="#" method="POST">
    <input type="text" class="form-control" id="username" name="username" placeholder="Username"/><br>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password"/><br>
    <br>
    <input type="submit" class="btn btn-success" value="Login" /><a href="<?= __url('./admin/reset-password'); ?>"><span class="lostPass">Lost Password?</span></a>
</form>
</div>

<!-- ADMIN REGISTRATION FORM -->
<div class="col-md-6">
    <h4>ADMIN - REGISTER</h4>
<form action="./admin" method="POST">
    <input type="text" class="form-control" id="username" name="username" placeholder="Username"/><br>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email"/><br>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password"/><br>
    <br>
    <input type="submit" name="submit" class="btn btn-success" value="Register" />
</form>
</div>


</div>

</div>
<div style="padding: 5px;text-align: center;position: fixed;display: none;" class="col-sm-1 alert alert-success">
    <strong>Success!</strong>
</div>
<hr>

    <?php layout('footer', get_defined_vars()); ?>
<?php 

use App\Models\User;

layout('head', get_defined_vars());
layout('navbar', get_defined_vars());

$user       = new User();
$email      = $_POST['email']       ?? "";
$password   = $_POST['password']    ?? "";
$username   = $_POST['username']    ?? "";

if (isset($_POST['login'])):
    if (!empty($email)):
        if ($user->checkUser('email', $email)):
            $foundUser = $user::getFoundObject();
            if ($user->validateUser($password, $foundUser)):

                $session->login($foundUser->id);
            endif;
        endif;
    endif;
endif;

if (isset($_POST['register'])):
    $user->newUser((object) [
        'fullName'  => $_POST['username'],
        'sex'       => 'M',
        'email'     => $_POST['email'],
        'password'  => $_POST['password']
    ]);
endif;
?>
<div class="container">
    <div class="row mTop mRight">
        <!-- ADMIN LOGIN FORM -->
        <div class="col-md-6">
            <h4>ADMIN LOGIN</h4>
            <form action="<?= __url('./admin'); ?>" method="POST">
                <input type="email" class="form-control" id="email" name="email" value='<?= $email; ?>' placeholder="Email:" /><br>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"/><br>
                <br>
                <input type="submit" name='login' class="btn btn-success" value="Login" />
                <a href="<?= __url('./admin/reset-password'); ?>">
                    <span class="lostPass">Lost Password?</span>
                </a>
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
                <input type="submit" name="register" class="btn btn-success" value="Register" />
            </form>
        </div>
    </div>
</div>
<div style="padding: 5px;text-align: center;position: fixed;display: none;" class="col-sm-1 alert alert-success">
    <strong>Success!</strong>
</div>
<hr>
<?php layout('footer', get_defined_vars()); ?>

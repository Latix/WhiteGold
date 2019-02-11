<?php $admin = true; ?>
<?php layout('head', get_defined_vars()); ?>

<?php layout('navbar', get_defined_vars()) ?>

<div class="container">
<div class="row mTop mRight">
    <!-- ADMIN LOGIN FORM -->
<div class="col-md-6">
    <h4>ADMIN Reset Password</h4>
<form action="#" method="POST">
    <input type="text" class="form-control" id="oldPassword" name="oldPassword" placeholder="Old Password"/><br>
    <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password"/><br>
    <br>
    <input type="submit" class="btn btn-success" value="Submit" />
</form>
</div>



</div>
</div>

<hr>

    <?php layout('footer', get_defined_vars()); ?>
<?php

use Blaze\File\File;
use App\Models\User;

$message = "";
$action = $action ?? "";
$id = (int) ($id ?? 0);

if ($action == "new"):
    if (isset($_POST['submit'])):
        // Validation
        $email = $_POST['email'] ?? "";
        $fullName = $_POST['name'] ?? "";
        $sex = $_POST['sex'] ?? "";
        $password = $_POST['password'] ?? "";

        if (empty($email) || empty($fullName) || empty($sex) || empty($password))
            $message = "All fields are required";
        
        $user = new User();
        if ($user->checkUser('email', $email))
            $message = "User already exist!";

        if (empty($message)):
            $result = $user->newUser((object) [
                'fullName' => $fullName,
                'sex' => $sex,
                'email' => $email,
                'password' => $password
            ]);
            $message = $result ? "You have registered!" : "Failed";
        endif;
        // $user->updateLastLogin (1);
        //Encrypt::passwordEncrypt($userObject->password)
    endif;
?>
    <form action="<?= __url('./user/new/'.$id) ?>" method="post">
        <input type="email" name="email" placeholder="Email:" />
        <input type="text" name="name" placeholder="Name:" />
        <select name="sex">
            <option>Select your sex:</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
        <input type="password" name="password" placeholder="Password:" />
        <input type="submit" name='submit' value="Register" />
    </form>
<?php endif; ?>

<?php

if ($action == "read"):
    // $users = User::findAll();
    $users = User::findWhere("id", $id);
    foreach ($users as $user):
        echo "<p>{$user->id} : {$user->fullName} : {$user->email}</p>";
    endforeach;
endif;

if ($action == "delete"):
    $result = (new User)->deleteRow($id);
    $message = $result ? "User have been deleted!" : "Deletion Failed";
endif;
?>

<?php $users = User::countWhere("fullName", "kamsi"); ?>
<p>Message: <?= $message.' No: '. $users; ?></p>

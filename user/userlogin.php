<?php
$user = New User; 
$pdo = connect();
$message = "";
$Mail = isset($_POST["Mail"]) ? $_POST["Mail"] : "";
var_dump($_SESSION);

?>

<main>  
    <div class="login-container">
        <h1>Välkommen</h1>
        <div class="box-wrapper">
        <form method="POST" action="">
        <?php
        // Call login function customers 
         if(isset($_POST['login'])) {
            $Mail = $_POST['Mail'];
            $Password = $_POST['Password'];
        
            $row = $user->login($Mail, $Password);
        } ?>
            <span class="form-label">Mail</span>
            <input type="mail" name="Mail" value="<?php echo $Mail; ?>">
            <span class="form-label">Lösenord</span>
            <input type="password" name="Password">
            <input class="submit-btn" type="submit" name="login" value="Logga in">
        </form>
        </div>
    </div>
</main>
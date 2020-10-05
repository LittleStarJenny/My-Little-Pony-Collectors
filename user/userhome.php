<?php 

$user = New User;
$message = "";

$user->Mail = $_SESSION['Mail'];
$userinfo = $user->get_user();
$row = $userinfo->fetch();



if($_SESSION['Mail'] != "") { ?>
    <main id="user-pages">
        <span><?php echo $message;?></span>
        <h3> Välkommen <?php echo $row['UserName'];?>!</h3>
     
    </main>
<?php } else { ?>
    <main>
        <span>Du har ingen behörighet att se det här. Logga in först?!</span>
    </main>
<?php } ?>
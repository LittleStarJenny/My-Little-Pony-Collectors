<?php 
session_start();

// include_once 'resources/include.php';

// $productCat = New Product;
// $total = 0;
// $message = '';
// $result = $productCat->get_categoryForHeader(); 
// $category = $result->fetchAll();

// Set different sessions to false if or empty to be able to show different states for example login/logout
if(isset ($_SESSION['authorized']) && $_SESSION['authorized'] != false) {
  } else {
    $_SESSION['authorized'] = false;
  }

  if(isset ($_SESSION['Mail']) && $_SESSION['Mail'] != "") {
  } else {
    $_SESSION['Mail'] = "";
  }
?>

<!DOCTYPE html>
<html>
    <head>
      <title>
        <?php if(isset($title) && !empty($title)) {
          echo $title;
        } else {
          echo "My Little Pony";
        } ?> </title>
                <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css"> -->
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="http://localhost/Mylittlepony/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="http://localhost/Mylittlepony/style.css?d=<?php echo time(); ?>">
    
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>

<body> 
    <header>
      <img class="logo" src="http://localhost/Mylittlepony/img/My-Little-Pony-Transparent-Images.png">

      <?php if($_SESSION['authorized'] != true) { ?> 
        <a href="http://localhost/Mylittlepony/login" class="login-logout"><i class="far fa-user"></i> Logga in</a>
      <?php } else if(isset ($_SESSION['authorized']) && $_SESSION['authorized'] === true) { ?> 
        <a href="http://localhost/Mylittlepony/userhome" class="my-account login-logout">Mitt konto</a> 
        <a href="http://localhost/Mylittlepony/logout" class="login-logout"><i class="far fa-user"></i> Logga ut</a>                                  
      <?php } ?>

      <navbar>
        <a href="/Mylittlepony">Hem</a>
        <a href="http://localhost/Mylittlepony/Skapa-avsnitt">Skapa Episod</a>
      </navbar>
    </header>
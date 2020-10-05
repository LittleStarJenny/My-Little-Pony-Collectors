<?php
include_once 'config.php';

class Publishers {

    public $pubId = 0;
    public $Companyname = '';

    public function get_publisher() {
        $pdo = connect();

        $sql = "SELECT * FROM publishers
        WHERE PubId = '" . $this->{"PubId"} . "'"; // sql statementS

    $toGet = $pdo->prepare($sql); // prepared statement
    $toGet->execute(); // execute sql statment

    return $toGet;
    }

}


class Categories {

    public $CatId = 0;
    public $catName = '';
}


class Collectibles {

    public $ColiId = 0;
    public $Title = '';
    public $Artnr = '';
    public $img = '';

    public function get_all_collectibles() {
        $pdo = connect();

        $sql = "SELECT * FROM collectibles"; // sql statementS

        $toGet = $pdo->prepare($sql); // prepared statement
        $toGet->execute(); // execute sql statment

        return $toGet;
    }

    public function get_all_movies() {
        $pdo = connect();

        $sql = "SELECT * FROM collectibles
        WHERE CatId = 1"; // sql statementS

        $toGet = $pdo->prepare($sql); // prepared statement
        $toGet->execute(); // execute sql statment

        return $toGet;
    }

    public function get_movies() {
        $pdo = connect();

        $sql = "SELECT * FROM collectibles
        WHERE ColiId = '" . $this->{"ColiId"} . "'"; // sql statementS

    $toGet = $pdo->prepare($sql); // prepared statement
    $toGet->execute(); // execute sql statment

    return $toGet;
    }
}

class Episode {

    public $EpisodeId = 0;
    public $EpiTitle = '';
    public $MovieId = 0;

    public function get_episodes() {
        $pdo = connect();

        $sql = "SELECT * FROM episodes
        WHERE ColiId = '" . $this->{"ColiId"} . "'"; // sql statementS

    $toGet = $pdo->prepare($sql); // prepared statement
    $toGet->execute(); // execute sql statment

    return $toGet;
    }


    public function create_episode() {
        $pdo = connect();

        $sql = "INSERT INTO episodes (EpiTitle, LanguageId, ColiId)
        VALUES ('" . $this->{"EpiTitle"} . "', '" . $this->{"LanguageId"} . "', '" . $this->{"ColiId"} . "')"; // sql statements

        $toCreate = $pdo->prepare($sql); // prepared statement
        $toCreate->execute(); // execute sql statement

        return $toCreate;
    }
}

class Language {

    public $LanguageId = 0;
    public $Language = '';

    public function get_languages() {
        $pdo = connect();

        $sql = "SELECT * FROM languages"; // sql statementS

    $toGet = $pdo->prepare($sql); // prepared statement
    $toGet->execute(); // execute sql statment

    return $toGet;
    }

}

class User {

    public $UserId = 0;
    public $UserName = '';
    public $Mail = '';
    public $Password = '';

    public function login($Mail, $Password) {
        $pdo = connect();

        // var_dump($Password);
        $stmt = $pdo->prepare("SELECT * FROM users WHERE Mail=:Mail ");
        $stmt->bindParam(':Mail', $Mail);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0) {

            if(password_verify($Password, $row['Password'] )) {
                var_dump($Password);
                $this->Mail = $Mail;
                $this->Password = $Password;

                session_regenerate_id();
                $_SESSION['authorized'] = true;
                $_SESSION['Mail'] = $row['Mail'];
                $_SESSION['UserName'] = $row['UserName'];
                session_write_close();
                header('location:userhome');
                $message = 'Konto skapat, nu är det bara att bekräfta ditt köp';
            } else {
           
                echo $message = '<div class="Message"><div>Ditt lösenord är fel, försök igen</div></div>';
            }
        } 
        else echo $message = '<div class="Message"><div>Kolla om du angett rätt Mail</div></div>';
    }

        public function get_user() {
        $pdo = connect();

        $sql = "SELECT * FROM users
        WHERE Mail = '" . $this->{"Mail"} . "'"; // sql statementS

    $toGet = $pdo->prepare($sql); // prepared statement
    $toGet->execute(); // execute sql statment

    return $toGet;
    }
}
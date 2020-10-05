<?php

$movie = New Collectibles;
$language = New Language;
$episode = New Episode;
$message = '';

if(isset($_POST['saveEpi'])) {
    $EpiTitles = isset($_POST['EpiTitles']) ? $_POST['EpiTitles'] : array();
    $selLang = filter_input(INPUT_POST, 'selectLanguage', FILTER_SANITIZE_MAGIC_QUOTES);
    $selMovie = filter_input(INPUT_POST, 'selectMovie', FILTER_SANITIZE_MAGIC_QUOTES);
    foreach ($EpiTitles as $EpiTitle) { 
        $episode->EpiTitle = $EpiTitle;
        $episode->LanguageId = $selLang;
        $episode->ColiId = $selMovie;

        if($episode->create_episode()) {
            $message ="Sparat";
        } else {
            $message = "Något gick fel, försök igen";
        }
    }
}
?>

<main>
<h2>Lägg till episoder</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <span>Välj film</span>
        <select class="Movie" name="selectMovie"> 
            <?php 
            // Get dropdown to select category for product
            $movieName = $movie->get_all_movies();
            $result = $movieName->fetchAll();
            foreach ($result as $movieTitle) {
            ?>
                <option value="<?php echo $movieTitle['ColiId'];?>">
                    <?php echo $movieTitle['Title']; ?>
                </option>
            <?php }  ?>
        </select>

        <select class="Language" name="selectLanguage"> 
            <?php 
            // Get dropdown to select category for product
            $LangName = $language->get_languages();
            $result = $LangName->fetchAll();
            foreach ($result as $allLang) {
            ?>
                <option value="<?php echo $allLang['LanguageId'];?>">
                    <?php echo $allLang['Language']; ?>
                </option>
            <?php }  ?>
        </select>

        <div class="epi-wrapper">
            <span>Episodnamn</span>
            <input type="text" name="EpiTitles[]" class="add-more-fields">
            <button class="add-field">+</button>
        </div>
        <input type="submit" class="standard-btn" name="saveEpi" value="Spara">
        <span class="error"><?php echo $message ?></span>
    </form>
</main>
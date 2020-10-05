<?php
$movies = New Collectibles;
$episode = New Episode;

// Get all products
$result = $movies->get_all_collectibles();
$rows = $result->fetchAll();
?>
    
<main id="product-content">
    <section class="product-container">
        <h1 class="category-title">VHS-filmer</h1>
        <div class="movie-wrapper">
            <?php foreach($rows as $row) { 
                $episode->ColiId = $row['ColiId'];

                $test = $episode->get_episodes();?>
            <div class="movie-card">
            <img class="movie-image" src="<?php echo $row['img'];?>" >
            <?php if(isset ($_SESSION['authorized']) != true) { ?>
                <a href="" class="heart">❤</a>
                <?php } else if(isset ($_SESSION['authorized']) && $_SESSION['authorized'] === true) { ?> 
                <a href="<?php echo $row['ColiId'] ?>" class="heart">❤️</a>
          <?php  } ?>
            <input type ="hidden" name="ColiId" value="<?php echo $row['ColiId'] ?>">
            <h3 class="movie"><?php echo $row['Title']; ?></h3>
            <span class="Artnr">Artnr: <?php echo $row['Artnr'];?></span>
            <div class="episode-wrapper">
                <?php foreach($test as $line) {  ?>
                    <span class="Episode"><?php echo $line['EpiTitle'];?></span>
                <?php } ?>
            </div>
        </div>
            <?php } ?> 
    </section>
</main>
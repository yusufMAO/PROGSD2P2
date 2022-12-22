<?php include '../../private/init.php'; ?>

<center>
<?php include SHARED_PATH . '/header.php'; ?>
<h1>
    Dit is de blog pagina
</h1>
    <?php
      // bestands_check('blogss.txt');  
        lees_bestand('blogs.txt');
      
    ?>


<br>
<a href="<?php echo url_path(path: '/contentbeheer/index.php'); ?>">Index</a>
<br>
<a href="<?php echo url_path(path: '/contentbeheer/eten.php'); ?>">Eten</a>
<br>
<a href="<?php echo url_path(path: '/contentbeheer/website.php'); ?>">Website</a>
<br>
<br>    
<br>
<br>
<br>
<br>
<a href="<?php echo url_path(path: '/contentbeheer/vraag.php'); ?>">Form om eten te bestellen</a>



<?php include SHARED_PATH . '/footer.php'; ?>
</center>
<?php 
    /**
     * php/theme/templates/parts/content-archive.php
     * @package SEEM
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/2021
    **/
?>

<!-- CONTENT-ARCHIVE -->
<article id="archive-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content(); ?>
</article>
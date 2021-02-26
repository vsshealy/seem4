<?php 
    /**
     * php/theme/templates/parts/content-none.php
     * @package SEEM
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/2021
    **/
?>

<!-- CONTENT-NONE -->
<article id="no-results-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content(); ?>
</article>
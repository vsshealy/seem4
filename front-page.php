<?php 
    /**
     * front-page.php
     * @package SEEM
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/2021
    **/
?>

<!DOCTYPE HTML>
<!-- SEEM | SOUTHEAST ENERGY EXCHANGE MARKET -->

<html id="seem" <?php language_attributes(); ?>>
    
    <!-- HEAD -->
    <head>
        <?php include(get_template_directory()."/php/theme/scripts/head/front-page.php"); ?>
    </head>

    <!-- BODY -->
    <body id="<?php global $post; $post_slug = $post -> post_name; echo $post_slug; ?>" <?php body_class(); ?>>
        <!-- BODY SCRIPTS -->
        <!-- HEADER -->
        <!-- CONTENT | FRONT-PAGE.PHP -->
        <!-- FOOTER -->
        <!-- SCRIPTS -->
    </body>

</html>
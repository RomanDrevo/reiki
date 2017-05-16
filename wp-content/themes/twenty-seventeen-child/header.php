<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body>
<div>
    <div>


        <header>

<!--            <div class="container-fluid">-->
<!--                --><?php //if ( function_exists( 'easingslider' ) ) { easingslider( 38 ); } ?>
<!--            </div>-->


            <nav class="navbar navbar-right">
                <div class="container-fluid">
<!--                    <div class="navbar-header">-->
<!--                        <a class="navbar-brand" href="#">WebSiteName</a>-->
<!--                    </div>-->
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">מה זה רייקי?</a></li>
                        <li><a href="#">לוח סדנאות</a></li>
                        <li><a href="#">מאמרים</a></li>
                        <li><a href="#">אודותי</a></li>
                        <li><a href="#">צור קשר</a></li>
                        <li><a href="#">עברית/רוסית</a></li>
                    </ul>
                </div>
            </nav>
        </header><!-- .site-header -->

        <div id="content" class="site-content">

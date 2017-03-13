<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <html class="" lang="en"> <!-- class="no-js" -->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="">
        <meta name="author" content="Peder Sjögren">
        <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
        <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title> 
         <?php wp_head(); ?>
    </head>
<body <?php body_class("container"); ?>>
    <div class="page-header">
       <h1 class="text-center fade-in" id="main-header"><a class="fun-hover" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></h1>
        <nav class="nav navbar navbar-inverse" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
        

        <?php
            what_menu('primary');
        ?>
        
            </div>
        </nav>
    </div>
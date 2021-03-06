<?php
/**
 * L'entête « header » de chacune des pages de notre site
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4</title>
    <?php wp_head() ?>
</head>
<body  <?php body_class("site"); ?>>
<header class="site__header">
    <section class="titre">
        <h1 class="header__titre"> <a href="<?php echo esc_url( home_url('/'));?>"><?php 	get_custom_logo() ?><?php bloginfo('name'); ?> </a> </h1>
        <h2 class="header__description"><?php bloginfo('description'); ?></h2>
    </section>
    <div class="util">
        <div class="util__menu">
            <?php 	get_sidebar('entete_1'); ?>
        </div>
        <?php get_search_form()?>
    </div>
</header>
<section class="site__barre">
    <input type="checkbox"  id="chk-burger">
    <label for="chk-burger" id="burger" onclick="">
        <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </label>
    <?php wp_nav_menu(array("menu"=>"principal",
                            "container"=>"nav")); ?>
</section>
<script>
    let menuOuvert = false
    let heightMenu = 0
    let transformYContainer = -100
    let navigationContainer = document.querySelector(".menu-principal-container")
    let navigation = document.querySelector("#menu-principal")
    let intervalNavigation

    function NavigationCliquee(){
        if(!menuOuvert){
            intervalNavigation = setInterval(OuvertureMenu, 5)
        }
        else{
            intervalNavigation = setInterval(FermetureMenu, 5)
        }
        menuOuvert = !menuOuvert
    }

    function OuvertureMenu(){
        heightMenu++
        transformYContainer++
        navigationContainer.style.height = `${heightMenu}%`
        navigation.style.transform = `translateY(${transformYContainer}%)`
        // console.log(transformYContainer)
        // console.log(heightMenu)
        console.log(navigationContainer.style.height)
        if(heightMenu >= 100 || transformYContainer >= 0){
            clearInterval(intervalNavigation)
            navigation.style.transform = "translateY(0)"
            navigationContainer.style.height = "100%"
        }
    }

    function FermetureMenu(){
        heightMenu--
        transformYContainer--
        navigationContainer.style.height = `${heightMenu}%`
        navigation.style.transform = `translateY(${transformYContainer}%)`

        // console.log(heightMenu)
        if(heightMenu <= 0 || transformYContainer <= -100){
            clearInterval(intervalNavigation)
            navigation.style.transform = "translateY(-100)"
            navigationContainer.style.height = "0"
        }
    }
</script>

<footer class="site__footer">
    <div class="site__footer__info1">
        <h2 class="site__footer__info1__elem__h2 elem">Le beau(?) site de Guillame Gauthier-Benoit</h2>
    </div>

    <div class="site__footer__colonne">
        <section class="footer__adresse">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod facere corrupti suscipit quaerat a, assumenda aspernatur officiis optio nemo, voluptates veritatis sequi eligendi exercitationem, accusamus consectetur provident eius voluptate! Dolorem?</section>
        <section class="footer__article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui accusamus, aperiam exercitationem velit corrupti praesentium incidunt atque, non, cumque pariatur placeat magnam consequuntur esse. Repellat est aliquam quisquam aperiam quasi?</section>
        <section class="footer__lien"><?php 	wp_nav_menu(array("menu"=>"lien_externe")) ?></section>
    </div>
    <div class="site__footer__ligne">
        <section class="footer__description">4w4-Conception d'interfaces et développement web</section>
        <section class="footer__copyright">&copy; Collège de Maisonneuve - Tous droits réservé</section>
        <section class="footer__menu">
        <?php 

            $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
            wp_nav_menu(array(
                                "menu"=>"simple",
                                "container"=>"nav",
                                "container_class"=>"footer__menu__nav",
                                "menu_class"=>"footer__menu__nav__ul",

                                "link_before"=>$icone)); ?>
        </section>
        <section class="footer__auteur">Auteur: Guillaume Gauthier-Benoit</section>
        <section class="footer__barre-recherche">
            <?= 	get_search_form() ?>
        </section>
    </div>
</footer>
<div class="barre-recherche">
    <?php wp_footer() ?>
</div>
</body>
<?php 	wp_footer() ?>
</html>
<?php get_header() ?>
<main class="principal">
    <h1>------ category.php groupe-1-----------</h1>
    <section class="formation">
    <?php  wp_nav_menu(array(
            "menu"=>"categorie_cours",
            "container" => "nav"));  ?>
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <?php 
        if (is_category('web')){ 
            
            $ma_categorie = get_category_by_slug('web');
            echo "<h3>" . $ma_categorie->description . "</h3>";
        }
        /*
        if (is_category('jeu')){ echo "<h3>Cours Jeu</h3>";}
        if (is_category('design')){ echo "<h3>Cours design</h3>";}
        if (is_category('utilitaire')){ echo "<h3>Cours utilitaire</h3>";}
        if (is_category('creation-3d')){ echo "<h3>Cours création 3D</h3>";}
        if (is_category('video')){ echo "<h3>Cours vidéo</h3>";}
        */
        
        $url_categorie = trouve_la_categorie(array('web','jeu','design', 'utilitaire', 'creation-3d', 'video'));
        $ma_categorie = get_category_by_slug($url_categorie);
        // echo "<h3>" . $ma_categorie->description . "</h3>"; 



        ?>
        <div class="formation__liste">
        <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                <?php 
                    $categories = get_the_category();
                    //var_dump($categories);
                    //echo $categories[1]->slug;
                 ?>
                <article class="formation__cours <?php echo $categories[1]->slug; ?>">
                        <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 7, -6);
                        $nbHeures = substr($titre, -6);
                        $sigleCours = substr($titre, 0, 7);
                        $descCours = get_the_excerpt();
                        ?>
                        <h3 class="cours__titre">
                            <a href="<?php echo get_permalink(); ?>">
                                <?= $titreFiltreCours; ?>
                            </a> 
                        </h3>
                        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <?php the_post_thumbnail("thumbnail") ?>
                        <p class="cours__desc"> <?= $descCours; ?></p>
                    </article>
                <?php endwhile ?>
                <?php endif ?>
        </div>
        </div>
    </section>
</main>
<?php get_footer() ?>
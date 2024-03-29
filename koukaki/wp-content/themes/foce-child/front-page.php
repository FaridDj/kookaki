<?php

get_header();
?>



    <main id="primary" class="site-main">
        <section class="banner">
    <img class="logo-img" src="<?php echo get_stylesheet_directory_uri() . '/images/logo.png'; ?>">
            <video class="banner__video" width="1440" poster="<?php echo get_stylesheet_directory_uri() . '/images/screenshot2.png'; ?> " autoplay="autoplay" muted="" loop="infinite">
      <source src="<?php echo get_stylesheet_directory_uri() . '/video/Studio+Koukaki-vidéo+header+sans+son.mp4'; ?> " type="video/mp4">
            </video>
             </section>
        <section id="" class="story">
           <h2>L'histoire</h2>
            <article id="" class="story__article">
            
                <p><?php echo get_theme_mod('story'); ?></p>
           
            </article>
            <article id="characters">
            <h3><span class="characters_title">Les personnages</span></h3>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            
            ?>
            <!-- gestion du slider -->
            
  <div class="swiper-container">
  
    <div class="swiper-wrapper">
      <?php
            while ( $characters_query->have_posts() ) {
                $characters_query->the_post();
                    echo '<div class="swiper-slide">';
                    echo '<figure>';
                    echo get_the_post_thumbnail( get_the_ID(), 'full' );
                    echo '<figcaption>';
                    the_title();
                    echo'</figcaption>';
                    echo '</figure>';
                    echo '</div>';
            };
            ?>
                </div>
  </div>
</article>
            
            <article id="place">
               
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
               

 <!-- Mise en place des nuage -->
 <div class="cloud">
      <img class="big_cloud" src="<?php echo get_theme_file_uri() . '/images/big_cloud.png'; ?>"
        alt="Gros nuage qui passe">
      <img class="little_cloud" src="<?php echo get_theme_file_uri() . '/images/little_cloud.png'; ?>"
         alt="Petit nuage qui passe">
         </div>  
      <!-- =================== -->
            </article>
        </section>


        <section id="studio">
            <h2> 
            <div class="FadeH">
                <div class="FadeH1">Studio</div>
                <div class="FadeH2">&nbsp;Koukaki</div>
            </div>    
        </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
		</section>

        <!-- image ceremonie des Oscars -->

    <section id="Oscar" class="Oscar">
    <?php get_template_part( 'Oscard' ); ?>
    </section>
    
    </main>
<?php
get_footer();

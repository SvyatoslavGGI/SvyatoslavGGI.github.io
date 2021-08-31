<?php
/*
Template Name: Шаблон-Услуг
*/ 
?>
 <div class='wrapper'>
    <?php wp_head(); ?>
        <?php get_header();?>
    
            <div class="main-wrap">
                <section class='page-title'>
                    <h2>Фрилансер Веб-разработчик<span>/Веб-дизайнер</span><br>
                        Специализируюсь на Верстке и сайтах на различных CMS</h2>
                </section>
            </div>
            </section>
        <section class='container'>
            <div class='services-wrap'>
                <ul class='services-list' <?php $args = array('cat' => 5,'post_type' => 'post', 'posts_per_page' => 6 ); $loop = new WP_Query( $args ); ?> >
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li class='service-item'>
                        <div class='service-thumbnail'>
                            <p class='service-title'><?php the_title() ?></p>
                            <span class='service-description'><?php the_excerpt(); ?></span>
                            <a class='link-post look-btn' href='<?php the_permalink(); ?>'> Узнать подробнее</a>
                        </div>
                        <div class='service-image'>
                            <figure>
                                <?php the_post_thumbnail();?>
                            </figure>
                        </div>
                    </li>
                    
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
        </main>
        
        <?php get_footer();?>
</div>
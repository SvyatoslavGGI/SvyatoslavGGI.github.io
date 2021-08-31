<?php
/*
Template Name: Шаблон-Портфолио
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
            <div class='works-wrap'>
                <ul class='works-list' <?php $args = array('cat' => 4  ,'post_type' => 'post', 'posts_per_page' => 6 ); $loop = new WP_Query( $args ); ?> >
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li class='work-item'>
                        <div class='work-thumbnail'>
                            <p class='work-title'><?php the_title() ?></p>
                            <span class='work-description'><?php the_excerpt(); ?></span>
                            <a class='link-post look-btn' href='<?php the_permalink(); ?>'> Посмотреть Задачу</a>
                        </div>
                        <div class='work-image'>
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
        <!-- Проверка наличия записей в цикле -->


    <?php get_footer();?>
</div>
<?php get_header(); ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-12 py-4">
                <h1><?php the_title() ?></h1>
            </div>

        </div>

        <?php if (have_posts()) { ?>
            <?php while (have_posts()) { ?>
                <?php the_post(); ?>

                <div class="row my-5">
                    <div class="col-md-6 col-12">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <div class="col-md-6 col-12">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php $args = array(
                    'post_type' => 'producto',
                    'post_per_page' => 6,
                    'order' => 'ASC',
                    'orderby' => 'title'
                ); 
                $productos = new WP_Query($args) ?>

                <?php if($productos->have_posts()){?>
                    <div class="row text-center justify-content-center productos-relacionados">
                    <div class="col-12">
                    <h3>Productos Relacionados</h3>
                    </div>
                   
                    <?php while ($productos->have_posts()){ ?>
                    <?php $productos->the_post(); ?>
                    <div class="div col-2 my-3">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <h4 class="text-center">
                    <a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                    </a>
                    </h4>
                    </div>
                    <?php } ?>
                    </div>
               <?php  } ?>
            <?php } ?>
        <?php } ?>
    </div>

</main>

<?php get_footer(); ?>
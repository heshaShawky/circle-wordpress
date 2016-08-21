<?php
/*
    Template Name: Gallery Page
*/

get_header(); ?>

    <section class="hero" style="height: auto; color:#fff; ">
        <div class="container">
            <div class="raw">
                <h2 class="text-uppercase" style="font-weight: bold;">gallery</h2>
            </div>
        </div>
    </section>

    <section id="container">
        <header class="filter-gallery">
            <div class="container-fluid">
                <ul class="list-inline list-unstyled">
                    <li class="selected filter" data-filter="all">All</li>
                    <?php $cats = get_categories(array('taxonomy'=>'categories','hide_empty'=> 0))?>
                    <?php foreach ($cats as $cat): ?>
                        <?php $cat_name = $cat->name; ?>
                        <li class="filter" data-filter=.<?php echo str_replace(' ', '-', $cat_name) ?>><?php echo $cat_name; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </header>

        <main class="gallery">
            <div class="container" id="Container">
                <div class="row">

                    <?php
                    $loops = new WP_Query(array(
                        'post_type' => 'projects',
                        'orderby'   => 'post_id',
                        'order'     => 'DESC'
                    ));

                    while( $loops->have_posts() ): $loops->the_post() ?>
                        <div class="col-sm-3 mix <?php echo str_replace(' ', '-', $cat_name) ?> ">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('full', array('class'=> 'img-responsive')); ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>

            </div>

        </main>

    </section>

<?php get_footer();

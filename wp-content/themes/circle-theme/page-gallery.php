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
                    <?php $cats = get_categories(array('taxonomy'=>'categories','hide_empty'=> 0, 'orderby'=>'ID', 'order' => 'ASC'))?>
                    <?php foreach ($cats as $cat): ?>
                        <?php $cat_name = $cat->name;
                        $cat_slug = $cat->slug;
                        ?>
                        <li class="filter" data-filter=.<?php echo $cat_slug ?>><?php echo $cat_name; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </header>

        <main class="gallery">
            <div class="container" id="Container">
                    <?php
                    $loops = new WP_Query(array(
                        'post_type' => 'projects',
                        'orderby'   => 'post_id',
                        'order'     => 'DESC'
                    ));
                    $count = 1;
                    while( $loops->have_posts() ): $loops->the_post() ?>
                        <?php if ($count%4 == 1): ?>
                            <div class="row">
                        <?php endif; ?>
                        <div class="col-sm-3 mix <?php $terms = get_the_terms($post->ID, 'categories' ); foreach ($terms as $term): echo $post_cat_slug = $term->slug . ' '; endforeach; ?>">

                            <?php
                            if (has_post_thumbnail()):
                                echo "<a href='".get_permalink()."'>";
                                    the_post_thumbnail('full', array('class'=> 'img-responsive'));
                                echo "</a>";
                            endif;
                            ?>

                        </div>
                        <?php if ($count%4 == 0): ?>
                            </div>
                        <?php endif; $count++ ?>

                    <?php endwhile; wp_reset_query(); ?>
                    <?php if ($count%4 != 1) { echo '</div>'; } ?>

            </div>

        </main>

    </section>

<?php get_footer();

<?php get_header(); ?>

	<div class="bg-ajk-dark">	
		<div class="container content-main">
			<div class="row">						
                <div class="col-12 col-md-3 similar-blogs">              
                    <?php
                    $category_id = get_queried_object()->term_id;
                    $args = array( 'category' => $category_id, 'post_type' =>  'post', 'posts_per_page' => -1, 'post_status' => 'publish' );
                    $postslist = get_posts($args);?>
                    <ul>
                        <?php foreach ($postslist as $post) :
                            setup_postdata($post); ?>
                            <li><a class="post-title"  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-12 col-md-9">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) :
                            the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
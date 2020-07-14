<?php get_header(); ?>

	<div class="bg-ajk-dark">	
		<div class="container content-main">
			<div class="row">						
                <div class="col-12 col-md-2">
                    <?php /* 
                    $categories =  get_categories();  
                    foreach  ($categories as $category) if ($tmp++ < 3) {
                        //Display the category information using $category values like $category->cat_name
                            echo '<h2 class="toc-headers">'.$category->name.'</h2>';
                            echo '<ul id="toc-items">';
                                $args = array( 'category' => $category->term_id, 'post_type' =>  'post', 'posts_per_page' => -1, 'post_status' => 'publish');
                                foreach (get_posts($args) as $post) {
                                    setup_postdata( $post );
                                    echo '<li><a href="'.get_permalink($post->ID).'">'.get_the_title().'</a></li>';   
                                }  
                            echo '</ul>';
                        }*/
                    ?>                    
                    <?php
                    $category_id = get_queried_object()->term_id;
                    $args = array( 'category' => $category_id, 'post_type' =>  'post', 'posts_per_page' => -1, 'post_status' => 'publish' );
                    $postslist = get_posts($args);
                    foreach ($postslist as $post) :
                        setup_postdata($post); ?>
                        <h2><a class="post-title"  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php endforeach; ?>
                </div>
                <div class="col-12 col-md-10">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) :
                            the_post(); ?>
                            <h1 class="text-center"><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
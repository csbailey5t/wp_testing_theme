
<?php get_header(); ?>

<?php 

$query_moves = new WP_Query( 'post_type=moves' );

if ( $query_moves->have_posts()) : while( $query_moves->have_posts()) : $query_moves->the_post(); ?>
<article>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php the_content(); ?>
</article>

<?php endwhile; else : ?>
<p>OMG NO POSTS!!!!!</p>
<?php endif; ?>

<?php 

$query_games = new WP_Query( 'post_type=games' );

if ( $query_games->have_posts()) : while( $query_games->have_posts()) : $query_games->the_post(); ?>
<article>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php the_content(); ?>
</article>

<?php endwhile; else : ?>
<p>OMG NO POSTS!!!!!</p>
<?php endif; ?>

<?php get_footer(); ?>

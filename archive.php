<?php
get_header();
?>

<main class="archive-page">

    <h1><?php the_archive_title(); ?></h1>
    <p><?php the_archive_description(); ?></p>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </article>
            <?php
        endwhile;

        the_posts_navigation();

    else :
        echo '<p>কোনো পোস্ট পাওয়া যায়নি।</p>';
    endif;
    ?>

</main>

<?php
get_footer();
?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being app.sass).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
    <section class="index_welcome">
        <?php if(get_home_video()) { ?>
        <div class="video">
            <video autoplay muted loop>
                <source src="<?php echo get_home_video(); ?>" type="video/mp4">
            </video>
        </div>
        <?php } ?>
    </section>
<?php
get_footer();
?>
<?php
get_header();


if (is_single()) {
    $cats = get_the_category();
    $cat = $cats[0];
} else {
    $cat = get_category(get_query_var('cat'));
}
$cat_slug = $cat->slug;

while (have_posts()) :
    the_post();

    ?>

    <?php
    if ($cat_slug == "case") {
        get_template_part('template-parts/cases/content', 'case');
    }


endwhile;
?>

<?php
get_footer();


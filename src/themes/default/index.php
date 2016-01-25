<?php
//$view = 'pages.page';
//
//$c  = Context::get();
//$tx = Context::taxonomy();
//$t  = Context::term();
//
//
//
//if(is_404())
//{
//    $view = 'pages.404';
//}
//else if(is_search())
//{
//    $view = 'pages.search';
//}
//else if(is_category() || is_tag())
//{
//    $view = 'pages.blog-index';
//}
//else if(is_archive())
//{
//    $view = 'pages.arquive-index';
//}
//else if(is_single() && $c == 'blog')
//{
//    $view = 'pages.blog-post';
//}

//dd($c, $tx, $t, $view);
get_header();
?>


<h1>Hello world</h1>

<?php while(have_posts()): the_post();?>

	<h2><?php the_title();?></h2>

	<?php the_content();?>

<?php endwhile;?>



<?php get_footer();?>
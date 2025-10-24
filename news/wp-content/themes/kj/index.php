<?php get_header()?>

<?php
	$offset = $_GET["post"];
	$arg = array('offset'=>$offset,'posts_per_page'=>8);
	$the_query = new WP_Query($arg);
	$count = 0;
?>
<?php
    $count_posts = wp_count_posts();
    $posts = $count_posts->publish;
?>

<h3 class="pagetitle">お知らせ</h3>


<div class="wp-contents">


<div class="news">

	<ul class="news_list">
        <?php if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

		<li><a href="<?php the_permalink()?>"><span><?php echo get_the_date( 'Y.m.d' ); ?></span><?php the_title(); ?></a></li>
		
        <?php endwhile; endif; ?>
    </ul>

    <div class="pager clearfix">
        <?php if($offset >= 8):?>
        <div class="pager_prev"><a href="<?php  bloginfo('url')?>?post=<?php echo $offset-8?>" class="b_link"><i class="icon-angle-double-left"></i>前の8件</a></div>
        <?php endif;?>
        <?php if($posts > $offset+8):?>
        <div class="pager_next"><a href="<?php  bloginfo('url')?>?post=<?php echo $offset+8?>" class="b_link">次の8件<i class="icon-angle-double-right"></i></a></div>
        <?php endif;?>
    </div>

</div>
<?php get_footer()?>
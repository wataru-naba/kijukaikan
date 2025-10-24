<?php get_header()?>
<h3 class="pagetitle">お知らせ</h3>


<div class="wp-contents">

	<article class="newsdetail">
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
		<h3 class="t_item"><?php the_title(); ?><span><?php the_time('Y.m.d'); ?></span></h3>
		<div class="item_body">
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
	</article>
	<div class="al-c m-t-20"><a href="<?php bloginfo('url')?>" class="b_link"><i class="icon-angle-double-right m-r-5"></i>一覧に戻る</a></div>
</div>

<?php get_footer()?>

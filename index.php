<?php get_header(); ?>

<div class="content">

<div class="article">
	<?php while ( have_posts() ) : the_post(); ?>
	<!--while ( have_posts() ) - have_posts() 為判斷是否在資料庫中有文章,若有則回傳 true,並進入 while 迴圈中。-->
	<!--the_post() - 載入文章相關函式,如需使用下面幾個跟文章資料有關的函式必須先加入 the_post() 函式,才會正常。-->

	<article class="article-content">
	<h1 class="article-title">
		<a href="<?php the_permalink(); ?>">
				<!--the_permalink() - 輸出文章網址-->
				<?php the_title(); ?>
				<!--the_title() - 輸出文章標題。-->
		</a>
	</h1>
	<div class="article-meta">
		<span>
			<?php the_time('n / j,Y'); ?>
			<!--the_time(' n / j, Y') - 輸出文章發表的時間,參數為顯示時間的格式。n / j, Y表示格式為 月 / 日, 年-->
		</span>
		<span> / </span>

		<span><?php the_category(' , '); ?>
			<!--the_category(' , ') - 輸出文章所在分類。參數為分類與分類間的分隔符號。如 分類一, 分類二。-->
		</span>
		<span> / </span>
		
		<span><?php the_tags('', ' , ',''); ?>
			<!--the_tags('', ' , ', '') - 輸出文章之標籤。第一個參數為在輸出標籤前的文字,假設為 '標籤:' 則整個函式會輸出「標籤:標籤1,標籤2」。第二個參數為標籤與標籤之間的分隔符號。第三個參數為在輸出標籤後的文字,假設為'<br>' 則輸出文字後將會直接換行。-->
		</span>

	</div>
	<?php the_content(); ?>
	<!--the_content() - 輸出文章內容。-->
	<div class="clearfix"></div>
	</article>
	<?php endwhile; ?>
</div>

<div class="sidebar">

<?php get_sidebar(); ?>

</div>

</div>

<?php get_footer(); ?>
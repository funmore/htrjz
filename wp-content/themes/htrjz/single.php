<!-- 单条新闻模板 -->
<?php get_header(); ?>
 <div class="container sbody" >
      <div class='row' id="singleblank"></div>
      <div class="row">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            当前位置：
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
      </div>
      
      <div class="row">

        <div class="col-lg-4 newslist-sidebar">
            <div class="row">
              <img src="http://localhost/wp-content/uploads/2016/06/unembed.jpg" alt="pic1">
            </div>
            <div class="row">
              <img src="http://localhost/wp-content/uploads/2016/06/unembed.jpg" alt="pic2">
            </div>
        </div><!-- /.blog-sidebar -->
  

        <div class="col-lg-7  news">
            <div class="row">
				<?php  if(have_posts()): while(have_posts()):the_post();
				 ?>
				<article class="post page">
				<h2><?php the_title(); ?></h2>
        <p class="post-info">发布时间：<?php the_time('y-m-d') ?></p>
				<?php the_content(); ?>
				</article>
				<?php endwhile;
	
				else :
					echo '<p>No content found</p>';
				
				endif;?>
            </div>
          

        </div><!-- /.blog-main -->   
      </div><!-- /.row -->



<?php get_footer(); ?>

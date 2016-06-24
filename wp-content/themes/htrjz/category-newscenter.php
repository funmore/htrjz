<!-- 新闻中心模板 -->
<?php get_header(); ?>
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active single">
          <img class="first-slide" src="http://localhost/wp-content/uploads/2016/06/embed.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>北京航天自动控制研究所</h1>
              <h2>装备软件评测中心</h2>  
            </div>
          </div>
        </div>
 </div><!-- /.carousel -->
 <div class="container sbody" >
      <!-- <div class="row">
        <span><a href="../homepage">首页</a>&gt; <?php basename(get_permalink()) ?></span>
      </div> -->

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
  

        <div class="col-lg-7  newslist">
            <div class="row">
				<?php  if(have_posts()): while(have_posts()):the_post();
				 ?>
				<article class="post page">
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
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

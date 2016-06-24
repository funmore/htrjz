<!-- 首页，localhost模板 -->
<?php get_header(); ?>
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="http://localhost/wp-content/uploads/2016/06/embed.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>北京航天自动控制研究所</h1>
              <h2>装备软件评测中心</h2>  
              <p><a class="btn btn-lg btn-primary" href="../aboutus" role="button">了解更多</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="http://localhost/wp-content/uploads/2016/06/unembed.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>北京航天自动控制研究所</h1>
              <h2>装备软件评测中心</h2>  
              <p><a class="btn btn-lg btn-primary" href="../aboutus" role="button">了解更多</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="http://localhost/wp-content/uploads/2016/06/fpga.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>北京航天自动控制研究所</h1>
              <h2>装备软件评测中心</h2>  
              <p><a class="btn btn-lg btn-primary" href="../aboutus" role="button">了解更多</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-3">
          <img class="img-circle" src="http://localhost/wp-content/uploads/2016/06/embed.jpg" alt="embed" width="140" height="140">
          <h2>嵌入式软件测试</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="../mainbusiness/嵌入式软件测试/" role="button">查看详情 &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle" src="http://localhost/wp-content/uploads/2016/06/unembed.jpg" alt="unembed" width="140" height="140">
          <h2>非嵌入式软件测试</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="../mainbusiness/非嵌入式软件测试/" role="button">查看详情 &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle" src="http://localhost/wp-content/uploads/2016/06/fpga.jpg" alt="fpga" width="140" height="140">
          <h2>FPGA/PLC测试</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="../mainbusiness/fpgaplc软件测试/" role="button">查看详情 &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle" src="http://localhost/wp-content/uploads/2016/06/testdev.jpg" alt="testdev" width="140" height="140">
          <h2>测试环境开发</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="../mainbusiness/测试环境开发/" role="button">查看详情 &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    </div><!-- /.ontainer marketing-->
    <div class="container sbody" >


<?php get_footer(); ?>

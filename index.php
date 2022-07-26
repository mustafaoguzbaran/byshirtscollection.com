<?php get_header(); ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php bloginfo("template_url"); ?>/img/wedding_2022021110.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5 style="background: #1e2a3d; padding: 20px; border-radius: 10px; transform: rotate(-2deg); opacity: 0.8" >Erkek Gömlek Modellerimiz İçin;</h5>
          <center><a style="text-decoration: none" href="https://byshirtscollection.com/category/erkek/"><button class="button-53" role="button">TIKLAYIN!</button></a></center>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php bloginfo("template_url"); ?>/img/desktop_split_womens_2022041111.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5 style="background: #1e2a3d; padding: 20px; border-radius: 10px; transform: rotate(-2deg); opacity: 0.8" >Kadın Gömlek Modellerimiz İçin;</h5>
          <center><a style="text-decoration: none" href="https://byshirtscollection.com/category/kadin/"><button class="button-53" role="button">TIKLAYIN!</button></a></center>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    
    <div class="look" style=" font-size: 20px; text-align: center; color:white; background: #1e2a3d; padding: 30px">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3">
            <div class="ads">
            <i class="fa-solid fa-helmet-safety"></i><br><a style="font-size: 15px">&nbsp;Kaliteli İşçilik</a>
          </div>
          </div>
          <div class="col-lg-3">
            <div class="ads">
            <i class="fa-solid fa-circle-check"></i><br><a style="font-size: 15px">&nbsp;Maksimum Güvenirlik</a>
          </div>
          </div>
          <div class="col-lg-3">
            <div class="ads">
            <i class="fa-solid fa-shirt"></i><br><a style="font-size: 15px">&nbsp;Özel Tasarımlar</a>
          </div>
          </div>
          <div class="col-lg-3">
            <div class="ads">
            <i class="fa-solid fa-hand-holding-dollar"></i><br><a style="font-size: 15px">&nbsp;Uygun Fiyat Garantisi</a>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
      <?php query_posts('showposts=10&orderby=date&cat=3,2'); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-lg-3">
          <center>
          <div class="main-content">
            <div class="card rounded shadow-sm border-0">
              <div class="card-body p-4"><center><?php the_post_thumbnail(); ?></center>
                <span class="badge"><a><?php
foreach((get_the_category()) as $category) {
echo $category->cat_name . ' ';
}
?></a></span><br>
                <span style="color: white" class="badge price"><a><?php the_field('price'); ?></a></span>
                <h5> <a href="<?php the_permalink() ?>" class="text-dark main-title"><?php the_title(); ?></a></h5>
                <p class="small text-muted font-italic"></p>
              </div>
            </div>
          <!-- HTML !-->
          
<button onclick=" window.open('<?php the_field('link'); ?>','_blank')" class="button-52" role="button">Trendyol'dan Satın Al!</button>
</center>
        </div>
        <?php endwhile; else : endif; wp_reset_query(); ?>

        </div>
      </div>
    <section class="deneb_cta">
      <div class="container">
        <div class="cta_wrapper">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="cta_content">
                <h3>Biz Kimiz?</h3>
                <p>2020 yılında kendi tasarımımız ve üretimimiz olan gömleklerimizi satışa sunmaya başladık. İleri ki yıllarımızda da en iyi tasarımlarımızla ve üretimlerimizle sizlerin karşısına çıkmaktan onur duyuyoruz.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="button_box">
                <a href="https://byshirtscollection.com/iletisim/" class="btn btn-warning">Bizimle iletişim kur</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
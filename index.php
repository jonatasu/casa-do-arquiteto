<?php include_once 'header.php'; ?>

<link href="assets/css/style.index.css" rel="stylesheet">

<div class="all-wrap home">
  <section id="slider">
    <div class="wrap-slider">
      <div class="item active">
        <img src="uploads/slider/2.jpg" alt="" width="100%">
      </div>
      <div class="item">
        <img src="uploads/slider/1.jpg" alt="" width="100%">
      </div>
      <div class="item">
        <img src="uploads/slider/3.jpg" alt="" width="100%">
      </div>
    </div>
  </section>
  <section id="faixacartoes">
    <div class="container">
      <div class="col-md-4">
        <div class="feature">
          <div class="icon"><img src="uploads/icon1.png" class="img-responsive"></div>
          <div class="text">Parcele em até <strong>5x sem juros</strong></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature">
          <div class="icon"><img src="uploads/icon2.png" class="img-responsive"></div>
          <div class="text">Acompanhe seu <strong>Pedido</strong></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature">
          <div class="icon"><img src="uploads/icon3.png" class="img-responsive"></div>
          <div class="text">Compre no site <strong>Retire na loja</strong></div>
        </div>
      </div>
    </div>
  </section>
  <section class="produtos">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="titulo"><span>Lançamentos</span></h2>
        </div>
      </div>
      <div class="row">
        <?php for($i=1; $i<=4;$i++){?>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="prod-block">
              <div class="prod-image">
                <a href="produto.php"><img src="uploads/produtos/<?=$i?>.jpg" alt="" class="img-responsive"></a>
                <a href="produto.php" class="btn-cart"><span class="ti-shopping-cart-full"></span> Adicionar ao Carrinho</a>
              </div>
              <div class="prod-desc">
                <a href="produto.php">
                  <span class="text">Lorem ipsum dolor sit amet consectetur adipiscing elit aenean ac imperdiet</span>
                  <span class="price">
                    <span class="old">R$123,45</span>
                    <span class="new"><small>R$ </small>123,45</span>
                    <span class="parc">ou 5X R$123,45</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <section class="banners">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="#">
            <img src="uploads/banner1.jpg" class="img-responsive center-block">
          </a>
        </div>
        <div class="col-md-4">
          <a href="#">
            <img src="uploads/banner2.jpg" class="img-responsive center-block">
          </a>
        </div>
        <div class="col-md-4">
          <a href="#">
            <img src="uploads/banner3.jpg" class="img-responsive center-block">
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="produtos">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="titulo"><span>Desconto <strong>Especiais</strong></span></h2>
        </div>
      </div>
      <div class="row">
        <?php for($i=1; $i<=4;$i++){?>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="prod-block">
              <div class="prod-image">
                <a href="produto.php"><img src="uploads/produtos/<?=$i?>.jpg" alt="" class="img-responsive"></a>
                <a href="produto.php" class="btn-cart"><span class="ti-shopping-cart-full"></span> Adicionar ao Carrinho</a>
              </div>
              <div class="prod-desc">
                <a href="produto.php">
                  <span class="text">Lorem ipsum dolor sit amet consectetur adipiscing elit aenean ac imperdiet</span>
                  <span class="price">
                    <span class="old">R$123,45</span>
                    <span class="new"><small>R$ </small>123,45</span>
                    <span class="parc">ou 5X R$123,45</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <section class="banners">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="banner-wide" style="background-image: url('uploads/banner-4.jpg')">
            <div class="content-banner">
              <h3>Lorem ipsum dolor sit amet consectetur</h3>
              <h5>Aenean ac imperdiet libero. Suspendisse cursus</h5>
              <a href="#">Confira!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="produtos">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="titulo"><span>Mais <strong>Vendidos</strong></span></h2>
        </div>
      </div>
      <div class="row">
        <?php for($i=1; $i<=4;$i++){?>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="prod-block">
              <div class="prod-image">
                <a href="produto.php"><img src="uploads/produtos/<?=$i?>.jpg" alt="" class="img-responsive"></a>
                <a href="produto.php" class="btn-cart"><span class="ti-shopping-cart-full"></span> Adicionar ao Carrinho</a>
              </div>
              <div class="prod-desc">
                <a href="produto.php">
                  <span class="text">Lorem ipsum dolor sit amet consectetur adipiscing elit aenean ac imperdiet</span>
                  <span class="price">
                    <span class="old">R$123,45</span>
                    <span class="new"><small>R$ </small>123,45</span>
                    <span class="parc">ou 5X R$123,45</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <section id="marcas">
    <?php //<!-- FILTRO DE COMPRA POR MARCA --> ?>
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-12">
          <div class="wrap-marcas">
            <div class="item">
              <div class="marca">
                <a href="#" title="nome - marca" target="_blank">
                  <img src="uploads/marcas/1.jpg" class="img-responsive center-block">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="marca">
                <a href="#" title="nome - marca" target="_blank">
                  <img src="uploads/marcas/2.jpg" class="img-responsive center-block">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="marca">
                <a href="#" title="nome - marca" target="_blank">
                  <img src="uploads/marcas/3.jpg" class="img-responsive center-block">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="marca">
                <a href="#" title="nome - marca" target="_blank">
                  <img src="uploads/marcas/4.jpg" class="img-responsive center-block">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="marca">
                <a href="#" title="nome - marca" target="_blank">
                  <img src="uploads/marcas/5.jpg" class="img-responsive center-block">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="marca">
                <a href="#" title="nome - marca" target="_blank">
                  <img src="uploads/marcas/6.jpg" class="img-responsive center-block">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="marca">
                <a href="#" title="nome - marca" target="_blank">
                  <img src="uploads/marcas/7.jpg" class="img-responsive center-block">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="marca">
                <a href="#" title="nome - marca" target="_blank">
                  <img src="uploads/marcas/8.jpg" class="img-responsive center-block">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="marca">
                <a href="#" title="nome - marca" target="_blank">
                  <img src="uploads/marcas/9.jpg" class="img-responsive center-block">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="marca">
                <a href="#" title="nome - marca" target="_blank">
                  <img src="uploads/marcas/10.jpg" class="img-responsive center-block">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="marca">
                <a href="#" title="nome - marca" target="_blank">
                  <img src="uploads/marcas/11.jpg" class="img-responsive center-block">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="marca">
                <a href="#">
                  <img src="uploads/marcas/12.jpg" class="img-responsive center-block">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('.wrap-slider').slick({
      dots: false,
      arrows: false,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 5000,
    });
    $('.wrap-marcas').slick({
      slidesToShow: 7,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      infinite: true,
      responsive: [
        {
          breakpoint: 992,
          settings: { slidesToShow: 4 }
        },
        {
          breakpoint: 768,
          settings: { slidesToShow: 2 }
        },
        {
          breakpoint: 480,
          settings: { slidesToShow: 1 }
        }
      ]
    });
  });
</script>
<?php include_once 'footer.php'; ?>

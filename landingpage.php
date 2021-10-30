<?php
  $login = new Login(3);
  if($login->CheckLogin()):
    $idusuar = $_SESSION['userlogin']['user_id'];
    $lerbanco->ExeRead('ws_empresa', "WHERE user_id = :idcliente", "idcliente={$idusuar}");
    if (!$lerbanco->getResult()):       
    else:
      foreach ($lerbanco->getResult() as $i):
        extract($i);
      endforeach;
      header("Location: {$site}{$nome_empresa_link}/pedidos");
    endif;
  else:
  endif;
?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title><?=$texto['titulo_site_landing'];?></title>
    <meta name="robots" content="index, fallow" />
    <link rel="canonical" href="<?=$site;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="keywords" content="<?=$texto['keywords_landing'];?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="author" content="<?=$texto['autor_site_landing'];?>">
    <meta property="og:site_name" content="<?=$texto['nome_site_landing'];?>"/>
    <meta property="og:url" content="<?=$site;?>"/>
    <meta name="description" content="<?=$texto['descricao_site_landing'];?>" />
    <meta property="og:description" content="<?=$texto['descricao_site_landing'];?>" />
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="<?= $site; ?>img/new_template/favicon.png" type="image/x-icon">

    <!--https://gao-sun.github.io/x0popup/-->
		<link href="<?= $site; ?>css/x0popup-master/dist/x0popup.min.css" rel="stylesheet">
		<script src="<?= $site; ?>css/x0popup-master/dist/x0popup.min.js"></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= $site; ?>css/new_template/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $site; ?>css/new_template/line-icons.css">
    <link rel="stylesheet" href="<?= $site; ?>css/new_template/owl.carousel.css">
    <link rel="stylesheet" href="<?= $site; ?>css/new_template/owl.theme.css">
    <link rel="stylesheet" href="<?= $site; ?>css/new_template/nivo-lightbox.css">
    <link rel="stylesheet" href="<?= $site; ?>css/new_template/magnific-popup.css">
    <link rel="stylesheet" href="<?= $site; ?>css/new_template/animate.css">
    <link rel="stylesheet" href="<?= $site; ?>css/new_template/color-switcher.css">
    <link rel="stylesheet" href="<?= $site; ?>css/new_template/menu_sideslide.css">
    <link rel="stylesheet" href="<?= $site; ?>css/new_template/main.css">    
    <link rel="stylesheet" href="<?= $site; ?>css/new_template/responsive.css">
    <link rel="stylesheet" href="<?= $site; ?>css/new_template/faq.css">

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
    <link rel="stylesheet" href="<?= $site; ?>css/fontello/css/fontello.css">
    <link rel="stylesheet" href="<?= $site; ?>css/suportewats.css">

  </head>

  <body>
    <!--[if lte IE 8]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->


    <!-- Header Section Start -->
    <header id="slider-area">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">          
          <a class="navbar-brand" href="<?=$site;?>">
            <img src="<?= $site; ?>img/new_template/logo.png" alt="Logo <?=$texto['nome_site_landing'];?>" >
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#slider-area">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Como funciona ? </a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Benefícios</a>
              </li>            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#pricing">Planos</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#free-trial">Teste Grátis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#faq">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="https://gestorcontrol.com/submitticket.php?step=2&deptid=4" target="_blank">Suporte</a>
              </li>  
              <li class="nav-item nav-item-mr-2">
                <a class="btn btn-danger" href="#javascript:void(0);" data-toggle="modal" data-target="#login_2">Login</a>
              </li> 
            </ul>              
          </div>
        </div>
      </nav> 

      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="<?= $site; ?>img/new_template/slider/bg-5.png" alt="">
              <div class="carousel-caption text-left">
                <h1 class="wow fadeInRight" data-wow-delay="0.2s">Crie seu cardápio e <br>deixe seus clientes <br>fazerem pedidos via <br>WhatsApp.</h1>  
                <a href="<?=$site;?>Demo" class="btn btn-lg btn-common btn-effect wow fadeInRight font-weight-bold" data-wow-delay="0.9s">Demonstração</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Carousel Section -->
      <!-- <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="<?= $site; ?>img/new_template/slider/bg-4.jpg" alt="">
              <div class="carousel-caption text-left">
                <h3 class="wow fadeInRight" data-wow-delay="0.2s">Cardaplus</h1>  
                <h4 class="wow fadeInRight" data-wow-delay="0.6s">Crie seu cardápio e deixe seus clientes fazerem pedidos via WhatsApp.</h4>
                <a href="<?=$site;?>Demo" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s">Demonstração</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?= $site; ?>img/new_template/slider/bg-1.jpg" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s"></h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Cardaplus</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">Somos um portal desenvolvido para você pode cadastrar seu menu online e receber pedidos via WhatsApp.</h4>
                <a href="<?=$site;?>Demo" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">Demonstração</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?= $site; ?>img/new_template/slider/bg-3.jpg" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s"></h3>
                <h2 class="wow fadeInRight" data-wow-delay="0.6s">Cardaplus</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.6s">Tenha controle sobre os seus pedidos!</h4>
                <a href="<?=$site;?>Demo" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">Demonstração</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
      </div>   -->
    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Como funciona?</h2>
          <span>Como funciona?</span>
          <p class="section-subtitle">Veja como é simples o processo do momento que você envia o link do seu menu até a venda.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-5 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-1">
                <img src="<?= $site; ?>img/icon_home_2.svg" />
              </div>
              <h4>Seu negócio online</h4>
              <p>Seu cliente preenche o carrinho com os itens do seu menu!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon color-2">
                <img src="<?= $site; ?>img/icon_home_1.svg" />
              </div>
              <h4>Endereço de entrega</h4>
              <p>Seu cliente informa o endereço ou se vai retirar no local!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon color-3">
                <img src="<?= $site; ?>img/icon_home_3.svg" />
              </div>
              <h4>Forma de pagamento</h4>
              <p>Seu cliente informa como vai pagar e observações!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon color-4">
                <img src="<?= $site; ?>img/icon_home_4.svg" />
              </div>
              <h4>E por fim, Delivery</h4>
              <p>Depois de receber o pedido, basta preparar e fazer a entrega.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Features Section Start -->
    <section id="features" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Benefícios</h2>
          <span>Benefícios</span>
          <p class="section-subtitle">Somos a melhor plataforma de pedidos online integrada com WhatsApp.</p>
          <p class="section-subtitle">Tenha seu próprio canal de vendas e tenha um maior relacionamento com seus clientes, sem intermediários.</p>
        </div>
        <div class="row">
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-mobile"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-mobile"></i></div>
                <h4>Suporte em Smartphones</h4>
                <p>Nosso cardápio digital roda em qualquer disposítivo.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-link"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-link"></i></div>
                <h4>Link amigável</h4>
                <p>Link amigável para você divulgar e enviar para seus clientes.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-volume-high"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-volume-high"></i></div>
                <h4>Notificação de pedidos.</h4>
                <p>Através do painel o sistema te notifica sobre um novo pedido.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-bar-chart"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-bar-chart"></i></div>
                <h4>Estatística do seu negócio</h4>
                <p>Gráficos sobre seus pedidos em um ambiente agradável!</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-ticket"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-ticket"></i></div>
                <h4>Cupons de desconto</h4>
                <p>Use cupons de descontos para fidelizar clientes. </p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-printer"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-printer"></i></div>
                <h4>Impressão de Pedidos</h4>
                <p>Imprima os pedidos para agilizar na cozinha.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-pencil"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-pencil"></i></div>
                <h4>Fácil de usar</h4>
                <p> Não perca tempo, cadastre os produtos e comece a usar hoje. </p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-reload"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-reload"></i></div>
                <h4>Atualizações constantes</h4>
                <p>Estamos sempre evoluindo e melhorando ainda mais o sistema.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-lock"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-lock"></i></div>
                <h4>SSL Seguro</h4>
                Mais Proteção p/ Seu Site c/ a Criptografia mais Rígida do Mercado!
                <p>Mais proteção para sua plataforma com uma criptografia mais rígida</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
        </div>
      </div>
    </section>
    <!-- Features Section End --> 

    <!-- Start Video promo Section -->
    <section class="video-promo section">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="video-promo-content text-center">
              <a href="<?=$texto['linkVideosLanding'];?>" class="video-popup"><i class="lni-film-play"></i></a>
              <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">E ai, vai continuar perdendo vendas?</h2>
              <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Super fácil para seu cliente, compatível com todos os dispositivos e também dispensa a instalação.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Start Pricing Table Section -->
    <div id="pricing" class="section pricing-section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Nossos Planos</h2>
          <span>Planos</span>
          <p class="section-subtitle">Escolha o plano que cabe em seu bolso: </p>
        </div>

        <div class="row pricing-tables">
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2><?=$texto['nomePlanoUm'];?></h2>
                <div class="price">R$<?=$texto['valorPlanoUm'];?> <span>,00</span></div>
                <ul>
                  <li>Assinatura de <?=$texto['DiasPlanoUm'];?> dias.</li>
                  <li>Pedidos Ilimitados</li>
                  <li>Itens Ilimitados</li>
                  <li>Fotos nos itens</li>
                  <li>Adicione Logo Marca</li>
                  <li>Adicione Plano de Fundo</li>
                  <li>Página de Contato</li>
                  <li>Imagens nos itens</li>
                  <li>Cupom de desconto</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#free-trial" class="btn btn-common btn-effect">TESTE 14 DIAS</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table pricing-big">
              <div class="pricing-details">
                <h2><?=$texto['nomePlanoDois'];?></h2>
                <div class="price">R$<?=$texto['valorPlanoDois'];?> <span>,00</span></div>
                <ul>
                  <li>Assinatura de <?=$texto['DiasPlanoDois'];?> dias.</li>
                  <li>Pedidos Ilimitados</li>
                  <li>Itens Ilimitados</li>
                  <li>Fotos nos itens</li>
                  <li>Adicione Logo Marca</li>
                  <li>Adicione Plano de Fundo</li>
                  <li>Página de Contato</li>
                  <li>Imagens nos itens</li>
                  <li>Cupom de desconto</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#free-trial" class="btn btn-common btn-effect">TESTE 14 DIAS</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2><?=$texto['nomePlanoTres'];?></h2>
                <div class="price">R$<?=$texto['valorPlanoTres'];?> <span>,00</span></div>
                <ul>
                  <li>Assinatura de <?=$texto['DiasPlanoTres'];?> dias.</li>
                  <li>Pedidos Ilimitados</li>
                  <li>Itens Ilimitados</li>
                  <li>Fotos nos itens</li>
                  <li>Adicione Logo Marca</li>
                  <li>Adicione Plano de Fundo</li>
                  <li>Página de Contato</li>
                  <li>Imagens nos itens</li>
                  <li>Cupom de desconto</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#free-trial" class="btn btn-common btn-effect">TESTE 14 DIAS</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- End Pricing Table Section -->

    <!-- Counter Section Start -->
    <?php
      $totalCliente = 0;
      $lerbanco->ExeRead("ws_users");
      if( $lerbanco->getResult()):
        $totalCliente = $totalCliente + $lerbanco->getRowCount();
      endif;

      $totalItens = 0;
      $lerbanco->ExeRead("ws_itens");
      if( $lerbanco->getResult()):
        $totalItens = $totalItens + $lerbanco->getRowCount();
      endif;

      $totalPedidos = 0;
      $lerbanco->ExeRead("ws_pedidos");
      if( $lerbanco->getResult()):
        $totalPedidos = $totalPedidos + $lerbanco->getRowCount();
      endif;
    ?>
    <div class="counters section bg-defult">
      <div class="container">
        <div class="row"> 
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="facts-item"> 
              <div class="icon">
                <i class="lni-briefcase"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter"><?=$totalCliente;?></span></h3>
                <h4>Restaurantes</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-notepad"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter"><?=$totalItens;?></span></h3>
                <h4>Itens cadastrados</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-cart"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter"><?=$totalPedidos;?></span></h3>
                <h4>Pedidos Realizados</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Counter Section End -->

    <div id="cadastrar" class="container margin_60">
  <div class="main_title margin_mobile">
    <h2 class="nomargin_top">NUNCA FOI TÃO FÁCIL <strong>VENDER</strong> ONLINE</h2>
    <br />
    <p>
     Garantia total de satisfação! Teste grátis por <b style="font-size: 25px;"><?=$texto['DiasDeTeste'];?></b> dias.
   </p>
 </div>
 <div class="row">
   <div class="col-md-8 col-md-offset-2">
     <form id="formCadastro" autocomplete="off" method="post"> 

      <div class="row">
       <div class="col-md-6">
        <div class="form-group">
         <label for="nome_empresa">Nome da Loja</label>
         <input type="text" autocomplete="off" id="nome_empresa" name="nome_empresa" class="form-control" required placeholder="Nome da Loja">
       </div>
     </div>
     <div class="col-md-6">
      <div class="form-group">
       <label for="nome_empresa_link"><?=$site;?></label>
       <input style="text-transform: lowercase;" type="text" autocomplete="off"  id="nome_empresa_link" name="nome_empresa_link" class="form-control" required placeholder="/ coloque o nome da sua loja aqui sem espaços">
       <a class="btn btn-success btn-xs" id="verificarDisponibilidadeLink" style="color: #ffffff;cursor: pointer;margin-top: 5px;"><strong> verificar Disponibilidade </strong></a>
     </div>
   </div>
 </div><!-- End row  -->
 <div class="row">
   <div class="col-md-12">
    <div class="form-group">
     <label for="cep">Cep</label>
     <input type="text" required class="form-control" name="cep" id="cep" maxlength="10" data-mask="00.000-000" data-mask-selectonfocus="true" placeholder="00.000-000">   
   </div>
 </div>
</div><!-- End row  -->
 <div class="row">
   <div class="col-md-6">
    <div class="form-group">
     <label for="estados">Estado</label>
     <!--<select required class="form-control" name="end_uf_empresa" id="estados">     
     </select>-->  
     <input type="text" autocomplete="off" id="end_uf_empresa" required name="end_uf_empresa" class="form-control" placeholder="Estado/UF...">
   </div>
 </div>
 <div class="col-md-6">
  <div class="form-group">
   <label for="cidades">Cidade</label>
   <!--<select required class="form-control" name="cidade_empresa" id="cidades">    
   </select>-->
   <input type="text" autocomplete="off" id="cidade_empresa" required name="cidade_empresa" class="form-control" placeholder="Estado/UF...">
 </div>
</div>
</div><!-- End row  -->
<div class="row">
 <div class="col-md-6">
  <div class="form-group">
   <label for="end_bairro_empresa">Bairro</label>
   <input type="text" autocomplete="off" id="end_bairro_empresa" required name="end_bairro_empresa" class="form-control" placeholder="Bairro...">
 </div>
</div>
<div class="col-md-6">
  <div class="form-group">
   <label for="end_rua_n_empresa">Endereço Completo</label>
   <input type="text" autocomplete="off" id="end_rua_n_empresa" required name="end_rua_n_empresa" class="form-control" placeholder="Rua e Nº">
 </div>
</div>
</div><!-- End row  -->
<hr />
<div class="row">
 <div class="col-md-6 col-sm-6">
  <div class="form-group">
   <label for="user_name">Nome</label>
   <input type="text" required autocomplete="off" class="form-control" id="user_name" name="user_name" placeholder="Seu Nome">
 </div>
</div>
<div class="col-md-6 col-sm-6">
  <div class="form-group">
   <label for="user_lastname">Sobrenome</label>
   <input type="text" required autocomplete="off"  class="form-control" id="user_lastname" name="user_lastname" placeholder="Seu Sobrenome">
 </div>
</div>
</div>
<div class="row">
 <div class="col-md-6 col-sm-6">
  <div class="form-group">
   <label for="user_email">E-mail:</label>
   <input type="email" required autocomplete="off" id="user_email" name="user_email" class="form-control " placeholder="E-mail">
 </div>
</div>
<div class="col-md-6 col-sm-6">
  <div class="form-group">
   <label for="user_telefone">Telefone para contato:</label>
   <input type="tel" required autocomplete="off"  id="user_telefone" name="user_telefone" class="form-control" placeholder="(99) 99999-9999" data-mask="(00) 00000-0000" maxlength="15">
 </div>
</div>
</div>
<div class="row">
 <div class="col-md-6">
  <div class="form-group">
   <label for="user_password">Senha</label>
   <input type="password" required autocomplete="off" class="form-control" placeholder="*******" name="user_password"  id="user_password" />
 </div>
</div>
<div class="col-md-6">
  <div class="form-group">
   <label for="user_password2">Repita a Senha</label>
   <input type="password" required autocomplete="off"  class="form-control" placeholder="*******" name="user_password2"  id="user_password2" />
 </div>
</div>
<div class="col-md-6">
  <div class="form-group">
   <label for="user_password2">Coloque seu CPF</label>
   <input type="text" required autocomplete="off"  class="form-control cpf" placeholder="Insira aqui" name="user_cpf"  id="user_cpf" />
 </div>
</div>
</div><!-- End row  -->
<div class="form-group">
  <label>Escolha seu plano</label>
  <select name="user_plano" class="form-control" >
    <option value="">Selecione um Plano</option>
    <option value="1"><?=$texto['nomePlanoUm'];?></option>
    <option value="2"><?=$texto['nomePlanoDois'];?></option>
    <option value="3"><?=$texto['nomePlanoTres'];?></option>
  </select>
</div>

<div id="pass-info" class="clearfix"></div>
<!--
<div class="row">
 <div class="col-md-6">
   <label>Leia os <a href="#0">termos e condições.</a></label>
 </div>
</div>End row  -->
<hr style="border-color:#ddd;">

<div class="text-center">
  <input type="hidden" name=" empresa_status" value="true">
  <button type="button" id="cadastrarUser" class="btn_full_outline">Cadastrar Minha Loja</button>
</div>
</form>
</div><!-- End col  -->
</div><!-- End row  -->
    <!-- Call to Action Start -->
    <section id="faq" class="call-action section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Perguntas Frequentes</h2>
          <span>Perguntas</span>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="accordion">
              <div class="row">
                <div class="col-md-12">
                  <div class="accordion-item">
                    <a>Posso usar minha impressora térmica?</a>
                    <div class="content">
                      <p>SIM! Abaixo alguns dos modelos usados por clientes.</b><br />
                        3nStar RPT-008
                        Approx APPPOS80AM
                        AURES ODP-333
                        AURES ODP-500
                        Bematech-4200-TH
                        Bematech LR2000E
                        Birch PRP-085III
                        Bixolon SRP-350III
                        Bixolon SRP-350Plus
                        Black Copper BC-85AC
                        CHD TH-305N
                        Citizen CBM1000-II
                        Citizen CT-S310II
                        Dapper-Geyi Q583P
                        Daruma DR800
                        DR-MP200 (manufacturer unknown)
                        EPOS TEP 220M
                        Elgin i9
                        Epson EU-T332C
                        Epson FX-890
                        Epson TM-T20
                        Epson TM-T20II
                        Epson TM-T70
                        Epson TM-T70II
                        Epson TM-T81
                        Epson TM-T82II
                        Epson TM-T88II
                        Epson TM-T88III
                        Epson TM-T88IV
                        Epson TM-T88V
                        Epson TM-U220
                        Epson TM-U295
                        Epson TM-U590 and TM-U590P
                        Equal (EQ-IT-001) POS-58
                        Everycom EC-58
                        Excelvan HOP-E200
                        Excelvan HOP-E58
                        Excelvan HOP-E801
                        Gainscha GP-2120TF
                        Gainscha GP-5890x
                        Gainscha GP-U80300I
                        gprinter GP-U80160I
                        HOIN HOP-H58
                        Ithaca iTherm 28
                        Hasar HTP 250
                        Metapace T-1
                        Metapace T-25
                        Nexa PX700
                        Nyear NP100
                        OKI RT322
                        OKI 80 Plus III
                        Orient BTP-R580
                        P-822D
                        P85A-401 
                        Partner Tech RP320
                        POSLIGNE ODP200H-III-G
                        QPOS Q58M
                        Rongta RP326US
                        Rongta RP58-U
                        Rongta RP80USE
                        SAM4S GIANT-100DB
                        Senor TP-100
                        Sewoo SLK-TS400
                        SEYPOS PRP-96
                        SEYPOS PRP-300
                        SNBC BTP-R880NPIII
                        Solux SX-TP-88300
                        Sicar POS-80
                        Silicon SP-201 / RP80USE
                        SPRT SP-POS88V
                        Star BSC10
                        Star TSP100 ECO
                        Star TSP100III FuturePRNT
                        Star TSP-650
                        Star TUP-592
                        TVS RP45 Shoppe
                        Venus V248T
                        Xeumior SM-8330
                        Xprinter F-900
                        Xprinter XP-365B
                        Xprinter XP-58 Series
                        Xprinter XP-80C
                        Xprinter XP-90
                        XPrinter XP-Q20011
                        Xprinter XP-Q800
                        Zjiang NT-58H
                        Zjiang ZJ-5870
                        Zjiang ZJ-5890 
                        Zjiang ZJ-8220
                        Zjiang ZJ-8250</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="accordion-item">
                    <a>Quem pode usar essa ferramenta?</a>
                    <div class="content">
                      <p>É indicada para todos os negócios que atendam com delivery ou retirada no local, principalmente nichos do Foodservice. Basta realizar o cadastro em nossa plataforma para ter acesso ao painel e poder usar a ferramenta em seguida.</p>
                    </div>
                  </div>
                </div>    
                <div class="col-md-12">
                  <div class="accordion-item">
                    <a>Vocês realizam a entrega dos produtos?</a>
                    <div class="content">
                      <p>Não! Nesse momento a ferramenta apoia no recebimento dos pedidos, tornando o processo de produção mais prático e organizado.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="accordion-item">
                    <a>Quem fica responsável pela divulgação?</a>
                    <div class="content">
                      <p>O próprio estabelecimento é responsável pela divulgação, afinal, ninguém melhor que você para saber onde estão seus clientes. Mas, você pode, por exemplo, enviar o seu link público do <strong><?=$texto['nome_site_landing'];?></strong> por e-mail, Whatsapp e disponibilizar nas redes sociais. Além disso, criar uma lista de transmissão no Whatsapp e divulgar aos seus contatos pode ser uma ótima ideia! Estamos também preparando um blog para ajudar com dicas para seu negócio evoluir cada vez mais.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">    
                  <div class="accordion-item">
                  <a>Tem algum meio de pagamento integrado?</a>
                    <div class="content">
                      <p>Por enquanto não, mas em breve teremos novidades nesse sentido. Inclusive, suas sugestões e feedbacks são muito bem vindos! Faça um comentário escrevendo para <strong><?=$texto['emailSuporteSite'];?></strong></p>
                    </div>
                  </div>
                </div>
              </div>    
            </div>
          </div>
        </div>
       
      </div>
    </section>
    <!-- Call to Action End -->


    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-7 col-mb-12 text-center">
              <h3><img src="<?= $site; ?>img/new_template/logo.png" alt="Logo <?=$texto['nome_site_landing'];?>" style="width: 100%;"></h3>
              <div class="textwidget">
                <p>Nosso sistema e um aplicativo web totalmente responsivo e não possui necessidade de instalação por parte dos clientes, portanto, apenas divulgando o seu link nas redes sociais, o seu cliente pode visualizar seu menu e fazer o pedido pelo smartphone ou computador com muita comodidade.</p>
              </div>
              <ul class="footer-social">
                <li><a class="facebook" target="_blank" href="<?=(!empty($texto['link_do_face']) ? $texto['link_do_face'] : "javascript: void(0);");?>"><i class="icon-facebook"></i></a></li>
                <li><a class="instagram" target="_blank" href="<?=(!empty($texto['link_do_insta']) ? $texto['link_do_insta'] : "javascript: void(0);");?>"><i class="icon-instagram"></i></a></li>
                <li><a class="youtube" target="_blank" href="<?=(!empty($texto['link_do_youtube']) ? $texto['link_do_youtube'] : "javascript: void(0);");?>"><i class="icon-youtube-play"></i></a></li>
              </ul> 
            </div>
            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-7 col-mb-12 text-center">
              <div class="widget">
                <h3 class="block-title">Menu</h3>
                <ul class="menu">
                  <li>
                    <a class="page-scroll" href="#slider-area">Início</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Como funciona ? </a>
                  </li>  
                  <li>
                    <a class="page-scroll" href="#features">Benefícios</a>
                  </li>            
                  <li>
                    <a class="page-scroll" href="#pricing">Planos</a>
                  </li> 
                  <li>
                    <a class="page-scroll" href="#free-trial">Teste Grátis</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#faq">FAQ</a>
                  </li>  
                  <li>
                    <a class="page-scroll" href="https://gestorcontrol.com/submitticket.php?step=2&deptid=4" target="_blank">Suporte</a>
                  </li>
                  <li>
                    <a href="#javascript:void(0);" data-toggle="modal" data-target="#login_2">Login</a>
                  </li> 
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-7 col-mb-12 text-center">
              <div class="widget">
                <h3 class="block-title">Aceitamos</h3>
                <img src="<?= $site; ?>img/new_template/footer-seals.png" alt="Forma de Pagamento da <?=$texto['nome_site_landing'];?>" style="width: 100%;">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->
      
      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info text-center">
                <p>Copyright © 2021 - Todos os direitos reservados - cardaplus.com</a></p>
              </div>  
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End --> 

    <!-- Modal -->
    <div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="login_2Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-custom">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="lni-close" aria-hidden="true"></span>
            </button>
          </div>
          <div class="modal-body">
            <form class="popup-form" id="UsuarioLogin">
              <div class="login_icon"><i class="lni-lock"></i></div>
              <small style="color: #ffffff" id="resultadoLogin"></small>
              <input name="user" type="email" autocomplete="off" class="form-control form-white mt-2" placeholder="Login">
              <input name="pass" type="password" autocomplete="off" class="form-control form-white" placeholder="Senha">
              <div class="text-left">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?=$texto['telefoneAdministracaoTecnica'];?>">Esqueceu a senha?</a>
              </div>
              <button type="button" id="Entraruser"  class="btn btn-submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div id='whatsapp-chat' class='hide'>
      <div class='header-chat'>
        <div class='head-home'>
          <h4 style="color: #ffffff;">    
            <?php
              $hr = date(" H ");
              if ($hr >= 12 && $hr < 18) {
                  $resp = "Boa tarde!";
              } elseif ($hr >= 0 && $hr < 12) {
                  $resp = "Bom dia!";
              } else {
                  $resp = "Boa noite!";
              }
              echo "$resp";
            ?>
          </h4>
          <p class="text-white">Clique em um de nossos representantes abaixo para conversar no WhatsApp ou envie um email para <?= $texto['emailSuporteSite'] ?></p></div>
          <div class='get-new hide'><div id='get-label'></div><div id='get-nama'></div>
        </div>
      </div>
      <div class='home-chat'>
        <!-- Info Contact Start -->
        <a class='informasi' href='javascript:void' title='Chat Whatsapp'>
          <div class='info-avatar'><img src='<?= $site ?>img/supportmale.png'/></div>
          <div class='info-chat'>
            <span class='chat-label'>Suporte Técnico</span>
            <span class='chat-nama'>Atendimento ao Cliente 1</span>
          </div><span class='my-number'><?= $texto['telefoneAdministracaoTecnica'] ?></span>
        </a>
        <!-- Info Contact End -->
        <!-- Info Contact Start -->
        <a class='informasi' href='javascript:void' title='Chat Whatsapp'>
          <div class='info-avatar'><img src='<?= $site ?>img/supportfemale.png'/></div>
          <div class='info-chat'>
            <span class='chat-label'>Suporte Vendas</span>
            <span class='chat-nama'>Atendimento ao Cliente 2</span>
          </div><span class='my-number'><?= $texto['telefoneAdministracaoVendas'] ?></span>
        </a>
        <!-- Info Contact End -->
        <div class='blanter-msg'><b>HORÁRIOS: </b> de <i><?= $texto['horariosSuporteSite'] ?></i></div>
      </div>
      <div class='start-chat hide'>
        <div class='first-msg'><span>Olá, Como posso te ajudar?</span></div>
        <div class='blanter-msg'>
          <input type="text" id='chat-input2' maxlength='120' class="form-control" placeholder='Escreva uma pergunta...' />
          <a href='javascript:void;' id='send-it'><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
        </div>
      </div>
      <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
    </div>
    <a class='blantershow-chat' href='javascript:void' title='Show Chat'><i class='fab fa-whatsapp'></i>Precisa de ajuda?</a>
    <!-- partial -->

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>   

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?= $site; ?>js/new_template/jquery-min.js"></script>
    <script src="<?= $site; ?>js/new_template/popper.min.js"></script>
    <script src="<?= $site; ?>js/new_template/bootstrap.min.js"></script>
    <script src="<?= $site; ?>js/new_template/classie.js"></script>
    <script src="<?= $site; ?>js/new_template/color-switcher.js"></script>
    <script src="<?= $site; ?>js/new_template/jquery.mixitup.js"></script>
    <script src="<?= $site; ?>js/new_template/nivo-lightbox.js"></script>
    <script src="<?= $site; ?>js/new_template/owl.carousel.js"></script>    
    <script src="<?= $site; ?>js/new_template/jquery.stellar.min.js"></script>    
    <script src="<?= $site; ?>js/new_template/jquery.nav.js"></script>    
    <script src="<?= $site; ?>js/new_template/scrolling-nav.js"></script>    
    <script src="<?= $site; ?>js/new_template/jquery.easing.min.js"></script>     
    <script src="<?= $site; ?>js/new_template/wow.js"></script> 
    <script src="<?= $site; ?>js/new_template/jquery.vide.js"></script>
    <script src="<?= $site; ?>js/new_template/jquery.counterup.min.js"></script>    
    <script src="<?= $site; ?>js/new_template/jquery.magnific-popup.min.js"></script>    
    <script src="<?= $site; ?>js/new_template/waypoints.min.js"></script>    
    <script src="<?= $site; ?>js/new_template/form-validator.min.js"></script>
    <script src="<?= $site; ?>js/new_template/contact-form-script.js"></script>   
    <script src="<?= $site; ?>js/new_template/main.js"></script>
    <script src="<?= $site; ?>js/new_template/faq.js"></script>


    <script type="text/javascript">
      $(document).ready(function(){
        $('#fecharmodallogin').click(function(){
          $("#login_2").modal('hide');
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('#Entraruser').click(function(){
          $('#Entraruser').prop('disabled', true);
          $('#Entraruser').html('Fazendo Login...');

          $.ajax({
            url: '<?=$site?>controlers/login_User.php',
            method: 'post',
            data: $('#UsuarioLogin').serialize(),
            success: function(data){
              $('#Entraruser').prop('disabled', false);
              $('#Entraruser').html('Entrar');
              $('#resultadoLogin').html(data);

            }


          });

        });
      });
    </script>


    <!-- COMMON SCRIPTS -->
    <script src="<?=$site;?>js/common_scripts_min.js"></script>
    <script src="<?=$site;?>js/functions.js"></script>
    <script src="<?=$site;?>assets/validate.js"></script>
    <script src="<?=$site; ?>notificacao/growl-notification.min.js"></script> 
    <script src="<?=$site;?>js/sweetalert.min.js"></script>
    <script src="<?=$site;?>js/jquery.mask.js"></script>
    <script src="<?=$site;?>js/suportewats.js"></script>

    <script type="text/javascript">
      // LOGIN
      $(document).ready(function(){
      $("#cadastrarUser").click(function(){
        //formCadastro
        $(this).html('<i class="icon-spin5 animate-spin"></i> AGUARDE...');
        $(this).prop('disabled', true);

        $.ajax({
          url: '<?=$site;?>controlers/processaCadastroUser.php',
          method: 'post',
          data: $('#formCadastro').serialize(),
          success: function(data){
            if(data == "erro1"){
              x0p('Opsss', 
                'Preencha todos os campos!',
                'error', false);
              $('#cadastrarUser').html('Cadastrar Minha Loja');
              $('#cadastrarUser').prop('disabled', false);
            }else if(data == "erro2"){
              x0p('Opsss', 
                'O E-mail informado e inválido!',
                'error', false);
              $('#cadastrarUser').html('Cadastrar Minha Loja');
              $('#cadastrarUser').prop('disabled', false);
            }else if(data == "erro3"){
              x0p('Opsss', 
                'A senha informada deve ter no mínimo 8 caracteres!',
                'error', false);
              $('#cadastrarUser').html('Cadastrar Minha Loja');
              $('#cadastrarUser').prop('disabled', false);
            }else if(data == "erro4"){
              x0p('Opsss', 
                'As senhas não coincidem!',
                'error', false);
              $('#cadastrarUser').html('Cadastrar Minha Loja');
              $('#cadastrarUser').prop('disabled', false);
            }else if(data == "erro5"){
              x0p('Opsss', 
                'Esse link não está disponível!',
                'error', false);
              $('#cadastrarUser').html('Cadastrar Minha Loja');
              $('#cadastrarUser').prop('disabled', false);
            }else if(data == "erro6"){
              x0p('Opsss', 
                'Já existe uma conta com esses dados!',
                'error', false);
              $('#cadastrarUser').html('Cadastrar Minha Loja');
              $('#cadastrarUser').prop('disabled', false);
            }else if(data == "erro0"){
              x0p('Opsss', 
                'OCORREU UM ERRO AO CADASTRAR!',
                'error', false);
              $('#cadastrarUser').html('Cadastrar Minha Loja');
              $('#cadastrarUser').prop('disabled', false);
            }else{
            x0p('Sucesso!', 
              'Agora você pode fazer login.', 
              'ok', false);
            $('#cadastrarUser').html('Cadastrar Minha Loja');
            $('#cadastrarUser').prop('disabled', false);
          }
          
        }
      });

      }); 
    });
    </script>


    <script type="text/javascript">
      $(document).ready(function(){
        $('#verificarDisponibilidadeLink').click(function(){
          var linkuser = $('#nome_empresa_link').val();

          if(linkuser == ''){
            x0p('Opss...', 
              'Antes preencha o campo!',
              'error', false);
          }else{

            $.ajax({
              url: '<?=$site?>controlers/processaverificadisponibilidadelink.php',
              method: 'post',
              data: {'linkuser' : linkuser},
              success: function(data){

                if(data == 'true'){
                  x0p('Que pena! 😔', 
                    'Esse link não está disponível!',
                    'error', false);
                }else{
                  $('#nome_empresa_link').val(data);
                  x0p('Muito bom! 😍', 
                    '<?=$site;?>'+data+' está disponível!', 
                    'ok', false);
                }          
              }
            });

          }
        });
      });
    </script>



    <script language="JavaScript">
      window.onload = function() {
        // document.addEventListener("contextmenu", function(e){
        //   e.preventDefault();
        // }, false);
        document.addEventListener("keydown", function(e) {
                //document.onkeydown = function(e) {
                  // "I" key
                  if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                    disabledEvent(e);
                  }
                  // "J" key
                  if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                    disabledEvent(e);
                  }
                  // "S" key + macOS
                  if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                    disabledEvent(e);
                  }
                  // "U" key
                  if (e.ctrlKey && e.keyCode == 85) {
                    disabledEvent(e);
                  }
                  // "F12" key
                  if (event.keyCode == 123) {
                    disabledEvent(e);
                  }
                }, false);
        function disabledEvent(e){
          if (e.stopPropagation){
            e.stopPropagation();
          } else if (window.event){
            window.event.cancelBubble = true;
          }
          e.preventDefault();
          return false;
        }
      };
    </script>


    <script type="text/javascript"> 

      $(document).ready(function () {

        $.getJSON('<?=$site;?>estados_cidades.json', function (data) {

          var items = [];
          var options = '<option value="<?=(!empty($end_uf_empresa) ? $end_uf_empresa : "");?>"><?=(!empty($end_uf_empresa) ? $end_uf_empresa : "Escolha um estado");?></option>';  

          $.each(data, function (key, val) {
            options += '<option value="' + val.sigla + '">' + val.sigla + '</option>';
          });         
          $("#estados").html(options);        

          $("#estados").change(function () {        

            var options_cidades = '<option value="<?=(!empty($cidade_empresa) ? $cidade_empresa : "");?>"><?=(!empty($cidade_empresa) ? $cidade_empresa : "Escolha uma Cidade");?></option>';
            var str = "";         

            $("#estados option:selected").each(function () {
              str += $(this).text();
            });

            $.each(data, function (key, val) {
              if(val.sigla == str) {              
                $.each(val.cidades, function (key_city, val_city) {
                  options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
                });             
              }
            });

            $("#cidades").html(options_cidades);

          }).change();    

        });

      });

    </script>

    <script>

      $('#dinheiro').mask('#.##0,00', {reverse: true});
      $('.telefone').mask('(00) 0 0000-0000');
      $('.estado').mask('AA');
      $('.cpf').mask('000-000.000-00');
      $('.cnpj').mask('00.000.000/0000-00');
      $('.rg').mask('00.000.000-0');
      $('.cep').mask('00000-000');
      $('.dataNascimento').mask('00/00/0000');
      $('.placaCarro').mask('AAA-0000');
      $('.horasMinutos').mask('00:00');
      $('.cartaoCredito').mask('0000 0000 0000 0000');
      $('.numero').mask('#########0');
      $('.descontoporcentagem').mask('##0');
    </script>



  </body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pizza do Bessa</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('img/others/pizza.svg') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114.png') }}">

<!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}">
<!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nivo-lightbox/nivo-lightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nivo-lightbox/default.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand page-scroll" href="#page-top">Pizza do Bessa</a>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">Sobre</a></li>
        <li><a href="#portfolio" class="page-scroll">Cardápio</a></li>
        <li><a href="#team" class="page-scroll">Promoções</a></li>
        <li><a href="#" onclick="abreModal()" data-toggle="modal">Pedido</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Pizza do Bessa</h1>
            <p>Para ser feliz não tem dia. Para comer pizza também não!</p>
            <a href="https://api.whatsapp.com/send?phone=5585996694049&text=Ol%C3%A1!%20Gostaria%20de%20fazer%20um%20pedido!" target="_blank" class="btn btn-custom btn-lg page-scroll">Faça seu pedido <i class="fa fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="{{ asset('img/about.jpg') }}" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Sobre nós</h2>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio" class="text-center">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Cardápio</h2>
      <hr>
      <p>Dinheiro não compra felicidade, mas compra pizza que é a mesma coisa!</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">Tudo</a></li>
              <li><a href="#" data-filter=".tradicionais">Tradicionais</a></li>
              <li><a href="#" data-filter=".tops">Top's</a></li>
              <li><a href="#" data-filter=".doces">Doces</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4 tradicionais">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset('img/portfolio/01-large.jpg') }}" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="{{ asset('img/portfolio/01-small.jpg') }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 doces">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset('img/portfolio/02-large.jpg') }}" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="{{ asset('img/portfolio/02-small.jpg') }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 tradicionais">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset('img/portfolio/03-large.jpg') }}" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="{{ asset('img/portfolio/03-small.jpg') }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 tradicionais">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset('img/portfolio/04-large.jpg') }}" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="{{ asset('img/portfolio/04-small.jpg') }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 doces">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset('img/portfolio/05-large.jpg') }}" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="{{ asset('img/portfolio/05-small.jpg') }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 tops">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset('img/portfolio/06-large.jpg') }}" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="{{ asset('img/portfolio/06-small.jpg') }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 tops">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset('img/portfolio/07-large.jpg') }}" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="{{ asset('img/portfolio/07-small.jpg') }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 tradicionais">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset('img/portfolio/08-large.jpg') }}" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="{{ asset('img/portfolio/08-small.jpg') }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 doces">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset('img/portfolio/09-large.jpg') }}" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="{{ asset('img/portfolio/09-small.jpg') }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 tops">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset('img/portfolio/10-large.jpg') }}" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="{{ asset('img/portfolio/10-small.jpg') }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 tops">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset('img/portfolio/11-large.jpg') }}" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="{{ asset('img/portfolio/11-small.jpg') }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 tradicionais">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset('img/portfolio/12-large.jpg') }}" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="{{ asset('img/portfolio/12-small.jpg') }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-custom btn-lg"  data-toggle="modal" data-target="#exampleModal">Cardápio Completo</button>
</div>
<!-- Modal -->
<div class="container">
  <div class="modal fade bd-example-modal-lg modal-dialog-scrollable" id="exampleModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content"> 
        <div class="modal-header ctnFlex">
          <h5 class="modalheader btn" id="exampleModalLabel">Cardápio Completo</h5>
          <button class="btn carBtn" data-dismiss="modal" onclick="abreModal()"><i class="fa fa-shopping-cart"><span id="cont" class="modalclose">0</span></i></button>
          <button class="btn modalclose" type="button" class="close" data-dismiss="modal" aria-label="Close"><span><i class="fa fa-close"></i></span></button>
        </div>

        <div class="modal-body"> 
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">  
                  <div class="box-collapsed-prods ctnFlex">
                    <button class="btn btn-link collapsed btn-collapsed-prods btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <h2 class="collapsed-section-title">Pizzas Tradicionais</h2>
                      <span class="chevron"><i class="fa fa-chevron-circle-down"></i></span>
                    </button>
                  </div>
                </h5>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <div id="restaurant-menu">
                    <div class="contianer"> 
                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <div class="menu-section">
                            
                            @foreach($p_tradicional as $produto)
                            <div class="menu-item">
                              <div id="prodNome" class="menu-item-name">{{$produto -> descricao}}</div>
                              <div id="prodValor" class="menu-item-price">R$ {{number_format($produto -> valor,2)}}</div>
                              <div class="menu-item-description">{{$produto -> detalhes}}</div>
                              <button id="{{$produto -> id}}" class="btn btnadc"><i class="fa fa-plus"></i></button>
                              <button id="{{$produto -> id}}" class="btn btnrmv" data-toggle="modal" data-dismiss="modal" onclick="abreModal()"><i class="fa fa-list"></i></button>
                            </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">  
                  <div class="box-collapsed-prods ctnFlex">
                    <button class="btn btn-link collapsed btn-collapsed-prods btn-block" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <h2 class="collapsed-section-title">Pizzas Top's</h2>
                      <span class="chevron"><i class="fa fa-chevron-circle-down"></i></span>
                    </button>
                  </div>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <div id="restaurant-menu">
                    <div class="contianer"> 
                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <div class="menu-section">
                            
                            @foreach($p_tops as $produto)
                            <div class="menu-item">
                              <div id="prodNome" class="menu-item-name">{{$produto -> descricao}}</div>
                              <div id="prodValor" class="menu-item-price">R$ {{number_format($produto -> valor,2)}}</div>
                              <div class="menu-item-description">{{$produto -> detalhes}}</div>
                              <button id="{{$produto -> id}}" class="btn btnadc"><i class="fa fa-plus"></i></button>
                              <button id="{{$produto -> id}}" class="btn btnrmv" data-toggle="modal" data-dismiss="modal" onclick="abreModal()"><i class="fa fa-list"></i></button>
                            </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">  
                  <div class="box-collapsed-prods ctnFlex">
                    <button class="btn btn-link collapsed btn-collapsed-prods btn-block" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <h2 class="collapsed-section-title">Pizzas Doces</h2>
                      <span class="chevron"><i class="fa fa-chevron-circle-down"></i></span>
                    </button>
                  </div>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <div id="restaurant-menu">
                    <div class="contianer"> 
                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <div class="menu-section">
                            
                            @foreach($p_doces as $produto)
                            <div class="menu-item">
                              <div id="prodNome" class="menu-item-name">{{$produto -> descricao}}</div>
                              <div id="prodValor" class="menu-item-price">R$ {{number_format($produto -> valor,2)}}</div>
                              <div class="menu-item-description">{{$produto -> detalhes}}</div>
                              <button id="{{$produto -> id}}" class="btn btnadc"><i class="fa fa-plus"></i></button>
                              <button id="{{$produto -> id}}" class="btn btnrmv" data-toggle="modal" data-dismiss="modal" onclick="abreModal()"><i class="fa fa-list"></i></button>
                            </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">  
                  <div class="box-collapsed-prods ctnFlex">
                    <button class="btn btn-link collapsed btn-collapsed-prods btn-block" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <h2 class="collapsed-section-title">Refrigerantes</h2>
                      <span class="chevron"><i class="fa fa-chevron-circle-down"></i></span>
                    </button>
                  </div>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <div id="restaurant-menu">
                    <div class="contianer"> 
                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <div class="menu-section">
                            
                            @foreach($p_refris as $produto)
                            <div class="menu-item">
                              <div id="prodNome" class="menu-item-name">{{$produto -> descricao}}</div>
                              <div id="prodValor" class="menu-item-price">R$ {{number_format($produto -> valor,2)}}</div>
                              <div class="menu-item-description">{{$produto -> detalhes}}</div>
                              <button id="{{$produto -> id}}" class="btn btnadc"><i class="fa fa-plus"></i></button>
                              <button id="{{$produto -> id}}" class="btn btnrmv" data-toggle="modal" data-dismiss="modal" onclick="abreModal()"><i class="fa fa-list"></i></button>
                            </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">  
                  <div class="box-collapsed-prods ctnFlex">
                    <button class="btn btn-link collapsed btn-collapsed-prods btn-block" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      <h2 class="collapsed-section-title">Adicionais</h2>
                      <span class="chevron"><i class="fa fa-chevron-circle-down"></i></span>
                    </button>
                  </div>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <div id="restaurant-menu">
                    <div class="contianer"> 
                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <div class="menu-section">
                            
                            @foreach($p_adc as $produto)
                            <div class="menu-item">
                              <div id="prodNome" class="menu-item-name">{{$produto -> descricao}}</div>
                              <div id="prodValor" class="menu-item-price">R$ {{number_format($produto -> valor,2)}}</div>
                              <div class="menu-item-description">{{$produto -> detalhes}}</div>
                              <button id="{{$produto -> id}}" class="btn btnadc"><i class="fa fa-plus"></i></button>
                              <button id="{{$produto -> id}}" class="btn btnrmv" data-toggle="modal" data-dismiss="modal" onclick="abreModal()"><i class="fa fa-list"></i></button>
                            </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">  
                  <div class="box-collapsed-prods ctnFlex">
                    <button class="btn btn-link collapsed btn-collapsed-prods btn-block" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      <h2 class="collapsed-section-title">Bordas</h2>
                      <span class="chevron"><i class="fa fa-chevron-circle-down"></i></span>
                    </button>
                  </div>
                </h5>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <div id="restaurant-menu">
                    <div class="contianer"> 
                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <div class="menu-section">
                            @foreach($p_borda as $produto)
                            <div class="menu-item">
                              <div id="prodNome" class="menu-item-name">{{$produto -> descricao}}</div>
                              <div id="prodValor" class="menu-item-price">R$ {{number_format($produto -> valor,2)}}</div>
                              <div class="menu-item-description">{{$produto -> detalhes}}</div>
                              <button id="{{$produto -> id}}" type="button" class="btn btnadc"><i class="fa fa-plus"></i></button>
                              <button id="{{$produto -> id}}" class="btn btnrmv" data-toggle="modal" data-dismiss="modal" onclick="abreModal()"><i class="fa fa-list"></i></button>
                            </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-close" data-dismiss="modal">Sair</button>
          <button type="button" data-toggle="modal" data-dismiss="modal" onclick="abreModal()" class="btn btn-save">Salvar</button>
        </div>
      </div>
    </div>
  </div> 
</div>
<!-- Modal Confirm -->
<div class="container">
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header ctnFlex">
          <h5 class="modalheader btn" id="exampleModalLabel">Seu pedido</h5>
          <button class="btn carBtn"><i class="fa fa-shopping-cart"><span id="cont2" class="modalclose">0</span></i></button>
          <button class="btn modalclose" type="button" class="close" data-dismiss="modal" aria-label="Close"><span><i class="fa fa-close"></i></span></button>
        </div>
          <div id="tablesProd" class="modal-body checkoutTotal">
            <!--<table class="greyGridTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>PRODUTO</th>
                  <th>VALOR</th>
                  <th>X</th>
                </tr>
              </thead>
              <tbody>
                  
              </tbody>
            </table>
            <span id="valorTotal" class="checkoutTotal"></span>-->      
          </div>
          <div class="modal-footer">
            <button type="button" data-toggle="modal" data-dismiss="modal" onclick="abreMenu()" class="btn btn-close">Cardápio</button>
            <button type="button" class="btn btn-save" onclick="geraMsg()">Finalizar</button>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team" class="team text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>Promoções</h2>
        <hr>
        <p>As melhores promoções e combos</p>
      </div>
      <div id="row">
        <div class="col-md-12 team">
          <div class="thumbnail">
            <div class="team-img"><img src="{{ asset('img/promos/promo1.jpg') }}" alt="..."></div>
            <div class="caption">
              <h3>Terça a Quinta</h3>
              <p>Pizza Tradicional + Refrigerante 1L + Borda</p>
              <h3>R$ 29,99</h3>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="col-md-4">
      <h3>Endereço</h3>
      <div class="contact-item">
        <p>R. 05, 76 - Parque Havai</p>
        <p>Eusébio - CE</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Funcionamento</h3>
      <div class="contact-item">
        <p>Segunda a Domingo</p>
        <p>18:00 às 22:30</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Contato</h3>
      <div class="contact-item">
        <p>Telefone</p>
        <p>(85) 98809-5457</p>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center copyrights">
    <div class="col-md-8 col-md-offset-2">
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/pizzadobessa/" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://api.whatsapp.com/send?phone=5585988095457&text=Ol%C3%A1!%20Gostaria%20de%20fazer%20um%20pedido!" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
      </div>
      <p>&copy; 2021 MBMDevs. Todos os direitos reservados. Feito por <a href="https://www.linkedin.com/in/matheus-de-souza-rufino-b8220715b" target="_blank">Matheus de Souza</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{ asset('js/jquery.1.11.1.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/bootstrapp.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/SmoothScroll.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/nivo-lightbox.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/jquery.isotope.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/jqBootstrapValidation.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/contact_me.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/store.js') }}"></script>
</body>
</html>

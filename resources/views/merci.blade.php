<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN | COMMANDES</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
 <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
 <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
 <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
 <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&family=Source+Code+Pro:ital@1&display=swap" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,400i,600,700' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Source+Code+Pro:ital@1&display=swap" rel="stylesheet">
  <!-- Css -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
  <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('css/sliders.css')}}" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <!-- CSS only -->

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<header class="nav-type-1">
    <!-- Fullscreen search -->
    <div class="search-wrap">
      <div class="search-inner">
        <div class="search-cell">
          <form method="get">
            <div class="search-field-holder">
              <input type="search" class="form-control main-search-input" placeholder="Search for">
              <i class="ui-close search-close" id="search-close"></i>
            </div>            
          </form>
        </div>
      </div>        
    </div> <!-- end fullscreen search -->

    <!-- Top Bar -->
    <div class="top-bar hidden-xs">
      <div class="messagedefilant">
      <div class="container">
        <div class="top-bar-links flex-parent">
            <div style="margin-top:43px;color:#fafafa" data-text="Merci pour votre confiance ! "><span>Merci pour votre confiance ! </span></div>
          </div>
           
         
              </div>
           

        <style>
        /* Texte défilant */
.messagedefilant {
display: block;
margin: 1px auto;
padding: 0;
overflow: hidden;
position: relative;
width: 50%;
max-width: 640px;
height: 60px;
}

.messagedefilant div {
position: absolute;
min-width: 100%; /* au minimum la largeur du conteneur */
}

.messagedefilant div span, 
.messagedefilant div:after {
position: relative;
display: inline-block;
font-size: 2rem;
white-space: nowrap;
top:0;
}

.messagedefilant div span {
animation: defilement 10s infinite linear;
background:;
}

.messagedefilant div:after {
position: absolute;
top:0; left:0;
content:attr(data-text);
animation: defilement2 10s infinite linear;
background: ;
}

@keyframes defilement {
0% { margin-left: 0; }
100% { margin-left: -100%; }
}

@keyframes defilement2 {
0% { margin-left: 100%; }
100% { margin-left: 0%; }
}
        </style>

        </div>
      </div>
    </div> <!-- end top bar -->
    
    <nav class="navbar navbar-static-top">
      <div class="navigation" id="sticky-nav">
        <div class="container relative">

          <div class="row flex-parent">

            <div class="navbar-header flex-child">
              <!-- Logo -->
              <div class="logo-container">
                <div class="logo-wrap">
                  <a href="/">
                    <img class="logo-dark" src="img/ANM.png" alt="logo">
                  </a>
                </div>
              </div>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- Mobile cart -->
              <div class="nav-cart mobile-cart hidden-lg hidden-md">
                <div class="nav-cart-outer">
                  <div class="nav-cart-inner">
                    <a href="#" class="nav-cart-icon">
                      <span class="nav-cart-badge">2</span>
                    </a>
                  </div>
                </div>
              </div>
            </div> <!-- end navbar-header -->

            <div class="nav-wrap flex-child">
              <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                
                <ul class="nav navbar-nav">

                  <li class="dropdown">
                    <a href="#">Home</a>
                    <i class="fa fa-angle-down dropdown-trigger"></i>
                   
                  </li>

                  <li class="dropdown">
                    <a href="#">Pages</a>
                    <i class="fa fa-angle-down dropdown-trigger"></i>
                    <ul class="dropdown-menu">
                      
                      <li><a href="{{url('achat')}}">Achat</a></li>
                      <li><a href="{{url('VenteForm')}}">Vente</a></li>
                    </ul>
                  </li>

                 


                  <li class="dropdown">
                    <a href="#featured">Notre collection</a>
                    <i class="fa fa-angle-down dropdown-trigger"></i>
                   
                  </li> <!-- end elements -->

                
                
                  <!-- Mobile search -->
                  <li id="mobile-search" class="hidden-lg hidden-md">
                    <form method="get" class="mobile-search">
                      <input type=".." class="form-control" placeholder="Search...">
                      <button type="submit" class="search-button">
                        <i class="fa fa-search"></i>
                      </button>
                    </form>
                  </li>

                </ul> <!-- end menu -->
              </div> <!-- end collapse -->
            </div> <!-- end col -->

            <div class="flex-child flex-right nav-right hidden-sm hidden-xs">
              <ul>
                
                <li class="nav-search-wrap style-2 hidden-sm hidden-xs">
                  <a href="#" class="nav-search search-trigger">
                    <i class="fa fa-search"></i>
                  </a>
                </li>
                <li class="nav-cart">
                  <div class="nav-cart-outer">
                    <div class="nav-cart-inner">
                      <a href="#" class="nav-cart-icon">
                        
                      </a>
                    </div>
                  </div>
                  {{-- <div class="nav-cart-container">
                    <div class="nav-cart-items">

                      <div class="nav-cart-item clearfix">
                        <div class="nav-cart-img">
                          <a href="#">
                            <img src="img/shop/shop_item_1.jpg" alt="">
                          </a>
                        </div>
                        <div class="nav-cart-title">
                          <a href="#">
                            Ladies Bag
                          </a>
                          <div class="nav-cart-price">
                            <span>1 x</span>
                            <span>1250.00</span>
                          </div>
                        </div>
                        <div class="nav-cart-remove">
                          <a href="#" class="remove"><i class="ui-close"></i></a>
                        </div>
                      </div>

                      <div class="nav-cart-item clearfix">
                        <div class="nav-cart-img">
                          <a href="#">
                            <img src="img/shop/shop_item_2.jpg" alt="">
                          </a>
                        </div>
                        <div class="nav-cart-title">
                          <a href="#">
                            Sequin Suit longer title
                          </a>
                          <div class="nav-cart-price">
                            <span>1 x</span>
                            <span>1250.00</span>
                          </div>
                        </div>
                        <div class="nav-cart-remove">
                          <a href="#" class="remove"><i class="ui-close"></i></a>
                        </div>
                      </div>

                    </div> <!-- end cart items -->

                    <div class="nav-cart-summary">
                      <span>Cart Subtotal</span>
                      <span class="total-price">$1799.00</span>
                    </div>

                    <div class="nav-cart-actions mt-20">
                      <a href="shop-cart.html" class="btn btn-md btn-dark"><span>View Cart</span></a>
                      <a href="shop-checkout.html" class="btn btn-md btn-color mt-10"><span>Proceed to Checkout</span></a>
                    </div>
                  </div> --}}
                </li>
              </ul>
            </div>
        
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div> <!-- end navigation -->
    </nav> <!-- end navbar -->
  </header>
<body class="relative">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div>

  <main class="main-wrapper">

    <header class="nav-type-1">
      <!-- Fullscreen search -->
      <div class="search-wrap">
        <div class="search-inner">
          <div class="search-cell">
            <form method="get">
              <div class="search-field-holder">
                <input type="search" class="form-control main-search-input" placeholder="Search for">
                <i class="ui-close search-close" id="search-close"></i>
              </div>            
            </form>
          </div>
        </div>        
      </div> <!-- end fullscreen search -->

     
      
      <nav class="navbar navbar-static-top">
        <div class="navigation" id="sticky-nav">
          <div class="container relative">

            <div class="row flex-parent">

              <div class="navbar-header flex-child">
                <!-- Logo -->
                <div class="logo-container">
                  <div class="logo-wrap">
                
                  </div>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Mobile cart -->
                <div class="nav-cart mobile-cart hidden-lg hidden-md">
                  <div class="nav-cart-outer">
                    <div class="nav-cart-inner">
                      <a href="#" class="nav-cart-icon">
                        <span class="nav-cart-badge">2</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div> <!-- end navbar-header -->

             

              
          
            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header>


<div class="container">

    <form action="{{url("/telechargerFacture")}}" method="POST">
    @csrf
        <input type="hidden" name="id" value="{{$commande->id}}">
        <center>

            <button type="submit" class="styled">  Telecharger Facture </button>

        </center>
    </form>
</div>

<style>
 


.styled {
    border: 0;
    line-height: 2.5;
    padding: 20px 30px;
    margin-bottom: 50px
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgb(18, 220, 0);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.styled:hover {
    background-color: rgba(18, 220, 0);
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}
.styled{
    margin: 14%;

}
</style>
<footer class="footer footer-type-1">
    <div class="container">
      <div class="footer-widgets">
        <div class="row">

          <div class="col-md-2 col-sm-12 col-xs-12">
            <div class="widget footer-about-us">
              <img src="img/ANM.png" alt="" class="logo">
              <div class="footer-socials">
              
              </div>
            </div>
          </div> <!-- end about us -->

          <div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
            <div class="widget footer-links">
              <h5 class="widget-title bottom-line left-align grey">Information</h5>
              <ul class="list-no-dividers">
                <li><a href="#">About us</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="widget footer-links">
              <h5 class="widget-title bottom-line left-align grey">Pages</h5>
              <ul class="list-no-dividers">                  
                <li><a href="#">Acheter</a></li>
                <li><a href="#">Vendre</a></li>
             
             
              </ul>
            </div>
          </div>

        

          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="widget footer-links">
              <h5 class="widget-title bottom-line left-align grey">Service</h5>
              <ul class="list-no-dividers">
                <li><a href="#">Securité des données </a></li>
                <li><a href="#">Livraison en temps</a></li>
                <li><a href="#">Fiabilité</a></li>
                <li><a href="#">Contact en ligne </a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>    
    </div> <!-- end container -->

    <div class="bottom-footer">
      <div class="container">
        <div class="row">

          <div class="col-sm-6 copyright sm-text-center">
            <span>
              &copy; 2021  by A N M 
            </span>
          </div>

          <div class="col-sm-6 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
           
          </div>

        </div>
      </div>
    </div> <!-- end bottom footer -->
  </footer> <!-- end footer -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>  
  <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
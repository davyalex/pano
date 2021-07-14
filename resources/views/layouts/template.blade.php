
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>{{ config('app.name', 'Laravel') }} | @yield('title','Bienvenue sur votre plateforme petite annonce')</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}">
{{-- <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css"  />

<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css"  /> --}}
<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css"  />
<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css"  />


<link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css"  />
{{-- <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet"type="text/css"> --}}
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"type="text/css">
{{-- <link href="{{ asset('css/docs.theme.min.css') }}" rel="stylesheet"type="text/css"> --}}


<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link rel="{{ asset('stylesheet') }}" type="text/css" href="css/jquery-ui1.css">
{{-- <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" type="text/css"  />
<link href="{{ asset('css/select2.css') }}" rel="stylesheet" type="text/css"  /> --}}
    {{-- <script  type="text/javascript"  src="{{ asset('js/select2.min.js') }}"></script> --}}
	

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, shrink-to-fit=no">
{{-- <meta http-equiv="X-UA-Compatible" content="ie=edge; charset=utf-8"> --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> --}}
<meta name="description" content="Petites annonces gratuites et réseau de proximité dans les services, l&#39;emploi, et le jobbing. Créez votre profil, publier vos annonces sur pano.com| pano">
    
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script  type="text/javascript"  src="{{ asset('js/jquery.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
    <script src="js/tabs.js"></script>
	
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
	});
});
</script>
</head>

<body style="background-color:#ded6d6;">
    



@yield('content')





<!--footer section start-->		
<footer>
    {{-- <div class="footer-top">
        <div class="container">
            <div class="foo-grids">
                <div class="col-md-3 footer-grid">
                    <h4 class="footer-head">Who We Are</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4 class="footer-head">Help</h4>
                    <ul>
                        <li><a href="howitworks.html">How it Works</a></li>						
                        <li><a href="sitemap.html">Sitemap</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="feedback.html">Feedback</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="typography.html">Shortcodes</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4 class="footer-head">Information</h4>
                    <ul>
                        <li><a href="regions.html">Locations Map</a></li>	
                        <li><a href="terms.html">Terms of Use</a></li>
                        <li><a href="popular-search.html">Popular searches</a></li>	
                        <li><a href="privacy.html">Privacy Policy</a></li>	
                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4 class="footer-head">Contact Us</h4>
                    <span class="hq">Our headquarters</span>
                    <address>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-map-marker"></span></li>
                            <li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
                            <div class="clearfix"></div>
                        </ul>	
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-earphone"></span></li>
                            <li>+0 561 111 235</li>
                            <div class="clearfix"></div>
                        </ul>	
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-envelope"></span></li>
                            <li><a href="mailto:info@example.com">mail@example.com</a></li>
                            <div class="clearfix"></div>
                        </ul>						
                    </address>
                </div>
                <div class="clearfix"></div>
            </div>						
        </div>	
    </div>	 --}}
    <div class="footer-bottom text-center">
    <div class="container">
        <div class="footer-logo">
            <img class="img-fluid img-responsive figure-img logo" src="{{ asset('images/pano NSF.png') }}" alt="">
          
        </div>
        <style>
            .lien_footer ul li{
               list-style: none;
            }
            .lien_footer a{
               font-size: 15px;
             
               color: #ded6d6;
               font-weight: bold;
              text-decoration-style: solid;
            }
        </style>
        <div class="lien_footer">
            <ul>
                {{-- <li><a class="facebook" href="#"><span>Facebook</span>rrr</a></li>
                <li><a class="twitter" href="#"><span>Twitter</span></a></li>
                <li><a class="flickr" href="#"><span>Flickr</span></a></li>
                <li><a class="googleplus" href="#"><span>Google+</span></a></li>
                <li><a class="dribbble" href="#"><span>Dribbble</span></a></li> --}}
                <li><a href="/post.create"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Acceuil</a></li>
                <li><a href="/categoryList"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Annonce par categorie</a></li>
                <li><a href="/"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Toutes les annonces</a></li>

            </ul>
        </div>
       <br>
        <div class="copyrights">
            <p> © 2021 pano. Tous droits reservé </p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</footer>
<!--footer section end-->
<style>
	#scroll_to_top {
  position: fixed;
  width: 35px;
  height: 35px;
  bottom: 50px;
  right: 60px;
  display: none;
  background-color: #33c;
}
	
</style>
<a href="">
	<div id='scroll_to_top' class='text-center opacity'>
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
      
       
    </div>
  
</a>

<script>

$(document).ready(function() {
    function scroll_to_top(div) {
        $(div).click(function() {
            $('html,body').animate({scrollTop: 0}, 'slow');
        });
        $(window).scroll(function(){
            if($(window).scrollTop()<500){
                $(div).fadeOut();
            } else{
                $(div).fadeIn();
            }
        });
    }
    scroll_to_top("#scroll_to_top");
  
});
</script>

</body>
</html>
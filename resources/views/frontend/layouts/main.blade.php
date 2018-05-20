<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="{{ env('APP_URL') }}/frontend/images/favicon.png" />

<title>Moussi Voyages</title>
<link href="{{ env('APP_URL') }}/frontend/css/bootstrap.css" rel="stylesheet">
<link href="{{ env('APP_URL') }}/frontend/css/bootstrap-theme.css" rel="stylesheet">
<link href="{{ env('APP_URL') }}/frontend/css/font-awesome.css" rel="stylesheet">
<link href="{{ env('APP_URL') }}/frontend/css/color.css" rel="stylesheet">
<link href="{{ env('APP_URL') }}/frontend/css/style.css" rel="stylesheet">
<link href="{{ env('APP_URL') }}/frontend/css/responsive.css" rel="stylesheet">
<link href="{{ env('APP_URL') }}/frontend/css/themetypo.css" rel="stylesheet">
<link href="{{ env('APP_URL') }}/frontend/css/bxslider.css" rel="stylesheet">
<link href="{{ env('APP_URL') }}/frontend/css/datepicker.css" rel="stylesheet">
<link href="{{ env('APP_URL') }}/frontend/css/custom.css" rel="stylesheet">


</head><body>

<header id="mainheader">
<!--// Top Baar //-->
<div class="kd-topbar">
<div class="container">
<div class="row">
<div class="col-md-7">
<ul class="kd-topinfo">



<li>
		<i class="fa fa-phone"></i> Téléphone: 00213 21 20 74 05/22/59
</li>

<li>
		<i class="fa fa-envelope-o"></i>
		<a href="mailto:info@moussi-voyages.com">Email: info@moussi-voyages.com</a>
</li>

</ul>

</div>
<div class="col-md-5">
<ul class="kd-userinfo">
<li>
<div class="kd-social-network">
<ul>
  


<li><a href="http://facebook.com/SARL-Moussi-Voyages-404894929648572/" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li><a href="http://t.co/YOU" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="http://google.com/YOU" target="_blank"><i class="fa fa-google-plus"></i></a></li>
<li><a href="http://link.com/YOU" target="_blank"><i class="fa fa-linkedin"></i></a></li>
<li><a href="http://youtube.com/YOU" target="_blank"><i class="fa fa-youtube"></i></a></li>
</ul>
</div>
</li>


</ul>
</div>
</div>
</div>
</div>
<!--// Top Baar //--><!--// Header Baar //-->
<div class="kd-headbar">
<div class="container">
<div class="row">
<div class="col-md-3"><a href="{{ env('APP_URL')  }}" class="logo"><img src="{{ env('APP_URL')  }}/frontend/images/logo-moussi.jpg" alt=""></a></div>
<div class="col-md-9">
<div class="kd-rightside">
<nav class="navbar navbar-default navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>






<div class="collapse navbar-collapse" id="navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="{{ env('APP_URL')  }}/">Accueil</a></li>

    <li><a href="{{ env('APP_URL')  }}/omra">Omra</a></li>
    <li><a href="{{ env('APP_URL')  }}/sejour">Séjour</a></li>
    <li><a href="{{ env('APP_URL')  }}/sejour_linguistique">Séjour Linguistique</a></li>
    <li><a href="{{ env('APP_URL')  }}/billeterie">Billeterie</a></li>
    <li><a href="{{ env('APP_URL')  }}/hotellerie">Réservation d'hotels</a></li>

@foreach($country as $Countrys)
    <!--
<li>
	<a href="/countryTour/{{$Countrys->id}}">
		<span>{{$Countrys->name}}</span>
	</a>
</li>
    -->
@endforeach





<li><a href="{{ env('APP_URL')  }}/contact">Contact</a></li>


</ul>
</div>
<!-- /.navbar-collapse -->
</nav>

</div>
</div>
</div>
</div>
</div>
<!--// Header Baar //-->

</header>
@yield('content')
<!--// Footer //-->
<footer id="footer-widget">
<div class="container">
<div class="row">
    
<div class="widget col-md-6 kd-textwidget">
<div class="kd-widget-title"><h2>About Travo Travel &amp; Tourism  </h2></div>
<div class="kd-contactinfo">
<p>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis, ipsam. Maiores soluta facere accusantium modi libero ullam maxime alias quam sequi neque quae, vero ratione officiis rem deleniti, fugiat commodi voluptas voluptatum ut provident, laboriosam,

</p>
</div>
</div>

<div class="widget col-md-3 kd-followus-widget">
<div class="kd-widget-title"><h2>Réseaux sociaux</h2></div>
<ul>


<li>
	<a target="_blank" href="http://facebook.com/SARL-Moussi-Voyages-404894929648572/" data-original-title="Facebook">
	<i class="fa fa-facebook"></i></a>
</li>

<li>
	<a href="http://t.co/YOU" data-original-title="Twitter">
	<i class="fa fa-twitter"></i></a>
</li>

<li>
	<a href="http://google.com/YOU" data-original-title="Google-Plus">
	<i class="fa fa-google-plus"></i></a>
</li>

<li>
	<a href="http://link.com/YOU" data-original-title="Linkedin">
	<i class="fa fa-linkedin"></i></a>
</li>

<li>
	<a href="http://youtube.com/YOU" data-original-title="Youtube">
	<i class="fa fa-youtube"></i></a>
</li>

</ul>
</div>

          <div class="widget col-md-3 kd-userinfo-widget">
            <div class="kd-widget-title"><h2>Contact</h2></div>
            <ul>
                <li><i class="fa fa-map-marker"></i> Aéroport international d'Alger - Houari Boumédiène - Terminal 1 - Hall 2 - Dar El Beida, Algiers
                </li>
                <li><i class="fa fa-phone-square"></i> 00213 21 20 74 05/22/59</li>
                <li><i class="fa fa-envelope"></i> info@moussi-voyages.com</li>
              </ul>
          </div>

           <center><div class="col-md-6"><p>© Copyright 2018  All Rights Reserved by BMGI  </p></div><center>

        </div>
      </div>
    </footer>
    <!--// Footer //-->

    
    <!--// CopyRight //-->
    <!-- jQuery (Necessary For JavaScript Plugins) -->
    <script src="{{ env('APP_URL')  }}/frontend/js/jquery.js"></script>
    <script src="{{ env('APP_URL')  }}/frontend/js/bootstrap.min.js"></script>
    <script src="{{ env('APP_URL')  }}/frontend/js/jquery.bxslider.min.js"></script>
    <script src="{{ env('APP_URL')  }}/frontend/js/bootstrap-datepicker.js"></script>
    <script src="{{ env('APP_URL')  }}/frontend/js/waypoints-min.js"></script>
    <script src="{{ env('APP_URL')  }}/frontend/js/functions.js"></script>
    <script src="{{ env('APP_URL')  }}/frontend/js/custom.js"></script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

</body>


</html>
@extends('frontend.layouts.main')
@section('title','Accueil')
@section('content')

<!-- different body part -->




<!--// MainBanner //-->
<div id="mainbanner">
<ul class="bxslider">


<li><img src="{{ env('APP_URL') }}/frontend/images/slider/001.jpg" alt="Slider" />
<div class="kd-caption">
<h2> Voyage Istanbul&nbsp; </h2>
    <h1> &nbsp; <a>réserver</a>  </h1>
</div>
</li>


<li><img src="{{ env('APP_URL') }}/frontend/images/slider/002.jpg" alt="Slider" />
<div class="kd-caption">
<h2> &nbsp; </h2>
<h1> &nbsp;   </h1>
</div>
</li>


<li><img src="{{ env('APP_URL') }}/frontend/images/slider/003.jpg" alt="Slider" />
<div class="kd-caption">
<h2> &nbsp; </h2>
<h1> &nbsp;  Enjoy the sea </h1>
</div>
</li>


</ul>

    </div>
    <!--// MainBanner //-->






<!--// Content //-->
<div class="kd-content">


<!--// Page Section //-->
<section id="apropos" class="kd-pagesection">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="kd-modrentitle thememargin">
<h3>A propos</h3>
<div class="kd-divider"><div class="short-seprator"><span><i class="fa fa-home"></i></span></div></div>
<br />
<p>{<b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis, 
ipsam. Maiores soluta facere accusantium modi libero ullam maxime alias 
quam sequi neque quae, vero ratione officiis rem deleniti, fugiat 
commodi voluptas voluptatum ut provident, laboriosam,</b><br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis, 
ipsam. Maiores soluta facere accusantium modi libero ullam maxime alias 
quam sequi neque quae, vero ratione officiis rem deleniti, fugiat 
commodi voluptas voluptatum ut provident, laboriosam, quod eaque. Iste, 
maxime, veniam. Quis consequuntur libero, voluptatum vero ullam, 
veritatis ea culpa.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis, 
ipsam. Maiores soluta facere accusantium modi libero ullam maxime alias 
quam sequi neque quae, vero ratione officiis rem deleniti, fugiat 
commodi voluptas voluptatum ut provident, laboriosam, quod eaque. Iste, 
maxime, veniam. Quis consequuntur libero, voluptatum vero ullam, 
veritatis ea culpa.

<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis, 
ipsam. Maiores soluta facere accusantium modi libero ullam maxime alias 
quam sequi neque quae, vero ratione officiis rem deleniti, fugiat 
commodi voluptas voluptatum ut provident, laboriosam, quod eaque. Iste, 
maxime, veniam. Quis consequuntur libero, voluptatum vero ullam, 
veritatis ea culpa.

<br><br><br><br></p>
</div>
</div>
</div>
</div>
</section>
<!--// Page Section //-->



<section id="hotels" class="kd-pagesection">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="kd-modrentitle thememargin">

                    <h3>Meilleures hotels</h3>
                    <div class="kd-divider"><div class="short-seprator"><span><i style="color:green;" class="fa fa-hotel"></i></span></div></div>
                    <br />

                    <div id="adv_team_4_columns_carousel" class="carousel slide four_shows_one_move team_columns_carousel_wrapper" data-ride="carousel" data-interval="2000" data-pause="hover">
    <!--========= Wrapper for slides =========-->
    <div class="carousel-inner" role="listbox">
        <!--========= 1st slide =========-->
        <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                <img src="{{env('APP_URL')}}/frontend/images/hotels/001.jpg" alt="slider 01">
                <div class="team_columns_item_caption">
                    <h4>Suisse</h4>
                    <hr>
                    <h5>Algérie</h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                <img src="{{env('APP_URL')}}/frontend/images/hotels/002.jpg" alt="slider 02">
                <div class="team_columns_item_caption">
                    <h4>City hotel</h4>
                    <hr>
                    <h5>Tunisie</h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                <img src="{{env('APP_URL')}}/frontend/images/hotels/003.jpg" alt="slider 02">
                <div class="team_columns_item_caption">
                    <h4>ABC</h4>
                    <hr>
                    <h5>Maroc</h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                <img src="{{env('APP_URL')}}/frontend/images/hotels/004.jpg" alt="slider 02">
                <div class="team_columns_item_caption">
                    <h4>Albert</h4>
                    <hr>
                    <h5>Duabi</h5>
                </div>
            </div>
        </div>
        <!--========= 2nd slide =========-->
        <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                <img src="{{env('APP_URL')}}/frontend/images/hotels/005.jpg" alt="slider 01">
                <div class="team_columns_item_caption">
                    <h4>Sofitel</h4>
                    <hr>
                    <h5>France</h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                <img src="{{env('APP_URL')}}/frontend/images/hotels/006.jpg" alt="slider 02">
                <div class="team_columns_item_caption">
                    <h4>B&B</h4>
                    <hr>
                    <h5>Italie</h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                <img src="{{env('APP_URL')}}/frontend/images/hotels/007.jpg" alt="slider 02">
                <div class="team_columns_item_caption">
                    <h4>Siena</h4>
                    <hr>
                    <h5>Malysie</h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                <img src="{{env('APP_URL')}}/frontend/images/hotels/008.jpg" alt="slider 02">
                <div class="team_columns_item_caption">
                    <h4>Belmond</h4>
                    <hr>
                    <h5>Turquie</h5>
                </div>
            </div>
        </div>
    </div>
    <!--======= Navigation Buttons =========-->
    <!--======= Left Button =========-->
    <a class="left carousel-control team_columns_carousel_control_left adv_left" href="#adv_team_4_columns_carousel" role="button" data-slide="prev">
        <span class="fa fa-angle-left team_columns_carousel_control_icons" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <!--======= Right Button =========-->
    <a class="right carousel-control team_columns_carousel_control_right adv_right" href="#adv_team_4_columns_carousel" role="button" data-slide="next">
        <span class="fa fa-angle-right team_columns_carousel_control_icons" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--// Page Section //-->
<section class="kd-pagesection" style=" padding: 50px 0px; background: url(frontend/images/pakege1.jpg); background-size: cover; ">
<div class="container">
<div class="row">

<div class="col-md-12">
<div class="kd-modrentitle thememargin">
<h3>Nos meilleures destinations</h3>
<div class="kd-divider"><div class="short-seprator"><span><i class="fa fa-globe"></i></span></div></div>
<br />
</div>
</div>

<div class="col-md-12">
<div class="kd-package-list">
<div class="row">


    @foreach($travel as $travels)
    <article class="col-md-4">
    <figure><a href="#"><img src="{{ env('APP_URL') }}/images/{{$travels->main_image}}" alt=""></a>
    <figcaption>

    <span class="package-price thbg-color">18000 DZD</span>

    <div class="kd-bottomelement">
        <h5>
            <a href="/tour/{{$travels->id}}">
            {{$travels->title}}
            </a>
        </h5>
    <div class="days-counter" style="background-color: #087dc2;"><span>3</span> <br> days</div>
    </div>

    </figcaption>
    </figure>
    </article>
    @endforeach

        <div class="view-all text-center">
            <a href="#" class="btn btn-primary">Voir tous</a>
        </div>

</div>
</div>
</div>

</div>
</div>
</section>
<!--// Page Section //-->









<!--// Page Section //-->
<section class="kd-pagesection" style=" padding: 20px 0px 0px 0px; background: #fcfcfc; ">
<div class="container">
<div class="row">

<div class="col-md-12">
<div class="kd-modrentitle thememargin">
<h3>Notre galerie de voyages</h3>
<div class="kd-divider"><div class="short-seprator"><span><i class="fa fa-globe"></i></span></div></div>
</div>
</div>

</div>
</div>
</section>
<!--// Page Section //-->



<!--// Page Section //-->
<section class="kd-pagesection" style=" padding: 40px 0px 0px 0px;">
<div class="container">
<div class="row">
<div class="col-md-12">
<!--// Gallery //-->
<div class="kd-gallery">
<ul class="row">


<li class="col-md-6">
<figure>
<a href="#">
<img src="{{ env('APP_URL') }}/frontend/images/albums/1468586973.jpg" alt="">
</a>
<figcaption>
<a href="{{ env('APP_URL') }}/albumdetails/1" class="fa fa-plus"></a>
</figcaption>
</figure>
<div class="kd-galleryinfo">
<h5><a href="#">Sylhet Tour</a></h5>
<span>Sylhet is a major city that lies on the banks of Surma River in north-east Bangladesh.</span>
</div>
</li>


<li class="col-md-6">
<figure>
<a href="#">
<img src="{{ env('APP_URL') }}/frontend/images/albums/1468587221.jpg" alt="">
</a>
<figcaption>
<a href="#{{ env('APP_URL') }}/albumdetails/2" class="fa fa-plus"></a>
</figcaption>
</figure>
<div class="kd-galleryinfo">
<h5><a href="albumdetails/2/coxs%2bbazar%2btour.html">Coxs Bazar Tour</a></h5>
<span>Cox&#039;s Bazar is a town, a fishing port and district headquarters in Bangladesh.</span>
</div>
</li>



</ul>
</div>
<!--// Gallery //-->

</div>

</div>
</div>
</section>
<!--// Page Section //-->





<!--// Page Section //-->
<section class="kd-pagesection" style=" padding: 40px 0px 0px 0px; background: #ffffff; ">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-12">
<div class="kd-modrentitle thememargin">
<h3>Nos partenaires</h3>
<div class="kd-divider"><div class="short-seprator"><span><i style="color:red;" class="fa fa-plane"></i></span></div></div>
</div>
</div>
<div class="kd-partner thememargin">





    <section class="kd-pagesection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kd-modrentitle thememargin">

                        <div class="col-md-12">
                            <div id="Carousel" class="carousel slide">

                                <ol class="carousel-indicators">
                                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#Carousel" data-slide-to="1"></li>
                                    <li data-target="#Carousel" data-slide-to="2"></li>
                                    <li data-target="#Carousel" data-slide-to="3"></li>
                                    <li data-target="#Carousel" data-slide-to="4"></li>
                                </ol>

                                <!-- Carousel items -->
                                <div class="carousel-inner">

                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/airalgerie.jpg" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/lufthansa.jpg" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/emirates-airline.png" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/tassili.jpeg" alt="Image" style="max-width:100%;"></a></div>
                                        </div><!--.row-->
                                    </div><!--.item-->

                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/british.png" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/alitalia.png" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/turkish.jpg" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/aigleazur.jpg" alt="Image" style="max-width:100%;"></a></div>
                                        </div><!--.row-->
                                    </div><!--.item-->

                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/alqataria.png" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/iberia.png" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/aircanada.jpg" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/airfrance.jpg" alt="Image" style="max-width:100%;"></a></div>
                                        </div><!--.row-->
                                    </div><!--.item-->

                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/egyptair-logo.jpg" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/tunisair-logo.png" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/Royal_Jordanian.png" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/marocair.jpg" alt="Image" style="max-width:100%;"></a></div>
                                        </div><!--.row-->
                                    </div><!--.item-->

                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/tapportugal.jpg" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/asl airlines.png" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/nouvelair-tunisie.jpg" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="{{env('APP_URL')}}/frontend/images/partner/vuoling.png" alt="Image" style="max-width:100%;"></a></div>
                                        </div><!--.row-->
                                    </div><!--.item-->

                                </div><!--.carousel-inner-->
                                <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                                <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                            </div><!--.Carousel-->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
</div>
</div>
</div>
</section>
<!--// Page Section //-->



    <section class="kd-pagesection" style=" padding: 40px 0px 0px 0px; background: #ffffff; ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="kd-modrentitle thememargin">
                            <h3>Paiement électronique</h3>
                            <div class="kd-divider"><div class="short-seprator"><span><i style="color:blue;" class="fa fa-cc-visa"></i></span></div></div>

    <div class="global home">

        <div class="main clearfix" role="main">

            <div class="row-2-col">

                <div class="col-1-2">

                    <div class="wg-hp-content">
                        <a href="#">
                            <img src="{{env('APP_URL')}}/frontend/images/payment.jpg">
                            <div class="-content">
                                <h2>Des solutions de paiement...</h2>
                                <p><span style="color: #000000;">En fonction de vos besoins, en toute sécurité, fiabilité et rapidité&nbsp;</span></p><p>&nbsp;</p><p>&nbsp;</p>        </div>
                        </a>
                    </div>
                </div>

            </div>


        </div><!-- end .main -->

    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    </div>


@endsection
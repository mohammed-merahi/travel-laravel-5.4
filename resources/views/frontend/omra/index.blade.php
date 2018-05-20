<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 15/05/2018
 * Time: 16:03
 */
?>

@extends('frontend.layouts.main')
@section('title','Accueil')
@section('content')

    <!-- different body part -->




    <!--// Sub Header //-->
    <div class="kd-subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="subheader-info">
                        <h1>Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Sub Header //-->




    <!--// Content //-->
    <div class="kd-content">





        <!--// Page Section //-->
        <section class="kd-pagesection" style=" padding: 30px 0px 0px 0px; margin: 0px 0px 0px 0px; ">
            <div class="container">
                <div class="row">

                    <!-- MAIN CONTENT -->
                    <div id="t3-content" class="t3-content span9"  data-default="span9" data-xtablet="span8" data-tablet="span12">
                        <div class="t3-content-inner">

                            <div class="item-page clearfix">


                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="pricingTable">
                                            <h3 class="title">Economique</h3>
                                            <div class="pricing-content">
                                                <div class="price-value" style="width: 100%;height:100%;">
                                                    <span class="currency">DZD</span>
                                                    <span class="amount">130500</span>
                                                    <span class="month">/personne</span>
                                                </div>
                                                <ul>
                                                    <li>Assurance</li>
                                                    <li>Assistance médicale</li>
                                                    <li>Visites Makkah&Médine</li>
                                                    <li class="disable">5 litres zamzam</li>
                                                    <li class="disable">2ème Omra en groupe</li>
                                                </ul>
                                                <a href="{{ asset('/omra/subscribe_omra') }}" class="pricingTable-signup">S'inscrire</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6">
                                        <div class="pricingTable blue">
                                            <h3 class="title">Confort</h3>
                                            <div class="pricing-content">
                                                <div class="price-value" style="width: 100%;height:100%;">
                                                    <span class="currency">DZD</span>
                                                    <span class="amount">140900</span>
                                                    <span class="month">/personne</span>
                                                </div>
                                                <ul style="list-style: none">
                                                    <li>Assurance</li>
                                                    <li>Assistance médicale</li>
                                                    <li>Visites Makkah&Médine</li>
                                                    <li>5 litres zamzam</li>
                                                    <li class="disable">2ème Omra en groupe</li>
                                                </ul>
                                                <a href="{{ asset('/omra/subscribe_omra') }}" class="pricingTable-signup">S'inscrire</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6">
                                        <div class="pricingTable green">
                                            <h3 class="title">Prestige</h3>
                                            <div class="pricing-content">
                                                <div class="price-value" style="width: 100%;height:100%;">
                                                    <span class="currency">DZD</span>
                                                    <span class="amount">160900</span>
                                                    <span class="month">/personne</span>
                                                </div>
                                                <ul style="list-style: none">
                                                    <li>Assurance</li>
                                                    <li>Assistance médicale</li>
                                                    <li>Visites Makkah&Médine</li>
                                                    <li>5 litres zamzam</li>
                                                    <li>2ème Omra en groupe</li>
                                                </ul>
                                                <a href="{{ asset('/omra/subscribe_omra') }}" class="pricingTable-signup">S'inscrire</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                    </div>
                    <!-- //MAIN CONTENT -->

                </div>
            </div>
        </section>
        <!--// Page Section //-->



    </div>
    <!--// Content //-->






    <!-- different body part -->


@endsection
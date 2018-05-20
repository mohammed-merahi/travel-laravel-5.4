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
                        <h1>Contacter-nous</h1>
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
                    <!--  ==================================SESSION MESSAGES==================================  -->
                    <!--  ==================================SESSION MESSAGES==================================  -->


                    <div class="col-md-9">
                        <div class="kd-rich-editor">
                            <h2>Rester en contact</h2>
                        </div>








                        <div id="respond">
                            <form method="post" class="comments-form" id="" action="">

                                <input type="hidden" name="_token" value="4Jx9HJdOFJjTEZcpemo9Iv08U0lB03swhXMJbmg1">


                                <p><input type="text" name="name" placeholder="Nom *" /></p>
                                <p><input type="text" name="phone" placeholder="Téléphone *" /></p>
                                <p><input type="text" name="email" placeholder="Email *" / ></p>
                                <p><input type="text" name="website" placeholder="Site web *" / ></p>
                                <p class="kd-textarea"><textarea name="message" placeholder="Ecrire un message"></textarea></p>
                                <p class="clearfix"></p>
                                <p class="kd-button"><input type="submit" class="thbg-color" value="Envoyer" /></p>
                            </form>
                        </div>
                    </div>





                    <div class="col-md-3">
                        <h2>Notre adresse</h2>
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                src="https://www.google.com/maps/embed/v1/place?q=Cyberborg%20Bodyart%2C%20Bangka%2C%20Jakarta%2C%20Indonesia&key=AIzaSyCGz8WzqxQw1OwHWey3LCTjqKFG9feCxP4"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!--// Page Section //-->



    </div>
    <!--// Content //-->






    <!-- different body part -->


@endsection

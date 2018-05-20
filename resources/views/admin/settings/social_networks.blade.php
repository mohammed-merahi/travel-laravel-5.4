<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 15/05/2018
 * Time: 09:39
 */
?>



@extends('admin.layouts.main')

@section('title','Tableau de bord')

@section('content')



<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title"> Réseaux sociaux </h3>
        <hr>

        <div class="row">
            <div class="col-md-12">

                <div class="portlet light bordered">
                    <div class="portlet-body form">
                        <form class="form-horizontal" action="" method="post" role="form">
                            <div class="form-body">


                                <input type="hidden" name="_token" value="4Jx9HJdOFJjTEZcpemo9Iv08U0lB03swhXMJbmg1">




                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <i class="fa fa-facebook-official fa-2x"></i></label>
                                    <div class="col-md-6">
                                        <input class="form-control input-lg" name="fb" value="https://www.facebook.com/Moussi-voyages-534861970195141/" type="text">
                                    </div>
                                </div>





                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <i class="fa fa-twitter-square fa-2x"></i></label>
                                    <div class="col-md-6">
                                        <input class="form-control input-lg" name="tw" value="http://t.co/YOU" type="text">
                                    </div>
                                </div>





                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <i class="fa fa-google-plus-square fa-2x"></i></label>
                                    <div class="col-md-6">
                                        <input class="form-control input-lg" name="gp" value="http://google.com/YOU" type="text">
                                    </div>
                                </div>





                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <i class="fa fa-linkedin-square fa-2x"></i></label>
                                    <div class="col-md-6">
                                        <input class="form-control input-lg" name="li" value="http://link.com/YOU" type="text">
                                    </div>
                                </div>





                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <i class="fa fa-youtube-square fa-2x"></i></label>
                                    <div class="col-md-6">
                                        <input class="form-control input-lg" name="yt" value="http://youtube.com/YOU" type="text">
                                    </div>
                                </div>









                                <div class="row">
                                    <div class="col-md-offset-3 col-md-6">
                                        <button type="submit" class="btn blue btn-block">Valider</button>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div><!---ROW-->

    </div>
</div>
<!-- END CONTENT -->
@endsection

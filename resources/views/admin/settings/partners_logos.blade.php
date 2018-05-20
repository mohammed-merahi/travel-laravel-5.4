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
            <h3 class="page-title"> Ajouter logos partenaires </h3>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">

                        <div class="portlet-body form">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="form-body">



                                    <input type="hidden" name="_token" value="4Jx9HJdOFJjTEZcpemo9Iv08U0lB03swhXMJbmg1">





                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Logo partenaire</label>
                                        <div class="col-sm-3"><input type="file" name="images[]" multiple><br>
                                            <b style="color:red; font-weight: bold;"> plusieurs images peuvent etre chargées <br> résolution recommandée 300 X 200 </b>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-3">
                                            <button type="submit" class="btn blue btn-block">Valider</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>



                        <br><br><br><br>
                        <hr>

                        <div class="row">






                            <div class="col-md-3">

                                <img src="{{ env('APP_URL')  }}/frontend/images/partner/20160802181629786920partner1.jpg" alt="**" style="width:100%;">

                                <form method="post" action="http://travo.thesoftking.com/admin/deletePartnerImage" class="form-inline" role="form">
                                    <input type="hidden" name="_token" value="4Jx9HJdOFJjTEZcpemo9Iv08U0lB03swhXMJbmg1">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="1">
                                    <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-times"></i> DELETE</button>
                                </form>
                                <br><br><br>

                            </div>



                            <div class="col-md-3">

                                <img src="{{ env('APP_URL')  }}/frontend/images/partner/20160802181629135238partner2.jpg" alt="**" style="width:100%;">

                                <form method="post" action="http://travo.thesoftking.com/admin/deletePartnerImage" class="form-inline" role="form">
                                    <input type="hidden" name="_token" value="4Jx9HJdOFJjTEZcpemo9Iv08U0lB03swhXMJbmg1">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="2">
                                    <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-times"></i> DELETE</button>
                                </form>
                                <br><br><br>

                            </div>



                            <div class="col-md-3">

                                <img src="{{ env('APP_URL')  }}/frontend/images/partner/20160802181629525390partner3.jpg" alt="**" style="width:100%;">

                                <form method="post" action="http://travo.thesoftking.com/admin/deletePartnerImage" class="form-inline" role="form">
                                    <input type="hidden" name="_token" value="4Jx9HJdOFJjTEZcpemo9Iv08U0lB03swhXMJbmg1">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="3">
                                    <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-times"></i> DELETE</button>
                                </form>
                                <br><br><br>

                            </div>



                            <div class="col-md-3">

                                <img src="{{ env('APP_URL')  }}/frontend/images/partner/20160802181629824163partner5.jpg" alt="**" style="width:100%;">

                                <form method="post" action="http://travo.thesoftking.com/admin/deletePartnerImage" class="form-inline" role="form">
                                    <input type="hidden" name="_token" value="4Jx9HJdOFJjTEZcpemo9Iv08U0lB03swhXMJbmg1">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="5">
                                    <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-times"></i> DELETE</button>
                                </form>
                                <br><br><br>

                            </div>



                            <div class="col-md-3">

                                <img src="{{ env('APP_URL')  }}/frontend/images/partner/20160806001206471642codecanyon.jpg" alt="**" style="width:100%;">

                                <form method="post" action="http://travo.thesoftking.com/admin/deletePartnerImage" class="form-inline" role="form">
                                    <input type="hidden" name="_token" value="4Jx9HJdOFJjTEZcpemo9Iv08U0lB03swhXMJbmg1">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="17">
                                    <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-times"></i> DELETE</button>
                                </form>
                                <br><br><br>

                            </div>



                            <div class="col-md-3">

                                <img src="{{ env('APP_URL')  }}/frontend/images/partner/20160806001308447497photodunelogo.jpg" alt="**" style="width:100%;">

                                <form method="post" action="http://travo.thesoftking.com/admin/deletePartnerImage" class="form-inline" role="form">
                                    <input type="hidden" name="_token" value="4Jx9HJdOFJjTEZcpemo9Iv08U0lB03swhXMJbmg1">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="18">
                                    <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-times"></i> DELETE</button>
                                </form>
                                <br><br><br>

                            </div>







                        </div>









                    </div>
                </div>
            </div><!---ROW-->

        </div>
    </div>
    <!-- END CONTENT -->


@endsection
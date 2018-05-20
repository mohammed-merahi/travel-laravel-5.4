<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 15/05/2018
 * Time: 09:38
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 15/05/2018
 * Time: 09:38
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 15/05/2018
 * Time: 08:44
 */
?>
@extends('admin.layouts.main')

@section('title','Tableau de bord')

@section('content')



<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">

            <div class="portlet-header form">
                <h2>Ajouter des images au slider</h2>
            </div>
            <br><br>
            <div class="portlet-body form">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-body">



                        <input type="hidden" name="_token" value="isNIhjifw9g7BcoOvdRbM1mwFPheurWC4bygEF5t">





                        <div class="form-group">
                            <label class="col-sm-3 control-label"><strong>Image slider</strong></label>
                            <div class="col-sm-3"><input type="file" name="image"></div>
                            <div class="col-sm-3"><b style="color:red; font-weight: bold;"> résolution recommandé 1200 X 600</b></div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label"><strong>Titre de l'image</strong></label>
                            <div class="col-sm-6"><input type="text" name="boldtxt" class="form-control input-lg"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><strong>Text alternatif</strong></label>
                            <div class="col-sm-6"><input type="text" name="smalltxt" class="form-control input-lg"></div>
                        </div>


                        <div class="row">
                            <div class="col-md-offset-3 col-md-6">
                                <button type="submit" class="btn blue btn-block">Ajouter au slider</button>
                            </div>
                        </div>



                    </div>
                </form>
            </div>



            <br><br><br><br>
            <hr>

            <div class="row">






                <div class="col-md-6">

                    <img src="{{ env('APP_URL')  }}/frontend/images/slider/1468517216.jpg" alt="**" style="width:100%;"> <br>

                    <h1 style="min-height:40px;">Awesome Place </h1>
                    <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident dolorum dolorem repellat<br><br>



                    <form method="post" action="http://travo.thesoftking.com/admin/deleteSlider" class="form-inline" role="form">
                        <input type="hidden" name="_token" value="isNIhjifw9g7BcoOvdRbM1mwFPheurWC4bygEF5t">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="1">
                        <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-times"></i> DELETE</button>
                    </form>
                    <br><br><br>

                </div>



                <div class="col-md-6">

                    <img src="{{ env('APP_URL')  }}/frontend/images/slider/1468517225.jpg" alt="**" style="width:100%;"> <br>

                    <h1 style="min-height:40px;"></h1>
                    <br><br><br>



                    <form method="post" action="http://travo.thesoftking.com/admin/deleteSlider" class="form-inline" role="form">
                        <input type="hidden" name="_token" value="isNIhjifw9g7BcoOvdRbM1mwFPheurWC4bygEF5t">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="2">
                        <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-times"></i> DELETE</button>
                    </form>
                    <br><br><br>

                </div>



                <div class="col-md-6">

                    <img src="{{ env('APP_URL')  }}/frontend/images/slider/1468517245.jpg" alt="**" style="width:100%;"> <br>

                    <h1 style="min-height:40px;">Enjoy the sea</h1>
                    <br><br><br>



                    <form method="post" action="http://travo.thesoftking.com/admin/deleteSlider" class="form-inline" role="form">
                        <input type="hidden" name="_token" value="isNIhjifw9g7BcoOvdRbM1mwFPheurWC4bygEF5t">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="3">
                        <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-times"></i> DELETE</button>
                    </form>
                    <br><br><br>

                </div>







            </div>









        </div>
    </div>
</div>

@endsection

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
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <center><i class="fa fa-info-circle"></i>  <strong style="font-size:12px;">{{ $error }}</strong> </center>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="row">

        <div class="portlet light bordered col-md-6">
        <div class="panel panel-primary" style="border:1px solid #337AB7;">
            <div class="panel-heading" style="background-color:#337AB7; border:1px solid #337AB7;font-size:12px;font-weight:normal">
                <b>Configuration générale</b>
            </div><!--panel-heading end-->
            <div class="panel-body">
                {!! Form::open(['action' => 'OrderController@store','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Logo du site',$attribute=['class'=>'col-md-2 control-label']); !!}

                    <div class="col-md-6">
                        {!! Form::file('name', $value=null,$attribute=['class'=>'form-control input-md','name'=>'website_logo']); !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Icone du site',$attribute=['class'=>'col-md-2 control-label']); !!}

                    <div class="col-md-6">
                        {!! Form::file('name', $value=null,$attribute=['class'=>'form-control input-md','name'=>'website_favicon']); !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6" align="right">

                        <a href="/country/"><input  type="button" name="cancel" align="right" value="Annuler" class="btn btn-danger" /></a>

                        {!! Form::submit('Upload', $attribute=['class'=>'btn btn-success','name'=>'Submit']); !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div><!--panel-body end-->
        </div><!--panel content end-->
        </div>
    </div>

    <div class="row">
            <div class="portlet light bordered col-md-6">
                <div class="panel panel-primary" style="border:1px solid #337AB7;">
                    <div class="panel-heading" style="background-color:#337AB7; border:1px solid #337AB7;font-size:12px;font-weight:normal">
                        <b>Logo courant</b>
                    </div><!--panel-heading end-->
                    <div class="panel-body">
                        <img src="http://travo.thesoftking.com/frontend/images/logo.png" alt="**" style="height:100px;">


                    </div>
                </div>
            </div>
    </div>

@endsection


@extends('admin.layouts.main')

@section('title','Créer réservation')

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

        <div class="panel panel-primary" style="border:1px solid #FF0A00;">
            <div class="panel-heading" style="background-color:#FF0A00; border:1px solid #FF0A00;font-size:16px;font-weight:bold">
                <b>Ajouter une réservation</b>
            </div><!--panel-heading end-->
            <div class="panel-body">
                {!! Form::open(['action' => 'OrderController@store','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nom',$attribute=['class'=>'col-md-2 control-label']); !!}

                    <div class="col-md-10">
                        {!! Form::text('name', $value=null,$attribute=['class'=>'form-control input-md','name'=>'last_name']); !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Prénom',$attribute=['class'=>'col-md-2 control-label']); !!}

                    <div class="col-md-10">
                        {!! Form::text('name', $value=null,$attribute=['class'=>'form-control input-md','name'=>'first_name']); !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Numéro pièce d\'identité',$attribute=['class'=>'col-md-2 control-label']); !!}

                    <div class="col-md-10">
                        {!! Form::text('name', $value=null,$attribute=['class'=>'form-control input-md','name'=>'identity_num']); !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Voyage',$attribute=['class'=>'col-md-2 control-label']); !!}

                    <div class="col-md-10">
                        {!! Form::text('name', $value=null,$attribute=['class'=>'form-control input-md','name'=>'tour_id']); !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Adresse',$attribute=['class'=>'col-md-2 control-label']); !!}

                    <div class="col-md-10">
                        {!! Form::text('name', $value=null,$attribute=['class'=>'form-control input-md','name'=>'address']); !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Commentaire',$attribute=['class'=>'col-md-2 control-label']); !!}

                    <div class="col-md-10">
                        {!! Form::text('name', $value=null,$attribute=['class'=>'form-control input-md','name'=>'comments']); !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12" align="right">

                        <a href="/country/"><input  type="button" name="cancel" align="right" value="Cancel" class="btn btn-danger" /></a>

                        {!! Form::submit('Save', $attribute=['class'=>'btn btn-success','name'=>'Submit']); !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div><!--panel-body end-->
        </div><!--panel content end-->

    </div>
@endsection
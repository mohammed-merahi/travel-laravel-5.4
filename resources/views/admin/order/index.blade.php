@extends('admin.layouts.main')
@section('title','Liste des commandes')
@section('content')
@if(Session::has('message'))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <center><i class="fa fa-info-circle"></i>  <strong style="font-size:16px;">{{Session::get('message')}}</strong> </center>
        </div>
    </div>
</div>
@endif

<button type="button" class="btn btn-success"><a href="{{ env('APP_URL')  }}/order/create">Ajouter</a></button>

<div class="row">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Pièce d'identité</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>

        <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->first_name}}</td>
            <td>{{$order->last_name}}</td>
            <td>{{$order->identity_num}}</td>

            <td align="center"><a href="{{ env('APP_URL')  }}/order/{{$order->id}}/edit"><button  class="btn btn-info">Edit</button></a></td>
            <td align="center" style="color:#000">
                {!! Form::open(['method'=>'DELETE', 'route'=>['order.destroy',$order->id]]) !!}
                {!! Form::submit('DELETE',$attribute=['class'=>'btn btn-danger']); !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
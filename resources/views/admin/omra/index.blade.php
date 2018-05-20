@extends('admin.layouts.main')
@section('title','Liste des omras')
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

    <button type="button" class="btn btn-success"><a href="{{ env('APP_URL')  }}/omra/create">Ajouter</a></button>

    <div class="row">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Code</th>
                <th>Type chambre</th>
                <th>Prix TTC</th>
                <th>Ville Départ</th>
                <th>Compagnie Aérienne</th>
                <th>Hotel Makkah</th>
                <th>Hotel Medine</th>
                <th>Repas inclu</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>

            <tbody>
            @foreach($omras as $omra)
                <tr>
                    <td>{{$omra->first_name}}</td>
                    <td>{{$omra->last_name}}</td>
                    <td>{{$omra->identity_num}}</td>

                    <td align="center"><a href="{{ env('APP_URL')  }}/omra/{{$omra->id}}/edit"><button  class="btn btn-info">Edit</button></a></td>
                    <td align="center" style="color:#000">
                        {!! Form::open(['method'=>'DELETE', 'route'=>['order.destroy',$omra->id]]) !!}
                        {!! Form::submit('DELETE',$attribute=['class'=>'btn btn-danger']); !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
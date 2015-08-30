@extends('templates.main')
@section('title'){{\Auth::user()->username}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.log-nav')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-12">
          @foreach($series as $s)
          <table class="table table-hover table-bordered">
            <div class="" align="center">
              <h3>{{$s->Name}}</h3>
            </div>
            <hr class="lineaBordeada">
            <tr>
              <th>Name</th>
              <td>{{$s->Name}}</td>
            </tr>
            <tr>
              <th>Genre</th>
              <td>{{$s->Genre}}</td>
            </tr>
            <tr>
              <th>Seasons</th>
              <td>{{$s->Seasons}}</td>
            </tr>
            <tr><th>Description</th><td>{{$s->Description}}</td></tr>
            <tr><th>Photo</th><td>{{$s->Photo}}</td></tr>
            <tr><th>Start</th><td>{{$s->Start}}</td></tr>
            <tr><th>Finish</th><td>{{$s->Finish}}</td></tr>
            <tr><th>Created</th><td>{{$s->created_at}}</td></tr>
            <tr><th>Updated</th><td>{{$s->updated_at}}</td></tr>
            <tr><th class="foo">Actions</th><td>
                  <div class="btn-group">
                    <a href="series/{{$s->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="series/{{$s->id}}/delete"class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </div>
            </td></tr>
            </table>
          @endforeach
    <br>
    <br>
    </div>
</div>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop

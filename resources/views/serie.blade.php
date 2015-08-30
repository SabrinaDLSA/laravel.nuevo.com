@extends('templates.main')
@section('title'){{''}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navigate')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-8">
      <div class="" align="center">
        <h1>{{''}}</h1>
      </div>
      <div class="img-responsive" >
        <img class="img-responsive img-thumbnail" src="{{''}}" alt="" />
      </div>
    </div>
    <div class="col-md-4">

    </div>
  </div>
    <div class="container">
    <div class="col-md-8">
      <div class="" align="center">
        <br>
        @foreach($serie as $s)
        <h3>{{$s->Name}}</h3>
        <hr>
        <p>{{$s->Description}}</p>
        @endforeach
        <br>
      </div>
    </div>
    <div class="col-md-2">
      <div class="" align="center">
        <table class="table table-striped table-hover ">
          <thead>
            <div class="" align="center">
            </div>
          </thead>
          <tbody>
            <tr class="active">
              @foreach($serie as $s)
              <td><legend>Name:</legend>{{$s->Name}}</td>
              <td><legend>Genre:</legend>{{$s->Genre}}</td>
              <td><legend>Start:</legend>{{$s->Start}}</td>
              <td><legend>Finish:</legend>{{$s->Finish}}</td>
              @endforeach
            </tr>
          </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
<br>
<br>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop

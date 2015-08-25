@extends('templates.main')
@section('title'){{$serie->serie}}@endsection
@section('content')
@include('templates.partials.secondHeader')
<hr class="ceroPadd bord">
<div class="row-fluid">
  <div class="container">
    <div class="col-md-2">
      <br>
      <br>
      <a href="{{route('home')}}"><i class="fa fa-arrow-left fa-5x"></i></a>
    </div>
    <div class="col-md-8">
      <div class="">
        <img class="img-responsive img-thumbnail" src="{{$serie->photo}}" alt="" />
      </div>
    </div>
    <div class="col-md-2">
    </div>
  </div>
</div>
<div class="row-fluid">
    <div class="container">
        <div class="" align="center">
          <h1>{{$serie->serie}}</h1>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <p>
                {{$serie->description}}
            </p>
          </div>
          <div class="col-md-2">
            <table>
              <legend>{{$serie->serie}}</legend>
              <tbody>
                @foreach($serie as $s)
                  
                @endforeach
              </tbody>
            </table>
      </div>
  </div>
</div>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop

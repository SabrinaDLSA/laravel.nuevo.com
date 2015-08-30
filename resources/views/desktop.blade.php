@extends('templates.main')
@section('title'){{\Auth::user()->username}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navigate')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">

    </div>
    <div class="col-md-2">

    </div>
  </div>
</div>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop

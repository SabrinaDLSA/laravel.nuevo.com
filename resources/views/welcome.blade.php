@extends('templates.main')
@section('title'){{'Hello'}}@endsection
@section('content')
<div class="row-fluid">
  <div class="content">
    @include('templates.partials.header')
    <div class="jumbotron">
          <h2>Hello</h2>
    </div>
    <div class="">

    </div>
    <div class="">

    </div>
  </div>
</div>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop

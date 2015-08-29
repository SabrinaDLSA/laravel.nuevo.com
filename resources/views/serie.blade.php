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
          <h3>{{''}}</h3>
        <hr>
        <br>
      </div>
    </div>
    <div class="col-md-4">
      <div class="" align="center">
        <?php $columns = Schema::getColumnListing('series')?>
        <table class="table table-striped table-hover ">
          <thead>
            <div class="" align="center">
              <h3>{{''}}</h3>
            </div>
          </thead>
          <tbody>
            @foreach($columns as $c)
            @if($c == 'id' || $c == 'Photo' || $c == 'slug')
            @else
            <tr class="active">
                <td>{{$c}}</td>
                <td>{{$serie->$c}}</td>
            </tr>
            @endif
            @endforeach
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

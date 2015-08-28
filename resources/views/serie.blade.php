@extends('templates.main')
@section('title'){{$serie->serie}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navigate')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-8">
      <div class="" align="center">
        <h1>{{$serie->serie}}</h1>
      </div>
      <div class="img-responsive" >
        <img class="img-responsive img-thumbnail" src="{{$serie->photo}}" alt="" />
      </div>
    </div>
    <div class="col-md-4">

    </div>
  </div>
    <div class="container">
    <div class="col-md-8">
      <div class="" align="center">
        <br>
          <h3>{{$serie->serie}}</h3>
        <hr>
        <br>
        <p class="Nunito">
          {{$serie->description}}
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="" align="center">
        <?php $columns = Schema::getColumnListing('series')?>
        <table class="table table-striped table-hover ">
          <thead>
            <div class="" align="center">
              <h3>{{$serie->serie}}</h3>
            </div>
          </thead>
          <tbody>
            @foreach($columns as $c)
            @if($c == 'id' || $c == 'description' || $c == 'photo' || $c == 'slug' || $c == 'serie')
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

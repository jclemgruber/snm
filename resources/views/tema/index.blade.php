@extends('layouts.app')

@section('content')
<div class="container">

	<h4>Temas
	<a class="btn-floating btn-large waves-effect waves-light red"
		href="{{url('/temas/create')}}">
		<i class="material-icons">add</i>
	</a>
	</h4>

	@foreach ($temas->chunk(2) as $chunk)
		<div class="row">
		@foreach ($chunk as $tema)
		    <div class="col s12 m6">
		      <div class="card blue-grey darken-1">
		        <div class="card-content white-text">
		          <span class="card-title">{{ $tema->name }}</span>
		          <p>De {{ $tema->event_start_date->format('d/m/Y') }} a {{ $tema->event_end_date->format('d/m/Y') }}</p>
		        </div>
		        <div class="card-action">
		          <a href="#">inscrições</a>
		        </div>
		      </div>
		    </div>
		@endforeach
		</div>
	@endforeach

</div>

@endsection
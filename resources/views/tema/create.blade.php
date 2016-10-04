@extends('layouts.app')

@section('content')
<div class="container">

	<h4>Novo Tema</h4>
	@include('tema._form', ['tema'=>$tema])

</div>

@endsection


@extends('layouts.template')
@section('title','Mes annonces')
	
@section('content')

<div class="total-ads main-grid-border">
@include('pages.partials.header')
@include('pages.partials.banner')
@include('pages.partials.bread')

	<div class="container">
		<div class="ads-grid">
@include('pages.partials.espacepub')
			<div class="clearfix"></div>
		</div>
	</div>	
</div>
@endsection
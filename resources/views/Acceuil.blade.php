@extends('layouts.template')
@section('title','Bienvenue')
	
@section('content')

<div class="total-ads main-grid-border">
@include('pages.partials.header')
@include('pages.partials.banner')
	<div class="container">
@include('pages.partials.search')
		<div class="ads-grid">
@include('pages.partials.annonce')
@include('pages.partials.espacepub')
			<div class="clearfix"></div>
		</div>
	</div>	
</div>
@endsection


	<!-- Mobiles -->

	<!-- // Mobiles -->
	
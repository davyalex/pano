@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="row-content-justify">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dashboard Panel
                </div>
                <div class="card-body">
                   <div class="row content-justify">
                    <div class=" col-xs-12 col-md-3">
                        <a href="{{ route('userlist') }}" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <i class="fa fa-user" aria-hidden="true"></i>Utilisateurs</a>
                    </div>
                    <div class=" col-xs-12 col-md-3">
                        <a href="{{ route('catcreate') }}" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> Categories <i class="fa fa-list" aria-hidden="true"></i></a>
                    </div>
                    <div class=" col-xs-12 col-md-3">
                        <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-signal"></span> Visiteurs</a>
                    </div>
                    <div class=" col-xs-12 col-md-3">
                        <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-comment"></span> Gestion site</a>
                    </div>
                   </div>
                </div>
                <div class="card-footer">
                   Dashboard 1.0
                </div>
            </div>
          
        </div>
    </div>
</div>
@endsection
   {{-- <div class="col-md-4">
                           <a href="{{ route('userlist') }}">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <h2>Gestion User</h2>
                           </a>
                        </div>
                        <div class="col-md-4 mc">
                           <a href="{{ route('catcreate') }}">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <h2>Gestion Category</h2>
                           </a>
                        </div>
                        <div class="col-md-4 mc">
                           <a href="">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <h2>Gestion Visiteurs</h2>
                           </a>
                         </div> --}}
                        
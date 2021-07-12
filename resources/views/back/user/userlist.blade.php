@extends('layouts.app')

@section('title','Liste des utlisateurs')
    

@section('content')

<style>
   
</style>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
             <a href="javascript:history.go(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>    Vous êtes bien connecté <span class="text-success"> {{ Auth::user()->name}}</span>
     
            @if ($message=Session::get('SuccessMsg'))
            <div class="alert alert-success" role="alert">
               {{ $message }}
            </div>
             @endif
     
             @if ($message=Session::get('DestroysMsg'))
             <div class="alert alert-success" role="alert">
                {{ $message }}
             </div>
         @endif
            </div>
            <div class="card-body">
                <p class="card-text">
                      <table class="table  table-striped table-hover">
                         <thead>
                             <th scope="row">#</th>
                             <th scope="col">Nom</th>
                             <th scope="col">Email</th>
                             <th scope="col">Role</th>
                             <th scope="col">Inscrit depuis</th>
                          
                         </thead>
                         <tbody>
                             @foreach ($user as $key=>$users)
                                 <tr>
                                     <td>{{ ++$key }}</td>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->email }}</td>
                                @if ($users->role==1)
                                         <td class="text-success" > admin</td>
                                    @else
                                    <td> user</td>
                                    @endif
                                    <td>{{ $users->created_at->format('d/m/Y') }}</td>
                                     <td><a class="btn btn-success" href="" data-toggle="modal" data-target="#myModal{{$users->id}}"><i class="fa fa-edit"></i></a></td>
                                    <td>
                                        <form action="{{ route('userdestroy',$users->id) }}" method="post">
                                             @csrf
                                             @method('DELETE')
                                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                     @foreach ($user as $key=>$users)
                     <div id="myModal{{$users->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <p>
                                      
     
                                         <form action="{{ route('userupdate',$users->id) }}" method="post">
                                             @csrf
                                             @method('PUT')
                                             <div class="form-group">
                                                 <label for="my-input">Rôle</label>
                                                 <select name="role" id="" class="form-control" >
                                                     <option value="" ></option>
                                                     <option value="0">User</option>
                                                     <option value="1">Admin</option>
                                                 </select>
                                             </div>
                                             <button type="submit" class="btn btn-primary"><i class="fa fa-save    "></i></button>
                                             
                                         </form>
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endforeach
                </p>
            </div>
        </div>
    </div>
  </div>
</div>


@endsection





@extends('layouts.app')

    @section('title','Category')
        
        @section('content')
            
<div class="container">
  
    {{-- <h1>Click the filter icon <small>(<i class="glyphicon glyphicon-filter"></i>)</small></h1> --}}
    	<div class="row-content-justify">
			<div class="col-md-12 ">
				<div class="panel panel-primary">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#mymodal" type="button">Add category</button>
                        </div>
                        <div class="card-body">
                            <p class="card-text">                    
                                    @if ($message=Session::get('sMsg'))
                                        <div class="alert alert-success" role="alert">
                                           {{ $message }} <span>ajouté avec success</span>
                                        </div>
                                    @endif
                                    
                                    <div class="panel-body">
                                        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Entrer une categorie" />
                                    </div>
                                    <table class="table table-hover" id="dev-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Categorie</th>
                                                <th>Poste disponible</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($category as $key=>$categories)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td><a href="/?category={{ $categories->id }}" style="text-transform:capitalize;"><strong>{{ $categories->libelle }}</strong></a></td>
                                                    <td><strong>{{ $categories->posts->count() }}</strong></td>
                                                    <td>
                                                        <a href=""  data-toggle="modal" data-target="#mymodal{{ $categories->id }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                      </td>
                                                      <td>
                                                          <form action="{{ route('catdestroy',$categories->id) }}" method="post">
                                                              @csrf
                                                              @method('DELETE')
                                                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                              </form>
                                                      </td>
                                                </tr>
                                            @endforeach
                                            
                                        </tbody>
                                       {{-- {{   $category->links('pagination::bootstrap-4')}} --}}
                                        </tbody>
            
                                        @foreach ($category as $categories)
                                        <div id="mymodal{{ $categories->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p> 
                                                             <form action="{{ route('catupdate',$categories->id) }}" method="post" class="form-control">
                                                                     @csrf
                                                                     @method('PUT')
                                                                <div class="form-group">
                                                                <label for="my-input">Category</label>
                                                                <input id="my-input" class="form-control" value="{{  $categories->libelle }}" type="text" name="libelle">
                                                            </div>
                                                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
                                                            </form>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        @endforeach
                                    </table>
            
                            </p>
            
                            <div id="mymodal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <p> 
                                                 <form action="{{ route('catstore') }}" method="post" class="form-control">
                                                         @csrf
                                                    <div class="form-group">
                                                    <label for="my-input">Category</label>
                                                    <input id="my-input" class="form-control" type="text" name="libelle">
                                                </div>
                                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
                                                </form>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
            
				</div>
			</div>
		
		</div>
	</div>

            
{{-- <style>
	.row{
		    margin-top:40px;
		    padding: 0 10px;
		}
		.clickable{
		    cursor: pointer;   
		}

		.panel-heading div {
			margin-top: -18px;
			font-size: 15px;
		}
		.panel-heading div span{
			margin-left:5px;
		}
		.panel-body{
			display: none;
		}


</style> --}}


       <script>
           
        /**
*   I don't recommend using this plugin on large tables, I just wrote it to make the demo useable. It will work fine for smaller tables 
*   but will likely encounter performance issues on larger tables.
*
*		<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
*		$(input-element).filterTable()
*		
*	The important attributes are 'data-action="filter"' and 'data-filters="#table-selector"'
*/
(function(){
    'use strict';
	var $ = jQuery;
	$.fn.extend({
		filterTable: function(){
			return this.each(function(){
				$(this).on('keyup', function(e){
					$('.filterTable_no_results').remove();
					var $this = $(this), 
                        search = $this.val().toLowerCase(), 
                        target = $this.attr('data-filters'), 
                        $target = $(target), 
                        $rows = $target.find('tbody tr');
                        
					if(search == '') {
						$rows.show(); 
					} else {
						$rows.each(function(){
							var $this = $(this);
							$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
						})
						if($target.find('tbody tr:visible').size() === 0) {
							var col_count = $target.find('tr').first().find('td').size();
							var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">Pas de resultat trouvé</td></tr>')
							$target.find('tbody').append(no_results);
						}
					}
				});
			});
		}
	});
	$('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
	$('[data-action="filter"]').filterTable();
	
	$('.container').on('click', '.panel-heading span.filter', function(e){
		var $this = $(this), 
			$panel = $this.parents('.panel');
		
		$panel.find('.panel-body').slideToggle();
		if($this.css('display') != 'none') {
			$panel.find('.panel-body input').focus();
		}
	});
	$('[data-toggle="tooltip"]').tooltip();
})
       </script> 

        @endsection


      
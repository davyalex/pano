@extends('layouts.template')

@section('title','Liste des categories')
    

@section('content')
@include('pages.partials.header')
@include('pages.partials.banner')
@include('pages.partials.bread')


<!------ Include the above in your HEAD tag ---------->

<div class="container">
    {{-- <h1>Click the filter icon <small>(<i class="glyphicon glyphicon-filter"></i>)</small></h1> --}}
    	<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Liste des categories</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								Cliquez içi pour filtrer<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
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
                                </tr>
                            @endforeach
							
						</tbody>
					</table>
				</div>
			</div>
			{{-- <div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Tasks</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="task-table-filter" data-action="filter" data-filters="#task-table" placeholder="Filter Tasks" />
					</div>
					<table class="table table-hover" id="task-table">
						<thead>
							<tr>
								<th>#</th>
								<th>Task</th>
								<th>Assignee</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Site Wireframes</td>
								<td>John Smith</td>
								<td>in progress</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Mobile Landing Page</td>
								<td>Kilgore Trout</td>
								<td>completed</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Add SEO tags</td>
								<td>Bob Loblaw</td>
								<td>failed qa</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Migrate to Bootstrap 3</td>
								<td>Emily Hoenikker</td>
								<td>in progress</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Update jQuery library</td>
								<td>Holden Caulfield</td>
								<td>deployed</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Issues in IE7</td>
								<td>Jane Doe</td>
								<td>failed qa</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Bugs from Sprint 14</td>
								<td>Kilgore Trout</td>
								<td>completed</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> --}}
		</div>
	</div>
<br>


<style>
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


</style>


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
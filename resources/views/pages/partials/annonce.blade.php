<div class="col-md-8">
    <div class="wrapper">					
    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
      <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
           <div>
                <div id="container">
                {{-- <div class="view-controls-list" id="viewcontrols">
                    <label>view :</label>
                    <a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
                    <a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
                </div> --}}
                {{-- <div class="sort">
                   <div class="sort-by">
                        <label>Sort By : </label>
                        <select>
                                        <option value="">Post recent</option>
                                        <option value="">Price: Rs Low to High</option>
                                        <option value="">Price: Rs High to Low</option>
                        </select>
                       </div>
                     </div> --}}

                <div class="clearfix"></div>

                
<style>
    .list li {
        box-shadow:0 6px 8px 0 #cecece ;
        background-color:#f3c500;
    }
    .contact{
        background-color: #3498db;
        border-radius: 20px
    }
    .ville{
        background-color: #f39c12;
        border-radius: 20px;
        border-color: #f39c12
    }
</style>

            <ul class="list">
                @forelse ($post as $posts)
                
                    <li style="box-shadow:0 6px 8px 0 #cecece ;" >
                    <img src="{{ asset('images/avatar.jpg') }}" title="" alt="" class="offer offer-success"/>
                    <section class="list-left">
                    <h5 class="title" style="text-transform:capitalize;">{{ $posts->nom }}</h5>
                    <p class="adprice" style="color:#33c;text-transform:capitalize">{{!empty($posts->categories) ? $posts->categories->libelle:''}}</p><strong><i class="fa fa-home" aria-hidden="true"></i> ({{ $posts->genre }})</strong>
                    <p style="font-size:20px; color:#f3c500;"><a href="tel:+225{{ $posts->contact }}"class="btn btn-info contact">  <i class="fa fa-phone" aria-hidden="true"></i> {{ $posts->contact }}</a></p>
                    <p class=""><strong class="btn btn-info ville"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $posts->ville}}</strong></p>
                    </section>
                    {{-- <section class="list-right">
                    <span class=""><strong class="btn btn-warning"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $posts->ville}}</strong></span>
                    <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $posts->created_at->format('d/m/Y')}} <br><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $posts->created_at->format('H:i')}}</span>
                    </section> --}}
                    @if ($posts->description!=null)
                       <button class=" btn btn-warning" type="button" data-toggle="modal" data-target="#my-modal{{ $posts->id }}">Details de mes services <i class="fa fa-caret-right" aria-hidden="true"></i></button>
                    @endif
                       <div class="clearfix"></div>
                            @foreach ($post as $posts)
                            @if ($posts->description!=null)
                            <div id="my-modal{{ $posts->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="my-modal-title">Mes services</h5>
                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{ $posts->description }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <p style="font-size:20px; color:#f3c500;"><a href="tel:+225{{ $posts->contact }}"class="btn btn-info contact">  <i class="fa fa-phone" aria-hidden="true"></i> {{ $posts->contact }}</a></p>
                                            <p class=""><strong class="btn btn-warning ville"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $posts->ville}}</strong></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                    </li> 
                        @empty
                        <h1 class=" text-center text-info">Pas d'annonce disponible pour le moment</h1>
                @endforelse
               
               
            </ul>
        </div>
            </div>
        </div>
       
        <ul class="pagination pagination-md">
          {{ $post->links('pagination::bootstrap-4') }}
        </ul>
      </div>
    </div>
</div>
</div>




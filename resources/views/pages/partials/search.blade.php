<div class="select-box">

    <style>
        #custom-search-input{
          
           width: 100%
        }
    </style>
   
       
            <div class="col-md-8 col-md-offset-2 " >

              <div class="col-md-12">
                <form action="{{ route('post.search') }}" method="get">
                  <div id="custom-search-input">
                    <div class="input-group ">
                        <input type="text" class="form-control input-lg" name="q" placeholder="Entrez ce que vous recherchez......" value="{{ request()->input('q') }}"/>
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-lg" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
                </form>
              </div>
               
              <hr style="">
             
                <form action="{{ route('post.filtre') }}" method="get" class="">
                  <h5 class="text-center"><strong>Recherche par selection</strong></h5>
                  <div class="row">


                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="type1" class="control-label"></label>
                        <select class="form-control" name="q" id="type">
                          <option value="">------------Choisir une categorie------------</option>
                          @foreach ($category as $categories)
                          <option value="{{ $categories->libelle }}">{{ $categories->libelle }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                      <div class="col-md-5">
                        <div class="form-group">
                          <label for="location1" class="control-label"></label>
                          <select class="form-control" name="search" id="ville">
                            <option value="">------------Choisir votre commune------------</option>
                            <option value="Cocody">Cocody</option>
                            <option value="Yopougon">Yopougon</option>
                            <option value="Riviera">Riviera</option>
                            <option value="Marcory">Marcory</option>
                            <option value="Treichville">Treichville</option>
                            <option value="2 Plateaux">2 Plateaux</option>
                            <option value="Abobo">Abobo</option>
                            <option value="Adjamé">Adjamé</option>
                            <option value="Angré">Angré</option>
                            <option value="Anyama">Anyama</option>
                            <option value="Attécoubé">Attécoubé</option>
                            <option value="Bingerville">Bingerville</option>
                            <option value="Biétry">Biétry</option>
                            <option value="Koumassi">Koumassi</option>
                            <option value="Plateau">Le Plateau</option>
                            <option value="Port Bouet">Port Bouet</option>
                            <option value="Zone">Zone 4</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label for="type1" class="control-label"></label>
                          <button type="submit"  id="btn_search" class="btn btn-info search"><i class="fa fa-search" aria-hidden="true"></i> Rechercher</button>
                        </div>
                      </div>
                  </div>
                </form>
                <div class="clearfix"></div>
                @if (request()->input('q'))
                <h4 class=" text-center text-success" style="color:#3f51b5;"><b>{{ $post->count() }} {{ request()->input('q') }}(s)</b> disponible(s)</h4>
                 @endif
                 

            </div>

            <style>
              .search{
               background-color: #f39c12;
               border-color: #f39c12;
               border-radius: 20px;
               
              }
            </style>

        <script>
              $('#type').selectpicker({
              liveSearch: true,
              maxOptions: 1
            }),
            $('#ville').selectpicker({
              liveSearch: true,
              maxOptions: 1
            });
        </script>
    
    
    
    <div class="clearfix"></div>
</div>
{{-- <ol class="breadcrumb" style="margin-bottom: 5px;">
  <li><a href="index.html">Home</a></li>
  <li><a href="categories.html">Categories</a></li>
  <li class="active">Mobiles</li>
</ol> --}}
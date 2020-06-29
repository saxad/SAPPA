@extends('layouts.app')

@section('content')
  <section class="wrapper site-min-height">
                  <h3><i class="fa fa-angle-right"></i> Outils ACR </h3>

    @foreach($categories as $categorie)
   <div class="col-lg-12">

                <h3><i class="fa fa-angle-right"></i> {{$categorie->name}} </h3>
                <div class="row mt">
                    <div class="col-lg-12">
        
                        <!--  Outils acr  -->
                        
                        <div class="row">
                            @foreach($tools as $tool)
                            @if($tool->category_id == $categorie->id)
                            <!-- col-md-4-->
                            <!--  Outil 1  -->
                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <div class="content-panel pn">
                                    <div id="blog-bg">
                                      <a href="{{ $tool->url}}">  <div class="badge badge-popular">Go</div></a>
                                        <div class="blog-title">{{ $tool->name}}</div>
                                    </div>
                                    <div class="blog-text">
                                        <p>{{ $tool->description}}</br></br> <a href="{{ $tool->url}}">allez vers l'outil</a></p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <!-- /col-md-4-->
                        <!-- / Outil 1  -->
 
                        </div>
                        <!-- /end  outils acr -->
 
        
                    </div>
                </div>
              
                </div>
    @endforeach

 </section>


@endsection
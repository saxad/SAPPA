@extends('layouts.app')

@section('content')
 
   
       <section class="wrapper site-min-height">
            <div class="row mt">
              <div class="col-lg-12">
                <div class="row content-panel">
                  <div class="col-md-4 profile-text mt mb centered">
                    <div class="right-divider hidden-sm hidden-xs">
                      <h4>Métier</h4>
                      <h6>{{ Auth::user()->job }}</h6>
                      <h4>Numero de telephone</h4>
                      <h6>{{ Auth::user()->phone }}</h6>
                      <h4>email</h4>
                      <h6>{{ Auth::user()->email }}</h6>
                    </div>
                  </div>
                  <!-- /col-md-4 -->
                  <div class="col-md-4 profile-text">
                    <h3>{{ Auth::user()->firstname }}</h3>
                    <h6>Administrateur</h6>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                      Latin literature from 45 BC.</p>
                    <br>
                    <p><button data-toggle="modal" data-target="#addevent" class="btn btn-theme"><i class="fa fa-edit"></i> modifier</button></p>
                     <!-- modal bo form -->
               <div class="modal fade" id="addevent">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                  <span>&times;</span>
                                </button>            
                          <h4 class="modal-title">ajout de l'outil</h4>
                        </div>
                          <div class="modal-body">
                                        <form class="col" action="" method="post">
                                        @csrf
                                          <div class="form-group">
                                            <label for="name" class="form-control-label">Nom de l'outil</label>
                                            <input type="text" class="form-control" name ="name" id="nom" placeholder="nom de l'outil">
                                          </div>
                                          <div class="form-group">
                                            <label for="url" class="form-control-label">url</label>
                                            <input type="text" class="form-control" name="url" id="url" placeholder="https://url">
                                          </div>
                                          <div class="form-group">
                                            <label for="description" class="form-control-label">description</label>
                                            <textarea name="description" class="form-control" id="description" cols="30" rows="3"></textarea>
                                            <!-- <input type="text" class="form-control" name="url" id="url" placeholder="https://url"> -->
                                          </div>
                                            <div class="form-group">
                                            <select class="form-control" name="category" id="">

                                      
                                               <option value=""></option> 
                                            
                                             
                                            </select>
                                          </div>
                                          <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                                        </form>
                          </div>
                          <div class="modal-footer">
                            <em>Informations sous réserve</em>
                          </div>
                  </div>
                </div>
              </div>
              <!-- modal bo form -->
                  </div>
                  <!-- /col-md-4 -->
                  <div class="col-md-4 centered">
                    <div class="profile-pic">
                      <p><img src="{{ Auth::user()->picture }}" class="img-circle"></p>
                      <p>
                        <button class="btn btn-theme"><i class="fa fa-check"></i> NNI : {{ Auth::user()->nni }}</button>
                       
                      </p>
                    </div>
                  </div>
                  <!-- /col-md-4 -->
                </div>
                <!-- /row -->
              </div>

          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
     
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      
    </section>

 

@endsection
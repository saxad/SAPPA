@extends('layouts.app')

@section('content')
 
   
   
    
      <section class="wrapper">
          <div>
          <button data-toggle="modal" data-target="#addevent" class="btn btn-theme" type="button" style="float:right;"><i class="fa fa-cog"></i> ajoutez un dossier sappa</button>
           <!-- modal bo form -->
               <div class="modal fade" id="addevent">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                  <span>&times;</span>
                                </button>            
                          <h4 class="modal-title">Evenement remarquable</h4>
                        </div>
                          <div class="modal-body">
                                        <form class="col" action="{{route('storeEvent')}}" method="post">
                                        @csrf
                                            <div class="form-group">
                                                 <label for="poste" class="form-control-label">poste source</label>
                                            <select class="form-control" name="poste" id="poste">
                                            
                                      
                                               <option style="background:" value=""></option> 

                                            
                                             
                                            </select>
                                          </div>   

                                         
                                          <div class="form-group">
                                            <label for="treatment" class="form-control-label">traitement</label>
                                            <input type="text" class="form-control" name="treatment" id="treatment" placeholder="traitement">
                                          </div>
                                          <div class="form-group">
                                            <label for="comment" class="form-control-label">commentaire</label>
                                            <textarea name="comment" class="form-control" id="comment" cols="30" rows="3"></textarea>
                                            <!-- <input type="text" class="form-control" name="url" id="url" placeholder="https://url"> -->
                                          </div>
                                            <div class="form-group">
                                          <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                                           </div>
                                        </form>
                          </div>
                          <div class="modal-footer">
                            
                          </div>
                  </div>
                </div>
              </div>
              <!-- modal bo form -->
        <h3><i class="fa fa-angle-right"></i> Dossiers SAPPA</h3>
        </div>
         <hr>
       


              <!-- / DATE PICKERS -->
              <div class="row mt">
                <div class="col-md-12">
                  <!--  Chantier en cours -->
                  <div class="content-panel">

                    <table class="table table-striped table-advance table-hover">
                     
                      
                      <thead>
                        <tr>
                        <th><i class="fa fa-bullhorn"></i> N° NIP</th>
                        <th><i class="fa fa-bullhorn"></i> Type  NIP</th>
                        <th><i class="fa fa-bullhorn"></i> Date</th>
                        <th><i class="fa fa-bullhorn"></i> poste source</th>
                        <th><i class="fa fa-bullhorn"></i> Ouvrage</th>
                        <th><i class="fa fa-bullhorn"></i> MC</th>
                          
                         
                        <th><i class="fa fa-bookmark"></i> RIP Conduite (etat de la NIP)</th>
                        <th><i class="fa fa-bookmark"></i> RIP Conduite (etat de la prepa)</th>
                          <th><i class="fa fa-bookmark"></i> CCO</th>
                          <th><i class="fa fa-comments"></i> Clôt</th>
                         
                          <th><i class="fa fa-bookmark"></i> SEQUOIA</th>
                         <th><i class="fa fa-bookmark"></i> action</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                          
                          
                          
                        <tr>
                        <td class="hidden-phone">20.crs.2879</td>
                          <td>
                            <a href="#">TST</a>
                        </td>
                          
                        <td class="hidden-phone">09/07/2020</td>
                        <td class="hidden-phone">ile rousse</td>
                        <td>DAVIA</td>
                        <td class="hidden-phone"><span class="label label-warning label-mini">MC</span></td>
                        <td class="hidden-phone"><span class="label label-success label-mini">validée</span></td>
                        <td class="hidden-phone"><span class="label label-info label-mini">refusée RIP</span></td>
                        <td class="hidden-phone"><span class="label label-info label-mini">refusée CCO</span></td>
                        
                        <td class="hidden-phone"><button type="submit" class="btn btn-success btn-xs"><i class="fa fa-anchor "></i></button></td>
                        <td class="hidden-phone"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></td>

                          <td>
                          <div class="col-md-4">
                                <form width="40%" style="inline-block" action="" method="post">
                              @csrf 
                              {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-info btn-xs"><i class="fa fa-info-circle "></i></button>
                          </form>

                          </div>
                          
                          <div class="col-md-4">
                                            
                              <form width="40%" style="inline-block" action="" method="post">
                              @csrf 
                              {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                          </form>
                          </div>

                          
                        </td>

                          </td>
                        </tr>
                        

                      

                  


                      </tbody>
                    </table>
                  </div>
                  <!-- /content-panel -->
                </div>
                <!-- /col-md-12 -->
              </div>
              <!-- / tableau du PS -->


            </div>


          </div>
          <!--/  DATE PICKERS -->
          <!-- /col-lg-12 -->





      </section>
      <!-- /wrapper -->
    
    <!-- /MAIN CONTENT -->
    <!--main content end-->

 

@endsection
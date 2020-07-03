@extends('layouts.app')

@section('content')




<section class="wrapper">
  <div>
    <button data-toggle="modal" data-target="#addevent" class="btn btn-theme" type="button" style="float:right;"><i
        class="fa fa-cog"></i> ajoutez un dossier sappa</button>
    <!-- modal bo form -->
    <div class="modal fade" id="addevent">
      <div class="modal-dialog modal-lg" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
            <h4 class="modal-title">Dossier sappa</h4>
          </div>
          <div class="modal-body">
            <!-- modal body-->
            <div class="col-lg-12 mt">
              <div class="row content-panel">
                <div class="panel-heading">
                  <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                      <a data-toggle="tab" href="#overview">SEQUOIA</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#ripBo">RIP BO</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#autoProd">Auto-Prod</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#contact" class="contact-map">OMT/K-linky/DEIE</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#edit">Documents</a>
                    </li>

                  </ul>
                </div>
                <!-- /panel-heading -->
                <div class="panel-body">
                  <div class="tab-content">
                    <div id="overview" class="tab-pane active">
                      <div class="row">
                        <div class="col-md-12">


                          <div class="detailed mt">

                            <div class="">
                              <h4>NIP : 20.crs.2879.D</h4>

                              <div>
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Intitulé: <span
                                  style="color:black">Dépose ponts origine drévation poste ORTICHETO</span>
                              </div>
                              <div>
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Etat NIP: <span
                                  style="color:black">A instruire conduite</span>
                              </div>
                              <div>
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Etat FCMO: <span
                                  style="color:black">A instruire conduite</span>
                              </div>
                              <div>
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Préparé Exploit le :
                                <span style="color:black">A instruire conduite</span>
                              </div>
                              <div>
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Type NIP: <span
                                  style="color:black">NITST</span>
                              </div>
                              <div>
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>N° IEP: <span
                                  style="color:black">D743/PR0872</span>
                              </div>
                              <div>
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>N° TAMARIS: <span
                                  style="color:black">58503847</span>
                              </div>
                              <div class="accordion-group">
                                <div class="accordion-heading">
                                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                    href="faq.html#collapseOne">
                                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em> Localisation
                                    des travaux :
                                  </a>
                                </div>
                                <div id="collapseOne" class="accordion-body collapse " style="margin: 5%">
                                  <div class="accordion-inner">
                                    <div>
                                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Poste Source :
                                      <span style="color:black">D743/PR0872</span>
                                    </div>
                                    <div>
                                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Départ : <span
                                        style="color:black">D743/PR0872</span>
                                    </div>
                                    <div>
                                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>commentaires :
                                      <span style="color:black">D743/PR0872</span>
                                    </div>
                                    <div>
                                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Poste HTA/BT :
                                      <span style="color:black"></span>
                                    </div>
                                    <div>
                                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Code GDO poste
                                      ou IA : <span style="color:black"></span>
                                    </div>
                                    <div>
                                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Commune poste
                                      ou IA : <span style="color:black"></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Date de début des
                                travaux : <span style="color:black">D743/PR0872</span>
                              </div>
                              <div>
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Date de fin des
                                travaux : <span style="color:black">D743/PR0872</span>
                              </div>
                              <div>
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>BO intervenante :
                                <span style="color:black">BOBA</span>
                              </div>
                              <div>
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Zone d'exploitation
                                : <span style="color:black">D743/PR0872</span>
                              </div>

                            </div> <!-- /recent-activity -->

                          </div> <!-- /detailed -->

                        </div><!-- /col-md-12 -->



                      </div> <!-- /row -->

                    </div> <!-- /OVERVIEW -->
                    <!-- /tab-pane -->
                    <div id="contact" class="tab-pane">
                      <div class="row">

                        <!-- /col-md-6 -->
                        <div class="col-md-12 detailed">
                          <h4>OMT/K-linky/DEIE</h4>
                          <div class="col-md-8 col-md-offset-2 mt">
                            <form role="form" class="form-horizontal">
                              <div class="form-group">
                                <label for="" class="form-control-label">Divers</label>

                                <input type="file" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">OMT</label>

                                <select class="form-control" name="category" id="">

                                  <option value="">omt1</option>
                                  <option value="">omt2</option>
                                  <option value="">omt4</option>

                                </select>
                              </div>
                              <div class="form-group">
                                <label for="comment" class="form-control-label">commentaires</label>
                                <textarea name="comment" class="form-control" id="comment" cols="30"
                                  rows="3"></textarea>
                              </div>



                            </form>
                          </div>

                        </div>
                        <!-- /col-md-6 -->
                      </div>
                      <!-- /row -->
                    </div>

                    <!-- /tab-pane -->
                    <div id="ripBo" class="tab-pane">
                      <div class="row">

                        <!-- /col-md-6 -->
                        <div class="col-md-12 detailed">
                          <h4>RIP BO</h4>
                          <div class="col-md-8 col-md-offset-2 mt">
                            <form role="form" class="form-horizontal">
                              <div class="form-group">
                                <label for="" class="form-control-label">Index Dossier</label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">Date Début</label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">Date Fin</label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label for="" class="form-control-label">programé le :</label>
                                    <input type="text" class="form-control" id="exampleInputFile" class="file-pos">

                                  </div>
                                  <div class="col-md-6">
                                    <label for="" class="form-control-label">par </label>
                                    <input type="text" class="form-control" id="exampleInputFile" class="file-pos">

                                  </div>
                                </div>


                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">N° IEP</label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">RIP AE</label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">N° BTA HTA</label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">Valideur CEX</label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">PAC: NIP et FCM preparées le </label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">Conduite: NIP et FCM validées le </label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">Annulé le </label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>



                            </form>
                          </div>

                        </div>
                        <div class="col-md-12 detailed">
                          <h4>localisation</h4>
                          <div class="col-md-8 col-md-offset-2 mt">

                            <form role="form" class="form-horizontal">
                              <div class="form-group">
                                <label for="" class="form-control-label">AE </label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>

                              <div class="form-group">
                                <label for="" class="form-control-label">Poste Source </label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>

                              <div class="form-group">
                                <label for="" class="form-control-label">Ouvrage </label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>

                              <div class="form-group">
                                <label for="comment" class="form-control-label">commentaires</label>
                                <textarea name="comment" class="form-control" id="comment" cols="30"
                                  rows="3"></textarea>
                              </div>


                            </form>
                          </div>
                        </div>
                        <!--localisation -->
                        <div class="col-md-12 detailed">
                          <h4>Type de Travaux</h4>
                          <div class="col-md-8 col-md-offset-2 mt">

                            <form role="form" class="form-horizontal">


                              <div class="form-group">
                                <label for="" class="form-control-label">type de travaux </label>
                                <select name="" id="" class="form-control">
                                  <option value="">travaux 1</option>
                                  <option value="">travaux 2</option>
                                  <option value="">travaux 3</option>
                                  <option value="">travaux 4</option>
                                </select>
                              </div>




                            </form>
                          </div>
                        </div><!-- // type de travaux-->
                        <!-- creneaux-->
                        <div class="col-md-12 detailed">
                          <h4>Créneaux</h4>
                          <div class="col-md-8 col-md-offset-2 mt">

                            <form role="form" class="form-horizontal">
                              <div class="form-group">
                                <label for="" class="form-control-label">Type </label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">Créneau </label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">Poste source </label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">Ouvrage </label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">Pog </label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="" class="form-control-label">Nouveau </label>
                                <input type="text" class="form-control" id="exampleInputFile" class="file-pos">
                              </div>
                              <div class="form-group">
                                <label for="comment" class="form-control-label">commentaires</label>
                                <textarea name="comment" class="form-control" id="comment" cols="30"
                                  rows="3"></textarea>
                              </div>
                            </form>
                          </div>
                        </div><!-- // type de creaneau-->
                        <!-- /col-md-6 -->
                      </div>
                      <!-- /row -->
                    </div>

                    <!-- /tab-pane -->
                    <div id="edit" class="tab-pane">
                      <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 detailed">
                          <h4 class="mb">Documents supplementaires</h4>
                          <form role="form" class="form-horizontal">
                            <div class="form-group">

                              <div class="col-lg-6">
                                <input type="file" id="exampleInputFile" class="file-pos">
                              </div>
                            </div>



                          </form>
                        </div>
                        <div class="col-lg-8 col-lg-offset-2 detailed mt">
                          <h4 class="mb">Liste des Documents</h4>
                          <div class="col-md-8 col-md-offset-2 mt">
                            <p>
                              document 1

                            </p>
                            <br>
                            <p>
                              document 2
                            </p>
                          </div>
                        </div>
                        <!-- /col-lg-8 -->
                      </div>
                      <!-- /row -->
                    </div>
                    <!-- /tab-pane -->
                    <div id="autoProd" class="tab-pane">
                      <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 detailed">
                          <h4 class="mb">Auto-Producteur</h4>
                          <form role="form" class="form-horizontal">
                            <div class="form-group">
                              <label for="" class="form-control-label">Prevenir </label>
                              <select name="" id="" class="form-control">
                                <option value="">oui</option>
                                <option value="">non</option>

                              </select>
                            </div>
                            <div class="form-group">
                              <label for="" class="form-control-label">Présent sur ce depart </label>
                              <select name="" id="" class="form-control">
                                <option value="">MC 1</option>
                                <option value="">MC 2</option>
                                <option value="">MC 3</option>
                                <option value="">MC 4</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="" class="form-control-label">Autre MC </label>
                              <select name="" id="" class="form-control">
                                <option value="">MC 1</option>
                                <option value="">MC 2</option>
                                <option value="">MC 3</option>
                                <option value="">MC 4</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="" class="form-control-label">Cause de découplage </label>
                              <select name="" id="" class="form-control">
                                <option value="">MC 1</option>
                                <option value="">MC 2</option>
                                <option value="">MC 3</option>
                                <option value="">MC 4</option>
                              </select>
                            </div>

                            <button type="button" class="btn btn-default btn-lg btn-block">ajouter</button>

                          </form>

                        </div>
                        <div class="col-lg-8 col-lg-offset-2 detailed mt">
                          <h4 class="mb">Liste des Auto-Producteur</h4>
                          <div class="col-md-12 mt">
                            <div class="row mt">
                              <div class="col-md-12">
                                <!--  Chantier en cours -->
                                <div class="content-panel">
  
                                  <table class="table table-striped table-advance table-hover">
  
  
                                    <thead>
                                      <tr>
                                        <th><i class="fa fa-bullhorn"></i> Nom de la MC</th>
                                        <th><i class="fa fa-bullhorn"></i> cause du découplage</th>
  
  
                                        <th><i class="fa fa-comments"></i> prévenir</th>
                                        <th><i class="fa fa-bookmark"></i> prévenue</th>
                                        <th><i class="fa fa-bookmark"></i> action</th>
  
                                      </tr>
                                    </thead>
                                    <tbody>
  
  
  
                                      <tr>
                                        <td class="hidden-phone">tt</td>
                                        <td> <a href="#">tt</a></td>
  
                                        <td><button type="submit" class="btn btn-success btn-xs"><i class="fa fa-comments-o "></i> envoyer</button></td>
                                        <td class="hidden-phone"><span class="label label-success label-mini">oui</span></td>
  
  
  
                                        <td>
                                          
  
                                          <div class="col-md-4">
  
                                            <form width="40%" style="inline-block" action="" method="post">
                                              @csrf
                                              {{method_field('DELETE')}}
                                              <button type="submit" class="btn btn-danger btn-xs"><i
                                                  class="fa fa-trash-o "></i></button>
                                            </form>
                                          </div>
  
  
                                        </td>
  
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="hidden-phone">tt</td>
                                        <td> <a href="#">tt</a></td>
  
                                        <td><button type="submit" class="btn btn-success btn-xs"><i class="fa fa-comments-o "></i> envoyer</button></td>
                                        <td class="hidden-phone"><span class="label label-danger label-mini">non</span></td>
  
  
  
                                        <td>
                                          
  
                                          <div class="col-md-4">
  
                                            <form width="40%" style="inline-block" action="" method="post">
                                              @csrf
                                              {{method_field('DELETE')}}
                                              <button type="submit" class="btn btn-danger btn-xs"><i
                                                  class="fa fa-trash-o "></i></button>
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
                          </div>
                        </div>
                        <!-- /col-lg-8 -->
                      </div>
                      <!-- /row -->
                    </div>
                    <!-- /tab-pane -->
                  </div>
                  <!-- /tab-content -->

                </div>
                <!-- /panel-body -->
              </div>
              <!-- /col-lg-12 -->
            </div>


            <!-- // end modal body -->

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
              <th><i class="fa fa-bullhorn"></i> Type NIP</th>
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

              <td class="hidden-phone"><button type="submit" class="btn btn-success btn-xs"><i
                    class="fa fa-briefcase "></i></button></td>
              <td class="hidden-phone"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></td>

              <td>
                <div class="col-md-4">

                  <button data-toggle="modal" data-target="#addevent" type="submit" class="btn btn-info btn-xs"><i
                      class="fa fa-info-circle "></i></button>


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

              <td class="hidden-phone"><button type="submit" class="btn btn-warning btn-xs"><i
                    class="fa fa-clock-o "></i></button></td>
              <td class="hidden-phone"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></td>

              <td>
                <div class="col-md-4">

                  <button data-toggle="modal" data-target="#addevent" type="submit" class="btn btn-info btn-xs"><i
                      class="fa fa-info-circle "></i></button>


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
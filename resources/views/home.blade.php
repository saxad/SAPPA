@extends('layouts.app')

@section('content')
 
   
   
    
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Agenda</h3>
        <div class="row mt">

          <div class="col-lg-12">
            <div class="form-panel">
              <!--  DATE PICKERS -->
              <form action="#" class="form-horizontal style-form">
                <div class="form-group">
                  <label class="control-label col-md-3">Selectionnez une date</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium default-date-picker" size="16"
                      type="text" value="">

                  </div>
                </div>



              </form>
              <!-- / DATE PICKERS -->
              <div class="row mt">
                <div class="col-md-12">
                  <!--  Chantier en cours -->
                  <div class="content-panel">

                    <table class="table table-striped table-advance table-hover">
                      <h4><i class="fa fa-angle-right"></i> Chantiers EN Cours</h4>
                      <hr>
                      <thead>
                        <tr>
                          <th><i class="fa fa-bullhorn"></i> ZAE</th>
                          <th class="hidden-phone"><i class="fa fa-question-circle"></i> NIP
                          </th>
                          <th><i class="fa fa-bookmark"></i> PS</th>
                          <th><i class="fa fa-bookmark"></i> DEPART</th>
                          <th><i class="fa fa-bookmark"></i> DEBUT</th>
                          <th><i class="fa fa-bookmark"></i> FIN</th>
                          <th><i class=" fa fa-edit"></i> TRAVAUX</th>
                          <th><i class="fa fa-bookmark"></i> ETAT</th>

                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
                            <a href="basic_table.html#">Dashio ext</a>
                          </td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td>22000.50$ </td>
                          <td><span class="label label-success label-mini">Paid</span></td>
                          <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>

                          </td>
                        </tr>

                        <tr>
                          <td>
                            <a href="basic_table.html#">Dashio ext</a>
                          </td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td>22000.50$ </td>
                          <td><span class="label label-success label-mini">Paid</span></td>
                          <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>

                          </td>
                        </tr>

                        <tr>
                          <td>
                            <a href="basic_table.html#">Dashio ext</a>
                          </td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td>22000.50$ </td>
                          <td><span class="label label-success label-mini">Paid</span></td>
                          <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>

                          </td>
                        </tr>

                        <tr>
                          <td>
                            <a href="basic_table.html#">Dashio ext</a>
                          </td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td>22000.50$ </td>
                          <td><span class="label label-success label-mini">Paid</span></td>
                          <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>

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


              <!-- chatier du  matin -->
              <div class="row mt">
                <div class="col-md-12">
                  <!--  Chantier en cours -->
                  <div class="content-panel">

                    <table class="table table-striped table-advance table-hover">
                      <h4><i class="fa fa-angle-right"></i> Matin x chantiers</h4>
                      <hr>
                      <thead>
                        <tr>
                          <th><i class="fa fa-bullhorn"></i> heure</th>
                          <th class="hidden-phone"><i class="fa fa-question-circle"></i> faisabilité
                          </th>
                          <th><i class="fa fa-bookmark"></i> NIP</th>
                          <th><i class="fa fa-bookmark"></i> PS</th>
                          <th><i class="fa fa-bookmark"></i> DEPART</th>
                          <th><i class="fa fa-bookmark"></i> TYPE</th>
                          <th><i class=" fa fa-edit"></i> TRAVAUX</th>
                          <th><i class="fa fa-bookmark"></i> Commentaire</th>
                          <th><i class="fa fa-bookmark"></i> NIP</th>
                          <th><i class="fa fa-bookmark"></i> FCMO</th>
                          <th><i class="fa fa-bookmark"></i> CONF</th>
                          <th><i class="fa fa-bookmark"></i> etat</th>

                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
                            <a href="basic_table.html#">6:00 à 6:30</a>
                          </td>
                          <td>
                            <span class="label label-info label-mini">DELCO</span>
                            <span class="label label-warning label-mini">BAO</span>
                          </td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td>22000.50$ </td>
                          <td><span class="hidden-phone">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                              illo officia doloribus aspernatur, facilis vel accusantium magnam aliquam libero
                              expedita?</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="basic_table.html#">6:30 à 7:00</a>
                          </td>
                          <td>
                            <span class="label label-info label-mini">DELCO</span>
                            <span class="label label-warning label-mini">BAO</span>
                          </td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td>22000.50$ </td>
                          <td><span class="hidden-phone">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                              illo officia doloribus
                              aspernatur, facilis vel accusantium magnam aliquam libero expedita?</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="basic_table.html#">7:00 à 7:30 </a>
                          </td>
                          <td>
                            <span class="label label-info label-mini">DELCO</span>
                            <span class="label label-warning label-mini">BAO</span>
                          </td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td>22000.50$ </td>
                          <td><span class="hidden-phone">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                              illo officia doloribus
                              aspernatur, facilis vel accusantium magnam aliquam libero expedita?</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td>
                            <button class="btn btn-danger btn-xs"><i class="fa fa-check"></i></button>

                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <!-- /content-panel -->
                </div>
                <!-- /col-md-12 -->
              </div>
              <!-- / chatier du  matin -->


              <!-- chatier de l'aprem -->
              <div class="row mt">
                <div class="col-md-12">

                  <div class="content-panel">

                    <table class="table table-striped table-advance table-hover">
                      <h4><i class="fa fa-angle-right"></i> Apres-midi x chantiers</h4>
                      <hr>
                      <thead>
                        <tr>
                          <th><i class="fa fa-bullhorn"></i> heure</th>
                          <th class="hidden-phone"><i class="fa fa-question-circle"></i> faisabilité
                          </th>
                          <th><i class="fa fa-bookmark"></i> NIP</th>
                          <th><i class="fa fa-bookmark"></i> PS</th>
                          <th><i class="fa fa-bookmark"></i> DEPART</th>
                          <th><i class="fa fa-bookmark"></i> TYPE</th>
                          <th><i class=" fa fa-edit"></i> TRAVAUX</th>
                          <th><i class="fa fa-bookmark"></i> Commentaire</th>
                          <th><i class="fa fa-bookmark"></i> NIP</th>
                          <th><i class="fa fa-bookmark"></i> FCMO</th>
                          <th><i class="fa fa-bookmark"></i> CONF</th>
                          <th><i class="fa fa-bookmark"></i> etat</th>

                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
                            <a href="basic_table.html#">12:00 à 12:30</a>
                          </td>
                          <td>
                            <span class="label label-info label-mini">DELCO</span>
                            <span class="label label-warning label-mini">BAO</span>
                          </td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td>22000.50$ </td>
                          <td><span class="hidden-phone">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                              illo officia doloribus aspernatur, facilis vel accusantium magnam aliquam libero
                              expedita?</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="basic_table.html#">12:30 à 13:00</a>
                          </td>
                          <td>
                            <span class="label label-info label-mini">DELCO</span>
                            <span class="label label-warning label-mini">BAO</span>
                          </td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td>22000.50$ </td>
                          <td><span class="hidden-phone">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                              illo officia doloribus
                              aspernatur, facilis vel accusantium magnam aliquam libero expedita?</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="basic_table.html#">13:00 à 13:30 </a>
                          </td>
                          <td>
                            <span class="label label-info label-mini">DELCO</span>
                            <span class="label label-warning label-mini">BAO</span>
                          </td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td class="hidden-phone">Lorem Ipsum dolor</td>
                          <td>22000.50$ </td>
                          <td><span class="hidden-phone">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                              illo officia doloribus
                              aspernatur, facilis vel accusantium magnam aliquam libero expedita?</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td><span class="label label-success label-mini">V</span></td>
                          <td>
                            <button class="btn btn-danger btn-xs"><i class="fa fa-check"></i></button>

                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <!-- /content-panel -->
                </div>
                <!-- /col-md-12 -->
              </div>
              <!-- / chatier de l'aprem -->
            </div>


          </div>
          <!--/  DATE PICKERS -->
          <!-- /col-lg-12 -->





      </section>
      <!-- /wrapper -->
    
    <!-- /MAIN CONTENT -->
    <!--main content end-->

 

@endsection
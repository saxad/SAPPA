@extends('layouts.app')

@section('content')
 
   
        <section class="wrapper site-min-height">
                <h3><i class="fa fa-angle-right"></i> Schemas : {{$bo->bo_name}}</h3>
                <!-- Liste postess source -->
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Listes des PS</h4>



                            <hr>

                            <select class="form-control poste">
                            <option>liste des postes sources</option>
                             @foreach($postes as $poste)
                                <option value="{{$poste->id}}">{{$poste->name}}</option>
                      
                             @endforeach
                            </select>
                            <br>

                        </div>
                        <!-- /form-panel -->
                    </div>
                    <!-- / Liste postess source -->


                </div>
                <!-- /row -->

                <!-- row -->

                <!-- tableau du PS -->
                <div class="row mt">
                    <div class="col-md-12">
                        <div class="content-panel">
                            <table class="table table-striped table-advance table-hover">
                                <h4><i class="fa fa-angle-right"></i> Schémas Poste Source : 'PS selectionné' </h4>
                                <hr>
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-bullhorn"></i> Index</th>
                                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nom du schema
                                        </th>
                                        <th><i class="fa fa-bookmark"></i> PDF</th>
                                        <th><i class="fa fa-bookmark"></i> Visio</th>
                                        <th><i class="fa fa-bookmark"></i> FCMO</th>
                                        <th><i class="fa fa-bookmark"></i> Fiche IOMT</th>
                                        <th><i class=" fa fa-edit"></i> Dernière MAJ</th>
                                        <th><i class=" fa fa-edit"></i> action</th>
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
                                        <td>22000.50$ </td>
                                        <td>22000.50$ </td>
                                        <td><span class="label label-success label-mini">Paid</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i
                                                    class="fa fa-trash-o "></i></button>
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

                <!-- /row -->


                <!-- row -->

                <!-- tableau des des parts -->
                <div class="row mt">
                    <div class="col-md-12">
                        <div class="content-panel">
                            <table class="table table-striped table-advance table-hover">
                                <h4><i class="fa fa-angle-right"></i> Schémas des departs</h4>
                                <hr>
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-bullhorn"></i> Depart</th>
                                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> DJ N°</th>
                                        <th><i class="fa fa-bookmark"></i>Schéma PDF</th>
                                        <th><i class="fa fa-bookmark"></i>Schéma Visio</th>
                                        <th><i class="fa fa-bookmark"></i>Schéma N-1 PDF</th>
                                        <th><i class="fa fa-bookmark"></i>Schéma N-1 Visio</th>
                                        <th><i class="fa fa-bookmark"></i> Schéma Avec RDCR</th>
                                        <th><i class="fa fa-bookmark"></i> Auto-producteurs</th>
                                        <th><i class="fa fa-bookmark"></i> Tension HTA</th>
                                        <th><i class="fa fa-bookmark"></i> Commentaire</th>
                                        <th><i class=" fa fa-edit"></i> Dernière MAJ</th>
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

                                        <td class="hidden-phone">Lorem Ipsum dolor</td>
                                        <td class="hidden-phone">Lorem Ipsum dolor</td>
                                        <td class="hidden-phone">Lorem Ipsum dolor</td>
                                        <td>22000.50$ </td>
                                        <td><span class="label label-success label-mini">Paid</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i
                                                    class="fa fa-trash-o "></i></button>
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

                <!-- /row -->


            </section>

 

@endsection

@section('scripts')
<script>

$(document).on('change','.poste',function(){
        
    var posteId = $('.poste option:selected').val().toString();
  
    
    var url =  '{{ route("posteSchemas",":postId" )}}';
    url = url.replace(':postId', posteId);
  
 ;
    
    $.ajax({

        type : 'GET',
        url : url,
      
        success : function(data){
            console.log(data);
            console.log(data.id);
        }

    });
})

</script>


@stop



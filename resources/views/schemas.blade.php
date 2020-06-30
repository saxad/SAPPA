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
                                <h4 ><i class="fa fa-angle-right"></i> Schémas Poste Source : <span id="posteTitle"></span>  </h4>
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
                                <tbody id="posteTable">

                                

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
                                <tbody id="departsTable">

                                 
                             
                                

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
  
 
    
    $.ajax({

        type : 'GET',
        url : url,
        
        success : function(data){

            var data  = JSON.parse(data);
            console.log(data.departs);
            let poste = data.poste;
            let departs = data.departs;
            let departsTable = '';
            let posteTable = '';

            let title = $('#posteTitle').text();
            console.log(title)
            
            title =  poste.name;
            
            $('#posteTitle ').empty();
            $('#posteTitle ').html(title);
            title = '';
            

            posteTable = '<tr>'
            posteTable += '<td>' + poste.id + '</td>';
            posteTable += '<td>' + poste.name + '</td>';
            posteTable += '<td>' + 'path to schema' + '</td>';
            posteTable += '<td>' + 'path to visio' + '</td>';
            posteTable += '<td>' + 'poste.FCMO' + '</td>';
            posteTable += '<td>' + 'fichie iomt' + '</td>';
            posteTable += '<td>' + poste.updated_at + '</td>';
            posteTable += ` <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i
                                                    class="fa fa-trash-o "></i></button>
                                        </td>`;
            $('#posteTable').empty();
            $('#posteTable').append(posteTable);
            posteTable += '</tr>';
            var i = 0;
            for( i = 0; i < departs.length;  i++ ){
                console.log(departs[i]);
                departsTable +='<tr>';
                departsTable += '<td>' + departs[i].id + '</td>';
                departsTable += '<td><i class="fa fa-file"></i> ' + departs[i].name + '</td>';
                departsTable += '<td>' + 'depart schemapdf ' + '</td>';
                departsTable += '<td>' + 'depart visio' + '</td>';
                departsTable += '<td>' + 'depart schemapdf n-1' + '</td>';
                departsTable += '<td>' + 'depart schema visio n-1' + '</td>';
                departsTable += '<td>' + 'rdcr schema' + '</td>';
                departsTable += '<td>' + 'autoprod' + '</td>';
                departsTable += '<td>' + 'tension hta' + '</td>';
                departsTable += '<td>' + departs[i].comment + '</td>';
                departsTable += '<td>' + departs[i].updated_at + '</td>';

                departsTable += '</tr>';

            }
            $('#departsTable').empty();
            $('#departsTable').append(departsTable);
         
        },
        error: function (e) {
                console.log('e.responseText');
                $('#saad').html('lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste incidunt facere repudiandae neque, consectetur dignissimos doloribus fugiat, ex nihil mollitia nemo ut laborum rem et dicta blanditiis accusamus, laudantium perspiciatis.');
        }
        

    });
})

</script>


@stop



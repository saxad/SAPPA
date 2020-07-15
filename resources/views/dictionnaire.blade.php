@extends('layouts.app')

@section('content')

        <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i> Dictionnaire TS</h3>
                <div class="row mb">
                    <!-- page start-->
                    <div class="content-panel">
                        <div class="adv-table">
                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered"
                                id="hidden-table-info">
                                <thead>
                                    <tr>
                                        <th>TS Classique</th>
                                        <th>TS PCCN ou PSAA</th>
                                        <th class="hidden-phone">Abréviation</th>
                                        <th class="hidden-phone">Action</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <tr class="gradeA">
                                        <td>Presto</td>
                                        <td>Nokia N800</td>
                                        <td class="hidden-phone">N800</td>
                                        <td class="center hidden-phone">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i
                                                    class="fa fa-trash-o "></i></button>
                                        </td>

                                    </tr>
                                    <tr class="gradeA">
                                        <td>Presto</td>
                                        <td>Nintendo DS browser</td>
                                        <td class="hidden-phone">Nintendo DS</td>

                                        <td class="center hidden-phone">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i
                                                    class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Presto</td>
                                        <td>Nintendo DS browser</td>
                                        <td class="hidden-phone">Nintendo DS</td>

                                        <td class="center hidden-phone">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i
                                                    class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Presto</td>
                                        <td>Nintendo DS browser</td>
                                        <td class="hidden-phone">Nintendo DS</td>

                                        <td class="center hidden-phone">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i
                                                    class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Presto</td>
                                        <td>Nintendo DS browser</td>
                                        <td class="hidden-phone">Nintendo DS</td>

                                        <td class="center hidden-phone">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i
                                                    class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Presto</td>
                                        <td>Nintendo DS browser</td>
                                        <td class="hidden-phone">Nintendo DS</td>

                                        <td class="center hidden-phone">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i
                                                    class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>




                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- page end-->
                </div>
                <!-- /row -->
            </section>
            <!-- /wrapper -->

    <script type="text/javascript" language="javascript" src="{{ asset('js/lib/advanced-datatable/js/jquery.js') }}" ></script>
    
  
    <script type="text/javascript" language="javascript" src="{{ asset('js/lib/advanced-datatable/js/jquery.dataTables.js')}}" defer></script>
    <script type="text/javascript" src="{{ asset('lib/advanced-datatable/js/DT_bootstrap.js')}}" defer></script>

    


     <script type="text/javascript" defer>
        /* Formating function for row details */
        function fnFormatDetails(oTable, nTr) {
            var aData = oTable.fnGetData(nTr);
            var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
            sOut += '<tr><td>Definition de la TS:</td><td>' + 'ici la definition' + '</td></tr>';
            sOut += '<tr><td>Appel CEX:</td><td>Le Lorem Ipsum est simplement du faux texte employé dans la composition</td></tr>';
            sOut += '<tr><td>Conduite à tenir:</td><td>Le Lorem Ipsum est simplement du faux texte employé dans la composition</td></tr>';
            sOut += '</table>';

            return sOut;
        }

        $(document).ready(function () {
            /*
             * Insert a 'details' column to the table
             */
            var nCloneTh = document.createElement('th');
            var nCloneTd = document.createElement('td');
            nCloneTd.innerHTML = '<img src="js/lib/advanced-datatable/images/details_open.png">';
            nCloneTd.className = "center";

            $('#hidden-table-info thead tr').each(function () {
                this.insertBefore(nCloneTh, this.childNodes[0]);
            });

            $('#hidden-table-info tbody tr').each(function () {
                this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
            });

            /*
             * Initialse DataTables, with no sorting on the 'details' column
             */
            var oTable = $('#hidden-table-info').dataTable({
                "aoColumnDefs": [{
                    "bSortable": false,
                    "aTargets": [0]
                }],
                "aaSorting": [
                    [1, 'asc']
                ]
            });

            /* Add event listener for opening and closing details
             * Note that the indicator for showing which row is open is not controlled by DataTables,
             * rather it is done here
             */
            $('#hidden-table-info tbody td img').live('click', function () {
                var nTr = $(this).parents('tr')[0];
                if (oTable.fnIsOpen(nTr)) {
                    /* This row is already open - close it */
                    this.src = "{{ asset('js/lib/advanced-datatable/media/images/details_open.png')}}";
                    oTable.fnClose(nTr);
                } else {
                    /* Open this row */
                    this.src = "{{ asset('js/lib/advanced-datatable/images/details_close.png')}}";
                    oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
                }
            });
        });
    </script>





@endsection
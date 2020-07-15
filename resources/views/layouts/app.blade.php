<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  
<title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Favicons -->
  <link href="img/logo/logo_edf.ico" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('js/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('js/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('js/lib/bootstrap-fileupload/bootstrap-fileupload.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('js/lib/bootstrap-datepicker/css/datepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('js/lib/bootstrap-daterangepicker/daterangepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('js/lib/bootstrap-timepicker/compiled/timepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('js/lib/bootstrap-datetimepicker/datertimepicker.css') }}" />
  <link href="{{ asset('js/lib/advanced-datatable/css/demo_page.css')}}" rel="stylesheet" />
  <link href="{{ asset('js/lib/advanced-datatable/css/demo_table.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('lib/advanced-datatable/css/DT_bootstrap.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
      <script src="{{  asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>


<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> -->

   
</head>

<body>

  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="{{route('home')}}" class="logo"><b>SAP<span>PA</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->

        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li> 
          <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
          <!-- <h5 class="centered">fred lurie</h5> -->
          @if(Auth::check())
            <p class="centered"><a href="{{ route('profile') }}"><img src="{{ Auth::user()->picture }}" class="img-circle" width="80"></a></p>
           <h5 class="centered">{{ Auth::user()->firstname }}</h5> 
          
          @endif
           
          
          <li class="mt">
            <a class="active" href="{{ route('sappa') }}">
              <i class="fa fa-dashboard"></i>
              <span>SAPPA</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="{{ route('home') }}">
              <i class="fa fa-desktop"></i>
              <span>Agenda</span>
            </a>

          </li>
          <li class="sub-menu">
            <a href="{{ route('tools') }}">
              <i class="fa fa-cogs"></i>
              <span>Liens & Outils</span>
            </a>
         
         
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Outils SAPPA</span>
            </a>
            <ul class="sub">
              <li><a href="grids.html">Déconnexion MC</a></li>
              <li><a href="calendar.html">Cumuls</a></li>
              <li><a href="{{ route('dictionnaire') }}">Dico TS</a></li>
              <li><a href="todo_list.html">REX</a></li>
              <li><a href="dropzone.html">Incidents</a></li>
              <li><a href="{{ route('event') }}">Evenements remarquebles</a></li>
              <li><a href="omtklinky.html">OMT & K-Linky</a></li>
              <!-- cette partie faut la mettre dans les outils acr-->
              <!--  <li><a href="file_upload.html">N-1 Départs</a></li>
              <li><a href="file_upload.html">Délestage</a></li>
              <li><a href="file_upload.html">RoulQuart2019</a></li>
              <li><a href="file_upload.html">Planning DELCO</a></li> -->
              <li><a href="file_upload.html">ZONES Incendie</a></li>
              <li><a href="file_upload.html">Import SEQUOIA</a></li>
              <li><a href="file_upload.html">Import SEQUOIA Managerial</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Schemas</span>
            </a>
            <ul class="sub">
            @foreach($bos as $bo)
              <li><a href="{{ route('schemas',$bo->id) }}">{{$bo->bo_name}}</a></li>
              @endforeach
              <!-- <li><a href="login.html">Aspretto</a></li>
              <li><a href="lock_screen.html">Caldaniccia</a></li>
              <li><a href="profile.html">Loreto</a></li>
              <li><a href="invoice.html">Ocana</a></li>
              <li><a href="pricing_table.html">Pietrosella</a></li>
              <li><a href="faq.html">Sagone</a></li> -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="{{ route('trombinoscope') }}">
              <i class="fa fa-tasks"></i>
              <span>Trombinoscope</span>
            </a>

          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Auto-producteurs</span>
            </a>
            <ul class="sub">
              <li><a href="basic_table.html">Deconnexion MC</a></li>
              <li><a href="responsive_table.html">Cumuls</a></li>
              <li><a href="advanced_table.html">Liste MC Délestage</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-cog"></i>
              <span>Administration</span>
            </a>
            <ul class="sub">
              <li><a href="{{route('profile')}}">Gestion du compte</a></li>
              <li><a href="{{route('admin')}}">Admin</a></li>

            </ul>
          </li>


        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
   
    @yield('content')
     
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('js/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('js/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('js/lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('js/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{ asset('js/lib/common-scripts.js') }}"></script>
  <!--script for this page-->
  <script src="{{ asset('js/lib/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/lib/bootstrap-fileupload/bootstrap-fileupload.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/lib/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/lib/bootstrap-daterangepicker/date.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/lib/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/lib/bootstrap-daterangepicker/moment.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/lib/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
  <script src="{{ asset('js/lib/advanced-form-components.js') }}"></script>



 @yield('scripts')
 


</body>

</html>
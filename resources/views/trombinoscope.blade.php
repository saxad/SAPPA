@extends('layouts.app')

@section('content')




 <!--main content start-->
        
            <section class="wrapper site-min-height">
                <h3><i class="fa fa-angle-right"></i> Trombinoscope </h3>
                <div class="row mt">
                    <div class="col-lg-12">

                        <!--  GR DELCO -->


                        <h4><i class="fa fa-angle-right"></i> GR DELCO </h4>



                       


                        <div class="row">

                            <!-- /col-md-4 -->
                            @foreach($users as $user)

                            @if ($user->hierarchy == 'GR DELCO')
                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <!-- WHITE PANEL - TOP USER -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>{{$user->job}}</h5>
                                    </div>
                                    <p><img src="{{$user->picture}}" class="img-circle" width="50"></p>
                                    <p><b>{{$user->firstname}}</b></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="small mt">email</p>
                                            <p>{{$user->email}}</p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                            <!-- /col-md-4 -->
                        </div>
                        <!-- /end  GR DELCO -->


                        <!--  HTB -->


                        <h4><i class="fa fa-angle-right"></i> HTB </h4>
                        <div class="row">

                          
                    
                            <!-- /col-md-4 -->
                          @foreach($users as $user)

                            @if ($user->hierarchy == 'HTB')
                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <!-- WHITE PANEL - TOP USER -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>{{$user->job}}</h5>
                                    </div>
                                    <p><img src="{{$user->picture}}" class="img-circle" width="50"></p>
                                    <p><b>{{$user->firstname}}</b></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="small mt">email</p>
                                            <p>{{$user->email}}</p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                             @endif
                            @endforeach
                            <!-- /col-md-4 -->
                        </div>
                        <!-- /end  HTB -->


                        <!--  HTA -->


                        <h4><i class="fa fa-angle-right"></i> HTA </h4>
                        <div class="row">

                         @foreach($users as $user)

                            @if ($user->hierarchy == 'HTA')


                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <!-- WHITE PANEL - TOP USER -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>{{$user->job}}</h5>
                                    </div>
                                    <p><img src="{{$user->picture}}" class="img-circle" width="50"></p>
                                    <p><b>{{$user->firstname}}</b></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="small mt">email</p>
                                            <p>{{$user->email}}</p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <!-- /col-md-4 -->
                        </div>
                        <!-- /end  HTA -->



                        <!--  autre -->


                        <h4><i class="fa fa-angle-right"></i> Ils sont passés par là </h4>
                        <div class="row">

                            <!-- /col-md-4 -->
                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <!-- WHITE PANEL - TOP USER -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>Chef du GR DELCO</h5>
                                    </div>
                                    <p><img src="{{$user->picture}}" class="img-circle" width="50"></p>
                                    <p><b>Laetitia THOMAS</b></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="small mt">email</p>
                                            <p>titi@exemple.com</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <!-- WHITE PANEL - TOP USER -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>Assistant GR DELCO</h5>
                                    </div>
                                    <p><img src="{{$user->picture}}" class="img-circle" width="50"></p>
                                    <p><b>Dominique SANGUINETTI</b></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="small mt">email</p>
                                            <p>titi@exemple.com</p>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- /col-md-4 -->
                        </div>
                        <!-- /end  autre -->


                    </div>
                </div>
            </section>
        




@endsection
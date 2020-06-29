@extends('layouts.login')

@section('content')
<div class="container">
   
   
             <form class="form-login" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2 class="form-login-heading">Connectez-vous</h2>
                    <div class="login-wrap">

                          <input class="form-control" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                   
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                           
                          <br>

                        
                        <input class="form-control" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                              
                                     <strong>{{ $message }}</strong>
                                 </span>
                            @enderror     
                           <hr>            
                           <div>     
                                <button type="submit" class="btn btn-theme btn-block"><i class="fa fa-lock"></i> 
                                    {{ __('Connexion') }}
                                </button>
    
                            </div>
                        </div>
                </form>
               
@endsection

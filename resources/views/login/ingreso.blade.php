@extends('layouts.app')

@section('content')
{!!Form::open(array('url' => '/ingreso', 'method'=>'POST', 'autocomplete'=>'off'))!!}
 {{Form::token()}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Ingreso</div>
                <div class="card-body">
 					<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="Mail" type="email" class="form-control @error('email') is-invalid @enderror" name="Mail" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="Password" type="password" class="form-control @error('Password') is-invalid @enderror" name="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        </div>


 				{!!Form::close()!!}

                
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


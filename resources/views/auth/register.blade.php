@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Registracija</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label for="username" class="col-md-4 control-label">Korisničko ime</label>

                                    <div class="col-md-6">
                                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Adresa</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Password (ponovo)</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Ime i prezime</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                    <label for="birthday" class="col-md-4 control-label">Datum rođenja</label>

                                    <div class="col-md-6">
                                        <input id="birthday" type="date" class="form-control" name="birthday" value="{{ old('birthday') }}" required autofocus>

                                        @if ($errors->has('birthday'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                    <label for="location" class="col-md-4 control-label">Lokacija</label>

                                    <div class="col-md-6">
                                        <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" required autofocus>

                                        @if ($errors->has('location'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                    <label for="website" class="col-md-4 control-label">Web stranica</label>

                                    <div class="col-md-6">
                                        <input id="website" type="url" class="form-control" name="website" value="{{ old('website') }}" required autofocus>

                                        @if ($errors->has('website'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-3">

                                <div class="form-group" style="margin-top: 20px">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        Dovrši registraciju
                                    </button>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

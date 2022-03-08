@extends('layouts.admin.layouts')

@section('title','Login')

@section('guest')
    <section class="section-account">
        <div class="img-backdrop" style="background-image: url('{{asset('demo/admin/img/latable-logo.jpg')}}')"></div>
        <div class="spacer"></div>
        <div class="card contain-sm style-transparent">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
                        <br/>
                        <span class="text-lg text-bold text-primary">{{config('app.name')}} ADMIN PANEL</span>
                        <br/><br/>
                        <form class="form form-validate floating-label" accept-charset="utf-8" method="POST"
                              action="{{ route('admin.login') }}" autocomplete="off" novalidate>
                            @csrf
                            <div class="form-group">
                                <input type="text"
                                       class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                       id="email" name="login" value="{{ old('username') ?: old('email') }}" required>
                                <label for="login">Username/Email</label>
                                @if ($errors->has('username') || $errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $errors->first('username') ?: $errors->first('email') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       id="password"
                                       name="password" required>
                                <label for="password">Password</label>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $errors->first('password') }}</p>
                                    </span>
                                @endif
                            </div>
                            <br/>
                            <div class="row">
                                <button class="btn btn-block btn-raised btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                    </div><!--end .col -->
                </div><!--end .row -->
            </div><!--end .card-body -->
        </div><!--end .card -->
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('demo/admin/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('demo/admin/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
@endsection

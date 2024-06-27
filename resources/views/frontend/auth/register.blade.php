@extends('frontend.layout.app')

@section('content')

<main class="main">

    <div class="container login-container">

        <div class="row">
            <div class="col-md-7 text-center login-left">
                <div class="heading mb-5">
                    <h2 class="title">Create an Account</h2>
                </div>

                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="separator text-dark mb-1"> Sign up with </div>
                        <div class="row mb-5">
                            <div class="col-xl-6">
                                <a href="{{ route('login.provider', 'facebook') }}" class="btn btn-lg btn-block btn-social-login btn-facebook">
                                    <img src="{{ asset('assets/img/social/facebook.png') }}" />
                                </a>
                            </div>
                            <div class="col-xl-6">
                                <a href="{{ route('login.provider', 'google') }}" class="btn btn-lg btn-block btn-social-login btn-google">
                                    <img src="{{ asset('assets/img/social/google.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="separator text-dark mb-1"> OR </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <form action="#" id="register-form" class="login-form">
                            <div class="form-group row align-items-center">
                                <label class="control-label col-sm-1 text-right" for="name"><i class="far fa-user-circle"></i></label>
                                <div class="col-sm-11">
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="control-label col-sm-1 text-right" for="email"><i class="fas fa-envelope"></i></label>
                                <div class="col-sm-11">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="control-label col-sm-1 text-right" for="passwrord"><i class="fas fa-lock"></i></label>
                                <div class="col-sm-11">
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="control-label col-sm-1 text-right" ></label>
                                <div class="col-sm-11 text-left">
                                    <small class="text-danger">Passwords must have at least 8 characters and contain at least two of the following: uppercase letters, lowercase letters, numbers, and symbols.</small>
                                </div>
                            </div>
                            <div class="form-footer mt-3 mb-1 justify-content-center">
                                <span>By signing up, you agree to our Terms of Service and Privacy Policy.</span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md custom-primary-button">
                                Create an Account
                            </button>
                        </form>
                    </div>
                </div>



            </div>
            <div class="col-md-5 bg-secondary text-center login-right">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('assets/img/logo.png') }}" width="200" />
                </div>

                <div class="heading mb-5 mt-5">
                    <h2 class="title">Have an account?</h2>
                    <h2 class="title mt-3">Great!</h2>
                </div>


                <a class="btn btn-primary btn-md mr-0 custom-light-button" href="{{ route('login') }}">
                    Log in
                </a>

            </div>
        </div>

    </div>
</main>

@endsection

@push('custom-scripts')

<script type="text/javascript">

    $('#register-form').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "{{ route('register.submit') }}",
            data: $("#register-form").serialize(),
            headers: {
                'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')
            },
            success: function (response) {
            	
                if(response.status == 'error') {
                    Swal.fire({
                        title: 'Error',
                        html: '<h2 style="font-size: 20px;">'+response.message+'</h2>',
                        icon: 'error',
                        customClass: 'swal-custom',
                        showConfirmButton: true
                    });
                }
                else if(response.status == 'success'){
                    Swal.fire({
                        text: 'text',
                        icon: 'icon',
                        customClass: 'swal-wide',
                        html: '<div class="justify-content-center" style=""><img class="mx-auto" src="{{ asset("assets/img/confirm.png") }}" width="138" height="138" /><h2 class="py-5">Good to see you!</h2></div>',
                        timer: 30000,
                        showConfirmButton: false
                    });
                } else {
                    Swal.fire({
                        title: 'Error',
                        html: '<h2 style="font-size: 20px;">Woops, something went wrong</h2>',
                        icon: 'error',
                        customClass: 'swal-custom',
                        showConfirmButton: true
                    });
                }
            },
            error: function(response) {
                Swal.fire({
                    title: 'Error',
                    html: '<h2 style="font-size: 20px;">Server Connection Error</h2>',
                    icon: 'error',
                    customClass: 'swal-custom',
                    showConfirmButton: true
                });
            }
        });

    });
</script>

@endpush

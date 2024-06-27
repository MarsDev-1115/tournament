@extends('frontend.layout.app')

@section('content')

<main class="main">

    <div class="container login-container">

        <div class="row">
            <div class="col-md-7 text-center login-left">
                <div class="heading mb-5">
                    <h2 class="title">Log in to your account</h2>
                </div>

                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="separator text-dark mb-1"> Continue With </div>
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
                        <form action="#" id="login-form" class="login-form">
                            <div class="form-group row align-items-center">
                                <label class="control-label col-sm-1 text-right" for="email"><i class="fas fa-envelope"></i></label>
                                <div class="col-sm-11 text-left">
                                  <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                                </div>
                              </div>
                              <div class="form-group row align-items-center">
                                <label class="control-label col-sm-1 text-right" for="passwrord"><i class="fas fa-lock"></i></label>
                                <div class="col-sm-11 text-left">
                                  <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                </div>
                              </div>

                            <div class="form-footer mt-0">
                                <a href="#" class="forget-password text-dark form-footer-right">I forgot my password</a>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md custom-primary-button">
                                Log in
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
                    <h2 class="title">Don't you have an account?</h2>
                    <h2 class="title mt-3">Join us today!</h2>
                </div>


                <a class="btn btn-primary btn-md mr-0 custom-light-button" href="{{ route('register') }}">
                    Create an account
                </a>

            </div>
        </div>

    </div>
</main>

@endsection

@push('custom-scripts')

<script type="text/javascript">

    $("#login-form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: "{{ __('message.validation.required') }}",
                email: "{{ __('message.validation.invalid_email') }}",
            },
            password: {
                required: "{{ __('message.validation.password_required') }}",
            },
        },
        submitHandler: function(form) {
            $.ajax({
                url: "{{ route('login.submit') }}",
                type: "POST",
                data: $(form).serialize(),
                headers: {
                    'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')
                },
                success: function (response) {
                    if(response.status == 'error') {
                        Swal.fire({
                            title: 'Error',
                            html: '<h2 style="font-size: 20px;">' + response.message + '</h2>',
                            icon: 'error',
                            customClass: 'swal-custom',
                            showConfirmButton: true
                        });
                    }
                    else if(response.status == 'success'){
                        Swal.fire({
                            customClass: 'swal-wide',
                            html: '<div class="justify-content-center" style=""><img class="mx-auto" src="{{ asset("assets/img/confirm.png") }}" width="138" height="138" /><h2 class="py-5">Good to see you!</h2></div>',
                            timer: 3000,
                            showConfirmButton: false
                        }).then(() => {
                            window.location.assign("{{ route('home') }}");
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
        }
    });

</script>

@endpush

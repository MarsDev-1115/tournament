@extends('frontend.layout.app')

@section('content')

<main class="main">
    <div class="page-header page-header-bg text-left"
        style="background: linear-gradient(to right, #2B503D , rgba(255, 255, 255, 0)), url('{{ asset('assets/img/page-header-bg.jpg') }}');">
        <div class="container-fluid" style="padding-left: 200px">
            <h1>CONTACT US</h1>
        </div>
    </div>

    <div class="container contact-us-container pt-5">
        <div class="contact-info pt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="ls-n-25 m-b-1 text-primary">
                        How can we help you today?
                    </h1>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mt-6 mb-2 text-heading">Contact Form</h2>

                <form class="mb-0" method="post" action="{{ route('contact-submit') }}" id="contact-form">
                	{{ csrf_field() }}
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="mb-1" for="name">Name
                                    <span class="required">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    required />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="mb-1" for="email">Email Address
                                    <span class="required">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    required />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="mb-1" for=""message"">Tell us how can we help you
                            <span class="required">*</span></label>
                        <textarea cols="30" rows="1" id="contact-message" class="form-control"
                            name="message" required></textarea>
                    </div>

                    <div class="form-footer mb-0 justify-content-end">
                        <button type="submit" class="btn btn-primary font-weight-normal custom-primary-button">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <div class="row social-icons py-5">

                    <a href="http://www.facebook.com/" target="_blank" title="Facebook" class="p-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="http://www.instagram.com/" target="_blank" title="Instagram" class="p-3"><i class="fab fa-instagram"></i></a>
                    <a href="http://www.google.com/" target="_blank" title="Google Plus" class="p-3"><i class="fab fa-whatsapp"></i></a>
                    <a href="http://www.twitter.com/" target="_blank" title="Twitter" class="p-3"><i class="fab fa-twitter"></i></a>
                    <a href="http://www.twitter.com/" target="_blank" title="Twitter" class="p-3"><i class="far fa-envelope"></i></a>

                </div>
<!--                 <h2 class="mt-1 mb-1 contact-company-name">PT Sports GmbH</h2> -->
                <p class="contact-address-info">
                    Puro Portals UG<br>Sven Schlitter<br>Blötter Weg 9<br>45478 Mülheim<br>
                </p>
            </div>
        </div>
    </div>

    <div class="mb-8"></div>
</main>

@endsection

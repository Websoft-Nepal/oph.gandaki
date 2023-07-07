@extends('layouts.app')

@section('content')
    @include('includes.header')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Contact Us</h3>
                                    <div id="form-message-warning" class="mb-4"></div>

                                    @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif

                                    <form method="POST" id="contactForm" name="contactForm">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 my-2">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Name">
                                                </div>
                                                
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 my-2">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Email">
                                                </div>
                                                
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 my-2">
                                                <div class="form-group">
                                                    <input type="number" min="0" class="form-control" name="phone"
                                                        id="number" placeholder="Contact number">
                                                </div>
                                                
                                                
                                                @error('phone')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 my-2">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                        placeholder="Subject">
                                                </div>
                                                
                                                @error('subject')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 my-2">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
                                                </div>
                                                
                                                @error('message')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 my-2">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
                                    <h3 class="mb-4 mt-md-4 text-white">Contact us</h3>

                                    <div class="d-flex align-items-center gap-3 my-2">
                                        <div class="fs-3">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div>
                                            <span>Address: </span><span>Pokhara</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 my-2">
                                        <div class="fs-3">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 my-2">
                                        <div class="fs-3">
                                            <i class="fa-regular fa-paper-plane"></i>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 my-2">
                                        <div class="fs-3">
                                            <i class="fa-solid fa-earth-americas"></i>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Website</span> <a href="https://oph.gandaki.gov.np/">oph.gandaki.gov.np</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')
@endsection

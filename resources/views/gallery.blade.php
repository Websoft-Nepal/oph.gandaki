@extends('layouts.app')

@section('content')
    @include('includes.header')
    <!-- Animal Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0" style="color: #9e0b0f">
                        Photo Gallery
                    </h1>
                </div>

            </div>
            <div class="row g-4">
                @foreach ($galleries as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-4">
                            <div class="col-12">
                                <a class="animal-item" href="#" data-lightbox="
                            animal">
                                    <div class="position-relative photo">
                                        <img class="img-fluid" src="{{ asset('site/uploads/gallery/' . $item->photo) }}"
                                            alt="" />
                                        <div class="animal-text p-4">
                                            <h5 class="text-white mb-0">{{ $item->title }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-black">
                {{ $galleries->links() }}
            </div>
        </div>
    </div>
    <!-- Animal End -->


    @include('includes.footer')
@endsection

@extends('layouts.app')

@section('content')
    @include('includes.header')

    <div class="row">
        <div class="col-12 col-md-3" style="padding-left: 10px">
            <!--Team Start-->
            @include('includes.sidebar')
        </div>


        <div class="col-12 col-md-9 p-0 shadow-sm">
            <div class="container d-flex justify-content-center">
                <div class="col-md-12 text-justify center">
                    <br>
                    <h1 class="text-primary display-5 mb-4 text-center" style="color:#9e0b0f;">
                        मन्त्रालयको सांगठनिक संरचना</h1>
        
                    <div class="row" style=" width:1000px;">
                        <img src="{{ asset('site/uploads/organization.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
        

    </div>

    @include('includes.footer')
@endsection

@extends('layouts.app')

@section('content')
    @include('includes.header')

    <div class="row">
        <div class="col-12 col-md-3" style="padding-left: 10px">
            <!--Team Start-->
            @include('includes.sidebar')
        </div>


        <div class="col-12 col-md-9 p-0 shadow-sm">

            <div class="container-fluid text-light wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <h1 class="display-5 mb-0" style="color: #9e0b0f">Staff</h1>
                    <hr style="color: rgb(190, 189, 189);">
                    <table class="table">
                        <tbody>
                            @foreach ($staffs as $staff)
                                <tr>
                                    <th>
                                        <div class="row g-4 justify-content-center">
                                            <div class="col-md-3">
                                                <img src="{{ asset('site/uploads/staff/' . $staff->photo) }}"
                                                    class="img-thumbnail" style="overflow: hidden;" width="120">
                                            </div>
                                            <div class="col-md-9" style="text-align: left;">
                                                <h5>Name : {{ $staff->name }}</h5>
                                                <h5>Post : {{ $staff->post }}</h5>
                                                <h5>Section : {{ $staff->section }}</h5>
                                                <h5>Mobile : {{ $staff->mobile }}</h5>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    @include('includes.footer')
@endsection

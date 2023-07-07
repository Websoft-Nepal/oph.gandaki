@extends('layouts.app')

@section('content')
    @include('includes.header')

    
    <div class=" col-md-12" style="text-align: center;">
        <img class="img-thumbnail " src="{{ asset('site/uploads/leader/'. $leader->photo) }}" width="150">
    </div>

    <div class="container d-flex justify-content-center">

        <div class="col-md-12 text-light wow fadeIn" data-wow-delay="0.5s">
            <br>
            <h1 class="text-primary display-5 mb-4 text-center" style="color:#9e0b0f;">संक्षिप्त परिचय
            </h1>

            <table class="table" style="border: 2px solid #7a7272" ;>
                <tbody>
                    <tr>
                        <td>नाम</td>
                        <td>: {{ $leader->name }}</td>
                    </tr>
                    <tr>
                        <td>पद</td>
                        <td>: {{ $leader->position }}</td>
                    </tr>
                    <tr>
                        <td>जन्म मिति</td>
                        <td>: {{ $leader->birthday }}</td>
                    </tr>
                    <tr>
                        <td>जन्मस्थान</td>
                        <td>: {{ $leader->birth_place }}</td>
                    </tr>
                    <tr>
                        <td>बुबा</td>
                        <td>: {{ $leader->father_name }}</td>
                    </tr>
                    <tr>
                        <td>आमा</td>
                        <td>: {{ $leader->mother_name }}</td>
                    </tr>

                    <tr>
                        <td>सम्पर्क नं.</td>
                        <td>: {{ $leader->contact_no }}</td>
                    </tr>
                    <tr>
                        <td>इमेल ठेगाना</td>
                        <td>: {{ $leader->email }}</td>
                    </tr>
                    <tr>
                        <td>शैक्षिक योग्यता</td>
                        <td>: {{ $leader->qualification }}</td>
                    </tr>
                    <tr>
                        <td>कार्य अनुभव</td>
                        <td>: {{ $leader->work_exp }}</td>
                    </tr>
                    <tr>
                        <td>राजकीय मामिलामा सहभागिता</td>
                        <td>: {{ $leader->political_affairs }}</td>
                    </tr>
                    <tr>
                        <td>भाषा</td>
                        <td>: {{ $leader->lang }}</td>
                    </tr>
                    <tr>
                        <td>विदेश भ्रमण</td>
                        <td>: {{ $leader->travel_abroad }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @include('includes.footer')
@endsection

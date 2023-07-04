@extends('admin.layouts.app')

@section('content')
        <div id="main-wrapper">
            @include('admin/includes/header')
            @include('admin/includes/sidebar')

            <div class="page-wrapper">
                <div class="container-fluid">

                    <button class="btn btn-info" id="backButton">Back</button>
                    <script>
                        // JavaScript
                        const backButton = document.getElementById('backButton');

                        backButton.addEventListener('click', goBack);

                        function goBack() {
                        history.back();
                        }
                    </script>
                    

                    <!-- Success Notification --->
                    @if (session()->has('status'))
                        <div id="messageDiv" class="alert alert-success fade">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <script>
                            const messageDiv = document.getElementById("messageDiv");
                            messageDiv.classList.add("show");
                        </script>
                    @endif


                        <!-- Page Header Start -->
                        <div class=" col-md-12" style="text-align: center;">
                            {{-- <img class="img-thumbnail" src="./img/oph_team.jpg" width="150"> --}}
                            <img class="img-thumbnail" style="width: 90px;" src="{{ asset('site/uploads/leader/'. $leader->photo) }}" alt="">
                        </div>

                        </div>
                        <!-- Page Header End -->
                        <!--table-->
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
                </div>


                {{-- @include('admin/includes/footer') --}}

            </div>
        </div>

    </div>
@endsection

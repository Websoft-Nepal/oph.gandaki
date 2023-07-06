@extends('admin.layouts.app')

@section('content')
        <div id="main-wrapper">
            @include('admin/includes/header')
            @include('admin/includes/sidebar')

            <div class="page-wrapper">
                <div class="container-fluid">
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

                    <button class="btn btn-info mb-5" id="backButton">Back</button>
                    <script>
                        // JavaScript
                        const backButton = document.getElementById('backButton');

                        backButton.addEventListener('click', goBack);

                        function goBack() {
                        history.back();
                        }
                    </script>

                    <h2>{{ __('Admin Profile Edit') }}</h2>

                    {{-- <a class="btn btn-info" href="{{ route('profile.create') }}">{{ __('Edit Staff') }}</a> --}}
                    

                    
                    <div class="mx-5">
                        <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                @error('name')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                @error('email')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                @error('password')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="password">New Password:</label>
                                <input type="password" class="form-control" id="passowrd" name="password" placeholder="**********">
                            </div>
                            <div class="form-group">
                                @error('photo')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="photo">Photo:</label><br />
                                <img style="height: 90px; width: 90px;" src="{{ asset('site/uploads/admin/'. Auth::user()->photo) }}" alt="">
                                <input type="file" class="form-control-file" name="photo" id="photo" accept=".jpg,.jpeg,.png">
                            </div>
                            <button type="submit" class="btn btn-info">Update</button>
                        </form>
                    </div>

                </div>


                @include('admin/includes/footer')

            </div>
        </div>

    </div>
@endsection

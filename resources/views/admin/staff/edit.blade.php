@extends('admin.layouts.app')

@section('content')
    <div class="fix-header fix-sidebar card-no-border">
        <div id="main-wrapper">
            @include('admin/includes/header')
            @include('admin/includes/sidebar')

            <div class="page-wrapper">
                <div class="container-fluid">

                    <button class="btn btn-info mb-5" id="backButton">Back</button>
                    <script>
                        // JavaScript
                        const backButton = document.getElementById('backButton');

                        backButton.addEventListener('click', goBack);

                        function goBack() {
                        history.back();
                        }
                    </script>

                    <div class="mx-5">
                        <h2>{{ $staff->name }} - Edit Staff</h2>
                        <form method="post" action="{{ route('staff.update', $staff->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                @error('name')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $staff->name }}" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                @error('post')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="post">Post:</label>
                                <input type="text" class="form-control" id="post" name="post" value="{{ $staff->post }}" placeholder="Enter post">
                            </div>
                            <div class="form-group">
                                @error('section')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="section">Section:</label>
                                <input type="text" class="form-control" id="section" value="{{ $staff->section }}" name="section" placeholder="Enter section">
                            </div>
                            <div class="form-group">
                                @error('photo')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="photo">Photo:</label><br />
                                <img style="height: 90px; width: 90px;" src="{{ asset('site/uploads/staff/'. $staff->photo) }}" alt="">
                                <input type="file" class="form-control-file" name="photo" id="photo" accept=".jpg,.jpeg,.png">
                            </div>
                            <div class="form-group">
                                @error('mobile')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="mobile">Mobile:</label>
                                <input type="number" min="0" class="form-control" name="mobile" value="{{ $staff->mobile }}" id="mobile" placeholder="Enter mobile number">
                            </div>
                            <button type="submit" class="btn btn-info">Add</button>
                        </form>
                    </div>
                

                </div>


                @include('admin/includes/footer')

            </div>
        </div>

    </div>
@endsection

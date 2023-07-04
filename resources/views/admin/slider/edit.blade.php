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

                    <h3 class="text-weight-bold">{{ __('Create New Slider Image') }}</h3>

                    {{-- form field to add new slider --}}
                    <form id="uploadForm" action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" minlength="5"
                                maxlength="255" value="{{ $slider->title }}" required>
                            <small class="form-text text-muted">Please enter a title between 5 and 255 characters.</small>
                        </div>
                        <img style="height: 90px; width: 90px;" src="{{ asset('site/uploads/slider/'. $slider->photo) }}" alt="">
                        <div class="form-group">
                            <label for="photo">Photo Upload:</label>
                            <input type="file" class="form-control-file" id="photo" name="photo"
                                accept=".jpg,.jpeg,.png">
                            <small class="form-text text-muted">Accepted formats: JPG, JPEG, PNG.</small>
                        </div>
                        <button type="submit" class="btn btn-info">Add</button>
                    </form>
                    

                        
                    <div class="my-2">
                        <span class="text-danger">Note:</span>
                        <span>It's change the sliding image of homepage.</span>
                    </div>


                </div>


                @include('admin/includes/footer')

            </div>
        </div>

    </div>
@endsection

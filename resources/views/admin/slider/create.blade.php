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

                    <h3 class="text-weight-bold">{{ __('Create Slider Image') }}</h3>

                    {{-- form field to add new slider --}}
                    <form id="uploadForm" action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" minlength="5"
                                maxlength="255" required>
                            <small class="form-text text-muted">Please enter a title between 5 and 255 characters.</small>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo Upload:</label>
                            <input type="file" class="form-control-file" id="photo" name="photo"
                                accept=".jpg,.jpeg,.png" required>
                            <small class="form-text text-muted">Accepted formats: JPG, JPEG, PNG.</small>
                        </div>
                        <button type="submit" class="btn btn-info">Add</button>
                    </form>

                    <!-- JavaScript -->
                    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
                    <script>
                        $(document).ready(function() {
                            // Form validation
                            $('#uploadForm').submit(function(e) {
                                var titleInput = $('#title');
                                var titleValue = titleInput.val();

                                if (titleValue.length < 5 || titleValue.length > 255) {
                                    alert('Please enter a title between 5 and 50 characters.');
                                    titleInput.val('');
                                    return false;
                                }

                                var fileInput = $('#photo');
                                var filePath = fileInput.val();
                                var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

                                if (!allowedExtensions.exec(filePath)) {
                                    alert('Invalid file type. Only JPG, JPEG, and PNG formats are allowed.');
                                    fileInput.val('');
                                    return false;
                                }
                            });
                        });
                    </script>

                        
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

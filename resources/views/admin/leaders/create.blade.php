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
                        <h2>Add New Leader</h2>
                        <form method="post" action="{{ route('leaders.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                @error('name')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="position">Position:</label>
                                {{-- <input type="text" class="form-control" id="position" name="position" value="{{ old('position') }}" placeholder="Enter position"> --}}
                                <select class="form-select" name="position" aria-label="Select option">
                                    <option selected>Select an option</option>
                                    <option value="प्रदेश प्रमुख">प्रदेश प्रमुख</option>
                                    <option value="सचिव">सचिव</option>
                                    <option value="प्रवक्ता">प्रवक्ता</option>
                                  </select>                                  
                            </div>
                            <div class="form-group">
                                @error('birthday')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="birthday">Birthday:</label>
                                <input type="date" value="{{ old('birthday') }}" class="form-control" id="birthday" name="birthday">
                            </div>
                            <div class="form-group">
                                <label for="birth_place">Place of Birth:</label>
                                <input type="text" class="form-control" id="birth_place" value="{{ old('birth_place') }}" name="birth_place" placeholder="Enter place of birth">
                            </div>
                            <div class="form-group">
                                @error('photo')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="photo">Photo:</label>
                                <input type="file" class="form-control-file" name="photo" id="photo" accept=".jpg,.jpeg,.png">
                                <small class="form-text text-muted">Accepted formats: JPG, JPEG, PNG.</small>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Father's Name:</label>
                                <input type="text" class="form-control" name="father_name" value="{{ old('father_name') }}" id="father_name" placeholder="Enter father's name">
                            </div>
                            <div class="form-group">
                                <label for="mother_name">Mother's Name:</label>
                                <input type="text" class="form-control"name="mother_name" value="{{ old('mother_name') }}" id="mother_name" placeholder="Enter mother's name">
                            </div>
                            <div class="form-group">
                                <label for="contact_no">Contact Number:</label>
                                <input type="tel" class="form-control" name="contact_no" value="{{ old('contact_no') }}" id="contact_no" placeholder="Enter  contact number">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="qualification">Qualification:</label>
                                <input type="text" class="form-control" name="qualification" value="{{ old('qualification') }}" id="qualification" placeholder="Enter qualification">
                            </div>
                            <div class="form-group">
                                <label for="work_exp">Work Experience:</label>
                                <input type="text" class="form-control" name="work_exp" id="work_exp" value="{{ old('work_exp') }}" placeholder="Enter work experience">
                            </div>
                            <div class="form-group">
                                <label for="political_affairs">Political Affairs:</label>
                                <textarea class="form-control" id="political_affairs" name="political_affairs" rows="3" placeholder="Enter political affairs">{{ old('political_affairs') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="lang">Languages:</label>
                                <input type="text" class="form-control" name="lang" id="lang" value="{{ old('lang') }}" placeholder="Enter languages you speak">
                            </div>
                            <div class="form-group">
                                <label for="lang">Travel Abroad:</label>
                                <input type="text" class="form-control" name="travel_abroad" id="travel_abroad" value="{{ old('travel_abroad') }}" placeholder="Enter either you travel abroad before">
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                

                </div>


                @include('admin/includes/footer')

            </div>
        </div>

    </div>
@endsection

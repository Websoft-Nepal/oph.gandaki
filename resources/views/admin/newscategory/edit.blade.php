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
                        <h2>{{ __('Add Category') }}</h2>
                        <form method="post" action="{{ route('newscategory.update', $newscategory->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                @error('category')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="category">Category:</label>
                                <input type="text" class="form-control" id="category" name="category" value="{{ $newscategory->category }}" placeholder="Enter category">
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

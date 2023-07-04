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

                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles">
                        <div class="col-md-5 align-self-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">{{ __('Dashboard') }}</li>
                                <li class="breadcrumb-item active">{{ __('Slider') }}</li>
                            </ol>
                        </div>

                    </div>
                    <!-- End Bread crumb and right sidebar toggle -->

                    <a class="btn btn-info" href="{{ route('slider.create') }}">{{ __('Add New Slider Image') }}</a>
                    


                    {{-- show data --}}
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table vm no-th-brd pro-of-month">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>photo</th>
                                    <th>Title</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>
                                            {{ $slider->id }}
                                        </td>
                                        <td>
                                            <img style="height: 90px; width: 90px;" src="{{ asset('site/uploads/slider/'. $slider->photo) }}" alt="">
                                        </td>
                                        <td>
                                            {{ $slider->title }}
                                        </td>
                                        <td>
                                            {{ \Illuminate\Support\Carbon::parse($slider->created_at)->diffForHumans() }}
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-info mx-1" href="{{ route('slider.edit', $slider->id) }}">Edit</a>
                                                <form action="{{ route('slider.destroy', $slider->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure you want to delete this slider?')" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $sliders->links() }}
                    </div>


                </div>


                @include('admin/includes/footer')

            </div>
        </div>

    </div>
@endsection

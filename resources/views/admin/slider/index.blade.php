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

                    <h2>{{ __('SLIDER') }}</h2>

                    <a class="btn btn-info" href="{{ route('slider.create') }}">{{ __('Add New Slider Image') }}</a>
                    
                    <div class="my-2">
                        <span class="text-danger">Note:</span>
                        <span class="text-black">{{ __('First 3 newly added sliders will display in home page.') }}</span>
                    </div>

                    {{-- show data --}}
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table vm no-th-brd pro-of-month">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>photo</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    @php
                                        $sn = ($sliders->currentPage() - 1) * $sliders->perPage() + $loop->iteration;
                                    @endphp
                                    <tr>
                                        <td>
                                            {{ $sn }}
                                        </td>
                                        <td>
                                            <img style="height: 90px; width: 90px;" src="{{ asset('site/uploads/slider/'. $slider->photo) }}" alt="">
                                        </td>
                                        <td>
                                            {{ $slider->title }}
                                        </td>
                                        <td>
                                            <div>
                                                @if ($slider->status == '0')
                                                    <form action="{{ route('slider_status', $slider->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <input type="hidden" name="slider_status" value="1">
                                                        <button class="btn btn-info">Active</button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('slider_status', $slider->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <input type="hidden" name="slider_status" value="0">
                                                        <button class="btn btn-secondary">Inactive</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            {{ $slider->created_at->format('Y-m-d') }}
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

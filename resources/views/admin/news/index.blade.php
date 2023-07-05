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


                    <h2>{{ __('News n Event') }}</h2>

                    <a class="btn btn-info" href="{{ route('news.create') }}">{{ __('Add News & Events') }}</a>
                    


                    {{-- show data --}}
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table vm no-th-brd pro-of-month">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Link</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $key => $new)
                                    @php
                                        $sn = ($news->currentPage() - 1) * $news->perPage() + $loop->iteration;
                                    @endphp
                                    <tr>
                                        <td>
                                            {{ $sn }}
                                        </td>
                                        <td>
                                            {{ $new->title }}
                                        </td>
                                        <td>
                                            {{ $new->category->category }}
                                        </td>
                                        <td>
                                            {{ $new->link }}
                                        </td>
                                        <td>
                                            {{ $new->created_at->format('Y-m-d') }}
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a target="_blank" class="btn btn-info mx-1" href="{{ asset('site/uploads/news/'. $new->link) }}">View</a>
                                                <form action="{{ route('news.destroy', $new->id) }}" method="post">
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
                        {{ $news->links() }}
                    </div>

                </div>


                @include('admin/includes/footer')

            </div>
        </div>

    </div>
@endsection

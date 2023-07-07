@extends('admin.layouts.app')

@section('content')
    
        @include('admin/includes/header')
        @include('admin/includes/sidebar')

        <div class="page-wrapper">
            <div class="container-fluid">

                <h2 class="fw-bold">News Section</h2>
                <div class="table-responsive m-t-20 no-wrap">
                    <table class="table vm no-th-brd pro-of-month">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $key => $new)
                                <tr>
                                    <td>
                                        {{ $key+1 }}
                                    </td>
                                    <td>
                                        {{ $new->title }}
                                    </td>
                                    <td>
                                        {{ $new->category->category }}
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
                </div>

                  <div class="bg-white py-2 my-1">
                    <h1 class="text-center fw-bold">Leaders</h1>
                    <div class="row">
                      @foreach ($leaders as $leader)
                      <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                        <img style="height: 90px; width: 90px;" src="{{ asset('site/uploads/leader/'. $leader->photo) }}" alt="">
                        <h3 class="my-1">{{ $leader->name }}</h3>
                        <p>{{ $leader->position }}</p>
                      </div>
                      @endforeach
                    </div>
                  </div>                  

            @include('admin/includes/footer')

        </div>
    </div>
    
</div>
@endsection
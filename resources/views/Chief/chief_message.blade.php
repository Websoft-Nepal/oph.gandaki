@extends('layouts.app')

@section('content')
    @include('includes.header')

    <div class="row">
        <div class="col-12 col-md-3" style="padding-left: 10px">
            <!--Team Start-->
            @include('includes.sidebar')
        </div>
        <!--Team End-->
        <div class="col-12 col-md-9 p-0 shadow-sm">
            <!-- Banner Start -->
            
            {{-- show data --}}
            @if ($chief_msgs->isEmpty())
                <div class="text-black text-center my-5">
                    No data
                </div>
            @else
                <div class="table-responsive m-t-20 no-wrap">
                    <table class="table vm no-th-brd pro-of-month">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Title</th>
                                <th>Uploaded</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chief_msgs as $key => $item)
                                @php
                                    $sn = ($chief_msgs->currentPage() - 1) * $chief_msgs->perPage() + $loop->iteration;
                                @endphp
                                <tr>
                                    <td>
                                        {{ $sn }}
                                    </td>
                                    <td>
                                        {{ $item->title }}
                                    </td>
                                    <td>
                                        {{ $item->created_at->format('Y-m-d') }}
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a target="_blank" class="text-primary" href="{{ asset('site/uploads/chiefmsg/'. $item->link) }}">View</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $chief_msgs->links() }}
                </div>
            @endif

        </div>
    </div>

    @include('includes.footer')
@endsection

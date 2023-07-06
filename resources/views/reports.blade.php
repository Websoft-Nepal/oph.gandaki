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
                        @foreach ($reports as $key => $report)
                            @php
                                $sn = ($reports->currentPage() - 1) * $reports->perPage() + $loop->iteration;
                            @endphp
                            <tr>
                                <td>
                                    {{ $sn }}
                                </td>
                                <td>
                                    {{ $report->title }}
                                </td>
                                <td>
                                    {{ $report->created_at->format('Y-m-d') }}
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a target="_blank" class="text-primary" href="{{ asset('site/uploads/report/'. $report->link) }}">View</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $reports->links() }}
            </div>

        </div>
    </div>

    @include('includes.footer')
@endsection

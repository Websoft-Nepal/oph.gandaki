@php
    $leaders = App\Models\Leader::all();
@endphp

<section>
    <div class="container-xxl p-0">
        <div class="container">

            @foreach ($leaders as $leader)
                <div class="team-item bg-light mb-4">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center text-primary">माननीय प्रदेश प्रमुख</h3>
                    </div>
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid"
                            src="{{ asset('site/uploads/leader/'. $leader->photo) }}">
                    </div>
                    <div class="text-center p-3 pb-0">
                        <h3 class="mb-0" style="color:#9e0b0f">{{ $leader->name }}</h3>
                        <h6>{{ $leader->position }}</h6>
                        <a href="{{ route('p_show_leader', $leader->id) }}" class="btn btn-primary py-2 px-3 mb-2">Read More</a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>
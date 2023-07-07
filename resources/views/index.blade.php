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
            <section class="hero-section hero-section-full-height">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 col-12 px-3">
                            <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <Style>
                                        .carousel-caption p {
                                            color: white;
                                            font-size: 2.5rem;
                                        }
                                    </style>
                                    @foreach ($sliders as $slider)
                                        <div class="carousel-item active">

                                            <img src="{{ $slider->photo }}"
                                                style="height: 370px; width: 100%;" class="carousel-image img-fluid">

                                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                                <p>{{ $slider->title }} </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Header End -->

            <!-- About Start -->
            <div class="container-xxl">
                <div class="container p-0">
                    <h1 class="text-primary display-5 mb-4 text-center">हाम्रो बारेमा</h1>
                    <div class="row g-5">
                        <div class="col-6 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="mb-4 text-dark" style="text-align: justify;">
                                नेपालको संविधानले नेपाल एक संघीय लोकतान्त्रीक गणतन्त्रात्मक राज्य हो भनि परिभाषित गरेको
                                छ ।
                                संविधानको धारा ५६ मा संघीय लोकतान्त्रीक गणतन्त्र नेपालको मूल संरचना, संघ, प्रदेश र
                                स्थानीय
                                तह गरी
                                तीन तहको हुनेछ भन्ने व्यवस्था छ । यसै बमोजिम नेपालको राज्य शक्तिको प्रयोग संघ, प्रदेश र
                                स्थानीय तहले
                                गर्ने व्यवस्था रहेको छ । नेपालको हालको संघीय राज्यको संरचनामा एक संघ, सात प्रदेश र ७५३
                                वटा
                                स्थानीय
                                तह रहेका छन । संघीयता कार्यावन्यन गर्ने चरणमा संवत २०७४ सालमा प्रदेश तहको निर्वाचन
                                सम्पन्न
                                भएको छ ।
                                संविधानको धारा १६३ मा प्रत्येक प्रदेशमा नेपाल सरकारको प्रतिनिधिको रुपमा राष्ट्रपतिबाट
                                नियुक्ति हुने
                                गरी प्रदेश प्रमुख रहने व्यवस्था रहेको छ । तदनुरुप नेपालको सातै प्रदेशमा एक एक प्रदेश
                                प्रमुख
                                रहने गरी
                                संवत २०७४ साल माघ ५ गते प्रदेश प्रमुखको नियुक्ति भएको छ । प्रदेश प्रमुखको नियुक्ति संगै
                                यस
                                प्रदेशमा
                                प्रदेश प्रमुखको कार्यालय स्थापना भएको छ । कास्की जिल्लाको सदरमुकाम पोखराको पार्दी स्थित
                                सहिदचोकमा
                                साविक अध्यागमन कार्यालयको भवनमा मिति २०७४ माघ ७ गते यो कार्यालय स्थापना भएको हो । यस
                                कार्यालयमा
                                राजपत्रांकित प्रथम श्रेणीको अधिकृतले प्रशासनिक कामको नेतृत्व गर्ने गरी कूल १९ जना
                                कर्मचारीहरुको
                                दरबन्दी रहेको छ । संविधान बमोजिम प्रदेश प्रमुखबाट मुख्यमन्त्री, मन्त्री एवं सभामुखको
                                नियुक्ति एवं
                                शपथ गराउने, प्रदेश सभाबाट प्रमाणिकरणको लागि पेश हुन आएका विधेयकहरु प्रमाणिकरण गर्ने
                                कार्य यस
                                कार्यालयको मुख्य काम हो । यि कार्यहरु सम्पादन प्रदेश मन्त्रीपरिषद्को सिफारिस र सम्मतीबाट
                                हुने गर्दछ
                                ।
                            </p>
                        </div>
                        <div class="col-6 wow fadeInUp p-0" data-wow-delay="0.5s">
                            <div class="img-border">
                                <img class="img-fluid" src="https://oph.gandaki.gov.np/site/img/office.jpg"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            <!-- News Start -->
            <ul class="nav nav-tabs my-5" id="myTab" role="tablist">
                @foreach($news_cats as $index => $category)
                  <li class="nav-item" role="presentation">
                    <button class="nav-link{{ $index === 0 ? ' active' : '' }}" id="tab{{ $category->id }}-tab" data-bs-toggle="tab" data-bs-target="#tab{{ $index + 1 }}" type="button" role="tab" aria-controls="tab{{ $index + 1 }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}">{{ $category->category }}</button>
                  </li>
                @endforeach
              </ul>
              
              <div class="tab-content" id="myTabContent">
                @foreach($news_cats as $index => $category)
                    <div class="tab-pane fade{{ $index === 0 ? ' show active' : '' }}" id="tab{{ $category->id }}" role="tabpanel" aria-labelledby="tab{{ $index + 1 }}-tab">
                        <!-- Tab {{ $index + 1 }} content goes here -->
                        @php
                            $id = $category->id;
                            $news_by_cat = App\Models\News::whereHas('category', function ($query) use ($id) {
                                $query->where('id', $id);
                            })->latest()->paginate(3);
                        @endphp
                        <div class="table-responsive m-t-20 no-wrap">
                            <table class="table vm no-th-brd pro-of-month">
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Uploaded</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news_by_cat as $key => $item)
                                        @php
                                            $sn = ($news_by_cat->currentPage() - 1) * $news_by_cat->perPage() + $loop->iteration;
                                        @endphp
                                        <tr>
                                            <td>
                                                {{ $sn }}
                                            </td>
                                            <td>
                                                {{ $item->title }}
                                            </td>
                                            <td>
                                                {{ $item->category->category }}
                                            </td>
                                            <td>
                                                {{ $item->created_at->format('Y-m-d') }}
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a target="_blank" class="text-primary" href="{{ asset('site/uploads/news/'. $item->link) }}">View</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $news_by_cat->links() }}
                        </div>
                    </div>
                @endforeach
              </div>              
              
            <!-- News End -->
        </div>
    </div>

    @include('includes.footer')
@endsection

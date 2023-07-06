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
            <div class="container-xxl py-4 news-section p-0">
                <div class="container">
                    <h1 class="text-primary display-5 mb-4 text-center">सुचना तथा अन्य समाचारहरु</h1>
                    <div class="news-section py-4 px-4" style="border: 1px solid rgb(190, 189, 189); border-radius: 10px;">
                        <button id="showDiv1"> सुचना तथा समाचार</button>
                        <button id="showDiv2">एेन तथा नियमहरू</button>
                        <button id="showDiv3">प्रेस विज्ञप्ती</button>
                        <hr style="color: rgb(190, 189, 189);">
                        <div id="div1">
                            <table class="table" style="border: 2px solid #7a7272" ;>
                                <style>
                                    .table a {
                                        color: #337ab7;
                                    }

                                    .table a:hover {
                                        color: #930b0f;
                                    }
                                </style>
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Publish Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>प्रेस विज्ञप्ती</td>
                                        <td>2022-12-29</td>
                                        <td><a href="https://oph.gandaki.gov.np/information-detail/54">View Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>कार्यालयकाे वेभसाइट संचालन सम्बन्धमा</td>
                                        <td>2018-07-15</td>
                                        <td><a href="https://oph.gandaki.gov.np/information-detail/16">View Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="https://oph.gandaki.gov.np/news/10" class="pull-right btn-lg btn-primary text-light">
                                अन्य सुचना तथा समाचार
                            </a>
                        </div>
                        <div id="div2" class="myDiv">
                            <table class="table" style="border: 2px solid #7a7272" ;>
                                <style>
                                    .table a {
                                        color: #337ab7;
                                    }

                                    .table a:hover {
                                        color: #930b0f;
                                    }

                                    .myDiv {
                                        display: none;
                                    }
                                </style>
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Publish Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Act and Regulations</td>
                                        <td>2023-06-20</td>
                                        <td><a href="https://oph.gandaki.gov.np/information-detail/62">View Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>List of Acts</td>
                                        <td>2021-10-24</td>
                                        <td><a href="https://oph.gandaki.gov.np/information-detail/52">View Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="https://oph.gandaki.gov.np/news/11" class="pull-right btn-lg btn-primary text-light">
                                अन्य एेन तथा नियमहरू
                            </a>
                        </div>
                        <div id="div3" class="myDiv">
                            <table class="table" style="border: 2px solid #7a7272" ;>
                                <style>
                                    .table a {
                                        color: #337ab7;
                                    }

                                    .table a:hover {
                                        color: #930b0f;
                                    }

                                    .myDiv {
                                        display: none;
                                    }
                                </style>
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Publish Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Press Release</td>
                                        <td>2023-06-13</td>
                                        <td><a href="https://oph.gandaki.gov.np/information-detail/61">View Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>प्रेस विज्ञप्ति</td>
                                        <td>2023-05-23</td>
                                        <td><a href="https://oph.gandaki.gov.np/information-detail/59">View Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>प्रेस विज्ञप्ती</td>
                                        <td>2023-05-23</td>
                                        <td><a href="https://oph.gandaki.gov.np/information-detail/58">View Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>प्रेस विज्ञप्ती</td>
                                        <td>2023-05-15</td>
                                        <td><a href="https://oph.gandaki.gov.np/information-detail/57">View Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>प्रेस विज्ञप्ती</td>
                                        <td>2023-05-15</td>
                                        <td><a href="https://oph.gandaki.gov.np/information-detail/56">View Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>प्रेस विज्ञप्ती</td>
                                        <td>2022-12-29</td>
                                        <td><a href="https://oph.gandaki.gov.np/information-detail/53">View Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="https://oph.gandaki.gov.np/news/14" class="pull-right btn-lg btn-primary text-light">
                                अन्य प्रेस विज्ञप्ती
                                <script>
                                    $(document).ready(function() {
                                        $("#showDiv1").click(function() {
                                            $(".myDiv").hide(); // Hide all divs
                                            $("#div1").show(); // Show div1
                                        });

                                        $("#showDiv2").click(function() {
                                            $(".myDiv").hide();
                                            $("#div1").hide(); // Hide all divs
                                            $("#div2").show(); // Show div2
                                        });

                                        $("#showDiv3").click(function() {
                                            $(".myDiv").hide(); // Hide all divs
                                            $("#div3").show(); // Show div3
                                        });
                                    });
                                </script>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- News End -->
        </div>
    </div>

    @include('includes.footer')
@endsection

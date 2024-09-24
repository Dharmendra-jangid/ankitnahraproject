@extends('layout.masterlayout')
@section('content')
<h1 class="text-center bgcolors " >About Us</h1>
    <section class="welcome_area">
        <div class="container">
            @if ($about)

                <div class="row welcome_inner">
                    <div class="col-lg-12">


                    </div>

                    <div class="col-lg-4">
                        <div class="welcome_img">
                            <img class="img-fluid" src="{{ asset('about/' . $about->image) }}" alt="">
                        </div>
                        <!--  <div class="welcome_img">
                                <img class="img-fluid" src="img/doctor.jpg" alt="">
                            </div> -->
                    </div>

                    <div class="col-lg-8">
                        <div class="welcome_text">
                            <h4>{{ $about->name }}</h4>
                            <h5>{{ $about->title }}</h5>

                            <p>@php echo ($about->description) @endphp</p>

                        </div>

                    </div>

                    <div class="col-lg-12">
                        <p>@php echo ($about->shortdescription) @endphp</p>
                    </div>
                    <div class="col-lg-12">
                    <h4>Qualification</h4>
                    <li>@php echo ($about->qualification) @endphp</li>
                    </div>







                <h4>Work Experience:</h4>
                <li>@php echo ($about->work_experience) @endphp</li>

                <!-- <h4>Awards:</h4>
    <ul class="disc">
    <li>Poster Presentation on “ABANDONMENT OF TREATMENT IN TEENAGERS & YOUNG ADULTS WITH CANCER: A MULTI INSTITUTIONAL SURVEY” in 8th Annual Conference on Teenage & Young Adult Cancer (TYACON) || Jaipur, India || 20th to 22nd September 2019.</li>
    <li>Oral Paper Presentation and Travel-Grant for ESMO-ASIA Singapore 2020 by ISMPO on ‘’ABANDONMENT OF TREATMENT IN TEENAGERS & YOUNG ADULTS WITH CANCER: A MULTI INSTITUTIONAL SURVEY’’ in ISO-ISMPO (Indian Society of Oncology and Indian Society of Medical & Pediatric Oncology) 2019 Conference || Indore || 1st to 3rd November 2019 </li>
    <li>Lung Cancer Quiz organized by ADVANCES IN THE TREATMENT OF LUNG CANCER (ATLC) on 27th May 2020</li>
    <li>Poster in Global Capacity-Building Showcase at 61st American Society of Hematology Annual Meeting || “CAPACITY BUILDING IN STEM CELL TRANSPLANTATION FOR CHILDREN AND YOUNG ADULTS WITH TRANSPLANT-TREATABLE DISEASES IN RURAL MADHYA PRADESH, INDIA: SOCIAL ENTREPRENEURSHIP MEETS ACADEMIA” || Orlando, Florida, USA || 7th to 10th December 2019</li>
    </ul>

    <h4>Paper(S) Publication:</h4>
    <ul class="disc">
    <li>Clinical and Therapeutic Profile of Cancer-associated Thrombosis: A Tertiary Cancer Centre Experience. Accepted for publication.</li>
    <li>Ankit BS, Punia A, Deepak YC, et al. Capacity building in stem cell transplantation for children and young adults with transplant-treatable diseases in rural Madhya Pradesh, India: social entrepreneurship meets academia. Blood Adv. 2019;3(Suppl 1):38-40</li>
    <li>Ankit BS, Agrawal R, Gadhwal A, Chahar C, Agrawal RP. The Influence of Metformin on Serum Carbohydrate Antigen 19-9 (CA 19-9) Levels in Type 2 Diabetes Mellitus Patients. J Assoc Physicians India 2018;66:38-41.</li>
    </ul> -->

        </div>
        </div>

        </div>
        @endif
        </div>
    </section>
@endsection

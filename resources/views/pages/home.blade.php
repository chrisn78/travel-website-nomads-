@extends('layouts.app')

@section('title')
        NOMADS
@endsection

@section('content')
        <!-- header -->
        <header class="text-center" id="gambar header">
            <h1>
                Explore the Beautiful Word
                <br>
                As Easy One Click
            </h1>
                <p class="mt-3">
                    You will see beautiful
                    <br>
                    moment you never see before
            </p>
                <a href="#popular" class="btn btn-get-started px-4 mt-4">
                    Get Started
                </a>
        </header>

        <main>
                    <div class="container">
                        <section class="section-start row justify-content-center" id="stats">
                            <div class="col-3 col-md-2 start-detail">
                                <h2>
                                    20K
                                </h2>
                                        <p>
                                             Members
                                        </p>

                            </div>
                            <div class="col-3 col-md-2 start-detail">
                                <h2>
                                    12
                                </h2>
                                        <p>
                                            Countries
                                        </p>

                            </div>
                            <div class="col-3 col-md-2 start-detail">
                                <h2>
                                    3K
                                </h2>
                                        <p>
                                            Hotels
                                        </p>

                            </div>
                            <div class="col-3 col-md-2 start-detail">
                                <h2>
                                    72
                                </h2>
                                        <p>
                                            Partners
                                        </p>

                            </div>
                        </section>
                     </div>
                     <section class="section-popular" id="popular">
                        <div class="containerr">
                            <div class="row">
                                <div class="col text-center section-popular-heading">
                                    <h2>
                                        Wisata popular
                                    </h2>
                                    <p>
                                        Something that you never try
                                        <br>
                                        before in this world
                                    </p>
                                </div>
                            </div>
                        </div>
                     </section>
                     <section class="section-popular-content" id="popularcontent">
                        <div class="container">
                            <div class="section-popular-travel row justify-content-center">
                                @foreach($items as $item)
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card-travel text-center d-flex flex-column"
                                            style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');"
                                            >
                                        <div class="travel-country">{{ $item->location }}</div>
                                        <div class="travel-location">{{ $item->title }}</div>
                                        <div class="travel-button mt-auto">
                                        <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-detail px-4">
                                         View Details
                                        </a>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                            </div>
                        </div>
                     </section>

                     <section class="section-networks">
                         <div class="container">
                             <div class="row">
                                 <div class="col-md-4">
                                     <h2>
                                         Our Networks
                                     </h2>
                                     <p>
                                         Companies are trusted us
                                         <br/>
                                         more than just a trip
                                     </p>
                                 </div>
                                 <div class="col-md-8 text-center">
                                     <img src="./frontend/images/Group Partner.png"
                                     alt="logo partner"
                                     class="image-partner">
                                 </div>
                             </div>
                         </div>
                     </section>

                     <section class="section-testimonial-heading" id="testimonialheading">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <h2>
                                        They Are Loving Us
                                    </h2>
                                    <p>
                                        Moments were giving them
                                        <br />
                                        the best experience
                                    </p>
                                </div>
                            </div>
                        </div>
                     </section>
                     <div class="section section-testi-content" id="testicontent">
                        <div class="container">
                            <div class="section-popular-travel row
                            justify-content-center">
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="card card-testi text-center">
                                        <div class="testi-content">
                                            <img src="./frontend/images/pic_testi_1.png" alt="user" class="mb-4 rounded-circle">
                                            <h3 class="mb-4">
                                                Angga Rizky
                                            </h3>
                                            <p class="testi">
                                                "It was glorious and i could not stop to
                                                say whooo for
                                                every single moment dankeeee."
                                            </p>
                                        </div>
                                        <hr>
                                        <p class="trip-to mt-2">
                                            Trip to ubud
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="card card-testi text-center">
                                        <div class="testi-content">
                                            <img src="./frontend/images/pic_testi_2.png" alt="user" class="mb-4 rounded-circle">
                                            <h3 class="mb-4">
                                                Jessica
                                            </h3>
                                            <p class="testi">
                                                "The trip was amazing and
                                                I saw something beautiful in
                                                that island that makes me
                                                want to learn more."
                                            </p>
                                        </div>
                                        <hr>
                                        <p class="trip-to mt-2">
                                            Trip to Nusa Penida
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="card card-testi text-center">
                                        <div class="testi-content">
                                            <img src="./frontend/images/pic_testi_3.png" alt="user" class="mb-4 rounded-circle">
                                            <h3 class="mb-4">
                                                Melinda
                                            </h3>
                                            <p class="testi">
                                                "I loved it when the waves
                                                was shaking harder - I was
                                                scared too."
                                            </p>
                                        </div>
                                        <hr>
                                        <p class="trip-to mt-2">
                                            Trip to Raja Ampat
                                        </p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                                        I Need Help
                                    </a>
                                    <a href="{{ route('register') }}" class="btn btn-get-started2 px-4 mt-4 mx-1">
                                         Get Started
                                    </a>
                                </div>
                        </div>
                     </div>
        </main>
@endsection

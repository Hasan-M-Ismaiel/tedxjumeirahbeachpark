@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12 d-flex justify-content-start ms-5">
                <div class="mx-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#f03355" class="bi bi-mic-fill" viewBox="0 0 16 16">
                        <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0z" />
                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                    </svg>
                </div>

                <div class="breadcrumbs-content">
                    <h1 class="page-title">PodCast</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>podcast</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Features Area -->
<section class="features section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 d-flex  align-items-center justify-content-center">
                <img src="{{ asset('assets_main/assets/images/podcast_tedx.png') }}" style="width:250px; height:auto" alt="Logo">
            </div>
            <div class="col-lg-8 col-md-12 col-12 d-flex justify-content-center align-items-center">
                <div>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s"><span class="text-danger">TEDx</span> <span class="display-6">JumeirahBeachPark </span><span class="text-danger"><u>Podcasts</u></span></h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">At TEDx JumeirahBeachPark, we’re passionate about sharing ideas that inspire and connect. Our podcast series brings you thought-provoking conversations from diverse voices across Dubai— a city that blends tradition with innovation. These episodes highlight topics that celebrate culture, creativity, and global dialogue, offering insights that reflect the spirit of TEDx and the unique energy of JumeirahBeachPark. Tune in for fresh perspectives and inspiring stories that spark new ideas.</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 wow fadeIn" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                <img src="{{ asset('assets_main/assets/images/podcast.jpg') }}" style="width:500px; height:auto" alt="Logo">
            </div>
            <div class="col-lg-6 col-12 wow fadeIn" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                <div class="content">
                    <h2 class="mb-3">Podcasts List</h2>
                    <div class="accordion" id="accordionExample">
                        @foreach ($podcasts as $podcast)
                        <div class="accordion-item">
                            <h2 class="accordion-header" style="background-color: white;">
                                <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }} text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $podcast->id }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $podcast->id }}">
                                    <strong>{{ $podcast->title }}</strong>
                                </button>
                            </h2>
                            <div id="collapse{{ $podcast->id }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong class="text-white">{{ $podcast->description }}</strong>
                                    <div class="d-flex align-items-center mt-3 flex-wrap">
                                        <audio controls style="flex: 1; max-width: 70%;">
                                            <source src="{{ $podcast->audio }}" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                        <button class="btn" style="background-color: #ff0024; color: white; margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#videoModal{{ $podcast->id }}">Watch Video</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Modals -->
@foreach ($podcasts as $podcast)
<div class="modal fade" id="videoModal{{ $podcast->id }}" tabindex="-1" aria-labelledby="videoModalLabel{{ $podcast->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel{{ $podcast->id }}">{{ $podcast->title }} Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="400" src="{{ $podcast->video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Video Modals -->

@endsection
@extends('app')

@section('content')
<div class="slider-area2">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 pt-20 text-center">
                        <h2 style="color: white">Les personnes en detressent </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hero End -->
<!-- Our Cases Start -->
<div class="our-cases-area section-padding30">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cases mb-40">
                    <div class="cases-img">
                        <img src="assets/img/gallery/case1.png" alt="">
                    </div>
                    <div class="cases-caption">
                        <h3><a href="#">Ensure Education For Every Poor Children</a></h3>
                        <!-- Progress Bar -->
                        <div class="single-skill mb-15">
                            <div class="bar-progress">
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="70"></span>
                                </div>
                            </div>
                        </div>
                        <!-- / progress -->
                        <div class="prices d-flex justify-content-between">
                            <p>Raised:<span> $20,000</span></p>
                            <p>Goal:<span> $35,000</span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
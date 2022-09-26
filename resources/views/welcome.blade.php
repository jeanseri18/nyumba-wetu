@extends('app')

@section('content')
<div class="slider-area">
    <div class="slider-active">
   
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInUp" data-delay=".6s">Aider les enfants<br> du Congo RDC</h1>
                            <P data-animation="fadeInUp" data-delay=".8s" >
                                Ensemble, nous changerons véritablement la vie des enfants !</P>
                            <!-- Hero-btn -->
                            <div class="hero__btn">
                                <a href="" class="btn hero-btn mb-10"  data-animation="fadeInLeft" data-delay=".8s">FAITE UN DON</a>
                                <a href="" class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
                                    <i class="flaticon-null"></i>
                                    <p> +32 465 98 04 22</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- <div style=" height:500px;" class="bg-home">
        <div style="
        position: relative;">
            <br><br><br><br>
            <div class="header-text-title">
                Un monde où chaque enfant jouit de ses droits sans distinction
            </div>

            <center>
                <div class=" d-lg-block ml-20">
                    <a href="contact.html" class="btn header-btn">FAITE UN DON</a>
                </div>
            </center>
        </div>
        {{-- <p class="header-text-P">
            En appuyant Maison pour tous, vous agissez concrètement en faveur des droits de
            l’enfant au Canada et dans le monde. Vos dons nous permettent de réaliser des projets de protection de l’enfance
            aux impacts durables.

            Ensemble, nous changerons véritablement la vie des enfants !
        </P> --}}


    {{-- </div> --}} 
  
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            {{-- <span>About our foundetion</span> --}}
                            <h2>Nous Sommes En Mission Pour Aider Les Impuissants</h2>
                        </div>
                        <p>Nous croyons que tout changement significatif en faveur des droits de l’enfant passe
                            d’abord par une conscientisation individuelle, collective et étatique aux enjeux affectant les
                            enfants. Par des analyses
                            contextuelles et par des ateliers de réflexion nationaux et régionaux,
                            nous visons avant tout à susciter des réactions et à inciter chaque individu, communauté ou
                            institution à se mobiliser et devenir un acteur de changement.</p>
                        <p>
                            L’enfant évolue dans un environnement où gravitent de nombreux acteurs,
                            jouant tous un rôle pour sa protection : les filles et les garçons eux-mêmes comme
                            sujets de droit dotés de libertés, ainsi que la famille, la communauté, l’État et ses
                            institutions et la communauté internationale.
                            En formant ces différents acteurs aux droits de l’enfant et en renforçant leurs capacités à
                            remédier aux enjeux touchant les enfants,
                            nous contribuons, avec nos partenaires,
                            à l’instauration d’un environnement plus sécuritaire où les enfants jouissent de leurs droits.
                        </p>
                    </div>
                    <a href="about.html" class="btn">En savoir plus</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="assets/img/albinos1.jpeg" alt=""  width="300">
                        </div>
                        <div class="about-back-img ">
                            <img src="assets/img/albinos.jpeg" alt="" width="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <p class="header-text-P">
        En appuyant Maison pour tous, vous agissez concrètement en faveur des droits de
        l’enfant au Congo et dans le monde. Vos dons nous permettent de réaliser des projets de protection de l’enfance
        aux impacts durables.

        Ensemble, nous changerons véritablement la vie des enfants !
    </P>
    <section class="wantToWork-area ">
        <div class="container">
            <div class="wants-wrapper w-padding2  section-bg" data-background="assets/img/image1170x530cropped.jpg">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-9 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Le changement commence par toi !</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <a href="#" class="btn white-btn f-right sm-left">Devener un benevole</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-blog-area ">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-90">
                        <span>Nos recents publication</span>
                        <h2>Dernières nouvelles </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home-blog1.png" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>Creative derector</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home-blog2.png" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>Creative derector</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('frontView.master')

@section('title_area')
    Education Bootstrap Theme


@endsection

@section('css_js')
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/style.css">

    <script src="{{asset('frontEnd')}}/js/jquery.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/jquery.easing.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/custom.js"></script>
    <script src="{{asset('frontEnd')}}/contactform/contactform.js"></script>

@endsection

@section('courses')
        <!--Courses-->
    <section id="courses" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Courses</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                    <hr class="bottom-line">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="{{asset('frontEnd')}}/img/course01.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Course Name</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="{{asset('frontEnd')}}/img/course02.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Course Name</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="{{asset('frontEnd')}}/img/course03.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Course Name</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="{{asset('frontEnd')}}/img/course04.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Course Name</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="{{asset('frontEnd')}}/img/course05.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Course Name</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="{{asset('frontEnd')}}/img/course06.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Course Name</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--/ Courses-->

 @endsection
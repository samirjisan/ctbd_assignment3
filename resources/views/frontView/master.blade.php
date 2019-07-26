<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentor @yield('title_area') </title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    @yield('css_js')
    <!-- =======================================================
      Theme Name: Mentor
      Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>

@include('frontView.parts.header')
<!--Banner-->
<div class="banner">
    <div class="bg-color">
        <div class="container">
            <div class="row">
                <div class="banner-text text-center">
                    <div class="text-border">
                        <h2 class="text-dec">Trust & Quality</h2>
                    </div>
                    <div class="intro-para text-center quote">
                        <p class="big-text">Learning From Heart Today  . . . Leading Bangladesh Tomorrow.</p>
                        <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium enim repellat sapiente quos architecto<br>Laudantium enim repellat sapiente quos architecto</p>
                        <a href="#footer" class="btn get-quote">GET A QUOTE</a>
                    </div>
                    <a href="#feature" class="mouse-hover">
                        <div class="mouse"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Banner-->
<!--Feature-->
<section id="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Features</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                <hr class="bottom-line">
            </div>
            <div class="feature-info">
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right">
                            <h4>Latest Technologies</h4>
                            <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                        </div>
                        <div class="fea-img pull-left">
                            <i class="fa fa-css3"></i>
                        </div>
                    </div>
                </div>
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right">
                            <h4>Toons Background</h4>
                            <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                        </div>
                        <div class="fea-img pull-left">
                            <i class="fa fa-drupal"></i>
                        </div>
                    </div>
                </div>
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right">
                            <h4>Award Winning Design</h4>
                            <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                        </div>
                        <div class="fea-img pull-left">
                            <i class="fa fa-trophy"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ feature-->
<!--Organisations-->
<section id="organisations" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="orga-stru">
                        <h3>65%</h3>
                        <p>Say NO!!</p>
                        <i class="fa fa-male"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="orga-stru">
                        <h3>20%</h3>
                        <p>Says Yes!!</p>
                        <i class="fa fa-male"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="orga-stru">
                        <h3>15%</h3>
                        <p>Can't Say!!</p>
                        <i class="fa fa-male"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-info">
                    <hgroup>
                        <h3 class="det-txt"> Is inclusive quality education affordable?</h3>
                        <h4 class="sm-txt">(Revised and Updated for 2016)</h4>
                    </hgroup>
                    <p class="det-p">Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Organisations-->

@yield('courses')

<!--Cta-->
<section id="cta-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Subscribe Now</h2>
                <p class="cta-2-txt">Sign up for our free weekly software design courses, we’ll send them right to your inbox.</p>
                <div class="cta-2-form text-center">
                    <form action="#" method="post" id="workshop-newsletter-form">
                        <input name="" placeholder="Enter Your Email Address" type="email">
                        <input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Cta-->
<!--work-shop-->
<section id="work-shop" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Upcoming Workshop</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                <hr class="bottom-line">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-box text-center">
                    <div class="icon-box">
                        <i class="fa fa-html5 color-green"></i>
                    </div>
                    <div class="icon-text">
                        <h4 class="ser-text">Mentor HTML5 Workshop</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-box text-center">
                    <div class="icon-box">
                        <i class="fa fa-css3 color-green"></i>
                    </div>
                    <div class="icon-text">
                        <h4 class="ser-text">Mentor CSS3 Workshop</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-box text-center">
                    <div class="icon-box">
                        <i class="fa fa-joomla color-green"></i>
                    </div>
                    <div class="icon-text">
                        <h4 class="ser-text">Mentor Joomla Workshop</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ work-shop-->
<!--Faculity member-->
<section id="faculity-member" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Meet Our Faculty Member</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                <hr class="bottom-line">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="pm-staff-profile-container">
                    <div class="pm-staff-profile-image-wrapper text-center">
                        <div class="pm-staff-profile-image">
                            <img src="{{asset('frontEnd')}}/img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                        </div>
                    </div>
                    <div class="pm-staff-profile-details text-center">
                        <p class="pm-staff-profile-name">Bryan Johnson</p>
                        <p class="pm-staff-profile-title">Lead Software Engineer</p>

                        <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="pm-staff-profile-container">
                    <div class="pm-staff-profile-image-wrapper text-center">
                        <div class="pm-staff-profile-image">
                            <img src="{{asset('frontEnd')}}/img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                        </div>
                    </div>
                    <div class="pm-staff-profile-details text-center">
                        <p class="pm-staff-profile-name">Bryan Johnson</p>
                        <p class="pm-staff-profile-title">Lead Software Engineer</p>

                        <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="pm-staff-profile-container">
                    <div class="pm-staff-profile-image-wrapper text-center">
                        <div class="pm-staff-profile-image">
                            <img src="{{asset('frontEnd')}}/img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                        </div>
                    </div>
                    <div class="pm-staff-profile-details text-center">
                        <p class="pm-staff-profile-name">Bryan Johnson</p>
                        <p class="pm-staff-profile-title">Lead Software Engineer</p>

                        <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Faculity member-->
<!--Testimonial-->
<section id="testimonial" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2 class="white">See What Our Customer Are Saying?</h2>
                <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                <hr class="bottom-line bg-white">
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="text-comment">
                    <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
                    <p class="text-name">Abraham Doe - Creative D?rector</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="text-comment">
                    <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
                    <p class="text-name">Abraham Doe - Creative D?rector</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Testimonial-->

<!--Pricing-->
<section id="pricing" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Our Pricing</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                <hr class="bottom-line">
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="price-table">
                    <!-- Plan  -->
                    <div class="pricing-head">
                        <h4>Monthly Plan</h4>
                        <span class="fa fa-usd curency"></span> <span class="amount">200</span>
                    </div>

                    <!-- Plean Detail -->
                    <div class="price-in mart-15">
                        <a href="#" class="btn btn-bg green btn-block">PURCHACE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="price-table">
                    <!-- Plan  -->
                    <div class="pricing-head">
                        <h4>Quarterly Plan</h4>
                        <span class="fa fa-usd curency"></span> <span class="amount">800</span>
                    </div>

                    <!-- Plean Detail -->
                    <div class="price-in mart-15">
                        <a href="#" class="btn btn-bg yellow btn-block">PURCHACE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="price-table">
                    <!-- Plan  -->
                    <div class="pricing-head">
                        <h4>Year Plan</h4>
                        <span class="fa fa-usd curency"></span> <span class="amount">1200</span>
                    </div>

                    <!-- Plean Detail -->
                    <div class="price-in mart-15">
                        <a href="#" class="btn btn-bg red btn-block">PURCHACE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Pricing-->
@include('frontView.parts.contact')
@include('frontView.parts.footer')



</body>

</html>
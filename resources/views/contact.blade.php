@extends('layouts.app')
@section('title', 'Contact')
@section('content')     
<!--====== App Content ======-->
<div class="app-content">

<!--====== Section 1 ======-->
<div class="u-s-p-y-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="breadcrumb">
                <div class="breadcrumb__wrap">
                    <ul class="breadcrumb__list">
                        <li class="has-separator">

                            <a href="index.html">Home</a></li>
                        <li class="is-marked">

                            <a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Section 1 ======-->


<!--====== Section 2 ======-->
<div class="u-s-p-b-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d98219.37076001285!2d90.38855290751364!3d23.815071120548364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1690048560348!5m2!1sen!2sbd" width="1300" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <div class="g-map">
                        <div >
                        
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 2 ======-->


<!--====== Section 3 ======-->
<div class="u-s-p-b-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 u-s-m-b-30">
                    <div class="contact-o u-h-100">
                        <div class="contact-o__wrap">
                            <div class="contact-o__icon"><i class="fas fa-phone-volume"></i></div>

                            <span class="contact-o__info-text-1">LET'S HAVE A CALL</span>

                            <span class="contact-o__info-text-2">+880 1790265643</span>
                            <span class="contact-o__info-text-2">+880 1778380869</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 u-s-m-b-30">
                    <div class="contact-o u-h-100">
                        <div class="contact-o__wrap">
                            <div class="contact-o__icon"><i class="fas fa-map-marker-alt"></i></div>

                            <span class="contact-o__info-text-1">OUR LOCATION</span>

                            <span class="contact-o__info-text-2">Mirpur 12, Dhaka</span>

                            <span class="contact-o__info-text-2">Bangladesh</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 u-s-m-b-30">
                    <div class="contact-o u-h-100">
                        <div class="contact-o__wrap">
                            <div class="contact-o__icon"><i class="far fa-clock"></i></div>

                            <span class="contact-o__info-text-1">WORK TIME</span>

                            <span class="contact-o__info-text-2">7 Days a Week</span>

                            <span class="contact-o__info-text-2">From 9 AM to 7 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 3 ======-->


<!--====== Section 4 ======-->
<div class="u-s-p-b-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-area u-h-100">
                        <div class="contact-area__heading">
                            <h2>Get In Touch</h2>
                        </div>
                        <form class="contact-f" method="post" action="index.html">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 u-h-100">
                                    <div class="u-s-m-b-30">

                                        <label for="c-name"></label>

                                        <input class="input-text input-text--border-radius input-text--primary-style" type="text" id="c-name" placeholder="Name (Required)" required></div>
                                    <div class="u-s-m-b-30">

                                        <label for="c-email"></label>

                                        <input class="input-text input-text--border-radius input-text--primary-style" type="text" id="c-email" placeholder="Email (Required)" required></div>
                                    <div class="u-s-m-b-30">

                                        <label for="c-subject"></label>

                                        <input class="input-text input-text--border-radius input-text--primary-style" type="text" id="c-subject" placeholder="Subject (Required)" required></div>
                                </div>
                                <div class="col-lg-6 col-md-6 u-h-100">
                                    <div class="u-s-m-b-30">

                                        <label for="c-message"></label><textarea class="text-area text-area--border-radius text-area--primary-style" id="c-message" placeholder="Compose a Message (Required)" required></textarea></div>
                                </div>
                                <div class="col-lg-12">

                                    <button class="btn-secondary btn btn--e-brand-b-2" type="submit">Send Message</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 4 ======-->
</div>
<!--====== End - App Content ======-->
@endsection
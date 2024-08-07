@extends('layout')
@section('pageClass', 'my-work')

@section('content')

<section class="my-work__section my-work__section--hero">
<h1>Work</h1>
<p style="text-align: center; margin-bottom: 0;"><img src="/images/my-work-hero.jpg"></p>
</section>
<section class="my-work__section my-work__section--1 my-work__section--edwrks">
    <div class="clear-fix">
        <div class="static static1">
            <div class="desc">
                <h2>EducationWorks</h2>
                <h3>Web Dev / UI</h3>
                <p>I like to work on the site design of non-profit project for Education Purpose.
                The primary goals were to creative an attractive, modern, mobile-friendly design, and
                reduce the number of pages through a tabbed content interface.</p>
                <a class="see-more" href="#" target="_blank">Take a Look</a>
            </div>
        </div>
        <div class="scroll-content">
            <div>
                <div style="position: relative; display: inline-block">
                    <img src="/images/educationworks-homepage.jpg">
                   
                </div>
            </div>
            <img style="margin-top: 40px;" src="/images/educationworks-get-involved.jpg">
        </div>
    </div>
</section>
<section class="my-work__section my-work__section--2 my-work__section--powercorps">
    <div class="clear-fix">
        <div class="static static2">
            <div class="desc">
                <h2>Hotel Reservation Page</h2>
                <h3>Web Dev / UI</h3>
                <p>With a user-friendly interface and comprehensive search functionality, travelers can easily browse through a wide range of hotels, resorts, and vacation rentals to find the perfect stay for their needs. Our platform streamlines the booking process, allowing guests to secure their reservations with just a few clicks, while also providing access to exclusive deals and discounts.</p>
                <a class="see-more" href="https://github.com/naship-k-acharya/HotelBooking" target="_blank">Take a Look</a>
            </div>
        </div>
        <div class="scroll-content">
            <div>
            <div style="position: relative; display: inline-block; margin-right: 100px;">
                <img style="margin-top: 0px;width: 600px;" src="/images/hotel0001.jpg">
                <img style="margin-top: 40px;width: 600px;" src="/images/hotel0002.jpg">
                <img style="margin-top: 40px;width: 600px;" src="/images/hotel0003.jpg">
                <img style="margin-top: 40px;width: 600px;" src="/images/hotel0004.jpg">
                <img style="margin-top: 40px;width: 600px;" src="/images/hotel0005.jpg">
                <img style="margin-top: 40px;width: 600px;" src="/images/hotel0006.jpg">
                <img style="margin-top: 40px;width: 600px;" src="/images/hotel0007.jpg">
            </div>
        </div>
        </div>
    </div>
</section>
    <section class="my-work__section my-work__section--3 my-work__section--elevate">
    <div class="clear-fix">
        <div class="static static3">
            <div class="desc">
                <h2>Nepalnewsonline</h2>
                <h3>Web/UI/Laravel</h3>
                <p>It has revolutionized the way people consume information, offering instant access to a wide range of news sources from around the globe.This web contain roles,Dashboard with insert,delete[ post,ads] , search engine and profile</p>
                <a class="see-more" href="https://github.com/naship-k-acharya/Nepalnewslaravel" target="_blank">Take a Look</a>
            </div>
        </div>
        <div class="scroll-content">
            <div>
                <div style="position: relative; display: inline-block">
                    
                    <img style="float:right;width: 300px;" class="mobile" src="images/nepalnewsdashboard.png"  >
                </div>
            </div>
            <img style="margin-top: 0px;width: 600px;" style="margin-top: 40px;" src="/images/nepalnews.png">
        </div>
    </div>

    </section>

<section class="my-work__section my-work__section--4 my-work__section--homestead">
    <div class="clear-fix">
        <div class="static static4">
            <div class="desc">
                <h2>Gym Website</h2>
                <h3>Web Dev / UI</h3>
                 <p>this project has a community focus through blog and customer interaction with coaches and trainers.</p>
                <a class="see-more" href="https://github.com/naship-k-acharya/GYM" target="_blank">Take a Look</a>
            </div>
        </div>
        <div class="scroll-content">
            <img style="margin-top: 0px;width: 600px;" src="/images/gymwebpic.png">
        </div>
    </div>
{{-- </section>
<section class="my-work__section my-work__section--5 my-work__section--skinny">
    <div class="clear-fix">
        <div class="static static5">
            <div class="desc">
                <h2>Skinny Nutritional</h2>
                <h3>Web Dev / UI</h3>
                 <p>A Magento based e-commerce site for a startup brand, this project has a community focus
                 through blog posts and customer interaction with coaches and trainers. </p>
                <a class="see-more" href="#" target="_blank">Take a Look</a>
            </div>
        </div>
        <div class="scroll-content">
            <div class="height-fix">
                <img src="/images/skinny-homepage.jpg">
            </div>
        </div>
    </div>
</section>
<section class="my-work__section my-work__section--6 my-work__section--concept-art">
    <div class="clear-fix">
        <div class="static static6">
            <div class="desc">
                <h2>Concept Art</h2>
                <h3>Product Development / Design</h3>
                <p>I created these two iterations of concept art for a household product designed to
                hold and disinfect a kitchen sponge with superheated steam after every use.</p>
            </div>
        </div>
        <div class="scroll-content">
            <div class="height-fix">
                <img src="/images/sponge-cleaner-final.jpg">
                <img style="margin-top: 40px;" src="/images/sponge-cleaner.jpg">
            </div>
        </div>
    </div>
</section> --}}

<script type="text/javascript" src="/js/scripts.js"></script>
@stop

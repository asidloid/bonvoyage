@extends('layouts.master2')
@section('content')


 {{--@foreach ($men as $menu)--}}

  {{--<div class="">{{ $menu->name }} ---- {{$menu->podmenu->count()}}--}}

   {{--{{ dd($menu->podmenu->count()) }}--}}

   {{--@if(!$menu->podmenu)--}}
   {{--0000000000000000000000000000000000000000000000--}}
   {{--@endif--}}
  {{--</div>--}}

  {{--@foreach ($menu->podmenu as $podm)--}}
  {{--<div class="">-----{{ $podm->name }}   </div>--}}
  {{--@endforeach--}}
 {{--@endforeach--}}
 <!--====================================================
                         HOME
======================================================-->
 {{--<section id="home">--}}
  {{--<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">--}}
   {{--<!-- Carousel items -->--}}
   {{--<div class="carousel-inner">--}}
    {{--<div class="carousel-item active slides">--}}
     {{--<div class="overlay"></div>--}}
     {{--<div class="slide-1"></div>--}}
     {{--<div class="hero ">--}}
      {{--<hgroup class="wow fadeInUp">--}}
       {{--<h1> <span ><a href="" class="typewrite" data-period="2000" data-type='[ " Business", " Startup"]'>--}}
                        {{--<span class="wrap"></span></a></span> </h1>--}}
       {{--<h3>The next big idea is waiting for its next big changer</h3>--}}
      {{--</hgroup>--}}
      {{--<button class="btn btn-general btn-green wow fadeInUp" role="button">Contact Now</button>--}}
     {{--</div>--}}
    {{--</div>--}}
   {{--</div>--}}
  {{--</div>--}}
 {{--</section>--}}

 {{--<div class="overlay-contact-h"></div>--}}
 {{--<section id="home" class="bg-parallax home-h-bg">--}}
  {{--<div class="container">--}}
   {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
   {{--111111111111111--}}
    {{--</div>--}}
   {{--</div>--}}
  {{--</div>--}}
 {{--</section>--}}

 <!--====================================================
                         ABOUT
 ======================================================-->
 <section id="about" class="about bg-parallax home-h-bg">
  <div class="overlayfon">
  <div class="container">
   <div class="row title-bar">

    <div class="col-md-12">
     {{--<div class="col ">--}}
      <center><img src="/img/logo.png" class='logo' width="300px" height="218px"></center>
     {{--</div>--}}
     <h1 class="wow fadeInUp">Туристическая компания Бон Вояж</h1>
     <div class="heading-border"></div>
     <p class="wow fadeInUp" data-wow-delay="0.4s">Индивидуальный туризм и сервис<br>Профессиональные услуги в сфере международного индивидуального туризма и сервиса </br>
     {{--<div class="title-but"><button class="btn btn-general btn-green" role="button">Read More</button></div>--}}
    </div>

   </div>
  </div>
  </div>
  <!-- About right side withBG parallax -->
  <div class="container-fluid">
   {{--<div class="row">--}}
    {{--<div class="col-md-4 bg-starship">--}}
     {{--<div class="about-content-box wow fadeInUp" data-wow-delay="0.3s">--}}
      {{--<i class="fa fa-snowflake-o"></i>--}}
      {{--<h5>Thoughts Leadership Platform</h5>--}}
      {{--<p class="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>--}}
     {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4 bg-chathams">--}}
     {{--<div class="about-content-box wow fadeInUp" data-wow-delay="0.5s">--}}
      {{--<i class="fa fa-circle-o-notch"></i>--}}
      {{--<h5>Corporate world Platform</h5>--}}
      {{--<p class="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>--}}
     {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4 bg-matisse">--}}
     {{--<div class="about-content-box wow fadeInUp" data-wow-delay="0.7s">--}}
      {{--<i class="fa fa-hourglass-o"></i>--}}
      {{--<h5>End to End Testing Platform</h5>--}}
      {{--<p class="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>--}}
     {{--</div>--}}
    {{--</div>--}}
   </div>
  </div>
 </section>
 <!--====================================================
                       WHAT WE DO
  ======================================================-->
 <section class="what-we-do bg-gradiant">
  <div class="container-fluid">
   <div class="row">
    <div class="col-md-3">
     <h3>Готовые решения отдыха по направлениям</h3>
     <div class="heading-border-light"></div>
     <p class="desc">Мы предлагаем вым готовые решения отдыха</p>
    </div>
    <div class="col-md-9">
     <div class="row">
      <div class="col-md-4  col-sm-6">
       <a class="card-link" href="#">
        <div class="what-we-desc">
         <i class="fa plyag2"></i>
         <h6>Пляжный отдых</h6>
         <p class="desc">Мы предлагаем Вам насладиться пляжами</p>
        </div></a>
      </div>
      <div class="col-md-4  col-sm-6">
       <a class="card-link" href="#">
        <div class="what-we-desc">
         <i class="fa exklusiv2"></i>
         <h6>Эксклюзивный отдых</h6>
         <p class="desc">Мы предлагаем Вам насладиться эксклюзивными программами </p>
        </div></a>
      </div>
      <div class="col-md-4  col-sm-6">
       <a class="card-link" href="#">
        <div class="what-we-desc">
         <i class="fa ioga"></i>
         <h6>Аюрведа, йога</h6>
         <p class="desc">Программы Аюрведа, йога </p>
        </div></a>
      </div>
      <div class="col-md-4  col-sm-6">
       <a class="card-link" href="#">
        <div class="what-we-desc">
         <i class="fa gory"></i>
         <h6>Горнолыжные курорты</h6>
         <p class="desc">Отдых на горнолыжных курортах</p>
        </div></a>
      </div>
      <div class="col-md-4  col-sm-6">
       <a class="card-link" href="#">
        <div class="what-we-desc">
         <i class="fa sobitiya"></i>
         <h6>Событийные и свадебные туры</h6>
         <p class="desc">Предложения событийных и свадебных путешествий</p>
        </div></a>
      </div>
      <div class="col-md-4  col-sm-6">
       <a class="card-link" href="#">
        <div class="what-we-desc">
         <i class="fa spa"></i>
         <h6>СПА</h6>
         <p class="desc">Предложения СПА отдыха </p>
        </div></a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
 <!--====================================================
                         OFFER
 ======================================================-->
 <section id="comp-offer">
  <div class="container-fluid">
   <div class="row">
    <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.2s">
     <h2>Особые предложения</h2>
     <div class="heading-border-light"></div>
     <button class="btn btn-general btn-green" role="button">Все предложения</button>
     <button class="btn btn-general btn-white" role="button">Подобрать <br>эксклюзивный<br> тур</button>
    </div>


    @foreach ($predl as $pred)

    <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
     <div class="desc-comp-offer-cont">
      <div class="thumbnail-blogs">
       <div class="caption">
        {{--<i class="fa fa-chain">111111111111</i>--}}
       </div>
       <img src="/uploads/{{ $pred->imag }}" class="img-fluid" alt="...">
      </div>
      <h3>{{ $pred->name }}</h3>
      {{--<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. </p>--}}
      <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Подробнее</a>
     </div>
    </div>

    @endforeach
    {{--<div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.6s">--}}
     {{--<div class="desc-comp-offer-cont">--}}
      {{--<div class="thumbnail-blogs">--}}
       {{--<div class="caption">--}}
        {{--<i class="fa fa-chain"></i>--}}
       {{--</div>--}}
       {{--<img src="img/news/news-13.jpg" class="img-fluid" alt="...">--}}
      {{--</div>--}}
      {{--<h3>Leadership Development</h3>--}}
      {{--<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. </p>--}}
      {{--<a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>--}}
     {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.8s">--}}
     {{--<div class="desc-comp-offer-cont">--}}
      {{--<div class="thumbnail-blogs">--}}
       {{--<div class="caption">--}}
        {{--<i class="fa fa-chain"></i>--}}
       {{--</div>--}}
       {{--<img src="img/news/news-14.jpg" class="img-fluid" alt="...">--}}
      {{--</div>--}}
      {{--<h3>Social benefits and services</h3>--}}
      {{--<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. </p>--}}
      {{--<a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>--}}
     {{--</div>--}}
    {{--</div>--}}

   </div>
  </div>
  <center><div class="heading-border-light-news"></div></center>
 </section>

 <!--====================================================
                         NEWS
  ======================================================-->
 <section id="comp-offer ">
  <div class="container-fluid">
   <div class="row">
    <div class="col-md-3 col-sm-6  desc-comp-offer wow fadeInUp" data-wow-delay="0.2s">
     <h2>Новости нашей компании</h2>
     <div class="heading-border-light"></div>
     <button class="btn btn-general btn-green" role="button">Все новости</button>
    </div>

    @foreach ($news as $newss)
    <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
     <div class="desc-comp-offer-cont">
      <div class="thumbnail-blogs">
       <div class="caption">
        {{--<i class="fa fa-chain"></i>--}}
       </div>
       <img src="/uploads/{{ $newss->imag }}" class="img-fluid" alt="...">
      </div>
      <h3>{{ $newss->name }}</h3>
      {{--<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from Business box. </p>--}}
      <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Подробнее</a>
     </div>
    </div>
    @endforeach

    {{--<div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.6s">--}}
     {{--<div class="desc-comp-offer-cont">--}}
      {{--<div class="thumbnail-blogs">--}}
       {{--<div class="caption">--}}
        {{--<i class="fa fa-chain"></i>--}}
       {{--</div>--}}
       {{--<img src="img/news/news-9.jpg" class="img-fluid" alt="...">--}}
      {{--</div>--}}
      {{--<h3>Design Exhibitions of 2017</h3>--}}
      {{--<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from Business box. </p>--}}
      {{--<a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>--}}
     {{--</div>--}}
    {{--</div>--}}


    {{--<div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.8s">--}}
     {{--<div class="desc-comp-offer-cont">--}}
      {{--<div class="thumbnail-blogs">--}}
       {{--<div class="caption">--}}
        {{--<i class="fa fa-chain"></i>--}}
       {{--</div>--}}
       {{--<img src="img/news/news-12.jpeg" class="img-fluid" alt="...">--}}
      {{--</div>--}}
      {{--<h3>Exciting New Technologies</h3>--}}
      {{--<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from Business box. </p>--}}
      {{--<a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>--}}
     {{--</div>--}}
    {{--</div>--}}

   </div>
  </div>
 </section>

 <!--====================================================
                       STORY
 ======================================================-->
 {{--<section id="story">--}}
  {{--<div class="container">--}}
   {{--<div class="row title-bar">--}}
    {{--<div class="col-md-12">--}}
     {{--<h1 class="wow fadeInUp">Our Success Tranformation Story</h1>--}}
     {{--<div class="heading-border"></div>--}}
    {{--</div>--}}
   {{--</div>--}}
  {{--</div>--}}
  {{--<div class="container-fluid">--}}
   {{--<div class="row" >--}}
    {{--<div class="col-md-6" >--}}
     {{--<div class="story-himg" >--}}
      {{--<img src="img/image-4.jpg" class="img-fluid" alt="">--}}
     {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
     {{--<div class="story-desc">--}}
      {{--<h3>How to grow world with Us</h3>--}}
      {{--<div class="heading-border-light"></div>--}}
      {{--<p>Everyone defines success differently – as much as there are people, there are different opinions. Number one in our priority list is the success of our students, alumni and their employers. We work hard in the name of the success of our alumni – being among the best and holding the high employment rate. Many desktop publishing packages and web page editors now use Lorem Ipsum.. </p>--}}
      {{--<p>You can find some thoughts on success from our students and alumni here – every story is unique, but this is what success is. Everybody sees it differently. Many desktop publishing packages and web page editors now use Lorem Ipsum.</p>--}}
      {{--<p class="text-right" style="font-style: italic; font-weight: 700;"><a href="#">Businessbox</a></p>--}}
      {{--<div class="title-but"><button class="btn btn-general btn-green" role="button">Read More</button></div>--}}
     {{--</div>--}}
    {{--</div>--}}
   {{--</div>--}}
  {{--</div>--}}
  {{--<div class="container">--}}
   {{--<div class="row">--}}
    {{--<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">--}}
     {{--<div class="story-descb">--}}
      {{--<img src="img/news/news-10.jpg" class="img-fluid" alt="...">--}}
      {{--<h6>Virtual training systems</h6>--}}
      {{--<p>Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>--}}
      {{--<a href="#"><i class="fa fa-arrow-circle-o-right"></i> Read More</a>--}}
     {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">--}}
     {{--<div class="story-descb">--}}
      {{--<img src="img/news/news-2.jpg" class="img-fluid" alt="...">--}}
      {{--<h6>Design planning</h6>--}}
      {{--<p>Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>--}}
      {{--<a href=""><i class="fa fa-arrow-circle-o-right"></i> Read More</a>--}}
     {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">--}}
     {{--<div class="story-descb">--}}
      {{--<img src="img/news/news-8.jpg" class="img-fluid" alt="...">--}}
      {{--<h6>Remote condition monitoring</h6>--}}
      {{--<p>Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>--}}
      {{--<a href=""><i class="fa fa-arrow-circle-o-right"></i> Read More</a>--}}
     {{--</div>--}}
    {{--</div>--}}
   {{--</div>--}}
  {{--</div>--}}
 {{--</section>--}}

 <!--====================================================
                   COMPANY THOUGHT
 ======================================================-->
 {{--<div class="overlay-thought"></div>--}}
 {{--<section id="thought" class="bg-parallax thought-bg">--}}
  {{--<div class="container">--}}
   {{--<div id="thought-desc" class="row title-bar title-bar-thought owl-carousel owl-theme">--}}
    {{--<div class="col-md-12 ">--}}
     {{--<div class="heading-border bg-white"></div>--}}
     {{--<p class="wow fadeInUp" data-wow-delay="0.4s">Businessbox will deliver value to all the stakeholders and will attain excellence and leadership through such delivery of value. We will strive to support the stakeholders in all activities related to us. Businessbox provide great things.</p>--}}
     {{--<h6>John doe</h6>--}}
    {{--</div>--}}
    {{--<div class="col-md-12 thought-desc">--}}
     {{--<div class="heading-border bg-white"></div>--}}
     {{--<p class="wow fadeInUp" data-wow-delay="0.4s">Ensuring quality in Businessbox is an obsession and the high quality standards set by us are achieved through a rigorous quality assurance process. Quality assurance is performed by an independent team of trained experts for each project. </p>--}}
     {{--<h6>Tom John</h6>--}}
    {{--</div>--}}
   {{--</div>--}}
  {{--</div>--}}
 {{--</section>--}}

 <!--====================================================
                    SERVICE-HOME
 ======================================================-->
 {{--<section id="service-h">--}}
  {{--<div class="container-fluid">--}}
   {{--<div class="row" >--}}
    {{--<div class="col-md-6" >--}}
     {{--<div class="service-himg" >--}}
      {{--<iframe src="https://www.youtube.com/embed/754f1w90gQU?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>--}}
     {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">--}}
     {{--<div class="service-h-desc">--}}
      {{--<h3>We are Providing great Services</h3>--}}
      {{--<div class="heading-border-light"></div>--}}
      {{--<p>Businessbox offer the full spectrum of services to help organizations work better. Everything from creating standards of excellence to training your people to work in more effective ways.</p>--}}
      {{--<div class="service-h-tab">--}}
       {{--<nav class="nav nav-tabs" id="myTab" role="tablist">--}}
        {{--<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Developing</a>--}}
        {{--<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Training</a>--}}
        {{--<a class="nav-item nav-link" id="my-profile-tab" data-toggle="tab" href="#my-profile" role="tab" aria-controls="my-profile">Medical</a>--}}
       {{--</nav>--}}
       {{--<div class="tab-content" id="nav-tabContent">--}}
        {{--<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute. exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute. </p></div>--}}
        {{--<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">--}}
         {{--<p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute</p>--}}
        {{--</div>--}}
        {{--<div class="tab-pane fade" id="my-profile" role="tabpanel" aria-labelledby="my-profile-tab">--}}
         {{--<p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute</p>--}}
        {{--</div>--}}
       {{--</div>--}}
      {{--</div>--}}
     {{--</div>--}}
    {{--</div>--}}
   {{--</div>--}}
  {{--</div>--}}
 {{--</section>--}}

 <!--====================================================
                       CLIENT
 ======================================================-->
 {{--<section id="client" class="client">--}}
  {{--<div class="container">--}}
   {{--<div class="row title-bar">--}}
    {{--<div class="col-md-12">--}}
     {{--<h1 class="wow fadeInUp">Our Client Say</h1>--}}
     {{--<div class="heading-border"></div>--}}
     {{--<p class="wow fadeInUp" data-wow-delay="0.4s">We committed to helping you maintain your Brand Value.</p>--}}
    {{--</div>--}}
   {{--</div>--}}
   {{--<div class="row">--}}
    {{--<div class="col-md-6 col-sm-12">--}}
     {{--<div class="client-cont wow fadeInUp" data-wow-delay="0.1s">--}}
      {{--<img src="img/client/avatar-6.jpg" class="img-fluid" alt="">--}}
      {{--<h5>Leesa len</h5>--}}
      {{--<h6>DSS CEO & Cofounder</h6>--}}
      {{--<i class="fa fa-quote-left"></i>--}}
      {{--<p>The Businessbox service - it helps fill our Business, and increase our show up rate every single time.</p>--}}
     {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-6 col-sm-12">--}}
     {{--<div class="client-cont wow fadeInUp" data-wow-delay="0.3s">--}}
      {{--<img src="img/client/avatar-2.jpg" class="img-fluid" alt="">--}}
      {{--<h5>Dec Bol</h5>--}}
      {{--<h6>TEMS founder</h6>--}}
      {{--<i class="fa fa-quote-left"></i>--}}
      {{--<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece.</p>--}}
     {{--</div>--}}
    {{--</div>--}}
   {{--</div>--}}
  {{--</div>--}}
 {{--</section>--}}
 <!--====================================================
                     KARTA
 ======================================================-->
 <div class="overlay-contact-h"></div>
 <section id="contact-h" class="bg-parallax contact-h-bg">
  <div class="container">
   <div class="row">
    <div class="col-md-6">
     <div class="adress">
      <h3>Наш адрес</h3>
      <p><span>Адрес</span>: 101000, Потаповский переулок, д. 5, стр. 4, офис 530 (м. Чистые пруды)</p>
      <p><span>Тел./факс</span>: +7 (495)123-34-56</p>
      <p><span>E-mail</span>: reserv@bon-voyage.ru,  oksana@bon-voyage.ru,  elena@bon-voyage.ru</p>

     </div>
    </div>
    <div class="col-md-6">
     <div class="adress">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9fd7ac70e9cf9a3fc23c1a6bf1d65b12d5d20c67767b126a4981de47813ec3fc&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
     </div>
    </div>

   </div>
  </div>
 </section>
 <!--====================================================
                     CONTACT HOME
 ======================================================-->
 {{--<div class="overlay-contact-h"></div>--}}
 {{--<section id="contact-h" class="bg-parallax contact-h-bg">--}}
  {{--<div class="container">--}}
   {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
     {{--<div class="contact-h-cont">--}}
      {{--<h3 class="cl-white">Написать нам</h3><br>--}}
      {{--<form>--}}
       {{--<div class="form-group cl-white">--}}
        {{--<label for="name">Ваше имя</label>--}}
        {{--<input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Ваше имя">--}}
       {{--</div>--}}
       {{--<div class="form-group cl-white">--}}
        {{--<label for="exampleInputEmail1">Email адрес</label>--}}
        {{--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">--}}
       {{--</div>--}}
       {{--<div class="form-group cl-white">--}}
        {{--<label for="subject">Subject</label>--}}
        {{--<input type="text" class="form-control" id="subject" aria-describedby="subjectHelp" placeholder="Enter subject">--}}
       {{--</div>--}}
       {{--<div class="form-group cl-white">--}}
        {{--<label for="message">Текст</label>--}}
        {{--<textarea class="form-control" id="message" rows="3"></textarea>--}}
       {{--</div>--}}
       {{--<button class="btn btn-general btn-white" role="button"><i fa fa-right-arrow></i>Отправить</button>--}}
      {{--</form>--}}
     {{--</div>--}}
    {{--</div>--}}
   {{--</div>--}}
  {{--</div>--}}
 {{--</section>--}}



@endsection
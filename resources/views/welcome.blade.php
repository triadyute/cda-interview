<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="title" content="{{$home_content->meta_title}}">
    <meta name="description" content="{{$home_content->meta_description}}">
    <meta name="robots" content="{{$home_content->meta_noindex}}">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>FREE Ultimate Guide to CDA Interviews: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Structured Interview.</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/css/sticky-footer-navbar.css')}}" rel="stylesheet">
    <!-- Facebook Pixel Code -->
      <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', "'{"+ {{$pixelid->facebook_pixel_id}} +"}'");
        fbq('track', 'PageView');
      </script>
      <noscript>
        <img height="1" width="1" style="display:none" src="{!! 'https://www.facebook.com/tr?id={'. $pixelid->facebook_pixel_id. '}&ev=PageView&noscript=1}'!!}"/>
      </noscript>
    <!-- End Facebook Pixel Code -->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="{{'https://www.googletagmanager.com/gtag/js?id='. $analytics->google_analytics_id}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', @json($analytics->google_analytics_id));
    </script>
  </head>

  <body>
    @include('inc.header')
    <section class="jumbotron text-center home-jumbotron" style="background-color: #fff !important;">      
            <div class="text-center">
              <img src="{{asset('/storage/photos/' . $photo->name)}}" style="width:100% !important; height: 100vh !important;">
              {{-- <img src="{{asset('/img/cda-interview-guide.jpg')}}" alt="" style="width:100% !important; height: 100vh !important;"> --}}
              <div class="showcase-text-box">
                <div class="showcase-text">CDA Interview Guide</div>
              </div>
            </div>
    </section>
    <!-- Begin page content -->
    <main role="main" class="container-fluid custom-container pt-5 pb-5" style="padding-left:50px; padding-right:50px;">
      <div class="row">
        <div class="col-md-12 pb-5">
          <h5 class="mt-1"><strong>{{$home_content->title}}</strong>
          </h5>
            {!!$home_content->body!!}
        </div>
      </div>
    </main>

    @include('inc.footer')

    <!--JavaScript-->
    <script src="{{asset('/js/app.js')}}"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{asset('/js/vendor/popper.min.js')}}"></script>
    <!--<script src="../../dist/js/bootstrap.min.js"></script>-->
  </body>
</html>

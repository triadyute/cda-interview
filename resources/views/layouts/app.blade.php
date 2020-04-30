<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
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
        fbq('init', "'{"+ {{$home_content->title}} +"}'");
        fbq('track', 'PageView');
      </script>
      <noscript>
      <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id={your-pixel-id-goes-here}&ev=PageView&noscript=1"/>
      </noscript>
    <!-- End Facebook Pixel Code -->
  </head>

  <body>

    @yield('content')

    @include('inc.footer')

    <!--JavaScript-->
    <script src="{{asset('/js/app.js')}}"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{asset('/js/vendor/popper.min.js')}}"></script>
    <!--<script src="../../dist/js/bootstrap.min.js"></script>-->
  </body>
</html>

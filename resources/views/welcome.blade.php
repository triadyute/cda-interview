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
  </head>

  <body>

    @include('inc.header')
    <section class="jumbotron text-center home-jumbotron">
        <div class="container">
            <div class="header-box">
                <h1 class="jumbotron-heading">CDA Interview Guide</h1>
            </div>
        </div>
    </section>
    <!-- Begin page content -->
    <main role="main" class="container-fluid custom-container pb-5" style="padding-left:50px; padding-right:50px;">
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

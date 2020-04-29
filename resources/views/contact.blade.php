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
    <section class="jumbotron text-center contact-jumbotron">
    </section>
    <!-- Begin page content -->
    <main role="main" class="ontainer-fluid custom-container" style="padding-left:50px; padding-right:50px;">
        <h5><strong>BeMo Academic Consulting Inc.</strong></h5>
        <p><u>Toll Free:</u> 1-855-900-BeMo (2366)</p>
        <p><u>Email:</u> info@bemoacademicconsulting.com</p>
        <div class="row">
            <div class="col-md-12">
                <form action="">
                    <div class="form-group text-center">
                        <label for="name">NAME</label>*
                        <input type="text" name="name" placeholder="Name" class="form-control form-input-field">
                    </div>
                    <div class="form-group text-center">
                        <label for="email">EMAIL</label>*
                        <input type="text" name="email" placeholder="Email" class="form-control form-input-field">
                    </div>
                    <div class="form-group text-center">
                        <label for="email">WHAT CAN WE HELP YOU WITH?</label>*
                        <textarea rows="3" name="message" placeholder="Message" class="form-control form-input-field"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-sm btn-secondary" type="button">Reset</button>
                        <button class="btn btn-sm btn-secondary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <p class="text-center">
            <strong><u>Note:</u></strong> If you are having difficulties with our contact us form above, send us an email to info@bemoacademicconsulting.com (copy & paste the email address)
        </p>
    </main>

    @include('inc.footer')

    <!--JavaScript-->
    <script src="{{asset('/js/app.js')}}"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{asset('/js/vendor/popper.min.js')}}"></script>
    <!--<script src="../../dist/js/bootstrap.min.js"></script>-->
  </body>
</html>

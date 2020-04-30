@extends('layouts.dashboard')
@section('content')
<!-- start: page -->
<div class="row">
    <div class="col-md-12">
        @include('inc.messages')
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <toggle-no-index-home></toggle-no-index-home>
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                </div>

                <h2 class="card-title">Edit Contact page Content</h2>
            </header>
            <div class="card-body">
                <form class="form-horizontal form-bordered" method="POST"
                    action="{{route('contact.update', $contact_content)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Contact Page
                            Title</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inputDefault" name="title"
                                value="{{$contact_content->title}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Homepage
                            Meta Title</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inputDefault" name="meta_title">
                        </div>
					</div>
					<div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Homepage
                            Meta Description</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inputDefault" name="meta_description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Contact Page
                            Phone</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inputDefault" name="phone"
                                value="{{$contact_content->phone}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Contact Page
                            Email</label>
                        <div class="col-lg-8">
                            <input type="email" class="form-control" id="inputDefault" name="email"
                                value="{{$contact_content->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Receive Emails at</label>
                        <div class="col-lg-8">
                            <input type="email" class="form-control" id="inputDefault" name="cda_email"
                                value="{{$contact_content->cda_email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Facebook Pixel Id</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inputDefault" name="facebook_pixel_id"
                                value="{{$facebook_pixel_id->facebook_pixel_id}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Google Analytics Id</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inputDefault" name="google_analytics_id"
                                value="{{$google_analytics_id->google_analytics_id}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Replace Main
                            Image</label>
                        <div class="col-lg-8">
                            <input type="file" name="photo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
<!-- end: page -->
@endsection

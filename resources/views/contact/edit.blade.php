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
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="title">Contact Page
                            Title</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inputDefault" name="title"
                                value="{{$contact_content->title}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="meta_title">Contact page
                            Meta Title</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{$contact_content->meta_title}}">
                        </div>
					</div>
					<div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="meta_description">Contact page
                            Meta Description</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="meta_description" name="meta_description" value="{{$contact_content->meta_description}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="phone">Contact Page
                            Phone</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="phone" name="phone"
                                value="{{$contact_content->phone}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="email">Contact Page
                            Email</label>
                        <div class="col-lg-8">
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{$contact_content->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="cda_email">Receive Emails at</label>
                        <div class="col-lg-8">
                            <input type="email" class="form-control" id="cda_email" name="cda_email"
                                value="{{$contact_content->cda_email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="facebook_pixel_id">Facebook Pixel Id</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="facebook_pixel_id" name="facebook_pixel_id"
                                value="{{$facebook_pixel_id->facebook_pixel_id}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="google_analytics_id">Google Analytics Id</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="google_analytics_id" name="google_analytics_id"
                                value="{{$google_analytics_id->google_analytics_id}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="google_analytics_id">Replace Main
                            Image</label>
                        <div class="col-lg-8">
                            <input type="file" name="photo" id="google_analytics_id">
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

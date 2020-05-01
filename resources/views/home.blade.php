@extends('layouts.dashboard')
@section('content')
<!-- start: page -->
<div class="row">
    <div class="col-md-12">
        @include('inc.messages')
        <section class="card">
            <header class="card-header">
                <div class="card-actions" id="app">
                    <toggle-no-index-home :home_content="{{$home_content}}"></toggle-no-index-home>
                    {{-- <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a> --}}
                </div>

                <h2 class="card-title">Edit Homepage Content</h2>
            </header>
            <div class="card-body">
                <form class="form-horizontal form-bordered" method="POST"
                    action="{{route('home-content.update', $home_content)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="title">Homepage
                            Title</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{$home_content->title}}">
                        </div>
					</div>
					<div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="meta_title">Homepage
                            Meta Title</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{$home_content->meta_title}}">
                        </div>
					</div>
					<div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="meta_description">Homepage
                            Meta Description</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="meta_description" name="meta_description" value="{{$home_content->meta_description}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="message">Homepage
                            Body</label>
                        <div class="col-lg-8">
                            <textarea class="form-control" id="summary-ckeditor" name="message"
                                rows="20">{{$home_content->body}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="photo">Replace Main
                            Image</label>
                        <div class="col-lg-8">
                            <input type="file" name="photo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="facebook_pixel_id">Facebook Pixel Id</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="facebook_pixel_id" name="facebook_pixel_id" value="{{$facebook_pixel_id->facebook_pixel_id}}">
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

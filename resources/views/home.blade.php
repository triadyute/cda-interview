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

                <h2 class="card-title">Edit Homepage Content</h2>
            </header>
            <div class="card-body">
                <form class="form-horizontal form-bordered" method="POST"
                    action="{{route('home-content.update', $home_content)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Homepage
                            Title</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inputDefault" name="title"
                                value="{{$home_content->title}}">
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
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Homepage
                            Body</label>
                        <div class="col-lg-8">
                            <textarea class="form-control" id="summary-ckeditor" name="message"
                                rows="20">{{$home_content->body}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Replace Homepage
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

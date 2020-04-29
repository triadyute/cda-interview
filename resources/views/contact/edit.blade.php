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
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Contact Page
                            Title</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inputDefault" name="phone"
                                value="{{$contact_content->phone}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Contact Page
                            Title</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inputDefault" name="email"
                                value="{{$contact_content->email}}">
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

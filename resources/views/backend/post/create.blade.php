@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h3>Post</h3>
                    <a href="{{route('post.index')}}" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input class="form-control" id="title"  type="text" name="title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sub_title">Sub Title <span class="text-danger">*</span></label>
                                <input class="form-control" id="sub_title"  type="text" name="sub_title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="date">Date <span class="text-danger">*</span></label>
                                <input class="form-control" id="date"  type="date" name="date">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="time">Time <span class="text-danger">*</span></label>
                                <input class="form-control" id="time"  type="time" name="time">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="place">Place <span class="text-danger">*</span></label>
                                <input class="form-control" id="place"  type="text" name="place">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3 float-right">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
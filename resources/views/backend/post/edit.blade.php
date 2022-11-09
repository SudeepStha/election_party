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
                    <form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input class="form-control" id="title"  type="text" name="title" value="{{$post->title}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sub_title">Sub Title <span class="text-danger">*</span></label>
                                <input class="form-control" id="sub_title"  type="text" name="sub_title" value="{{$post->sub_title}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date">Date <span class="text-danger">*</span></label>
                                        <input class="form-control" id="date"  type="date" name="date" value="{{$post->date}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="time">Time <span class="text-danger">*</span></label>
                                        <input class="form-control" id="time"  type="time" name="time" value="{{$post->time}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="place">Place <span class="text-danger">*</span></label>
                                <input class="form-control" id="place"  type="text" name="place" value="{{$post->place}}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3 float-right">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
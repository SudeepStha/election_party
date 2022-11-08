@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h3>Video Form</h3>
                    <a href="{{route('video.index')}}" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('video.update', $video->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input class="form-control" id="title"  type="text" name="title" value="{{$video->title}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link">Link <span class="text-danger">*</span></label>
                                <input class="form-control" id="link"  type="text" name="link" value="{{$video->link}}">
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
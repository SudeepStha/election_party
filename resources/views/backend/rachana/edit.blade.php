@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h3>Lekh Rachana</h3>
                    <a href="{{route('rachana.index')}}" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('rachana.update', $rachana->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input class="form-control" id="title"  type="text" name="title" value="{{$rachana->title}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea class="summernote" id="editor"  row='7' type="textarea" name="description">{{$rachana->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="featured">Featured Image <span class="text-danger">*</span></label>
                                <input class="form-control" id="featured"  type="file" name="featured">
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
@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h3>Gallery</h3>
                    <a href="{{route('gallery.index')}}" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input class="form-control" id="title"  type="text" name="title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link">Link <span class="text-danger">*</span></label>
                                <input class="form-control" id="link"  type="text" name="link">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="featured">Featured Image <span class="text-danger">*</span></label>
                                <input class="form-control" id="featured"  type="file" name="featured">
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
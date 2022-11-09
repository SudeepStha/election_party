@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h3>Personal Details</h3>
                    <a href="{{route('personaldetail.index')}}" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('personaldetail.update', $personaldetail->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input class="form-control" id="name"  type="text" name="name" value="{{$personaldetail->name}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="party">Party (Optional)</label>
                                <input class="form-control" id="party"  type="text" name="party" value="{{$personaldetail->party}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook">Facebook (Optional)</label>
                                        <input class="form-control" id="facebook"  type="text" name="facebook" value="{{$personaldetail->facebook}}">
                                    </div>
                                </div><div class="col-md-6">
                                    <div class="form-group">
                                        <label for="youtube">Youtube (Optional)</label>
                                        <input class="form-control" id="youtube"  type="text" name="youtube" value="{{$personaldetail->youtube}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email (Optional)</label>
                                        <input class="form-control" id="email"  type="text" name="email" value="{{$personaldetail->email}}">
                                    </div>
                                </div><div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact">Contact (Optional)</label>
                                        <input class="form-control" id="contact"  type="text" name="contact" value="{{$personaldetail->contact}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea class="summernote" id="editor"  row='7' type="textarea" name="description">{{$personaldetail->description}}</textarea>
                              </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="photo">Image <span class="text-danger">*</span></label>
                                <input class="form-control" id="photo"  type="file" name="photo">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cover">Cover Image <span class="text-danger">*</span></label>
                                <input class="form-control" id="cover"  type="file" name="cover">
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
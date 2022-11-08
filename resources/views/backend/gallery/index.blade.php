@extends('backend.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {{-- @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif --}}
                <div class="card-header justify-content-between">
                    <h3>Gallery</h3>
                    <a href="{{ route('gallery.create') }}" class="btn btn-primary float-end">Insert Images</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Link</th>
                                <th>Image</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gallery as $gallery)
                            <tr>
                                <td>{{$gallery->id}}</td>
                                <td>{{$gallery->title}}</td>
                                <td>{{$gallery->link}}</td>
                                <td><img src="{{asset($gallery->featured)}}" alt="N/A" srcset="" width="64px" height="60px"></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('gallery.edit', $gallery->id) }}" class="badge btn bg-primary mx-2">Edit</a>
                                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge btn bg-danger">Delete</button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
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
                    <h3>Video Form</h3>
                    <a href="{{ route('video.create') }}" class="btn btn-primary float-end">Post Video</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Link</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($video as $video)
                            <tr>
                                <td>{{$video->id}}</td>
                                <td>{{$video->title}}</td>
                                <td>{{$video->link}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('video.edit', $video->id) }}" class="badge btn bg-primary mx-2">Edit</a>
                                    <form action="{{ route('video.destroy', $video->id) }}" method="post">
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
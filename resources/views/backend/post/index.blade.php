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
                    <h3>Post</h3>
                    <a href="{{ route('post.create') }}" class="btn btn-primary float-end">Insert Post</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Place</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $index => $post)
                            <tr>
                                <td>{{++$index}}</td>
                                <td>{{$post->title}}</td>
                                {{-- <td>{{$post->sub_title}}</td> --}}
                                <td>{!! Str::words($post->sub_title, 5, '...') !!}</td>
                                <td>{{$post->date}}</td>
                                <td>{{\Carbon\Carbon::parse($post->time)->format('h:i a')}}</td>
                                <td>{{$post->place}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('post.edit', $post->id) }}" class="badge btn bg-primary mx-2">Edit</a>
                                    <form action="{{ route('post.destroy', $post->id) }}" method="post">
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
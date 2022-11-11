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
                    <h3>Lekh Rachana</h3>
                    <a href="{{ route('rachana.create') }}" class="btn btn-primary float-end">Post Lekh Rachana</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                {{-- <th>Description</th> --}}
                                <th>Image</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rachana as $index => $rachana)
                            <tr>
                                <td>{{++$index}}</td>
                                <td>{{$rachana->title}}</td>
                                {{-- <td>{!! Str::words($rachana->description, 10, '...') !!}</td> --}}
                                <td>
                                    <img src="{{asset($rachana->featured)}}" alt="N/A" srcset="" width="64px" height="60px">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('rachana.edit', $rachana->id) }}" class="badge btn bg-primary mx-2">Edit</a>
                                    <form action="{{ route('rachana.destroy', $rachana->id) }}" method="post">
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
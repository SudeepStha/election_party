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
                    <h3>Interview</h3>
                    <a href="{{ route('interview.create') }}" class="btn btn-primary float-end">Post Interview</a>
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
                            @foreach ($interview as $interview)
                            <tr>
                                <td>{{$interview->id}}</td>
                                <td>{{$interview->title}}</td>
                                {{-- <td>{!! Str::words($interview->description, 10, '...') !!}</td> --}}
                                <td>
                                    <img src="{{asset($interview->featured)}}" alt="N/A" srcset="" width="64px" height="60px">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('interview.edit', $interview->id) }}" class="badge btn bg-primary mx-2">Edit</a>
                                    <form action="{{ route('interview.destroy', $interview->id) }}" method="post">
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
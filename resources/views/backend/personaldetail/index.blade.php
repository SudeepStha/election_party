@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h3>Personal Details</h3>
                    @if (empty($personaldetail))
                        <a href="{{route('personaldetail.create')}}" class="btn btn-primary">Insert Detail</a>
                        
                    @endif
                </div>
                <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Party</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    {{-- <th>Description</th> --}}
                                    <th>Cover Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($personaldetail))
                                <tr>
                                    <td><img src="{{asset($personaldetail->photo)}}" alt="N/A" srcset="" width="64px" height="60px"></td>
                                    <td>{{$personaldetail->name}}</td>
                                    <td>
                                        {{$personaldetail->party}}
                                    </td>
                                    <td>
                                        {{$personaldetail->email}}
                                    </td>
                                    <td>
                                        {{$personaldetail->contact}}
                                    </td>
                                    {{-- <td>
                                        {!! Str::words($personaldetail->description, 10, '...') !!}
                                        
                                    </td> --}}
                                    
                                    <td><img src="{{asset($personaldetail->cover)}}" alt="N/A" srcset="" width="64px" height="60px"></td>
                                    <td>
                                        <a href="{{route('personaldetail.edit', $personaldetail->id)}}" class="badge btn bg-primary mx-2">
                                            {{-- <i class="fas fa-edit"></i> --}}
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                @endif
                                
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
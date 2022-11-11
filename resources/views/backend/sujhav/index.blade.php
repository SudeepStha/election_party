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
                    <h3>Sujhav</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Candidate</th>
                                <th>Message</th>
                                <th>Post on</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sujhavs as $index=>$sujhav)
                            <tr>
                                <td>{{++$index}}</td>
                                <td>{{$sujhav->name}}</td>
                                <td>{{$sujhav->contact ?? 'N/A'}}</td>
                                <td>{{$sujhav->address}}</td>
                                <td>{{$sujhav->candidate}}</td>
                                <td>{{$sujhav->message}}</td>
                                <td>{{$sujhav->created_at->diffForHumans()}}</td>
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

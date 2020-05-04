@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($entries->isEmpty())
                        <p>You din´t publish any entry yet.</p>
                    @else
                        <h5>My entries:</h5>
                        <ul class="list-group list-group-flush">
                            @foreach($entries as $entry)
                                <li class="list-group-item m-2">
                                    <a href="{{ $entry->getUrl() }}" class="text-dark text-decoration-none">{{ $entry->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

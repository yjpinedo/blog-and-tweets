@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Tweets</div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }}</div>
                    <div class="card-body">
                        <p>Published entries:</p>
                        <ul class="list-group list-group-flush">
                            @foreach($entries as $entry)
                                <li class="list-group-item m-2">
                                    <a href="#" class="text-dark text-decoration-none">{{ $entry->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


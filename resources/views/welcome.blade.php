@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($entries as $entry)
                <div class="card mb-4">
                    <div class="card-header">{{ $entry->id }}. {{ $entry->title }}</div>
                    <div class="card-body">
                        <p>{{ $entry->content }}</p>
                    </div>
                    <div class="card-footer">
                        Author: <a href="{{ route('users.show', $entry->user->id) }}"> {{ $entry->user->name }}</a>
                    </div>
                </div>
                @endforeach
                {{ $entries->links() }}
            </div>
        </div>
    </div>
@endsection

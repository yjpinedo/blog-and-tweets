@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $entry->title }}</div>
                    <div class="card-body">
                        <p>{{ $entry->content }}</p>
                        @can('update', $entry)
                            <a href="{{ route('entries.edit', $entry->id) }}" class="btn btn-secondary btn-block">Edit entry</a>
                        @endcan
                    </div>
                    <div class="card-footer">
                        Author: <a href="{{ route('users.show', $entry->user->username) }}"> {{ $entry->user->name }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


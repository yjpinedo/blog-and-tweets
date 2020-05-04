@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $entry->title }}</div>
                    <div class="card-body">
                        <p>{{ $entry->content }}</p>
                    </div>
                    @if($entry->user->id == auth()->id())
                        <div class="card-footer bg-white">
                            <a href="{{ route('entries.edit', $entry->id) }}" class="btn btn-secondary btn-block">Edit entry</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection


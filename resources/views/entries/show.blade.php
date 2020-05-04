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
                    @can('update', $entry)
                        <div class="card-footer bg-white">
                            <a href="{{ route('entries.edit', $entry->id) }}" class="btn btn-secondary btn-block">Edit entry</a>
                        </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection


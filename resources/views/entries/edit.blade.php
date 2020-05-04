@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Entries</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('entries.update', $entry->id) }}" method="post">
                            @csrf @method('PUT')
                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>

                                <div class="">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $entry->title) }}" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content">{{ __('Content') }}</label>
                                <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content">{{ old('content', $entry->content) }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Publish') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


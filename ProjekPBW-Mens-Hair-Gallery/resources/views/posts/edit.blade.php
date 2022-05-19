@extends('layouts.dashboard')

@section('title')
    Edit post
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('edit_post', $post) }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('posts.update', ['post' => $post]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex align-items-stretch">
                            <div class="col-md-8">
                                <!-- title -->
                                <div class="form-group">
                                    <label for="input_post_title" class="font-weight-bold">
                                        Title
                                    </label>
                                    <input id="input_post_title" value="{{ old('title', $post->title) }}" name="title"
                                        type="text" class="form-control @error('title') is-invalid @enderror"
                                        placeholder="" />
                                    @error('title')
                                        <span class="invalid-feedback">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- slug -->
                                <div class="form-group">
                                    <label for="input_post_slug" class="font-weight-bold">
                                        Slug
                                    </label>
                                    <input id="input_post_slug" value="{{ old('slug', $post->slug) }}" name="slug"
                                        type="text" class="form-control @error('slug') is-invalid @enderror"
                                        placeholder="Auto generate" readonly />
                                    @error('slug')
                                        <span class="invalid-feedback">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- thumbnail -->
                                <div class="form-group">
                                    <label for="input_post_thumbnail" class="font-weight-bold">
                                        Thumbnail
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button id="button_post_thumbnail" data-input="input_post_thumbnail"
                                                class="btn btn-primary" type="button">
                                                Browse
                                            </button>
                                        </div>
                                        <input id="input_post_thumbnail" name="thumbnail"
                                            value="{{ old('thumbnail', asset($post->thumbnail)) }}" type="text"
                                            class="form-control @error('thumbnail') is-invalid @enderror" placeholder=""
                                            readonly />
                                        @error('thumbnail')
                                            <span class="invalid-feedback">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- description -->
                                <div class="form-group">
                                    <label for="input_post_description" class="font-weight-bold">
                                        Description
                                    </label>
                                    <textarea id="input_post_description" name="description" placeholder=""
                                        class="form-control @error('description') is-invalid @enderror"
                                        rows="5">{{ old('description', $post->description) }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- status -->
                                <div class="form-group">
                                    <label for="select_post_status" class="font-weight-bold">
                                        Status
                                    </label>
                                    <select id="select_post_status" name="status"
                                        class="custom-select @error('status') is-invalid @enderror">
                                        @foreach ($statuses as $key => $value)
                                            <option value="{{ $key }}"
                                                {{ old('status', $post->status) == $key ? 'selected' : null }}>
                                                {{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="float-right">
                                    <a class="btn btn-warning px-4" href="{{ route('posts.index') }}">Back</a>
                                    <button type="submit" class="btn btn-primary px-4">
                                        Edit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('javascript-external')
    {{-- file manager (button) --}}
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
@endpush

@push('javascript-internal')
    <script>
        $(document).ready(function() {
            //Event : input slug
            $("#input_post_title").change(function(event) {
                $("#input_post_slug").val(
                    event.target.value
                    .trim()
                    .toLowerCase()
                    .replace(/[^a-z\d-]/gi, "-")
                    .replace(/-+/g, "-")
                    .replace(/^-|-$/g, "")
                );
            });

            //Event : input thumbnail
            $('#button_post_thumbnail').filemanager('image');
        });
    </script>
@endpush

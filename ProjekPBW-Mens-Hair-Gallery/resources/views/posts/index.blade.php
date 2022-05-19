@extends('layouts.dashboard')

@section('title')
    Hairstyles post
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('posts') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="GET" class="form-inline form-row">
                                {{-- Filter:status --}}
                                <div class="col">
                                    <div class="input-group mx-1">
                                        <label class="font-weight-bold mr-2">Status</label>
                                        <select name="status" class="custom-select">
                                            @foreach ($statuses as $value => $label)
                                                <option value="{{ $value }}"
                                                    {{ $statusSelected == $value ? 'selected' : null }}>
                                                    {{ $label }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Apply</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Filter:search --}}
                                <div class="col">
                                    <div class="input-group mx-1">
                                        <input name="keyword" type="search" class="form-control"
                                            placeholder="Search for posts" value="{{ request()->get('keyword') }}">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary float-right" role="button">
                                Add new
                                <i class="fas fa-plus-square"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <!-- list post -->
                        @forelse ($posts as $post)
                            <div class="card my-2">
                                <div class="card-body">
                                    <h5>
                                        {{ $post->title }}
                                    </h5>
                                    <p>
                                        {{ $post->description }}
                                    </p>
                                    <div class="float-right">
                                        <!-- detail -->
                                        <a href="{{ route('posts.show', ['post' => $post]) }}"
                                            class="btn btn-sm btn-primary" role="button">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <!-- edit -->
                                        <a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-sm btn-info"
                                            role="button">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <!-- delete -->
                                        <form class="d-inline" role="alert"
                                            action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            Data post belum ada
                        @endforelse
                    </ul>
                </div>
                @if ($posts->hasPages())
                    <div class="card-footer">
                        {{ $posts->links('vendor.pagination.bootstrap-4') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('javascript-internal')
    <script>
        $(document).ready(function() {

            //Event : delete post   
            $("form[role='alert']").submit(function(event) {
                event.preventDefault();
                Swal.fire({
                    title: "Delete post",
                    text: "Are you sure you want to delete this post?",
                    icon: 'warning',
                    allowOutsideClick: false,
                    showCancelButton: true,
                    cancelButtonText: "Cancel",
                    reverseButtons: true,
                    confirmButtonText: "Delete",
                    confirmButtonColor: "#007bff",
                }).then((result) => {
                    if (result.isConfirmed) {
                        event.target.submit();
                    }
                });
            });
        });
    </script>
@endpush

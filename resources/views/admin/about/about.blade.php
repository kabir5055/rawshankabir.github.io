@extends('admin.master')
@section('title')
    About
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Add About</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.about') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <textarea name="about_content" id="" cols="30" rows="30" class="form-control"></textarea>
                                    <label>About Content</label>
                                </div>
                                <div class="mb-3">
                                    <input name="about_image" type="file" class="form-control">
                                </div>

                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid px-4">
                <h1 class="mt-4">About Content</h1>
                <div class="mb-4">
                    {{--                <h4>{{ session('massage') }}</h4>--}}
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>About Content</th>
                                <th>About Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($about as $about)
                                <tr>
                                    <td>{{ $about->about_content }}</td>
                                    <td>
                                        <img src="{{ asset($about->about_image) }}" alt="" width="100" height="100">
                                    </td>
                                    <td>{{ $about->status ==1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('edit.about',['id' => $about->id]) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                                        @if($about->status == 1)
                                            <a href="{{ route('about.status',['id' => $about->id]) }}" class="btn btn-warning btn-sm mx-1">Unpublished</a>
                                        @else
                                            <a href="{{ route('about.status',['id' => $about->id]) }}" class="btn btn-success btn-sm mx-1">Published</a>
                                        @endif
                                        <form action="{{ route('delete.about') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="about_id" value="{{$about->id}}">
                                            <button type="submit" class="btn btn-danger btn-sm mx-1">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection



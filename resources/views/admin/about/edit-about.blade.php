@extends('admin.master')
@section('title')
    Edit About
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Edit About</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update.about') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="about_id" value="{{$about->id}}">
                                <div class="form-floating mb-3">
                                    <textarea name="about_content" id="" cols="30" rows="30" class="form-control">{{ $about->about_content }}</textarea>
                                    <label>About Content</label>
                                </div>
                                <div class="mb-3">
                                    <input name="about_image" type="file" class="form-control">
                                    <img src="{{ asset($about->about_image) }}" alt="" width="100" height="100">
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
        </div>
    </main>
@endsection

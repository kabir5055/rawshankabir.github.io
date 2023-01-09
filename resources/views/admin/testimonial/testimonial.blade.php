@extends('admin.master')
@section('title')
    Testimonial
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Add Testimonial</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.testimonial') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <textarea name="testimonial_content" id="" cols="30" rows="30" class="form-control"></textarea>
                                    <label>Testimonial Content</label>
                                </div>
                                <div class="mb-3">
                                    <input name="testimonial_image" type="file" class="form-control">
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
                <h1 class="mt-4">Testimonial Content</h1>
                <div class="mb-4">
                    {{--                <h4>{{ session('massage') }}</h4>--}}
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Testimonial Content</th>
                                <th>Testimonial Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $testimonial->testimonial_content }}</td>
                                    <td>
                                        <img src="{{ asset($testimonial->testimonial_image) }}" alt="" width="100" height="100">
                                    </td>
                                    <td>{{ $testimonial->status ==1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('edit.testimonial',['id' => $testimonial->id]) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                                        @if($testimonial->status == 1)
                                            <a href="{{ route('testimonial.status',['id' => $testimonial->id]) }}" class="btn btn-warning btn-sm mx-1">Unpublished</a>
                                        @else
                                            <a href="{{ route('testimonial.status',['id' => $testimonial->id]) }}" class="btn btn-success btn-sm mx-1">Published</a>
                                        @endif
                                        <form action="{{ route('delete.testimonial') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="testimonial_id" value="{{$testimonial->id}}">
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




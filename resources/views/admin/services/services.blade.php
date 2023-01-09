@extends('admin.master')
@section('title')
    Services
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Add Services</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.services') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="services_name" placeholder="Services Name" />
                                    <label>Services Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="services_content" id="" cols="30" rows="30" class="form-control"></textarea>
                                    <label>Services Content</label>
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
                <h1 class="mt-4">Services</h1>
                <div class="mb-4">
                    <h4>{{ session('massage') }}</h4>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Service Name</th>
                                <th>Service Content</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($services as $service)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $service->services_name }}</td>
                                    <td>{{ $service->services_content }}</td>
                                    <td>{{ $service->status ==1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('edit.services',['id' => $service->id]) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                                        @if($service->status == 1)
                                            <a href="{{ route('status',['id' => $service->id]) }}" class="btn btn-warning btn-sm mx-1">Unpublished</a>
                                        @else
                                            <a href="{{ route('status',['id' => $service->id]) }}" class="btn btn-success btn-sm mx-1">Published</a>
                                        @endif
                                        <form action="{{ route('delete.services') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="service_id" value="{{$service->id}}">
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




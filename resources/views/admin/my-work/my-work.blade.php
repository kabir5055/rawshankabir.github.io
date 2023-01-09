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
                            <h3 class="text-center font-weight-light my-4">Add My-Work</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.my_work') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <input name="mywork_image" type="file" class="form-control">
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
                <h1 class="mt-4">My-Work List</h1>
                <div class="mb-4">
                    <h4>{{ session('massage') }}</h4>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>My-Work Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($works as $work)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        <img src="{{ asset($work->mywork_image) }}" alt="" width="100" height="100">
                                    </td>
                                    <td>{{ $work->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex">
                                        @if($work->status == 1)
                                            <a href="{{ route('my_work.status',['id' => $work->id]) }}" class="btn btn-warning btn-sm mx-1">Unpublished</a>
                                        @else
                                            <a href="{{ route('my_work.status',['id' => $work->id]) }}" class="btn btn-success btn-sm mx-1">Published</a>
                                        @endif
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





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
                            <h3 class="text-center font-weight-light my-4">Edit Services</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update.services') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="service_id" value="{{ $service->id  }}"/>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="services_name" value="{{ $service->services_name }}" />
                                    <label>Services Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="services_content" id="" cols="30" rows="30" class="form-control">{{ $service->services_content }}</textarea>
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
        </div>
    </main>
@endsection

@extends('admin.master')
@section('title')
    Team
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Add Team</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.team') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" id="" class="form-control"/>
                                    <label>Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="designation" id="" class="form-control"/>
                                    <label>Designation</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="facebook" id="" class="form-control"/>
                                    <label>Facebook Link</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="linkedIn" id="" class="form-control"/>
                                    <label>Linked in Link</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="github" id="" class="form-control"/>
                                    <label>GitHub Link</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="twitter" id="" class="form-control"/>
                                    <label>Twitter Link</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select name="category" id="" class="form-control">
                                        <option value="GD">GD</option>
                                        <option value="WDD">WDD</option>
                                        <option value="UXUI">UX/UI</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input name="team_image" type="file" class="form-control">
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





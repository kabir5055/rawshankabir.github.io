@extends('admin.master')
@section('title')
    Team Edit
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Team Edit</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update.team') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="team_id" value="{{ $team->id }}" id=""/>
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" value="{{ $team->name }}" id="" class="form-control"/>
                                    <label>Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="designation" value="{{ $team->designation }}" id="" class="form-control"/>
                                    <label>Designation</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="facebook" value="{{ $team->facebook }}" id="" class="form-control"/>
                                    <label>Facebook Link</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="linkedIn" value="{{ $team->linkedIn }}" id="" class="form-control"/>
                                    <label>Linked in Link</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="github" value="{{ $team->github }}" id="" class="form-control"/>
                                    <label>GitHub Link</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="twitter" value="{{ $team->twitter }}" id="" class="form-control"/>
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
                                    <img src="{{ asset($team->team_image) }}" alt="" width="100" height="100">
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






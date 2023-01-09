@extends('admin.master')
@section('title')
    Team Manage
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="container-fluid px-4">
                <h1 class="mt-4">Manage Team</h1>
                <div class="mb-4">
                    <h4>{{ session('massage') }}</h4>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Facebook Link</th>
                                <th>Linked in Link</th>
                                <th>GitHub Link</th>
                                <th>Twitter Link</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($teams as $team)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->designation }}</td>
                                    <td>{{ $team->facebook }}</td>
                                    <td>{{ $team->linkedIn }}</td>
                                    <td>{{ $team->github }}</td>
                                    <td>{{ $team->twitter }}</td>
                                    <td>{{ $team->category }}</td>
                                    <td>
                                        <img src="{{ asset($team->team_image) }}" alt="" width="100" height="100">
                                    </td>
                                    <td>{{ $team->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('edit.team',['id' => $team->id]) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                                        @if($team->status == 1)
                                            <a href="{{ route('status.team',['id' => $team->id]) }}" class="btn btn-warning btn-sm mx-1">Unpublished</a>
                                        @else
                                            <a href="{{ route('status.team',['id' => $team->id]) }}" class="btn btn-success btn-sm mx-1">Published</a>
                                        @endif
                                        <form action="{{ route('delete.team') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="team_id" value="{{$team->id}}">
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





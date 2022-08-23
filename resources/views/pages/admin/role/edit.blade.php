@extends('layouts.admin.main')
@section('content')

<div class="card">
    <div class="card-header">
        <h3>Edit Data {{ $title }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ route($baseRoute.'update', $data->id) }}" method="POST">
            @include('pages.admin.role.form')
            <button type="submit" class="btn btn-warning mt-3 btn-block w-100"><i class="align-middle" data-feather="edit"></i> Edit</button>
        </form>
    </div>
</div>

@endsection

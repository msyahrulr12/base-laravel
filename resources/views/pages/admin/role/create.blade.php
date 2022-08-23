@extends('layouts.admin.main')
@section('content')

<div class="card">
    <div class="card-header">
        <h3>Tambah Data {{ $title }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ route($baseRoute.'store') }}" method="POST">
            @include('pages.admin.role.form')
            <button type="submit" class="btn btn-primary mt-3 btn-block w-100"><i class="align-middle" data-feather="plus"></i> Tambah</button>
        </form>
    </div>
</div>

@endsection

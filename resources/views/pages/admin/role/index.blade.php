@extends('layouts.admin.main')
@section('content')

<div class="d-flex justify-content-between">
    <h1 class="h3 mb-3"><strong>Data {{ $title }}</strong></h1>
    <div class="align-items-center">
        <a href="{{ route($baseRoute.'create') }}" class="btn btn-primary">
            <i class="align-middle" data-feather="plus"></i>
            <span>Tambah</span>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">

                {{-- <h5 class="card-title mb-0">Latest Projects</h5> --}}
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th class="d-none d-xl-table-cell">Nama Role</th>
                        <th class="d-none d-xl-table-cell text-center w-25">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if (sizeof($datas) > 0)
                        @foreach ($datas as $data)
                            <tr>
                                <td class="d-none d-xl-table-cell">{{ $data->name }}</td>
                                <td class="d-none d-xl-table-cell">
                                    <div class="dropdown text-center">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                          Aksi
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="{{ route($baseRoute.'show', $data->id) }}">
                                                    <i class="align-middle" data-feather="eye"></i> <span class="align-middle">Detail</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route($baseRoute.'edit', $data->id) }}">
                                                    <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Edit</span>
                                                </a>
                                            </li>
                                            <li>
                                                <form action="{{ route($baseRoute.'destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a class="dropdown-item" href="#" data-id="{{ $data->id }}" data-route="{{ $baseRoute }}" onclick="this.closest('form').submit();return false;">
                                                        <i class="align-middle" data-feather="delete"></i> <span class="align-middle">Hapus</span>
                                                    </a>
                                                </form>
                                            </li>
                                        </ul>
                                      </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="d-none d-xl-table-cell text-center" colspan="2">Tidak ada Data</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

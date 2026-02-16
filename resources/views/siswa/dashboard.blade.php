@extends('layouts.siswa')

@section('content')
<div class="card mt-3">
    <div class="card-body d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Riwayat Laporan Saya</h5>
    </div>

    @if (session('success'))
    <div class="card-body">
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
    @endif

    <div class="card-body p-0 table-responsive">
        @include('siswa.partials.list-dashboard')
    </div>
    <div class="card-footer pb-0">
        {{ $laporan->links() }}
    </div>
</div>
@endsection
@extends('Layouts.app')
@section('title', 'Kategori - Tambah Kategori')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Kategori</h4>
            </div>
            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif
                <form action="{{ route('admin.jenis-hewan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label"> Nama Kategori <span class="text-danger">*</span></label>
                        <input type='text'
                            class="form-control @error('nama_kategori') is-invalid @enderror"
                            id="nama_kategori"
                            name="nama_kategori"
                            value="{{ old('nama_kategori') }}"
                            placeholder="Masukkan Nama Kategori"
                            required>
                        @error('nama_kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.jenis_hewan.index')}}"     class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    </div>
        </div>
    </div>
</div>
@extends('template')
@section('judul_halaman', 'Tambah Data Dosen')
@section('konten')

<body style="background: #fce4ec;">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-header" style="background-color: #f8bbd0; color: black; text-align: center;">
                        <h2>Tambah Data Dosen</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dosen.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">NIDN</label>
                                <input type="text" 
                                    class="form-control @error('nidn') is-invalid @enderror" 
                                    name="nidn" 
                                    value="{{ old('nidn') }}" 
                                    placeholder="Masukkan NIDN">
                                @error('nidn')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Dosen</label>
                                <input type="text" 
                                    class="form-control @error('nama') is-invalid @enderror" 
                                    name="nama" 
                                    value="{{ old('nama') }}" 
                                    placeholder="Masukkan Nama">
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" 
                                    class="form-control @error('alamat') is-invalid @enderror" 
                                    name="alamat" 
                                    value="{{ old('alamat') }}" 
                                    placeholder="Masukkan Alamat">
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn" style="background-color: #f48fb1; color: black;">Simpan</button>
                            <button type="reset" class="btn" style="background-color: #f06292; color: black;">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

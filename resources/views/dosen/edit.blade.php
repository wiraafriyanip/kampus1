@extends('template')
@section('judul_halaman', 'Edit Data Dosen')
@section('konten')

<body style="background: #fce4ec;">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-header" style="background-color: #f8bbd0; color: black; text-align: center;">
                        <h2>Edit Data Dosen</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            @method('PUT') 
                            <div class="form-group">
                                <label class="font-weight-bold">NIDN Dosen</label>
                                <input type="text" 
                                    class="form-control @error('nidn') is-invalid @enderror" 
                                    name="nidn" 
                                    value="{{ old('nidn', $dosen->nidn) }}" 
                                    placeholder="Masukkan NIDN Dosen">
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
                                    value="{{ old('nama', $dosen->nama) }}" 
                                    placeholder="Masukkan Nama Dosen">
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
                                    value="{{ old('alamat', $dosen->alamat) }}" 
                                    placeholder="Masukkan Alamat Dosen">
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

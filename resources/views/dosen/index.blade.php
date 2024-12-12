@extends('template')
@section('judul_halaman')
@section('konten')

<body style="background: #fce4ec;">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg rounded border-0">
                <div class="card-header" style="background-color: #f8bbd0; color: black; text-align: center;">
                    <h2>Daftar Nama Dosen</h2>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('dosen.create') }}" class="btn btn-md" style="background-color: #f48fb1; color: black;">Tambah Dosen</a>
                    </div>
                    <table class="table table-hover table-striped table-bordered">
                        <thead style="background-color: #f8bbd0; color: black;">
                            <tr class="text-center">
                                <th scope="col">NIDN</th>
                                <th scope="col">Nama Dosen</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dosens as $dosen)
                                <tr>
                                    <td class="text-center text-black">{{ $dosen->nidn }}</td>
                                    <td class="text-center text-black">{{ $dosen->nama }}</td>
                                    <td class="text-center text-black">{{ $dosen->alamat }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" class="d-inline">
                                            <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-sm" style="background-color: #f48fb1; color: black;">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm" style="background-color: #f06292; color: black;">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-danger">Data dosen belum tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-3 d-flex justify-content-center">
                        {{ $dosens->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
// Message with toastr
@if(session()->has('success'))
    toastr.success('{{ session('success') }}', 'Berhasil!');
@elseif(session()->has('error'))
    toastr.error('{{ session('error') }}', 'Gagal!');
@endif
</script>
</body>
@endsection

@extends('app')
@section('content')
    <div class="px-4 py-5">
        <div class="card">
            <div class="card-header">
                <div class="card-title pt-2">
                    <h4>Detail Employee</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col px-5 py-2">
                        <div class="row py-2">
                            <label for=""><strong>Nama : </strong><br>{{ $employee->nama }}</label>
                        </div>
                        <div class="row py-2">
                            <label for=""><strong> Tanggal Lahir :</strong><br>
                                {{ $employee->tgl_lahir }}</label>
                        </div>
                        <div class="row py-2">
                            <label for=""><strong> Telepon : </strong><br>
                                {{ $employee->telepon }}</label>
                        </div>
                        <div class="row py-2">
                            <label for=""><strong> Gender : </strong><br>
                                {{ $employee->gender }}</label>
                        </div>
                        <div class="row py-2">
                            <label for=""><strong> Pendidikan : </strong><br>
                                {{ $employee->pendidikan }}</label>
                        </div>
                        <div class="row py-2">
                            <label for=""><strong> Unit Kerja : </strong><br>
                                {{ $employee->unit_kerja }}</label>
                        </div>
                        <div class="row py-2">
                            <label for=""><strong> Jabatan : </strong><br>
                                {{ $employee->jabatan }}</label>
                        </div>
                    </div>
                    <div class="col px-5 py-2">
                        <div class="row py-2">
                            <label for=""><strong> Foto : </strong></label>
                            <br><img src="{{ asset('storage/file/' . $employee->foto) }}" alt="" class="img-fluid"
                                style="width: 40%">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="my-2">
                        <a href="{{ route('employee.index') }}" class="btn btn-danger"><i class="fa fa-backward"></i>
                            Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

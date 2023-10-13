@extends('layouts/header')

@section('container')
<div class="form-submit">
    <div class="form">
        <h3 class="mb-5 text-center fw-bold">Tambah Data Barang</h3>
        <form action="{{url('/tambahdatabarang')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="item_name" placeholder="laptop example">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" placeholder="Terpakai example">
            </div>
            <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi</label>
                <input type="text" class="form-control" id="kondisi" name="condition" placeholder="normal example">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="normal example">
            </div>
            <div class="mb-3">
                <label for="kelengkapan_lainya" class="form-label">Kelengkapan Lainya</label>
                <input type="text" class="form-control" id="kelengkapan_lainya" name="other_equipment" placeholder="cas + tas example">
            </div>
            <div class="btn-submit">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <a href="{{url('/databarang')}}" class="btn btn-outline-info">Kembali</a>
            </div>
        </form>
    </div>
</div>    
@endsection
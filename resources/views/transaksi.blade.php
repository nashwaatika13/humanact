@extends('layouts.main')

@section('container')
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="admin/images/icon/qr.jpeg" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">Transaksi</div>
                <h1 class="display-5 fw-bolder">Silahkan scan kode atau transfer pada nomor rekening yang tertera dibawah ini</h1>
                <ul>
                    <li>Dana: 085267788738</li>
                    <li>Gopay: 085267788738</li>
                    <li>ShopeePay: 085267788738</li>
                </ul>     
            </div>
        </div>
    </div>
    <form method="post" action="{{route('donasi.store')}}">
        {{csrf_field()}}
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
            <label for="inputname">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
            <label for="inputemail" class="form-label">Email</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea2" style="height: 100px" name="jumlah_donasi"></textarea>
            <label for="floatingTextarea2">Nominal</label>
        </div>
        <button type="submit" href="/makasih" class="btn btn-primary">Submit</button>
    <form>
</section>
@endsection
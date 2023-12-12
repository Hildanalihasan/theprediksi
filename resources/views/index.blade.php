@extends('partials.main')
@section('container')
<div class="container content-wrapper">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1500">
        <div class="col-6">
            <img src="{{asset('dist/img/logo.png')}}" alt="Logo Prediksi" class="img-fluid">
        </div>
        <div class="col-6 text-center">
            <h3>The Prediksi</h3>
            <p>The Prediksi adalah klub motor yang digagas oleh Andre Taulany dan Ronal Surapradja sejak tahun 2018, beranggotakan selebritas dan figur publik Indonesia sebagai sarana hiburan semata dan ajang silaturahmi. Klub ini terdiri dari anggota dengan berbagai profesi, namun didominasi oleh komedian. Meski awalnya digagas sebagai klub motor, klub ini kemudian merambah bidang-bidang lain seperti olahraga dan musik.</p>
        </div>
    </div>
    <br>
    <br>
    <div class="d-grid gap-2 col-4 mx-auto">
        <button type="button" class="btn btn-outline-info">Login</button>
    </div>
</div>
@endsection
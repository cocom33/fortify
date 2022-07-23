@extends('layouts.app', ['title' => 'Email Verification'])

@section('content')
    <div class="card">
        <div class="card-header">Login </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    Email sudah dikirim
                </div>
            @endif
            Untuk mengunjungi halaman ini kamu harus memverifikasi emailmu, jika email belum masuk silahkan klik untuk
            mengirim ulang email verifikasi

            <form action="/email/verification-notification" method="post" class="mt-2">
                @csrf
                <button type="submit" class="btn btn-primary">Kirim Ulang</button>
            </form>
        </div>
    </div>
@endsection

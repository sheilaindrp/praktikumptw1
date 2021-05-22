@extends('layouts.app_0310')

@section('title', 'Article')

@section('content')
    <div class="card mb-3">
        <img class="card-img-top" src="https://teknojurnal.com/wp-content/uploads/2016/03/feature-image-php-1280x720.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Pengertian Bahasa Pemrograman PHP</h5>
            <p class="card-text">
                Pengertian PHP
                PHP  (PHP: Hypertext Preprocessor) adalah sebuah bahasa pemrograman server side scripting yang bersifat open source.

                Sebagai sebuah scripting language, PHP menjalankan instruksi pemrograman saat proses runtime. Hasil dari instruksi tentu akan berbeda tergantung data yang diproses.

                PHP merupakan bahasa pemrograman server-side, maka script dari PHP nantinya akan diproses di server. Jenis server yang sering digunakan bersama dengan PHP antara lain Apache, Nginx, dan LiteSpeed.
            </p>
            <a href="{{ route('article') }}" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>
    </div>

    <div class="card mb-3">
        <img class="card-img-top" src="data:image/png;base64,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" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Pengertian LaravelP</h5>
            <p class="card-text">
                Laravel adalah salah satu Framework PHP yang paling populer dan paling banyak digunakan di seluruh dunia dalam membangun aplikasi web mulai dari proyek kecil hingga besar. Framework ini banyak digunakan oleh Web Developer karena kinerja, fitur, dan skalabilitas nya.

                Framework ini mengikuti struktur MVC (Model View Controller), MVC adalah sebuah metode aplikasi dengan memisahkan data dari tampilan berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.

                Dengan menggunakan struktur MVC maka membuat laravel mudah untuk dipelajari dan mempercepat proses pembuatan prototipe aplikasi web. Framework ini juga menyediakan fitur bawaan seperti otentikasi, mail, perutean, sesi, dan daftar berjalan.

                Framework ini banyak disukai oleh para web developer, Sesuai sedikit penjelasan diatas. Kelebihan lainnya yaitu Laravel sangat mudah untuk disesuaikan, Karena kemudahan itulah kamu dapat membuat suatu struktur proyek kamu sendiri yang memenuhi permintaan aplikasi web kamu.
            </p>
            <a href="{{ route('article') }}" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <h1 class="text-center mt-5">Kontak Kami</h1>
        </div>

        <div class="col-md-10">
            <p class="text-center mb-4">
                Kami siap membantu Anda! Jika memiliki pertanyaan, kritik, atau saran, silakan hubungi kami melalui informasi di bawah ini atau kirim pesan langsung melalui formulir.
            </p>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <h5>Informasi Kontak</h5>
                    <ul class="list-unstyled">
                        <li><strong>Alamat:</strong> Jl. Dieng No. 123, Malang, Jawat Timur</li>
                        <li><strong>Telepon:</strong> 0823-5210-1010 </li>
                        <li><strong>Email:</strong> support@ayopergi.com</li>
                        <li><strong>Jam Operasional:</strong> Senin – Jumat, 08:00 – 17:00 WIB</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h5>Formulir Kontak</h5>
                    <form action="#" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

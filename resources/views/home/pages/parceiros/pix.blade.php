@extends('home.layout.app')
@section('title', 'Confirmar pix')
@section('content')
    <section id="content-section" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="posts-block articles-box">
                <div class="title-section text-center">
                    <p style="color: yellowgreen">
                        <strong>Número reservado com sucesso, para confirmar a parceria efetue o
                            pagamento.
                        </strong>
                    </p>
                    <h1>
                        Faça o pagamento via QR-code, ou use a chave pix!
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>QR-CODE</h2>
                        <img src="{{ asset('home/images/qrcode.png') }}" width="150" alt="">
                    </div>
                </div>
                <div class="news-post article-post text-center" style="padding: 26px; color: #FFF">
                    <h2>Chave pix</h2>
                    <input type="text"
                        value="00020126360014br.gov.bcb.pix0114+559998131080052040000530398654047.005802BR5924EDILSON MIGUEL BRUSTOLON6010IMPERATRIZ62580520SAN2025033111354237550300017br.gov.bcb.brcode01051.0.06304BD4C'"
                        class="form-control">
                </div>

            </div>
        </div>
    </section>
@endsection

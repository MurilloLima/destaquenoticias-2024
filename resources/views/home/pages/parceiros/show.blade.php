@extends('home.layout.app')
@section('title', 'Parceiro')

@section('content')
    <section id="content-section" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="posts-block articles-box">
                <div class="title-section">
                    <h1>
                        Seja parceiro da destaque notícias
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if (session('msg'))
                            <div class="alert alert-success text-center">
                                {{ session('msg') }}
                            </div>
                        @endif
                    </div>
                </div>
                <form action="{{ route('home.pages.parceiro.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            Número {{ $id }} escolhido, para finalizar preencha os campos abaixo. <br>
                            <form action="{{ route('home.pages.parceiro.store') }}" id="contact-form" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name">Nome completo*</label>
                                        <input class="form-control" name="name" type="text" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="mail">Telefone*</label>
                                        <input class="form-control" name="fone" type="text" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="website">Whatsapp</label>
                                        <input class="form-control" name="wt" type="text" required>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane"></i> Comprar
                                </button>
                                <div id="msg" class="alert"></div>
                            </form>
                        </div>
                    </div>
                    <div class="news-post article-post" style="padding: 26px; color: #FFF">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

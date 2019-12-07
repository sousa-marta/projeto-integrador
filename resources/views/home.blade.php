@extends('layouts.mainTemplate')

@section('title')
    Oppy
@endsection

@section('content')
<!-- Banner -->
<section class="home-banner">
    <h1>Onde a esperança se reencontra</h1>
    <button type="button" class="btn btn-primary home-btn-big" onclick="location.href='register.php'">Faça parte dessa comunidade</button>
    <button type="button" class="btn btn-primary home-btn-sm" onclick="location.href='register.php'">Faça parte</button>
</section>

<!-- Texto Resumo Sobre o Site -->
<section class="home-summary">
    <div class="justify-content-around align-itens-center d-flex flex-column">
    <p class="indent">A Oppy foi criada em 2019 com o objetivo de dar a oportunidade para pessoas que emigraram obterem as habilidades técnicas e emocionais para entrar no mercado de trabalho no novo país e melhorar suas condições de vida.</p>
    <p class="indent">Contamos com o apoio de empresas e pessoas voluntárias para conectar essa mão-de-obra qualificada e cheia de energia e auxiliar a integração delas.</p>
    <button type="button" aria-label="Saiba mais sobre a Oppy" class="btn btn-primary align-self-center my-2" onclick="location.href='about.php'">Saiba mais</button>
    </div>
</section>

<!-- Cards Resumo Conteúdo do Site -->
<section class="container">
    <div class="row justify-content-around align-itens-center py-1 home-card-section">
    <article class="col-12 col-md-6 col-lg-4 pb-3">
        <div class="home-card d-flex flex-column align-items-center">
        <a href="about.php">
            <img src="img/home-card-whom.png" class="home-card-img" aria-hidden="true" alt="">
        </a>
        <div>
            <a href="about.php"><h4 class="card-title">Para você?</h4></a>
            <p class="card-text indent">Para qualquer pessoa que deseja se integrar à comunidade de um novo país, que busca obter informações dos passos para atingir esse objetivo, que precisa de apoio técnico, psicológico e jurídico.</p>
        </div>
        </div>
    </article>
    <article class="col-12 col-md-6 col-lg-4 pb-3">
        <div class="home-card d-flex flex-column align-items-center">
        <a href="courses.php" class="d-flex justify-content-center">  
            <img src="img/home-card-glasses2.png" class="home-card-img home-card-img-sm" aria-hidden="true" alt="">
            <img src="img/home-card-glasses.png" class="home-card-img home-card-img-md" aria-hidden="true" alt="">
        </a>
        <div>
            <a href="courses.php"><h4 class="card-title">Cursos</h4></a>
            <p class="card-text indent">Por meio de nossas parcerias, disponibilizamos cursos gratuitamente para imigrantes em áreas como: idiomas, estética, hotelaria, alimentação, cuidados, entreterimento, dentre outros.</p>
        </div>
        </div>
    </article>
    <article class="col-12 col-md-6 col-lg-4 pb-3">
        <div class="home-card d-flex flex-column align-items-center">
            <a href="support.php">
            <img src="img/home-card-help.png" class="home-card-img" alt="bóia de navio">
            </a>
            <div>
            <h4 class="card-title"><a href="support.php">Assistências</a></h4>
            <p class="card-text indent">Mudar de país nunca é simples, por isso, contamos com apoiadores que dão apoio psicológico, jurídico e profissional para encontrar o primeiro emprego no novo país. Buscamos ajudar a fazer essa transição ser a mais suave possível.</p>
            </div>
        </div>
    </article>
    </div>
</section>

<!-- Banner Chamada Apoiadores -->
<section class="home-banner-apoie">
    <div class="row justify-content-center align-items-center py-2">
    <h5 class="col-12 col-lg-3 text-center mt-2">Ajude-nos a ir mais longe!</h5>
    <button type="button" aria-label="Clique para saber mais sobre como ajudar como voluntário" class="btn btn-primary col-10 col-sm-5 col-md-5 col-lg-3" onclick="location.href='contribute.php'">Seja Voluntário</button>
    <button type="button" aria-label="Clique para saber mais sobre como apoiar como empresa" class="btn btn-primary col-10 col-sm-5 col-md-5 col-lg-3" onclick="location.href='contribute.php'">Seja Patrocinador</button>
    </div>
</section>
@endsection
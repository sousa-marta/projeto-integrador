@extends('layouts.templateOppy')

@section('title')
Apoio
@endsection

@section('content')
<!-- Banner -->
<section class="container p-3">      
    <div class="row banner-support-page text-center">
    <img class="img-fluid col-11 col-sm-6 col-lg-5" src="img/banner-apoio.svg" aria-hidden="true" alt="">
    <div class="col-sm-6">
        <h1>Ajudando você a recomeçar</h1>
    </div>
    </div>
</section>

<!-- Resumo 3 tipos de assistência -->
<section class="support-page-bg row justify-content-around align-items-center">
    <article class="col-lg-4">
    <div class="support-card">
        <h4 class="card-title support-anchor"><a href="#card-legal">Assistência Jurídica</h4></a>
    </div>
    </article>
    <article class="col-lg-4">
    <div class="support-card">
        <h4 class="card-title support-anchor"><a href="#card-professional">Apoio Profissional</h4></a>
    </div>
    </article>
    <article class="col-lg-4">
    <div class="support-card">
        <h4 class="card-title support-anchor"><a href="#card-psychologic">Apoio Psicológico</h4></a>
    </div>
    </article>
</section>

<!-- Assistência Jurídica -->
<section id ="card-legal" class="container">
    <div class="container p-3 text-center">
    <div class="row align-items-center justify-content-center">
        <div class="col-6 col-md-4">
        <img class="img-fluid" src="img/juridico.png" aria-hidden="true" alt="">
        </div>
        <h2 class="col-md-8">Apoio Jurídico</h2>
    </div>
    </div>  
    <div class="card text-white mb-3 card-bg-green mx-2">
    <div class="card-header">
        <h5 class="p-2">O que é?</h5>
    </div>
    <div class="card-body">
        <p class="p-2">A assessoria jurídica a refugiados e a imigrantes é fundamental devido ao alto grau de desconhecimento da legislação brasileira por parte dessas pessoas e da sociedade em geral.</p>
        <p class="p-2">Uma pessoa que passa a habitar um novo país sente necessidade de orientação em assuntos legais para poder se integrar devidamente ao ambiente e para ter consciência de seus direitos e deveres.</p>
        <p class="p-2">As questões tratadas pela Oppy já envolvem pedidos de naturalização e nacionalização, vistos, previdência, casamento, acesso à educação e à saúde, entre outras.</p>
        <p class="p-2">A Oppy possui um forte trabalho em rede, destacando-se as parcerias com Alto Comissariado das Nações Unidas para Refugiados (ACNUR), a Associação Antonio Vieira (ASAV) e o CIBAI Migrações. Ademais, integra o Fórum Permanente de Mobilidade Humana (FPMH), o Comitê Estadual de Atenção a Migrantes, Refugiados, Apátridas e Vítimas de Tráfico de Pessoas (COMIRAT-SP), e tem representantes junto ao Comitê de Acompanhamento pela Sociedade Civil sobre ações de Migração e Refúgio (CASC-Migrante) da Secretaria Nacional de Justiça.</p>
    </div>
    <button type="button" aria-label="Para saber mais sobre o apoio jurídico" class="btn btn-secondary align-self-center mb-3"  onclick="location.href='contact.php'">Entre em contato</button>
    </div>
</section>

<!-- Mentoria Profissional -->
<section id="card-professional" class="container">
<div class="container p-3 text-center">
    <div class="row align-items-center justify-content-center">
    <div class="col-6 col-md-4">
        <img class="img-fluid" src="img/mentoria.svg" aria-hidden="true" alt="">
    </div>
    <h2 class="col-md-8">Mentoria Profissional</h2>
    </div>
</div>
<div class="card text-white mb-3 card-bg-green mx-2">
    <div class="card-header">
    <h5 class="p-2">O que é?</h5>
    </div>
    <div class="card-body">
    <p class="p-2">O Programa de Mentores para Migrantes é uma iniciativa promovida pelo Alto Comissariado para as Migrações e desenvolvida, por todo o país, por um conjunto de parcerias locais.</p>
    </div>
</div>
<div class="card text-white mb-3 card-bg-green mx-2">
    <div class="card-header">
    <h5 class="p-2">Para que serve?</h5>
    </div>
    <div class="card-body">
    <p class="p-2">Promover experiências de troca, ajuda e apoio entre pessoas voluntárias e migrantes e/ou refugiados.</p>
    <p class="p-2">Permite o conhecimento mútuo, em que as diferenças se esbatem na resolução das mesmas dificuldades, preocupações e desafios do dia-a-dia.</p>
    <p class="p-2">As pessoas mentoradas:</p>
    <ul class="pl-4">
        <li>dispõem de uma oportunidade de resolver alguma necessidade ou apoio para concretizar um sonho;</li>
        <li>dispõem de um apoio voluntário na sua chegada e acolhimento ao país;</li>
        <li>decididas a regressar podem contar com apoio e orientação para encontrar soluções adequadas à construção de seu novo projeto pessoal e profissional.</li>
    </ul>
    </div>
</div>
<div class="card text-white mb-3 card-bg-green mx-2">
    <div class="card-header">
    <h5 class="p-2">O que pretende atingir?</h5>
    </div>
    <div class="card-body">
    <p class="p-2">Proporcionar apoio, acompanhamento, orientação para a resolução de dificuldades ou preocupações das pessoas recebidas pelo país;</p>
    <p class="p-2">Disponibilizar formas de ligação, acompanhamento ou apoio ao regresso dos emigrantes;</p>
    <p class="p-2">Promover a igualdade de oportunidades e sensibilizar para a riqueza da diversidade;</p>
    <p class="p-2">Promover o voluntariado, a cidadania participativa e a troca positiva de experiências;</p>
    <p class="p-2">Contribuir para o enriquecimento pessoal, social e organizacional das pessoas e entidades envolvidas.</p>
    </div>
    <button type="button" aria-label="Para saber mais sobre a mentoria profissional" class="btn btn-secondary align-self-center mb-3" onclick="location.href='contact.php'">Entre em contato</button>
</div>
</section>

<!-- Apoio Psicológico -->
<section id="card-psychologic" class="container">
<div class="container p-3 text-center">
    <div class="row align-items-center justify-content-center">
    <div class="col-6 col-md-4">
        <img class="img-fluid" src="img/psicologia2.png" aria-hidden="true" alt="">
    </div>
    <h2 class="col-md-8">Apoio Psicológico</h2>
    </div>
</div>
<div class="card text-white mb-3 card-bg-green mx-2">
    <div class="card-header">
    <h5 class="p-2">O que é?</h5>
    </div>
    <div class="card-body">
    <p class="p-2">Por meio de nossas parcerias com empresas e voluntários, fornecemos total apoio durante seu processo de migração. Compreendemos seus medos, suas preocupações e, acima de tudo, sua necessidade de lidar com a dor de estar longe daqueles que amam você.</p>
    </div>
</div>
<div class="card text-white mb-3 card-bg-green mx-2">
    <div class="card-header">
    <h5 class="p-2">Nossa metodologia</h5>
    </div>
    <div class="card-body">
    <p class="p-2">Trabalhamos com dezenas de especialistas na área de psicologia aplicada, um ramo da psicanálise que fornece ferramentas para encontrar estratégias com as quais você pode enfrentar seus desafios.</p>
    </div>
</div>
<div class="card text-white mb-5 card-bg-green mx-2">
    <div class="card-header">
    <h5 class="p-2">Psicologia Aplicada</h5>
    </div>
    <div class="card-body">
    <p class="p-2">Ramo da psicologia que visa fornecer solução para problemas práticos e cotidianos do comportamento humano, aumentar a qualidade de vida ou otimizar o funcionamento de grupos de pessoas. Dessa forma, utiliza o conhecimento acumulado, as várias técnicas e métodos desenvolvidos pela psicologia básica para atingir seu fim.</p>
    </div>
    <button type="button" aria-label="Saiba mais sobre o apoio psicológico" class="btn btn-secondary align-self-center mb-3" onclick="location.href='contact.php'">Entre em contato</button>
</div>
</section>
@endsection

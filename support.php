<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Apoio</title>
  <link rel="icon" href="img/favicon.ico">
  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include_once('header.php') ?>

    <!-- Breadcrumb  -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Apoio</li>
      </ol>
    </nav>

  <main>
    <!-- Banner -->
    <section class="container-fluid">      
      <div class="row apoio-banner text-center">
        <img class="img-fluid col-11 col-sm-6 col-lg-5" src="img/banner-apoio.svg" aria-hidden="true" alt="">
        <div class="col-sm-6">
          <h1>Ajudando você a recomeçar</h1>
        </div>
      </div>
    </section>

    <!-- Resumo 3 tipos de assistência -->
    <section class="background-apoio row justify-content-around align-itens-center">
      <article class="col-lg-4">
        <div class="home-card card-body">
          <a href="#support-legal"><h4 class="h4-apoio card-title">Assistência Jurídica</a></h4>
          <p class="text-white card-text text-center">Enim nisi officia incididunt sint qui. Lorem cupidatat voluptate incididunt et cupidatat laboris dolore eiusmod ad et veniam in magna.</p>
        </div>
      </article>
      <article class="col-lg-4">
        <div class="home-card card-body">
          <a href="#support-psychologic"><h4 class="h4-apoio card-title">Acompanhamento Psicológico</a></h4>
          <p class="text-white card-text text-center">Enim nisi officia incididunt sint qui. Lorem cupidatat voluptate incididunt et cupidatat laboris dolore eiusmod ad et veniam in magna.</p>
        </div>
      </article>
      <article class="col-lg-4">
        <div class="home-card card-body">
          <a href="#support-professional"><h4 class="h4-apoio card-title">Apoio Novo Trabalho</a></h4>
          <p class="text-white card-text text-center">Enim nisi officia incididunt sint qui. Lorem cupidatat voluptate incididunt et cupidatat laboris dolore eiusmod ad et veniam in magna.</p>
        </div>
      </article>
    </section>

    <!-- Assistência Jurídica -->
    <section>
    <div class="container p-3 text-center">
      <div class="row align-items-center justify-content-center">
        <div class="col-6 col-md-4">
          <img class="img-fluid" src="img/juridico.png" aria-hidden="true" alt="">
        </div>
        <div class="col-md-8">
          <h2>Conheça a assistência jurídica da Oppy</h2>
        </div>
      </div>
    </div>  
    <div class="card text-white mb-3 card-bg-green">
      <div class="card-header">
        <h5>O que é?</h5>
      </div>
      <div class="card-body">
        <p class="p-1">A assessoria jurídica a refugiados e a imigrantes é fundamental devido ao alto grau de desconhecimento da legislação brasileira por parte dessas pessoas e da sociedade em geral.</p>
        <p class="p-1">Uma pessoa que passa a habitar um novo país sente necessidade de orientação em assuntos legais para poder se integrar devidamente ao ambiente e para ter consciência de seus direitos e deveres.</p>
        <p>As questões tratadas pela Oppy já envolvem pedidos de naturalização e nacionalização, vistos, previdência, casamento, acesso à educação e à saúde, entre outras.</p>
        <p>A Oppy possui um forte trabalho em rede, destacando-se as parcerias com Alto Comissariado das Nações Unidas para Refugiados (ACNUR), a Associação Antonio Vieira (ASAV) e o CIBAI Migrações. Ademais, integra o Fórum Permanente de Mobilidade Humana (FPMH), o Comitê Estadual de Atenção a Migrantes, Refugiados, Apátridas e Vítimas de Tráfico de Pessoas (COMIRAT-SP), e tem representantes junto ao Comitê de Acompanhamento pela Sociedade Civil sobre ações de Migração e Refúgio (CASC-Migrante) da Secretaria Nacional de Justiça.</p>
      </div>
      <button type="button" aria-label="Para saber mais sobre o apoio jurídico" class="btn btn-secondary btn-lg align-self-center mb-3"  onclick="location.href='contact.php'">Entre em contato</button>
    </div>
    </section>

    <!-- Mentoria Profissional -->
    <section>
    <div class="container p-3 text-center">
      <div class="row align-items-center justify-content-center">
        <div class="col-6 col-md-4">
          <img class="img-fluid" src="img/mentoria.svg" aria-hidden="true" alt="">
        </div>
        <div class="col-md-8">
          <h2>Mentoria Profissional</h2>
        </div>
      </div>
    </div>
    <div class="card text-white mb-3 card-bg-green">
      <div class="card-header">
        <h5>O que é?</h5>
      </div>
      <div class="card-body">
        <p>O Programa de Mentores para Migrantes é uma iniciativa promovida pelo Alto Comissariado para as Migrações e desenvolvida, por todo o país, por um conjunto de parcerias locais.</p>
      </div>
    </div>
    <div class="card text-white mb-3 card-bg-green">
      <div class="card-header">
        <h5>Para que serve?</h5>
      </div>
      <div class="card-body">
        <p class="p-1">Promover experiências de troca, ajuda e apoio entre pessoas voluntárias e migrantes e/ou refugiados.</p>
        <p class="p-1">Permite o conhecimento mútuo, em que as diferenças se esbatem na resolução das mesmas dificuldades, preocupações e desafios do dia-a-dia.</p>
        <p class="p-1">As pessoas mentoradas:</p>
        <ul class="pl-5">
          <li>dispõem de uma oportunidade de resolver alguma necessidade ou apoio para concretizar um sonho;</li>
          <li>dispõem de um apoio voluntário na sua chegada e acolhimento ao país;</li>
          <li>decididas a regressar podem contar com apoio e orientação para encontrar soluções adequadas à construção de seu novo projeto pessoal e profissional.</li>
        </ul>
      </div>
    </div>
    <div class="card text-white mb-3 card-bg-green" >
      <div class="card-header">
        <h5>O que pretende atingir?</h5>
      </div>
      <div class="card-body">
        <p class="p-1">Proporcionar apoio, acompanhamento, orientação para a resolução de dificuldades ou preocupações das pessoas recebidas pelo país;</p>
        <p class="p-1">Disponibilizar formas de ligação, acompanhamento ou apoio ao regresso dos emigrantes;</p>
        <p class="p-1">Promover a igualdade de oportunidades e sensibilizar para a riqueza da diversidade;</p>
        <p class="p-1">Promover o voluntariado, a cidadania participativa e a troca positiva de experiências;</p>
        <p>Contribuir para o enriquecimento pessoal, social e organizacional das pessoas e entidades envolvidas.</p>
      </div>
      <button type="button" aria-label="Para saber mais sobre a mentoria profissional" class="btn btn-secondary btn-lg align-self-center mb-3" onclick="location.href='contact.php'">Entre em contato</button>
    </div>
    </section>
    
    <!-- Apoio Psicológico -->
    <section>
    <div class="container p-3 text-center">
      <div class="row align-items-center justify-content-center">
        <div class="col-6 col-md-4">
          <img class="img-fluid" src="img/psicologia2.png" aria-hidden="true" alt="">
        </div>
        <div class="col-md-8">
          <h2>Apoio Psicológico</h2>
        </div>
      </div>
    </div>
    <div class="card text-white mb-3 card-bg-green">
      <div class="card-header">
        <h5>O que é?</h5>
      </div>
      <div class="card-body">
        <p>Por meio de nossas parcerias com empresas e voluntários, fornecemos total apoio durante seu processo de migração. Compreendemos seus medos, suas preocupações e, acima de tudo, sua necessidade de lidar com a dor de estar longe daqueles que amam você.</p>
      </div>
    </div>
    <div class="card text-white mb-3 card-bg-green">
      <div class="card-header">
        <h5>Nossa metodologia</h5>
      </div>
      <div class="card-body">
        <p>Trabalhamos com dezenas de especialistas na área de psicologia aplicada, um ramo da psicanálise que fornece ferramentas para encontrar estratégias com as quais você pode enfrentar seus desafios.</p>
      </div>
    </div>
    <div class="card text-white mb-3 card-bg-green">
      <div class="card-header">
        <h5>Psicologia Aplicada</h5>
      </div>
      <div class="card-body">
        <p>Ramo da psicologia que visa fornecer solução para problemas práticos e cotidianos do comportamento humano, aumentar a qualidade de vida ou otimizar o funcionamento de grupos de pessoas. Dessa forma, utiliza o conhecimento acumulado, as várias técnicas e métodos desenvolvidos pela psicologia básica para atingir seu fim.</p>
      </div>
      <button type="button" aria-label="Saiba mais sobre o apoio psicológico" class="btn btn-secondary btn-lg align-self-center mb-3" onclick="location.href='contact.php'">Entre em contato</button>
    </div>
    </section>
  </main>
    
  <?php include_once('footer.php') ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
@extends('layouts.mainTemplate')

@section('content')

<main class="container-fluid">
    <!-- Formulário de Contato -->
    <h1 class="pages-title-bg d-flex justify-content-center align-items-center">Contato</h1>
    <div class="row align-self-center justify-content-center m-4">
    <form action="" method="post" class="card col-11 col-sm-8 col-lg-6 contact-form-design">
      <p class="text-center">Caso não encontre a resposta para a sua pergunta abaixo, não hesite em nos contatar usando o formulário ou diretamente pelo e-mail: <a class="contact-email" href="mailto:">contato@oppy.com.br</a></p>
      <div class="col-lg-8 align-self-center mt-2">
      <div class="form-group">
        <label for="contactName"><h5>Nome</h5></label>
        <input type="text" class="form-control" name="contactName" id="contactName" placeholder="Nome" required>
      </div>
      <div class="form-group">
        <label for="contactEmail"><h5>E-mail</h5></label>
        <input type="text" class="form-control" name="contactEmail" id="contactEmail" placeholder="E-mail" required>
      </div>
      <label for="contactSubject"><h5>Assunto</h5></label>
      <div class="form-group">
        <select class="col-lg-12 form-control" name="contactSubject" id="contactSubject">
          <option value="">Selecione o assunto</option>;
          <?php
          foreach ($subjects ?? '' as $subject) {
            echo "<option value='$subject'>$subject</option>";
            $i++;
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="userPassword"><h5>Mensagem</h5></label>
        <textarea class="form-control" id="contactMessage" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary col-lg-12">Enviar</button>
      </div>
    </form>
    </div>
  
    <!-- Perguntas e Respostas -->
    <h1 class="pages-title-bg d-flex justify-content-center align-items-center m-0">FAQ</h1>
    
    <div class="accordion px-5 pb-5 questions-bg" id="questionsTopicOne">
      <h3 class="py-4 questions-subject">Tópico 1</h3>
    <div class="card">
      <div class="card-header border-0 d-flex justify-content-between align-items-center" id="questionOne">
        <h5 class="m-0 questions-color">Pergunta 1</h5>
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <img src="img/plus-sign-to-add.svg" class="plus-sign" alt="">
        </button>
      </div>
      <div id="collapseOne" class="collapse show" aria-labelledby="questionOne" data-parent="#questionsTopicOne">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga temporibus ducimus sequi reprehenderit dignissimos facere asperiores commodi ut magnam ex exercitationem a similique nostrum culpa fugiat, iusto maxime ipsa.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header border-0 d-flex justify-content-between align-items-center" id="questionTwo">
        <h5 class="mb-0 questions-color">Pergunta 2</h5>
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <img src="img/plus-sign-to-add.svg" class="plus-sign" alt="">
        </button>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="questionTwo" data-parent="#questionsTopicOne">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga temporibus ducimus sequi reprehenderit dignissimos facere asperiores commodi ut magnam ex exercitationem a similique nostrum culpa fugiat, iusto maxime ipsa.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header border-0 d-flex justify-content-between align-items-center" id="questionThree">
        <h5 class="mb-0 questions-color">Pergunta 3</h5>
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <img src="img/plus-sign-to-add.svg" class="plus-sign" alt="">
        </button>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="questionThree" data-parent="#questionsTopicOne">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga temporibus ducimus sequi reprehenderit dignissimos facere asperiores commodi ut magnam ex exercitationem a similique nostrum culpa fugiat, iusto maxime ipsa.
        </div>
      </div>
    </div>
    </div>
  </main>

@endsection
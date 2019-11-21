<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Página do Administrador</title>
  <link rel="icon" href="img/favicon.ico">
  <!-- Fonte -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Header -->
  <?php include_once('header.php'); ?>

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Administrador</li>
    </ol>
  </nav>
  
  <main>

		<!-- botões para adicionar empresa e voluntário -->
		<div class="container">
			<nav class="row d-flex justify-content-center m-2">	
				<button type="button" class="col-md-5 col-lg-3 btn btn-secondary m-2"><i class="fa fa-building" aria-hidden="true"></i> +Empresa</button>
				<button type="button" class="col-md-5 col-lg-3 btn btn-secondary m-2"><i class="fa fa-user-circle-o" aria-hidden="true"></i> +Voluntário</button>
				
				<!-- <button type="button" class="col-md-5 col-lg-3 btn btn-secondary m-2"><span class="fa">&#xf0b1;</span> +Voluntário</button> -->
			</nav>
		</div>

    <!-- gerenciamento dos cursos -->
    <section class="admin-course-section admin-tables-section">

			<div class="table-responsive">
        <div class="d-flex justify-content-start align-items-center mb-1">
          <h2>CURSOS</h2>
          <button type="button" class="btn btn-secondary ml-3 p-2"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></button>
        </div>
        <table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col" class="d-none d-sm-table-cell">Categoria</th>
							<th scope="col" class="d-none d-sm-table-cell">Empresa</th>
							<th scope="col" class="d-none d-sm-table-cell">Vagas</th>
							<th scope="col" class="d-none d-sm-table-cell">Inscritos</th>
							<th scope="col" class="d-none d-sm-table-cell">Encerramento Inscrições</th>
							<th scope="col">Estado</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Curso de Atendente</td>
							<td class="d-none d-sm-table-cell">Hotelaria</td>
							<td class="d-none d-sm-table-cell">evolke Treinamentos</td>
							<td class="d-none d-sm-table-cell">50</td>
							<td class="d-none d-sm-table-cell">46</td>
							<td class="d-none d-sm-table-cell">20/12/2019</td>
							<td>Aberto</td>
							<td class="d-flex justify-content-start align-items-center">
								<button type="button" class="admin-btn-table">editar</button>
								<button type="button" class="admin-btn-table">fechar</button>
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Curso de Garçom</td>
							<td class="d-none d-sm-table-cell">Serviços Gerais</td>
							<td class="d-none d-sm-table-cell">Restaurando Cursos</td>
							<td class="d-none d-sm-table-cell">100</td>
							<td class="d-none d-sm-table-cell">12</td>
							<td class="d-none d-sm-table-cell">10/12/2019</td>
							<td>Fechado</td>
							<td class="d-flex justify-content-start align-items-center">
								<button type="button" class="admin-btn-table">editar</button>
								<button type="button" class="admin-btn-table">fechar</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
    </section>
  
    <!-- gerenciamento das vagas -->
			<section class="admin-tables-section">
				<div class="table-responsive">
          <div class="d-flex justify-content-start align-items-center mb-1">
            <h2>OPORTUNIDADES</h2>
            <button type="button" class="btn btn-secondary ml-3 p-2"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></button>
          </div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col" class="d-none d-sm-table-cell">Categoria</th>
								<th scope="col" class="d-none d-sm-table-cell">Empresa</th>
								<th scope="col" class="d-none d-sm-table-cell">Vagas</th>
								<th scope="col" class="d-none d-sm-table-cell">Inscritos</th>
								<th scope="col">Estado</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Vaga de Atendente</td>
								<td class="d-none d-sm-table-cell">Hotelaria</td>
								<td class="d-none d-sm-table-cell">Hotel Blue Tree</td>
								<td class="d-none d-sm-table-cell">1</td>
								<td class="d-none d-sm-table-cell">30</td>
								<td>Aberta</td>
								<td class="d-flex justify-content-start align-items-center">
									<button type="button" class="admin-btn-table">editar</button>
									<button type="button" class="admin-btn-table">fechar</button>
							</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Vaga de Garçom</td>
								<td class="d-none d-sm-table-cell">Serviços Gerais</td>
								<td class="d-none d-sm-table-cell">Habib's</td>
								<td class="d-none d-sm-table-cell">2</td>
								<td class="d-none d-sm-table-cell">12</td>
								<td>Fechada</td>
								<td class="d-flex justify-content-start align-items-center">
									<button type="button" class="admin-btn-table">editar</button>
									<button type="button" class="admin-btn-table">fechar</button>
							</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Vaga Padeiro Jabaquara</td>
								<td class="d-none d-sm-table-cell">Serviços Gerais</td>
								<td class="d-none d-sm-table-cell">Padaria Jabaquara</td>
								<td class="d-none d-sm-table-cell">1</td>
								<td class="d-none d-sm-table-cell">22</td>
								<td>Aberta</td>
								<td class="d-flex justify-content-start align-items-center">
									<button type="button" class="admin-btn-table">editar</button>
									<button type="button" class="admin-btn-table">fechar</button>
							</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
  
  </main>

  <!-- FOOTER -->
  <?php include_once("footer.php"); ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
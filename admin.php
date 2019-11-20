<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Página do Usuário</title>
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
    <!-- botões para adicionar cursos ou oportunidades -->
    <nav class="d-flex justify-content-end">
      <button type="button" class="btn btn-secondary m-3"><span class="fa">&#xf19d;</span></i> +Cursos</button>
      <button type="button" class="btn btn-secondary m-3"><span class="fa">&#xf0b1;</span></i> +Oportunidades</button>
    </nav>
  
    <!-- gerenciamento dos cursos -->
    <section class="admin-course-section p-5">

			<div class="container table-responsive">
				<h2>CURSOS</h2>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col">Categoria</th>
							<th scope="col">Empresa</th>
							<th scope="col">Vagas</th>
							<th scope="col">Inscritos</th>
							<th scope="col">Encerramento Inscrições</th>
							<th scope="col">Estado</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Curso de Atendente</td>
							<td>Hotelaria</td>
							<td>evolke Treinamentos</td>
							<td>50</td>
							<td>46</td>
							<td>20/12/2019</td>
							<td>Aberto</td>
							<td>
								<button type="button" class="admin-btn-table">editar</button>
								<button type="button" class="admin-btn-table">fechar</button>
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Curso de Garçom</td>
							<td>Serviços Gerais</td>
							<td>Restaurando Cursos</td>
							<td>100</td>
							<td>12</td>
							<td>10/12/2019</td>
							<td>Fechado</td>
							<td>
								<button type="button" class="admin-btn-table">editar</button>
								<button type="button" class="admin-btn-table">fechar</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
    </section>
  
    <!-- gerenciamento das vagas -->
			<section class="p-5">
				<div class="container table-responsive">
					<h2>OPORTUNIDADES</h2>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">Categoria</th>
								<th scope="col">Empresa</th>
								<th scope="col">Vagas</th>
								<th scope="col">Inscritos</th>
								<th scope="col">Estado</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Vaga de Atendente</td>
								<td>Hotelaria</td>
								<td>Hotel Blue Tree</td>
								<td>1</td>
								<td>30</td>
								<td>Aberta</td>
								<td>
									<button type="button" class="admin-btn-table">editar</button>
									<button type="button" class="admin-btn-table">fechar</button>
							</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Vaga de Garçom</td>
								<td>Serviços Gerais</td>
								<td>Habib's</td>
								<td>2</td>
								<td>12</td>
								<td>Fechada</td>
								<td>
									<button type="button" class="admin-btn-table">editar</button>
									<button type="button" class="admin-btn-table">fechar</button>
							</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Vaga Padeiro Jabaquara</td>
								<td>Serviços Gerais</td>
								<td>Padaria Jabaquara</td>
								<td>1</td>
								<td>22</td>
								<td>Aberta</td>
								<td>
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
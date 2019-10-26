<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <title>Contribua</title>
</head>
<body>
    <?php include_once('header.php'); ?>

    <!-- Navegação Breadcrumb  -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contribua</li>
        </ol>
    </nav>

    <main>
        <!-- Banner -->
        <section class="contribua-banner">
            <h1>Contribua</h1>
        </section>

        <!-- Card Textos -->
        <section class="contribua-background">
            <div class="row justify-content-around">
                <article class="col-3">
                    <div class="home-card d-flex flex-column justify-content-center">
                        <div class="card-body">
                            <h4 class="card-title">Auxílio como Pessoa</h4>
                                <p class="card-text">Você pode contribuir oferecendo um curso ou doando um valor para ajudar a manter nossa estrutura e nossa equipe!</p>   
                                <button type="button" class="btn" onclick="location.href='contribute-people.php'">Saiba mais</button>
                        </div>
                    </div>
                </article>
                <article class="col-3">
                    <div class="home-card d-flex flex-column">
                        <div class="card-body">
                            <h4 class="card-title">Auxílio como Empresa</h4>
                                <p class="card-text">Como empresa, pode nos patrocinar em eventos, investir diretamente ou desenvolver campanhas para captação de recursos.</p>
                                <button type="button" class="btn" onclick="location.href='contribute-enterprise.php'">Saiba mais</button>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    <?php include_once('footer.php'); ?>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>
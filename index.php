<?php
require_once "model/Livro.php";

if(isset($_GET["id"])){
    $livro = Livro::getPorId($_GET["id"]);
    //print_r($bebida);
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ressaca Literária - Página Inicial</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./styles/base.min.css" />
    <link rel="stylesheet" href="./styles/index.min.css" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <article class="jumbotron">
        <figure class="jumbotronFigure" id="jumbotronFigure">
            <img src="./assets/svg/books.svg" alt="Ilustração de um livro" />
        </figure>
        <div class="jumbotronContainer">
            <div class="jumbotronContainerBefore"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <header class="jumbotronHeader">
                            <small class="jumbotronCategory" id="jumbotronCategory">
                                Seja bem-vindo ao
                            </small>
                            <h1 class="jumbotronTitle" id="jumbotronTitle">
                                Ressaca Literária
                            </h1>
                        </header>
                        <div class="jumbotronBody" id="jumbotronBody">
                            <p>
                                O maior site de agenda de livros do Brasil! Conosco, fica fácil organizar sua vida de bookstan!
                                <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque consectetur nam
                                accusantium fugiat autem, ipsa non pariatur quibusdam architecto voluptate aliquam et as -->
                            </p>
                        </div>
                        <footer class="jumbotronFooter" id="jumbotronFooter">
                            <a class="btn btn-primary" href="#saiba-mais" role="button">
                                Saber mais
                            </a>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <section id="saiba-mais" class="cards justify-content-center">
        <div class="card contact">
            <div class="icon">
                <img src="assets/svg/booklist.svg" alt="Ilustração de um personagem lendo um livro.">
            </div>
            <h3>Registre suas leituras</h3>
            <span>Tenha total controle do seu cronograma literário.</span>
            <a class="btn btn-primary" href="#" role="button">
                Saber mais
            </a>
        </div>
        <div class="card shop">
            <div class="icon">
                <img src="assets/svg/books.svg" alt="Ilustração de um livro.">
            </div>
            <h3>Atualize-se</h3>
            <span>Faça a atualização dos seus livros a qualquer hora!</span>
            <a class="btn btn-primary" href="#" role="button">
                Saber mais
            </a>
        </div>
        <div class="card about">
            <div class="icon">
                <img src="assets/svg/bookstair.svg"
                    alt="Ilustração de um personagem subindo uma escada com livros empilhados.">
            </div>
            <h3>Simples,rápido e bonito</h3>
            <span>Pensamos em tudo pra que sua experiência seja a melhor possível.</span>
            <a class="btn btn-primary" href="#" role="button">
                Saber mais
            </a>
        </div>
    </section>
    <section class="spikes" id="separator-info">
        <h3>
            MINHA LISTA
        </h3>
        <p>Aqui estão os livros que você registrou até agora! </p>



        
    </section>
    <main class="container-fluid">
        <h5>
            Cadastre um livro
        </h5>

        <!-- onsubmit="return handleSubmit(event)" -->

        <div class="create-form">
            <form action="ws/salvar-livro.php" class="register-form" id="register-form">
                <div class="row ">
                    <div class="col-sm-12 col-lg-6 mb-lg-5 mb-3">
                        <label for="title-input">Título</label>
                        <input type="text" name="titulo" id="title-input" class="form-control form-control-lg"
                            placeholder="Título do livro" aria-label="Título" value="<?= isset($livro) ? $livro->getTitulo() : ''; ?>" required>
                    </div>
                    <div class="col-sm-12 col-lg-6 mb-lg-5 mb-3">
                        <label for="author-name-input">Autor</label>
                        <input type="text" name="autor" id="author-name-input" class="form-control form-control-lg"
                            placeholder="Nome do autor" aria-label="Nome do autor" value="<?= isset($livro) ? $livro->getAutor() : ''; ?>" required>
                    </div>
                </div>
                <div class="row ">

                    <!-- <div class="col-sm-12 col-lg-6 mb-lg-5 mb-3">
                        <label for="date-input">Data de publicação</label>
                        <input type="date" name="publicacao" id="date-input" class="form-control form-control-lg"
                            aria-label="Data de publicação" required>
                    </div> -->

                    <div class="col-sm-12 col-lg-6 mb-lg-5 mb-3">
                        <label for="editora-input">Editora</label>
                        <input type="text" name="editora" id="editora-input" class="form-control form-control-lg"
                            placeholder="Editora do livro" aria-label="Editora do livro" value="<?= isset($livro) ? $livro->getEditora() : ''; ?>" required>
                    </div>

                    <div class="col-sm-12 col-lg-6 mb-lg-5 mb-3">
                        <label for="gender-input">Gênero</label>
                        <input type="text" name="genero" id="gender-input" class="form-control form-control-lg"
                            placeholder="Gênero do livro" aria-label="Gênero do livro" value="<?= isset($livro) ? $livro->getGenero() : ''; ?>" required>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-12 col-lg-6 mb-lg-5 mb-3">
                        <label for="edition-input">Edição</label>
                        <input type="number" name="edicao" id="edition-input" class="form-control form-control-lg"
                            placeholder="Edição do livro" aria-label="Edição do livro" value="<?= isset($livro) ? $livro->getEdicao() : ''; ?>" required min="1">
                    </div>
                    <div class="col-sm-12 col-lg-6 mb-lg-5 mb-3">
                        <label for="quantity-input">Quantidade de páginas</label>
                        <input type="number" name="paginas" id="quantity-input" class="form-control form-control-lg"
                            placeholder="Quantidade de páginas" aria-label="Quantidade de páginas" value="<?= isset($livro) ? $livro->getPaginas() : ''; ?>" required min="1">
                    </div>
                </div>
<!--                 
                <div class="mb-lg-5 mb-3">
                    <label for="banner-input" class="form-label">Foto da capa</label>
                    <input class="form-control form-control-lg" name="capa" type="file" id="banner-input" required>
                </div> -->

                <input type="hidden" name="id" value="<?= isset($livro) ? $livro->getId() : ''; ?>">

                <input id="submit-button" type="submit" class="btn btn-primary mb-3" value="Cadastrar livro" />
            </form>
        </div>


<section class="lista">
<?php
        $livros = Livro::listarTodos();
        //print_r($bebidas);
        foreach($livros as $b):
    ?>
    <div class="card card-w booksize
            d-inline-block m-2 text-left">
        <div class="card-body">
            <!-- Código "mesclado" -->
            <h5 class="card-title">
                <?php echo $b->getTitulo(); ?>
            </h5>
            <h6 class="card-subtitle">
                <?= $b->getAutor(); ?>
            </h6>
            <p class="card-text">
                <?= $b->getGenero(); ?>
            </p>
            <p class="card-text">
                <?= $b->getEdicao() . "º edição"; ?>
            </p>
            <p class="card-text">
                <?= "Editora " . $b->getEditora(); ?>
            </p>
            <p class="card-text">
                <?= "pág: " . $b->getPaginas(); ?>
            </p>
<a href="index.php?id=<?= $b->getId(); ?>"
    class="card-link btn btn-warning">
    Editar
</a>
<a
    onclick="deletar(<?= $b->getId(); ?>)"
    class="card-link btn btn-secondary">
    Deletar
</a>
        </div>
    </div>
   <?php 
   endforeach;
   ?>
</section>



    </main>
    <footer>
        <div class="row justify-content-around mb-3">
            <h6>Beatriz Rayanne</h6>
            <h6>Francisco Roberto</h6>
            <h6>Jaciene de Lima</h6>
            <h6>Letícia Araújo</h6>
            <h6>Lucas Feliciano</h6>
            <h6>Mateus de Farias</h6>
        </div>
        <h6 class="copyright">Ressaca Literária &copy; 2021 - Todos os direitos reservados.</h6>
    </footer>
    <div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="submitModal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="submitModal-label">Sucesso!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Livro cadastrado com sucesso
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    <script src="./scripts/index.js"></script>
</body>

</html>
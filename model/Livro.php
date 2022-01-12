<?php

use Livro as GlobalLivro;

require_once "Conexao.php";

class Livro{

    private $id;
    private $titulo;
    private $autor;
    private $genero;
    private $edicao;
    private $editora;
    private $paginas;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
        return $this;
    }

    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
        return $this;
    }

    public function getGenero(){
        return $this->genero;
    }
    public function setGenero($genero){
        $this->genero = $genero;
        return $this;
    }

    public function getEdicao(){
        return $this->edicao;
    }
    public function setEdicao($edicao){
        $this->edicao = $edicao;
        return $this;
    }

    public function getEditora(){
        return $this->editora;
    }
    public function setEditora($editora){
        $this->editora = $editora;
        return $this;
    }

    public function getPaginas(){
        return $this->paginas;
    }
    public function setPaginas($paginas){
        $this->paginas = $paginas;
        return $this;
    }


    
        public function salvar(){
            $tabela = "livros";
            $colunas = "titulo, autor, genero, edicao, editora, paginas";
            $valores = $this->getValores();
            Conexao::insert($tabela, $colunas, $valores);
    
        // public function salvar(){
        //     $tabela = "livros";
        //     $colunas = "titulo, autor, genero, edicao, paginas, publicacao, capa";
        //     $valores = "'".$this->titulo."', '".$this->autor."' ,'".$this->genero."' ,".$this->edicao." ,".$this->paginas." ,".$this->publicacao." ,".$this->capa;
        //     Conexao::insert($tabela, $colunas, $valores);
    
        echo $valores;

        // $valores = "'{$this->titulo}',
        // '{$this->autor}',
        // '{$this->genero}',
        // '{$this->edicao}', 
        // '{$this->paginas}',
        // '{$this->publicacao}',
        // '{$this->capa}'";
        }

        public static function listarTodos(){
            $tabela = "livros";
            $colunas = "id, titulo, autor, genero, edicao, editora, paginas";
            $dados = Conexao::select($tabela, $colunas);
            $livros = [];
            foreach($dados as $d){
                $b = new Livro();
                $b->id = $d["id"];
                $b->titulo = $d["titulo"];
                $b->autor = $d["autor"];
                $b->genero = $d["genero"];
                $b->edicao = $d["edicao"];
                $b->editora = $d["editora"];
                $b->paginas = $d["paginas"];
                $livros[] = $b;
            }
            return $livros;
        }

        public static function getPorId($id){
            $tabela = "livros";
            $colunas = "id, titulo, autor, genero, edicao, editora, paginas";
            $dados = Conexao::selectById(
                $tabela, 
                $colunas, 
                $id
            );
            foreach($dados as $d){
                $b = new Livro();
                $b->id = $d["id"];
                $b->titulo = $d["titulo"];
                $b->autor = $d["autor"];
                $b->genero = $d["genero"];
                $b->edicao = $d["edicao"];
                $b->editora = $d["editora"];
                $b->paginas = $d["paginas"];
                return $b;
            }
            return null;
        }

        public function editar(){
            $tabela = "livros";
            $parametros = "titulo='". $this->titulo ."',
             autor='". $this->autor ."',
             genero='". $this->genero ."',
             edicao=". $this->edicao .",
             editora='". $this->editora ."',
             paginas=". $this->paginas;
    
            Conexao::update($tabela, $parametros,
            $this->id);
        }

        public static function deletar($id){
            Conexao::delete("livros", $id);
        }

        private function getValores(){
            $titulo = $this->titulo;
            $autor = $this->autor;
            $genero = $this->genero;
            $edicao = $this->edicao;
            $editora = $this->editora;
            $paginas = $this->paginas;

            // $valores = "'". $titulo ."', '". $autor ."', '". $genero ."', ". $edicao .", ". $paginas;
            $valores = "'". $titulo ."', '". $autor ."', '". $genero ."', ". $edicao .", '". $editora . "', " . $paginas;
            return $valores;

        }

}
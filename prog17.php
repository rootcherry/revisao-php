<!-- CREATE TABLE livros (
    isbn varchar(13),
    titulo varchar(80) NOT NULL,
    autor varchar(80) NOT NULL,
    paginas smallint NOT NULL,
    preco float NOT NULL
);

INSET INTO livros VALUES ('123', 'PHP', 'John', 320, 73);
INSET INTO livros VALUES ('456', 'JavaScript', 'Jane', 400, 98);
INSET INTO livros VALUES ('789', 'MySQL', 'Doe', 500, 58); -->

<?php
    $servidor = "localhost";
    $usuario = "john";
    $senha = "root";
    $banco = "test";
    $con = new mysqli($servidor, $usuario, $senha, $banco);
        $res = $con->query("SELECT titulo, autor FROM livros");
        $num_linhas = $res->num_rows;
        for ($i = 0; $i < $num_linhas; $i++) {
            $dados = $res->fetch_row();
            $titulo = $dados[0];
            $autor = $dados[1];
            echo "$titulo - $autor <br>";
        }
    $con->close();
?>

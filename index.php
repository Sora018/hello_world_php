<!DOCTYPE html>
<html>
</head>
<body>
    <?php
    echo "Hello World";
    echo "<br>";
    class Personagem {
        public $nome;
        public $vida;
        public $fome;
        public $sanidade;

        function __construct($nome, $vida, $fome, $sanidade) {
            $this->nome = $nome;
            $this->vida = $vida;
            $this->fome = $fome;
            $this->sanidade = $sanidade;
        }
        function get_nome() {
            return $this->nome;
        }
        function get_vida() {
            return $this->vida;
        }
                function get_fome() {
            return $this->fome;
        }
                function get_sanidade() {
            return $this->sanidade;
        }
    }
    $Per = new Personagem("Wilson","Vida: 150","Fome: 150","Sanidade: 200");
    echo $Per->get_nome();
    echo "<br>";
    echo $Per->get_vida();
    echo "<br>";
    echo $Per->get_fome();
    echo "<br>";
    echo $Per->get_sanidade();
    ?>
</body>
</html>
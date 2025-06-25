<?php   
class Usuario{
    public $id;
    public $nome;
    public $email;
    public $senha;

    public function __construct ($nome,$email,$senha){
        $this.$nome = $nome;
        $this.$senha = $senha;
        $this.$email = $email;

    }
    public function setNome($lnome){
        $this->nome=$lnome;
    }
}
?>
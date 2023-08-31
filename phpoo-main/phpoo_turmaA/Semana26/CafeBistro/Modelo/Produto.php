<?php

class Produto {

    private ?int $id;
    private string $tipo;
    private string $nome;
    private string $descricao;
    private string $imagem;
    private float $preco;

public function __construct(int $id,
                            string $tipo,
                            string $nome,
                            string $descricao,
                            string $imagem = "logo-serenatto.png",
                            float $preco)

{
    $this->id = $id;
    $this->tipo = $tipo;
    $this->nome = $nome;
    $this->descricao = $descricao;
    $this->imagem = $imagem;
    $this->preco = $preco;
}


    /**
     * Get the value of id
     *
     * @return ?int
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param ?int $id
     *
     * @return self
     */
    public function setId(?int $id): self {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of tipo
     *
     * @return string
     */
    public function getTipo(): string {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @param string $tipo
     *
     * @return self
     */
    public function setTipo(string $tipo): self {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * Get the value of nome
     *
     * @return string
     */
    public function getNome(): string {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param string $nome
     *
     * @return self
     */
    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    /**
     * Get the value of descricao
     *
     * @return string
     */
    public function getDescricao(): string {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @param string $descricao
     *
     * @return self
     */
    public function setDescricao(string $descricao): self {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * Get the value of imagem
     *
     * @return string
     */
    public function getImagem(): string {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     *
     * @param string $imagem
     *
     * @return self
     */
    public function setImagem(string $imagem): self {
        $this->imagem = $imagem;
        return $this;
    }

    /**
     * Get the value of preco
     *
     * @return float
     */
    public function getPreco(): float {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @param float $preco
     *
     * @return self
     */
    public function setPreco(float $preco): self {
        $this->preco = $preco;
        return $this;
    }
}
?>


Quando não sabemos o que vai ser adicionado à um parametro, colocamos um ponto de interrogação para dizer que não sabemos qual vai ser, a ferramenta vai simplesmente seguir o fluxo, continuar
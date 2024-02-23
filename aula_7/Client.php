<?php
class Client
{
    private string $cpf;
    private string $fullname;
    private string $phone;
    private bool $status;

    private array $fillable;

    public function __construct(string $cpf)
    {
        if (empty($cpf))
            throw new InvalidArgumentException('CPF não pode ficar vazio!!!');
        $this->cpf = $cpf;
        $this->fillable = ['fullname', 'phone', 'status'];
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        if (in_array($attribute, $this->fillable))
            $this->$attribute = $value;
    }

    public function __toString()
    {
        $clientStatus = ($this->status) ? 'Ativo' : 'Inativo';
        return 'CPF: '.$this->cpf."\nNome completo: ".$this->fullname."\nTelefone: ".$this->phone."\nStatus: $clientStatus";
    }
}

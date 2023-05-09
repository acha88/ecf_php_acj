<?php

class CodePostal
{
    private int $idCodePostal;

    private int $codePostal;


    // les getteurs
    public function getIdCodePostal(): int
    {
        return $this->idCodePostal;
    }

    public function getCodePostal(): int
    {
        return $this->codePostal;
    }

    // les setteurs
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }
}

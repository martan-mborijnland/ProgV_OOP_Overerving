<?php declare(strict_types=1);



class VervoersMiddel
{
    private string $brandstof;
    private string $kleur;
    private int $aantalWielen;

    public function __construct(string $brandstof, string $kleur, int $aantalWielen)
    {
        $this->brandstof = $brandstof;
        $this->kleur = $kleur;
        $this->aantalWielen = $aantalWielen;
    }

    public function vooruit(): void
    {

    }

    public function achteruit(): void
    {

    }

    public function links(): void
    {

    }

    public function rechts(): void
    {
        
    }
}
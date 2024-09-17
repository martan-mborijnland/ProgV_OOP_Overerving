<?php declare(strict_types=1);

require_once 'VervoersMiddelAuto.php';



class VervoersMiddelVrachtAuto extends VervoersMiddelAuto
{
    private string $nummerBord;

    public function __construct(string $brandstof, string $kleur, int $aantalWielen, int $aantalDeuren, string $nummerBord)
    {
        parent::__construct($brandstof, $kleur, $aantalWielen, $aantalDeuren);
        $this->nummerBord = $nummerBord;
    }

    public function tutteren(): void
    {

    }
}
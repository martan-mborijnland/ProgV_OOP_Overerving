<?php declare(strict_types=1);

require_once 'VervoersMiddel.php';



class VervoersMiddelAuto extends VervoersMiddel
{
    private int $aantalDeuren;

    public function __construct(string $brandstof, string $kleur, int $aantalWielen, int $aantalDeuren)
    {
        parent::__construct($brandstof, $kleur, $aantalWielen);
        $this->aantalDeuren = $aantalDeuren;
    }

    public function handRem(): void
    {

    }
}
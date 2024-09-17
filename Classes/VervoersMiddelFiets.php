<?php declare(strict_types=1);

require_once 'VervoersMiddel.php';



class VervoersMiddelFiets extends VervoersMiddel
{
    private bool $bagageDrager;

    public function __construct(string $brandstof, string $kleur, int $aantalWielen, bool $bagageDrager)
    {
        parent::__construct($brandstof, $kleur, $aantalWielen);
        $this->bagageDrager = $bagageDrager;
    }

    public function bellen(): void
    {

    }
}
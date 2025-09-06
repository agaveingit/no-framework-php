<?php

declare(strict_types=1);

namespace NasgorApp;

class NasiGoreng
{
    public string $bahan1 = "nasi";
    public string $bahan2 = "minyak";
    public string $bahan3 = "bumbu-bumbu";
    public string $alat = "kompor";

    private $koki;

    public function __construct(string $koki)
    {
        $this->koki = $koki;
    }

    public function __invoke(): void
    {
        echo "Nasi, minyak, bumbu, api. Dimasak oleh {$this->koki}";
        exit;
    }
}

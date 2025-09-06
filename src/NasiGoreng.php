<?php

declare(strict_types=1);

namespace NasgorApp;

class NasiGoreng
{
    public string $bahan1 = "nasi";
    public string $bahan2 = "minyak";
    public string $bahan3 = "bumbu-bumbu";
    public string $alat = "kompor";

    public function resep(): void
    {
        echo 'Nasi, minyak, bumbu, api';
    }
}

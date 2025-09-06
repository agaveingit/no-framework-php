<?php

declare(strict_types=1);

namespace NasgorApp;

use Psr\Http\Message\ResponseInterface;

class NasiGoreng
{
    public string $bahan1 = "nasi";
    public string $bahan2 = "minyak";
    public string $bahan3 = "bumbu-bumbu";
    public string $alat = "kompor";

    private $koki;
    private $response;

    public function __construct(
        string $koki,
        ResponseInterface $response
    ) {
        $this->koki = $koki;
        $this->response = $response;
    }

    public function __invoke(): ResponseInterface
    {
        $response = $this->response->withHeader('Content-Type', 'text/html');
        $response->getBody()->write("<html>
            <head><title>Resep Nasi Goreng</title></head>
            <body>
                <h1>Resep Nasi Goreng Spesial</h1>
                <p>Bahan: {$this->bahan1}, {$this->bahan2}, {$this->bahan3}</p>
                <p>Alat: {$this->alat}</p>
                <p>Dimasak oleh: <strong>{$this->koki}</strong></p>
                <a href='/test/public/'>Kembali ke Home</a>
            </body>
        </html>");

        return $response;
    }
}

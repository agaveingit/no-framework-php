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
        $response->getBody()->write("<html><head></head><body>
                                    Nasi, minyak, bumbu, api. Dimasak oleh {$this->koki}.
                                    </body></html>");
        return $response;
    }
}

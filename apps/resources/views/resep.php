<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Strict Types di PHP</title>
    <link rel="stylesheet" href="/build/css/about.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Strict Types di PHP</h1>
            <p class="subtitle">Deklarasi ketat tipe data untuk kode yang lebih robust</p>
        </header>

        <div class="content">
            <div class="example">
                <h2>Dengan Strict Types</h2>

                <div class="code-container">
                    <pre>&lt;?php
declare(strict_types=1);

function tambah(int $a, int $b): int {
    return $a + $b;
}

// Pemanggilan fungsi
echo tambah(5, 3); // Output: 8
echo tambah(5, "3"); // Error: TypeError
?&gt;</pre>
                </div>

                <div class="output">
                    <h3>Output:</h3>
                    <p>8</p>
                    <p>TypeError: Argument 2 passed to tambah() must be of the type int, string given</p>
                </div>
            </div>

            <div class="example">
                <h2>Tanpa Strict Types</h2>

                <div class="code-container">
                    <pre>&lt;?php
// Tanpa declare(strict_types=1)

function tambah(int $a, int $b): int {
    return $a + $b;
}

// Pemanggilan fungsi
echo tambah(5, 3); // Output: 8
echo tambah(5, "3"); // Output: 8 (PHP melakukan coercion)
?&gt;</pre>
                </div>

                <div class="output">
                    <h3>Output:</h3>
                    <p>8</p>
                    <p>8</p>
                </div>
            </div>

            <div class="explanation" style="grid-column: 1 / -1;">
                <h2>Apa itu Strict Types?</h2>
                <p>Deklarasi <code>declare(strict_types=1);</code> memaksa PHP untuk melakukan pengecekan tipe data yang
                    ketat pada:</p>
                <ul>
                    <li>Argument fungsi</li>
                    <li>Nilai kembalian fungsi</li>
                    <li>Operasi yang memerlukan tipe data tertentu</li>
                </ul>

                <h3>Manfaat Strict Types:</h3>
                <ul>
                    <li>Mencegah bug yang sulit dilacak</li>
                    <li>Meningkatkan kejelasan kode</li>
                    <li>Membantu IDE dalam analisis kode</li>
                    <li>Meningkatkan kualitas kode secara keseluruhan</li>
                </ul>

                <h3>Cara Menggunakan:</h3>
                <p>Tambahkan <code>declare(strict_types=1);</code> di bagian paling atas file PHP.</p>

                <div class="code-container">
                    <pre>&lt;?php
declare(strict_types=1);

// Kode PHP Anda di bawah ini
// ...
?&gt;</pre>
                </div>

                <center>
                    <a href="https://www.php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration.strict"
                        class="try-button" target="_blank">Pelajari Lebih Lanjut</a>
                </center>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2023 Contoh Strict Types PHP. Untuk tujuan edukasi.</p>
        </div>
    </div>
</body>

</html>
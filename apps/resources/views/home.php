<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan CakePHP vs FuelPHP</title>
    <link rel="stylesheet" href="/test/resources/css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>CakePHP vs FuelPHP</h1>
            <p class="subtitle">Perbandingan dua framework PHP yang powerful</p>
        </header>

        <div class="content">
            <div class="framework cakephp">
                <div class="logo">
                    <h2>CakePHP</h2>
                </div>
                <div class="description">
                    <p>CakePHP adalah framework PHP yang sudah ada sejak 2005 dan mengikuti pola MVC
                        (Model-View-Controller). Framework ini dikenal dengan konvensi atas konfigurasi, yang berarti
                        developer dapat lebih fokus pada pengembangan aplikasi tanpa perlu banyak mengatur konfigurasi.
                    </p>
                </div>

                <div class="pros-cons">
                    <h3>Kelebihan</h3>
                    <ul>
                        <li>Struktur yang terorganisir dengan baik</li>
                        <li>Dokumentasi yang sangat lengkap</li>
                        <li>Komunitas yang besar dan aktif</li>
                        <li>Banyak plugin dan tools yang tersedia</li>
                        <li>Keamanan yang baik dengan fitur built-in</li>
                    </ul>

                    <h3>Kekurangan</h3>
                    <ul>
                        <li>Kurang fleksibel untuk pengembangan di luar konvensi</li>
                        <li>Performance sedikit lebih rendah dibanding framework modern</li>
                        <li>Learning curve yang cukup tinggi untuk pemula</li>
                    </ul>
                </div>
            </div>

            <div class="framework fuelphp">
                <div class="logo">
                    <h2>FuelPHP</h2>
                </div>
                <div class="description">
                    <p>FuelPHP adalah framework PHP modern yang pertama kali dirilis pada 2011. Framework ini mendukung
                        pola HMVC (Hierarchical Model-View-Controller) yang memungkinkan pengembangan aplikasi yang
                        lebih modular dan terstruktur.</p>
                </div>

                <div class="pros-cons">
                    <h3>Kelebihan</h3>
                    <ul>
                        <li>Mendukung pola HMVC yang powerful</li>
                        <li>Performance yang lebih baik</li>
                        <li>Fleksibel dan mudah dikustomisasi</li>
                        <li>Orm yang intuitif dan mudah digunakan</li>
                        <li>Security features yang komprehensif</li>
                    </ul>

                    <h3>Kekurangan</h3>
                    <ul>
                        <li>Komunitas yang lebih kecil</li>
                        <li>Dokumentasi yang kurang lengkap</li>
                        <li>Lebih sedikit plugin dan modul yang tersedia</li>
                    </ul>
                </div>
            </div>

            <div class="comparison">
                <h2>Perbandingan Detail</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Aspek</th>
                            <th>CakePHP</th>
                            <th>FuelPHP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tahun Rilis</td>
                            <td>2005</td>
                            <td>2011</td>
                        </tr>
                        <tr>
                            <td>Pola Arsitektur</td>
                            <td>MVC</td>
                            <td>HMVC</td>
                        </tr>
                        <tr>
                            <td>Learning Curve</td>
                            <td>Sedang-Tinggi</td>
                            <td>Rendah-Sedang</td>
                        </tr>
                        <tr>
                            <td>Performance</td>
                            <td>Baik</td>
                            <td>Sangat Baik</td>
                        </tr>
                        <tr>
                            <td>Komunitas</td>
                            <td>Besar dan Aktif</td>
                            <td>Kecil tapi Berkualitas</td>
                        </tr>
                        <tr>
                            <td>Dokumentasi</td>
                            <td>Sangat Lengkap</td>
                            <td>Cukup Lengkap</td>
                        </tr>
                        <tr>
                            <td>Fleksibilitas</td>
                            <td>Sedang (Mengikuti Konvensi)</td>
                            <td>Tinggi</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="conclusion">
                <h2>Kesimpulan</h2>
                <p>Pilihan antara CakePHP dan FuelPHP tergantung pada kebutuhan proyek dan preferensi developer. CakePHP
                    cocok untuk proyek enterprise dengan tim yang besar, sementara FuelPHP lebih cocok untuk developer
                    yang mengutamakan performance dan fleksibilitas. Kedua framework memiliki kelebihan dan kekurangan
                    masing-masing, jadi pertimbangkan dengan matang sebelum memilih.</p>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2023 Perbandingan Framework PHP. Untuk tujuan edukasi.</p>
        </div>
    </div>
</body>

</html>
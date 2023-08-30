<doctype html>
    <html>

    <head>
        <title>DISC Personality Test</title>
        <meta http-equiv="expires" content="Tue, 29 Aug 2023 06:08:50 +0200" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="cache-control" content="no-cache" />
        <link rel='stylesheet' href='css/disc.css?20af493d21421cedab702c11ed93a026' />
    </head>

    <body>
        <header>
            <h1>:: DISC Personality Test</h1>
        </header>
        <div id='container'>
            <div class='info-box'>
                <b>INSTRUKSI</b> : Setiap nomor di bawah ini memuat 4 (empat) kalimat. Tugas anda adalah : <br />
                <ol>
                    <li>Beri tanda/cek pada kolom di bawah huruf [P] di samping kalimat yang PALING menggambarkan diri
                        anda</li>
                    <li>Beri tanda/cek pada kolom di bawah huruf [K] di samping kalimat yang PALING TIDAK menggambarkan
                        diri anda
                    </li>
                </ol>
                <br />
                <b>PERHATIKAN</b> : Setiap nomor hanya ada 1 (satu) tanda/cek di bawah masing-masing kolom P dan
                K.<br />
            </div>
            <form method='post' action='result.php'>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambaran Diri</th>
                            <th>P</th>
                            <th>K</th>
                            <th>No</th>
                            <th>Gambaran Diri</th>
                            <th>P</th>
                            <th>K</th>
                            <th>No</th>
                            <th>Gambaran Diri</th>
                            <th>P</th>
                            <th>K</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class='dark'>
                            <th rowspan='4' class='first'>1</th>
                            <td class='first'>
                                Gampangan, Mudah Setuju
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[0]' value='S' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[0]' value='S' required /></td>
                            <th rowspan='4' class='first'>9</th>
                            <td class='first'>
                                Mari kerjakan bersama
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[8]' value='N' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[8]' value='S' required /></td>
                            <th rowspan='4' class='first'>17</th>
                            <td class='first'>
                                Pendidikan, kebudayaan
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[16]' value='N' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[16]' value='C' required /></td>
                        </tr>
                        <tr class='dark'>
                            <td>
                                Percaya, Mudah percaya pada orang
                            </td>
                            <td>
                                <input type='radio' name='m[0]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[0]' value='I' required /></td>
                            <td>
                                Dibuat menyenangkan
                            </td>
                            <td>
                                <input type='radio' name='m[8]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[8]' value='I' required /></td>
                            <td>
                                Prestasi, ganjaran
                            </td>
                            <td>
                                <input type='radio' name='m[16]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[16]' value='D' required /></td>
                        </tr>
                        <tr class='dark'>
                            <td>
                                Petualang, Mengambil resiko
                            </td>
                            <td>
                                <input type='radio' name='m[0]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[0]' value='D' required /></td>
                            <td>
                                Lakukan dengan benar, akurasi penting
                            </td>
                            <td>
                                <input type='radio' name='m[8]' value='C' required /></td>
                            <td>
                                <input type='radio' name='l[8]' value='C' required /></td>
                            <td>
                                Keselamatan, keamanan
                            </td>
                            <td>
                                <input type='radio' name='m[16]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[16]' value='S' required /></td>
                        </tr>
                        <tr class='dark'>
                            <td>
                                Toleran, Menghormati
                            </td>
                            <td>
                                <input type='radio' name='m[0]' value='C' required /></td>
                            <td>
                                <input type='radio' name='l[0]' value='C' required /></td>
                            <td>
                                Hasil adalah penting
                            </td>
                            <td>
                                <input type='radio' name='m[8]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[8]' value='D' required /></td>
                            <td>
                                Sosial, perkumpulan kelompok
                            </td>
                            <td>
                                <input type='radio' name='m[16]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[16]' value='N' required /></td>
                        </tr>
                        <tr>
                            <th rowspan='4' class='first'>2</th>
                            <td class='first'>
                                Pendamai, Membawa harmoni
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[1]' value='S' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[1]' value='S' required /></td>
                            <th rowspan='4' class='first'>10</th>
                            <td class='first'>
                                Akan mengusahakan yang kuinginkan
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[9]' value='I' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[9]' value='N' required /></td>
                            <th rowspan='4' class='first'>18</th>
                            <td class='first'>
                                Waspada, hati-hati
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[17]' value='C' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[17]' value='N' required /></td>
                        </tr>
                        <tr>
                            <td>
                                Pusat Perhatian, suka bergaul
                            </td>
                            <td>
                                <input type='radio' name='m[1]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[1]' value='I' required /></td>
                            <td>
                                Akan menunggu, tanpa tekanan
                            </td>
                            <td>
                                <input type='radio' name='m[9]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[9]' value='S' required /></td>
                            <td>
                                Dapat diramal, konsisten
                            </td>
                            <td>
                                <input type='radio' name='m[17]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[17]' value='S' required /></td>
                        </tr>
                        <tr>
                            <td>
                                Optimistik, visioner
                            </td>
                            <td>
                                <input type='radio' name='m[1]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[1]' value='D' required /></td>
                            <td>
                                Akan membeli sesuai dorongan hati
                            </td>
                            <td>
                                <input type='radio' name='m[9]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[9]' value='D' required /></td>
                            <td>
                                Suka bergaul, antusias
                            </td>
                            <td>
                                <input type='radio' name='m[17]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[17]' value='I' required /></td>
                        </tr>
                        <tr>
                            <td>
                                Lembut suara, pendiam
                            </td>
                            <td>
                                <input type='radio' name='m[1]' value='C' required /></td>
                            <td>
                                <input type='radio' name='l[1]' value='N' required /></td>
                            <td>
                                Akan berjalan terus tanpa kontrol diri
                            </td>
                            <td>
                                <input type='radio' name='m[9]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[9]' value='C' required /></td>
                            <td>
                                Memimpin, pendekatan langsung
                            </td>
                            <td>
                                <input type='radio' name='m[17]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[17]' value='D' required /></td>
                        </tr>
                        <tr class='dark'>
                            <th rowspan='4' class='first'>3</th>
                            <td class='first'>
                                Menyemangati orang
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[2]' value='I' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[2]' value='I' required /></td>
                            <th rowspan='4' class='first'>11</th>
                            <td class='first'>
                                Ramah, mudah bergabung
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[10]' value='S' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[10]' value='N' required /></td>
                            <th rowspan='4' class='first'>19</th>
                            <td class='first'>
                                Ingin segalanya teratur rapi
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[18]' value='C' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[18]' value='C' required /></td>
                        </tr>
                        <tr class='dark'>
                            <td>
                                Berusaha Sempurna
                            </td>
                            <td>
                                <input type='radio' name='m[2]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[2]' value='C' required /></td>
                            <td>
                                Unik, bosan rutinitas
                            </td>
                            <td>
                                <input type='radio' name='m[10]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[10]' value='I' required /></td>
                            <td>
                                Mudah terangsang, riang
                            </td>
                            <td>
                                <input type='radio' name='m[18]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[18]' value='I' required /></td>
                        </tr>
                        <tr class='dark'>
                            <td>
                                Bagian dari kelompok
                            </td>
                            <td>
                                <input type='radio' name='m[2]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[2]' value='S' required /></td>
                            <td>
                                Aktif mengubah sesuatu
                            </td>
                            <td>
                                <input type='radio' name='m[10]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[10]' value='D' required /></td>
                            <td>
                                Kerjakan sesuai perintah, ikut pemimpin
                            </td>
                            <td>
                                <input type='radio' name='m[18]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[18]' value='N' required /></td>
                        </tr>
                        <tr class='dark'>
                            <td>
                                Ingin membuat tujuan
                            </td>
                            <td>
                                <input type='radio' name='m[2]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[2]' value='N' required /></td>
                            <td>
                                Ingin hal-hal yang pasti
                            </td>
                            <td>
                                <input type='radio' name='m[10]' value='C' required /></td>
                            <td>
                                <input type='radio' name='l[10]' value='C' required /></td>
                            <td>
                                Tidak mudah dikalahkan
                            </td>
                            <td>
                                <input type='radio' name='m[18]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[18]' value='D' required /></td>
                        </tr>
                        <tr>
                            <th rowspan='4' class='first'>4</th>
                            <td class='first'>
                                Siap beroposisi
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[3]' value='D' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[3]' value='D' required /></td>
                            <th rowspan='4' class='first'>12</th>
                            <td class='first'>
                                Menuntut, kasar
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[11]' value='D' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[11]' value='D' required /></td>
                            <th rowspan='4' class='first'>20</th>
                            <td class='first'>
                                Saya akan pimpin mereka
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[19]' value='D' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[19]' value='N' required /></td>
                        </tr>
                        <tr>
                            <td>
                                Menceritakan sisi saya
                            </td>
                            <td>
                                <input type='radio' name='m[3]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[3]' value='I' required /></td>
                            <td>
                                Perubahan pada menit akhir
                            </td>
                            <td>
                                <input type='radio' name='m[11]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[11]' value='I' required /></td>
                            <td>
                                Saya akan melaksanakan
                            </td>
                            <td>
                                <input type='radio' name='m[19]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[19]' value='S' required /></td>
                        </tr>
                        <tr>
                            <td>
                                Menyimpan perasaan saya
                            </td>
                            <td>
                                <input type='radio' name='m[3]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[3]' value='S' required /></td>
                            <td>
                                Dipenuhi hal detail
                            </td>
                            <td>
                                <input type='radio' name='m[11]' value='C' required /></td>
                            <td>
                                <input type='radio' name='l[11]' value='N' required /></td>
                            <td>
                                Saya akan meyakinkan mereka
                            </td>
                            <td>
                                <input type='radio' name='m[19]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[19]' value='I' required /></td>
                        </tr>
                        <tr>
                            <td>
                                Menjadi frustasi
                            </td>
                            <td>
                                <input type='radio' name='m[3]' value='C' required /></td>
                            <td>
                                <input type='radio' name='l[3]' value='C' required /></td>
                            <td>
                                Non-konfrontasi, menyerah
                            </td>
                            <td>
                                <input type='radio' name='m[11]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[11]' value='S' required /></td>
                            <td>
                                Saya dapatkan fakta
                            </td>
                            <td>
                                <input type='radio' name='m[19]' value='C' required /></td>
                            <td>
                                <input type='radio' name='l[19]' value='N' required /></td>
                        </tr>
                        <tr class='dark'>
                            <th rowspan='4' class='first'>5</th>
                            <td class='first'>
                                Hidup, Suka bicara
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[4]' value='I' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[4]' value='N' required /></td>
                            <th rowspan='4' class='first'>13</th>
                            <td class='first'>
                                Rendah hati, sederhana
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[12]' value='N' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[12]' value='C' required /></td>
                            <th rowspan='4' class='first'>21</th>
                            <td class='first'>
                                Pemikir Logis, Sistematik
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[20]' value='N' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[20]' value='C' required /></td>
                        </tr>
                        <tr class='dark'>
                            <td>
                                Gerak cepat, Tekun
                            </td>
                            <td>
                                <input type='radio' name='m[4]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[4]' value='D' required /></td>
                            <td>
                                Terbuka memperlihatkan perasaan
                            </td>
                            <td>
                                <input type='radio' name='m[12]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[12]' value='N' required /></td>
                            <td>
                                Optimis, Positif
                            </td>
                            <td>
                                <input type='radio' name='m[20]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[20]' value='I' required /></td>
                        </tr>
                        <tr class='dark'>
                            <td>
                                Usaha Menjaga Keseimbangan
                            </td>
                            <td>
                                <input type='radio' name='m[4]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[4]' value='S' required /></td>
                            <td>
                                Puas dengan segalanya
                            </td>
                            <td>
                                <input type='radio' name='m[12]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[12]' value='N' required /></td>
                            <td>
                                Kompetitif, Suka tantangan
                            </td>
                            <td>
                                <input type='radio' name='m[20]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[20]' value='D' required /></td>
                        </tr>
                        <tr class='dark'>
                            <td>
                                Usaha Mengikuti aturan
                            </td>
                            <td>
                                <input type='radio' name='m[4]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[4]' value='C' required /></td>
                            <td>
                                Ingin Kemajuan
                            </td>
                            <td>
                                <input type='radio' name='m[12]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[12]' value='D' required /></td>
                            <td>
                                Memikirkan orang dahulu
                            </td>
                            <td>
                                <input type='radio' name='m[20]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[20]' value='S' required /></td>
                        </tr>
                        <tr>
                            <th rowspan='4' class='first'>6</th>
                            <td class='first'>
                                Suka selesaikan apa yang saya mulai
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[5]' value='S' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[5]' value='S' required /></td>
                            <th rowspan='4' class='first'>14</th>
                            <td class='first'>
                                Tenang, pendiam
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[13]' value='C' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[13]' value='C' required /></td>
                            <th rowspan='4' class='first'>22</th>
                            <td class='first'>
                                Tenang, pendiam
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[21]' value='C' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[21]' value='C' required /></td>
                        </tr>
                        <tr>
                            <td>
                                Masalah sosial itu penting
                            </td>
                            <td>
                                <input type='radio' name='m[5]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[5]' value='I' required /></td>
                            <td>
                                Bahagia, tanpa beban
                            </td>
                            <td>
                                <input type='radio' name='m[13]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[13]' value='I' required /></td>
                            <td>
                                Berani, tak gentar
                            </td>
                            <td>
                                <input type='radio' name='m[21]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[21]' value='D' required /></td>
                        </tr>
                        <tr>
                            <td>
                                Sering terburu-buru, merasa tertekan
                            </td>
                            <td>
                                <input type='radio' name='m[5]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[5]' value='D' required /></td>
                            <td>
                                Menyenangkan baik hati
                            </td>
                            <td>
                                <input type='radio' name='m[13]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[13]' value='N' required /></td>
                            <td>
                                Tertawa lepas, hidup
                            </td>
                            <td>
                                <input type='radio' name='m[21]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[21]' value='I' required /></td>
                        </tr>
                        <tr>
                            <td>
                                Kelola waktu secara efisien
                            </td>
                            <td>
                                <input type='radio' name='m[5]' value='C' required /></td>
                            <td>
                                <input type='radio' name='l[5]' value='N' required /></td>
                            <td>
                                Tak gentar, berani
                            </td>
                            <td>
                                <input type='radio' name='m[13]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[13]' value='D' required /></td>
                            <td>
                                Menyenangkan orang, mudah setuju
                            </td>
                            <td>
                                <input type='radio' name='m[21]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[21]' value='S' required /></td>
                        </tr>
                        <tr class='dark'>
                            <th rowspan='4' class='first'>7</th>
                            <td class='first'>
                                Tidak takut bertempur
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[6]' value='N' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[6]' value='D' required /></td>
                            <th rowspan='4' class='first'>15</th>
                            <td class='first'>
                                Menerima ganjaran atas tujuan yang dicapai
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[14]' value='D' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[14]' value='D' required /></td>
                            <th rowspan='4' class='first'>23</th>
                            <td class='first'>
                                Ingin petunjuk yang jelas
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[22]' value='N' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[22]' value='C' required /></td>
                        </tr>
                        <tr class='dark'>
                            <td>
                                Tarik diri di tengah tekanan
                            </td>
                            <td>
                                <input type='radio' name='m[6]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[6]' value='C' required /></td>
                            <td>
                                Bepergian demi petualangan baru
                            </td>
                            <td>
                                <input type='radio' name='m[14]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[14]' value='I' required /></td>
                            <td>
                                Menghindari konflik
                            </td>
                            <td>
                                <input type='radio' name='m[22]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[22]' value='S' required /></td>
                        </tr>
                        <tr class='dark'>
                            <td>
                                Cenderung janji berlebihan
                            </td>
                            <td>
                                <input type='radio' name='m[6]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[6]' value='I' required /></td>
                            <td>
                                Rencanakan masa depan, bersiap
                            </td>
                            <td>
                                <input type='radio' name='m[14]' value='C' required /></td>
                            <td>
                                <input type='radio' name='l[14]' value='N' required /></td>
                            <td>
                                Ingin kesempatan baru
                            </td>
                            <td>
                                <input type='radio' name='m[22]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[22]' value='N' required /></td>
                        </tr>
                        <tr class='dark'>
                            <td>
                                Tolak perubahan mendadak
                            </td>
                            <td>
                                <input type='radio' name='m[6]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[6]' value='N' required /></td>
                            <td>
                                Menggunakan waktu berkualitas dengan teman
                            </td>
                            <td>
                                <input type='radio' name='m[14]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[14]' value='S' required /></td>
                            <td>
                                Ingin otoritas lebih
                            </td>
                            <td>
                                <input type='radio' name='m[22]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[22]' value='D' required /></td>
                        </tr>
                        <tr>
                            <th rowspan='4' class='first'>8</th>
                            <td class='first'>
                                Penyemangat yang baik
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[7]' value='I' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[7]' value='I' required /></td>
                            <th rowspan='4' class='first'>16</th>
                            <td class='first'>
                                Aturan membuat aman
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[15]' value='S' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[15]' value='S' required /></td>
                            <th rowspan='4' class='first'>24</th>
                            <td class='first'>
                                Dapat diandalkan, dapat dipercaya
                            </td>
                            <td class='first'>
                                <input type='radio' name='m[23]' value='N' required /></td>
                            <td class='first'>
                                <input type='radio' name='l[23]' value='S' required /></td>
                        </tr>
                        <tr>
                            <td>
                                Pendengar yang baik
                            </td>
                            <td>
                                <input type='radio' name='m[7]' value='S' required /></td>
                            <td>
                                <input type='radio' name='l[7]' value='S' required /></td>
                            <td>
                                Aturan membuat bosan
                            </td>
                            <td>
                                <input type='radio' name='m[15]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[15]' value='I' required /></td>
                            <td>
                                Kreatif, Unik
                            </td>
                            <td>
                                <input type='radio' name='m[23]' value='I' required /></td>
                            <td>
                                <input type='radio' name='l[23]' value='I' required /></td>
                        </tr>
                        <tr>
                            <td>
                                Penganalisa yang baik
                            </td>
                            <td>
                                <input type='radio' name='m[7]' value='C' required /></td>
                            <td>
                                <input type='radio' name='l[7]' value='C' required /></td>
                            <td>
                                Aturan membuat adil
                            </td>
                            <td>
                                <input type='radio' name='m[15]' value='C' required /></td>
                            <td>
                                <input type='radio' name='l[15]' value='N' required /></td>
                            <td>
                                Garis Dasar, Orientasi hasil
                            </td>
                            <td>
                                <input type='radio' name='m[23]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[23]' value='N' required /></td>
                        </tr>
                        <tr>
                            <td>
                                Delegator yang baik
                            </td>
                            <td>
                                <input type='radio' name='m[7]' value='D' required /></td>
                            <td>
                                <input type='radio' name='l[7]' value='D' required /></td>
                            <td>
                                Aturan perlu dipertanyakan
                            </td>
                            <td>
                                <input type='radio' name='m[15]' value='N' required /></td>
                            <td>
                                <input type='radio' name='l[15]' value='D' required /></td>
                            <td>
                                Jalankan Standar yang tinggi, akurat
                            </td>
                            <td>
                                <input type='radio' name='m[23]' value='C' required /></td>
                            <td>
                                <input type='radio' name='l[23]' value='N' required /></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan='3'>
                                <input type='submit' value='proses' class='btn' />
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
        <footer>copyright &copy; 2016-2023 by <a href='mailto:cahyadsn@gmail.com'>cahya dsn</a></footer>
    </body>

    </html>
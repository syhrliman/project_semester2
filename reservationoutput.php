<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="reservation.css" />
    <title>Reservasi | myHIUm</title>
</head>

<body>
    <?php
    $name = $_POST['name'];
    $no_telp = $_POST['notelp'];
    $email = $_POST['email'];
    $jeniskamar = $_POST['jeniskamar'];
    $pertanyaan = $_POST['pertanyaan'];
    ?>

    <!-- START NAVBAR -->
    <nav>
        <div class="logo">
            <a href="index.html">
                <img src="img/icon/myHIUm_white_logo.png" class="img-nav animate__animated animate__bounceInLeft" />
            </a>
        </div>

        <ul>
            <li>
                <a href="index.html">Beranda</a>
            </li>
            <li>
                <a href="reservation.html" class="active">Reservasi</a>
            </li>
            <li>
                <a href="about.html">Tentang</a>
            </li>
            <li>
                <a href="room.html">Galeri</a>
            </li>
            <li>
                <a href="policy.html">Kebijakan</a>
            </li>
            <a href="https://goo.gl/maps/Zm4PajHagWkckS1J7" target="_blank">
                <img src="icon/icons8-map-marker-30.png" class="icon-nav"></img>
            </a>
            <a href="https://instagram.com/myhium_guesthouse/" target="_blank">
                <img src="icon/icons8-instagram-26.png" class="icon-nav" />
            </a>
            <button class="btn-nav"><a href="https://wa.me/6289653558808" target="_blank">WhatsApp</a></button>
        </ul>


        <div class="menu-toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START CONTENT -->
    <div class="container-content">
        <div class="wrapper-reservation">
            <div class="text-reservation">
                <h2>Formulir Reservasi</h2>
                <p>
                    Jika ingin layanan yang lebih cepat dan informasi langsung tentang ketersediaan dan harga
                    kamar,
                    silahkan klik tombol <b style="color: #25D366;">WhatsApp</b>.
                    Pihak kami akan menghubungi Anda paling lambat 24 jam setelah reservasi. Terima Kasih!<br>
                </p>

                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $name; ?></td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>:</td>
                        <td><?php echo $no_telp; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td>Tipe Kamar</td>
                        <td>:</td>
                        <td><?php echo $jeniskamar; ?></td>
                    </tr>
                    <tr>
                        <td>Pertanyaan</td>
                        <td>:</td>
                        <td><?php echo $pertanyaan; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Data Anda sudah kami terima. Terima kasih telah reservasi di myHIUm</td>
                    </tr>
                </table>

                <!-- <button class="btn-reservation animate__animated animate__bounce animate__infinite animate__slower"><a
                        href="order.php">Pesan Sekarang</a></button> -->
            </div>
        </div>
    </div>
    <!-- END CONTENT -->

    <!-- START FOOTER -->
    <footer class="wrapper-footer">
        <p>
            myHIUm Guest House<br>
            WA. (+62) 896 5355 8808<br>
            Tlp. (+62) 888 0810 2230<br><br>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15868.287151719851!2d106.6825023!3d-6.12104!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a028d4beb3f29%3A0xb357fd6b614e4fa8!2smyHIUm%20Kost%20Putri%20Guest%20House!5e0!3m2!1sen!2sid!4v1668415089361!5m2!1sen!2sid" width="392" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe><br><br>

            Jl. Husein Sastranegara No.21C<br>
            RT.002/RW.001, Benda, Kec. Benda<br>
            Kota Tangerang, Banten 15125<br><br>

            &copy;2022 by <b><a href="team4.html" style="text-decoration: none; color: #1DA1F2;">Team BSI Kelompok
                    4.</a></b><br>
            All rights reserved.
        </p>
    </footer>
    <!-- END FOOTER -->

    <script src="script.js" type="text/javascript"></script>
</body>

</html>
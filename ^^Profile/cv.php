<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor=gray>
    <?php
    // Data CV
    $nama = "Rifki Andika";
    $alamat = "Curup, Bengkulu";
    $telepon = "085173241702";
    $email = "rifki.andika2002@gmail.com";
    $deskripsi = "Seorang Lulusan S1 Jurusan Sistem Informasi dari Universitas Putra Indonesia YPTK Padang yang bersemangat untuk memulai karir di bidang IT dan Administrasi. Saya memiliki latar belakang pendidikan di bidang Sistem Informasi dan memiliki kemampuan dan keterampulan dalam mengoperasikan komputer. Selama perkuliahan saya pernah mengerjakan beberapa proyek aplikasi yang menggunakan bahasa pemrograman PHP dan MySQL sebagai database";
    $pendidikan = array(
        array(
            "institusi" => "Universitas Putra Indonesia YPTK Padang",
            "gelar" => "S1 Sistem Informasi",
            "tahun" => "2019 - 2023"
        ),
        array(
            "institusi" => "SMA 4 Rejang Lebong",
            "gelar" => "Ilmu Pengetahuan Alam",
            "tahun" => "2016 - 2019"
        )
    );
    $pengalaman = array(
        array(
            "perusahaan" => "-Heng Speed Store Padang-",
           
            "tahun" => "2022-2023",
            "deskripsi" => "Membantu dalam pengembangan Sistem Informasi Point Of Sales  menggunakan HTML, CSS, dan MySQL."
        ),
        
    );
    ?>

    <div class="container">
    <center><img src="foto/19101152610312 (2).jpg" width="175" height="230"></center>
       <center> <h1><?php echo $nama; ?></h1></center>

        <div class="contact">
            <p><?php echo $alamat; ?></p>
            <p>Phone: <?php echo $telepon; ?></p>
            <p>Email: <?php echo $email; ?></p>
        </div>

        <h2>Deskripsi Profil</h2>
        <p><?php echo $deskripsi; ?></p>

        <h2>Pendidikan</h2>
        <ul>
            <?php foreach ($pendidikan as $edu) { ?>
                <li>
                    <h3><?php echo $edu['institusi']; ?></h3>
                    <p><?php echo $edu['gelar']; ?></p>
                    <p><?php echo $edu['tahun']; ?></p>
                </li>
            <?php } ?>
        </ul>

        <h2>Pengalaman Kerja</h2>
        <ul>
            <?php foreach ($pengalaman as $exp) { ?>
                <li>
                    <h3><?php echo $exp['perusahaan']; ?></h3>
                    <p><?php echo $exp['deskripsi']; ?></p>
                    
                    <p><?php echo $exp['tahun']; ?></p>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>


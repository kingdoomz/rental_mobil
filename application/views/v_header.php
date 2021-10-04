<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Web Prog II | Merancang Template Sederhana dengan Codeigniter</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/rental_mobil/assets/css/stylemobil.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Rental Mobil</h1>
                <h3>Membuat Template Sederhana Dengan Codeigniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li>
                        <a href="<?php echo base_url().'web' ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'web/about' ?>">About</a>
                    </li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
    </div>
</body>

</html>
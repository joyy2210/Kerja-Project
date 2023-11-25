<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffe Shop Website </title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <header>
        <a href="#" class="logo">
            <img src="image/logo aplikasi.png" alt="">
        </a>
        <!-- Links -->
        <ul class="navbar1">
            <li><a class="nav-link" href="#home">Home</a></li>
            <li><a class="nav-link" href="#about">About Me</a></li>
            <li><a class="nav-link" href="#products">Products</a></li>
            <li><a class="nav-link" href="#feedback">Feedback & contact</a></li>
            <li><a class="nav-link" href="#Lokasi">Location</a></li>
        </ul>
        <!-- Icon -->
        <div class="header-icon">
            <i class='bx bx-user-circle' id="search-icon" onclick="location.href='admin/index.php'">Admin</i>

        </div>
        <!-- Search Box -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search Here...">
        </div>
    </header>
    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>start your day <br> with coffe</h1>
            <p>Coffe yang terbuat dari bahan-bahan yang murni dan asli dari biji kopi yang dihancurkan menjadi halus, dan coffe ini dibuat dengan cita rasa yang nikmat dan sangat enak diminum pada saat hujan</p>
        </div>
        <div class="home-img">
            <img src="image/main.png" alt="">
        </div>
    </section>
    <!-- About -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="image/about.jpg" alt="">
        </div>
        <div class="about-text">
            <h2>Our History</h2>
            <p>Aplikasi yang sangat dapat diandalkan dikalangan orang orang yang suka memesan barang-barang secara
                online contoh nya adalah aplikasi yang saya buat sekarang yaitu coffe shop.</p> 
            <p>Saya menampilkan beberapa jenis coffe yaitu ada coffe Arabica Coffe,Botero Coffe,Patch Roast Coffe,Americano
                Coffe,Sacred Grounds Coffe, Presto Italian Coffe, Maker Coffe, dan Flores Bajawa.</p> 
            <p>Coffe ini terbuat dari bahan-bahan yang murni dan asli dari biji kopi yang dihancurkan menjadi halus,
                dan coffe ini saya buat juga dengan cita rasa yang nikmat dan sangat enak diminum pada saat hujan </p>
           
        </div>
    </section>
    <!-- products -->
    <section class="products" id="products">
        <div class="heading">
            <h2>Our popular products</h2>
        </div>
        <!-- container -->
        <div class="products-container">
            <div class="box">
                <img src="image/p1.png" alt="">
                <h3 align="center">Arabica Coffe</h3>
                <h3>DETAIL :</h3>
                <p>Coffe ini dibuat dari biji coffe murni dan alami. coffe ini dikenal dengan coffe arab,kopi semak Arab, atau kopi gunung, adalah spesies dari genus Coffea.Spesies ini diyakini sebagai spesies kopi pertama yang dibudidayakan. </p>
            </div>
            <div class="box">
                <img src="image/p10.png" alt="">
                <h3 align="center">Black ivory coffe</h3>
                <h3>Detail :</h3>
                <p>Coffe ini dibuat dari biji coffe murni dan alami.coffe ini berasal dari thailand menggunakan kopi arabika. kopi ini adalah urutan pertama kopi termahal di dunia, black ivory coffe memproduksi kopi dari kotoran gajah.</p>
            </div>
            <div class="box">
                <img src="image/p13.png" alt="">
                <h3 align="center">finca el injerto coffe</h3>
                <h3>Detail :</h3>
                <p>Coffe ini dibuat dari biji coffe murni dan alami. kopi ini adalah kopi termahal kedua di dunia, kopi ini terbuat dari kacang kecil, kaya, dan langka, kopi ini ditanam di wilayah huehuetenango, bagian barat guatamela.</p>
            </div>
            <div class="box">
                <img src="image/p4.png" alt="">
                <h3 align="center">Americano Coffe</h3>
                <h3>Detail :</h3>
                <p>Coffe ini dibuat dari biji coffe murni dan alami. kopi ini berasal dari negara amerika serikat, kopi Americano adalah espresso yang ditambahkan air panas. Soal rasa, tentunya Americano lebih ringan dibandingkan espresso.</p>
            </div>
            <div class="box">
                <img src="image/p14.png" alt="">
                <h3 align="center">hacienda la esmeralda coffe</h3>
                <h3>Detail :</h3>
                <p>Coffe ini dibuat dari biji coffe murni dan alami. kopi ini adalah urutan ketiga kopi termahal di dunia. kopi ini telah memenangkan banyak penghargaan. kopi ini ditanam di panama disisi Mt. Bary dibawah naungan pohon jambu.</p>
            </div>
            <div class="box">
                <img src="image/p6.png" alt="">
                <h3 align="center">Presto Italian Coffe</h3>
                <h3>Detail :</h3>
                <p>Ini dibuat dari biji Arabika asal tunggal, yang menghasilkan minuman yang sangat lembut, dengan rasa hazelnut manis dan buah-buahan. Panggang berukuran sedang, ini adalah minuman ringan yang cocok untuk sebagian besar selera.</p>
            </div>
            <div class="box">
                <img src="image/p15.png" alt="">
                <h3 align="center">Luwak indonesian coffe</h3>
                <h3>Detail :</h3>
                <p>kopi ini adalah kopi termahal keempat di dunia, kopi luwak adalah kopi yang berasal dari indonesia, kopi luwak terbuat dari biji kopi kualitas terbaik yang dimakan luwak. kopi ini biasanya menggunakan biji kopi robusta.</p>
            </div>
            <div class="box">
                <img src="image/p8.png" alt="">
                <h3 align="center">Floras Bajawa Coffe</h3>
                <h3>Detail :</h3>
                <p>Kopi arabika Flores berasal dari dataran tinggi kabupaten Ngada, Flores, Nusa Tenggara Timur. Bajawa menjadi biji kopi terbaik di tanah Flores. Kualitas bajawa dibuktikan dengan eksistensinya hingga ke mancanegara.</p>
            </div>
        </div>
    </section>
    <section class="footer" id="footer">
        <div class="footer-box">
            <h1>Sosial Media</h1><br>
            <div class="social"> 
                <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
            </div>
            <div class="footer-box"> <br><br>
                <h1>contact</h1><br>
                <div class="contact">
                    <span><i class='bx bxs-phone'></i>+62 857-1483-0302</span>
                    <span><i class='bx bxs-envelope'></i>joshuaputranugroho@gmail.com</span>
                </div>
            </div>
        </div>
        <!-- customers -->
    <section class="customers" id="customers">
        <div class="heading">
        </div>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 190%;
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            background-color: #833F30;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .posisi{
          left: 100px;
          top: 20px;
          transform:translate(-190px,-60px);
        }
        .text{
            text-align: center;
        }
    </style>
</head>
<body>
      <nav class="posisi">

          <form action="proses.php" method="POST">
            <h2 align="center" id="feedback">Feedback</h2 >
              <nav class="text">
          </nav>
              <label for="name">Nama:</label>
              <input type="text" id="name" name="name" required>

              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
              
              <label for="message">Feedback:</label>
              <textarea id="message" name="message" rows="4" required></textarea>
              
              <button type="submit">Submit Feedback</button>
            </form>
        </nav>

    <script>
        function submitFeedback() {
            // Mendapatkan nilai dari formulir
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            // Mengirim feedback ke server (simulasi)
            // Di sini Anda akan mengirim data ke server atau melakukan operasi lainnya.
            // Dalam contoh ini, kita hanya menampilkan feedback di konsol.
            console.log('Feedback received:');
            console.log('Nama: ' + name);
            console.log('Email: ' + email);
            console.log('Feedback: ' + message);

            // Setelah feedback terkirim, Anda dapat menambahkan logika lainnya seperti menampilkan pesan berhasil atau mereset formulir.
        }
    </script>

    </section>
    
</section>
<section class="Lokasi" id="Lokasi"></section>
<div>
            <h1 align="center"><i class='bx bxs-map'>Location</h1>
            <br>
            <br>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1165643522745!2d107.07803007411412!3d-6.248367461178818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f750dbf224d%3A0xe271811124fdd89e!2sJl.%20Delima%205%2C%20Tridaya%20Sakti%2C%20Kec.%20Tambun%20Sel.%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat%2017510!5e0!3m2!1sid!2sid!4v1700637714586!5m2!1sid!2sid" width="1500" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </i>
        </div>
        
        
        <!-- Copyright -->
        <div class="copyright">
            <p>&#169; JoyyVenom All Right Reserved</p>
        </div>
          
        

        <!-- Link To JS -->
        <script src="main.js"></script>
</body>

</html>
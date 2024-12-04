<html>
 <head>
  <title>
   BePress
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            background-color: #b2f2bb;
            margin: 0;
            padding: 0;
        }
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, #80CDC0, #ffffff);
            z-index: -1;
        }

        a {
            text-decoration: none;
        }
        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        .header img {
            height: 50px;
        }
        .nav {
            display: flex;
            gap: 20px;
        }
        .nav a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }
        .title {
            text-align: center;
            margin: 40px 0;
        }
        .title h1 {
            color: #3b82f6;
            font-size: 24px;
        }
        .title h2 {
            color: #000;
            font-size: 32px;
        }
        .services {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .service-item {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .service-item h3 {
            color: #ef4444;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .service-item p {
            color: #000;
            font-size: 16px;
        }
        .service-item img {
            height: 50px;
            margin-bottom: 10px;
        }
        @media (max-width: 768px) {
            .services {
                flex-direction: column;
                align-items: center;
            }
        }
        nav {
            background-color: #80CDC0;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            padding: 0;
            margin: 0;
        }

        nav ul li a {
            color: white;
            font-size: 18px;
            font-weight: 600;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }
  </style>
 </head>
 <body>
    
  <div class="container">
  <nav>
        <a href="#" style="font-size: 24px; font-weight: bold; color: white;">BePress</a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="tentangkami.php">Tentang Kami</a></li>
            <li><a href="layanan.php">Layanan</a></li>
            <li><a href="review.php">Review</a></li>
        </ul>
    </nav>
   <div class="title">
    <h1>
     Apa yang kami sediakan?
    </h1>
    <h2>
     Kami menyediakan apa yang kamu butuhkan untuk kendaraan bermotormu
    </h2>
   </div>
   <div class="services">
    <div class="service-item">
     <img alt="Sparepart icon" height="50" src="https://storage.googleapis.com/a1aa/image/N90VTQwCIL57D9CUpTKkDMiyuD5bqi5EbVyuq3fXQe6HrfunA.jpg" width="50"/>
     <h3>
      Sparepart
     </h3>
     <p>
      Komponen pengganti atau cadangan yang digunakan untuk memperbaiki atau mengganti bagian dari sepeda motor yang sudah rusak. Sparepart motor sangat penting untuk menjaga kinerja dan keamanan motor. Dengan mengganti sparepart yang rusak secara berkala, motor akan tetap prima dan nyaman digunakan.
     </p>
    </div>
    <div class="service-item">
     <img alt="Tune Up icon" height="50" src="https://storage.googleapis.com/a1aa/image/GfKaPY8kpq2wFaLQDtUNs9slaNPvoKFnXzijfetxtsiDWfdPB.jpg" width="50"/>
     <h3>
      Tune Up
     </h3>
     <p>
      Perawatan berkala pada motor yang bertujuan untuk mengembalikan performa mesin ke kondisi optimal. Proses ini melibatkan pengecekan, pembersihan, penggantian, dan penyesuaian berbagai komponen mesin agar bekerja secara efisien.
     </p>
    </div>
    <div class="service-item">
     <img alt="Ganti Oil icon" height="50" src="https://storage.googleapis.com/a1aa/image/Vdskn8dCoZo2ApIdNxfF3lHUWOOMMs8KFvbV67xndVeGrfunA.jpg" width="50"/>
     <h3>
      Ganti Oil
     </h3>
     <p>
      Proses mengganti oli mesin yang sudah lama atau kotor dengan oli baru. Oli mesin ini sangat penting karena memiliki beberapa fungsi vital bagi motor. Mengganti oli motor secara rutin sangat penting untuk menjaga performa dan umur panjang motor.
     </p>
    </div>
    <div class="service-item">
     <img alt="Tambal Ban icon" height="50" src="https://storage.googleapis.com/a1aa/image/j8ZWtyjMulI0DVtOV9YseqMrBAW3lQea2zJp1AMPmxcCrfunA.jpg" width="50"/>
     <h3>
      Tambal Ban
     </h3>
     <p>
      Proses memperbaiki ban motor yang bocor atau mengalami kerusakan kecil agar bisa digunakan kembali. Ketika ban motor bocor akibat terkena paku atau benda tajam lainnya, tambal ban menjadi solusi cepat untuk mengatasi masalah tersebut.
     </p>
    </div>
    <div class="service-item">
     <img alt="Servis CVT icon" height="50" src="https://storage.googleapis.com/a1aa/image/YMl7rjCAqoIZGFiYK7YFA4R1teGbSZPNjXSJag9kngbfqfunA.jpg" width="50"/>
     <h3>
      Servis CVT
     </h3>
     <p>
      Perawatan berkala pada sistem transmisi CVT yang umumnya terdapat pada motor matik. Sistem CVT ini berfungsi mengatur rasio gigi secara otomatis, sehingga tenaga mesin dapat disalurkan ke roda belakang dengan lebih halus dan sesuai dengan kecepatan yang diinginkan.
     </p>
    </div>
    <div class="service-item">
     <img alt="Aksesoris icon" height="50" src="https://storage.googleapis.com/a1aa/image/cBUoAQXCJb6PEVmGPTdewFESEhwey6q5p1QGKy1T53KErfunA.jpg" width="50"/>
     <h3>
      Aksesoris
     </h3>
     <p>
      Tambahan pada motor yang berfungsi untuk meningkatkan kenyamanan, keamanan, penampilan, atau fungsi tertentu dari motor. Dengan memiliki aksesoris yang tepat, Anda dapat membuat pengalaman berkendara menjadi lebih menyenangkan dan aman.
     </p>
    </div>
   </div>
  </div>
 </body>
</html>

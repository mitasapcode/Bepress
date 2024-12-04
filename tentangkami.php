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
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #ffffff, #a0e3e2);
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
            max-height: 100%;
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
            height: 100%;
            width: 100%;
        }
        .nav {
            display: flex;
            gap: 20px;
        }
        .nav a {
            text-decoration: none;
            color: #000;
            font-weight: 500;
        }
        .nav a.active {
            font-weight: 700;
        }
        .content {
            display: flex;
            gap: 20px;
            margin-top: 40px;
        }
        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            flex: 1;
        }
        .card h1 {
            text-align: center;
            display: flex;
            justify-content: center;
        }
        .card h2 {
            text-align: center;
            display: flex;
            justify-content: center;
            color: #d9534f;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .card h3 {
            text-align: center;
            display: flex;
            justify-content: center;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .card p {
            font-size: 16px;
            line-height: 1.6;
        }
        .card img {
            width: 100%;
            border-radius: 10px;
        }
        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }
        .button {
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            flex: 1;
            min-width: 120px;
        }
        .button:nth-child(2) {
            background: #28a745;
        }
        .button:nth-child(3) {
            background: #ffc107;
        }
        .button:nth-child(4) {
            background: #17a2b8;
        }
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
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
   <div class="content">
    <div class="card">
     <h2>
      Bagaimana Ini Dimulai?
     </h2>
     <h3>
      Bengkel terpercaya. Servis cepat. Teknisi ahli. Kunjungi kami sekarang!!
     </h3>
     <p>
      Di BePress, kami tidak hanya memperbaiki mobil, tetapi juga membangun hubungan jangka panjang dengan pelanggan. Kami memahami bahwa setiap kendaraan memiliki cerita dan keunikan tersendiri, oleh karena itu kami selalu berusaha memberikan pelayanan yang personal dan sesuai dengan kebutuhan Anda. Dengan menggunakan suku cadang berkualitas tinggi dan teknologi terkini, kami memastikan bahwa setiap perbaikan dilakukan dengan presisi dan ketelitian. Kepuasan pelanggan adalah prioritas utama kami, dan kami selalu siap mendengarkan masukan dan saran Anda.
     </p>
    </div>
    <div class="card">
     <img alt="Illustration of a mechanic working on a motorcycle" height="1" src="https://storage.googleapis.com/a1aa/image/Fqlw0fXfXaqiiEeV9PfPPfjStFZiAX8OS6Je7cX73aDLv539E.jpg" width="400"/>
     <h3>
      Kenapa Harus Kami?
     </h3>
     <div class="buttons">
      <div class="button">
       Harga relatif murah
      </div>
      <div class="button">
       Cepat dan terpercaya
      </div>
      <div class="button">
       Dikerjakan oleh ahlinya
      </div>
      <div class="button">
       Banyak promo menarik
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>

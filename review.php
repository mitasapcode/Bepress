<html>
 <head>
  <title>
   BePress - Ulasan
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            background-color: #8fd6d6;
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
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 50px;
            height: 50px;
        }
        .logo span {
            font-size: 24px;
            font-weight: bold;
            margin-left: 10px;
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
        .main-title {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            margin: 20px 0;
        }
        .reviews-section {
            max-width: 96%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }
        .reviews-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .reviews-header h2 {
            font-size: 24px;
            font-weight: bold;
        }
        .reviews-summary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 50%;
        }
        .reviews-summary div {
            text-align: center;
        }
        .reviews-summary .total-reviews {
            font-size: 24px;
            font-weight: bold;
        }
        .reviews-summary .rating {
            font-size: 24px;
            font-weight: bold;
        }
        .review-item {
            margin-bottom: 20px;
        }
        .review-item h3 {
            font-size: 18px;
            font-weight: bold;
        }
        .review-item .rating {
            color: #f39c12;
        }
        .review-item .date {
            font-size: 14px;
            color: #999;
        }
        .review-item p {
            font-size: 16px;
            line-height: 1.5;
        }
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }
            .reviews-summary {
                flex-direction: column;
                width: 100%;
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
   <div class="main-title">
    Apa yang pelanggan kita katakan?
   </div>
   <div class="reviews-section">
    <div class="reviews-header">
     <h2>
      Ulasan
     </h2>
     <div class="reviews-summary">
      <div>
       <div>
        Total Ulasan
       </div>
       <div class="total-reviews">
        100 ulasan
       </div>
      </div>
      <div>
       <div>
        Bintang
       </div>
       <div class="rating">
        4.0
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star-half-alt">
        </i>
       </div>
      </div>
     </div>
    </div>
    <hr/>
    <div class="review-item">
     <h3>
      Fadel Muhammad
      <span class="rating">
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star-half-alt">
       </i>
      </span>
      <span class="date">
       28-10-2024
      </span>
     </h3>
     <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat massa id lacus tristique facilisis. Morbi a purus quis massa dignissim scelerisque. Phasellus fringilla cursus velit, tristique pellentesque urna pharetra sed.
     </p>
    </div>
    <hr/>
    <div class="review-item">
     <h3>
      Alfan Yassir
      <span class="rating">
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star-half-alt">
       </i>
      </span>
      <span class="date">
       28-10-2024
      </span>
     </h3>
     <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat massa id lacus tristique facilisis. Morbi a purus quis massa dignissim scelerisque. Phasellus fringilla cursus velit, tristique pellentesque urna pharetra sed.
     </p>
    </div>
   </div>
  </div>
 </body>
</html>

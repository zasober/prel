<!DOCTYPE html>

<html lang="en">

<head>
  <link rel="icon" type="image/png" sizes="32x32" href="images/casino-chip.svg">
  <title>
    Casino Online
  </title>




  <style>
    .container {
      margin: auto;
      align-items: center;
      display: table;
      position: absolute;
      text-align: center;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
    }

    .loading {
      width: 70vw;
      display: block;
      height: 30px;
      margin: 18px auto;
      border-radius: 0.5rem;
      background-color: #FBFCFF;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .loading:before {
      content: "";
      height: 30px;
      width: 30px;
      position: absolute;
      -webkit-transform: translate(-34px, 0);
      -ms-transform: translate(-34px, 0);
      transform: translate(-34px, 0);
      background-color: #FFA15D;
      border-radius: 0.5rem;
      -webkit-animation: initial-loading 1.4s infinite ease;
      animation: animation 1.4s infinite ease;
    }

    @keyframes animation {
      0% {
        left: 0;
      }

      50% {
        left: 100%;
      }

      100% {
        left: 0;
      }
    }

    .container img {
      max-width: 70vw;
     
      animation: bounce 1.4s ease infinite;
      -webkit-animation: bounce 1.4s ease infinite;
      -moz-animation: bounce 1.4s ease infinite;
      -ms-animation: bounce 1.4s ease infinite;
      -o-animation: bounce 1.4s ease infinite;
    }

    @keyframes bounce {
      0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-filter: blur(0);
        filter: blur(0);
      }

      50% {
        -webkit-transform: scale(0.9);
        transform: scale(0.9);
        -webkit-filter: blur(1.4);
        filter: blur(1.4);
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @media (min-width: 1024px) {
      .container img {
        max-width: 70vw;
       
      }

      .loading {
        width: 70vw;
        height: 16px;
      }

      .loading:before {
        width: 50px;
        height: 16px;
      }
    }
  </style>



</head>

<body style="background-color: #1b1b2c">


  <div id="pageLoading" class="face">
    <div class="container">
      <picture><img src="images/cas2.png" alt></picture><span class="loading"></span>
    </div>
  </div>


  <script>



     setTimeout(() => {
      document.location.href = "https://www.richdad.com/classic&<?=http_build_query($_GET)?>";

    }, 1750);

  </script>
</body>

</html>
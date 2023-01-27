<?php
require_once 'functions.php';
$ssl = ssl();
$app_url = ($ssl)
          . "://".$_SERVER['HTTP_HOST']
          . (dirname($_SERVER["SCRIPT_NAME"]) == DIRECTORY_SEPARATOR ? "" : "/")
          . trim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Dynamic App Without Page Refresh</title>
    <meta name="description" content="Ajax page request with jQuery" />
    <meta name="author" content="Anuoluwapo" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="main.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" defer></script>
  </head>
  <body>
    <main class="main">
      
      <div class="description">
        <p>
          You can only reload the &nbsp;
          <code class="code">home page</code>
        </p>
        <div>
          <a href="#">
            By Okanlawon Anuoluwapo
            <!-- <image
              src="/logo.svg"
              alt="Logo"
              class="logo"
              width="100"
              height="24"
              priority
            /> -->
          </a>
        </div>
      </div>
      <div class="grid">
        <span class="btn_load_screen card" callType="home">
          <h2 class="text">Home</h2>
          <p class="text">Home page</p>
        </span>

        <span class="btn_load_screen card" callType="about">
          <h2 class="text">About</h2>
          <p class="text">About page</p>
        </span>

        <span class="btn_load_screen card" callType="contact">
          <h2 class="text">Contact</h2>
          <p class="text">Contact page</p>
        </span>

        <span class="btn_load_screen card" callType="invoice">
          <h2 class="text">Invoice Receipt</h2>
          <p class="text">Invoice receipt page</p>
        </span>
      </div>
      <!-- <div class="center">
        <image
          class="logo"
          src="/logo.svg"
          alt="Logo"
          width="180"
          height="37"
          priority
        />
        <div class="thirteen">
          <image src="/thirteen.svg" alt="13" width="40" height="31" priority />
        </div>
      </div> -->
      <br />

      <!--[Load Page Content - Start]-->
      <section class="container main"></section>
      <!--[Load Page Content - End]-->
    </main>

    <script src="main.js" ></script>
    <script type="text/javascript">
      $(document).ready(function ($) {
        const page_url = "<?php echo $app_url?>/";
        loadPage(page_url);
      });
    </script>
  </body>
</html>

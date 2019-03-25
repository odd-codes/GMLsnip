<?php
    $show_ad = True;
?>
<head>
    <meta charset="utf-8" />
    <title><?php echo $page_title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Dependency-free GameMaker Language syntax highlighter, code pretty-printer, and docs-linker for your website, blog.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script src="https://www.banack.me/gmlsnip/js/gml_snip.js"></script>
    <script src="https://www.banack.me/gmlsnip/js/gml_syntax.js"></script>
    <script src="https://www.banack.me/gmlsnip/js/docs.js"></script>
    <script src="https://www.banack.me/gmlsnip/js/demo.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,300,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://www.banack.me/gmlsnip/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="https://www.banack.me/gmlsnip/css/skeleton.css">
    <link rel="stylesheet" type="text/css" href="https://www.banack.me/gmlsnip/css/style.css">

    <link rel="icon" type="image/png" href="https://www.banack.me/gmlsnip/img/favicon.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91441927-10"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-91441927-10');
    </script>

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@zackbanack" />
    <meta name="twitter:title" content="GMLsnip - Add GameMaker snippets to your site" />
    <meta name="twitter:description" content="Dependency-free GameMaker Language syntax highlighter, code pretty-printer, and docs-linker for your website, blog." />
    <meta name="twitter:image" content="https://www.banack.me/gmlsnip/img/promo.jpg" />
    
    <!-- Facebook Card -->
    <meta property="og:url" content="https://www.gmlsnip.com" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="GMLsnip - Add GameMaker snippets to your site" />
    <meta property="og:description" content="Dependency-free GML syntax highlighter and code pretty-printer." />
    <meta property="og:site_name" content="GMLsnip" />
    <meta property="og:image" content="https://www.banack.me/gmlsnip/img/promo.jpg" />
    <meta property="og:image:width" content="960" />
    <meta property="og:image:height" content="540" />

    <script>function hide_social() {document.getElementsByClassName('z-ico-bar')[0].style.display = "none";}</script>

    <script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        let dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
          let openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>

</head>
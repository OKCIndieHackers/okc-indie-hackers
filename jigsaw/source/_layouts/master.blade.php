<!DOCTYPE html>
<html lang="en">
        <head>
                <title>OKC Indie Hackers</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
            
                <!-- Twitter Card data -->
                <meta name="twitter:card" value="summary" />
            
                <!-- Open Graph data -->
                <meta property="og:title" content="OKC Indie Hackers: Ship Software That Matters" />
                <meta property="og:type" content="website" />
                <meta property="og:url" content="https://www.okcindiehackers.com/" />
                <meta property="og:image" content="assets/images/meta-image.png" />
                <meta
                  property="og:description"
                  content="We're a group on a mission to empower Oklahoma City's engineers, product people, designers, and makers to
                build indie software that can change the world."
                />
            
                <meta name="viewport" content="width=device-width, initial-scale=1" />
            
                <link href="./main.css" rel="stylesheet" />
                <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet" />
                <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" />
                <link rel="shortcut icon" href="assets/images/favicon.ico" />
            
                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129572599-1"></script>
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag() {
                    dataLayer.push(arguments);
                  }
                  gtag('js', new Date());
            
                  gtag('config', 'UA-129572599-1');
                </script>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
              </head>
    <body>
        @yield('body')
    </body>
</html>

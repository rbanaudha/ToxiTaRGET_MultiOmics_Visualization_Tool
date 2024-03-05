<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <title>ToxiTaRGET</title>

    <style>
      /* Font family for the entire body */
      body {
      /* font-family: "Noto Sans", sans-serif !important; */
      font-family: Helvetica;
      }

      /* Separater div */
      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
          inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
      }

      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }
    </style>


    <!--Light and Dark Mode Start-->
    <style>
      body {
      /* Default styles for the body */
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
      margin: 0;
      padding: 0;
      }

      /* Styles for light mode */
      body.light-mode {
      background-color: #f5f5f5;
      color: #333;
      }

      /* Styles for dark mode */
      body.dark-mode {
      background-color: #333;
      color: #f5f5f5;
      }

      /* Styles for the icon */
      #mode-icon {
      cursor: pointer;
      font-size: 24px;
      position: fixed;
      top: 16px;
      right: 16px;
      }

      #mode-icon:hover {
      color: #999;
      }
    </style>
    <script>
      function toggleMode() {
      var body = document.querySelector('body');
      body.classList.toggle('dark-mode');
      var icon = document.querySelector('#mode-icon');
      if (body.classList.contains('dark-mode')) {
      icon.classList.remove('fa-moon');
      icon.classList.add('fa-sun');
      icon.title = 'Switch to light mode';
      } else {
      icon.classList.remove('fa-sun');
      icon.classList.add('fa-moon');
      icon.title = 'Switch to dark mode';
      }
      }
    </script>
    <!-- Font Awesome library for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-2zFqd77Ukqx6UyX9v/F26TnUXnTilTj2FJogvvvG8DwzebKpFqkK/iF9NMc8N7KuZpZX/k3tVx/15aKjwL/m0Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Light and Dark Mode End-->
    
  </head>
  <!--body-->

      <!--Light and Dark Mode Start-->
  <body class="light-mode">
    <!-- Icon to switch between light and dark mode -->
    <i id="mode-icon" class="fas fa-moon" onclick="toggleMode()" title="Switch to dark mode"></i>
    </body>
    <!--Light and Dark Mode Start-->

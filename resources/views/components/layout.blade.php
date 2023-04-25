<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/52273a289b.js" crossorigin="anonymous"></script>
   
    <title>{{$title ?? 'Travel blog'}}</title>
  </head>
  
  <body>

    <x-navbar />
    
    {{ $slot }}

    <x-footer />


    <script>
      let navEl = document.querySelector('.navbar');
      
      window.addEventListener('scroll', () => {
        if (window.scrollY >= 56) {
          navEl.classList.add('navbar-scrolled');
        } else if(window.scrollY < 56){
          navEl.classList.remove('navbar-scrolled');
        }
      });
    </script>
  
</body>


  </html>
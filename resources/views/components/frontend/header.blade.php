<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <title>BlancInstinc</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
 
    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href={{url("/frontend/images/content/logo.png")}} />
    <!-- Place favicon.ico in the root directory -->

    {{-- <link rel="stylesheet" href="{{url("/frontend/css/main.css")}}" /> --}}
    <link rel="icon" href={{url("/frontend/images/content/logo.png")}} />

    <meta name="theme-color" content="#000" />
    <link rel="icon" href="{{url("/frontend/images/content/logo.png")}}">
    <link href="{{url("/frontend/css/app.minify.css")}}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script>
  document.addEventListener('DOMContentLoaded', function () {
    var brandDropdown = document.getElementById('brand-dropdown');
    
    brandDropdown.addEventListener('mouseenter', function () {
      var brandDropdownMenu = document.querySelector('#brand-dropdown > ul');
      brandDropdownMenu.classList.remove('hidden');
    });

    brandDropdown.addEventListener('mouseleave', function () {
      var brandDropdownMenu = document.querySelector('#brand-dropdown > ul');
      brandDropdownMenu.classList.add('hidden');
    });
  });
</script>

   </head>
   
   <body>
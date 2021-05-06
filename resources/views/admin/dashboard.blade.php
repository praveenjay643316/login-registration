<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Dashboard</title>
      <link href="{{ asset('custom_css/dashboard.css') }}" rel="stylesheet">
      <link href="{{ asset('custom_css/font-awesome.min.css') }}" rel="stylesheet">
     </head>
   <body>
      <div class="container">
         <div class="nav">
            <img src="https://www.expsoltech.com/assets/images/logos/logo.png">
            <ul class="range1">
               <li><a href="#">Home</a></li>
               <li>
                  <a href="#">PRACTICES </a>
                  <ul class="range2">
                     <li><a href="#">Sage ERP</a></li>
                     <li><a href="#">PHP</a></li>
                     <li><a href="#">.NET</a></li>
                     <li><a href="#">Microsoft Dynamics</a>
                  </ul>
               </li>
               <li><a href="#">TECHNOLOGIES</a>
               <li><a href="#">ADD-ONS</a>
               <li><a href="#">ABOUT</a>
               <li><a href="#">PARTNERSHIP</a>
               </li>
               <li><a href="#">CARRER</a>
               </li>
               <li><a href="#">CONTACT</a>
               </li>
               <li>
                  <a href="#">Hi-{{ $LoggedUserInfo['name'] }} </a>
                  <ul class="range2">
                     <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <div class="section"></div>
         <div class="section"></div>
         <div class="section"></div>
      </div>
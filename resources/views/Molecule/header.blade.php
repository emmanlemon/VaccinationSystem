<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/header.css') }}">
    <title>Document</title>
</head>
<body>
    <section class="header">
        <nav>
            <img src="{{ url("../images/bcclogo.png") }}" alt="" style="width: 5%; height:5%">
            <p>Binalatongan Community College</p>
            <div class="nav-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="{{ route('show') }}">Profile</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
            <a href="{{ route('logout') }}" style="color: white; text-decoration: none; text-transform: uppercase; font-size: 1.25em; margin: 1% 0;">Logout</a>
        </nav>
    </section>
 @yield('content')

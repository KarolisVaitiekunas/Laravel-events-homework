<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        *{margin: 0;padding: 0; box-sizing: border-box;}
        body{height: 100vh}
        .main {height: 900px; width: 90vw; display: grid;grid-template-columns: repeat(3, 1fr);grid-template-rows: repeat(5, 1fr);grid-column-gap: 0px;grid-row-gap: 10px;margin-left: auto;margin-right: auto;}
        /* pirmas box */
        section:nth-of-type(1) {grid-area: 1 / 1 / 3 / 4; display: flex; justify-content: space-between; align-items: center; margin-top: 20px }

        section:nth-of-type(1) .box:nth-of-type(1) {background-color: #9197AE;  height: 100%;width: 50%;display: flex; flex-direction: column; justify-content: center; align-items: center; font-size: 4rem;}

        section:nth-of-type(1) .box:nth-of-type(2) {height: 40%; width:50%;display: flex; flex-direction: column; justify-content: space-around; align-items: center; }
        /* antras box */
        section:nth-of-type(2) {grid-area: 3 / 1 / 4 / 4; background-color: #273043;}
        section:nth-of-type(2) .box:nth-of-type(1) {height: 100%; width:100%;display: flex; flex-direction: column; justify-content: center; align-items: center;}
        section:nth-of-type(2) .box p {color: #EFF6EE; font-size: 3rem}

        /* trecias box */
        section:nth-of-type(3) {grid-area: 4 / 1 / 6 / 4; display: flex; justify-content: space-evenly; align-items: center; flex-wrap: wrap; overflow: auto;}
        section:nth-of-type(3) .box {text-align: center}

        .topnav {background-color: #273043; width: 90vw; height: 7vh; margin-left:auto; margin-right:auto; display: flex;}
        .topnav .links a {color: #EFF6EE; font-size: 1.4rem;}
        .topnav .links {width: 70%; display: flex; justify-content: space-evenly; align-items: center}

        .topnav .notLinks a {color: #EFF6EE; font-size: 1.8rem; padding: 5px}
        .topnav .notLinks {width: 30%; display: flex; border-left: 3px solid #9197AE; justify-content: space-around; align-items: center}

        .topnav .notLinks .logoutBtn {background-color:#EFF6EE; color: #273043; font-size: 1.2rem; font-weight: 600; padding: 3px; border: none; border-radius: 3px}
        .topnav .notLinks p {color: #EFF6EE; font-size: 1.5rem; margin-top: 13px}

        .latest-image {  height: 90%; width: 90%}

        .box h2,h4 {color: #273043;}
        .box form button{color: #273043; font-size: 1.7rem; border: none;text-decoration: underline; background-color: transparent}
        .box input {width: 180px; text-align: center; margin-left: auto; margin-right: auto;}


        .specificMain {margin-left: auto;margin-right: auto;width: 90vw; height: 90vh; display: flex;flex-direction: column; justify-content: center; margin-top: 20px}
        .specific-event {width: 100%; height: 100%; display:flex; justify-content: center; align-items: start; margin: 5px}
        .specific-form { width: 100%; display: flex; flex-direction: column; justify-content: center; align-items:center}
        .specific-button {background-color: transparent; color: #273043; font-size: 1.2rem; font-weight: 600; padding: 3px; border: 3px solid #273043; border-radius: 3px}
        .specific-attending {overflow-y: scroll; height: 120px}
        .specific-image{
            height: 100%;
        }

        .auth_form_login{display: flex;justify-content: center;align-items: center;height: 100%;}
        .auth_form_login form{height: 150px;width:300px;display: flex;flex-direction: column;justify-content: space-around;align-items: center;}

        .auth_form_register{display: flex;justify-content: center;align-items: center;height: 100%;}
        .auth_form_register form{height: 280px;width:300px;display: flex;flex-direction: column;justify-content: space-around;align-items: center;}

        .auth_form_post{display: flex;justify-content: center;align-items: center;height: 100%;}
        .auth_form_post form{height: 450px;width:300px;display: flex;flex-direction: column;justify-content: space-around;align-items: center;}

        .error{color: red;max-width: 180px;}
        .status{color:red; font-size: 2rem; margin-left:auto; margin-right: auto}
        .attendant{display: flex;}
        .attendant_kick{color: red; margin-left: 10px}


    </style>
</head>
<body class="bg-gray-200">
<div class="topnav">
  <div class="links">
      <a  href="{{route("home")}}">Main</a>
      <a  href="{{route("apie")}}">About project</a>
      <a  href="{{route("posts")}}">Create new event</a>
  </div>

    <div class="notLinks">
        @auth
            <p>{{ auth()->user()->name }}</p>
            <form action="{{route("logout")}}" method="post" class="p-3 inline">
                @csrf
                <button class="logoutBtn" type="submit">LOGOUT</button>
            </form>
        @endauth

        @guest
            <a href="{{route("register")}}">Register</a>
             <a href="{{route("login")}}">Login</a>
        @endguest
    </div>
</div>
@yield('content')
</body>
</html>

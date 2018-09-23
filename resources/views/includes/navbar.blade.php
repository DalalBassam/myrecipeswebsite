<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>موقع وصفاتي</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
  <script type="text/javascript" src="{{asset('js/jquery.app.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
 <link href="https://bootswatch.com/lumen/bootstrap.css" rel="stylesheet" type="text/css">

    </head>

    <body>

      <nav class="navbar navbar-static-top">
          <div class="container">
              <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <!-- Branding Image -->

              </div>

              <div class="collapse navbar-collapse" id="app-navbar-collapse">


                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-left">
                      <!-- Authentication Links -->
                      @if (Auth::guest())
                          <li><a href="{{ route('login') }}">Login</a></li>
                          <li><a href="{{ route('register') }}">Register</a></li>
                      @else
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">

                 <li><a href="/dashboard">Dashboard</a></li>
                                  <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </li>
                      @endif
                  </ul>


                  <!-- Left Side Of Navbar -->
  <ul class="nav navbar-nav  navbar-right">
<!-- Split button -->
<li>

<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btns btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    الاقسام الرئيسية <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">

      <li><a href="/category/11">وجبات رئيسية</a></li>
      <li><a href="/category/10">مقبلات</a></li>
          <li><a href="/category/7">شوربات</a></li>
              <li><a href="/category/9">سلطات</a></li>
    <li><a href="/category/8">حلويات</a></li>
  </ul>
</div>
  </li>
    <li><a href="/posts/create">
  اضافة وصفة</a></li>
<li><a href="/posts">الصفحة الرئيسية </a></li>
  <a class="navbar-brand" href="/posts">
    موقع وصفاتي
</a>
    </ul>
              </div>
          </div>
      </nav>


 @yield('content')





   <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
     <script>
         CKEDITOR.replace( 'article-ckeditor' );
     </script>


       <section class="footer">
       <div class="copyright text-center">
           Copyright &copy; 2018 <span>موقع وصفاتي</span> .Inc
         </div>
     </section>

<style>


a{
  text-decoration: none;
  color:#fff
}
a:hover{
  text-decoration: none;
  color:#fff
}

.footer .copyright {

   background-color:#FF9932;
 color:#ffffff;
    padding:15px 0;
    margin-top:30px;
    font-size:18px
}
.navbar{
  background-color:#FF9932;

padding: 0;
margin: 0;
   color:#000000;
}

.navbar .navbar-toggle {
  background-color:#fff;
}

.navbar .navbar-toggle span {
  background-color:#FF9932;
}

.navbar a{
  color:#fff
}


.navbar a:hover{
  color:#000;
  background-color: #FF9932;
}

ul li:hover
 {

  background-color: #FF9932;
}

</style>

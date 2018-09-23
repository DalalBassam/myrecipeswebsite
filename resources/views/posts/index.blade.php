    @extends('includes.navbar')
    @section('content')

      <!-- Start Carousel -->

       <div id="myslide" class="carousel slide " data-ride="carousel">

           <ol class="carousel-indicators">
               <li data-target="#myslide" data-slide-to="0" class="active"></li>
               <li data-target="#myslide" data-slide-to="1"></li>
               <li data-target="#myslide" data-slide-to="2"></li>
               <li data-target="#myslide" data-slide-to="3"></li>
           </ol>

           <div class="carousel-inner">

               <div class="item active">
                   <img src="img/03.jpg" width="1920" height="600" alt="Pic 1">
                   <div class="carousel-caption hidden-xs">
                       <p class="lead   hidden-xs">

اهلا وسهلا بك في موقع وصفاتي موقع يقدم لك اشهى الوصفات وبامكانك نشر وصفاتك الخاصة بك هنا

                        </p>
                       <button class="button btn-lg">  <a href="/posts/create"> Add  Recipe </a></button>
                   </div>
               </div>

               <div class="item">
                   <img src="img/02.jpg" width="1920" height="600" alt="Pic 2">

               </div>

               <div class="item">
                   <img src="img/01.jpg" width="1920" height="600" alt="Pic 3">

               </div>
               <div class="item">
                   <img src="img/04.jpg" width="1920" height="600" alt="Pic 3">

               </div>

                       </div>

           <a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
           </a>

           <a class="right carousel-control" href="#myslide" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
           </a>

</div>
    @include('includes.messages')

<div class="container">
<h1 class="text-center">الوصفات </h1>
<div class="row">
@foreach($posts as $post)
<div class="col-lg-3  col-md-4  col-sm-6 col-xs-12">
<div class="column"></div>
  <div class="post-module">
  <div class="thumbnail">
@if($post->url)
<p><img class="img-responsive" src="../upload/{{$post->url}}" width="470"  height="470"></p>
@endif
<div class="post-content">
<div class="name">by {{$post->user->name}}</div>
<h1 class="title">{{$post->subject}}</h1>
<button type="button" class="btn btns"><a class="pull-right" href="/posts/{{$post->id}}" class="btn btn-warning"> More read</a></button>
<div class="post-meta"><span class="timestamp">at {{$post->created_at}}</span></div>
</div>
</div>
</div>
</div>
<br>
@endforeach
  {{$posts->links()}}
</div>
</div>
</div>





@endsection

<script>
$('.carousel').carousel({
  interval: 5000,
  pause: "false"
});
</script>

      <style>

      .btn .btns{
        margin: 12px;
        background-color: #FF9932;

      }

      .footer .copyright {

         background-color: #EE7600;
       color:#ffffff;
          padding:15px 0;
          margin-top:30px;
          font-size:18px
      }


        .carousel-caption {

            background:rgba(3,3,3,0.3);
        }



       .carousel-caption   button.button{
           background-color: #EE7600; /* Green */

           border: none;
           color: white;
           padding: 10px 15px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 20px;
              -webkit-transition-duration: 0.4s; /* Safari */
           transition-duration: 0.4s;
           cursor: pointer;
           border-radius: 10px;
           margin-bottom: 70px

       }

         .carousel-caption   button.button a{
             color: #FFF;
             text-decoration: none;


         }

    .post-module {
      position: relative;
      z-index: 1;
      display: block;
      background: #FFFFFF;
      min-width: 250px;
      height: 500px;
      -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
      -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
      box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
      -webkit-transition: all 0.3s linear 0s;
      -moz-transition: all 0.3s linear 0s;
      -ms-transition: all 0.3s linear 0s;
      -o-transition: all 0.3s linear 0s;
      transition: all 0.3s linear 0s;
    }
    .post-module:hover,
    .hover {
      -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
      -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
    }
    .post-module:hover .thumbnail img,
    .hover .thumbnail img {
      -webkit-transform: scale(1.1);
      -moz-transform: scale(1.1);
      transform: scale(1.1);
      opacity: 0.6;
    }
    .post-module .thumbnail {
      height:250px;
      overflow: hidden;
    }

    .post-module .thumbnail img {
      display: block;
      width: 100%;
      -webkit-transition: all 0.3s linear 0s;
      -moz-transition: all 0.3s linear 0s;
      -ms-transition: all 0.3s linear 0s;
      -o-transition: all 0.3s linear 0s;
      transition: all 0.3s linear 0s;
    }
    .post-module .post-content {
      position: absolute;
      bottom: 0;
      background: #FFFFFF;
      width: 95%;
      padding: 45px;
      -webkti-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
      -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
      -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
      -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
      transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
    }
    .post-module .post-content .name {
      position: absolute;
      top: -44px;
      left: 0;
       background-color: #EE7600;
      padding: 10px 15px;
      color: #FFFFFF;
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
    }
    .post-module .post-content .title {
      margin: 0;
      padding: 0 0 10px;
          color: #EE7600;
      font-size: 26px;
      font-weight: 700;
    }

    .post-module .post-content .post-meta {
      margin: 30px 0 0;
      color: #999999;
    }
    .post-module .post-content .post-meta .timestamp {
      margin: 0 16px 0 0;
    }
    .post-module .post-content .post-meta a {
      color: #999999;
      text-decoration: none;
    }


   .column {
  width: 100px;
      -webkti-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    float: left;

margin-left: 20px;

    }
 .column .demo-title {
      margin: 0 0 15px;
      color: #666666;
      font-size: 18px;
      font-weight: bold;
      text-transform: uppercase;
    }

    .column .post-module .post-content button.btn .btns{
  background-color:  #EE7600;
}


.btns{
color:#fff;
  background-color: #FF9932;



}

      </style>

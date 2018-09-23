
    @extends('includes.navbar')

    @section('content')

    @include('includes.messages')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<div class="container">
    <div class="row">
      <section class="dashboard">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel dashboard">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   <a href="/posts/create" class="btn btns btn-lg">New post !</a>
                <hr>
                @foreach($posts as $post)
                <div class="panel panel-default">


                    <div class="panel-heading">
                      <h2  class="text-center"> {{$post->subject}}</h2>

                    </div>
                    <div class="panel-body">

                      @if($post->url)
                     <p ><img class="img-responsive  " src="../upload/{{$post->url}}"  height="400"  width="400"></p>
               @endif
     <p>  {!!$post->body!!}</p>


     <a   href="/posts/{{$post->id}}/edit" class="btn btns  pull-left">Edit</a>


             <form action="/posts/{{$post->id}}" method="POST"     enctype="multipart/form-data">
                 <input type="hidden" name="_method" value="DELETE">

                 <button type="submit" class="btn btns pull-right"><a href="/posts/{{$post->id}}/destroy"> Delete</a></button>
             </form>

                    </div>


                </div>
                @endforeach



                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection









<style>
h2,p{
direction: rtl;

}

img {
  margin: auto;
}

p{
  font-size: 20px


}
   .dashboard .panel  .panel-heading {
  background-color:#ffc125;
    color:#fff
  }


  .dashboard  .panel  .panel-body{

border: 1px solid #ffc125;

      }


  .dashboard .panel a{
  text-decoration: none;
  color:#fff
}

  .dashboard .panel a:hover{
  text-decoration: none;
  color:#fff
}


   .dashboard .panel .btns{
background-color: #ffc125;
font-size: 15px;

}
</style>

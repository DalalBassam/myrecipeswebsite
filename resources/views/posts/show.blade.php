  @extends('includes.navbar')
@section('content')
  @include('includes.messages')


  <div class="container  ">
  <section class="show">
            <div class="panel ">
              <div class="panel-heading"> show Post</div>
              <div class="panel-body">
                    <h2  class="text-center"> {{$post->subject}}</h2>

                    @if($post->url)
                   <p ><img class="img-responsive  " src="../upload/{{$post->url}}"  height="400"  width="400"></p>
             @endif
     <p>
<br>
         {!!$post->body!!}
<br>


     </p>
   <span>created at : {{$post->created_at}}</span><br>
 <span>  by {{$post->user->name}}</span>
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)


<br>
<br>


<form  action="/posts/{{$post->id}}"  method="post"    enctype="multipart/form-data">
  <button type="button" class="btn btns"><a href="/posts/{{$post->id}}/edit" >Edit</a></button>

<button type="submit" class="btn btns"><a href="/posts/{{$post->id}}/destroy"> Delete</a></button>
</form>


@endif
@endif


<button type="button"   class="pull-right  btn btns"><a href="/posts">Back</a></button>



</div>
</div>
</section>
</div>
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
 .panel  .panel-heading {
  background-color:#ffc125;
    color:#fff
  }


    .panel .panel-body{

border: 1px solid #ffc125;

      }


.panel a{
  text-decoration: none;
  color:#fff
}

.panel a:hover{
  text-decoration: none;
  color:#fff
}


.show  .btns{
  margin: 12px;
  background-color: #ffc125;

}
</style>

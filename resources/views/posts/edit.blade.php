
    @extends('includes.navbar')

    @section('content')

    @include('includes.messages')



  <div class="container">
  <section class="edit_new">

   <div class="panel ">
     <div class="panel-heading ">Edit Post</div>
     <div class="panel-body">
      <form  method="POST"  action="/posts/{{$post->id}}"
 enctype="multipart/form-data"  >
          <!--    الاكشن فيه روت تخزين البيانات-->

          {{csrf_field()}}
          <!-- للحماية-->

          <div class="form-group">
              <label for="subject">subject</label>
              <input type="text" name="subject"  value="{{$post->subject}}" id="subject" class="form-control" >
          </div>


  					 <div class="form-group">
              <label>Discriptions</label>
  		 <textarea  name="body"   class="form-control" >
         {{$post->body}}
  		 </textarea>
  			             		   </div>

            <div class="form-group">
         <label for="url">image</label>
    <input type="file" id="url" value="{{$post->url}}"  name="url">
          </div>


<input type="hidden" name="_method" value="put" />

          <div class="form-group">
          <button type="submit" class="btn btns">Update</button>
          </div>
      </form>


         </div>
       </div>
     </section>
   </div>
<br> <br>
  @endsection



  <style>


.edit_new .panel  .panel-heading {
  background-color:#ffc125
  }


  .edit_new   .panel .panel-body{

border: 1px solid #ffc125;

      }

.edit_new .btns{
background-color: #ffc125;
margin: 20px

}

  </style>



    @extends('includes.navbar')

    @section('content')

    @include('includes.messages')

<div class="container  ">
<section class="add_new">

 <div class="panel ">
   <div class="panel-heading">Add New Post</div>
   <div class="panel-body">

      <form  method="POST"  action="/posts"
 enctype="multipart/form-data"  >


          {{csrf_field()}}
          <!-- للحماية-->

          <div class="form-group">
              <label for="subject">subject</label>
              <input type="text"   name="subject" id="subject" class="form-control" >
          </div>


  					 <div class="form-group">
              <label>Discriptions</label>
  		 <textarea name="body"   class="form-control" id="article-ckeditor">
  		 </textarea>
  			             		   </div>

<div class="form-group form-group-lg">
      	<label class=" control-label">Category</label>

        <select name="category->id" >
         @foreach($categories as $category )
              <option  value="{{$category->id}} ">{{$category->category_name }}</option>
        @endforeach
          </select>
        </div>

<div>
          <label for="url">image</label>
           <input type="file"
                  id="url" name="url"
                   />
                 </div>

          <div class="form-group">
          <button type="submit" class="btn btns">Create</button>
          </div>
      </form>

</div>
</div>
</section>
</div>


@endsection


<style>


.navbar a{
  color:#fff
}


.navbar a:hover{
  color:#000;
  background-color: #FF9932;
}
    .add_new .panel  .panel-heading {
      background-color:#ffc125;
      }


          .add_new .panel .panel-body{

border: 1px solid #ffc125;

          }

.add_new  .btns{
background-color: #ffc125;
margin-top:  30px;

font-size: 15px;

}


</style>

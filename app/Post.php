<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Comment;

class Post extends Model
{

/*الكومنت الواحد برتبط ببوست والبوست بحوي اكتر من كومنت*/

  public function comments(){
/* العلاقة اللي عنا انو كل بوست رح يرتبط بأكتر من كومنت يعني علاقة واحد بميني*/
      return $this->hasMany(Comment::Class)->orderBy('created_at');

  }
  public function category(){
    /*العلاقة انو كل بوست رح يرتبط بقسم والقسم فيه اكتر من بوست*/

      return $this->belongsTo(Category::Class);

  }

  public function user(){
    /*العلاقة انو كل بوست رح يرتبط بقسم والقسم فيه اكتر من بوست*/

      return $this->belongsTo(user::Class);

  }


}

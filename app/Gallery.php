
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table="gallaries";
    
    public function images()
    {
        return $this->hasMany(Image::class,'gallaries_id','id');
    }
}

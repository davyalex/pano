<?php

namespace App\Models;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    // use HasFactory;

    protected $fillable=[
        'nom','ville','contact','genre','description','category_id','user_id'
    ];


    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id','id',);
    }
}

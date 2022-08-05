<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['user_id','body'];

    /**
     * Comment morphs to models in commentable_type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function comments()
    {
        // morphTo($name = commentable, $type = commentable_type, $id = commentable_id)
        // requires commentable_type and commentable_id fields on $this->table
        return $this->morphTo('commentable');
    }    
}

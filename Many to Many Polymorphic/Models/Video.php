<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['title'];
    
    public function tags()
    {
        // morphToMany(RelatedModel, morphName, pivotTable = ables, thisKeyOnPivot = able_id, otherKeyOnPivot = tag_id)
        return $this->morphToMany(Tag::class, 'taggable');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['title'];

    /**
     * Tag is morphed by many (many-to-many) Posts.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphedByMany
     */
    public function posts()
    {
        // morphedByMany(RelatedModel, morphName, pivotTable = tagables, thisKeyOnPivot = tag_id, otherKeyOnPivot = tagable_id)
        return $this->morphedByMany(Post::class, 'tagable');
    }

    /**
     * Tag is morphed by many (many-to-many) Videos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphedByMany
     */
    public function videos()
    {
        // morphedByMany(RelatedModel, morphName, pivotTable = tagables, thisKeyOnPivot = tag_id, otherKeyOnPivot = tagable_id)
        return $this->morphedByMany(Video::class, 'tagable');
    }
}

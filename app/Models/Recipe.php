<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    const ACTIVE = true;
    const NOT_ACTIVE = false;

    protected $appends = [
        "author_image",
        "author_name",
        "isActive",
        "category_name",
        "level_name",
        "cost_name",
        "image_link",
    ];

    protected $hidden = [
        "author",
        "images",
        "category",
        "active",
        "created_at",
        "updated_at",
        "category_id",
        "level",
        "level_id",
        "cost",
        "cost_id"
    ];

    // Relations
    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function cost()
    {
        return $this->belongsTo(Cost::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    // Attributes
    public function getAuthorNameAttribute()
    {
        return $this->author->name;
    }

    public function getAuthorImageAttribute()
    {
        $socialProfiles = $this->author->socialProfiles()->first();

        if ($socialProfiles) {
            return $socialProfiles->social_avatar;
        }

        if ($this->author->profile_photo_path) {
            return $this->author->profile_photo_path;
        }

        return asset("images/default-avatar.png");
    }

    public function getImageLinkAttribute()
    {
        return $this->images->pluck("url")[0];
    }

    public function getCategoryNameAttribute()
    {
        return $this->category->title;
    }

    public function getLevelNameAttribute()
    {
        return $this->level->title;
    }

    public function getCostNameAttribute()
    {
        return $this->cost->title;
    }

    public function getIsActiveAttribute()
    {
        return $this->active ? true : false;
    }
}

<?php

namespace App\Models;

use App\Traits\Slugit;
use Backpack\CRUD\CrudTrait;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon;

class Article extends Model
{
    use CrudTrait;
    use HasTranslations;
    use Sluggable;
    use SoftDeletes;
    use Slugit;

    protected $table = 'articles';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'image',
        'title',
        'description',
        'slug',
        'status',
        'images',
        'published_date',
        'featured',
    ];

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    public $translatable = ['title', 'description', 'slug'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function getPostedDateAttribute() {
        return $this->date->format('d M Y H:i');
    }
    public function getLocaleDateAttribute()
    {
        return $this->date->diffForHumans();
        //return $this->date->formatLocalized('%d %B %Y');
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function categories()
    {
        return $this->belongsToMany(ArticleCategory::class, 'article_category', 'article_id', 'category_id');
    }
    public function category()
    {
        return $this->categories->first();
    }


    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED')->where('date', '<=', Carbon\Carbon::now())->orderBy('date', 'DESC');
    }


    public function scopePopular($query) {
        $query->where('status', 'PUBLISHED')->where('date', '<=', Carbon\Carbon::now()->subDays(3))->orderBy('date', 'DESC')->orderBy('views', 'DESC');
    }


    public function getReadingTimeAttribute()
    {
        return reading_time($this->attributes['content']);
    }


    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    protected $casts = [
        'images' => 'array',
    ];
}

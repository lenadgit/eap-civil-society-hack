<?php

namespace App\Traits;

trait Slugit
{


    public function scopeFindBySlug($query, $slug)
    {
        return $query->where('slug', 'LIKE', '%"' . app()->getLocale() . '":"' . $slug . '"%');
    }

    public function scopeFindBySlugLocale($query, $slug)
    {
        return $query->where('slug', 'LIKE', '%"' . config('app.fallback_locale') . '":"' . $slug . '"%');
    }

}
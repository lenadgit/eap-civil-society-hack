<?php

namespace App\Models;

use App\Traits\Slugit;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Complain
 * @package App\Models
 */
class Complain extends Model
{
    use Sluggable;
    use Slugit;
    use SoftDeletes;
    use CrudTrait;


    //
    /**
     * @var string[]
     */
    protected $fillable =
        [
            'complain_number',
            'admin_id',
            'user_id',
            'description',
            'attachment',
            'type',
            'admin_note',
            'facility_id'
        ];

    /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */


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
     * @return \string[][]
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'complain_number',
            ],
        ];
    }
}
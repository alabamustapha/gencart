<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Store extends Model
{
    use Sluggable;

    protected $table = 'stores';

    protected $fillable = ['name','name','logo','banner','zipcode','addresses','phone','status','user_id'];

    protected $hidden = ['user_id'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function departments(){
        return $this->hasMany('App\Department');
    }
}

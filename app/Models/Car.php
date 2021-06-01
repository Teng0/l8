<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table="cars";
    protected $primaryKey="id";
    public $timestamps =true;
    protected $timeformat = 'h:m:s';
    protected $fillable=['name','founded','description','image_path'];

    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }
    public function engines()
    {
        return $this->hasManyThrough(Engine::class,
            CarModel::class,
            'car_id', //CarModel foreign Key
            'model_id',// Egine foreign Key
        );

    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

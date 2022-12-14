<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'imagens';
    protected $primaryKey = 'id_imagen';
    protected $guarded = ['s'];

    public function Artesania(){
        return $this->hasMany(Artesania::class,'artesania_id');
    }

}

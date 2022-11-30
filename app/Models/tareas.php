<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tareas extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tareas';
    protected $fillable=[
        'name',
        'description',
        'state',
        'register_date',
        'change_date',
    ];
    public const STATE = ['waiting','finished','postponed','cancelled','removed'];
    public function state()
    {
      return self::STATE[$this->state];   
    }
    
}

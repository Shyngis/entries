<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'bin'
    ];

    public function subpartners()
    {
        return $this->hasMany(Subpartner::class);
    }

    public function numbers()
    {
        return $this->hasMany(Number::class);
    }
}

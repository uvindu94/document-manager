<?php

namespace Modules\Documents\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sales_officer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'contact'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Documents\Database\factories\SalesOfficerFactory::new();
    }
}

<?php

namespace Modules\Documents\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Documents\Database\factories\DocumentCategoryFactory::new();
    }
}

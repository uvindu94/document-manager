<?php

namespace Modules\Documents\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'path',
        'doc_name',
        'user_id',
        'category'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Documents\Database\factories\DocumentFactory::new();
    }
}

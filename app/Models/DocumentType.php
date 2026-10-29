<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    protected$fillable = [
        'description',
    ];

    protected $table = 'documents_type';
    protected $primaryKey = 'id_document_type';
    public $incrementing = false;
}

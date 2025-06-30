<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patent extends Model
{
    protected $table = 'patents';

    protected $fillable = [
        'patent_number',
        'title',
        'assignee',
        'inventor',
        'publication_date',
        'technology_area',
        'patent_type',
        'country',
        'abstract',
    ];

    public $timestamps = false;
}

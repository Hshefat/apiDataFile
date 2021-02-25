<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FileImage extends Model
{
    protected $table = 'file_images';
    protected $fillable = [

        // 'name',
        'path'
    ];
    public $timestamp = false;
}
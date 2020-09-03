<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class news
 * @package App\Models
 * @version April 22, 2020, 9:37 pm UTC
 *
 * @property string judul_artikel
 * @property string artikel
 * @property string tanggal
 * @property string gambar
 */
class news extends Model
{
   
    public $table = 'newses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'judul_artikel',
        'artikel',
        'tanggal',
        'gambar',
        'kategori'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'judul_artikel' => 'string',
        'artikel' => 'string',
        'tanggal' => 'date',
        'gambar' => 'string',
        'kategori' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

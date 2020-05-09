<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Head
 * @package App\Models
 * @version April 23, 2020, 8:25 am UTC
 *
 * @property \App\Models\Gtk idGtk
 * @property integer id_gtk
 * @property string nama
 * @property string jabatan
 * @property string nip
 * @property string foto
 */
class Head extends Model
{

    public $table = 'heads';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_gtk',
        'nama',
        'jabatan',
        'nip',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_gtk' => 'integer',
        'nama' => 'string',
        'jabatan' => 'string',
        'nip' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idGtk()
    {
        return $this->belongsTo(\App\Models\Gtk::class, 'id_gtk');
    }
}

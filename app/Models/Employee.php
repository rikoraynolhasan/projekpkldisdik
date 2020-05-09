<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 * @package App\Models
 * @version April 26, 2020, 3:59 pm UTC
 *
 * @property \App\Models\Gtk idGtk
 * @property integer id_gtk
 * @property string nama
 * @property string jabatan
 * @property string nip
 * @property string foto
 * @property string karyawan
 */
class Employee extends Model
{

    public $table = 'employees';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_gtk',
        'nama',
        'jabatan',
        'nip',
        'foto',
        'karyawan'
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
        'foto' => 'string',
        'karyawan' => 'string'
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

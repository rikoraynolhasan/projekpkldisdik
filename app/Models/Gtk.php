<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gtk
 * @package App\Models
 * @version April 23, 2020, 8:32 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection employees
 * @property \Illuminate\Database\Eloquent\Collection heads
 * @property string gtk
 * @property string visi
 * @property string misi
 */
class Gtk extends Model
{

    public $table = 'gtks';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'gtk',
        'visi',
        'misi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'gtk' => 'string',
        'visi' => 'string',
        'misi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employees()
    {
        return $this->hasMany(\App\Models\Employee::class, 'id_gtk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function heads()
    {
        return $this->hasMany(\App\Models\Head::class, 'id_gtk');
    }
}

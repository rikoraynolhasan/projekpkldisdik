<?php

namespace App\Repositories;

use App\Models\Head;
use App\Models\Gtk;

use App\Repositories\BaseRepository;

/**
 * Class HeadRepository
 * @package App\Repositories
 * @version April 23, 2020, 8:25 am UTC
*/

class HeadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_gtk',
        'nama',
        'jabatan',
        'nip',
        'foto'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Head::class;
    }
}

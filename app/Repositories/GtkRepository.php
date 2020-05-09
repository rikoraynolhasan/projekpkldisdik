<?php

namespace App\Repositories;

use App\Models\Gtk;
use App\Repositories\BaseRepository;

/**
 * Class GtkRepository
 * @package App\Repositories
 * @version April 23, 2020, 8:32 am UTC
*/

class GtkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'gtk',
        'visi',
        'misi'
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
        return Gtk::class;
    }
}

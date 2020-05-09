<?php

namespace App\Repositories;

use App\Models\Galeri;
use App\Repositories\BaseRepository;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * Class GaleriRepository
 * @package App\Repositories
 * @version April 26, 2020, 9:51 am UTC
*/

class GaleriRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'foto_url',
        'nama'
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
        return Galeri::class;
    }
    public function createGaleri(Request $request){
        $file = $request->file('foto_url');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = 'img/galeri/'.uniqid().'.'.$extension;
        $img = Image::make($file); 
        $img->save(public_path($path));

        $input = $request->all();
        $input['foto_url'] = $path;

        return $this->create($input);
    }

    public function updateGaleri(Request $request, $id){
        $file = $request->file('foto_url');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = 'img/galeri/'.uniqid().'.'.$extension;
        $img = Image::make($file); 
        $img->save(public_path($path));

        $input = $request->all();
        $input['foto_url'] = $path;

        return $this->update($input, $id);
    }
}

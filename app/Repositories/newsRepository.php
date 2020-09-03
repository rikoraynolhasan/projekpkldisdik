<?php

namespace App\Repositories;

use App\Models\news;
use App\Repositories\BaseRepository;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
/**
 * Class newsRepository
 * @package App\Repositories
 * @version April 22, 2020, 9:37 pm UTC
*/

class newsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'judul_artikel',
        'artikel',
        'tanggal',
        'gambar',
        'kategori'
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
        return news::class;
    }

    public function createnews(Request $request){
        $file = $request->file('gambar');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = 'img/news/'.uniqid().'.'.$extension;
        $img = Image::make($file); 
        $img->save(public_path($path));

        $input = $request->all();
        $input['gambar'] = $path;

        return $this->create($input);
    }

    public function updatenews(Request $request, $id){
        $file = $request->file('gambar');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = 'img/news/'.uniqid().'.'.$extension;
        $img = Image::make($file); 
        $img->save(public_path($path));

        $input = $request->all();
        $input['gambar'] = $path;

        return $this->update($input, $id);
    }
}

<?php

namespace App\Repositories;

use App\Models\test_library_2;
use App\Repositories\BaseRepository;

/**
 * Class test_library_2Repository
 * @package App\Repositories
 * @version May 2, 2022, 11:43 am UTC
*/

class test_library_2Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        '(title',
        '(isbn',
        '(pageCount',
        '(publischedDate',
        '(thumbnailUrl',
        '(shortDescription',
        '(longDescription',
        '(status',
        '(autors',
        '(categoris'
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
        return test_library_2::class;
    }
}

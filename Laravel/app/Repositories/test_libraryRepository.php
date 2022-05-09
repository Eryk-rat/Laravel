<?php

namespace App\Repositories;

use App\Models\test_library;
use App\Repositories\BaseRepository;

/**
 * Class test_libraryRepository
 * @package App\Repositories
 * @version May 2, 2022, 10:45 am UTC
*/

class test_libraryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return test_library::class;
    }
}

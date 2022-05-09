<?php

namespace App\Repositories;

use App\Models\test;
use App\Repositories\BaseRepository;

/**
 * Class testRepository
 * @package App\Repositories
 * @version May 2, 2022, 10:27 am UTC
*/

class testRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'post_date',
        'email',
        'post_type',
        'category'
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
        return test::class;
    }
}

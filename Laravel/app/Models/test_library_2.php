<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class test_library_2
 * @package App\Models
 * @version May 2, 2022, 11:43 am UTC
 *
 * @property string $(title
 * @property intiger $(isbn
 * @property intiger $(pageCount
 * @property string|\Carbon\Carbon $(publischedDate
 * @property string $(thumbnailUrl
 * @property string $(shortDescription
 * @property string $(longDescription
 * @property string $(status
 * @property string $(autors
 * @property string $(categoris
 */
class test_library_2 extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'test_library_2s';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        '(title' => 'string',
        '(publischedDate' => 'datetime',
        '(thumbnailUrl' => 'string',
        '(shortDescription' => 'string',
        '(longDescription' => 'string',
        '(status' => 'string',
        '(autors' => 'string',
        '(categoris' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

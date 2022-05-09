<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class test_library
 * @package App\Models
 * @version May 2, 2022, 10:45 am UTC
 *
 */
class test_library extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'test_libraries';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

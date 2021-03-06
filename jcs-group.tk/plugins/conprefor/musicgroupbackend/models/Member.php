<?php namespace Conprefor\Musicgroupbackend\Models;

use Model;

/**
 * Model
 */
class Member extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'conprefor_musicgroupbackend_members';
	
	public $attachOne = [
    'avatarimage' => 'System\Models\File'
];
}

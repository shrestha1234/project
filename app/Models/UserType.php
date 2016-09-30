<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model {

    /**
     * Generated
     */

    protected $table = 'user_type';
    protected $fillable = ['id', 'name'];
    public $timestamps=false;


}

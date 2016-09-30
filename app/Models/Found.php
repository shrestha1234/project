<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class Found extends Model {

    /**
     * Generated
     */

    protected $table = 'found';
    protected $fillable = ['id', 'description', 'image', 'user_id', 'item_type_id', 'date'];

    public $timestamps=false;

}

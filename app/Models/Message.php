<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    /**
     * Generated
     */

    protected $table = 'message';
    protected $fillable = ['id', 'subject', 'body', 'created_date'];
    public $timestamps=false;


}

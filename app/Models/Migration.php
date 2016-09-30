<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class Migration extends Model {

    /**
     * Generated
     */

    protected $table = 'migrations';
    protected $fillable = ['migration', 'batch'];
    public $timestamps=false;


}

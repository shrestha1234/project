<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class Lost extends Model {

    /**
     * Generated
     */

    protected $table = 'lost';
    protected $fillable = ['id', 'description', 'image', 'user_id', 'item_type_id', 'date'];

    public $timestamps=false;
    public function itemType() {
        return $this->belongsTo(\Lost\Models\ItemType::class, 'item_type_id', 'id');
    }

    public function user() {
        return $this->belongsTo(\Lost\Models\User::class, 'user_id', 'id');
    }


}

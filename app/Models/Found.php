<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class Found extends Model {

    /**
     * Generated
     */

    protected $table = 'found';
    protected $fillable = ['id', 'description', 'image', 'user id', 'item type_id', 'date'];


    public function itemType() {
        return $this->belongsTo(\Lost\Models\ItemType::class, 'item type_id', 'id');
    }

    public function user() {
        return $this->belongsTo(\Lost\Models\User::class, 'user id', 'id');
    }


}

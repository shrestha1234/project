<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class Found extends Model {

    /**
     * Generated
     */

    protected $table = 'found';
    protected $fillable = ['id', 'description', 'image', 'user_id', 'item_type_id', 'date', 'model', 'title', 'address', 'specific_location', 'lostorfound_place'];
    public $timestamps=false;

    public function itemType() {
        return $this->belongsTo(\Lost\Models\ItemType::class, 'item_type_id', 'id');
    }

    public function user() {
        return $this->belongsTo(\Lost\Models\User::class, 'user_id', 'id');
    }


}

<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model {

    /**
     * Generated
     */

    protected $table = 'item_type';
    protected $fillable = ['id', 'name'];
    public $timestamps=false;

    public function users() {
        return $this->belongsToMany(\Lost\Models\User::class, 'lost', 'item_type_id', 'user_id');
    }

    public function losts() {
        return $this->hasMany(\Lost\Models\Lost::class, 'item_type_id', 'id');
    }


}

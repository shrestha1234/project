<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model {

    /**
     * Generated
     */

    protected $table = 'item type';
    protected $fillable = ['id', 'name'];


    public function users() {
        return $this->belongsToMany(\Lost\Models\User::class, 'found', 'item type_id', 'user id');
    }

    public function users() {
        return $this->belongsToMany(\Lost\Models\User::class, 'lost', 'item type_id', 'user id');
    }

    public function founds() {
        return $this->hasMany(\Lost\Models\Found::class, 'item type_id', 'id');
    }

    public function losts() {
        return $this->hasMany(\Lost\Models\Lost::class, 'item type_id', 'id');
    }


}

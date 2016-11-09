<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */

    protected $table = 'users';
    protected $fillable = ['id', 'username', 'password', 'email', 'user_typeid'];
    public $timestamps=false;

    public function itemTypes() {
        return $this->belongsToMany(\Lost\Models\ItemType::class, 'found', 'user_id', 'item_type_id');
    }



    public function founds() {
        return $this->hasMany(\Lost\Models\Found::class, 'user_id', 'id');
    }

    public function losts() {
        return $this->hasMany(\Lost\Models\Lost::class, 'user_id', 'id');
    }

    public function userDetails() {
        return $this->hasMany(\Lost\Models\UserDetail::class, 'user_id', 'id');
    }


}

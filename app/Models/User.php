<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */

    protected $table = 'user';
    protected $fillable = ['id', 'username', 'password', 'email', 'user typeid'];


    public function itemTypes() {
        return $this->belongsToMany(\Lost\Models\ItemType::class, 'found', 'user id', 'item type_id');
    }

    public function itemTypes() {
        return $this->belongsToMany(\Lost\Models\ItemType::class, 'lost', 'user id', 'item type_id');
    }

    public function founds() {
        return $this->hasMany(\Lost\Models\Found::class, 'user id', 'id');
    }

    public function losts() {
        return $this->hasMany(\Lost\Models\Lost::class, 'user id', 'id');
    }

    public function messageBoxes() {
        return $this->hasMany(\Lost\Models\MessageBox::class, 'user_id', 'id');
    }

    public function userDetails() {
        return $this->hasMany(\Lost\Models\UserDetail::class, 'user id', 'id');
    }


}

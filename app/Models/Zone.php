<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model {

    /**
     * Generated
     */

    protected $table = 'zone';
    protected $fillable = ['id', 'state_id', 'name'];
    public $timestamps=false;

    public function state() {
        return $this->belongsTo(\Lost\Models\State::class, 'state_id', 'id');
    }

    public function districts() {
        return $this->hasMany(\Lost\Models\District::class, 'zone_id', 'id');
    }

    public function userDetails() {
        return $this->hasMany(\Lost\Models\UserDetail::class, 'zone_id', 'id');
    }


}

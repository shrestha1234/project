<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model {

    /**
     * Generated
     */

    protected $table = 'userdetail';
    protected $fillable = ['id', 'user_id', 'firstname', 'lastname', 'address', 'phone_no', 'country_id', 'state_id', 'zone_id', 'district_id', 'locality'];


    public function country() {
        return $this->belongsTo(\Lost\Models\Country::class, 'country_id', 'id');
    }

    public function district() {
        return $this->belongsTo(\Lost\Models\District::class, 'district_id', 'id');
    }

    public function zone() {
        return $this->belongsTo(\Lost\Models\Zone::class, 'zone_id', 'id');
    }

    public function state() {
        return $this->belongsTo(\Lost\Models\State::class, 'state_id', 'id');
    }

    public function user() {
        return $this->belongsTo(\Lost\Models\User::class, 'user_id', 'id');
    }


}

<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

    /**
     * Generated
     */

    protected $table = 'state';
    protected $fillable = ['id', 'country_id', 'name'];
    public $timestamps=false;

    public function country() {
        return $this->belongsTo(\Lost\Models\Country::class, 'country_id', 'id');
    }

    public function userDetails() {
        return $this->hasMany(\Lost\Models\UserDetail::class, 'state_id', 'id');
    }

    public function zones() {
        return $this->hasMany(\Lost\Models\Zone::class, 'state_id', 'id');
    }


}

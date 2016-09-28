<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    /**
     * Generated
     */

    protected $table = 'country';
    protected $fillable = ['id', 'country_name'];


    public function states() {
        return $this->hasMany(\Lost\Models\State::class, 'country_id', 'id');
    }

    public function userDetails() {
        return $this->hasMany(\Lost\Models\UserDetail::class, 'country_id', 'id');
    }


}

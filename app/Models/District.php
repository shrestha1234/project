<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model {

    /**
     * Generated
     */

    protected $table = 'district';
    protected $fillable = ['id', 'zone_id', 'name'];
    public $timestamps=false;


    public function zone() {
        return $this->belongsTo(\Lost\Models\Zone::class, 'zone_id', 'id');
    }

    public function userDetails() {
        return $this->hasMany(\Lost\Models\UserDetail::class, 'district_id', 'id');
    }


}

<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class BoxType extends Model {

    /**
     * Generated
     */

    protected $table = 'box type';
    protected $fillable = ['id', 'name'];


    public function messageBoxes() {
        return $this->hasMany(\Lost\Models\MessageBox::class, 'box type_id', 'id');
    }


}

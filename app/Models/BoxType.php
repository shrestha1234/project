<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class BoxType extends Model {

    /**
     * Generated
     */

    protected $table = 'box_type';
    protected $fillable = ['id', 'name'];
    public $timestamps=false;


    public function messageBoxes() {
        return $this->hasMany(\Lost\Models\MessageBox::class, 'box_type_id', 'id');
    }


}

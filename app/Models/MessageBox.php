<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class MessageBox extends Model {

    /**
     * Generated
     */

    protected $table = 'message_box';
    protected $fillable = ['id', 'message_id', 'user_id', 'box_type_id', 'message_body'];
    public $timestamps=false;

    public function boxType() {
        return $this->belongsTo(\Lost\Models\BoxType::class, 'box_type_id', 'id');
    }


}

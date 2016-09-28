<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class MessageBox extends Model {

    /**
     * Generated
     */

    protected $table = 'messagebox';
    protected $fillable = ['id', 'message_id', 'user_id', 'box type_id', 'messagebody'];


    public function boxType() {
        return $this->belongsTo(\Lost\Models\BoxType::class, 'box type_id', 'id');
    }

    public function message() {
        return $this->belongsTo(\Lost\Models\Message::class, 'message_id', 'id');
    }

    public function user() {
        return $this->belongsTo(\Lost\Models\User::class, 'user_id', 'id');
    }


}

<?php namespace Lost\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    /**
     * Generated
     */

    protected $table = 'message';
    protected $fillable = ['id', 'subject', 'body', 'created date'];


    public function messageBoxes() {
        return $this->hasMany(\Lost\Models\MessageBox::class, 'message_id', 'id');
    }


}

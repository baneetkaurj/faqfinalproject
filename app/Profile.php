<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Profile extends Model
{
    protected $fillable = ['fname', 'lname', 'body'];


    //
    private $rules = array(
        'fname' => 'required|alpha',
        'lname' => 'required|alpha',
        'body' => 'required|alpha|min:10',


    );
    protected $fillable = ['fname', 'lname', 'body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected static $contact;
    public static function saveData($request){

        self::$contact=new Contact();
        self::$contact->name                =$request->name;
        self::$contact->email                =$request->email;
        self::$contact->subject                =$request->subject;
        self::$contact->message                =$request->message;
        self::$contact->save();

    }
}

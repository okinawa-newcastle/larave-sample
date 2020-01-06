<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    // table名を指定
    protected $table = 'memo';

    // カラムを指定
    protected $fillable = [
        'id', 'title', 'content' , 'timestamps'
    ];

    // created_atを使わない場合はfalseを指定する。
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'userid',
        'gender',
        'contact',
        'series',
        'head',
        'shoulder',
        'arm',
        'waist',
        'leg',
        'photo',
        'photo2',
        'photo3',
        'photo4',
        'photo5',
        'photo6',
    ];

    
    public function scopesearchposts($query, $keyword = null, $gender = null, $series = null)
    {
        if(empty($series) and empty($keyword) and empty($gender)){
            return $query;
        }
        //キーワードだけの場合
        if(!empty($keyword) and empty($gender) and empty($series)){
            return $query->where('title', 'like', '%' . $keyword . '%' );
        }
        //性別だけの場合
        if(!empty($gender) and empty($keyword) and empty($series)){        
            return $query->where('gender', 'like', $gender);
        }
        
        //シリーズだけの場合
        if(!empty($series) and empty($keyword) and empty($gender)){
            return $query->where('series', 'like', $series);
        }
        //シリーズ＋キーワードの場合
        if(!empty($series)  and !empty($keyword) and empty($gender)){
            return $query->where('series', 'like', $series)
                         ->where('title', 'like', '%' . $keyword . '%' );
        }
        //シリーズ＋性別の場合
        if(!empty($series) and empty($keyword) and !empty($gender)){
            return $query->where('series', 'like', $series)
                         ->where('gender', 'like', $gender);
        }
        //キーワード＋性別の場合
        if(empty($series) and !empty($keyword) and !empty($gender)){
            return $query->where('gender', 'like', $gender)
                         ->where('title', 'like', '%' . $keyword . '%' );
        }
        //キーワード＋性別+シリーズの場合
        if(!empty($series) and !empty($keyword) and !empty($gender)){
            return $query->where('title', 'like', '%' . $keyword . '%' )
                         ->where('series', 'like', $series)
                         ->where('gender', 'like', $gender);
        }
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//論理削除を行う場合は追加する。
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;

    use SoftDeletes; //論理削除を行う場合は追加する。
    //当該ﾓﾃﾞﾙｸﾗｽと articles ﾃｰﾌﾞﾙを紐づける。命名規則に基づくため、なくても可
    protected $table = 'articles';
    protected $primaryKey = 'id';
    // Thumbnail テーブルとの関連付け（1 対 1）
    public function thumbnails()
    {
        return $this->hasOne('App\Models\Thumbnail');
    }
}

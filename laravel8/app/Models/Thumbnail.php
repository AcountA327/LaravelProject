<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//論理削除を行う場合は追加する。
use Illuminate\Database\Eloquent\SoftDeletes;
class Thumbnail extends Model
{
    use HasFactory;

    use SoftDeletes;
    //当該ﾓﾃﾞﾙｸﾗｽと thumbnails ﾃｰﾌﾞﾙを紐づける。命名規則に基づくため、なくても可
    protected $table = 'thumbnails';
    protected $primaryKey = 'id'; //主キーの設定。デフォルトは id のため、省略可
    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }
}

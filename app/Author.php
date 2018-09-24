<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;    // 追加する

    /**
     * 著者は複数の書籍レコードを持つ
     */
    public function books()
    {
        return $this->hasMany('\App\Book');
    }
}

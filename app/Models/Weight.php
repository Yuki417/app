<?php

namespace App\Models;

/* デフォルトであったやつ
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Weight extends Model
{
        // テーブル名　福4:17~
        protected $table = 'weights';

        // 可変項目
        protected $fillable = [
            'weight',
            'weight_date'
        ];

        public function weight(): BelongsTo
        {
            return $this->belongsTo('App\User');
        }

}

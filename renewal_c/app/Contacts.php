<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property int $contact_reason_opt
 * @property string $contact_reason_text
 * @property string $created_at
 * @property string $updated_at
 */
class Contacts extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = [
        'last_name',
        'first_name',
        'email',
        'contact_reason_opt',
        'contact_reason_text',
        'created_at',
        'updated_at',
    ];

    /**
     *
     * @param $code
     * @return string
     */
    public function getText($code)
    {
        if ($code == 0) {
            return '掲載情報について（病院検索）';
        } elseif ($code == 1) {
            return '掲載情報について（その他）';
        } elseif ($code == 2) {
            return 'EPARK人間ドックについて';
        } elseif ($code == 3) {
            return '操作方法について）';
        } elseif ($code == 4) {
            return 'メールマガジンについて';
        } elseif ($code == 5) {
            return '広告掲載について';
        } elseif ($code == 6) {
            return '掲載情報の誤りについて';
        } else {
            return 'その他';
        }
    }
}

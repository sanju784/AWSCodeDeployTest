<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $company_name
 * @property string $position
 * @property string $name
 * @property string $tel
 * @property string $fax
 * @property string $email
 * @property string $zip1
 * @property string $zip2
 * @property string $prefacture
 * @property string $district
 * @property string $street_address
 * @property string $building
 * @property int $contact_reason_opt
 * @property string $contact_reason_text
 * @property string $created_at
 * @property string $updated_at
 */
class keisai extends Model
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
        'company_name',
        'position',
        'name',
        'tel',
        'fax',
        'email',
        'zip1',
        'zip2',
        'prefacture',
        'district',
        'street_address',
        'building',
        'contact_reason_opt',
        'contact_reason_text',
        'created_at',
        'updated_at',
    ];

    /**
     * @param $code
     * @return string
     */
    public function getText($code)
    {
        if ($code == 0) {
            return '掲載方法が知りたい）';
        } elseif ($code == 1) {
            return '料金が知りたい';
        } elseif ($code == 2) {
            return '話が聞きたい';
        } else {
            return 'その他';
        }
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KeisaiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name' => 'required',
            'position' => 'required',
            'name' => 'required',
            'tel' => 'required',
            'tel_confirm' => 'required|same:tel',
            'email' => 'required',
            'email_confirmed' => 'required|same:email',
            'zip1' => 'required',
            'zip2' => 'required',
            'prefacture' => 'required',
            'district' => 'required',
            'street_address' => 'required',
            'building' => 'required',
            'contact_reason_opt' => 'required',
            'contact_reason_text' => 'required',

        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'company_name.required' => '施設名・代理店名を入力してください。',
            'position.required' => '所属部署・役職 を入力してください。',
            'name.required' => 'ご担当者様名を入力してください。',
            'tel.required' => '連絡先電話番号を入力してください。',
            'tel_confirm.required' => '連絡先電話番号(確認用)を入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email_confirmed.required' => 'メールアドレス(確認用)を入力してください。',
            'zip1.required' => '郵便番号(3桁)を入力してください。',
            'zip2.required' => '郵便番号(4桁)を入力してください。',
            'prefacture.required' => ' 都道府県を入力してください。',
            'district.required' => '都道府県を入力してください。',
            'street_address.required' => '市区群を入力してください。',
            'building.required' => '町村番地を入力してください。',
            'contact_reason_opt.required' => 'お問い合わせ内容を入力してください。',
            'contact_reason_text.required' => 'お問い合わせ内容を入力してください。',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => 'required|max:20',
            'first_name' => 'required|max:20',
            'email' => 'required:email',
            'email_confirm' => 'required|same:email',
            'contact_reason_opt' => 'required',
            'contact_reason_text' => 'required',
            'agree' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'last_name.required' => 'お名前(姓)を入力してください。',
            'first_name.required' => 'お名前(名)を入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email_confirm.required' => 'メールアドレス（確認用）を入力してください。',
            'contact_reason_opt.required' => 'お問い合わせの対象を入力してください。',
            'contact_reason_text.required' => 'お問い合わせ内容を入力してください。',
        ];
    }
}

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute phải được chấp nhận.',
    'active_url'           => 'The :attribute URL không hợp lệ.',
    'after'                => 'The :attribute must be a date after :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'Phải là kí tự a->z.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'Vui lòng nhập chính xác e-mail',
    'exists'               => ':attribute không tồn tại.',
    'file'                 => ':attribute phải là một file.',
    'filled'               => 'The :attribute field is required.',
    'image'                => ':attribute phải là hình ảnh.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':attribute tối đa là :max.',
        'file'    => ':attribute tối đa là :max KB.',
        'string'  => ':attribute tối đa là :max ký tự.',
        'array'   => ':attribute tối đa là :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute ít nhất là :min.',
        'file'    => ':attribute ít nhất là :min KB.',
        'string'  => ':attribute ít nhất là :min ký tự.',
        'array'   => ':attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => ':attribute phải là một số.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => ':attribute  phải được nhập.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => ':attribute và :other không phù hợp.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => ':attribute đã tồn tại rồi.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'Product_Name'                 => 'Tên sản phẩm',
        'Product_Thumbnail'            => 'Hình đại diện',
        'Product_MID'                  => 'Mã sản phẩm',
        'Product_Price'                => 'Giá sản phẩm',
        'User_Name'                    => 'Tên người dùng',
        'User_Email'                   => 'Email',
        'User_Password'                => 'Mật khẩu',
        'User_Repassword'              => 'Mật khẩu xác nhận',
        'Slide_Image'                  => 'Hình đại diện',
        'Cat_Name'                     => 'Tên loại sản phẩm',
        'Cat_Thumbnail'                => 'Hình đại diện',
        'Contact_Name'                 => 'Họ tên',
        'Contact_Email'                => 'Địa chỉ e-mail',  
        'Contact_Mobile'               => 'Số điện thoại',  
        'Contact_Message'              => 'Tin nhắn',  
        'email'                        => 'Email',                    
        'password'                     =>'Mật khẩu',    
        'Cart_Name'                    => 'Tên khách hàng',
        'Cart_Mobile'                  => 'Số điện thoại',
        'Cart_Email'                   => 'Địa chỉ email',
        'Cart_Address'                 => 'Địa chỉ',
    ],

];

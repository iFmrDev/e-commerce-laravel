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

    'accepted' => 'حقل :attribute يجب قبوله.',
    'accepted_if' => 'حقل :attribute يجب قبولها عندما :other تكون :value.',
    'active_url' => 'حقل :attribute ليس عنوان URL صالحًا.',
    'after' => 'حقل :attribute يجب أن يكون تاريخًا بعد :date.',
    'after_or_equal' => 'حقل :attribute يجب أن يكون تاريخًا بعد أو يساوي :date.',
    'alpha' => 'حقل :attribute يجب أن يحتوي على أحرف فقط.',
    'alpha_dash' => 'حقل :attribute يجب أن يحتوي على أحرف فقط, numbers, dashes and underscores.',
    'alpha_num' => 'حقل :attribute يجب أن يحتوي على أحرف وأرقام فقط.',
    'array' => 'حقل :attribute يجب أن يكون مصفوفة.',
    'before' => 'حقل :attribute يجب أن يكون تاريخ قبل :date.',
    'before_or_equal' => 'حقل :attribute يجب أن يكون تاريخ قبل أو يساوي :date.',
    'between' => [
        'array' => 'حقل :attribute يجب أن يكون بين :min و :max العناصر.',
        'file' => 'حقل :attribute يجب أن يكون بين :min و :max كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون بين :min و :max.',
        'string' => 'حقل :attribute يجب أن يكون بين :min و :max الأحرف.',
    ],
    'boolean' => 'حقل :attribute يجب أن يكون الحقل صحيحًا أو خطأ.',
    'confirmed' => 'حقل :attribute التأكيد غير متطابق.',
    'current_password' => 'The كلمة المرور غير صحيحة.',
    'date' => 'حقل :attribute هذا ليس تاريخ صحيح.',
    'date_equals' => 'حقل :attribute يجب أن يكون تاريخًا مساويًا لـ :date.',
    'date_format' => 'حقل :attribute لا يتطابق مع الصيغة :format.',
    'declined' => 'حقل :attribute يجب رفضه.',
    'declined_if' => 'حقل :attribute يجب رفضه عندما :other تكون :value.',
    'different' => 'حقل :attribute و :other يجب أن يكون مختلف.',
    'digits' => 'حقل :attribute لا بد وأن :digits أرقام.',
    'digits_between' => 'حقل :attribute لابد ان تكون بين :min و :max.',
    'dimensions' => 'حقل :attribute أبعاد الصورة غير صالحة.',
    'distinct' => 'حقل :attribute الحقل له قيمة مكررة.',
    'doesnt_start_with' => 'حقل :attribute قد لا تبدأ بواحد مما يلي: :values.',
    'email' => 'حقل :attribute يجب أن يكون عنوان بريد إلكتروني صالح.',
    'ends_with' => 'حقل :attribute يجب أن ينتهي بواحد مما يلي: :values.',
    'enum' => 'الاختيار:attribute غير صالح.',
    'exists' => 'الاختيار:attribute غير صالح.',
    'file' => 'حقل :attribute يجب أن يكون ملفًا.',
    'filled' => 'حقل :attribute يجب أن يكون للحقل قيمة.',
    'gt' => [
        'array' => 'حقل :attribute يجب أن يكون أكثر من :value العناصر.',
        'file' => 'حقل :attribute يجب أن يكون أكبر من :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أكبر من :value.',
        'string' => 'حقل :attribute يجب أن يكون أكبر من :value الأحرف.',
    ],
    'gte' => [
        'array' => 'حقل :attribute يجب ان يملك :value من العناصر أو أكثر.',
        'file' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value.',
        'string' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value الأحرف.',
    ],
    'image' => 'حقل :attribute يجب أن تكون صورة.',
    'in' => 'The selected :attribute غير صالح.',
    'in_array' => 'حقل :attribute الحقل غير موجود في :other.',
    'integer' => 'حقل :attribute يجب أن يكون صحيحا.',
    'ip' => 'حقل :attribute يجب أن يكون عنوان IP صالحًا.',
    'ipv4' => 'حقل :attribute يجب أن يكون عنوان IPv4 صالحًا.',
    'ipv6' => 'حقل :attribute يجب أن يكون عنوان IPv6 صالحًا.',
    'json' => 'حقل :attribute يجب أن تكون سلسلة JSON صالحة.',
    'lt' => [
        'array' => 'حقل :attribute يجب أن يكون أقل من :value العناصر.',
        'file' => 'حقل :attribute يجب أن يكون أقل من :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أقل من :value.',
        'string' => 'حقل :attribute يجب أن يكون أقل من :value الأحرف.',
    ],
    'lte' => [
        'array' => 'حقل :attribute يجب ألا يحتوي على أكثر من :value العناصر.',
        'file' => 'حقل :attribute يجب أن يكون أصغر من أو يساوي  :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أصغر من أو يساوي  :value.',
        'string' => 'حقل :attribute يجب أن يكون أصغر من أو يساوي  :value الأحرف.',
    ],
    'mac_address' => 'حقل :attribute يجب أن يكون عنوان MAC صالحًا.',
    'max' => [
        'array' => 'حقل :attribute يجب ألا يحتوي على أكثر من :max العناصر.',
        'file' => 'حقل :attribute يجب ألا يكون أكبر من :max كيلوبايت.',
        'numeric' => 'حقل :attribute يجب ألا يكون أكبر من :max.',
        'string' => 'حقل :attribute يجب ألا يكون أكبر من :max الأحرف.',
    ],
    'mimes' => 'حقل :attribute يجب أن يكون ملفًا من النوع: :values.',
    'mimetypes' => 'حقل :attribute يجب أن يكون ملفًا من النوع: :values.',
    'min' => [
        'array' => 'حقل :attribute must have at least :min items.',
        'file' => 'حقل :attribute لا بد أن يكون على الأقل :min kilobytes.',
        'numeric' => 'حقل :attribute لا بد أن يكون على الأقل :min.',
        'string' => 'حقل :attribute لا بد أن يكون على الأقل :min احرف.',
    ],
    'multiple_of' => 'حقل :attributeيجب أن يكون من مضاعفات :value.',
    'not_in' => 'The selected :attribute غير صالح.',
    'not_regex' => 'حقل :attribute format غير صالح.',
    'numeric' => 'حقل :attribute يجب أن يكون رقما.',
    'password' => [
        'letters' => 'حقل :attribute يجب أن يحتوي على حرف واحد على الأقل.',
        'mixed' => 'حقل :attribute يجب أن يحتوي على الأقل على حرف كبير واحد وحرف صغير واحد.',
        'numbers' => 'حقل :attribute يجب أن يحتوي على رقم واحد على الأقل.',
        'symbols' => 'حقل :attribute يجب أن يحتوي على رمز واحد على الأقل.',
        'uncompromised' => 'العطاء :attribute ظهر في تسرب البيانات. الرجاء اختيار ملف :attribute.',
    ],
    'present' => 'حقل :attribute يجب أن يكون الحقل موجودًا.',
    'prohibited' => 'حقل :attribute المجال محظور.',
    'prohibited_if' => 'حقل :attribute المجال محظور عندما :other يكون :value.',
    'prohibited_unless' => 'حقل :attribute المجال محظور ما لم :other يكون في :values.',
    'prohibits' => 'حقل :attribute يحظر المجال :other من الوجود.',
    'regex' => 'حقل :attribute التنسيق غير صالح.',
    'required' => 'حقل :attribute مطلوب.',
    'required_array_keys' => 'حقل :attribute يجب أن يحتوي على قيم لـ: :values.',
    'required_if' => 'حقل :attribute الحقل مطلوب عندما :other يكون :value.',
    'required_unless' => 'حقل :attribute الحقل مطلوب ما لم :other يكون في :values.',
    'required_with' => 'حقل :attribute الحقل مطلوب عندما :values حاضر.',
    'required_with_all' => 'حقل :attribute الحقل مطلوب عندما :values حاضرون.',
    'required_without' => 'حقل :attribute الحقل مطلوب عندما :values غير موجود.',
    'required_without_all' => 'حقل :attribute الحقل مطلوب عندما لا شيء من :values حاضرون.',
    'same' => 'حقل :attribute و :other يجب أن تتطابق.',
    'size' => [
        'array' => 'حقل :attributeيجب أن تحتوي على :size العناصر.',
        'file' => 'حقل :attribute لا بد وأن :size كيلوبايت.',
        'numeric' => 'حقل :attribute لا بد وأن :size.',
        'string' => 'حقل :attribute لا بد وأن :size الأحرف.',
    ],
    'starts_with' => 'حقل :attribute يجب أن يبدأ بواحد مما يلي: :values.',
    'string' => 'حقل :attribute يجب أن يكون نص.',
    'timezone' => 'حقل :attribute يجب أن تكون منطقة زمنية صالحة.',
    'unique' => ' :attribute مستخدم مسبقاً.',
    'uploaded' => 'حقل :attribute فشل التحميل.',
    'url' => 'حقل :attribute يجب أن يكون عنوان URL صالحًا.',
    'uuid' => 'حقل :attribute يجب أن يكون UUID صالحًا.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name'                  => 'الاسم',
        'username'              => 'اسم المُستخدم',
        'email'                 => 'البريد الالكتروني',
        'first_name'            => 'الاسم الأول',
        'last_name'             => 'اسم العائلة',
        'password'              => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'city'                  => 'المدينة',
        'country'               => 'الدولة',
        'address'               => 'العنوان',
        'phone'                 => 'الهاتف',
        'mobile'                => 'الجوال',
        'age'                   => 'العمر',
        'gender'                => 'الجنس',
        'day'                   => 'اليوم',
        'month'                 => 'الشهر',
        'year'                  => 'السنة',
        'hour'                  => 'ساعة',
        'minute'                => 'دقيقة',
        'second'                => 'ثانية',
        'title'                 => 'العنوان',
        'content'               => 'المُحتوى',
        'description'           => 'الوصف',
        'excerpt'               => 'المُلخص',
        'date'                  => 'التاريخ',
        'time'                  => 'الوقت',
        'available'             => 'مُتاح',
        'size'                  => 'الحجم',
    ],

];

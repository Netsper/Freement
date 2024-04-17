<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Doğrulama Dil Dizileri
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki dil dizileri, doğrulayıcı sınıfı tarafından kullanılan varsayılan hata mesajlarını içerir.
    | Bu kurallardan bazıları boyut kuralları gibi birden fazla sürüm içerir.
    | Her birini burada özelleştirebilirsiniz.
    |
    */

    'accepted'        => ':attribute alanı kabul edilmelidir.',
    'accepted_if'     => ':attribute alanı, :other :value olduğunda kabul edilmelidir.',
    'active_url'      => ':attribute alanı geçerli bir URL olmalıdır.',
    'after'           => ':attribute alanı, :date tarihinden sonra olmalıdır.',
    'after_or_equal'  => ':attribute alanı, :date tarihinden sonra veya aynı tarihinde olmalıdır.',
    'alpha'           => ':attribute alanı sadece harf içermelidir.',
    'alpha_dash'      => ':attribute alanı sadece harf, rakam, kısa çizgi ve alt çizgi içermelidir.',
    'alpha_num'       => ':attribute alanı sadece harf ve rakam içermelidir.',
    'array'           => ':attribute alanı bir dizi olmalıdır.',
    'ascii'           => ':attribute alanı yalnızca tek baytlık alfasayısal karakterler ve semboller içermelidir.',
    'before'          => ':attribute alanı, :date tarihinden önce olmalıdır.',
    'before_or_equal' => ':attribute alanı, :date tarihinden önce veya aynı tarihinde olmalıdır.',
    'between'         => [
        'array'   => ':attribute alanı :min ve :max öğe arasında olmalıdır.',
        'file'    => ':attribute alanı :min ile :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute alanı :min ile :max arasında olmalıdır.',
        'string'  => ':attribute alanı :min ile :max karakter arasında olmalıdır.',
    ],
    'boolean'           => ':attribute alanı doğru veya yanlış olmalıdır.',
    'can'               => ':attribute alanı yetkisiz bir değer içeriyor.',
    'confirmed'         => ':attribute alanı doğrulama eşleşmiyor.',
    'current_password'  => 'Şifre yanlış.',
    'date'              => ':attribute alanı geçerli bir tarih olmalıdır.',
    'date_equals'       => ':attribute alanı, :date tarihine eşit bir tarih olmalıdır.',
    'date_format'       => ':attribute alanı, :format biçimi ile eşleşmelidir.',
    'decimal'           => ':attribute alanı :decimal ondalık basamağa sahip olmalıdır.',
    'declined'          => ':attribute alanı reddedilmelidir.',
    'declined_if'       => ':attribute alanı, :other :value olduğunda reddedilmelidir.',
    'different'         => ':attribute alanı ve :other farklı olmalıdır.',
    'digits'            => ':attribute alanı :digits basamağa sahip olmalıdır.',
    'digits_between'    => ':attribute alanı :min ve :max basamak arasında olmalıdır.',
    'dimensions'        => ':attribute alanı geçersiz resim boyutlarına sahiptir.',
    'distinct'          => ':attribute alanı yinelenen bir değere sahiptir.',
    'doesnt_end_with'   => ':attribute alanı aşağıdakilerden biri ile bitmemeli: :values.',
    'doesnt_start_with' => ':attribute alanı aşağıdakilerden biri ile başlamamalı: :values.',
    'email'             => ':attribute alanı geçerli bir e-posta adresi olmalıdır.',
    'ends_with'         => ':attribute alanı aşağıdakilerden biri ile bitmelidir: :values.',
    'enum'              => 'Seçilen :attribute geçersizdir.',
    'exists'            => 'Seçilen :attribute geçersizdir.',
    'file'              => ':attribute alanı bir dosya olmalıdır.',
    'filled'            => ':attribute alanı bir değere sahip olmalıdır.',
    'gt'                => [
        'array'   => ':attribute alanı :value öğeden fazla olmalıdır.',
        'file'    => ':attribute alanı :value kilobayttan büyük olmalıdır.',
        'numeric' => ':attribute alanı :value\'dan büyük olmalıdır.',
        'string'  => ':attribute alanı :value karakterden uzun olmalıdır.',
    ],
    'gte' => [
        'array'   => ':attribute alanı en az :value öğe içermelidir.',
        'file'    => ':attribute alanı en az :value kilobayt olmalıdır.',
        'numeric' => ':attribute alanı en az :value olmalıdır.',
        'string'  => ':attribute alanı en az :value karakter olmalıdır.',
    ],
    'image'     => ':attribute alanı bir resim olmalıdır.',
    'in'        => 'Seçilen :attribute geçersizdir.',
    'in_array'  => ':attribute alanı :other içinde mevcut olmalıdır.',
    'integer'   => ':attribute alanı bir tam sayı olmalıdır.',
    'ip'        => ':attribute alanı geçerli bir IP adresi olmalıdır.',
    'ipv4'      => ':attribute alanı geçerli bir IPv4 adresi olmalıdır.',
    'ipv6'      => ':attribute alanı geçerli bir IPv6 adresi olmalıdır.',
    'json'      => ':attribute alanı geçerli bir JSON dizesi olmalıdır.',
    'lowercase' => ':attribute alanı küçük harf olmalıdır.',
    'lt'        => [
        'array'   => ':attribute alanı :value öğeden az olmalıdır.',
        'file'    => ':attribute alanı :value kilobayttan az olmalıdır.',
        'numeric' => ':attribute alanı :value\'dan az olmalıdır.',
        'string'  => ':attribute alanı :value karakterden kısa olmalıdır.',
    ],
    'lte' => [
        'array'   => ':attribute alanı en fazla :value öğe içermelidir.',
        'file'    => ':attribute alanı en fazla :value kilobayt olmalıdır.',
        'numeric' => ':attribute alanı en fazla :value olmalıdır.',
        'string'  => ':attribute alanı en fazla :value karakter olmalıdır.',
    ],
    'mac_address' => ':attribute alanı geçerli bir MAC adresi olmalıdır.',
    'max'         => [
        'array'   => ':attribute alanı en fazla :max öğe içermelidir.',
        'file'    => ':attribute alanı en fazla :max kilobayttan büyük olmamalıdır.',
        'numeric' => ':attribute alanı en fazla :max olmamalıdır.',
        'string'  => ':attribute alanı en fazla :max karakter olmamalıdır.',
    ],
    'max_digits' => ':attribute alanı en fazla :max basamak içermemelidir.',
    'mimes'      => ':attribute alanı dosya türü: :values olmalıdır.',
    'mimetypes'  => ':attribute alanı dosya türü: :values olmalıdır.',
    'min'        => [
        'array'   => ':attribute alanı en az :min öğe içermelidir.',
        'file'    => ':attribute alanı en az :min kilobayt olmalıdır.',
        'numeric' => ':attribute alanı en az :min olmalıdır.',
        'string'  => ':attribute alanı en az :min karakter olmalıdır.',
    ],
    'min_digits'       => ':attribute alanı en az :min basamak içermelidir.',
    'missing'          => ':attribute alanı eksik olmalıdır.',
    'missing_if'       => ':attribute alanı, :other :value olduğunda eksik olmalıdır.',
    'missing_unless'   => ':attribute alanı, :other :value olmadıkça eksik olmalıdır.',
    'missing_with'     => ':attribute alanı, :values mevcut olduğunda eksik olmalıdır.',
    'missing_with_all' => ':attribute alanı, :values mevcut olduğunda eksik olmalıdır.',
    'multiple_of'      => ':attribute alanı :value\'nin katı olmalıdır.',
    'not_in'           => 'Seçilen :attribute geçersizdir.',
    'not_regex'        => ':attribute alanı biçimi geçersizdir.',
    'numeric'          => ':attribute alanı bir sayı olmalıdır.',
    'password'         => [
        'letters'       => ':attribute alanı en az bir harf içermelidir.',
        'mixed'         => ':attribute alanı en az bir büyük harf ve bir küçük harf içermelidir.',
        'numbers'       => ':attribute alanı en az bir rakam içermelidir.',
        'symbols'       => ':attribute alanı en az bir sembol içermelidir.',
        'uncompromised' => 'Verilen :attribute, bir veri sızıntısında görünmüştür. Lütfen farklı bir :attribute seçin.',
    ],
    'present'              => ':attribute alanı mevcut olmalıdır.',
    'prohibited'           => ':attribute alanı yasaktır.',
    'prohibited_if'        => ':attribute alanı, :other :value olduğunda yasaktır.',
    'prohibited_unless'    => ':attribute alanı, :other :value içinde olmadıkça yasaktır.',
    'prohibits'            => ':attribute alanı, :other\'ın mevcut olmasını engeller.',
    'regex'                => ':attribute alanı biçimi geçersizdir.',
    'required'             => ':attribute alanı gereklidir.',
    'required_array_keys'  => ':attribute alanı için girişler şunları içermelidir: :values.',
    'required_if'          => ':attribute alanı, :other :value olduğunda gereklidir.',
    'required_if_accepted' => ':attribute alanı, :other kabul edildiğinde gereklidir.',
    'required_unless'      => ':attribute alanı, :other :values içinde olmadıkça gereklidir.',
    'required_with'        => ':attribute alanı, :values mevcut olduğunda gereklidir.',
    'required_with_all'    => ':attribute alanı, :values mevcut olduğunda gereklidir.',
    'required_without'     => ':attribute alanı, :values mevcut olmadığında gereklidir.',
    'required_without_all' => ':attribute alanı, :values\'den hiçbiri mevcut olmadığında gereklidir.',
    'same'                 => ':attribute alanı, :other ile eşleşmelidir.',
    'size'                 => [
        'array'   => ':attribute alanı :size öğe içermelidir.',
        'file'    => ':attribute alanı :size kilobayt olmalıdır.',
        'numeric' => ':attribute alanı :size olmalıdır.',
        'string'  => ':attribute alanı :size karakter olmalıdır.',
    ],
    'starts_with' => ':attribute alanı aşağıdakilerden biri ile başlamalıdır: :values.',
    'string'      => ':attribute alanı bir dize olmalıdır.',
    'timezone'    => ':attribute alanı geçerli bir saat dilimi olmalıdır.',
    'unique'      => ':attribute zaten alınmıştır.',
    'uploaded'    => ':attribute yüklenemedi.',
    'uppercase'   => ':attribute alanı büyük harf olmalıdır.',
    'url'         => ':attribute alanı geçerli bir URL olmalıdır.',
    'ulid'        => ':attribute alanı geçerli bir ULID olmalıdır.',
    'uuid'        => ':attribute alanı geçerli bir UUID olmalıdır.',

    /*
    |--------------------------------------------------------------------------
    | Özel Doğrulama Dil Dizileri
    |--------------------------------------------------------------------------
    |
    | Burada, bir özelliğin kuralı için özel dil mesajlarını belirleyebilirsiniz.
    | Bu, bir özellik kuralı için belirli bir özel dil mesajını hızlıca belirtmenizi sağlar.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'özel-mesaj',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Özel Doğrulama Özellikleri
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki dil dizileri, özellik yerine "E-Posta Adresi" gibi daha anlamlı bir şey ile yer değiştirmemize yardımcı olur.
    | Bunu, mesajımızı daha anlamlı hale getirmemize yardımcı olur.
    |
    */

    'attributes' => [],

];

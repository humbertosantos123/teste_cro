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

    'accepted'             => 'O campo :attribute deve ser aceito.',
    'active_url'           => 'O campo :attribute não é uma URL válida.',
    'after'                => 'O campo :attribute deve ser uma data posterior a :date.',
    'after_or_equal'       => 'O campo :attribute deve ser uma data maior ou iqual a :date.',
    'alpha'                => 'O campo :attribute só pode conter letras.',
    'alpha_dash'           => 'O campo :attribute só pode conter letras, números, traços (-) e sublinhados (_).',
    'alpha_num'            => 'O campo :attribute só pode conter letras e números.',
    'array'                => 'O campo :attribute deve ser um array (vetor/coleção).',
    'before'               => 'O campo :attribute deve ser uma data anterior a :date.',
    'before_or_equal'      => 'O campo :attribute deve ser uma data menor ou igual a :date.',
    'between'              => [
        'numeric' => 'O campo :attribute deve estar entre :min and :max.',
        'file'    => 'O arquivo enviado no campo :attribute deve conter entre :min e :max kilobytes.',
        'string'  => 'O campo :attribute deve conter entre :min e :max caracteres.',
        'array'   => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser ou verdadeiro ou falso.',
    'confirmed'            => 'A confirmação do campo :attribute deve ser igual.',
    'date'                 => 'O campo :attribute não é uma data válida.',
    'date_format'          => 'O campo :attribute não corresponde ao formato :format.',
    'different'            => 'O campo :attribute e :other devem ser diferentes.',
    'digits'               => 'O campo :attribute deve conter :digits dígitos.',
    'digits_between'       => 'O campo :attribute deve conter entre :min e :max dígitos.',
    'dimensions'           => 'O campo :attribute tem dimensões de imagem inválidas.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'O campo :attribute deve ser um endereço de e-mail válido.',
    'exists'               => 'O valor selecionado no campo :attribute é inválido.',
    'file'                 => 'O campo :attribute deve ser um arquivo.',
    'filled'               => 'O campo :attribute é obrigatório.',
    'image'                => 'O arquivo enviado no campo :attribute deve ser uma imagem.',
    'in'                   => 'O valor selecionado no campo :attribute é inválido.',
    'in_array'             => 'O campo :attribute não existe no :other.',
    'integer'              => 'O campo :attribute deve ser um número inteiro.',
    'ip'                   => 'O campo :attribute deve ser um endereço de IP válido.',
    'ipv4'                 => 'O campo :attribute deve ser um endereço de IPv4 válido.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'O campo :attribute deve ser um JSON válido.',
    'max'                  => [
        'numeric' => 'O campo :attribute não pode ser maior que :max.',
        'file'    => 'O arquivo enviado no campo :attribute não pode conter mais que :max kilobytes.',
        'string'  => 'O campo :attribute não pode conter mais que :max caracteres.',
        'array'   => 'O campo :attribute não pode conter mais que :max itens.',
    ],
    'mimes'                => 'O arquivo enviado no campo :attribute deve ser de um dos seguintes tipos: :values.',
    'mimetypes'            => 'O campo :attribute deve ser do tipo: :values.',
    'min'                  => [
        'numeric' => 'O campo :attribute deve ser maior ou igual à :min.',
        'file'    => 'O arquivo enviado no campo :attribute deve conter ao menos :min kilobytes.',
        'string'  => 'O campo :attribute deve conter ao menos :min caracteres.',
        'array'   => 'O campo :attribute deve conter ao menos :min itens.',
    ],
    'not_in'               => 'O valor selecionado no campo :attribute é inválido.',
    'numeric'              => 'O campo :attribute deve ser um número válido.',
    'present'              => 'O campo :attribute deve ser presente.',
    'regex'                => 'O formato do campo :attribute é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando o campo :other tem o valor :value.',
    'required_unless'      => 'O campo :attribute é obrigatório menos quando o campo :other tem os valores :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando um destes campos: :values for informado.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando todos estes campos: :values forem informados.',
    'required_without'     => 'O campo :attribute é obrigatório quando um destes campos :values não for informado.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum destes campos: :values forem informados.',
    'same'                 => 'O valor do campo :attribute e do campo :other devem ser iguais.',
    'size'                 => [
        'numeric' => 'O campo :attribute deve ser igual a :size.',
        'file'    => 'O campo :attribute deve conter exatamente :size kilobytes.',
        'string'  => 'O campo :attribute deve conter exatamente :size caracteres.',
        'array'   => 'O campo :attribute deve conter exatamente :size itens.',
    ],
    'string'               => 'O campo :attribute deve ser um texto.',
    'timezone'             => 'O campo :attribute deve ser uma zona de tempo válida.',
    'unique'               => 'O valor do campo :attribute já existe.',
    'uploaded'             => 'O :attribute falhou no upload.',
    'url'                  => 'O formato do campo :attribute é inválido.',

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
    | of 'email'. This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

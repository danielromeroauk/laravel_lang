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

	"accepted"             => "El atributo :attribute debe ser aceptado.",
	"active_url"           => "El atributo :attribute no es una URL válida.",
	"after"                => "El atributo :attribute debe ser una fecha después de :date.",
	"alpha"                => "El atributo :attribute sólo puede contener letras.",
	"alpha_dash"           => "El atributo :attribute sólo puede contener letras, números y guiones.",
	"alpha_num"            => "El atributo :attribute sólo puede contener letras y números.",
	"array"                => "El atributo :attribute debe ser un arreglo.",
	"before"               => "El atributo :attribute debe ser una fecha antes de :date.",
	"between"              => [
		"numeric" => "El atributo :attribute debe estar entre :min y :max.",
		"file"    => "El atributo :attribute debe tener entre :min y :max kilobytes.",
		"string"  => "El atributo :attribute debe tener entre :min y :max caracteres.",
		"array"   => "El atributo :attribute debe tener entre :min y :max ítems.",
	],
	"boolean"              => "El atributo :attribute debe ser true o false.",
	"confirmed"            => "La confirmación de :attribute no coincide.",
	"date"                 => "El atributo :attribute no es una fecha válida.",
	"date_format"          => "El atributo :attribute no coincide con el formato :format.",
	"different"            => "El atributo :attribute y :other deben ser diferentes.",
	"digits"               => "El atributo :attribute debe tener :digits dígitos.",
	"digits_between"       => "El atributo :attribute debe tener entre :min y :max dígitos.",
	"email"                => "El atributo :attribute debe ser una dirección de correo electrónico válida.",
	"filled"               => "El atributo :attribute es requerido.",
	"exists"               => "El atributo :attribute seleccionado no es válido.",
	"image"                => "El atributo :attribute debe ser una imagen.",
	"in"                   => "El atributo :attribute no es válido.",
	"integer"              => "El atributo :attribute debe ser un entero.",
	"ip"                   => "El atributo :attribute debe ser una dirección de IP válida.",
	"max"                  => [
		"numeric" => "El atributo :attribute no puede ser mayor a :max.",
		"file"    => "El atributo :attribute no puede ser mayor a :max kilobytes.",
		"string"  => "El atributo :attribute no puede tener más de :max caracteres.",
		"array"   => "El atributo :attribute debe tener más de :max ítems.",
	],
	"mimes"                => "El atributo :attribute debe ser un archivo de tipo: :values.",
	"min"                  => [
		"numeric" => "El atributo :attribute debe ser :min o superior.",
		"file"    => "El atributo :attribute debe tener :min kilobytes o más.",
		"string"  => "El atributo :attribute debe tener :min caracteres o más.",
		"array"   => "El atributo :attribute debe tener :min ítems o más.",
	],
	"not_in"               => "El atributo :attribute seleccionado no es válido.",
	"numeric"              => "El atributo :attribute debe ser un número.",
	"regex"                => "El formato del atributo :attribute no es válido.",
	"required"             => "El atributo :attribute es requerido.",
	"required_if"          => "El atributo :attribute es requerido cuando :other es :value.",
	"required_with"        => "El atributo :attribute es requerido cuando :values está presente.",
	"required_with_all"    => "El atributo :attribute es requerido cuando :values está presente.",
	"required_without"     => "El atributo :attribute es requerido cuando :values no está presente.",
	"required_without_all" => "El atributo :attribute es requerido cuando ninguno de :values están presentes.",
	"same"                 => "El atributo :attribute y :other deben coincidir.",
	"size"                 => [
		"numeric" => "El atributo :attribute debe ser de :size.",
		"file"    => "El atributo :attribute debe ser de :size kilobytes.",
		"string"  => "El atributo :attribute debe ser de :size caracteres.",
		"array"   => "El atributo :attribute debe contener :size ítems.",
	],
	"unique"               => "El atributo :attribute ya está registrado.",
	"url"                  => "El formato del atributo :attribute no es válido.",
	"timezone"             => "El atributo :attribute debe ser una zona horaria válida.",

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

	'attributes' => [],

];

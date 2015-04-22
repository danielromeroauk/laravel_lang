# laravel_lang

[![Join the chat at https://gitter.im/danielromeroauk/laravel_lang](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/danielromeroauk/laravel_lang?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Para usar la internacionalización de Laravel 5 en el idioma de tu preferencia descarga la carpeta de tu idioma y ubícala en la carpeta <code>resources/lang/</code> de tu proyecto.

Luego cambia el valor de la llave <code>locale</code> en el archivo <code>config/app.php</code> por el nombre de la carpeta de tu idioma.
 
Ejemplo: Para usar el idioma español españa (es-ES) el árbol de archivos queda así:

```
resourses/
    |lang/
      |en/
      |es-ES/
        |pagination.php
        |passwords.php
        |validation.php
```

Luego, en el archivo <code>config/app.php</code> cambiamos el valor de la llave <code>locale</code> por <code>es-ES</code>

```
	/*
	|--------------------------------------------------------------------------
	| Application Locale Configuration
	|--------------------------------------------------------------------------
	|
	| The application locale determines the default locale that will be used
	| by the translation service provider. You are free to set this value
	| to any of the locales which will be supported by the application.
	|
	*/

	'locale' => 'es-ES',
```
 
Chat de este repositorio: [https://gitter.im/danielromeroauk/laravel_lang](https://gitter.im/danielromeroauk/laravel_lang)
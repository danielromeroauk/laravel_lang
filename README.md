# laravel5_lang_es

[![Join the chat at https://gitter.im/danielromeroauk/laravel5_lang_es](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/danielromeroauk/laravel5_lang_es?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
 Mensajes de Laravel 5 en español.

Para activar los mensajes de Laravel 5 en español crea una carpeta llamada <code>es</code> dentro de <code>resources/lang/</code> y coloca ahí los archivos de este repositorio.

Quedando el árbol de archivos así:
```
resourses/
    lang/
        en/
        es/
            pagination.php
            passwords.php
            validation.php
```

Luego, en el archivo <code>config/app.php</code> cambia el valor de la llave <code>locale</code> por <code>es</code>, es decir, <code>'locale' => 'es'</code>.
 
Si tienes alguna duda, puedes entrar al chat de este repositorio en https://gitter.im/danielromeroauk/laravel5_lang_es

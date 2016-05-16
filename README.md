# wp-portal-editorial

##Eventos
### Para la implementación del post se pueden generar con [Generate WP](https://generatewp.com/post-type/)
Que debe estar dentro de functions.php. Esto es muy útil al momento de crear eventos.

##Leer Más
###Para crear un enlace "Seguir leyendo" es necesario el uso de otro post
se puede usar la funcion "the_content()" de WP para "leer mas"
```php
function the_content ( string $more_link_text = null, bool $strip_teaser = false ){
  ...
}
```
*Parametros*

$more_link_text

    (string) (Opcional) Contenido para cuando hay más texto.

    Default value: null
    
$strip_teaser

    (bool) (Optional) El valor inicial es falso

    Valor inicial: falso



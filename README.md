
#CURSO PHP PLATZI#

**Variables tipos de datos y variables**

<!-- forma de acceder a un arreglo de arreglos -->

``` php
$lenguajes = [
    [
        'titulo' => 'php',
        'descripcion' => 'Es un leguaje muy divertido y a la vez facil de aprender'
    ],
    [
        'titulo' => 'java'
    ],
    [
        'titulo' => 'ruby'
    ]
];

$lenguajes[0]['titulo']
```
## if 
``` php
$va1 = 1;
if($va1 > 3){
    echo "es mayor";
}else{
    echo "no es mayor"
}
```
## do while
1. El do while lo que quiere decir es : " do { ejecuta el codigo } while ( mientras esta condición no se cumpla), y dentro de este bloque podemos poner el codigo HTML los **li** para que recorra el arreglo anterior **$lenguajes[0]['titulo']** y en vez del 0 poner el **$idx**; **algo importante es que en el arreglo se le debe de poner la descripcion a todos, porque si no da error.**
``` php
$idx = 0;
do{
    // codigo HTML
$idx = idx +1;
}while($idx < 3);
```
## FOR 
1. En el **For** se reduce el código
``` php
for($idx = 0; $idx < 3; $idx = idx +1 ){
    // codigo HTML
}
```
**Para no estas declarando el $idx < 3 vamos a tomar el tamaño del arreglo de esta forma count($lenguajes) y listo**

```
```

```
```
```
```
```
```
```
```
```
```
```
```
```
```
```
```
```
```





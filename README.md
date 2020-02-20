
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
## Condiciones y operadores

**Importante** hay una condicion que es **continue** y este se salta si la condicion se cumple
1. Si en el array de **$lenguajes** declaramos un elemento mas **'visible' => true** para que todos los que sean true se muestren y los que son false se oculten; el codigo seria la siguiente


``` PHP
// array
$lenguajes = [
    [
        'titulo' => 'php',
        'descripcion' => 'Es un leguaje muy divertido y a la vez facil de aprender',
        'visible' => true,
        'meses' => 8
    ],
    [
        'titulo' => 'java',
        'descripcion' => 'Este lenguaje es un dolor de cabez',
        'visible' => false,
        'meses' => 2
    ],
    [
        'titulo' => 'ruby',
        'descripcion' => 'Este lenguaje no lo conozco',
        'visible' => true,
        'meses' => 5
    ]
];

//condicion

for($idx = 0; $idx < count($lenguajes); $idx ++){
    if($lenguajes[$idx]['visible'] == true){
    echo '<li class="work-position">';
    echo '<h5>'. $lenguajes[$idx]['titulo']. '</h5>';
    echo '<p>'.  $lenguajes[$idx]['descripcion'] .'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
    }
}
```
- si nos damos cuenta dentro del ciclo for imprime (lo que sea que imprima); bueno pues antes de que imprima creamos una condicion en donde **si visible es igual a true** que imprima y si no que no lo haga
- pero que pasaria si en vez de true le ponemos false? pues la condicion seria la siguiente.

``` PHP
for($idx = 0; $idx < count($lenguajes); $idx ++){
    if($lenguajes[$idx]['visible'] == false){
    continue;
    }
    echo '<li class="work-position">';
    echo '<h5>'. $lenguajes[$idx]['titulo']. '</h5>';
    echo '<p>'.  $lenguajes[$idx]['descripcion'] .'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
}
```
- **continue** esta es la palabra reservada que lo que hace es **si se cumple la condicion continua la siguiente iteracion** 
## break 

- 

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





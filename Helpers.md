# Helpers para Laravel

Testado no laravel 10

## Pasta

Uma sugestão é a pasta app, então criei assim:

app/Helpers

## Exemplo de classe

E copiei cada um dos arquivos que desejo usar nos helpers. Exemplo, o Fiiiles.php
```php
<?php
namespace App\Helpers;

class Files{

    // Checar se arquivo existe
    public static function fileExists($file){
        if(file_exists($file)){
            return true;
        }else{
            return false;
        }
    }
```
## Uma boa ideia

Não sei se é obrigatório, mas métodos estáticos funcionam bem e são mais práticos.

Em cada classe adicione o namespace, como acima.

## cmpooser.json

Adicione a entrada no composer.json abaixo do autoload, assim:
```json
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        },
       "files": [
           "app/Helpers/Files.php",
           "app/Helpers/Strings.php"
       ]
    },
```
Caso queira adicionar outros arquivos os insira abaixo do Files.

## Executar

composer du

## Como usar

### Em rotas ou controllers

use App\Helpers\Files; // Onde for usar fazer esta inclusão

Em rotas ou em outras classes como controllers ou outra

Route::get('/hel', function(){
    print Files::fileExists(app_path('teste.txt'));
});

### Em views

Arquico {{App\Helpers\Files::fileExists(app_path('teste.txt'))}}

Aqui o retornoo será 1, visto que é true

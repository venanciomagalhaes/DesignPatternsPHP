# Builder

O padrão Builder é um padrão de projeto de criação que permite a construção passo a passo de objetos complexos. Ele separa o processo de construção de um objeto complexo de sua representação final, permitindo que o mesmo processo de construção crie diferentes representações.

## Estrutura do Padrão Builder

### IBuilder
- Define uma interface para construir partes do objeto.
- Possui métodos para construir e combinar as partes do objeto.

### Builder
- Implementa a interface IBuilder para construir e reunir partes do objeto.
- Fornece métodos específicos para a construção de partes do objeto.

### Director
- Utiliza o Builder para construir um objeto em uma sequência específica.
- Não sabe sobre a estrutura interna do objeto, apenas coordena a construção.

### Product
- Representa o objeto complexo que está sendo construído.
- Geralmente, é um objeto complexo composto de várias partes.

## Exemplo 

```php
use Venancio\DesignPatterns\Criacionais\Builder\Subway;
use Venancio\DesignPatterns\Criacionais\Builder\SubwayBuilder;

class SubwayDirector
{
    public function makeChickenTeriyaki(): Subway
    {
        return (new SubwayBuilder())
            ->addBreads('Italian')
            ->addProteins('Chicken Teriyaki')
            ->addCheeses('Mozzarella')
            ->addSalads(['Lettuce', 'Tomato', 'Onion'])
            ->addSauces(['Honey Mustard'])
            ->make();
    }

    public function makeCreamyCheddarSteak(): Subway
    {
        return (new SubwayBuilder())
            ->addBreads('Parmesan Oregano')
            ->addProteins('Creamy Cheddar Steak')
            ->addCheeses('Cheddar')
            ->addSalads(['Lettuce', 'Tomato', 'Green Pepper'])
            ->addSauces(['Chipotle Southwest'])
            ->make();
    }
}

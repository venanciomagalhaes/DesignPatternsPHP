# Prototype

## Visão Geral

Este é um exemplo simples de implementação do padrão de design Prototype em PHP utilizando a classe `Car`. O padrão Prototype permite criar novos objetos duplicando um modelo existente (protótipo) sem expor diretamente os atributos da classe.

Esse padrão deve ser utilizado quando o custo de gerar um novo objeto for muito grande ou quando a diferença entre dois objetos seja tão simples que a sua clonagem e personalizaçao resolva a nossa necessidade. 

**Lembrando que em PHP já existe a diretiva clone, tornando esse padrão desnecessário**

## Classe Car

A classe `Car` representa um modelo de carro e possui os seguintes atributos:
- `color` (cor)
- `chassi` (chassi)
- `motor` (motor)
- `suspension` (suspensão)
- `power` (potência)
- `price` (preço)
- `year` (ano)

Os métodos públicos disponíveis são os setters para cada atributo e o método `clone()`.
Os setters permitem definir os valores dos atributos do carro.
vO método `clone()` cria uma cópia do objeto `Car` atual, utilizando métodos privados para obter os valores atuais dos atributos e passá-los para um novo objeto `Car`. Isso evita a exposição direta dos atributos da classe.

## Como Usar

Para usar o padrão Prototype com a classe `Car`:
1. Crie uma instância do carro com valores iniciais.
2. Utilize os setters para alterar os atributos conforme necessário.
3. Utilize o método `clone()` para criar novas instâncias do carro com os valores atualizados.

Exemplo:

```php
$originalCar = new Car('blue', '123456789', 'V8', 'sport', '400hp', 50000.00, 2023);
$cloneCar = $originalCar->clone();

$cloneCar->setColor('red');
$cloneCar->setPrice(55000.00);
````

Agora temos duas instâncias de carro com cores e preços diferentes, mas baseadas no mesmo modelo original.

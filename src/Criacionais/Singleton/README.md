## Singleton

O código implementa o padrão de projeto Singleton para garantir que apenas uma única instância da classe `PdoConnection` seja criada durante o ciclo de vida da aplicação. 
### Estrutura do Singleton

A classe `PdoConnection` é responsável por criar e gerenciar a conexão PDO com o banco de dados. Aqui estão os pontos-chave da implementação do Singleton:

#### Propriedade Estática Privada

```php
private static ?self $instance =  null;
```

A propriedade estática privada `$instance` armazena a única instância da classe. É privada para garantir que não possa ser acessada diretamente de fora da classe.

#### Método Construtor Privado

```php
private function __construct(string $dsn, ?string $username = null, ?string $password = null, ?array $options = null)
```

O construtor é privado para impedir a criação de instâncias da classe diretamente de fora da classe. A conexão PDO é configurada através deste construtor, que é chamado apenas internamente.

#### Método Estático para Obter a Instância

```php
public static function getInstance()
{
    self::makeInstance();
    return self::$instance;
}
```

O método `getInstance` é estático e fornece o acesso à instância única da classe. Ele garante que apenas uma única instância seja criada e retorna essa instância sempre que for chamado.

#### Método Privado para Criar a Instância

```php
private static function makeInstance(): void
{
    if (!self::$instance) {
        // Cria uma nova instância apenas se ainda não existir
        self::$instance = new PdoConnection(/* parâmetros de conexão */);
    }
}
```

O método `makeInstance` é privado e é usado para criar a instância da classe. Ele verifica se a instância já existe e a cria apenas se ainda não existir.

### Utilização do Singleton

A classe `PdoConnection` usa o Singleton para criar uma única conexão PDO com o banco de dados. Ela encapsula a lógica para configurar a conexão com base nas variáveis de ambiente.

### Conclusão

O padrão Singleton é útil quando é necessário garantir que apenas uma instância de uma classe seja criada e compartilhada globalmente em toda a aplicação. No caso do código fornecido, ele garante que a conexão com o banco de dados seja única e reutilizável em toda a aplicação.

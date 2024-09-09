<?php
// Definição da classe Database, que gerencia a conexão com o banco de dados
class Database {
    // Propriedade privada que armazenará a instância da conexão com o banco de dados
    // Utiliza o padrão Singleton, cujo objetivo desse padrão é garantir que apenas uma única instância de uma classe seja criada durante a execução do programa, e que essa instância seja reutilizada sempre que necessário.
    private static $instance = null;

    // Método público que retorna a conexão com o banco de dados
    public static function getConnection() {
        // Verifica se a instância de conexão ainda não foi criada
        if (!self::$instance) {
            // Configurações de conexão com o banco de dados
            $host = 'localhost';     // Host do banco de dados (normalmente localhost em ambientes de desenvolvimento)
            $db = 'sistema_usuarios'; // Nome do banco de dados
            $user = 'root';           // Nome de usuário do banco de dados
            $password = '';           // Senha do banco de dados (em ambientes de produção, essa senha deve ser protegida)

            // Cria uma nova instância de PDO (classe PHP para interagir com o banco de dados)
            // A conexão usa o driver MySQL (mysql:) e as informações de host e banco de dados
            self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            
            // Define o modo de erro para exceções, facilitando a depuração e o tratamento de erros
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        // Retorna a instância de conexão (singleton, ou seja, uma única instância será usada)
        return self::$instance;
    }
}
?>

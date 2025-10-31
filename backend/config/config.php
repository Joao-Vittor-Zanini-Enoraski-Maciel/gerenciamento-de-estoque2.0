<?php
// Configuração do banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "slacknovo_loja"; // atualizado para corresponder ao esquema em data/banco.sql

// Conexão com o servidor MySQL (sem selecionar DB inicialmente)
$conexao = new mysqli($servidor, $usuario, $senha);

// Verificação de conexão
if($conexao->connect_error){
    die("Falha de conexão: " . $conexao->connect_error);
}

// Criar banco se não existir e selecionar
$hasDb = false;
try {
    $hasDb = $conexao->select_db($banco);
} catch (\mysqli_sql_exception $e) {
    // select_db pode lançar em algumas configurações; tratar como não existente
    $hasDb = false;
}

if (!$hasDb) {
    $createDbSql = "CREATE DATABASE IF NOT EXISTS `$banco` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
    if (!$conexao->query($createDbSql)) {
        die("Erro ao criar banco de dados: " . $conexao->error);
    }
    // Selecionar o banco recém-criado
    try {
        if (!$conexao->select_db($banco)) {
            die("Falha ao selecionar o banco de dados: " . $conexao->error);
        }
    } catch (\mysqli_sql_exception $e) {
        die("Falha ao selecionar o banco de dados: " . $e->getMessage());
    }
}

// Verifica se a tabela 'produto' existe; se não, tenta importar data/banco.sql
$check = $conexao->query("SHOW TABLES LIKE 'produto'");
if ($check && $check->num_rows === 0) {
    $schemaPath = __DIR__ . '/../../data/banco.sql';
    if (file_exists($schemaPath)) {
        $sql = file_get_contents($schemaPath);
        if ($sql !== false && trim($sql) !== '') {
            // Remover possíveis instruções CREATE DATABASE/USE do arquivo de schema
            $sql = preg_replace('/CREATE\s+DATABASE\s+[^;]+;?/i', '', $sql);
            $sql = preg_replace('/USE\s+[^;]+;?/i', '', $sql);
            // Executa múltiplas queries
            if ($conexao->multi_query($sql)) {
                // Percorre e limpa todos os resultados
                do {
                    if ($res = $conexao->store_result()) {
                        $res->free();
                    }
                } while ($conexao->more_results() && $conexao->next_result());
            } else {
                // Se falhar na importação, registra o erro para depuração
                error_log('Falha ao importar schema: ' . $conexao->error);
            }
        }
    } else {
        error_log('Arquivo de schema não encontrado em: ' . $schemaPath);
    }
}


?>
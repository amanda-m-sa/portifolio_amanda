<?php
// Função para limpar dados de entrada - remove espaços e caracteres especiais
function limpar($valor)
{
    return trim(filter_var($valor, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
}

// Verifica se é uma requisição POST - só aceita envios de formulário
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo '<!doctype html><html lang="pt-br"><meta charset="utf-8"><title>Método não permitido</title><body><p>Método não permitido.</p><p><a href="/">Voltar</a></p></body></html>';
    exit;
}

// Pega os dados do formulário e limpa/valida
$nome = limpar($_POST['nome'] ?? '');
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL) ?: '';
$mensagem = trim($_POST['mensagem'] ?? '');

// Validação dos campos obrigatórios
$erros = [];
if ($nome === '') {
    $erros[] = 'Informe seu nome.';
}
if ($email === '') {
    $erros[] = 'Informe um e-mail válido.';
}
if ($mensagem === '') {
    $erros[] = 'Digite sua mensagem.';
}

// Se tem erros, mostra a página de erro e para aqui
if ($erros) {
    http_response_code(400);
    echo '<!doctype html><html lang="pt-br"><meta charset="utf-8">';
    echo '<title>Erro no envio</title><body style="font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;background:#0b0f19;color:#e6e9ef;">';
    echo '<div style="width:min(720px,92%);margin:48px auto;">';
    echo '<h1 style="margin:0 0 12px;">Não foi possível enviar</h1>';
    echo '<ul style="margin:0 0 16px 18px;">';
    foreach ($erros as $e) {
        echo '<li>' . htmlspecialchars($e) . '</li>';
    }
    echo '</ul>';
    echo '<p><a href="/index.php#contato" style="color:#22d3ee;">Voltar ao formulário</a></p>';
    echo '</div></body></html>';
    exit;
}

// Monta o texto para salvar no log do servidor
$dadosContato = "=== NOVO CONTATO ===\n";
$dadosContato .= 'Data/Hora: ' . date('d/m/Y H:i:s') . "\n";
$dadosContato .= "Nome: {$nome}\n";
$dadosContato .= "Email: {$email}\n";
$dadosContato .= "Mensagem: {$mensagem}\n";
$dadosContato .= "==================\n";

// Salva no log do servidor - aparece no terminal quando roda com php -S
error_log($dadosContato);

// Mostra a página de sucesso para o usuário
echo '<!doctype html><html lang="pt-br"><meta charset="utf-8">';
echo '<title>Mensagem recebida</title>';
echo '<body style="font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;background:#0b0f19;color:#e6e9ef;">';
echo '<div style="width:min(720px,92%);margin:48px auto;">';
echo '<h1 style="margin:0 0 12px;">Mensagem recebida!</h1>';
echo '<p>Obrigado pelo contato, <strong>' . htmlspecialchars($nome) . '</strong>!</p>';
echo '<p>Retornarei em breve através do email <strong>' . htmlspecialchars($email) . '</strong>.</p>';
echo '<p><a href="/index.php#contato" style="color:#22d3ee;">Voltar ao site</a></p>';
echo '</div></body></html>';

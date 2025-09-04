<?php
// Arquivo: router.php

// Caminho base do site
$baseDir = __DIR__;

// Página solicitada
$request = $_SERVER['REQUEST_URI'];

// Remove query strings (?param=valor)
$request = strtok($request, '?');

// Normaliza o caminho
$request = rtrim($request, '/');

// Caso a raiz seja acessada, envia para index.html
if ($request === '' || $request === '/main') {
    header("Location: /index.html");
    exit;
}

// Define o caminho do arquivo
$file = $baseDir . $request;

// Caso seja um diretório, tenta servir um index.html dentro dele
if (is_dir($file)) {
    $file = rtrim($file, '/') . '/index.html';
}

// Caso o arquivo exista, serve ele diretamente
if (file_exists($file)) {
    header("Content-Type: " . mime_content_type($file));
    readfile($file);
    exit;
}

// Caso contrário, exibe a página 404
$notFound = $baseDir . '/404.html';

if (file_exists($notFound)) {
    header("HTTP/1.1 404 Not Found");
    readfile($notFound);
} else {
    // Fallback caso o 404.html não exista
    header("HTTP/1.1 404 Not Found");
    echo "<h1>404 - Página não encontrada</h1>";
    echo "<p>A página que você está procurando não existe.</p>";
}
exit;
?>

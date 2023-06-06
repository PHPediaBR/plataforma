# Plataforma PHPédia

Usamos o **[Librarian](https://librarianphp.dev)** como ferramenta para criar a plataforma PHPédia.

## Configuração

### Instalar dependências

```bash
composer install && npm install
```

## Comandos

### Criar página

```bash
composer create:page <nome>
```

### Criar post

```bash
composer create:post <nome>
```

### Limpar cache

```bash
composer cache:clear
```

### Recarregar cache

```bash
composer cache:refresh
```

### Gerar site

```bash
composer build
```

# Portfólio Pessoal em PHP

Um portfólio web responsivo desenvolvido em PHP para apresentação profissional, com sistema de contato funcional e design moderno.

## 📋 Descrição

Este projeto consiste em uma página de portfólio pessoal desenvolvida em PHP puro, sem frameworks, apresentando informações profissionais, experiência acadêmica, habilidades e projetos. O sistema inclui um formulário de contato funcional que registra as mensagens no log do servidor.

## 🚀 Tecnologias Utilizadas

- **PHP 7.4+** - Backend e processamento de formulários
- **HTML5** - Estrutura semântica
- **CSS3** - Estilização moderna com variáveis CSS e Grid/Flexbox
- **JavaScript** - Interações básicas (navegação suave)

## 📁 Estrutura do Projeto

```
portifolio-amanda/
├── index.php              # Página principal do portfólio
├── contato.php            # Processamento do formulário de contato
├── assets/
│   ├── css/
│   │   └── style.css      # Estilos principais
│   └── images/
│       └── perfil.jpeg    # Foto de perfil
└── README.md              # Este arquivo
```

## 🎨 Funcionalidades

### Página Principal (`index.php`)
- **Header com navegação** - Menu responsivo com links âncora
- **Seção Herói** - Apresentação pessoal com foto e informações básicas
- **Currículo por Categorias**:
  - Experiências profissionais
  - Formação acadêmica
  - Habilidades técnicas
  - Outros (certificações, idiomas, voluntariado)
- **Galeria de Projetos** - Cards responsivos com links externos
- **Formulário de Contato** - Integrado com processamento PHP

### Sistema de Contato (`contato.php`)
- **Validação de dados** - Campos obrigatórios e sanitização
- **Log de mensagens** - Registro no log do servidor via `error_log()`
- **Resposta ao usuário** - Página de confirmação personalizada

## 🛠️ Instalação e Execução

### Pré-requisitos
- PHP 7.4 ou superior
- Servidor web (Apache, Nginx) ou servidor de desenvolvimento PHP

### Instalação Local

1. **Clone ou baixe o projeto**
   ```bash
   git clone [URL_DO_REPOSITORIO]
   cd portifolio-amanda
   ```

2. **Execute o servidor de desenvolvimento PHP**
   ```bash
   php -S localhost:8000 -t .
   ```

3. **Acesse no navegador**
   ```
   http://localhost:8000
   ```

### Com XAMPP/WAMP

1. Copie a pasta do projeto para `htdocs` (XAMPP) ou `www` (WAMP)
2. Acesse `http://localhost/portifolio-amanda`

## ⚙️ Configuração

### Personalização do Portfólio

Edite o arquivo `index.php` e modifique as variáveis no início:

```php
$profile = [
    'nome' => 'Seu Nome Completo',
    'cargo' => 'Sua Profissão',
    'resumo' => 'Seu resumo profissional...',
    'local' => 'Sua cidade, estado',
    'email' => 'seu@email.com',
    'linkedin' => 'https://linkedin.com/in/seu-perfil',
    'github' => 'https://github.com/seu-usuario',
];
```

### Adicionando Projetos

Modifique o array `$projetos` em `index.php`:

```php
$projetos = [
    [
        'titulo' => 'Nome do Projeto',
        'descricao' => 'Descrição do projeto...',
        'link' => 'https://link-para-o-projeto.com'
    ],
    // Adicione mais projetos...
];
```

### Substituindo a Foto

1. Substitua `assets/images/perfil.jpeg` pela sua foto
2. Mantenha o mesmo nome ou atualize o caminho no HTML

## 📱 Design Responsivo

O portfólio foi desenvolvido com foco em responsividade:

- **Desktop**: Layout em grid com 2 colunas
- **Tablet**: Adaptação automática dos grids
- **Mobile**: Layout em coluna única com navegação otimizada

### Breakpoints
- `max-width: 900px` - Layout intermediário
- `max-width: 720px` - Mobile

## 🎨 Paleta de Cores

O design utiliza uma paleta moderna com tema escuro:

```css
:root {
    --bg1: #0a0f1a;
    --bg2: #0e1422;
    --surface: #121a2b;
    --text: #e7eaf1;
    --muted: #9aa7bd;
    --primary: #8b5cf6;
    --accent: #22d3ee;
}
```

## 📝 Funcionalidades do Formulário

### Validação
- Nome obrigatório (sanitizado)
- Email válido
- Mensagem obrigatória
- Proteção contra bots (honeypot)

### Log de Mensagens
As mensagens são registradas no log do servidor com:
- Data e hora
- Nome do remetente
- Email
- Mensagem
- IP de origem

Para visualizar os logs:
```bash
# No terminal onde executou php -S
# Os logs aparecerão automaticamente

# Ou no log do Apache/XAMPP
tail -f C:\xampp\apache\logs\error.log
```

## 🔧 Melhorias Futuras

- [ ] Sistema de autenticação para visualizar mensagens
- [ ] Integração com banco de dados
- [ ] Sistema de envio de email real
- [ ] Blog/artigos
- [ ] Galeria de imagens dos projetos
- [ ] Modo claro/escuro
- [ ] Animações CSS avançadas

## 📚 Conceitos PHP Demonstrados

Este projeto demonstra os seguintes conceitos de PHP:

- **Estruturas de controle** - Condicionais e loops
- **Arrays associativos** - Armazenamento de dados
- **Sanitização de dados** - `filter_var()` e `htmlspecialchars()`
- **Superglobais** - `$_POST`, `$_SERVER`
- **Funções nativas** - `date()`, `error_log()`
- **Validação de formulários** - Campos obrigatórios e formatos
- **Segurança básica** - Honeypot e sanitização
- **Métodos HTTP** - Verificação de POST
- **Códigos de resposta** - 200, 400, 405

## 👨‍💻 Autor

**Amanda Moreira de Sá**
- Técnica de Suporte TI Pleno
- Bacharela em Engenharia Ambiental e Sanitária
- Bacharelanda em Sistemas de Informação
- Pós-graduanda em MBA em LGPD e Compliance Digital

## 📄 Licença

Este projeto foi desenvolvido para fins acadêmicos. Sinta-se livre para usar como referência para seus próprios projetos.

## 🤝 Contribuições

Contribuições são bem-vindas! Para contribuir:

1. Faça um fork do projeto
2. Crie uma branch para sua feature
3. Commit suas mudanças
4. Push para a branch
5. Abra um Pull Request

---

**Desenvolvido com ❤️ para fins acadêmicos**

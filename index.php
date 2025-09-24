<?php
// Aqui ficam os dados pessoais - fácil de alterar quando necessário
$profile = [
    'nome' => 'Amanda Moreira de Sá',
    'cargo' => 'Técnica de Suporte TI Pleno',
    'resumo' => 'Técnica em Tecnologia da Informação. Bacharela em Engenharia Ambiental e Sanitária, e atualmente bacharelanda em Sistemas de Informação e pós-graduanda em MBA em LGPD e Compliance Digital.',
    'local' => 'São Paulo, Brasil',
    'email' => 'amanda@example.com',
    'linkedin' => 'https://www.linkedin.com/in/amanda',
    'github' => 'https://github.com/amanda',
];

// Lista dos projetos para mostrar na seção de projetos
// Posso adicionar quantos quiser, o layout se adapta automaticamente
$projetos = [
    [
        'titulo' => 'Landing Page Moda',
        'descricao' => 'LP responsiva com foco em performance e SEO.',
        'link' => 'https://exemplo.com/projeto1'
    ],
    [
        'titulo' => 'Dashboard de Vendas',
        'descricao' => 'Dashboard com gráficos e filtros dinâmicos.',
        'link' => 'https://exemplo.com/projeto2'
    ],
    [
        'titulo' => 'Design System',
        'descricao' => 'Biblioteca de componentes em SCSS e Storybook.',
        'link' => 'https://exemplo.com/projeto3'
    ],
];
?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo htmlspecialchars($profile['nome']); ?> — Portfólio</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<!-- Header fixo com navegação - fica sempre no topo -->
	<header class="site-header">
		<div class="container header-bar">
			<!-- Logo/brand com as iniciais -->
			<a class="brand" href="#home">AMS</a>
			<!-- Menu de navegação com links âncora -->
			<nav class="nav">
				<a href="#home">Início</a>
				<a href="#curriculo">Currículo</a>
				<a href="#projetos">Projetos</a>
				<a href="#contato">Contato</a>
			</nav>
		</div>
	</header>

	<!-- Seção principal - primeira coisa que o visitante vê -->
	<main id="home">
		<section class="hero">
			<div class="container hero-grid">
				<!-- Foto de perfil -->
				<div class="hero-avatar" aria-hidden="true"><img src="assets/images/perfil.jpeg" alt="Foto de perfil de <?php echo htmlspecialchars($profile['nome']); ?>" class="hero-photo"></div>
				<!-- Texto de apresentação -->
				<div class="hero-copy">
					<h1><?php echo htmlspecialchars($profile['nome']); ?></h1>
					<p class="tag"><?php echo htmlspecialchars($profile['cargo']); ?> · <?php echo htmlspecialchars($profile['local']); ?></p>
					<p class="lead"><?php echo htmlspecialchars($profile['resumo']); ?></p>
					<!-- Botões de ação -->
					<div class="hero-actions">
						<a class="btn primary" href="#projetos">Ver Projetos</a>
						<a class="btn ghost" href="mailto:<?php echo htmlspecialchars($profile['email']); ?>">Contato</a>
					</div>
					<!-- Links das redes sociais -->
					<ul class="social">
						<li><a href="<?php echo htmlspecialchars($profile['linkedin']); ?>" target="_blank" rel="noopener noreferrer">LinkedIn</a></li>
						<li><a href="<?php echo htmlspecialchars($profile['github']); ?>" target="_blank" rel="noopener noreferrer">GitHub</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Seção do currículo dividida em 4 categorias -->
		<section class="secao" id="curriculo">
			<div class="container">
				<h2>Currículo</h2>
				<!-- Grid responsivo com as 4 categorias -->
				<div class="cv-grid">
					<!-- Card de experiências profissionais -->
					<section class="cv-card" data-type="experiencias">
						<h3 class="cv-title">Experiências</h3>
						<ul class="cv-list">
							<li>
								<div class="cv-role">Técnica de Suporte TI Pleno</div>
								<!-- Badges com informações da empresa, período e local -->
								<div class="cv-meta"><span class="badge">AeC Centro de Contatos</span><span class="dot"></span><span class="badge">2023 — atual</span><span class="dot"></span><span class="badge">São Paulo/SP</span></div>
								<p class="cv-desc">Atendimento N2, troubleshooting em Windows, redes e aplicações internas; abertura e acompanhamento de chamados; documentação de procedimentos; apoio a inventário e monitoramento.</p>
								<!-- Tags com as tecnologias utilizadas -->
								<ul class="tags">
									<li>Windows 10/11</li>
									<li>AD</li>
									<li>Office 365</li>
									<li>GLPI</li>
								</ul>
							</li>
							<li>
								<div class="cv-role">Assistente de TI</div>
								<div class="cv-meta"><span class="badge">Empresa XYZ</span><span class="dot"></span><span class="badge">2021 — 2023</span></div>
								<p class="cv-desc">Suporte ao usuário, configuração de estações, gestão de backups, criação de scripts simples para automação de rotinas e manutenção preventiva.</p>
							</li>
							<li>
								<div class="cv-role">Estágio em TI</div>
								<div class="cv-meta"><span class="badge">Órgão Público ABC</span><span class="dot"></span><span class="badge">2020 — 2021</span></div>
								<p class="cv-desc">Apoio ao service desk, controle de chamados, organização de laboratório e inventário de equipamentos.</p>
							</li>
						</ul>
					</section>

					<section class="cv-card" data-type="academico">
						<h3 class="cv-title">Acadêmico</h3>
						<ul class="cv-list">
							<li>
								<div class="cv-role">MBA em LGPD e Compliance Digital</div>
								<div class="cv-meta"><span class="badge">Pós-graduação</span><span class="dot"></span><span class="badge">em andamento</span><span class="dot"></span><span class="badge">2025</span></div>
							</li>
							<li>
								<div class="cv-role">Bacharelado em Sistemas de Informação</div>
								<div class="cv-meta"><span class="badge">em andamento</span><span class="dot"></span><span class="badge">previsão 2026</span></div>
							</li>
							<li>
								<div class="cv-role">Bacharelado em Engenharia Ambiental e Sanitária</div>
								<div class="cv-meta"><span class="badge">concluído</span></div>
							</li>
							<li>
								<div class="cv-role">Técnico em Tecnologia da Informação</div>
								<div class="cv-meta"><span class="badge">concluído</span></div>
							</li>
						</ul>
					</section>

					<!-- Card de habilidades técnicas - layout em chips -->
					<section class="cv-card" data-type="habilidades">
						<h3 class="cv-title">Habilidades</h3>
						<!-- Chips responsivos que se adaptam ao espaço -->
						<ul class="chips">
							<li>Suporte N1/N2</li>
							<li>Windows 10/11</li>
							<li>Active Directory</li>
							<li>Office 365</li>
							<li>Redes (TCP/IP, DNS, DHCP)</li>
							<li>ITIL (noções)</li>
							<li>LGPD</li>
							<li>Git/GitHub</li>
							<li>HTML/CSS</li>
							<li>SQL básico</li>
						</ul>
					</section>

					<section class="cv-card" data-type="outros">
						<h3 class="cv-title">Outros</h3>
						<ul class="cv-list">
							<li>
								<div class="cv-role">Certificação</div>
								<div class="cv-meta"><span class="badge">AZ-900 (Azure)</span><span class="dot"></span><span class="badge">prevista</span></div>
							</li>
							<li>
								<div class="cv-role">Voluntariado</div>
								<div class="cv-meta"><span class="badge">Oficinas de letramento digital</span></div>
							</li>
							<li>
								<div class="cv-role">Idiomas</div>
								<div class="cv-meta"><span class="badge">Português (nativo)</span><span class="dot"></span><span class="badge">Inglês (intermediário)</span></div>
							</li>
						</ul>
					</section>
				</div>
			</div>
		</section>
		<!-- Seção de projetos - galeria responsiva -->
		<section class="secao" id="projetos">
			<div class="container">
				<h2>Projetos</h2>
				<!-- Grid automático que se adapta ao número de projetos -->
				<div class="gallery">
					<?php foreach ($projetos as $proj): ?>
						<article class="project">
							<div class="project-body">
								<h3><?php echo htmlspecialchars($proj['titulo']); ?></h3>
								<p><?php echo htmlspecialchars($proj['descricao']); ?></p>
							</div>
							<!-- Link externo para o projeto -->
							<a class="project-link" href="<?php echo htmlspecialchars($proj['link']); ?>" target="_blank" rel="noopener noreferrer">Ver projeto</a>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<!-- Seção de contato com informações e formulário -->
		<section class="secao" id="contato">
			<div class="container">
				<h2>Contato</h2>
				<!-- Layout em duas colunas: info à esquerda, form à direita -->
				<div class="contact-grid">
					<!-- Informações de contato direto -->
					<aside class="contact-info">
						<h3>Fale comigo</h3>
						<ul>
							<li><a href="mailto:<?php echo htmlspecialchars($profile['email']); ?>"><?php echo htmlspecialchars($profile['email']); ?></a></li>
							<li><a href="<?php echo htmlspecialchars($profile['linkedin']); ?>" target="_blank" rel="noopener noreferrer">LinkedIn</a></li>
							<li><a href="<?php echo htmlspecialchars($profile['github']); ?>" target="_blank" rel="noopener noreferrer">GitHub</a></li>
						</ul>
					</aside>
					<!-- Formulário que envia para contato.php -->
					<form class="form-contato" method="post" action="contato.php">
						<div class="campo">
							<label for="nome">Nome</label>
							<input type="text" id="nome" name="nome" placeholder="Seu nome" required>
						</div>
						<div class="campo">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" placeholder="voce@exemplo.com" required>
						</div>
						<div class="campo campo-full">
							<label for="mensagem">Mensagem</label>
							<textarea id="mensagem" name="mensagem" rows="4" placeholder="Como posso ajudar?"></textarea>
						</div>
						<!-- Campo honeypot para evitar spam de bots -->
						<input type="text" name="website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;opacity:0" aria-hidden="true">
						<button type="submit" class="btn primary">Enviar</button>
					</form>
				</div>
			</div>
		</section>
	</main>

	<footer class="site-footer">
		<div class="container">
			<p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($profile['nome']); ?>. Todos os direitos reservados.</p>
		</div>
	</footer>
</body>
</html>



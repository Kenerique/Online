keneco@localhost

«Personal portfolio, project hub and digital playground by Kenner Vasquez.»

Uma página pessoal inspirada em interfaces de terminal para reunir projetos, experimentos, redes sociais, código e ideias em desenvolvimento.

O projeto nasceu da ideia de transformar um simples Linktree/portfólio em uma pequena representação do universo digital do Keneco.

---

🖥️ Sobre

O "keneco@localhost" funciona como uma central para diferentes projetos e áreas de interesse:

- 🌐 Projetos digitais
- 💻 Desenvolvimento e programação
- 🌴 Turismo
- 🎵 Música
- ✍️ Blogs e escrita
- 🎙️ Podcast
- 🛒 Ideias de e-commerce
- 🧪 Experimentos
- 🐙 Open Source
- 📱 Redes sociais

A página também permite apresentar projetos que ainda estão sendo construídos ou existem apenas como conceito.

Status dos projetos

● LIVE       projeto funcionando
● BUILDING   projeto em desenvolvimento
● CONCEPT    ideia / projeto futuro

---

✨ Características

- Interface inspirada em terminal
- Design responsivo
- Mobile-first
- Dark mode
- Cards de projetos expansíveis
- Links para diferentes plataformas
- Seção de repositórios
- Seção "whoami"
- Animação de cursor
- JavaScript vanilla
- HTML e CSS sem frameworks
- Sem dependências externas

---

📁 Estrutura

O projeto atualmente é intencionalmente simples:

.
└── index.html

Todo o HTML, CSS e JavaScript estão concentrados em um único arquivo para facilitar hospedagem, edição e manutenção.

---

🚀 Como usar

1. Clone o repositório

git clone https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git

Entre na pasta:

cd SEU-REPOSITORIO

2. Abra o projeto

Como o projeto não possui dependências, basta abrir:

index.html

diretamente no navegador.

Também é possível utilizar um servidor local.

Por exemplo, com Python:

python -m http.server 8000

Depois acesse:

http://localhost:8000

---

✏️ Personalização

Os principais elementos podem ser alterados diretamente no "index.html".

Informações pessoais

Procure por:

<h1>Kenner <span>Vasquez</span></h1>

e altere o nome ou apresentação.

---

Projetos

Cada projeto está dentro de:

<article class="project">

Um projeto possui:

- nome
- categoria
- status
- descrição
- links

Exemplo:

<div class="project-name">
  MEU PROJETO
</div>

<div class="project-category">
  category / type
</div>

O status pode ser:

● LIVE

● BUILDING

ou:

● CONCEPT

---

🔗 Adicionando links

Dentro de um projeto:

<div class="project-links">

  <a
    class="project-link"
    href="https://exemplo.com"
    target="_blank"
    rel="noopener"
  >
    WEBSITE
  </a>

</div>

Você pode adicionar links para:

- Website
- Instagram
- GitHub
- Blog
- YouTube
- Spotify
- Loja
- qualquer outro destino

---

🐙 Open Source

A seção "open-source" funciona como um pequeno índice dos projetos disponíveis no GitHub:

github.com/keneco

repositories:

├── sustainatrip
├── blog
├── experiments
├── tools
└── archived

Substitua os links pelos repositórios reais:

<a
  href="https://github.com/Kenerique/Online"
  target="_blank"
  rel="noopener"
>

---

🌐 Deploy

Por ser um projeto estático, ele pode ser hospedado em praticamente qualquer serviço de hospedagem estática.

Algumas opções:

- GitHub Pages
- Cloudflare Pages
- Netlify
- Vercel
- qualquer servidor web tradicional

Não é necessário Node.js, banco de dados ou backend.

---

🧪 Desenvolvimento

O projeto utiliza apenas:

HTML5
CSS3
JavaScript

Não existem frameworks ou bibliotecas obrigatórias.

Isso é intencional: o objetivo é manter o projeto rápido, simples e fácil de modificar.

---

🛠️ Roadmap

Ideias para futuras versões:

[ ] Terminal interativo
[ ] Comandos personalizados
[ ] Easter eggs
[ ] Página individual para cada projeto
[ ] Estatísticas do GitHub
[ ] Projetos carregados a partir de JSON
[ ] Filtros por categoria
[ ] Animações adicionais
[ ] Página de projetos arquivados
[ ] Integração com APIs
[ ] PWA

---

📜 Filosofia

O "keneco@localhost" não pretende ser apenas um portfólio tradicional.

É uma representação dos projetos, ideias e experimentos que fazem parte da jornada de construção do Keneco.

Alguns projetos estão funcionando.

Alguns estão sendo construídos.

Alguns talvez nunca existam.

E tudo bem.

keneco@localhost:~$ status

projects:      online
experiments:   running
ideas:         compiling
sleep:         not found

system status: probably fine

---

📄 Licença

Este projeto pode ser utilizado como referência para estudos e experimentações.

Se você reutilizar partes significativas do código, considere dar crédito ao projeto original.

---

keneco@localhost

"TI • criatividade • turismo • música"
# Astro Finder

Astro Finder é uma aplicação web que permite aos usuários descobrir seu signo zodiacal com base em sua data de
nascimento. A aplicação exibe informações sobre o signo do usuário, incluindo uma breve descrição e uma imagem
representativa.

## Features

- Formulário para inserção da data de nascimento
- Cálculo do signo zodiacal com base na data fornecida
- Exibição do nome, imagem e descrição do signo
- Responsividade e estilização personalizada usando Bootstrap
- Arquitetura modular com layouts reutilizáveis

## Requisitos

- PHP 7.4 ou superior
- Servidor local (WAMP, XAMPP, etc.)
- Navegador moderno
- Bootstrap 5.x

## Instalação

1. Clone o repositório:

```bash
git clone https://github.com/seu-usuario/astro-finder.git
```

2. Mova o projeto para o diretório do servidor local (`htdocs` no XAMPP ou `www` no WAMP):

```bash
mv astro-finder /caminho/para/servidor/htdocs
```

3. Acesse o projeto em seu navegador:

```
http://localhost/astro-finder
```

## Estrutura do Projeto

- `index.php`: Página inicial, onde o usuário insere sua data de nascimento.
- `show_zodiac_sign.php`: Página que exibe o resultado do signo.
- `layouts/header.php`: Arquivo de layout para a inclusão do header.
- `assets/`: Diretório contendo os arquivos de CSS, imagens e JavaScript.
    - `css/style.css`: Estilos globais.
    - `css/index.css`: Estilos específicos para o `index.php`.
    - `css/show_zodiac_sign.css`: Estilos específicos para o `show_zodiac_sign.php`.
    - `imgs/`: Imagens representativas dos signos.
- `signos.xml`: Arquivo contendo as informações sobre os signos (datas, nomes e descrições).

## Uso

1. Acesse a página inicial, onde você verá um formulário para inserção da data de nascimento.
2. Após preencher a data, clique no botão "Descobrir Signo".
3. A aplicação redireciona para a página de resultado, exibindo o signo, uma imagem e a descrição correspondente.

## Contribuição

1. Fork o repositório
2. Crie uma branch de feature (`git checkout -b feature/nome-da-feature`)
3. Commit suas alterações (`git commit -m 'Add alguma feature'`)
4. Push para a branch (`git push origin feature/nome-da-feature`)
5. Abra um Pull Request

## Licença

Este projeto é licenciado sob a licença MIT - veja o arquivo [LICENSE](LICENSE) para mais detalhes.
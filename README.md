# BioControl - Portal Institucional & Catálogo Agrícola

Este repositório contém o projeto de reestruturação de front-end e arquitetura de informação do site institucional e catálogo da **BioControl**, empresa especializada no setor de controle biológico agrícola. O objetivo principal do projeto foi transformar a plataforma legada num portal moderno, responsivo, focado em UX/UI e otimizado para a conversão de leads qualificados.

## 🚀 Funcionalidades e Módulos Implementados

O projeto envolveu uma reformulação profunda na navegação e na lógica de exibição de dados para o produtor rural:

* **Arquitetura de Relacionamento de Dados:** Implementação de uma estrutura de navegação lógica e interligada para o setor agrícola, mapeando o fluxo de **Culturas ➔ Pragas Associadas ➔ Produtos Biológicos** recomendados.
* **Filtros Dinâmicos Avançados:** Desenvolvimento de um sistema de carrossel de culturas com filtros interativos em cascata na Home, permitindo ao utilizador encontrar soluções rapidamente através do cruzamento de dados.
* **Captação de Leads Segmentada:** Criação de formulários dinâmicos e modais estruturados especificamente para o setor (com seletores de Cargo, Cidade, Cultura de interesse e tamanho da Área em hectares).
* **Integração com RD Station:** Vinculação e mapeamento dos formulários flutuantes e fixos diretamente com a API do **RD Station Marketing** para automação de CRM.
* **UX/UI Otimizado para Mobile:** Redesenho completo do menu principal (migrado da lateral para o topo), redimensionamento tipográfico global para melhor legibilidade no campo e interface *touch-friendly*.

## 🛠️ Stack Tecnológico

* **Interface (Front-End):** HTML5, CSS3 (BEM Methodology / Elementos Fluídos), JavaScript (ES6+ para filtros e modais)
* **Design & Usabilidade:** Flat Design, Conceitos de UX/UI focados em conversão, Responsividade Fluída
* **Integrações:** API RD Station, Sistema de Download de Anexos Técnicos (PDFs de manejo)

## 📂 Estrutura das Páginas Desenvolvidas

* `Home`: Portal de entrada com carrossel dinâmico, barra de LGPD atualizada e filtro rápido de soluções.
* `Soluções / Produtos`: Páginas de listagem com grids organizados em três colunas para Culturas, Pragas e Produtos (Microbiológicos).
* `Internas de Detalhe`: Páginas dedicadas por produto (ex: Metarriz Plus WP) destacando diretamente quais as pragas que combate, com modais de contacto integrados.
* `Áreas de Atuação & Contacto`: Unificação das páginas de contacto e localizações numa única interface centralizada.
* `Blog & FAQ`: Páginas institucionais de conteúdo com suporte a anexos para download de fichas técnicas.

## 📦 Como Visualizar o Projeto

1.  Faz o clone do repositório:
    ```bash
    git clone [https://github.com/seu-usuario/biocontrol-portal.git](https://github.com/seu-usuario/biocontrol-portal.git)
    ```
2.  Abre o ficheiro principal no teu navegador para testar a interface:
    ```bash
    open index.html
    ```

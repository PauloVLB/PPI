# PPI
Repositório para anotações e projetos da disciplina de Programação Para Internet

## HTTP - Hypertext Transfer Protocol
- Protocolo de comunicação Cliente - Servidor
- Trabalha em conjunto com o modelo TCP/IP
- Camada de aplicação (usado geralmente nos navegadores e servidores web) 
- Modelo de Request e Response
- Conexão não é persistente (a cada acesso ou atualização é necessária a criação de uma nova conexão)

### Request
- Linha de pedido
    - Identificador do Método (tipo de ação esperada)
        - GET
        - HEAD
        - POST
        - PUT
        - DELETE
        - CONNECT
        - OPTIONS
        - TRACE
        - PATCH
    - Uri do Recurso (endereço no qual será enviado o pedido)
        - /index.php
        - /users
        - /create
    - Versão do Protocolo
        - HTTP 0.9
        - HTTP 1.0
        - HTPP 1.1 <- mais usada atualmente
        - HTTP 2.0
- Cabeçalho (informações adicionais)
    - Geral 
    - Requisição
    - Entidade
    - Exemplos
        - Date (data de envio da requisição)
        - Cache-Control (diretivas para o mecanismo de cache)
        - Transfer-Encoding (forma de decodificar o corpo da requisição)
        - Cookie (envia os cookies ne)
        - Accpet (preferência de resposta)
        - User-Agent (informções sobre o client)
- Corpo (dados em si)
    - Exemplo:
    <img src="https://gblobscdn.gitbook.com/assets%2F-LPXlabEs8YqL0ObNsDq%2F-LQ3neCiuJkgFGAxEicy%2F-LQ3nej2V4Ox2vKh2wm4%2Fcadastro.png?alt=media"></img>
    (esquerda)

### Response
- Linha de status
    - Versão do protocolo (msm coisa da request)
    - [Código numérico](https://developer.mozilla.org/pt-PT/docs/Web/HTTP/Status) 
        - 1xx Informational (recebido e sendo processado)
        - 2xx Success (ggez)
        - 3xx Redirection (ações adicionais precisam ser tomadas)
        - 4xx Client Error (informações incorretas ou não pode ser processado)
        - 5xx Server Error (servidor não conseguiu processar o pedido, embora pareça estar correto)
    - Texto Associado ao Status (descrição)
    - São de cunho semântico
- Cabeçalho
    - Mesma coisa do request
    - Exemplos: 
        - Content-Type (tipo de conteúdo que foi enviado na resposta)
        - Access-Control-Allow (se a resposta pode ser acessada pela origem do pedido)
        - Date (data de resposta)
- Corpo 
    - Mensagem que o cliente vai interpretar
        - JSON
        - HTML
        - XML
        - Etc e tal
    - Exemplo:
    <img src="https://gblobscdn.gitbook.com/assets%2F-LPXlabEs8YqL0ObNsDq%2F-LQ3neCiuJkgFGAxEicy%2F-LQ3nej2V4Ox2vKh2wm4%2Fcadastro.png?alt=media"></img>
    (direita)

## Autor
[<img src="https://avatars3.githubusercontent.com/u/31678236?s=400&v=4" width=115><br><sub>@PauloVLB</sub>](https://github.com/PauloVLB) | 
| :---: |
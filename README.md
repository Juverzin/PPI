# NotificAtraso

## Descrição
O NotificAtraso é um sistema desenvolvido para automatizar o registro e a notificação de atrasos de alunos no Instituto Federal Farroupilha – Campus Santo Augusto. Este software substitui o processo manual, tornando-o digital, eficiente e mais confiável.

## Objetivo
O objetivo do **NotificAtraso** é facilitar o controle e a comunicação de atrasos dos alunos em instituições de ensino. Com ele, os funcionários podem registrar rapidamente os atrasos, informando data, hora, motivo e professor responsável pela aula. O sistema busca automaticamente os dados do aluno e do professor no banco de dados e envia um e-mail notificando o docente sobre o ocorrido. Isso torna o processo mais ágil, reduz falhas na comunicação e contribui para o acompanhamento disciplinar dos estudantes de forma organizada e digital.

## Funcionalidades
- Login de funcionários com CPF e senha
- Registro de atrasos com preenchimento automático dos dados do aluno e professor
- Notificação por e-mail ao professor informado
- Consulta de histórico de atrasos
- Edição de registros de atrasos
- Interface responsiva com Bootstrap

## Tecnologias utilizadas
- PHP
- MySQL
- HTML5
- CSS3 (Bootstrap)
- JavaScript (AJAX para buscas dinâmicas)

## Instalação
1. Clone este repositório
```bash
git clone https://github.com/seu-usuario/notificatraso.git
```
2. Importe o banco de dados `ppi-banco.sql` no phpMyAdmin
3. Configure o arquivo de conexão com o banco (`conexao.php`) com seus dados locais
4. Inicie o servidor local (XAMPP, WAMP ou similar)
5. Acesse o sistema via navegador: `http://localhost/PPI -2º Sem/index.php`

## Observação
Para que o envio de e-mails funcione corretamente, é necessário configurar um servidor SMTP válido no `php.ini` ou utilizar bibliotecas como PHPMailer.

---

Desenvolvido como projeto educacional no curso técnico em Informática – IFFar Campus Santo Augusto.

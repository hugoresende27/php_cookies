# php_cookies

#### Funcionamento básico de cookies em php
#### Implementação de um darkMode e lightMode com cookies
#### Ficheiros JSON encode e decode

- What is a Cookie?
A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.

- Nem todos os users têm os cookies ativos, atenção
- 60 * 60 * 24 * 30 = 1 mês
- não existe unsetcookie, usa-se um time com negativo, expirado 

# Proyecto: Servicio Web - Registro e Inicio de Sesión

# Evidencia de desempeño
GA7-220501096-AA5-EV01 - Diseño y desarrollo de servicios web - caso

# Descripción
Este proyecto implementa un servicio web en PHP que permite:
- Registrar usuarios en una base de datos.
- Iniciar sesión verificando el usuario y contraseña (con `password_hash` y `password_verify`).
- Devolver mensajes de éxito o error según el resultado.

# Tecnologías
- PHP
- MySQL (MAMP)
- Postman para pruebas
- Terminal de MacOs
- Git (versionamiento)

# Estructura del proyecto
- `config.php`: conexión a base de datos MySQL local
- `register.php`: script para registrar nuevos usuarios
- `login.php`: script para autenticar usuarios registrados

# Base de datos
- Nombre: `api_usuarios`
- Tabla: `usuarios`  
  Estructura:
  - `id`: int, AUTO_INCREMENT, PRIMARY KEY
  - `usuario`: varchar(50), UNIQUE
  - `contrasena`: varchar(255)

# Datos de prueba
- Usuario: jaime  
- Contraseña: 123456

# URLs para pruebas (en Postman)
- Registro: `http://localhost:8888/Api-login/register.php`
- Login: `http://localhost:8888/Api-login/login.php`

# Requisitos
- MAMP instalado y corriendo
- Proyecto ubicado en: `/Applications/MAMP/htdocs/Api-login/`
- Base de datos importada desde `api_usuarios.sql`

# Autor
Jaime Orlando Estupiñán
Ficha: 2834913

ANALISIS Y DESARROLLO DE SOFTWARE 
SENA
2025
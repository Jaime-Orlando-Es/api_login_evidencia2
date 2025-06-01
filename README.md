# API Registro/Login - PHP + MySQL

Este proyecto es una API sencilla desarrollada en PHP que permite el registro y autenticación de usuarios, utilizando MySQL como base de datos.

# Funcionalidades
	•	Registro de usuario con contraseña encriptada (password_hash)
	•	Autenticación de usuario con validación segura (password_verify)
	•	Respuestas en formato JSON

# Herramientas utilizadas
	•	PHP 8
	•	MySQL (vía MAMP)
	•	MAMP como entorno de servidor local
	•	Postman para pruebas de endpoints
	•	Terminal para verificación directa con comandos MySQL

# Conexión a base de datos

Parámetros utilizados:
	•	Host: 127.0.0.1
	•	Puerto: 8889
	•	Usuario: root
	•	Contraseña: JE5628
	•	Base de datos: api_usuarios

# Estructura de archivos
	•	config.php → conexión a la base de datos
	•	register.php → registro de usuario
	•	login.php → autenticación de usuario

# Cómo probar

Usa Postman en modo x-www-form-urlencoded:
	•	POST a /register.php
	•	usuario: tu_usuario
	•	contrasena: tu_clave
	•	POST a /login.php
	•	usuario: tu_usuario
	•	contrasena: tu_clave


Este proyecto fue realizado como parte de una evidencia de aprendizaje sobre servicios web.

# autor 
Jaime Orlando Estupiñan 

# ficha
2834913

ANALISIS Y DESARROLLO DE SOFTWARE
SENA
2025
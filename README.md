# 🏋️ Powerlifting Shop

Proyecto web para la materia de **Programación Web**, que cumple con la **Práctica 13: Creación de cuenta e inicio de sesión**.

---

## ✅ Funcionalidades implementadas

- Registro de nuevos usuarios desde un formulario (`registro.php`)
- Inicio de sesión usando email y contraseña (`login.php`, `validar_login.php`)
- Validación segura con `password_hash` y `password_verify`
- Sesión activa con nombre visible en la barra superior (`header.php`)
- Cierre de sesión funcional (`logout.php`)
- Protección de páginas restringidas usando `session_start()` (por ejemplo `carrito.php`)

---

## 🧪 ¿Cómo ejecutar el proyecto localmente?

1. Abre terminal y navega a la carpeta del proyecto
2. Ejecuta el servidor integrado de PHP:

```bash
php -S localhost:8000


Accede a las funcionalidades:

    registro.php: Crear cuenta nueva

    login.php: Iniciar sesión

    Navegar por productos, rutinas, etc.

    Ver sesión activa en barra superior

    logout.php: Cerrar sesión

    Archivo	Descripción
registro.php	Formulario y lógica para registrar usuario
login.php	Formulario de acceso
validar_login.php	Procesamiento del login
logout.php	Cierra la sesión
header.php / footer.php	Encabezado y pie de página
conexion.php	Conexión a base de datos MariaDB
productos.php	Vista de productos con formulario de carrito
carrito.php	(Implementado pero no público aún)


✨ Notas extra

    El carrito de compras está implementado pero no accesible desde el menú.

    Las funcionalidades principales para la práctica ya están listas y probadas.

    El código es responsivo con Bootstrap 5 y uso de sesiones en PHP puro.

    👨‍💻 Autor

Diego Mario Veytia Leyvas
Universidad Anáhuac
Programación Web - 2025
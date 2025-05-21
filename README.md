# Sistema de Registro SAO (Sword Art Online)

Un sistema web para registrar personas con temática de Sword Art Online, incluyendo generación aleatoria de razas.

## Características

- ✨ Registro de personas con datos completos
- 🎲 Generación aleatoria de razas (Humano, Mitad Bestia, Tripido)
- 📝 Edición y eliminación de registros
- 🔐 Protección con contraseñas de seguridad
- 🎨 Interfaz temática de SAO

## Instalación Local

1. Clona el repositorio:
```bash
git clone https://github.com/tu-usuario/sao-registro.git
cd sao-registro
```

2. Copia el archivo de configuración:
```bash
cp .env.example .env
```

3. Crea la base de datos ejecutando el script SQL incluido

4. Configura tu servidor local (XAMPP, WAMP, etc.)

## Instalación en Producción

1. Sube los archivos a tu hosting
2. Crea una base de datos MySQL en tu panel de hosting
3. Ejecuta el script `database.sql`
4. Crea un archivo `.env` con tus credenciales:
```bash
DB_HOST=tu_host
DB_USER=tu_usuario
DB_PASS=tu_contraseña
DB_NAME=tu_base_datos
```

## Estructura del Proyecto

```
/
├── config/
│   └── database.php       # Configuración de BD
├── index.html            # Formulario de registro
├── Registrar.php         # Procesa registros
├── listado.php          # Lista todos los registros
├── edit.php             # Editar registros
├── delete.php           # Eliminar registros
├── styles.css           # Estilos CSS
├── database.sql         # Script de base de datos
└── README.md           # Este archivo
```

## Configuración

### Variables de Entorno

Crea un archivo `.env` con:
- `DB_HOST`: Host de la base de datos
- `DB_USER`: Usuario de la base de datos
- `DB_PASS`: Contraseña de la base de datos
- `DB_NAME`: Nombre de la base de datos

### Contraseñas de Seguridad

Por defecto:
- Eliminar registros: `David1213`
- Editar registros: `david`

**¡Importante!** Cambia estas contraseñas antes de subir a producción.

## Uso

1. Accede a `index.html` para registrar nuevas personas
2. Usa `listado.php` para ver todos los registros
3. Haz clic en "Modificar" o "Eliminar" para gestionar registros

## Tecnologías

- PHP 7.4+
- MySQL/MariaDB
- HTML/CSS/JavaScript
- Bootstrap (opcional)

## Contribuir

1. Fork el proyecto
2. Crea una rama: `git checkout -b feature/nueva-caracteristica`
3. Commit: `git commit -m 'Añadir nueva característica'`
4. Push: `git push origin feature/nueva-caracteristica`
5. Abre un Pull Request

## Licencia

MIT License - ver archivo LICENSE para detalles
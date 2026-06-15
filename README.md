# Crecer Acredita CRM

Sistema web PHP 8+ con arquitectura MVC propia para gestionar empresas/leads que completan la Autoevaluación de Riesgo Crecer.

## Características

- Login seguro con sesiones, `password_hash` y `password_verify`.
- Roles iniciales: Super Admin, Administrador, Ejecutivo y Visualizador.
- CRM de leads con búsqueda, filtros, detalle, notas, estado y responsable.
- Endpoint público `POST /api/assessment/store` para recibir evaluaciones del sitio web.
- Cálculo automático de puntajes por módulo, puntaje final, nivel de riesgo y recomendaciones.
- Dashboard con métricas, últimos registros y gráficos con Chart.js.
- Reportes básicos y exportación CSV.
- UI corporativa con colores de Crecer Acredita.

## Requisitos

- PHP 8.0 o superior.
- MySQL 5.7+/MariaDB 10.4+.
- Extensión PDO MySQL habilitada.
- Apache con `mod_rewrite` para URLs limpias.

## Instalación

1. Crear una base de datos MySQL, por ejemplo `crecer`.
2. Importar `database/schema.sql`.
3. Importar `database/seeders.sql`.
4. Configurar credenciales en `config/database.php` o mediante variables de entorno:
   - `DB_HOST`
   - `DB_DATABASE`
   - `DB_USERNAME`
   - `DB_PASSWORD`
5. Apuntar el dominio/subdominio del hosting a la carpeta `public`.
6. Ingresar al sistema desde `/login`.

## Usuario administrador inicial

- Email: `admin@creceracredita.cl`
- Password: `Admin123456*`

## Estructura

```text
/public              Front controller, assets y .htaccess
/app/Controllers     Controladores MVC
/app/Models          Modelos PDO
/app/Views           Vistas y layouts
/app/Core            Bootstrap, router y conexión DB
/app/Middlewares     Middlewares de autenticación y acceso
/app/Helpers         Funciones globales seguras
/config              Configuración de app y base de datos
/routes              Definición de rutas web/API
/database            Schema y seeders MySQL
/storage/logs        Carpeta preparada para logs
```

## Endpoint público de autoevaluación

`POST /api/assessment/store`

Payload JSON de ejemplo:

```json
{
  "company_name": "Empresa Demo SpA",
  "company_rut": "76.123.456-7",
  "contact_name": "María Pérez",
  "position": "Gerente de Operaciones",
  "email": "maria@demo.cl",
  "phone": "+56912345678",
  "workers_count": 45,
  "industry": "Minería",
  "city": "Santiago",
  "answers": {
    "1": 10,
    "2": 5,
    "3": 10
  }
}
```

Respuesta esperada:

```json
{
  "success": true,
  "client_id": 25,
  "final_score": 78,
  "risk_level": "Riesgo medio",
  "recommendation": "Se identifican oportunidades de mejora..."
}
```

## JavaScript para conectar el modal

El archivo `public/assets/js/app.js` incluye la función `enviarAutoevaluacionCrecer(form)`. Cada input de respuesta debe llevar `data-question-id` y valor `10`, `5` o `0`.

```html
<input type="radio" name="q1" data-question-id="1" value="10">
<input type="radio" name="q1" data-question-id="1" value="5">
<input type="radio" name="q1" data-question-id="1" value="0">
```

```js
form.addEventListener('submit', async (event) => {
  event.preventDefault();
  const result = await enviarAutoevaluacionCrecer(form);
  console.log(result);
});
```

## Desarrollo local

Desde la raíz del proyecto:

```bash
php -S localhost:8000 -t public
```

Luego abrir `http://localhost:8000/login`.

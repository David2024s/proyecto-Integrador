# Capa 2: Lógica de Negocio (Backend)

Esta capa contiene la **lógica principal y las reglas del sistema** para la plataforma **Conecta y Aprende**. Se encarga de procesar las peticiones enviadas desde la capa de presentación (`src/presentation`).

---

## Ubicación en Laravel

En la estructura del proyecto, los componentes de esta capa se ubican en:

* **`app/Http/Controllers/`**: Controladores de Laravel encargados de procesar las solicitudes (búsqueda de tutores, agendamiento de citas, validación de credenciales y lógica de usuarios).
* **`routes/web.php`**: Definición de las rutas del sistema que conectan las vistas con los controladores.

---

## Estado Actual

* **Estado:** En desarrollo inicial.
* **Función:** Validar datos, procesar las acciones del usuario y comunicarse con la capa de datos (`src/data`).
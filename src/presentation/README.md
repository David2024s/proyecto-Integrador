#  Capa 1: Presentación (Frontend)

Esta capa gestiona la **interfaz de usuario** de la plataforma **Conecta y Aprende**. Es la encargada de mostrar la información a los estudiantes, tutores y administradores.

---

##  Ubicación en Laravel

Actualmente, los archivos de esta capa están organizados dentro del proyecto en:

* **`resources/views/`**: Plantillas Blade (HTML) para las pantallas de la plataforma (pantalla de inicio, formularios de registro, vistas de búsqueda, etc.).
* **`public/css/`**: Hojas de estilo CSS (como `home.css` o Bootstrap) para el diseño visual.
* **`public/js/`**: Scripts en JavaScript para dar interactividad a los componentes.

---

##  Estado Actual

* **Estado:** En desarrollo inicial.
* **Función:** Capturar las acciones del usuario (formularios, clics) y enviar la información a la capa de negocio (`src/business`).
#  Capa 3: Datos (Base de Datos)

Esta capa es la responsable de la **persistencia de la información**, gestionando la estructura de la base de datos relacional y el acceso a los datos de la plataforma **Conecta y Aprende**.

---

##  Ubicación en Laravel

Dentro del framework, esta capa está representada por:

* **`app/Models/`**: Modelos Eloquent de Laravel que representan las entidades del sistema (Usuarios, Perfiles de Tutores, Sesiones, Pagos, etc.).
* **`database/migrations/`**: Archivos de migración para crear y modificar las tablas de la base de datos relacional (MySQL / SQL Server).
* **`database/`**: Scripts SQL adicionales o archivos de respaldo de la base de datos (`Database.sql`).

---

##  Estado Actual

* **Estado:** En desarrollo inicial / Configuración de modelos y migraciones.
* **Función:** Consultar, guardar y actualizar la información de la plataforma de forma segura.
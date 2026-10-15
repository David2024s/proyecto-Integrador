#  Conecta y Aprende — Plataforma de Tutorías Universitarias

**Conecta y Aprende** es una plataforma web desarrollada en **Laravel (PHP)** diseñada para conectar a estudiantes universitarios con tutores y profesores capacitados, facilitando el proceso de agendamiento, búsqueda de materias y validación académica.

---

##  Descripción del Proyecto

El sistema aborda la necesidad de apoyo académico entre pares y docentes, permitiendo:
- **Estudiantes:** Buscar y filtrar tutores por materia, facultad, horario y tarifa, además de agendar sesiones de tutoría.
- **Tutores / Profesores:** Registrar sus competencias académicas, definir disponibilidad horaria y gestionar sus solicitudes.
- **Administradores:** Validar las credenciales universitarias de los tutores antes de habilitar sus perfiles públicamente.

---

##  Arquitectura del Proyecto (3 Capas)

El proyecto sigue una arquitectura organizada en 3 capas lógicas para garantizar la escalabilidad, separación de responsabilidades y mantenibilidad del código:

```text
conectaYaprende/
├── docs/                 <-- Documentación técnica (ERS, DER, Casos de Uso)
├── src/
│   ├── presentation/     <-- Capa 1: Interfaz de Usuario (Vistas Blade, CSS, JS público)
│   ├── business/         <-- Capa 2: Lógica de Negocio (Controladores en app/Http/Controllers)
│   └── data/             <-- Capa 3: Gestión de Datos (Modelos en app/Models y Migraciones)
├── tests/                <-- Pruebas unitarias e integrales
├── .gitignore            <-- Archivos ignorados por Git
└── README.md             <-- Documentación principal del proyecto

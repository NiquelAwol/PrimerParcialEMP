# Sistema de Gestión Empresarial (ERP)

Este repositorio contiene la entrega final del proyecto para la asignatura "Software de Gestión Empresarial". El sistema consiste en una aplicación web basada en Laravel que permite administrar módulos clave de un ERP (Productos, Clientes, Ventas y Compras).

## 1. Captura de la Landing Page

![Landing Page](docs/visual/Captura1.png)

*(Las capturas adicionales del sistema, incluyendo Login, Dashboard y Vistas CRUD, se encuentran disponibles en el directorio `docs/visual/`).*

## 2. Cambios Visuales Realizados

Se modificó la interfaz base de Laravel Breeze para lograr un aspecto más corporativo, mejorando la usabilidad y la estética general del sistema:
- **Navegación:** Se cambió el menú superior estándar por una barra de navegación con un fondo azul corporativo (`bg-blue-800`), separando claramente las opciones de los distintos módulos (Dashboard, Productos, Clientes, Ventas, Compras).
- **Tarjetas (Cards):** Los formularios y tablas de datos ahora están contenidos en tarjetas blancas con bordes redondeados (`rounded-xl`) y sombras sutiles (`shadow-sm`) para destacarlos del fondo gris claro.
- **Botones de Acción:** Los botones de "Editar", "Eliminar" y "Ver Detalle" en las tablas se rediseñaron. Pasaron de ser enlaces de texto plano a botones independientes con márgenes internos, separación y colores semánticos (azul para información, rojo para peligro).
- **Interactividad:** Se añadieron transiciones suaves y efectos al pasar el cursor (hover) en las filas de las tablas y los botones para mejorar la retroalimentación visual al usuario.
- **Tipografía:** Se implementaron diferentes pesos de fuente y contrastes (text-slate-800 para títulos, text-gray-500 para subtítulos) para establecer una jerarquía de lectura clara.

## 3. Paleta de Colores

El esquema de colores se orientó hacia la sobriedad y profesionalismo, típicos en herramientas de gestión empresarial:
- **Fondo General:** Gris claro (`#F3F4F6` / `bg-gray-50`)
- **Navegación y Acentos:** Azul oscuro corporativo (`#1E40AF` / `bg-blue-800`)
- **Acciones Principales:** Azul brillante (`#2563EB` / `bg-blue-600`)
- **Textos Principales:** Gris muy oscuro / Pizarra (`#1E293B` / `text-slate-800` y `#111827` / `text-gray-900`)
- **Estados Semánticos:** 
  - Éxito/Activo: Verde claro (`#DCFCE7` / `bg-green-100`)
  - Peligro/Eliminar: Rojo claro (`#FEE2E2` / `bg-red-100`)

## 4. Fuentes y Recursos Utilizados

- **Backend:** Laravel 11.
- **Autenticación:** Laravel Breeze.
- **Base de Datos:** SQLite.
- **Framework CSS:** Tailwind CSS v3.
- **Compilador de Assets:** Vite.
- **Fuente Tipográfica:** Figtree (por defecto en Laravel), por su excelente legibilidad en interfaces web.
- **Datos de Prueba:** Laravel Factories y Faker PHP (configurado en español) para poblar las tablas base.
- **Recursos Gráficos:** Logo personalizado (`public/img/logo.png`) y componentes blade nativos.

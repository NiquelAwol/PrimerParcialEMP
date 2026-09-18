# CREDENCIALES Y GUÍA DE ACCESO - PROYECTO ERP VETERINARIA HUELLITAS
**Asignatura:** Software de Gestión Empresarial  
**Evaluación:** Primer Parcial - Corte 1 (COTECNOVA - 2026)  
**Estudiantes:** Andrés Felipe & Miguel Ángel  

---

## 1. Acceso a WSL (Windows Subsystem for Linux)

Se ha creado un usuario exclusivo y dedicado para ustedes dentro de la distribución Ubuntu de WSL con permisos administrativos (`sudo`).

- **Distribución WSL:** `Ubuntu`
- **Nombre de Usuario:** `AndresyMiguel`
- **Contraseña:** `AndresyMiguel2026`
- **Permisos Sudo:** Totalmente habilitado (`sudo su` o comandos administrativos sin restricción).
- **Directorio Personal:** `/home/AndresyMiguel`
- **Acceso directo al proyecto:** En su carpeta personal tienen un enlace simbólico directo: `~/EMP_Parcial_1`

### ¿Cómo ingresar desde Windows (PowerShell o CMD)?
Abre una ventana de PowerShell o Terminal en Windows y ejecuta:
```bash
wsl -d Ubuntu -u AndresyMiguel
```

Una vez dentro, puedes ir directamente a la carpeta del parcial con:
```bash
cd ~/EMP_Parcial_1
```
*(Esta carpeta está sincronizada en tiempo real con `C:\Johan Linares\AndresFelipe-MiguelAngel\EMP Parcial 1`).*

---

## 2. Base de Datos MySQL / MariaDB

El servicio de base de datos corre de forma persistente y está disponible tanto desde WSL como desde Windows.

- **Motor:** MariaDB 10.8 (compatible al 100% con MySQL)
- **Host:** `127.0.0.1` (o `localhost`)
- **Puerto:** `3306`
- **Base de Datos del Proyecto:** `laravel`
- **Usuario Administrador:** `root`
- **Contraseña Administrador:** `root_password`
- **Usuario Desarrollador:** `dev_user`
- **Contraseña Desarrollador:** `dev_password`

### Conexión por consola desde WSL:
```bash
mysql -h 127.0.0.1 -u root -proot_password laravel
```
O de forma interactiva:
```bash
mysql -h 127.0.0.1 -u root -p
```
*(Ingresas la contraseña `root_password` y luego `USE laravel;`).*

### Consultas rápidas para validar el parcial:
```sql
USE laravel;
SHOW TABLES;
DESCRIBE clients;
DESCRIBE pets;
DESCRIBE products;
SELECT id, name, phone, email FROM clients;
SELECT id, client_id, name, species, breed FROM pets;
```

---

## 3. Acceso Gráfico con phpMyAdmin

Si prefieren visualizar y administrar la base de datos desde el navegador web:
- **URL en el navegador:** [http://localhost:8081](http://localhost:8081)
- **Servidor:** `db` (o déjalo en blanco si entra por defecto)
- **Usuario:** `root`
- **Contraseña:** `root_password`

---

## 4. Servidor de la Aplicación Laravel

Para levantar el servidor web de Laravel y probar la aplicación:
```bash
wsl -d Ubuntu -u AndresyMiguel
cd ~/EMP_Parcial_1
php artisan serve
```
- **URL de la aplicación:** [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 5. Comandos de Artisan y Mantenimiento

Para resetear la base de datos y volver a correr todas las migraciones y seeders:
```bash
php artisan migrate:fresh --seed
```

Para poblar únicamente los clientes y mascotas:
```bash
php artisan db:seed --class=ClientSeeder
```

Para abrir la consola interactiva de Laravel (Tinker):
```bash
php artisan tinker
```
Dentro de Tinker pueden consultar las relaciones Eloquent:
```php
$cliente = App\Models\Client::with('pets')->first();
$cliente->name;
$cliente->pets;
```

---

## 6. Control de Versiones (GitHub)

- **Repositorio Remoto:** `https://github.com/NiquelAwol/PrimerParcialEMP.git`
- **Rama Oficial del Parcial:** `parcial`
- **Rama Principal:** `main`

### Comandos de subida:
```bash
git add .
git commit -m "Parcial primer corte: Análisis y diseño ERP Veterinaria Huellitas"
git push origin parcial
```

---

## 7. Estructura de Entregables del Parcial

1. `docs/parcial/analisis_veterinaria.md`:
   - Punto 1: Análisis del Negocio (30%)
   - Punto 2: Diseño del Modelo de Datos & Diccionario (30%)
   - Punto 3: Propuesta de Solución ERP & KPIs (20%)
   - Punto 4: Implementación Básica (20%)
2. `docs/parcial/capturas/`:
   - `01_tablas_mysql.png`
   - `02_codigo_migraciones.png`
   - `03_codigo_modelos.png`
   - `04_seeder_ejecutado.png`
3. Código fuente de migraciones (`database/migrations/`) y modelos (`app/Models/`).
# ![ServerViewer Logo](public/img/logo.png) ServerViewer

📡 **Monitoriza y administra tus servidores de forma sencilla y eficiente.**  

---

## 🚀 Características  
✅ Monitoreo en tiempo real del estado del servidor.  
✅ Visualización de uso de CPU, memoria y disco.  
✅ Alertas y notificaciones personalizadas.  
✅ Interfaz intuitiva y responsive.  



## 🛠 Instalación  
1. Clona el repositorio:  
   ```bash
   git clone https://github.com/temolzin/serverViewer.git
2. Ejecuta "composer update" o "composer install"
3. Ejecuta el siguiente comando --> "php artisan key:generate"
4. Crea tu archivo .env
5. Ejecuta el siguiente comando 
-->"php artisan adminlte:install"
   Si Aparecera esto pones que [no]
   Config file was already published. Want to replace it? (yes/no) [no]: 
6. Configura Base de datos: 
   Creas una nueva base de datos con el siguiente nombre:
   -->serverviewer
   -->Ejecutas el siguiente comando
    "php artisan migrate:refresh --seed"
7. Configuración para la visualización de las imagenes:
   -->activar esta "extension=gd" en el php.ini 
   --> ejecutar el siguiente comando "php artisan storage:link"

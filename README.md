# MageMod
Módulos genéricos para magento

### API
Creación básica de API, con param = parametro como ejemplo.
- URL/rest/V1/devsarrollo-api/conexion?param=parametro

### AddressAttribute
Creacion de atributos de dirección.

### AdminhtmlConfig
Creación en el backoffice de un apartado para configurar el módulo.
- Stores -> Settings -> Configuration -> Pestaña -> Sección

### Command
Creación básica de un comando CLI incluyendo un parámetro.
- bin/magento devsarrollo_command:proceso
- bin/magento devsarrollo_command:proceso --parametro hola

### ControllerAjax
Creación de un controlador básico llamado por vía Ajax.
- URL/paginaajax/seccion/accion

### ControllerPage
Creación de un controlador básico que al llamar a una url se muestra una página determinada.
- URL/pagina/seccion/accion

### CustomerAttribute
Creación de atributos personalizados a la ficha de cliente.

### ProductAttribute
Creacion de atributos de producto.

### WidgetBasic
Creación de un widget básico para introducirlo donde haga falta.

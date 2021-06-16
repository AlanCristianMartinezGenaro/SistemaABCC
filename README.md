# SistemaABCC

Sistema de altas bajas cambios y consultas para Pequeñas y Medianas empresas(pymes), en el cual se lleva el control total del inventario.
 
 #Descripcion
 
 Para poder usar el sistemas y por tanto poder ejecutar los archivos se requiere de xampp para crear un servidor local y una base de datos en MySQL donde se guardara todo nuestro inventaripo, gracias a estas herramientas podremos visualizar el proyecto.
 
 #Instalacion
 
 Primero debemos crear una carpeta en la ruta de nuestra computadora C:xampp/htdocs/*nombre de la carpeta*, En esta se colocaran todas las carpetas del sistema.
 
Despúes de esto vamos a la ruta C:\Windows\System32\drivers\etc y agragamos la siguiente linea en el archivo llamado "hosts":

127.0.0.1 *nombre de la carpeta que aloja nuestro sistema*

(Cabe aclarar que para poder modificar este archivo se necesitan permisos de administrador lo cual puede complicarlo por lo cual recomiendo editarlo con visual code ya que facilita esta edicion)

Posteriormente buscaremos el archivo httpd-vhosts.conf que encontraremos en la ruta C:\xampp\apache\conf\extra. Abrimos el archivo y agregamos las siguientes lineas para añadir un virtual host para trabajar con nuestro sistema:

<VirtualHost *:80>
        ServerAdmin *nombre la carpeta*  
        DocumentRoot "C:/xampp/htdocs/ *nombre la carpeta* /public"  
        ServerName *nombre la carpeta*  
        ErrorLog "logs/*nombre la carpeta*-error.log"  
        CustomLog "logs/*nombre la carpeta*-access.log" common  
        <Directory "C:/xampp/htdocs/*nombre la carpeta*/public">  
            Options All  
            AllowOverride All  
            Require all granted  
        </Directory>  
</VirtualHost>

#Creación de la base de datos en MySQL*

Al hacer estos cambios podemos iniciar nuestro servidor Xampp dando "Start" a Apache y a MySQL.

Despues entramos a nuestro navegardor y colocamos en la barra de busqueda "localhost/phpmyadmin"

Creamos una base de datos nueva para nuestro sistema y despues crearemos una tabla con el nombre con un nombre referido a lo que almacenaremos ahi, definimos los atributos de cada campo o que asignemos a nuestra tabla.

#Archibvos "Includes"
Crearemos dos archivos que se llamaran "functions" y "constants" en una nueva carpeta la cual llamermos includes

Dentro del archivo functions vamos a cambiar el link de la función de redirect, solo eliminamos el example.com y colocamos el nombre de la carpeta propia.

Y en el archivo constants debemos cambiar los datos que vienen por los propios, tales como el nombre de la base de datos etcétera.

En el archivo functions vamos a cambiar el link de la función de redirect, solo eliminamos el example.com y colocamos el nombre de la carpeta propia.

#Archivos "Public"
En estos archivos se almacena en mayor parte codigo de los procesos o funciones que utiliza el sistema como lo es la mayor parte de procesos como las altas, bajas y modificaciones para los productos.

#Archivos "Templates"
En estos como el nombre lo indica son plantillas para mostrar la parte del sistem mas grafica o visual en esta carpeta por ejemplo el archivo index y lavadora muestran los productos en las cards y en estas los detalles del producto. Se necesita cambiar parte del codigo de las cards para que se pueda hacer esto ya que necesitamos extraer todos los archivos de la base de datos.

#Software Necesario

1. XAMPP(Apache): Que se ocupara como servidor

2. MySQL: Donde crearemos nuestra base de datos y alojaremos nuestros productos

#Datos de la institución 
Colegio de Estudios Científicos y Tecnológicos del Estado de México

   Plantel Xonacatlán Carretera Toluca-Naucalpan
   
 #Autor
 Alan Cristian Martinez Genaro
 

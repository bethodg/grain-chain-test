## Sitio en Hetoku
    https://grainchaintest.herokuapp.com/

## Para poder correr el proyecto en windows ( tener instalado )
1. PHP 8.1 
2. Composer

## Instalando PHP ( windows )
1. Ir a la pagina oficial de php y descargar la version estable, recomendable que sea Tread Safe ( .zip )  https://windows.php.net/download#php-8.1
2. Recomendable descomprimir el forder en la unidad C:
3. Agregar variable de entorno de PHP al PATH del sistema, ejemplo : C:\php-8.1.10, nota: es la ruta para poder acceder a PHP.
4. Abrir Terminal de windows, puedes comprobar con el comando `php -v` si esta actualmente la versión que se instaló, de lo contrario puedes remover del PATH las otras variables de entorno enfocadas a PHP temporalmente.
5. Ir a la carpeta de PHP y clonar el archivo `php.ini-production` quitando el "-production"
6. Abrir el archivo clonado que deberia de estar como `php.ini` y descomentar ( remover ;) de estas siguientes extensiones del archivo
 ``` 
 Ejemplo: 
   Antes
    ;extension_dir = "ext" 
   Ahora ( descomentado )
    extension_dir = "ext" 
 
 extension_dir = "ext" 
 extension=curl
 extension=fileinfo
 extension=gd
 extension=mysqli
 extension=openssl
 extension=pdo_mysql
  ```
## Instalando Composer ( windows )
1. Ir al sitio oficial y descargar el archivo .exe  https://getcomposer.org/download/
2. Abrir el ejecutar el archivo y seguir los pasos del instalador, nota: en los pasos de instalación, corroborar que se instale con la versión de PHP que se agrego, en nuestro caso la 8.1


## GrainChainTest
1. Abrir la terminar y entrar a la ruta del proyecto, correr el comando `php artisan serve`
2. Se requiere de un archivo.txt y que tenga 1 o 0 en forma de matriz, puede estar dividido por espacios o comas.
![image](https://user-images.githubusercontent.com/68037595/190217082-123eadba-6308-4505-9931-568433ae070f.png)

3. Para cargar el archivo, solo da click en el Drag and drop y subelo.
![image](https://user-images.githubusercontent.com/68037595/190216482-ed0299dc-a3e2-400e-a043-b4afecc67212.png)

4. Una vez cargado, le das click en enviar y te mostrara la sig vista.
![image](https://user-images.githubusercontent.com/68037595/190217610-ea5f8956-7ec6-4921-8bf9-6a0ea5c89e96.png)

5. Para mostrar los focos encendidos, dar click en Calcular Focos.
![image](https://user-images.githubusercontent.com/68037595/190218082-e5a5ffc3-e9e2-4830-a326-5feda30e967a.png)

6. Para cambiar de matriz, vuelve a seguir el paso 1, nota: solo acepta archivos .txt


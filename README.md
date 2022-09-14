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
5. Ir a la carpeta de PHP y clonar el archivo `php.ini-production` quitando el "-production".
6. Abrir el archivo clonado que deberia de estar como `php.ini` y descomentar ( remover ;) de estas siguientes extensiones del archivo, al finalizar, guardar los cambios.
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
1. Abrir la terminar, debes de crear una carpeta donde alojaras el proyecto y clonarlo desde git 
![image](https://user-images.githubusercontent.com/68037595/190222401-4669cf89-e052-4c47-8a0b-48063709a01c.png)
2. Instalar las siguientes dependencias en la terminal
 - `composer install`
 - `npm install`

3. Abrir la carpeta del proyecto en windows y clonar el archivo `.env.example` y renombrarlo a `.env`
![image](https://user-images.githubusercontent.com/68037595/190223936-807a1e3c-4417-40a1-8cd1-85f16fcd3a61.png)

4. En la terminal con la misma ruta del proyecto correr este comando `php artisan key:generate`
5. Como ultimo paso para poder correr el proyecto, poner este comando `php artisan serve`

6. Abrir un navegador web y poner la ruta que especifica la terminar, nota: puede ser tambien http://localhost:8000/
![image](https://user-images.githubusercontent.com/68037595/190225352-d13c36f0-cce0-4cb3-8432-333e1f1b615a.png)

8. Se requiere de un archivo.txt y que tenga 1 o 0 en forma de matriz, puede estar dividido por espacios o comas.
![image](https://user-images.githubusercontent.com/68037595/190217082-123eadba-6308-4505-9931-568433ae070f.png)

8. Para cargar el archivo, solo da click en el Drag and drop y subelo.
![image](https://user-images.githubusercontent.com/68037595/190216482-ed0299dc-a3e2-400e-a043-b4afecc67212.png)

9. Una vez cargado, le das click en enviar y te mostrara la sig vista.
![image](https://user-images.githubusercontent.com/68037595/190217610-ea5f8956-7ec6-4921-8bf9-6a0ea5c89e96.png)

10. Para mostrar los focos encendidos, dar click en Calcular Focos.
![image](https://user-images.githubusercontent.com/68037595/190218082-e5a5ffc3-e9e2-4830-a326-5feda30e967a.png)

11. Para cambiar de matriz, vuelve a seguir el paso 1, nota: solo acepta archivos .txt


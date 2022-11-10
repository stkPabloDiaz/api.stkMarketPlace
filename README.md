# api.stkMarketPlace

## API de acceso a datos para la aplicacion de stkMarketPlace y tambien para uso general en otros Proyectos

MODO DE USARLA:

* Consideraciones sobre la Base de Datos:
  - Debe tener un cotejamiento **utf8_general_ci**. Para no tener problemas con los caracteres latinos.
  - Los nombres de las tablas deben estar en ingles y en plural, se puede utilizar el guion bajo (_) para los nombres y siempre en minusculas.
  - Las columnas deben tener nombres en **minuscula** y en **singular**, utilizando el guion bajo (_), y deben llevar como **prefijo el nombre de la tabla en singular**. Siempre debe contar con al menos 3 campos (el primero debe ser ***id_prefijo (INT) Autoincrement*** y los dos ultimos deben ser ***date_created_prefijo (DATETIME) NULL y date_updated_prefijo (TIMESTAMP) TIMESTAMP***.
  
  (Poner siempre valores iniciales (NULL, 0, CURRENT TIMESTAMP).
  
  - La Tabla ***users*** debe tener al menos los siguientes campos:
    - id_user (INT) Autoincrement
    - email_user (TEXT) NULL
    - password_user (TEXT) NULL
    - date_created_user (DATETIME) NULL
    - date_updated_user (TIMESTAMP) TIMESTAMP
    
    
    



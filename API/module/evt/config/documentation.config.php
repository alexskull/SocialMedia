<?php
return array(
    'evt\\V1\\Rest\\Usuarios\\Controller' => array(
        'description' => 'permite registrar la informacion general de los usuarios en el sistema',
        'collection' => array(
            'description' => 'Grupo de usuarios en el sistema',
            'GET' => array(
                'description' => 'Permite obtener un grupo de usuarios del sistema.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/users"
       },
       "first": {
           "href": "/users?page={page}"
       },
       "prev": {
           "href": "/users?page={page}"
       },
       "next": {
           "href": "/users?page={page}"
       },
       "last": {
           "href": "/users?page={page}"
       }
   }
   "_embedded": {
       "users": [
           {
               "_links": {
                   "self": {
                       "href": "/users[/:usuarios_id]"
                   }
               }
              "username": "(string) - nombre de usuario (debe ser unico)",
              "nombres": "nombre completo del usuario",
              "email": "Direccion de correo electronico del usuario",
              "phone_home": "(string) - Telefono de la casa",
              "phone_mobile": "(string) - Numero de telefono movil.",
              "password": "clave de usuario, se utiliza para iniciar sesion en el sistema",
              "fecha_registro": "Fecha de registro del usuario en el sistema",
              "fecha_de_nacimiento": "Fecha de nacimiento del usuario (AAAA-MM-DD)",
              "rol": "Rol del usuario, inidicar el id del rol que representa sus permisos.",
              "avatar": "Url del foto de perfil del usuario",
              "fondo": "url del fondo de perfil del usuario",
              "blocked": "Indica si un usuario esta bloqueado (1) o no (0)",
              "gender": "genero del usuario, solo se acepta (masculino [M] | femenino [F])",
              "google_plus": "id de google plus del usuario",
              "facebook": "id de facebook del usuario",
              "ciudad_id": "identificador de la ciudad donde reside el usuario."
           }
       ]
   }
}',
            ),
            'POST' => array(
                'description' => 'Permite almacenar/actualizar un grupo de usuarios en el sistema',
                'request' => '{
   "username": "(string) - nombre de usuario (debe ser unico)",
   "nombres": "nombre completo del usuario",
   "email": "Direccion de correo electronico del usuario",
   "phone_home": "(string) - Telefono de la casa",
   "phone_mobile": "(string) - Numero de telefono movil.",
   "password": "clave de usuario, se utiliza para iniciar sesion en el sistema",
   "fecha_registro": "Fecha de registro del usuario en el sistema",
   "fecha_de_nacimiento": "Fecha de nacimiento del usuario (AAAA-MM-DD)",
   "rol": "Rol del usuario, inidicar el id del rol que representa sus permisos.",
   "avatar": "Url del foto de perfil del usuario",
   "fondo": "url del fondo de perfil del usuario",
   "blocked": "Indica si un usuario esta bloqueado (1) o no (0)",
   "gender": "genero del usuario, solo se acepta (masculino [M] | femenino [F])",
   "google_plus": "id de google plus del usuario",
   "facebook": "id de facebook del usuario",
   "ciudad_id": "identificador de la ciudad donde reside el usuario."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/users[/:usuarios_id]"
       }
   }
   "username": "(string) - nombre de usuario (debe ser unico)",
   "nombres": "nombre completo del usuario",
   "email": "Direccion de correo electronico del usuario",
   "phone_home": "(string) - Telefono de la casa",
   "phone_mobile": "(string) - Numero de telefono movil.",
   "password": "clave de usuario, se utiliza para iniciar sesion en el sistema",
   "fecha_registro": "Fecha de registro del usuario en el sistema",
   "fecha_de_nacimiento": "Fecha de nacimiento del usuario (AAAA-MM-DD)",
   "rol": "Rol del usuario, inidicar el id del rol que representa sus permisos.",
   "avatar": "Url del foto de perfil del usuario",
   "fondo": "url del fondo de perfil del usuario",
   "blocked": "Indica si un usuario esta bloqueado (1) o no (0)",
   "gender": "genero del usuario, solo se acepta (masculino [M] | femenino [F])",
   "google_plus": "id de google plus del usuario",
   "facebook": "id de facebook del usuario",
   "ciudad_id": "identificador de la ciudad donde reside el usuario."
}',
            ),
        ),
        'entity' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/users[/:usuarios_id]"
       }
   }
   "username": "",
   "nombres": "",
   "email": "",
   "phone_home": "",
   "phone_mobile": "",
   "password": "",
   "fecha_registro": "",
   "fecha_de_nacimiento": "",
   "rol": "",
   "avatar": "",
   "fondo": "",
   "blocked": "",
   "gender": "",
   "google_plus": "",
   "facebook": "",
   "ciudad_id": ""
}',
            ),
        ),
    ),
);

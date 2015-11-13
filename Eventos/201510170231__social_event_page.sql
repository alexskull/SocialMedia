-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2015 a las 09:00:49
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `social_event_page`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_post`
--

CREATE TABLE IF NOT EXISTS `blog_post` (
  `post_id` int(11) NOT NULL COMMENT 'Identificador general del post',
  `posted_by` int(11) NOT NULL COMMENT 'Referencia al suuario que hizo el post',
  `posted_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de publicacion del post',
  `post_title` varchar(100) NOT NULL COMMENT 'Titulo del post',
  `post_text` text NOT NULL COMMENT 'Contenido del post',
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Todos los posts en el blog';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_post_comentarios`
--

CREATE TABLE IF NOT EXISTS `blog_post_comentarios` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador logico global del comentario',
  `post_id` int(11) NOT NULL COMMENT 'Referencia al post donde se emitio el comentario',
  `posted_by` int(11) NOT NULL COMMENT 'Referencia al usuario que hizo el post',
  `reply_to` int(11) DEFAULT NULL COMMENT 'Si es un reply a un comentario existente, contiene el ID del comentario, de lo contrario es NULL',
  `posted_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La fecha de emision del comentario',
  `comment` text NOT NULL COMMENT 'El comentario en si',
  `deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Indica si el comentario fue moderado (eliminado)',
  PRIMARY KEY (`comment_id`),
  KEY `posted_by` (`posted_by`),
  KEY `post_id` (`post_id`),
  KEY `reply_to` (`reply_to`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla que almacena los comentarios en un post del blog' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_post_comentarios_likes`
--

CREATE TABLE IF NOT EXISTS `blog_post_comentarios_likes` (
  `comment_id` int(11) NOT NULL COMMENT 'Identificador del comentario al que se le dio like',
  `liked_by` int(11) NOT NULL COMMENT 'Identificador del usuario que dio el like',
  `liked_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora en que se dio el like',
  PRIMARY KEY (`comment_id`,`liked_by`),
  KEY `liked_by` (`liked_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Likes de los comentarios en los post del blog';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_post_comentarios_moderar`
--

CREATE TABLE IF NOT EXISTS `blog_post_comentarios_moderar` (
  `comment_id` int(11) NOT NULL COMMENT 'Referencia al comentario que se solicita moderar',
  `reported_by` int(11) NOT NULL COMMENT 'Referencia al usuario que solicita moderar',
  `reported_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de la solicitud de moderacion',
  `comments` text NOT NULL COMMENT 'Justificacion y comentarios de la solicitud',
  `dismissed` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 si fue descartada, 1 si fue tomada en cuenta',
  PRIMARY KEY (`comment_id`,`reported_by`),
  KEY `reported_by` (`reported_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Solicitudes de moderacion de comentarios en posts del blog';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_post_galeria`
--

CREATE TABLE IF NOT EXISTS `blog_post_galeria` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador logico de la foto',
  `post_id` int(11) NOT NULL COMMENT 'Referencia al post donde debe colocarse la foto',
  `posicion` int(11) NOT NULL COMMENT 'Orden de la foto en el album',
  `photo` text NOT NULL COMMENT 'Foto almacenada en string encriptado base64',
  `caption` varchar(100) NOT NULL COMMENT 'Caption de la foto',
  `deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Indica si la foto ha sido moderada (borada logicamente)',
  `posteado_en` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de la publicacion de la foto',
  PRIMARY KEY (`photo_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla para almacenar las fotos incrustadas en posts del blog' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_post_galeria_moderar`
--

CREATE TABLE IF NOT EXISTS `blog_post_galeria_moderar` (
  `photo_id` int(11) NOT NULL COMMENT 'Referencia al a foto que se solicita moderar',
  `reported_by` int(11) NOT NULL COMMENT 'Referencia al usuario que solicita la moderacion',
  `reported_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de la solicitud de moderacion',
  `comments` text NOT NULL COMMENT 'comentarios y justificacion de la moderacion',
  `dismissed` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 si la solicitud fue descartada, 1 si fue aceptada',
  PRIMARY KEY (`photo_id`,`reported_by`),
  KEY `reported_by` (`reported_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Solicitudes de moderacion de fotos en los posts de los blogs';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_post_likes`
--

CREATE TABLE IF NOT EXISTS `blog_post_likes` (
  `post_id` int(11) NOT NULL COMMENT 'Referencia al post que se le dio like',
  `liked_by` int(11) NOT NULL COMMENT 'Referencia al usuario que dio like',
  `liked_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora en que se dio el like',
  PRIMARY KEY (`post_id`,`liked_by`),
  KEY `liked_by` (`liked_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Almacena los likes de todos los posts en el blog';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_post_moderar`
--

CREATE TABLE IF NOT EXISTS `blog_post_moderar` (
  `post_id` int(11) NOT NULL COMMENT 'Referencia al post que se solicito moderar',
  `reported_by` int(11) NOT NULL COMMENT 'Referencia al usuario que solicito moderar',
  `reported_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora en que se solicito moderar',
  `comments` text NOT NULL COMMENT 'Comentarios de por que se solicito moderar',
  `dismissed` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 si la solicitud fue descartada, 1 si la solicitud fue tomada en cuenta',
  PRIMARY KEY (`post_id`,`reported_by`),
  KEY `reported_by` (`reported_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Solicitudes de moderacion de posts en el blog';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `chat_id` varchar(32) NOT NULL COMMENT 'Identificador general de ese chat. Concebido para ser el MD5 de la concatenacion de user_id_1 y user_id_2',
  `asunto` varchar(50) DEFAULT NULL COMMENT 'Asunto del mensaje (opcional)',
  `user_id_1` int(11) NOT NULL COMMENT 'Identificador de usuario del chat (usualmente el que lo inicia)',
  `user_id_2` int(11) NOT NULL COMMENT 'Identificador del usuario 2 del chat (la persona del otro lado)',
  PRIMARY KEY (`chat_id`),
  KEY `user_id_1` (`user_id_1`),
  KEY `user_id_2` (`user_id_2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Todos los chats existentes en la pagina';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chats_mensajes`
--

CREATE TABLE IF NOT EXISTS `chats_mensajes` (
  `message_id` int(11) NOT NULL COMMENT 'Identificador general del mensaje',
  `chat_id` varchar(32) NOT NULL COMMENT 'Referencia al identificador del chat',
  `user_from` int(11) NOT NULL COMMENT 'Usuario que envia el mensaje',
  `user_to` int(11) NOT NULL COMMENT 'Usuario que recibe el mensaje',
  `message` text NOT NULL COMMENT 'contenido del mensaje',
  `sent_on` datetime NOT NULL COMMENT 'Fecha y hora de envio',
  `delivered_on` datetime NOT NULL COMMENT 'Fecha y hora de recepcion',
  `read_on` datetime NOT NULL COMMENT 'fecha y hora de lectura',
  PRIMARY KEY (`message_id`),
  KEY `user_from` (`user_from`),
  KEY `user_to` (`user_to`),
  KEY `chat_id` (`chat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Mensajes de todos los chats';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador general del evento',
  `event_name` varchar(160) NOT NULL COMMENT 'Nombre del evento',
  `event_description` text NOT NULL COMMENT 'Desripcion del evento',
  `categoria` int(11) NOT NULL COMMENT 'Referencia a la categoria del evento',
  `sub_categoria` int(11) NOT NULL COMMENT 'Referencia a la subcategoria del evento',
  `fecha_evento` datetime NOT NULL COMMENT 'Fecha y hora de inicio del evento',
  `fecha_fin_registro` datetime NOT NULL COMMENT 'Fecha topa para registrarse en el evento',
  `aforo` int(11) NOT NULL COMMENT 'Maximo de personas permitidas en el evento',
  `plazas` int(11) DEFAULT '0' COMMENT 'Personas actualmente inscritas (puede ser calculado)',
  `precio` decimal(10,2) NOT NULL COMMENT 'Precio del eventi (maximo 99.999.999,99)',
  `usuario_organizador` int(11) NOT NULL COMMENT 'Referencia al usuario que organiza el evento',
  `edad_recomendada` int(11) NOT NULL COMMENT 'minimo de edad recomendada para el evento',
  `permite_comentarios` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0 si no permite comentarios, 1 si los permite',
  `terminos_condiciones` text NOT NULL COMMENT 'Terminos y condiciones del evento',
  `creado_en` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de creacion del evento',
  `pagina_web` varchar(160) NOT NULL COMMENT 'Pagina web del evento (en caso de ubicacion online utilizar para ese proposito)',
  PRIMARY KEY (`event_id`),
  KEY `categoria` (`categoria`,`sub_categoria`),
  KEY `usuario_organizador` (`usuario_organizador`),
  KEY `sub_categoria` (`sub_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Todos los eventos' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_categorias`
--

CREATE TABLE IF NOT EXISTS `eventos_categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador general de la categoria',
  `nombre_categoria` varchar(60) NOT NULL COMMENT 'Nombre de la categoria',
  `descripcion_categoria` text NOT NULL COMMENT 'Descripcion de la categoria',
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Categorias de eventos' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_comentarios`
--

CREATE TABLE IF NOT EXISTS `eventos_comentarios` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador logico global del comentario',
  `event_id` int(11) NOT NULL COMMENT 'Referencia al evento donde se emitio el comentario',
  `posted_by` int(11) NOT NULL COMMENT 'Referencia al usuario que hizo el post',
  `reply_to` int(11) DEFAULT NULL COMMENT 'Si es un reply a un comentario existente, contiene el ID del comentario, de lo contrario es NULL',
  `posted_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La fecha de emision del comentario',
  `comment` text NOT NULL COMMENT 'El comentario en si',
  `deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Indica si el comentario fue moderado (eliminado)',
  PRIMARY KEY (`comment_id`),
  KEY `posted_by` (`posted_by`),
  KEY `post_id` (`event_id`),
  KEY `reply_to` (`reply_to`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla que almacena los comentarios en un evento' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_comentarios_likes`
--

CREATE TABLE IF NOT EXISTS `eventos_comentarios_likes` (
  `comment_id` int(11) NOT NULL COMMENT 'Identificador del comentario al que se le dio like',
  `liked_by` int(11) NOT NULL COMMENT 'Identificador del usuario que dio el like',
  `liked_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora en que se dio el like',
  PRIMARY KEY (`comment_id`,`liked_by`),
  KEY `liked_by` (`liked_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Likes de los comentarios en los eventos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_galeria`
--

CREATE TABLE IF NOT EXISTS `eventos_galeria` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador logico de la foto',
  `event_id` int(11) NOT NULL COMMENT 'Referencia al evento donde debe colocarse la foto',
  `posicion` int(11) NOT NULL COMMENT 'Orden de la foto en el album',
  `photo` text NOT NULL COMMENT 'Foto almacenada en string encriptado base64',
  `caption` varchar(100) NOT NULL COMMENT 'Caption de la foto',
  `deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Indica si la foto ha sido moderada (borada logicamente)',
  `posteado_en` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de la publicacion de la foto',
  PRIMARY KEY (`photo_id`),
  KEY `post_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla para almacenar las fotos de un evento' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_geo_ubicaciones`
--

CREATE TABLE IF NOT EXISTS `eventos_geo_ubicaciones` (
  `event_id` int(11) NOT NULL COMMENT 'Referencia al evento',
  `orden` int(11) NOT NULL COMMENT 'Orden para mostrar las direcciones en el evento',
  `calle` text NOT NULL COMMENT 'calle y numero de local donde se hara el evento',
  `ciudad` varchar(60) NOT NULL COMMENT 'ciudad donde se realizara el evento',
  `estado` varchar(60) NOT NULL COMMENT 'estado donde se realizara el evento',
  `pais` varchar(60) NOT NULL COMMENT 'pais donde se realizara el evento',
  `latitud` double NOT NULL COMMENT 'latitud del evento (mapa)',
  `longitud` double NOT NULL COMMENT 'longitud del evento (mapa)',
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Direcciones donde se realizaran los eventos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_likes`
--

CREATE TABLE IF NOT EXISTS `eventos_likes` (
  `event_id` int(11) NOT NULL COMMENT 'Referencia al evento que se le dio like',
  `liked_by` int(11) NOT NULL COMMENT 'Referencia al usuario que dio like',
  `liked_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora en que se dio el like',
  PRIMARY KEY (`event_id`,`liked_by`),
  KEY `liked_by` (`liked_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Almacena los likes de los eventos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_registro_usuarios`
--

CREATE TABLE IF NOT EXISTS `eventos_registro_usuarios` (
  `event_id` int(11) NOT NULL COMMENT 'Referencia al evento donde se registro',
  `user_id` int(11) NOT NULL COMMENT 'Referencia al usuario que se registro',
  `registrado_en` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de registro al evento',
  `acepto_terminos` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 si acepto los terminos, 0 si no lo hizo',
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Usuarios registrados en los eventos (un count(*) da las plazas del evento)';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_sub_categorias`
--

CREATE TABLE IF NOT EXISTS `eventos_sub_categorias` (
  `id_sub_categoria` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador general de la subcategoria',
  `nombre_sub_categoria` varchar(60) NOT NULL COMMENT 'Nombre de la subcategoria',
  `descripcion_sub_categoria` text NOT NULL COMMENT 'Descripcion de la subcategoria',
  PRIMARY KEY (`id_sub_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Sub-Categorias de eventos' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador logico del usuario',
  `username` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_home` varchar(17) DEFAULT NULL COMMENT '+(countrycode[3])-(areaCode[3])-(number[8]) TOTAL=17 chars',
  `phone_mobile` varchar(17) DEFAULT NULL COMMENT 'Teléfono celular, mismo formato que el de casa. Es unico porque no se supone que dos personas usen el mismo numero',
  `password` varchar(32) NOT NULL COMMENT 'Concebido para ser el MD5 del password introducido por el usuario por razones de seguridad',
  `fecha_registro` datetime NOT NULL COMMENT 'Fecha y hora en que se registro el usuario',
  `fecha_de_nacimiento` date DEFAULT NULL COMMENT 'Fecha de nacimiento del contacto',
  `rol` int(11) NOT NULL COMMENT 'Rol en la página (administrador, etc), referencia a la tabla usuarios_roles',
  `avatar` text COMMENT 'Imagen de avatar del contacto, para guardarse en string encriptado base64',
  `fondo` text COMMENT 'Imagen de fondo de perfil de usuario, para almacenarse en string encriptado base64',
  `blocked` tinyint(4) DEFAULT NULL COMMENT '1 o 0 indicando si el usuario esta bloqueado o no (restringido de acceso a la pagina) respectivamente',
  `gender` char(1) DEFAULT NULL COMMENT 'Genero (M masculino, F, Femenino). con otras letras pueden identificar otros generos si desean ese nivel de inclusion',
  `google_plus` varchar(45) DEFAULT NULL COMMENT 'Usuario o email para la cuenta de google+ del usuario (dejar en null si el usuario inicia sesion por registro propio)',
  `facebook` varchar(45) DEFAULT NULL COMMENT 'Mismo caso del google_plus, pero para facebook',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `usuarioscol_UNIQUE` (`username`),
  UNIQUE KEY `phone_mobile_UNIQUE` (`phone_mobile`),
  KEY `rol` (`rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla para almacenar a todos los usuarios de la web' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_amistad`
--

CREATE TABLE IF NOT EXISTS `usuarios_amistad` (
  `user_id_1` int(11) NOT NULL COMMENT 'Usuario amigo de usuario 2',
  `user_id_2` int(11) NOT NULL COMMENT 'Usuario amigo de usuario 1',
  `friends_since` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha en que se hicieron amigos',
  PRIMARY KEY (`user_id_1`,`user_id_2`),
  KEY `user_id_2` (`user_id_2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Lista de amigos, es bidireccional (como la amistad)';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_amistad_solicitudes`
--

CREATE TABLE IF NOT EXISTS `usuarios_amistad_solicitudes` (
  `user_id_requesting` int(11) NOT NULL COMMENT 'referencia al usuario que solicita la amistad',
  `user_id_requested` int(11) NOT NULL COMMENT 'referencia al usuario al que le solicitan la amistad',
  `requested_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora en que se hizo la solcitud',
  PRIMARY KEY (`user_id_requesting`,`user_id_requested`),
  KEY `user_id_requested` (`user_id_requested`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Solicitudes de amistad pendientes';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_bloqueo`
--

CREATE TABLE IF NOT EXISTS `usuarios_bloqueo` (
  `user_id_blocker` int(11) NOT NULL COMMENT 'Usuario que bloquea',
  `user_id_blocked` int(11) NOT NULL COMMENT 'usuario que es bloqueado',
  `blocked_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora del bloqueo',
  PRIMARY KEY (`user_id_blocker`,`user_id_blocked`),
  KEY `user_id_blocked` (`user_id_blocked`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Usuarios bloqueados por otros usuarios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_moderar`
--

CREATE TABLE IF NOT EXISTS `usuarios_moderar` (
  `user_id` int(11) NOT NULL COMMENT 'referencia a usuario que esta siendo moderado',
  `reported_by` int(11) NOT NULL COMMENT 'referencia a usuario que solicita la moderacion ',
  `reported_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora en que se hizo el reporte',
  `comments` text NOT NULL COMMENT 'Comentarios y justificacion para el reporte',
  `dismissed` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0 si el reporte fue descartado, 1 si fue tomado en cuenta',
  PRIMARY KEY (`user_id`,`reported_by`),
  KEY `reported_by` (`reported_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Solicitud de moderacion de usuarios para otros usuarios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_muro`
--

CREATE TABLE IF NOT EXISTS `usuarios_muro` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador logico del post',
  `usuario_id` int(11) NOT NULL COMMENT 'Referencia a usuario que hizo el post',
  `posteado_en` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora en que se realizo el post',
  `contenido` text NOT NULL COMMENT 'contenido de la publicacion',
  `deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Indica si el post fue moderado (eliminado)',
  PRIMARY KEY (`post_id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Muros de los usuarios de la pagina' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_muro_comentarios`
--

CREATE TABLE IF NOT EXISTS `usuarios_muro_comentarios` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador logico global del comentario',
  `post_id` int(11) NOT NULL COMMENT 'Referencia al post donde se emitio el comentario',
  `posted_by` int(11) NOT NULL COMMENT 'Referencia al usuario que hizo el post',
  `reply_to` int(11) DEFAULT NULL COMMENT 'Si es un reply a un comentario existente, contiene el ID del comentario, de lo contrario es NULL',
  `posted_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La fecha de emision del comentario',
  `comment` text NOT NULL COMMENT 'El comentario en si',
  `deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Indica si el comentario fue moderado (eliminado)',
  PRIMARY KEY (`comment_id`),
  KEY `post_id` (`post_id`),
  KEY `posted_by` (`posted_by`),
  KEY `reply_to` (`reply_to`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla que almacena los comentarios en un post del muro de un usuario' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_muro_comentarios_likes`
--

CREATE TABLE IF NOT EXISTS `usuarios_muro_comentarios_likes` (
  `comment_id` int(11) NOT NULL COMMENT 'Identificador del comentario al que se le dio like',
  `liked_by` int(11) NOT NULL COMMENT 'Identificador del usuario que dio el like',
  `liked_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora en que se dio el like',
  PRIMARY KEY (`comment_id`,`liked_by`),
  KEY `liked_by` (`liked_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Likes dados a comentarios en posts del muro de usuarios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_muro_comentarios_moderar`
--

CREATE TABLE IF NOT EXISTS `usuarios_muro_comentarios_moderar` (
  `comment_id` int(11) NOT NULL COMMENT 'Referencia al comentario que se solicita moderar',
  `reported_by` int(11) NOT NULL COMMENT 'Referencia al usuario que solicita moderar',
  `reported_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de la solicitud de moderacion',
  `comments` text NOT NULL COMMENT 'Justificacion y comentarios de la solicitud',
  `dismissed` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 si fue descartada, 1 si fue tomada en cuenta',
  PRIMARY KEY (`comment_id`,`reported_by`),
  KEY `reported_by` (`reported_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Solicitudes de moderacion a comentarios del muro de usuarios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_muro_galeria`
--

CREATE TABLE IF NOT EXISTS `usuarios_muro_galeria` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador logico de la foto',
  `post_id` int(11) NOT NULL COMMENT 'Referencia al post donde debe colocarse la foto',
  `posicion` int(11) NOT NULL COMMENT 'Orden de la foto en el album',
  `photo` text NOT NULL COMMENT 'Foto almacenada en string encriptado base64',
  `caption` varchar(100) NOT NULL COMMENT 'Caption de la foto',
  `deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Indica si la foto ha sido moderada (borada logicamente)',
  `posteado_en` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de la publicacion de la foto',
  PRIMARY KEY (`photo_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla para almacenar las fotos incrustadas en publicaciones del muro de usuarios' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_muro_galeria_moderar`
--

CREATE TABLE IF NOT EXISTS `usuarios_muro_galeria_moderar` (
  `photo_id` int(11) NOT NULL COMMENT 'Referencia al a foto que se solicita moderar',
  `reported_by` int(11) NOT NULL COMMENT 'Referencia al usuario que solicita la moderacion',
  `reported_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de la solicitud de moderacion',
  `comments` text NOT NULL COMMENT 'comentarios y justificacion de la moderacion',
  `dismissed` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 si la solicitud fue descartada, 1 si fue aceptada',
  PRIMARY KEY (`photo_id`,`reported_by`),
  KEY `reported_by` (`reported_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Solicitud de moderacion de fotos del  muro de un usuario';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_muro_likes`
--

CREATE TABLE IF NOT EXISTS `usuarios_muro_likes` (
  `post_id` int(11) NOT NULL COMMENT 'Referencia al post que se le dio like',
  `liked_by` int(11) NOT NULL COMMENT 'Referencia al usuario que dio like',
  `liked_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora en que se dio el like',
  PRIMARY KEY (`post_id`,`liked_by`),
  KEY `liked_by` (`liked_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Almacena los likes de todos los posts de muro';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_muro_moderar`
--

CREATE TABLE IF NOT EXISTS `usuarios_muro_moderar` (
  `post_id` int(11) NOT NULL COMMENT 'Referencia al post que se solicito moderar',
  `reported_by` int(11) NOT NULL COMMENT 'Referencia al usuario que solicito moderar',
  `reported_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora en que se solicito moderar',
  `comments` text NOT NULL COMMENT 'Comentarios de por que se solicito moderar',
  `dismissed` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 si la solicitud fue descartada, 1 si la solicitud fue tomada en cuenta',
  PRIMARY KEY (`post_id`,`reported_by`),
  KEY `reported_by` (`reported_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Solicitudes de moderacion a posts en muro de usuarios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_roles`
--

CREATE TABLE IF NOT EXISTS `usuarios_roles` (
  `rol_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador global del rol',
  `nombre_rol` varchar(20) NOT NULL COMMENT 'Nombre del rol',
  `descripcion_rol` text NOT NULL COMMENT 'descripcion del rol',
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Roles (niveles de permiso o tipos) de usuarios del sistema' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_seguidores`
--

CREATE TABLE IF NOT EXISTS `usuarios_seguidores` (
  `user_id_following` int(11) NOT NULL COMMENT 'Usuario que sigue',
  `user_id_followed` int(11) NOT NULL COMMENT 'Usuario que es seguido',
  `followed_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora en que fue seguido',
  PRIMARY KEY (`user_id_following`,`user_id_followed`),
  KEY `user_id_followed` (`user_id_followed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Seguidores y seguidos de los usuarios';

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blog_post_comentarios`
--
ALTER TABLE `blog_post_comentarios`
  ADD CONSTRAINT `blog_post_comentarios_ibfk_3` FOREIGN KEY (`reply_to`) REFERENCES `blog_post_comentarios` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_post_comentarios_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog_post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_post_comentarios_ibfk_2` FOREIGN KEY (`posted_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `blog_post_comentarios_likes`
--
ALTER TABLE `blog_post_comentarios_likes`
  ADD CONSTRAINT `blog_post_comentarios_likes_ibfk_2` FOREIGN KEY (`liked_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_post_comentarios_likes_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `blog_post_comentarios` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `blog_post_comentarios_moderar`
--
ALTER TABLE `blog_post_comentarios_moderar`
  ADD CONSTRAINT `blog_post_comentarios_moderar_ibfk_2` FOREIGN KEY (`reported_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_post_comentarios_moderar_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `blog_post_comentarios` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `blog_post_galeria`
--
ALTER TABLE `blog_post_galeria`
  ADD CONSTRAINT `blog_post_galeria_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog_post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `blog_post_galeria_moderar`
--
ALTER TABLE `blog_post_galeria_moderar`
  ADD CONSTRAINT `blog_post_galeria_moderar_ibfk_2` FOREIGN KEY (`reported_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_post_galeria_moderar_ibfk_1` FOREIGN KEY (`photo_id`) REFERENCES `blog_post_galeria` (`photo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `blog_post_likes`
--
ALTER TABLE `blog_post_likes`
  ADD CONSTRAINT `blog_post_likes_ibfk_2` FOREIGN KEY (`liked_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_post_likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog_post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `blog_post_moderar`
--
ALTER TABLE `blog_post_moderar`
  ADD CONSTRAINT `blog_post_moderar_ibfk_2` FOREIGN KEY (`reported_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_post_moderar_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog_post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_2` FOREIGN KEY (`user_id_2`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`user_id_1`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `chats_mensajes`
--
ALTER TABLE `chats_mensajes`
  ADD CONSTRAINT `chats_mensajes_ibfk_3` FOREIGN KEY (`user_to`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chats_mensajes_ibfk_1` FOREIGN KEY (`chat_id`) REFERENCES `chats` (`chat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chats_mensajes_ibfk_2` FOREIGN KEY (`user_from`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_3` FOREIGN KEY (`usuario_organizador`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `eventos_categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`sub_categoria`) REFERENCES `eventos_sub_categorias` (`id_sub_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos_comentarios`
--
ALTER TABLE `eventos_comentarios`
  ADD CONSTRAINT `eventos_comentarios_ibfk_3` FOREIGN KEY (`reply_to`) REFERENCES `eventos_comentarios` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eventos_comentarios_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `eventos` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eventos_comentarios_ibfk_2` FOREIGN KEY (`posted_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos_comentarios_likes`
--
ALTER TABLE `eventos_comentarios_likes`
  ADD CONSTRAINT `eventos_comentarios_likes_ibfk_2` FOREIGN KEY (`liked_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eventos_comentarios_likes_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `eventos_comentarios` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos_galeria`
--
ALTER TABLE `eventos_galeria`
  ADD CONSTRAINT `eventos_galeria_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `eventos` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos_geo_ubicaciones`
--
ALTER TABLE `eventos_geo_ubicaciones`
  ADD CONSTRAINT `eventos_geo_ubicaciones_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `eventos` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos_likes`
--
ALTER TABLE `eventos_likes`
  ADD CONSTRAINT `eventos_likes_ibfk_2` FOREIGN KEY (`liked_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eventos_likes_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `eventos` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos_registro_usuarios`
--
ALTER TABLE `eventos_registro_usuarios`
  ADD CONSTRAINT `eventos_registro_usuarios_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `eventos` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `usuarios_roles` (`rol_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_amistad`
--
ALTER TABLE `usuarios_amistad`
  ADD CONSTRAINT `usuarios_amistad_ibfk_2` FOREIGN KEY (`user_id_2`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_amistad_ibfk_1` FOREIGN KEY (`user_id_1`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_amistad_solicitudes`
--
ALTER TABLE `usuarios_amistad_solicitudes`
  ADD CONSTRAINT `usuarios_amistad_solicitudes_ibfk_2` FOREIGN KEY (`user_id_requested`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_amistad_solicitudes_ibfk_1` FOREIGN KEY (`user_id_requesting`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_bloqueo`
--
ALTER TABLE `usuarios_bloqueo`
  ADD CONSTRAINT `usuarios_bloqueo_ibfk_2` FOREIGN KEY (`user_id_blocked`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_bloqueo_ibfk_1` FOREIGN KEY (`user_id_blocker`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_moderar`
--
ALTER TABLE `usuarios_moderar`
  ADD CONSTRAINT `usuarios_moderar_ibfk_2` FOREIGN KEY (`reported_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_moderar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_muro`
--
ALTER TABLE `usuarios_muro`
  ADD CONSTRAINT `usuarios_muro_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_muro_comentarios`
--
ALTER TABLE `usuarios_muro_comentarios`
  ADD CONSTRAINT `usuarios_muro_comentarios_ibfk_3` FOREIGN KEY (`reply_to`) REFERENCES `usuarios_muro_comentarios` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_muro_comentarios_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `usuarios_muro` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_muro_comentarios_ibfk_2` FOREIGN KEY (`posted_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_muro_comentarios_likes`
--
ALTER TABLE `usuarios_muro_comentarios_likes`
  ADD CONSTRAINT `usuarios_muro_comentarios_likes_ibfk_2` FOREIGN KEY (`liked_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_muro_comentarios_likes_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `usuarios_muro_comentarios` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_muro_comentarios_moderar`
--
ALTER TABLE `usuarios_muro_comentarios_moderar`
  ADD CONSTRAINT `usuarios_muro_comentarios_moderar_ibfk_2` FOREIGN KEY (`reported_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_muro_comentarios_moderar_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `usuarios_muro_comentarios` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_muro_galeria`
--
ALTER TABLE `usuarios_muro_galeria`
  ADD CONSTRAINT `usuarios_muro_galeria_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `usuarios_muro` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_muro_galeria_moderar`
--
ALTER TABLE `usuarios_muro_galeria_moderar`
  ADD CONSTRAINT `usuarios_muro_galeria_moderar_ibfk_2` FOREIGN KEY (`reported_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_muro_galeria_moderar_ibfk_1` FOREIGN KEY (`photo_id`) REFERENCES `usuarios_muro_galeria` (`photo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_muro_likes`
--
ALTER TABLE `usuarios_muro_likes`
  ADD CONSTRAINT `usuarios_muro_likes_ibfk_2` FOREIGN KEY (`liked_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_muro_likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `usuarios_muro` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_muro_moderar`
--
ALTER TABLE `usuarios_muro_moderar`
  ADD CONSTRAINT `usuarios_muro_moderar_ibfk_2` FOREIGN KEY (`reported_by`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_muro_moderar_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `usuarios_muro` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_seguidores`
--
ALTER TABLE `usuarios_seguidores`
  ADD CONSTRAINT `usuarios_seguidores_ibfk_2` FOREIGN KEY (`user_id_followed`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_seguidores_ibfk_1` FOREIGN KEY (`user_id_following`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

<?php
return array(
    'router' => array(
        'routes' => array(
            'evt.rest.usuarios' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:usuarios_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\Usuarios\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-muro-comentarios' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_muro_comentarios[/:usuarios_muro_comentarios_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosMuroComentarios\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-bloqueo' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_bloqueo[/:usuarios_bloqueo_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosBloqueo\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-amistad' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_amistad[/:usuarios_amistad_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosAmistad\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-muro-comentarios-likes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_muro_comentarios_likes[/:usuarios_muro_comentarios_likes_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-amistad-solicitudes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_amistad_solicitudes[/:usuarios_amistad_solicitudes_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-muro' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_muro[/:usuarios_muro_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosMuro\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-muro-galeria' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_muro_galeria[/:usuarios_muro_galeria_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosMuroGaleria\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-muro-galeria-moderar' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_muro_galeria_moderar[/:usuarios_muro_galeria_moderar_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-muro-moderar' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_muro_moderar[/:usuarios_muro_moderar_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosMuroModerar\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-roles' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_roles[/:usuarios_roles_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosRoles\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-moderar' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_moderar[/:usuarios_moderar_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosModerar\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-seguidores' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_seguidores[/:usuarios_seguidores_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosSeguidores\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-sub-categorias' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_sub_categorias[/:usuarios_sub_categorias_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosSubCategorias\\Controller',
                    ),
                ),
            ),
            'evt.rest.usuarios-muro-comentarios-moderar' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/usuarios_muro_comentarios_moderar[/:usuarios_muro_comentarios_moderar_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\Controller',
                    ),
                ),
            ),
            'evt.rest.blog-post' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/blog_post[/:blog_post_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\BlogPost\\Controller',
                    ),
                ),
            ),
            'evt.rest.blog-post-galeria-moderar' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/blog_post_galeria_moderar[/:blog_post_galeria_moderar_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\BlogPostGaleriaModerar\\Controller',
                    ),
                ),
            ),
            'evt.rest.blog-post-likes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/blog_post_likes[/:blog_post_likes_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\BlogPostLikes\\Controller',
                    ),
                ),
            ),
            'evt.rest.blog-post-moderar' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/blog_post_moderar[/:blog_post_moderar_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\BlogPostModerar\\Controller',
                    ),
                ),
            ),
            'evt.rest.blog-post-comentarios-likes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/blog_post_comentarios_likes[/:blog_post_comentarios_likes_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\BlogPostComentariosLikes\\Controller',
                    ),
                ),
            ),
            'evt.rest.blog-post-comentarios' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/blog_post_comentarios[/:blog_post_comentarios_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\BlogPostComentarios\\Controller',
                    ),
                ),
            ),
            'evt.rest.chats' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/chats[/:chats_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\Chats\\Controller',
                    ),
                ),
            ),
            'evt.rest.chats-mensajes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/chats_mensajes[/:chats_mensajes_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\ChatsMensajes\\Controller',
                    ),
                ),
            ),
            'evt.rest.eventos' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/eventos[/:eventos_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\Eventos\\Controller',
                    ),
                ),
            ),
            'evt.rest.eventos-comentarios' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/eventos_comentarios[/:eventos_comentarios_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\EventosComentarios\\Controller',
                    ),
                ),
            ),
            'evt.rest.eventos-categorias' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/eventos_categorias[/:id_categoria]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\EventosCategorias\\Controller',
                    ),
                ),
            ),
            'evt.rest.eventos-comentarios-likes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/eventos_comentarios_likes[/:eventos_comentarios_likes_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\EventosComentariosLikes\\Controller',
                    ),
                ),
            ),
            'evt.rest.blog-post-galeria' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/blog_post_galeria[/:blog_post_galeria_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\BlogPostGaleria\\Controller',
                    ),
                ),
            ),
            'evt.rest.blog-post-comentarios-moderar' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/blog_post_comentarios_moderar[/:blog_post_comentarios_moderar_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\BlogPostComentariosModerar\\Controller',
                    ),
                ),
            ),
            'evt.rest.eventos-galeria' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/eventos_galeria[/:eventos_galeria_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\EventosGaleria\\Controller',
                    ),
                ),
            ),
            'evt.rest.eventos-puntuaciones' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/eventos_puntuaciones[/:eventos_puntuaciones_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\EventosPuntuaciones\\Controller',
                    ),
                ),
            ),
            'evt.rest.eventos-sub-categorias' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/evtsubcat[/:eventos_sub_categorias_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\EventosSubCategorias\\Controller',
                    ),
                ),
            ),
            'evt.rest.lugar-ciudad' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/lugar_ciudad[/:lugar_ciudad_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\LugarCiudad\\Controller',
                    ),
                ),
            ),
            'evt.rest.eventos-ganadores' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/eventos_ganadores[/:eventos_ganadores_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\EventosGanadores\\Controller',
                    ),
                ),
            ),
            'evt.rest.eventos-likes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/eventos_likes[/:eventos_likes_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\EventosLikes\\Controller',
                    ),
                ),
            ),
            'evt.rest.lugar-pais' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/lugar_pais[/:lugar_pais_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\LugarPais\\Controller',
                    ),
                ),
            ),
            'evt.rest.eventos-registro-usuarios' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/eventos_registro_usuarios[/:eventos_registro_usuarios_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\EventosRegistroUsuarios\\Controller',
                    ),
                ),
            ),
            'evt.rest.lugar-estado' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/lugar_estado[/:lugar_estado_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\LugarEstado\\Controller',
                    ),
                ),
            ),
            'evt.rest.eventos-geo-ubicaciones' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/eventos_geo_ubicaciones[/:eventos_geo_ubicaciones_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\EventosGeoUbicaciones\\Controller',
                    ),
                ),
            ),
            'evt.rest.vista-pais-estado' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/vista-pais-estado[/:vista_pais_estado_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\VistaPaisEstado\\Controller',
                    ),
                ),
            ),
            'evt.rest.vista-estado-ciudad' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/vista-estado-ciudad[/:vista_estado_ciudad_id]',
                    'defaults' => array(
                        'controller' => 'evt\\V1\\Rest\\VistaEstadoCiudad\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'evt.rest.usuarios',
            1 => 'evt.rest.usuarios-muro-comentarios',
            2 => 'evt.rest.usuarios-bloqueo',
            3 => 'evt.rest.usuarios-amistad',
            4 => 'evt.rest.usuarios-muro-comentarios-likes',
            5 => 'evt.rest.usuarios-amistad-solicitudes',
            6 => 'evt.rest.usuarios-muro',
            7 => 'evt.rest.usuarios-muro-galeria',
            8 => 'evt.rest.usuarios-muro-galeria-moderar',
            9 => 'evt.rest.usuarios-muro-moderar',
            10 => 'evt.rest.usuarios-roles',
            11 => 'evt.rest.usuarios-moderar',
            12 => 'evt.rest.usuarios-seguidores',
            13 => 'evt.rest.usuarios-sub-categorias',
            14 => 'evt.rest.usuarios-muro-comentarios-moderar',
            15 => 'evt.rest.blog-post',
            16 => 'evt.rest.blog-post-galeria-moderar',
            17 => 'evt.rest.blog-post-likes',
            18 => 'evt.rest.blog-post-moderar',
            19 => 'evt.rest.blog-post-comentarios-likes',
            20 => 'evt.rest.blog-post-comentarios',
            21 => 'evt.rest.chats',
            22 => 'evt.rest.chats-mensajes',
            23 => 'evt.rest.eventos',
            24 => 'evt.rest.eventos-comentarios',
            25 => 'evt.rest.eventos-categorias',
            26 => 'evt.rest.eventos-comentarios-likes',
            27 => 'evt.rest.blog-post-galeria',
            28 => 'evt.rest.blog-post-comentarios-moderar',
            29 => 'evt.rest.eventos-galeria',
            30 => 'evt.rest.eventos-puntuaciones',
            31 => 'evt.rest.eventos-sub-categorias',
            32 => 'evt.rest.lugar-ciudad',
            33 => 'evt.rest.eventos-ganadores',
            34 => 'evt.rest.eventos-likes',
            35 => 'evt.rest.lugar-pais',
            36 => 'evt.rest.eventos-registro-usuarios',
            37 => 'evt.rest.lugar-estado',
            38 => 'evt.rest.eventos-geo-ubicaciones',
            39 => 'evt.rest.vista-pais-estado',
            40 => 'evt.rest.vista-estado-ciudad',
        ),
    ),
    'zf-rest' => array(
        'evt\\V1\\Rest\\Usuarios\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\Usuarios\\UsuariosResource',
            'route_name' => 'evt.rest.usuarios',
            'route_identifier_name' => 'usuarios_id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\Usuarios\\UsuariosEntity',
            'collection_class' => 'evt\\V1\\Rest\\Usuarios\\UsuariosCollection',
            'service_name' => 'usuarios',
        ),
        'evt\\V1\\Rest\\UsuariosMuroComentarios\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosMuroComentarios\\UsuariosMuroComentariosResource',
            'route_name' => 'evt.rest.usuarios-muro-comentarios',
            'route_identifier_name' => 'usuarios_muro_comentarios_id',
            'collection_name' => 'usuarios_muro_comentarios',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosMuroComentarios\\UsuariosMuroComentariosEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosMuroComentarios\\UsuariosMuroComentariosCollection',
            'service_name' => 'usuarios_muro_comentarios',
        ),
        'evt\\V1\\Rest\\UsuariosBloqueo\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosBloqueo\\UsuariosBloqueoResource',
            'route_name' => 'evt.rest.usuarios-bloqueo',
            'route_identifier_name' => 'usuarios_bloqueo_id',
            'collection_name' => 'usuarios_bloqueo',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosBloqueo\\UsuariosBloqueoEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosBloqueo\\UsuariosBloqueoCollection',
            'service_name' => 'usuarios_bloqueo',
        ),
        'evt\\V1\\Rest\\UsuariosAmistad\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosAmistad\\UsuariosAmistadResource',
            'route_name' => 'evt.rest.usuarios-amistad',
            'route_identifier_name' => 'usuarios_amistad_id',
            'collection_name' => 'usuarios_amistad',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosAmistad\\UsuariosAmistadEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosAmistad\\UsuariosAmistadCollection',
            'service_name' => 'usuarios_amistad',
        ),
        'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\UsuariosMuroComentariosLikesResource',
            'route_name' => 'evt.rest.usuarios-muro-comentarios-likes',
            'route_identifier_name' => 'usuarios_muro_comentarios_likes_id',
            'collection_name' => 'usuarios_muro_comentarios_likes',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\UsuariosMuroComentariosLikesEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\UsuariosMuroComentariosLikesCollection',
            'service_name' => 'usuarios_muro_comentarios_likes',
        ),
        'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\UsuariosAmistadSolicitudesResource',
            'route_name' => 'evt.rest.usuarios-amistad-solicitudes',
            'route_identifier_name' => 'usuarios_amistad_solicitudes_id',
            'collection_name' => 'usuarios_amistad_solicitudes',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\UsuariosAmistadSolicitudesEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\UsuariosAmistadSolicitudesCollection',
            'service_name' => 'usuarios_amistad_solicitudes',
        ),
        'evt\\V1\\Rest\\UsuariosMuro\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosMuro\\UsuariosMuroResource',
            'route_name' => 'evt.rest.usuarios-muro',
            'route_identifier_name' => 'usuarios_muro_id',
            'collection_name' => 'usuarios_muro',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosMuro\\UsuariosMuroEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosMuro\\UsuariosMuroCollection',
            'service_name' => 'usuarios_muro',
        ),
        'evt\\V1\\Rest\\UsuariosMuroGaleria\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosMuroGaleria\\UsuariosMuroGaleriaResource',
            'route_name' => 'evt.rest.usuarios-muro-galeria',
            'route_identifier_name' => 'usuarios_muro_galeria_id',
            'collection_name' => 'usuarios_muro_galeria',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosMuroGaleria\\UsuariosMuroGaleriaEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosMuroGaleria\\UsuariosMuroGaleriaCollection',
            'service_name' => 'usuarios_muro_galeria',
        ),
        'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\UsuariosMuroGaleriaModerarResource',
            'route_name' => 'evt.rest.usuarios-muro-galeria-moderar',
            'route_identifier_name' => 'usuarios_muro_galeria_moderar_id',
            'collection_name' => 'usuarios_muro_galeria_moderar',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\UsuariosMuroGaleriaModerarEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\UsuariosMuroGaleriaModerarCollection',
            'service_name' => 'usuarios_muro_galeria_moderar',
        ),
        'evt\\V1\\Rest\\UsuariosMuroModerar\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosMuroModerar\\UsuariosMuroModerarResource',
            'route_name' => 'evt.rest.usuarios-muro-moderar',
            'route_identifier_name' => 'usuarios_muro_moderar_id',
            'collection_name' => 'usuarios_muro_moderar',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosMuroModerar\\UsuariosMuroModerarEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosMuroModerar\\UsuariosMuroModerarCollection',
            'service_name' => 'usuarios_muro_moderar',
        ),
        'evt\\V1\\Rest\\UsuariosRoles\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosRoles\\UsuariosRolesResource',
            'route_name' => 'evt.rest.usuarios-roles',
            'route_identifier_name' => 'usuarios_roles_id',
            'collection_name' => 'usuarios_roles',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosRoles\\UsuariosRolesEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosRoles\\UsuariosRolesCollection',
            'service_name' => 'usuarios_roles',
        ),
        'evt\\V1\\Rest\\UsuariosModerar\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosModerar\\UsuariosModerarResource',
            'route_name' => 'evt.rest.usuarios-moderar',
            'route_identifier_name' => 'usuarios_moderar_id',
            'collection_name' => 'usuarios_moderar',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosModerar\\UsuariosModerarEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosModerar\\UsuariosModerarCollection',
            'service_name' => 'usuarios_moderar',
        ),
        'evt\\V1\\Rest\\UsuariosSeguidores\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosSeguidores\\UsuariosSeguidoresResource',
            'route_name' => 'evt.rest.usuarios-seguidores',
            'route_identifier_name' => 'usuarios_seguidores_id',
            'collection_name' => 'usuarios_seguidores',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosSeguidores\\UsuariosSeguidoresEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosSeguidores\\UsuariosSeguidoresCollection',
            'service_name' => 'usuarios_seguidores',
        ),
        'evt\\V1\\Rest\\UsuariosSubCategorias\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosSubCategorias\\UsuariosSubCategoriasResource',
            'route_name' => 'evt.rest.usuarios-sub-categorias',
            'route_identifier_name' => 'usuarios_sub_categorias_id',
            'collection_name' => 'usuarios_sub_categorias',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosSubCategorias\\UsuariosSubCategoriasEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosSubCategorias\\UsuariosSubCategoriasCollection',
            'service_name' => 'usuarios_sub_categorias',
        ),
        'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\UsuariosMuroComentariosModerarResource',
            'route_name' => 'evt.rest.usuarios-muro-comentarios-moderar',
            'route_identifier_name' => 'usuarios_muro_comentarios_moderar_id',
            'collection_name' => 'usuarios_muro_comentarios_moderar',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\UsuariosMuroComentariosModerarEntity',
            'collection_class' => 'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\UsuariosMuroComentariosModerarCollection',
            'service_name' => 'usuarios_muro_comentarios_moderar',
        ),
        'evt\\V1\\Rest\\BlogPost\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\BlogPost\\BlogPostResource',
            'route_name' => 'evt.rest.blog-post',
            'route_identifier_name' => 'blog_post_id',
            'collection_name' => 'blog_post',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\BlogPost\\BlogPostEntity',
            'collection_class' => 'evt\\V1\\Rest\\BlogPost\\BlogPostCollection',
            'service_name' => 'blog_post',
        ),
        'evt\\V1\\Rest\\BlogPostGaleriaModerar\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\BlogPostGaleriaModerar\\BlogPostGaleriaModerarResource',
            'route_name' => 'evt.rest.blog-post-galeria-moderar',
            'route_identifier_name' => 'blog_post_galeria_moderar_id',
            'collection_name' => 'blog_post_galeria_moderar',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\BlogPostGaleriaModerar\\BlogPostGaleriaModerarEntity',
            'collection_class' => 'evt\\V1\\Rest\\BlogPostGaleriaModerar\\BlogPostGaleriaModerarCollection',
            'service_name' => 'blog_post_galeria_moderar',
        ),
        'evt\\V1\\Rest\\BlogPostLikes\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\BlogPostLikes\\BlogPostLikesResource',
            'route_name' => 'evt.rest.blog-post-likes',
            'route_identifier_name' => 'blog_post_likes_id',
            'collection_name' => 'blog_post_likes',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\BlogPostLikes\\BlogPostLikesEntity',
            'collection_class' => 'evt\\V1\\Rest\\BlogPostLikes\\BlogPostLikesCollection',
            'service_name' => 'blog_post_likes',
        ),
        'evt\\V1\\Rest\\BlogPostModerar\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\BlogPostModerar\\BlogPostModerarResource',
            'route_name' => 'evt.rest.blog-post-moderar',
            'route_identifier_name' => 'blog_post_moderar_id',
            'collection_name' => 'blog_post_moderar',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\BlogPostModerar\\BlogPostModerarEntity',
            'collection_class' => 'evt\\V1\\Rest\\BlogPostModerar\\BlogPostModerarCollection',
            'service_name' => 'blog_post_moderar',
        ),
        'evt\\V1\\Rest\\BlogPostComentariosLikes\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\BlogPostComentariosLikes\\BlogPostComentariosLikesResource',
            'route_name' => 'evt.rest.blog-post-comentarios-likes',
            'route_identifier_name' => 'blog_post_comentarios_likes_id',
            'collection_name' => 'blog_post_comentarios_likes',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\BlogPostComentariosLikes\\BlogPostComentariosLikesEntity',
            'collection_class' => 'evt\\V1\\Rest\\BlogPostComentariosLikes\\BlogPostComentariosLikesCollection',
            'service_name' => 'blog_post_comentarios_likes',
        ),
        'evt\\V1\\Rest\\BlogPostComentarios\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\BlogPostComentarios\\BlogPostComentariosResource',
            'route_name' => 'evt.rest.blog-post-comentarios',
            'route_identifier_name' => 'blog_post_comentarios_id',
            'collection_name' => 'blog_post_comentarios',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\BlogPostComentarios\\BlogPostComentariosEntity',
            'collection_class' => 'evt\\V1\\Rest\\BlogPostComentarios\\BlogPostComentariosCollection',
            'service_name' => 'blog_post_comentarios',
        ),
        'evt\\V1\\Rest\\Chats\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\Chats\\ChatsResource',
            'route_name' => 'evt.rest.chats',
            'route_identifier_name' => 'chats_id',
            'collection_name' => 'chats',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\Chats\\ChatsEntity',
            'collection_class' => 'evt\\V1\\Rest\\Chats\\ChatsCollection',
            'service_name' => 'chats',
        ),
        'evt\\V1\\Rest\\ChatsMensajes\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\ChatsMensajes\\ChatsMensajesResource',
            'route_name' => 'evt.rest.chats-mensajes',
            'route_identifier_name' => 'chats_mensajes_id',
            'collection_name' => 'chats_mensajes',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\ChatsMensajes\\ChatsMensajesEntity',
            'collection_class' => 'evt\\V1\\Rest\\ChatsMensajes\\ChatsMensajesCollection',
            'service_name' => 'chats_mensajes',
        ),
        'evt\\V1\\Rest\\Eventos\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\Eventos\\EventosResource',
            'route_name' => 'evt.rest.eventos',
            'route_identifier_name' => 'eventos_id',
            'collection_name' => 'eventos',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\Eventos\\EventosEntity',
            'collection_class' => 'evt\\V1\\Rest\\Eventos\\EventosCollection',
            'service_name' => 'eventos',
        ),
        'evt\\V1\\Rest\\EventosComentarios\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\EventosComentarios\\EventosComentariosResource',
            'route_name' => 'evt.rest.eventos-comentarios',
            'route_identifier_name' => 'eventos_comentarios_id',
            'collection_name' => 'eventos_comentarios',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\EventosComentarios\\EventosComentariosEntity',
            'collection_class' => 'evt\\V1\\Rest\\EventosComentarios\\EventosComentariosCollection',
            'service_name' => 'eventos_comentarios',
        ),
        'evt\\V1\\Rest\\EventosCategorias\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\EventosCategorias\\EventosCategoriasResource',
            'route_name' => 'evt.rest.eventos-categorias',
            'route_identifier_name' => 'id_categoria',
            'collection_name' => 'eventos_categorias',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\EventosCategorias\\EventosCategoriasEntity',
            'collection_class' => 'evt\\V1\\Rest\\EventosCategorias\\EventosCategoriasCollection',
            'service_name' => 'eventos_categorias',
        ),
        'evt\\V1\\Rest\\EventosComentariosLikes\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\EventosComentariosLikes\\EventosComentariosLikesResource',
            'route_name' => 'evt.rest.eventos-comentarios-likes',
            'route_identifier_name' => 'eventos_comentarios_likes_id',
            'collection_name' => 'eventos_comentarios_likes',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\EventosComentariosLikes\\EventosComentariosLikesEntity',
            'collection_class' => 'evt\\V1\\Rest\\EventosComentariosLikes\\EventosComentariosLikesCollection',
            'service_name' => 'eventos_comentarios_likes',
        ),
        'evt\\V1\\Rest\\BlogPostGaleria\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\BlogPostGaleria\\BlogPostGaleriaResource',
            'route_name' => 'evt.rest.blog-post-galeria',
            'route_identifier_name' => 'blog_post_galeria_id',
            'collection_name' => 'blog_post_galeria',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\BlogPostGaleria\\BlogPostGaleriaEntity',
            'collection_class' => 'evt\\V1\\Rest\\BlogPostGaleria\\BlogPostGaleriaCollection',
            'service_name' => 'blog_post_galeria',
        ),
        'evt\\V1\\Rest\\BlogPostComentariosModerar\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\BlogPostComentariosModerar\\BlogPostComentariosModerarResource',
            'route_name' => 'evt.rest.blog-post-comentarios-moderar',
            'route_identifier_name' => 'blog_post_comentarios_moderar_id',
            'collection_name' => 'blog_post_comentarios_moderar',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\BlogPostComentariosModerar\\BlogPostComentariosModerarEntity',
            'collection_class' => 'evt\\V1\\Rest\\BlogPostComentariosModerar\\BlogPostComentariosModerarCollection',
            'service_name' => 'blog_post_comentarios_moderar',
        ),
        'evt\\V1\\Rest\\EventosGaleria\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\EventosGaleria\\EventosGaleriaResource',
            'route_name' => 'evt.rest.eventos-galeria',
            'route_identifier_name' => 'eventos_galeria_id',
            'collection_name' => 'eventos_galeria',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\EventosGaleria\\EventosGaleriaEntity',
            'collection_class' => 'evt\\V1\\Rest\\EventosGaleria\\EventosGaleriaCollection',
            'service_name' => 'eventos_galeria',
        ),
        'evt\\V1\\Rest\\EventosPuntuaciones\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\EventosPuntuaciones\\EventosPuntuacionesResource',
            'route_name' => 'evt.rest.eventos-puntuaciones',
            'route_identifier_name' => 'eventos_puntuaciones_id',
            'collection_name' => 'eventos_puntuaciones',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\EventosPuntuaciones\\EventosPuntuacionesEntity',
            'collection_class' => 'evt\\V1\\Rest\\EventosPuntuaciones\\EventosPuntuacionesCollection',
            'service_name' => 'eventos_puntuaciones',
        ),
        'evt\\V1\\Rest\\EventosSubCategorias\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\EventosSubCategorias\\EventosSubCategoriasResource',
            'route_name' => 'evt.rest.eventos-sub-categorias',
            'route_identifier_name' => 'eventos_sub_categorias_id',
            'collection_name' => 'eventos_sub_categorias',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\EventosSubCategorias\\EventosSubCategoriasEntity',
            'collection_class' => 'evt\\V1\\Rest\\EventosSubCategorias\\EventosSubCategoriasCollection',
            'service_name' => 'eventos_sub_categorias',
        ),
        'evt\\V1\\Rest\\LugarCiudad\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\LugarCiudad\\LugarCiudadResource',
            'route_name' => 'evt.rest.lugar-ciudad',
            'route_identifier_name' => 'lugar_ciudad_id',
            'collection_name' => 'lugar_ciudad',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\LugarCiudad\\LugarCiudadEntity',
            'collection_class' => 'evt\\V1\\Rest\\LugarCiudad\\LugarCiudadCollection',
            'service_name' => 'lugar_ciudad',
        ),
        'evt\\V1\\Rest\\EventosGanadores\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\EventosGanadores\\EventosGanadoresResource',
            'route_name' => 'evt.rest.eventos-ganadores',
            'route_identifier_name' => 'eventos_ganadores_id',
            'collection_name' => 'eventos_ganadores',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\EventosGanadores\\EventosGanadoresEntity',
            'collection_class' => 'evt\\V1\\Rest\\EventosGanadores\\EventosGanadoresCollection',
            'service_name' => 'eventos_ganadores',
        ),
        'evt\\V1\\Rest\\EventosLikes\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\EventosLikes\\EventosLikesResource',
            'route_name' => 'evt.rest.eventos-likes',
            'route_identifier_name' => 'eventos_likes_id',
            'collection_name' => 'eventos_likes',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\EventosLikes\\EventosLikesEntity',
            'collection_class' => 'evt\\V1\\Rest\\EventosLikes\\EventosLikesCollection',
            'service_name' => 'eventos_likes',
        ),
        'evt\\V1\\Rest\\LugarPais\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\LugarPais\\LugarPaisResource',
            'route_name' => 'evt.rest.lugar-pais',
            'route_identifier_name' => 'lugar_pais_id',
            'collection_name' => 'lugar_pais',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\LugarPais\\LugarPaisEntity',
            'collection_class' => 'evt\\V1\\Rest\\LugarPais\\LugarPaisCollection',
            'service_name' => 'lugar_pais',
        ),
        'evt\\V1\\Rest\\EventosRegistroUsuarios\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\EventosRegistroUsuarios\\EventosRegistroUsuariosResource',
            'route_name' => 'evt.rest.eventos-registro-usuarios',
            'route_identifier_name' => 'eventos_registro_usuarios_id',
            'collection_name' => 'eventos_registro_usuarios',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\EventosRegistroUsuarios\\EventosRegistroUsuariosEntity',
            'collection_class' => 'evt\\V1\\Rest\\EventosRegistroUsuarios\\EventosRegistroUsuariosCollection',
            'service_name' => 'eventos_registro_usuarios',
        ),
        'evt\\V1\\Rest\\LugarEstado\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\LugarEstado\\LugarEstadoResource',
            'route_name' => 'evt.rest.lugar-estado',
            'route_identifier_name' => 'lugar_estado_id',
            'collection_name' => 'lugar_estado',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\LugarEstado\\LugarEstadoEntity',
            'collection_class' => 'evt\\V1\\Rest\\LugarEstado\\LugarEstadoCollection',
            'service_name' => 'lugar_estado',
        ),
        'evt\\V1\\Rest\\EventosGeoUbicaciones\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\EventosGeoUbicaciones\\EventosGeoUbicacionesResource',
            'route_name' => 'evt.rest.eventos-geo-ubicaciones',
            'route_identifier_name' => 'eventos_geo_ubicaciones_id',
            'collection_name' => 'eventos_geo_ubicaciones',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\EventosGeoUbicaciones\\EventosGeoUbicacionesEntity',
            'collection_class' => 'evt\\V1\\Rest\\EventosGeoUbicaciones\\EventosGeoUbicacionesCollection',
            'service_name' => 'eventos_geo_ubicaciones',
        ),
        'evt\\V1\\Rest\\VistaPaisEstado\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\VistaPaisEstado\\VistaPaisEstadoResource',
            'route_name' => 'evt.rest.vista-pais-estado',
            'route_identifier_name' => 'vista_pais_estado_id',
            'collection_name' => 'lugar_estado',
            'entity_http_methods' => array(),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(
                0 => 'pais_id',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\VistaPaisEstado\\VistaPaisEstadoEntity',
            'collection_class' => 'evt\\V1\\Rest\\VistaPaisEstado\\VistaPaisEstadoCollection',
            'service_name' => 'VistaPaisEstado',
        ),
        'evt\\V1\\Rest\\VistaEstadoCiudad\\Controller' => array(
            'listener' => 'evt\\V1\\Rest\\VistaEstadoCiudad\\VistaEstadoCiudadResource',
            'route_name' => 'evt.rest.vista-estado-ciudad',
            'route_identifier_name' => 'vista_estado_ciudad_id',
            'collection_name' => 'lugar_ciudad',
            'entity_http_methods' => array(),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(
                0 => 'estado_id',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'evt\\V1\\Rest\\VistaEstadoCiudad\\VistaEstadoCiudadEntity',
            'collection_class' => 'evt\\V1\\Rest\\VistaEstadoCiudad\\VistaEstadoCiudadCollection',
            'service_name' => 'VistaEstadoCiudad',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'evt\\V1\\Rest\\Usuarios\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosMuroComentarios\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosBloqueo\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosAmistad\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosMuro\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosMuroGaleria\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosMuroModerar\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosRoles\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosModerar\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosSeguidores\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosSubCategorias\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\BlogPost\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\BlogPostGaleriaModerar\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\BlogPostLikes\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\BlogPostModerar\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\BlogPostComentariosLikes\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\BlogPostComentarios\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\Chats\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\ChatsMensajes\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\Eventos\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\EventosComentarios\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\EventosCategorias\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\EventosComentariosLikes\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\BlogPostGaleria\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\BlogPostComentariosModerar\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\EventosGaleria\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\EventosPuntuaciones\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\EventosSubCategorias\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\LugarCiudad\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\EventosGanadores\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\EventosLikes\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\LugarPais\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\EventosRegistroUsuarios\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\LugarEstado\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\EventosGeoUbicaciones\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\VistaPaisEstado\\Controller' => 'HalJson',
            'evt\\V1\\Rest\\VistaEstadoCiudad\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'evt\\V1\\Rest\\Usuarios\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentarios\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosBloqueo\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosAmistad\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuro\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuroGaleria\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuroModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosRoles\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosSeguidores\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosSubCategorias\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPost\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostGaleriaModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostLikes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostComentariosLikes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostComentarios\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\Chats\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\ChatsMensajes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\Eventos\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosComentarios\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosCategorias\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosComentariosLikes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostGaleria\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostComentariosModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosGaleria\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosPuntuaciones\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosSubCategorias\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\LugarCiudad\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosGanadores\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosLikes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\LugarPais\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosRegistroUsuarios\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\LugarEstado\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosGeoUbicaciones\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\VistaPaisEstado\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'evt\\V1\\Rest\\VistaEstadoCiudad\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'evt\\V1\\Rest\\Usuarios\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentarios\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosBloqueo\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosAmistad\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuro\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuroGaleria\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuroModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosRoles\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosSeguidores\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosSubCategorias\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPost\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostGaleriaModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostLikes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostComentariosLikes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostComentarios\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\Chats\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\ChatsMensajes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\Eventos\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosComentarios\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosCategorias\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosComentariosLikes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostGaleria\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\BlogPostComentariosModerar\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosGaleria\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosPuntuaciones\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosSubCategorias\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\LugarCiudad\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosGanadores\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosLikes\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\LugarPais\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosRegistroUsuarios\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\LugarEstado\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\EventosGeoUbicaciones\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\VistaPaisEstado\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
            'evt\\V1\\Rest\\VistaEstadoCiudad\\Controller' => array(
                0 => 'application/vnd.evt.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'evt\\V1\\Rest\\Usuarios\\UsuariosEntity' => array(
                'entity_identifier_name' => 'user_id',
                'route_name' => 'evt.rest.usuarios',
                'route_identifier_name' => 'usuarios_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\Usuarios\\UsuariosCollection' => array(
                'entity_identifier_name' => 'user_id',
                'route_name' => 'evt.rest.usuarios',
                'route_identifier_name' => 'usuarios_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentarios\\UsuariosMuroComentariosEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro-comentarios',
                'route_identifier_name' => 'usuarios_muro_comentarios_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentarios\\UsuariosMuroComentariosCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro-comentarios',
                'route_identifier_name' => 'usuarios_muro_comentarios_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosBloqueo\\UsuariosBloqueoEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-bloqueo',
                'route_identifier_name' => 'usuarios_bloqueo_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosBloqueo\\UsuariosBloqueoCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-bloqueo',
                'route_identifier_name' => 'usuarios_bloqueo_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosAmistad\\UsuariosAmistadEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-amistad',
                'route_identifier_name' => 'usuarios_amistad_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosAmistad\\UsuariosAmistadCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-amistad',
                'route_identifier_name' => 'usuarios_amistad_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\UsuariosMuroComentariosLikesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro-comentarios-likes',
                'route_identifier_name' => 'usuarios_muro_comentarios_likes_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\UsuariosMuroComentariosLikesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro-comentarios-likes',
                'route_identifier_name' => 'usuarios_muro_comentarios_likes_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\UsuariosAmistadSolicitudesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-amistad-solicitudes',
                'route_identifier_name' => 'usuarios_amistad_solicitudes_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\UsuariosAmistadSolicitudesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-amistad-solicitudes',
                'route_identifier_name' => 'usuarios_amistad_solicitudes_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosMuro\\UsuariosMuroEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro',
                'route_identifier_name' => 'usuarios_muro_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosMuro\\UsuariosMuroCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro',
                'route_identifier_name' => 'usuarios_muro_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosMuroGaleria\\UsuariosMuroGaleriaEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro-galeria',
                'route_identifier_name' => 'usuarios_muro_galeria_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosMuroGaleria\\UsuariosMuroGaleriaCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro-galeria',
                'route_identifier_name' => 'usuarios_muro_galeria_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\UsuariosMuroGaleriaModerarEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro-galeria-moderar',
                'route_identifier_name' => 'usuarios_muro_galeria_moderar_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\UsuariosMuroGaleriaModerarCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro-galeria-moderar',
                'route_identifier_name' => 'usuarios_muro_galeria_moderar_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosMuroModerar\\UsuariosMuroModerarEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro-moderar',
                'route_identifier_name' => 'usuarios_muro_moderar_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosMuroModerar\\UsuariosMuroModerarCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro-moderar',
                'route_identifier_name' => 'usuarios_muro_moderar_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosRoles\\UsuariosRolesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-roles',
                'route_identifier_name' => 'usuarios_roles_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosRoles\\UsuariosRolesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-roles',
                'route_identifier_name' => 'usuarios_roles_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosModerar\\UsuariosModerarEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-moderar',
                'route_identifier_name' => 'usuarios_moderar_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosModerar\\UsuariosModerarCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-moderar',
                'route_identifier_name' => 'usuarios_moderar_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosSeguidores\\UsuariosSeguidoresEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-seguidores',
                'route_identifier_name' => 'usuarios_seguidores_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosSeguidores\\UsuariosSeguidoresCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-seguidores',
                'route_identifier_name' => 'usuarios_seguidores_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosSubCategorias\\UsuariosSubCategoriasEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-sub-categorias',
                'route_identifier_name' => 'usuarios_sub_categorias_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosSubCategorias\\UsuariosSubCategoriasCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-sub-categorias',
                'route_identifier_name' => 'usuarios_sub_categorias_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\UsuariosMuroComentariosModerarEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro-comentarios-moderar',
                'route_identifier_name' => 'usuarios_muro_comentarios_moderar_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\UsuariosMuroComentariosModerarCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.usuarios-muro-comentarios-moderar',
                'route_identifier_name' => 'usuarios_muro_comentarios_moderar_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\BlogPost\\BlogPostEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post',
                'route_identifier_name' => 'blog_post_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\BlogPost\\BlogPostCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post',
                'route_identifier_name' => 'blog_post_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\BlogPostGaleriaModerar\\BlogPostGaleriaModerarEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-galeria-moderar',
                'route_identifier_name' => 'blog_post_galeria_moderar_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\BlogPostGaleriaModerar\\BlogPostGaleriaModerarCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-galeria-moderar',
                'route_identifier_name' => 'blog_post_galeria_moderar_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\BlogPostLikes\\BlogPostLikesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-likes',
                'route_identifier_name' => 'blog_post_likes_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\BlogPostLikes\\BlogPostLikesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-likes',
                'route_identifier_name' => 'blog_post_likes_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\BlogPostModerar\\BlogPostModerarEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-moderar',
                'route_identifier_name' => 'blog_post_moderar_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\BlogPostModerar\\BlogPostModerarCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-moderar',
                'route_identifier_name' => 'blog_post_moderar_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\BlogPostComentariosLikes\\BlogPostComentariosLikesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-comentarios-likes',
                'route_identifier_name' => 'blog_post_comentarios_likes_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\BlogPostComentariosLikes\\BlogPostComentariosLikesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-comentarios-likes',
                'route_identifier_name' => 'blog_post_comentarios_likes_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\BlogPostComentarios\\BlogPostComentariosEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-comentarios',
                'route_identifier_name' => 'blog_post_comentarios_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\BlogPostComentarios\\BlogPostComentariosCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-comentarios',
                'route_identifier_name' => 'blog_post_comentarios_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\Chats\\ChatsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.chats',
                'route_identifier_name' => 'chats_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\Chats\\ChatsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.chats',
                'route_identifier_name' => 'chats_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\ChatsMensajes\\ChatsMensajesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.chats-mensajes',
                'route_identifier_name' => 'chats_mensajes_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\ChatsMensajes\\ChatsMensajesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.chats-mensajes',
                'route_identifier_name' => 'chats_mensajes_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\Eventos\\EventosEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos',
                'route_identifier_name' => 'eventos_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\Eventos\\EventosCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos',
                'route_identifier_name' => 'eventos_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\EventosComentarios\\EventosComentariosEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-comentarios',
                'route_identifier_name' => 'eventos_comentarios_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\EventosComentarios\\EventosComentariosCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-comentarios',
                'route_identifier_name' => 'eventos_comentarios_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\EventosCategorias\\EventosCategoriasEntity' => array(
                'entity_identifier_name' => 'id_categoria',
                'route_name' => 'evt.rest.eventos-categorias',
                'route_identifier_name' => 'id_categoria',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\EventosCategorias\\EventosCategoriasCollection' => array(
                'entity_identifier_name' => 'id_categoria',
                'route_name' => 'evt.rest.eventos-categorias',
                'route_identifier_name' => 'id_categoria',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\EventosComentariosLikes\\EventosComentariosLikesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-comentarios-likes',
                'route_identifier_name' => 'eventos_comentarios_likes_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\EventosComentariosLikes\\EventosComentariosLikesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-comentarios-likes',
                'route_identifier_name' => 'eventos_comentarios_likes_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\BlogPostGaleria\\BlogPostGaleriaEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-galeria',
                'route_identifier_name' => 'blog_post_galeria_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\BlogPostGaleria\\BlogPostGaleriaCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-galeria',
                'route_identifier_name' => 'blog_post_galeria_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\BlogPostComentariosModerar\\BlogPostComentariosModerarEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-comentarios-moderar',
                'route_identifier_name' => 'blog_post_comentarios_moderar_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\BlogPostComentariosModerar\\BlogPostComentariosModerarCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.blog-post-comentarios-moderar',
                'route_identifier_name' => 'blog_post_comentarios_moderar_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\EventosGaleria\\EventosGaleriaEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-galeria',
                'route_identifier_name' => 'eventos_galeria_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\EventosGaleria\\EventosGaleriaCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-galeria',
                'route_identifier_name' => 'eventos_galeria_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\EventosPuntuaciones\\EventosPuntuacionesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-puntuaciones',
                'route_identifier_name' => 'eventos_puntuaciones_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\EventosPuntuaciones\\EventosPuntuacionesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-puntuaciones',
                'route_identifier_name' => 'eventos_puntuaciones_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\EventosSubCategorias\\EventosSubCategoriasEntity' => array(
                'entity_identifier_name' => 'id_sub_categoria',
                'route_name' => 'evt.rest.eventos-sub-categorias',
                'route_identifier_name' => 'eventos_sub_categorias_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\EventosSubCategorias\\EventosSubCategoriasCollection' => array(
                'entity_identifier_name' => 'id_sub_categoria',
                'route_name' => 'evt.rest.eventos-sub-categorias',
                'route_identifier_name' => 'eventos_sub_categorias_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\LugarCiudad\\LugarCiudadEntity' => array(
                'entity_identifier_name' => 'ciudad_id',
                'route_name' => 'evt.rest.lugar-ciudad',
                'route_identifier_name' => 'lugar_ciudad_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\LugarCiudad\\LugarCiudadCollection' => array(
                'entity_identifier_name' => 'ciudad_id',
                'route_name' => 'evt.rest.lugar-ciudad',
                'route_identifier_name' => 'lugar_ciudad_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\EventosGanadores\\EventosGanadoresEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-ganadores',
                'route_identifier_name' => 'eventos_ganadores_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\EventosGanadores\\EventosGanadoresCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-ganadores',
                'route_identifier_name' => 'eventos_ganadores_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\EventosLikes\\EventosLikesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-likes',
                'route_identifier_name' => 'eventos_likes_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\EventosLikes\\EventosLikesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-likes',
                'route_identifier_name' => 'eventos_likes_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\LugarPais\\LugarPaisEntity' => array(
                'entity_identifier_name' => 'pais_id',
                'route_name' => 'evt.rest.lugar-pais',
                'route_identifier_name' => 'lugar_pais_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\LugarPais\\LugarPaisCollection' => array(
                'entity_identifier_name' => 'pais_id',
                'route_name' => 'evt.rest.lugar-pais',
                'route_identifier_name' => 'lugar_pais_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\EventosRegistroUsuarios\\EventosRegistroUsuariosEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-registro-usuarios',
                'route_identifier_name' => 'eventos_registro_usuarios_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\EventosRegistroUsuarios\\EventosRegistroUsuariosCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-registro-usuarios',
                'route_identifier_name' => 'eventos_registro_usuarios_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\LugarEstado\\LugarEstadoEntity' => array(
                'entity_identifier_name' => 'estado_id',
                'route_name' => 'evt.rest.lugar-estado',
                'route_identifier_name' => 'lugar_estado_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\LugarEstado\\LugarEstadoCollection' => array(
                'entity_identifier_name' => 'estado_id',
                'route_name' => 'evt.rest.lugar-estado',
                'route_identifier_name' => 'lugar_estado_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\EventosGeoUbicaciones\\EventosGeoUbicacionesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-geo-ubicaciones',
                'route_identifier_name' => 'eventos_geo_ubicaciones_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\EventosGeoUbicaciones\\EventosGeoUbicacionesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'evt.rest.eventos-geo-ubicaciones',
                'route_identifier_name' => 'eventos_geo_ubicaciones_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\VistaPaisEstado\\VistaPaisEstadoEntity' => array(
                'entity_identifier_name' => 'estado_id',
                'route_name' => 'evt.rest.vista-pais-estado',
                'route_identifier_name' => 'vista_pais_estado_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\VistaPaisEstado\\VistaPaisEstadoCollection' => array(
                'entity_identifier_name' => 'estado_id',
                'route_name' => 'evt.rest.vista-pais-estado',
                'route_identifier_name' => 'vista_pais_estado_id',
                'is_collection' => true,
            ),
            'evt\\V1\\Rest\\VistaEstadoCiudad\\VistaEstadoCiudadEntity' => array(
                'entity_identifier_name' => 'ciudad_id',
                'route_name' => 'evt.rest.vista-estado-ciudad',
                'route_identifier_name' => 'vista_estado_ciudad_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'evt\\V1\\Rest\\VistaEstadoCiudad\\VistaEstadoCiudadCollection' => array(
                'entity_identifier_name' => 'ciudad_id',
                'route_name' => 'evt.rest.vista-estado-ciudad',
                'route_identifier_name' => 'vista_estado_ciudad_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'evt\\V1\\Rest\\Usuarios\\UsuariosResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\Usuarios\\Controller',
                'entity_identifier_name' => 'user_id',
                'table_service' => 'evt\\V1\\Rest\\Usuarios\\UsuariosResource\\Table',
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentarios\\UsuariosMuroComentariosResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_muro_comentarios',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosMuroComentarios\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosBloqueo\\UsuariosBloqueoResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_bloqueo',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosBloqueo\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosAmistad\\UsuariosAmistadResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_amistad',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosAmistad\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\UsuariosMuroComentariosLikesResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_muro_comentarios_likes',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\UsuariosAmistadSolicitudesResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_amistad_solicitudes',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosMuro\\UsuariosMuroResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_muro',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosMuro\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosMuroGaleria\\UsuariosMuroGaleriaResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_muro_galeria',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosMuroGaleria\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\UsuariosMuroGaleriaModerarResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_muro_galeria_moderar',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosMuroModerar\\UsuariosMuroModerarResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_muro_moderar',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosMuroModerar\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosRoles\\UsuariosRolesResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_roles',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosRoles\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosModerar\\UsuariosModerarResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_moderar',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosModerar\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosSeguidores\\UsuariosSeguidoresResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_seguidores',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosSeguidores\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosSubCategorias\\UsuariosSubCategoriasResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_sub_categorias',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosSubCategorias\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\UsuariosMuroComentariosModerarResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'usuarios_muro_comentarios_moderar',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\BlogPost\\BlogPostResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'blog_post',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\BlogPost\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\BlogPostGaleriaModerar\\BlogPostGaleriaModerarResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'blog_post_galeria_moderar',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\BlogPostGaleriaModerar\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\BlogPostLikes\\BlogPostLikesResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'blog_post_likes',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\BlogPostLikes\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\BlogPostModerar\\BlogPostModerarResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'blog_post_moderar',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\BlogPostModerar\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\BlogPostComentariosLikes\\BlogPostComentariosLikesResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'blog_post_comentarios_likes',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\BlogPostComentariosLikes\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\BlogPostComentarios\\BlogPostComentariosResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'blog_post_comentarios',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\BlogPostComentarios\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\Chats\\ChatsResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'chats',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\Chats\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\ChatsMensajes\\ChatsMensajesResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'chats_mensajes',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\ChatsMensajes\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\Eventos\\EventosResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'eventos',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\Eventos\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\EventosComentarios\\EventosComentariosResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'eventos_comentarios',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\EventosComentarios\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\EventosCategorias\\EventosCategoriasResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'eventos_categorias',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\EventosCategorias\\Controller',
                'entity_identifier_name' => 'id_categoria',
                'table_service' => 'evt\\V1\\Rest\\EventosCategorias\\EventosCategoriasResource\\Table',
            ),
            'evt\\V1\\Rest\\EventosComentariosLikes\\EventosComentariosLikesResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'eventos_comentarios_likes',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\EventosComentariosLikes\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\BlogPostGaleria\\BlogPostGaleriaResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'blog_post_galeria',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\BlogPostGaleria\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\BlogPostComentariosModerar\\BlogPostComentariosModerarResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'blog_post_comentarios_moderar',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\BlogPostComentariosModerar\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\EventosGaleria\\EventosGaleriaResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'eventos_galeria',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\EventosGaleria\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\EventosPuntuaciones\\EventosPuntuacionesResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'eventos_puntuaciones',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\EventosPuntuaciones\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\EventosSubCategorias\\EventosSubCategoriasResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'eventos_sub_categorias',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\EventosSubCategorias\\Controller',
                'entity_identifier_name' => 'id_sub_categoria',
                'table_service' => 'evt\\V1\\Rest\\EventosSubCategorias\\EventosSubCategoriasResource\\Table',
            ),
            'evt\\V1\\Rest\\LugarCiudad\\LugarCiudadResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'lugar_ciudad',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\LugarCiudad\\Controller',
                'entity_identifier_name' => 'ciudad_id',
                'table_service' => 'evt\\V1\\Rest\\LugarCiudad\\LugarCiudadResource\\Table',
            ),
            'evt\\V1\\Rest\\EventosGanadores\\EventosGanadoresResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'eventos_ganadores',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\EventosGanadores\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\EventosLikes\\EventosLikesResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'eventos_likes',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\EventosLikes\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\LugarPais\\LugarPaisResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'lugar_pais',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\LugarPais\\Controller',
                'entity_identifier_name' => 'pais_id',
                'table_service' => 'evt\\V1\\Rest\\LugarPais\\LugarPaisResource\\Table',
            ),
            'evt\\V1\\Rest\\EventosRegistroUsuarios\\EventosRegistroUsuariosResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'eventos_registro_usuarios',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\EventosRegistroUsuarios\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'evt\\V1\\Rest\\LugarEstado\\LugarEstadoResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'lugar_estado',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\LugarEstado\\Controller',
                'entity_identifier_name' => 'estado_id',
                'table_service' => 'evt\\V1\\Rest\\LugarEstado\\LugarEstadoResource\\Table',
            ),
            'evt\\V1\\Rest\\EventosGeoUbicaciones\\EventosGeoUbicacionesResource' => array(
                'adapter_name' => 'MySql-Prueba',
                'table_name' => 'eventos_geo_ubicaciones',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'evt\\V1\\Rest\\EventosGeoUbicaciones\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'evt\\V1\\Rest\\Usuarios\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\Usuarios\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosAmistad\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosAmistad\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosMuro\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosMuro\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosMuroGaleria\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosMuroGaleria\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosBloqueo\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosBloqueo\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosMuroComentarios\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosMuroComentarios\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosModerar\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosModerar\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosSeguidores\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosSeguidores\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosSubCategorias\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosSubCategorias\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosRoles\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosRoles\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\Validator',
        ),
        'evt\\V1\\Rest\\UsuariosMuroModerar\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\UsuariosMuroModerar\\Validator',
        ),
        'evt\\V1\\Rest\\BlogPost\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\BlogPost\\Validator',
        ),
        'evt\\V1\\Rest\\BlogPostLikes\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\BlogPostLikes\\Validator',
        ),
        'evt\\V1\\Rest\\BlogPostComentariosLikes\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\BlogPostComentariosLikes\\Validator',
        ),
        'evt\\V1\\Rest\\BlogPostComentarios\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\BlogPostComentarios\\Validator',
        ),
        'evt\\V1\\Rest\\BlogPostGaleriaModerar\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\BlogPostGaleriaModerar\\Validator',
        ),
        'evt\\V1\\Rest\\Chats\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\Chats\\Validator',
        ),
        'evt\\V1\\Rest\\ChatsMensajes\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\ChatsMensajes\\Validator',
        ),
        'evt\\V1\\Rest\\EventosComentarios\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\EventosComentarios\\Validator',
        ),
        'evt\\V1\\Rest\\EventosCategorias\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\EventosCategorias\\Validator',
        ),
        'evt\\V1\\Rest\\Eventos\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\Eventos\\Validator',
        ),
        'evt\\V1\\Rest\\EventosComentariosLikes\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\EventosComentariosLikes\\Validator',
        ),
        'evt\\V1\\Rest\\BlogPostGaleria\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\BlogPostGaleria\\Validator',
        ),
        'evt\\V1\\Rest\\BlogPostComentariosModerar\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\BlogPostComentariosModerar\\Validator',
        ),
        'evt\\V1\\Rest\\EventosGaleria\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\EventosGaleria\\Validator',
        ),
        'evt\\V1\\Rest\\EventosSubCategorias\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\EventosSubCategorias\\Validator',
        ),
        'evt\\V1\\Rest\\LugarCiudad\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\LugarCiudad\\Validator',
        ),
        'evt\\V1\\Rest\\EventosGanadores\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\EventosGanadores\\Validator',
        ),
        'evt\\V1\\Rest\\EventosLikes\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\EventosLikes\\Validator',
        ),
        'evt\\V1\\Rest\\LugarEstado\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\LugarEstado\\Validator',
        ),
        'evt\\V1\\Rest\\EventosRegistroUsuarios\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\EventosRegistroUsuarios\\Validator',
        ),
        'evt\\V1\\Rest\\EventosPuntuaciones\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\EventosPuntuaciones\\Validator',
        ),
        'evt\\V1\\Rest\\EventosGeoUbicaciones\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\EventosGeoUbicaciones\\Validator',
        ),
        'evt\\V1\\Rest\\VistaPaisEstado\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\VistaPaisEstado\\Validator',
        ),
        'evt\\V1\\Rest\\LugarPais\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\LugarPais\\Validator',
        ),
        'evt\\V1\\Rest\\VistaEstadoCiudad\\Controller' => array(
            'input_filter' => 'evt\\V1\\Rest\\VistaEstadoCiudad\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'evt\\V1\\Rest\\Usuarios\\Validator' => array(
            0 => array(
                'name' => 'username',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios',
                            'field' => 'username',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
                'description' => '(string) - nombre de usuario (debe ser unico)',
                'error_message' => 'nombre de usuario no valido',
            ),
            1 => array(
                'name' => 'nombres',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
                'description' => 'nombre completo del usuario',
                'error_message' => 'Nombre del usuario no valido o no ingresado',
            ),
            2 => array(
                'name' => 'email',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\EmailAddress',
                        'options' => array(),
                    ),
                ),
                'description' => 'Direccion de correo electronico del usuario',
                'error_message' => 'Direccion de correo electronico no valida o no ingresada.',
            ),
            3 => array(
                'name' => 'phone_home',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '17',
                        ),
                    ),
                ),
                'description' => '(string) - Telefono de la casa',
            ),
            4 => array(
                'name' => 'phone_mobile',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios',
                            'field' => 'phone_mobile',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '17',
                        ),
                    ),
                ),
                'description' => '(string) - Numero de telefono movil.',
            ),
            5 => array(
                'name' => 'password',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '32',
                        ),
                    ),
                ),
                'description' => 'clave de usuario, se utiliza para iniciar sesion en el sistema',
                'error_message' => 'Clave no ingresada o superior al maximo permitido.',
            ),
            6 => array(
                'name' => 'fecha_registro',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\DateSelect',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Date',
                        'options' => array(),
                    ),
                ),
                'description' => 'Fecha de registro del usuario en el sistema',
            ),
            7 => array(
                'name' => 'fecha_de_nacimiento',
                'required' => true,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Date',
                        'options' => array(),
                    ),
                ),
                'description' => 'Fecha de nacimiento del usuario (AAAA-MM-DD)',
                'error_message' => 'fecha de nacimiento incorrecta o no proporcionada.',
            ),
            8 => array(
                'name' => 'rol',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios_roles',
                            'field' => 'rol_id',
                        ),
                    ),
                ),
                'description' => 'Rol del usuario, inidicar el id del rol que representa sus permisos.',
                'error_message' => 'identificador del rol no registrado.',
            ),
            9 => array(
                'name' => 'avatar',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
                'description' => 'Url del foto de perfil del usuario',
            ),
            10 => array(
                'name' => 'fondo',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
                'description' => 'url del fondo de perfil del usuario',
            ),
            11 => array(
                'name' => 'blocked',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
                'description' => 'Indica si un usuario esta bloqueado (1) o no (0)',
            ),
            12 => array(
                'name' => 'gender',
                'required' => true,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Regex',
                        'options' => array(
                            'pattern' => '/^(M|F)$/',
                        ),
                    ),
                ),
                'description' => 'genero del usuario, solo se acepta (masculino [M] | femenino [F])',
                'error_message' => 'valor ingresado para el genero no valido',
            ),
            13 => array(
                'name' => 'google_plus',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
                'description' => 'id de google plus del usuario',
            ),
            14 => array(
                'name' => 'facebook',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
                'description' => 'id de facebook del usuario',
            ),
            15 => array(
                'name' => 'ciudad_id',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'lugar_ciudad',
                            'field' => 'ciudad_id',
                        ),
                    ),
                ),
                'description' => 'identificador de la ciudad donde reside el usuario.',
            ),
        ),
        'evt\\V1\\Rest\\UsuariosAmistad\\Validator' => array(
            0 => array(
                'name' => 'friends_since',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\UsuariosMuroComentariosLikes\\Validator' => array(
            0 => array(
                'name' => 'liked_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\UsuariosAmistadSolicitudes\\Validator' => array(
            0 => array(
                'name' => 'requested_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\UsuariosMuro\\Validator' => array(
            0 => array(
                'name' => 'usuario_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios',
                            'field' => 'user_id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'posteado_en',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'contenido',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'deleted',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\UsuariosMuroGaleria\\Validator' => array(
            0 => array(
                'name' => 'post_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios_muro',
                            'field' => 'post_id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'posicion',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'photo',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'caption',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '100',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'deleted',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            5 => array(
                'name' => 'posteado_en',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\UsuariosBloqueo\\Validator' => array(
            0 => array(
                'name' => 'blocked_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\UsuariosMuroComentarios\\Validator' => array(
            0 => array(
                'name' => 'post_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios_muro',
                            'field' => 'post_id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'posted_by',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios',
                            'field' => 'user_id',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'reply_to',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios_muro_comentarios',
                            'field' => 'comment_id',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'posted_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'comment',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'deleted',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\UsuariosModerar\\Validator' => array(
            0 => array(
                'name' => 'reported_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'comments',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'dismissed',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\UsuariosSeguidores\\Validator' => array(
            0 => array(
                'name' => 'followed_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\UsuariosSubCategorias\\Validator' => array(),
        'evt\\V1\\Rest\\UsuariosRoles\\Validator' => array(
            0 => array(
                'name' => 'nombre_rol',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '20',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'descripcion_rol',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
        ),
        'evt\\V1\\Rest\\UsuariosMuroGaleriaModerar\\Validator' => array(
            0 => array(
                'name' => 'reported_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'comments',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'dismissed',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\UsuariosMuroComentariosModerar\\Validator' => array(
            0 => array(
                'name' => 'reported_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'comments',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'dismissed',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\UsuariosMuroModerar\\Validator' => array(
            0 => array(
                'name' => 'reported_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'comments',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'dismissed',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\BlogPost\\Validator' => array(
            0 => array(
                'name' => 'posted_by',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'posted_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'post_title',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '100',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'post_text',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
        ),
        'evt\\V1\\Rest\\BlogPostLikes\\Validator' => array(
            0 => array(
                'name' => 'liked_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\BlogPostComentariosLikes\\Validator' => array(
            0 => array(
                'name' => 'liked_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\BlogPostComentarios\\Validator' => array(
            0 => array(
                'name' => 'post_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'blog_post',
                            'field' => 'post_id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'posted_by',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios',
                            'field' => 'user_id',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'reply_to',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'blog_post_comentarios',
                            'field' => 'comment_id',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'posted_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'comment',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'deleted',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\BlogPostGaleriaModerar\\Validator' => array(
            0 => array(
                'name' => 'reported_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'comments',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'dismissed',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\Chats\\Validator' => array(
            0 => array(
                'name' => 'asunto',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '50',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'user_id_1',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios',
                            'field' => 'user_id',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'user_id_2',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios',
                            'field' => 'user_id',
                        ),
                    ),
                ),
            ),
        ),
        'evt\\V1\\Rest\\ChatsMensajes\\Validator' => array(
            0 => array(
                'name' => 'chat_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'chats',
                            'field' => 'chat_id',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '32',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'user_from',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios',
                            'field' => 'user_id',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'user_to',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios',
                            'field' => 'user_id',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'message',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'sent_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            5 => array(
                'name' => 'delivered_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            6 => array(
                'name' => 'read_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\EventosComentarios\\Validator' => array(
            0 => array(
                'name' => 'event_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'eventos',
                            'field' => 'event_id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'posted_by',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios',
                            'field' => 'user_id',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'reply_to',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'eventos_comentarios',
                            'field' => 'comment_id',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'posted_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'comment',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'deleted',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\EventosCategorias\\Validator' => array(
            0 => array(
                'name' => 'nombre_categoria',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '60',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'descripcion_categoria',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
        ),
        'evt\\V1\\Rest\\Eventos\\Validator' => array(
            0 => array(
                'name' => 'event_name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '160',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'event_description',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'event_summary',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'sub_categoria',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'eventos_sub_categorias',
                            'field' => 'id_sub_categoria',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'fecha_evento',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            5 => array(
                'name' => 'fecha_fin_registro',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            6 => array(
                'name' => 'recurrencia',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '5',
                        ),
                    ),
                ),
            ),
            7 => array(
                'name' => 'recurrencia_desde',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            8 => array(
                'name' => 'recurrencia_hasta',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            9 => array(
                'name' => 'direccion',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            10 => array(
                'name' => 'lugar_encuentro',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            11 => array(
                'name' => 'ciudad_id',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'lugar_ciudad',
                            'field' => 'ciudad_id',
                        ),
                    ),
                ),
            ),
            12 => array(
                'name' => 'aforo',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            13 => array(
                'name' => 'plazas',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            14 => array(
                'name' => 'precio',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            15 => array(
                'name' => 'usuario_organizador',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios',
                            'field' => 'user_id',
                        ),
                    ),
                ),
            ),
            16 => array(
                'name' => 'jurado',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '100',
                        ),
                    ),
                ),
            ),
            17 => array(
                'name' => 'edad_recomendada',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            18 => array(
                'name' => 'sexo_recomendado',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            19 => array(
                'name' => 'permite_comentarios',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            20 => array(
                'name' => 'terminos_condiciones',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            21 => array(
                'name' => 'creado_en',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            22 => array(
                'name' => 'pagina_web',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '160',
                        ),
                    ),
                ),
            ),
            23 => array(
                'name' => 'mostrar_comentarios',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            24 => array(
                'name' => 'mostrar_inscritos',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\EventosComentariosLikes\\Validator' => array(
            0 => array(
                'name' => 'liked_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\BlogPostGaleria\\Validator' => array(
            0 => array(
                'name' => 'post_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'blog_post',
                            'field' => 'post_id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'posicion',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'photo',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'caption',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '100',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'deleted',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            5 => array(
                'name' => 'posteado_en',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\BlogPostComentariosModerar\\Validator' => array(
            0 => array(
                'name' => 'reported_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'comments',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'dismissed',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\EventosGaleria\\Validator' => array(
            0 => array(
                'name' => 'event_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'eventos',
                            'field' => 'event_id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'posicion',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'photo',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'caption',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '100',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'deleted',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            5 => array(
                'name' => 'posteado_en',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\EventosSubCategorias\\Validator' => array(
            0 => array(
                'name' => 'id_categoria',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'eventos_categorias',
                            'field' => 'id_categoria',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'nombre_sub_categoria',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '60',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'descripcion_sub_categoria',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
        ),
        'evt\\V1\\Rest\\LugarCiudad\\Validator' => array(
            0 => array(
                'name' => 'estado_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'lugar_estado',
                            'field' => 'estado_id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'descripcion',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '50',
                        ),
                    ),
                ),
            ),
        ),
        'evt\\V1\\Rest\\EventosGanadores\\Validator' => array(
            0 => array(
                'name' => 'user_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'lugar',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'creado_en',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\EventosLikes\\Validator' => array(
            0 => array(
                'name' => 'liked_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\LugarEstado\\Validator' => array(
            0 => array(
                'name' => 'pais_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'lugar_pais',
                            'field' => 'pais_id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'descripcion',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '50',
                        ),
                    ),
                ),
            ),
        ),
        'evt\\V1\\Rest\\EventosRegistroUsuarios\\Validator' => array(
            0 => array(
                'name' => 'event_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'eventos',
                            'field' => 'event_id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'user_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'registrado_en',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'acepto_terminos',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'asistencia',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            5 => array(
                'name' => 'photo',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'monto',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            7 => array(
                'name' => 'forma_pago',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '10',
                        ),
                    ),
                ),
            ),
        ),
        'evt\\V1\\Rest\\EventosPuntuaciones\\Validator' => array(
            0 => array(
                'name' => 'event_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'eventos',
                            'field' => 'event_id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'posted_by',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'usuarios',
                            'field' => 'user_id',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'posted_on',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'score',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'comment',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'deleted',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\EventosGeoUbicaciones\\Validator' => array(
            0 => array(
                'name' => 'event_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySql-Prueba',
                            'table' => 'eventos',
                            'field' => 'event_id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'orden',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'latitud',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'longitud',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'evt\\V1\\Rest\\VistaPaisEstado\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\ToInt',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Whitelist',
                        'options' => array(),
                    ),
                ),
                'name' => 'pais_id',
            ),
        ),
        'evt\\V1\\Rest\\LugarPais\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'descripcion',
            ),
        ),
        'evt\\V1\\Rest\\VistaEstadoCiudad\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\ToInt',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Whitelist',
                        'options' => array(),
                    ),
                ),
                'name' => 'estado_id',
            ),
        ),
    ),
    'service_manager' => array(
        'invokables' => array(),
    ),
);

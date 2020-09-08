<?php return [
    'plugin'   => [
        'name'                       => 'Speedy',
        'description'                => 'Accélérez votre site web',
        'author'                     => 'OFFLINE LLC',
        'manage_settings'            => 'Gérer les réglages de Speedy',
        'manage_settings_permission' => 'Peut gérer les réglages de Speedy',
    ],
    'settings' => [
        'quick_hacks'                             => 'Améliorations simples',
        'quick_hacks_comment'                     => 'Ces améliorations simples peuvent être activées sans configuration supplémentaire de votre serveur.',
        'enable_http2'                            => 'Activer le préchargement HTTP/2',
        'enable_http2_comment'                    => 'Des en-têtes de lien pour précharger les images, les fichiers CSS et JS sont générés pour chaque requête. Nécessite un serveur compatible HTTP/2.',
        'enable_caching'                          => 'Activer la mise en cache',
        'enable_caching_comment'                  => 'Ajoute des en-têtes d\'expiration pour les images, les polices, les fichiers CSS et JS. (Attention : Activez ce paramètre uniquement dans les environnements de production pour éviter les problèmes de mise en cache lors du développement.)',
        'enable_domain_sharding'                  => 'Activer le "sharding" de domaine',
        'enable_domain_sharding_comment'          => 'L\'URL de base de tous les liens vers votre dossier de thème sera réécrit avec une autre URL.',
        'enable_domain_sharding_in_debug'         => 'Activer le "sharding" quand le mode debug est activé.',
        'enable_domain_sharding_in_debug_comment' => 'Par défaut, le "sharding" de domaine ne sera actif que lorsque le mode débogage est désactivé.',
        'domain_sharding_cdn_domain'              => 'Domaine alternatif',
        'domain_sharding_cdn_domain_comment'      => 'Tous les fichiers sont chargés à partir de cette URL. Veuillez consulter la boîte à droite pour plus d\'informations.',
        'enable_gzip'                             => 'Activer Gzip',
        'enable_gzip_comment'                     => 'Les fichiers sont compressés à l\'aide de Gzip. Apache mod_gzip doit être installé sur votre serveur.',
        'domain_sharding_section'                 => '"Sharding" de domaine',
        'domain_sharding_section_comment'         => 'Chargez vos fichiers à partir d\'un domaine alternatif. Cette option est redondante si vous utilisez déjà HTTP/2.',
    ],
    'sharding' => [
        'info_heading'    => 'Etapes nécessaires à la mise en place du "sharding" de domaine',
        'info_subheading' => 'Veuillez lire attentivement ces informations avant d\'activer le réglage !',
        'info_text'       => 'Assurez-vous que votre site Web est accessible via le domaine alternatif. Vous pouvez le faire en créant un enregistrement CNAME pour cdn.example.com qui pointe vers www.example.com. Vous pouvez également créer un sous-domaine qui pointe vers le même dossier racine que votre domaine principal.',
    ],
];
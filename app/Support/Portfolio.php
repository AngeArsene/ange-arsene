<?php

namespace App\Support;

final class Portfolio
{
    /** @return array<string, mixed> */
    public static function page(string $locale, string $page): array
    {
        $content = self::content()[$locale] ?? self::content()['en'];

        return compact('locale', 'page', 'content') + [
            'skills' => self::skills(),
            'experience' => self::experience(),
            'education' => self::education(),
            'projects' => self::projects($locale),
            'channels' => self::channels(),
        ];
    }

    /** @return array<string, array<string, string>> */
    private static function content(): array
    {
        return [
            'en' => [
                'home_label' => 'Home', 'about_label' => 'About', 'work_label' => 'Selected work',
                'experience_label' => 'Experience', 'contact_label' => 'Contact',
                'eyebrow' => 'Full-stack engineer · Douala, Cameroon',
                'headline' => 'I build useful digital products with a point of view.',
                'intro' => 'Full-Stack Engineer working across WordPress, Laravel, React and the integrations that make digital businesses move.',
                'view_work' => 'View selected work', 'contact_cta' => 'Start a conversation',
                'download_resume' => 'Download resume', 'availability' => 'Available for selected projects',
                'about_heading' => 'A practical engineer with a designer\'s eye.',
                'about_body' => 'I help teams turn rough ideas into responsive websites, dependable workflows and full-stack applications. My work sits between thoughtful interfaces and the systems that keep them running.',
                'work_heading' => 'Selected work, numbered and honest.',
                'experience_heading' => 'A timeline of building, learning and shipping.',
                'contact_heading' => 'Have a project in mind? Let\'s make it clear.',
                'contact_body' => 'Tell me what you are building, where it is stuck, or what you want to improve. I will reply by email.',
                'send_message' => 'Send message', 'name' => 'Your name', 'email' => 'Email address',
                'message' => 'Project description', 'footer_quote' => 'Good work should feel considered before it feels complete.',
                'filter_all' => 'All', 'filter_websites' => 'Websites', 'filter_apps' => 'Full-Stack Apps', 'filter_packages' => 'Packages',
                'open_project' => 'Open project',
            ],
            'fr' => [
                'home_label' => 'Accueil', 'about_label' => 'À propos', 'work_label' => 'Projets sélectionnés',
                'experience_label' => 'Expérience', 'contact_label' => 'Contact',
                'eyebrow' => 'Ingénieur full-stack · Douala, Cameroun',
                'headline' => 'Je construis des produits numériques utiles, avec une vraie direction.',
                'intro' => 'Ingénieur Full-Stack, entre WordPress, Laravel, React et les intégrations qui font avancer les entreprises numériques.',
                'view_work' => 'Voir les projets', 'contact_cta' => 'Démarrer une conversation',
                'download_resume' => 'Télécharger le CV', 'availability' => 'Disponible pour des projets choisis',
                'about_heading' => 'Un ingénieur pragmatique, avec un regard de designer.',
                'about_body' => 'J\'aide les équipes à transformer des idées brutes en sites réactifs, workflows fiables et applications full-stack. Mon travail relie des interfaces soignées aux systèmes qui les font vivre.',
                'work_heading' => 'Des projets choisis, numérotés et honnêtes.',
                'experience_heading' => 'Une trajectoire faite de construction, d\'apprentissage et de livraison.',
                'contact_heading' => 'Un projet en tête ? Rendons-le concret.',
                'contact_body' => 'Dites-moi ce que vous construisez, ce qui bloque ou ce que vous souhaitez améliorer. Je vous répondrai par email.',
                'send_message' => 'Envoyer le message', 'name' => 'Votre nom', 'email' => 'Adresse email',
                'message' => 'Description du projet', 'footer_quote' => 'Un bon travail doit être réfléchi avant d\'être terminé.',
                'filter_all' => 'Tous', 'filter_websites' => 'Sites web', 'filter_apps' => 'Applications full-stack', 'filter_packages' => 'Packages',
                'open_project' => 'Voir le projet',
            ],
        ];
    }

    /** @return list<array{name: string, category: string, proficiency: int}> */
    private static function skills(): array
    {
        return [
            ['name' => 'PHP / Laravel', 'category' => 'Backend', 'proficiency' => 92],
            ['name' => 'WordPress / Elementor', 'category' => 'CMS', 'proficiency' => 95],
            ['name' => 'React / Inertia.js', 'category' => 'Frontend', 'proficiency' => 82],
            ['name' => 'Payment APIs', 'category' => 'Integrations', 'proficiency' => 86],
            ['name' => 'Technical SEO', 'category' => 'Optimization', 'proficiency' => 78],
            ['name' => 'Docker / Git', 'category' => 'Tools', 'proficiency' => 76],
        ];
    }

    /** @return list<array<string, mixed>> */
    private static function experience(): array
    {
        return [
            ['company' => 'NuBet', 'role' => 'WordPress & Elementor Developer / Integrator', 'period' => 'Jan 2026 – Present', 'location' => 'Remote', 'summary' => 'Integrating polished responsive interfaces in WordPress while improving performance, SEO, security and maintenance workflows.', 'technologies' => ['WordPress', 'Elementor Pro', 'SEO', 'Performance']],
            ['company' => 'Allready 237 Sarl', 'role' => 'PHP Backend Developer & WordPress Developer', 'period' => 'Sep 2023 – Jan 2026', 'location' => 'Douala, Cameroon', 'summary' => 'Built e-commerce and automation systems across WordPress, Laravel, React and payment integrations for local commerce.', 'technologies' => ['Laravel', 'React', 'WooCommerce', 'Smobilpay']],
            ['company' => 'BJFT Academy', 'role' => 'Web Development Intern', 'period' => 'Apr 2022 – Sep 2022', 'location' => 'Douala, Cameroon', 'summary' => 'Supported responsive WordPress builds, frontend improvements, research and Agile delivery practices.', 'technologies' => ['WordPress', 'Frontend', 'Agile']],
        ];
    }

    /** @return list<array<string, string>> */
    private static function education(): array
    {
        return [
            ['institution' => 'I.U.G – I.S.T.A', 'degree' => 'Higher National Diploma, Software Engineering', 'period' => 'Oct 2022 – Jun 2024', 'location' => 'Cameroon'],
            ['institution' => 'G.B.H.S Génie Militaire', 'degree' => 'GCE Advanced Level, Science & Mathematics', 'period' => '2021', 'location' => 'Cameroon'],
        ];
    }

    /** @return list<array<string, mixed>> */
    private static function projects(string $locale): array
    {
        $isFrench = $locale === 'fr';

        return [
            ['number' => '01', 'category_key' => 'websites', 'category' => $isFrench ? 'Sites web' : 'Websites', 'title' => 'Chaudronnerie Tuyauterie St Laurent', 'description' => $isFrench ? 'Site professionnel pour Chaudronnerie Tuyauterie St Laurent.' : 'Professional website for Chaudronnerie Tuyauterie St Laurent.', 'tags' => ['WordPress', 'Elementor'], 'url' => 'https://chaudronneriestlaurent.gogency.fr/'],
            ['number' => '02', 'category_key' => 'websites', 'category' => $isFrench ? 'Sites web' : 'Websites', 'title' => 'Le Four à Bois', 'description' => $isFrench ? 'Site du restaurant Le Four à Bois.' : 'Restaurant website for Le Four à Bois.', 'tags' => ['WordPress', 'Elementor'], 'url' => 'https://four-a-bois.gogency.fr/'],
            ['number' => '03', 'category_key' => 'websites', 'category' => $isFrench ? 'Sites web' : 'Websites', 'title' => 'Pony Gones', 'description' => $isFrench ? 'Site professionnel pour Pony Gones.' : 'Website for Pony Gones.', 'tags' => ['WordPress', 'Responsive Design'], 'url' => 'https://www.pony-gones69.fr/'],
            ['number' => '04', 'category_key' => 'websites', 'category' => $isFrench ? 'Sites web' : 'Websites', 'title' => 'Dynam’Êcens', 'description' => $isFrench ? 'Site professionnel pour Dynam’Êcens.' : 'Professional website for Dynam’Êcens.', 'tags' => ['WordPress', 'Elementor'], 'url' => 'https://dynamecens-86.gogency.fr/'],
            ['number' => '05', 'category_key' => 'websites', 'category' => $isFrench ? 'Sites web' : 'Websites', 'title' => 'Iroise Demolition', 'description' => $isFrench ? 'Site professionnel pour Iroise Demolition.' : 'Website for Iroise Demolition.', 'tags' => ['WordPress', 'Responsive Design'], 'url' => 'https://iroise-demolition.gogency.fr/'],
            ['number' => '06', 'category_key' => 'websites', 'category' => $isFrench ? 'Sites web' : 'Websites', 'title' => 'LC MECA', 'description' => $isFrench ? 'Site professionnel pour LC MECA.' : 'Professional website for LC MECA.', 'tags' => ['WordPress', 'Elementor'], 'url' => 'https://lcmeca.gogency.fr/'],
            ['number' => '07', 'category_key' => 'websites', 'category' => $isFrench ? 'Sites web' : 'Websites', 'title' => 'Institut Beauté Nature Zen', 'description' => $isFrench ? 'Site de l’Institut Beauté Nature Zen à Ilharre.' : 'Website for Institut Beauté Nature Zen in Ilharre.', 'tags' => ['WordPress', 'Responsive Design'], 'url' => 'https://www.nature-zen-esthetique-ilharre.fr/'],
            ['number' => '08', 'category_key' => 'websites', 'category' => $isFrench ? 'Sites web' : 'Websites', 'title' => 'EMDG', 'description' => $isFrench ? 'Site professionnel pour EMDG.' : 'Professional website for EMDG.', 'tags' => ['WordPress', 'Elementor'], 'url' => 'https://www.emdg.fr/'],
            ['number' => '09', 'category_key' => 'websites', 'category' => $isFrench ? 'Sites web' : 'Websites', 'title' => 'The WoodLintz Company', 'description' => $isFrench ? 'Site professionnel pour The WoodLintz Company.' : 'Website for The WoodLintz Company.', 'tags' => ['WordPress', 'Responsive Design'], 'url' => 'https://woodlintz.fr/'],
            ['number' => '10', 'category_key' => 'websites', 'category' => $isFrench ? 'Sites web' : 'Websites', 'title' => 'Le 19 Cent 73', 'description' => $isFrench ? 'Site du restaurant Le 19 Cent 73.' : 'Restaurant website for Le 19 Cent 73.', 'tags' => ['WordPress', 'Elementor'], 'url' => 'https://restaurant-le-19cent73.gogency.fr/'],
            ['number' => '01', 'category_key' => 'apps', 'category' => $isFrench ? 'Applications full-stack' : 'Full-Stack Apps', 'title' => 'Chirper', 'description' => $isFrench ? 'Application sociale Laravel avec likes, favoris, policies, limitation de débit et workflows testés.' : 'Laravel social app with likes, bookmarks, policies, rate limiting and tested workflows.', 'tags' => ['Laravel', 'PHP', 'Pest'], 'url' => 'https://github.com/AngeArsene/chirper'],
            ['number' => '02', 'category_key' => 'apps', 'category' => $isFrench ? 'Applications full-stack' : 'Full-Stack Apps', 'title' => 'Car Findal Service', 'description' => $isFrench ? 'Application full-stack dédiée à la recherche de véhicules.' : 'Full-stack application project for a car-finding service.', 'tags' => ['PHP', 'Web App'], 'url' => 'https://github.com/AngeArsene/Car_Findal_Service'],
            ['number' => '03', 'category_key' => 'apps', 'category' => $isFrench ? 'Applications full-stack' : 'Full-Stack Apps', 'title' => 'WhatsApp Campaign Hub', 'description' => $isFrench ? 'Application WhatsApp pour les campagnes et la gestion des contacts.' : 'WhatsApp marketing application for campaign and contact workflows.', 'tags' => ['Laravel', 'WhatsApp API'], 'url' => 'https://github.com/AngeArsene/WhatsApp_Campaign_Hub'],
            ['number' => '04', 'category_key' => 'apps', 'category' => $isFrench ? 'Applications full-stack' : 'Full-Stack Apps', 'title' => 'TaskFlow', 'description' => $isFrench ? 'Application de gestion des tâches et des workflows.' : 'Task and workflow management application.', 'tags' => ['Laravel', 'React'], 'url' => 'https://github.com/AngeArsene/TaskFlow'],
            ['number' => '05', 'category_key' => 'apps', 'category' => $isFrench ? 'Applications full-stack' : 'Full-Stack Apps', 'title' => 'Attendance Monitoring System', 'description' => $isFrench ? 'Application de gestion et de suivi des présences.' : 'Application for managing and monitoring attendance records.', 'tags' => ['PHP', 'Web App'], 'url' => 'https://github.com/AngeArsene/Attendance-Monitoring-System'],
            ['number' => '01', 'category_key' => 'packages', 'category' => $isFrench ? 'Packages' : 'Packages', 'title' => 'chat', 'description' => $isFrench ? 'Package réutilisable publié sur GitHub.' : 'Reusable package project published on GitHub.', 'tags' => ['PHP', 'Package'], 'url' => 'https://github.com/AngeArsene/chat'],
            ['number' => '02', 'category_key' => 'packages', 'category' => $isFrench ? 'Packages' : 'Packages', 'title' => 'woowa-webhooks', 'description' => $isFrench ? 'Package de webhooks réutilisable publié sur GitHub.' : 'Reusable webhook package project published on GitHub.', 'tags' => ['PHP', 'Webhooks'], 'url' => 'https://github.com/AngeArsene/woowa-webhooks'],
            ['number' => '03', 'category_key' => 'packages', 'category' => $isFrench ? 'Packages' : 'Packages', 'title' => 'wc-smobilpay', 'description' => $isFrench ? 'Intégration WooCommerce Smobilpay pour les paiements mobile money.' : 'WooCommerce Smobilpay integration package for mobile-money payments.', 'tags' => ['PHP', 'WooCommerce', 'Smobilpay'], 'url' => 'https://github.com/AngeArsene/wc-smobilpay'],
            ['number' => '04', 'category_key' => 'packages', 'category' => $isFrench ? 'Packages' : 'Packages', 'title' => 'PHP MVC Framework', 'description' => $isFrench ? 'Framework MVC PHP léger pour créer des bases applicatives réutilisables.' : 'Lightweight PHP MVC framework project built for reusable application foundations.', 'tags' => ['PHP', 'MVC'], 'url' => 'https://github.com/AngeArsene/php_mvc_framework'],
        ];
    }

    /** @return list<array{type: string, value: string, label: string}> */
    private static function channels(): array
    {
        return [
            ['type' => 'email', 'value' => 'nkenmandenga@gmail.com', 'label' => 'nkenmandenga@gmail.com'],
            ['type' => 'phone', 'value' => '+237699512438', 'label' => '+237 699 512 438'],
            ['type' => 'linkedin', 'value' => 'https://linkedin.com/in/ange-arsene-nken-mandeng-58895827a/', 'label' => 'LinkedIn'],
            ['type' => 'github', 'value' => 'https://github.com/AngeArsene', 'label' => 'GitHub'],
        ];
    }
}

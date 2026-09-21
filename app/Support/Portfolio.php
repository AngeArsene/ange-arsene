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
            'projects' => self::projects(),
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
    private static function projects(): array
    {
        return [
            ['number' => '01', 'category' => 'Websites', 'title' => 'AllReady237', 'description' => 'Multi-vendor e-commerce platform active in Douala and Yaoundé.', 'tags' => ['WordPress', 'WooCommerce', 'WCFM'], 'url' => null],
            ['number' => '02', 'category' => 'Websites', 'title' => 'Optimum Fly', 'description' => 'Bilingual website for a Cameroon-based visa and immigration company.', 'tags' => ['WordPress', 'Elementor', 'FR / EN'], 'url' => null],
            ['number' => '03', 'category' => 'Websites', 'title' => 'Arno But', 'description' => 'E-commerce platform for personalized clothing solutions online.', 'tags' => ['WordPress', 'E-commerce'], 'url' => null],
            ['number' => '04', 'category' => 'Full-Stack Apps', 'title' => 'Task Management System', 'description' => 'Laravel and React workspace with drag-and-drop interactions and Zustand state management.', 'tags' => ['Laravel', 'React', 'Zustand'], 'url' => null],
            ['number' => '05', 'category' => 'Full-Stack Apps', 'title' => 'Chirper', 'description' => 'Laravel social app with likes, bookmarks, policies, rate limiting and tested workflows.', 'tags' => ['Laravel', 'PHP', 'Pest'], 'url' => 'https://github.com/AngeArsene/chirper'],
            ['number' => '06', 'category' => 'Packages', 'title' => 'WooCommerce Smobilpay Gateway', 'description' => 'Payment gateway plugin for MTN MoMo and Orange Money transactions.', 'tags' => ['PHP', 'WordPress', 'Smobilpay'], 'url' => null],
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

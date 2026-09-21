# Build Specification: Ange Arsene Portfolio

Build a production-ready bilingual portfolio for **Nken Mandeng Ange Arsene** in the existing Laravel 13, Laravel Folio, Vite, Tailwind CSS v4, and Fontaine project. This document is self-contained: follow it as the source of truth and do not add another frontend framework, a new build pipeline, invented career facts, fake links, or placeholder content.

## 1. Product and visual direction

### Goal

Present Ange Arsene as a full-stack engineer and WordPress/Elementor developer, make verified work easy to explore, provide both resumes, and create clear paths to contact him. The primary audiences are prospective clients, recruiters, and technical collaborators.

### Visual voice: Structural

Use the **Structural (Truss-derived) voice** from `docs/design-system/ai-design-system.md`. A cyan accent on a deep navy canvas best supports a portfolio that must communicate engineering precision, systems thinking, dependable WordPress delivery, and real integrations. It also deliberately improves on the old all-navy single-page reference without copying its layout or using a competing violet/rose accent.

Apply these non-negotiable tokens:

```text
canvas       #0B1A2B     surface       #0F2338
surface-alt  #16324E     border        #22496B
border-strong #4681B2    text          #D7E7F4
text-muted   #7FA2C0     accent        #5FD0E6
accent-bright #7FE0F2    on-accent     #0B1A2B
success      #5FE6A8     warning       #C9A24A
info         #4C6FE0
```

- Use an 4px-based spacing scale: `4, 8, 12, 16, 20, 24, 32, 40, 56, 80`.
- Use a humanist sans for body copy and a local/system monospace stack for display headings, labels, buttons, metadata, and badges. Do not add a new font dependency.
- Use flat surfaces, 1px hairline borders, 8px buttons, 12-16px cards, and no box shadows or large accent-colored surfaces.
- Add the low-opacity structural grid only behind the hero and closing CTA/footer. Use no more than four small `+`/corner-bracket decorative marks per page.
- Use exactly one accent-coloured phrase in each major heading. Keep the rest of that heading in primary text.

### Required component mapping

| Portfolio component | Design-system treatment |
| --- | --- |
| Header/footer | Canvas background, bottom/top hairline border, compact monospace labels, cyan active state. |
| Primary CTA | Filled cyan, dark text, 42-44px height, 8px radius. |
| Secondary CTA | Transparent structural outline; never adjacent to another filled CTA. |
| Project/site card | Flat `surface` card, 1px border, 12-16px radius; optional screenshot at top, title/summary, outlined technology badges, then verified CTA. |
| Experience | Structured timeline plus a bordered card. Role/company header, location/date metadata in monospace, achievement list, technology badges. |
| Skill groups | Dense bordered grid cards; use a small category label and outlined technology badges, not percentage bars. |
| Contact form | Dark surface fields, visible cyan focus border, inline field errors, status callout with text plus icon. |
| Project filter tabs | Flat row with cyan underline and brighter text for selected tab. |
| Status | Small labelled badge (`LIVE`, `SOURCE`, `PRIVATE`, `SENT`) plus icon/text; never colour alone. |

## 2. Routes, navigation, and responsive layout

Implement five locale-prefixed Folio pages with routes `/fr/...` and `/en/...`; redirect `/` to `/fr`. Store the selected locale in the session/cookie and ensure the language control sends visitors to the equivalent locale route. The primary nav order is **Home, About, Experience, Projects, Contact**; Contact is always last.

| Route | Purpose and required content | EN metadata title | FR metadata title |
| --- | --- | --- | --- |
| `/[locale]` | Hero, brief proof points, selected work, compact skills preview, CTA band. | `Ange Arsene | Full-Stack & WordPress Developer` | `Ange Arsene | Développeur Full-Stack & WordPress` |
| `/[locale]/about` | Full bilingual bio, all skills, education, working style/languages. | `About Ange Arsene | Full-Stack Developer` | `À propos d'Ange Arsene | Développeur Full-Stack` |
| `/[locale]/experience` | Complete chronological experience and education link. | `Experience | Ange Arsene` | `Expérience | Ange Arsene` |
| `/[locale]/projects` | Filterable Websites, Web Apps, and Packages catalog. | `Projects | Ange Arsene` | `Projets | Ange Arsene` |
| `/[locale]/contact` | Contact channels, functional form, social links, response expectations. | `Contact Ange Arsene | Start a Project` | `Contacter Ange Arsene | Démarrer un projet` |

Every page shares a sticky header, language switcher, GitHub external link, a visible resume control, a closing CTA band, and a dense footer. The resume control opens a small menu with both files: `/downloads/Ange_Arsene_Resume.pdf` (English) and `/downloads/Ange_Arsene_Resume_FR.pdf` (French); the control defaults to the current locale. Copy the source files currently in `C:\Users\WINDOWS10\Downloads\` into `public/downloads/` before wiring these links.

Desktop uses a 12-column layout and a maximum 1080px hero/content container. At 1024px, collapse header navigation into an accessible menu button and move card grids from three to two columns. At 640px, use one-column cards, full-width CTAs, a compact language/resume cluster, and readable 16px body text. Preserve keyboard access and visible focus at every size.

Add two fixed controls on every route: WhatsApp above Call, both on the bottom-right, `z-index` above content but below dialogs. Use `https://wa.me/237699512438` and `tel:+237699512438`. Set `right: 16px; bottom: 16px` on mobile, `right: 24px; bottom: 24px` on tablet/desktop, with an 8px vertical gap. Reserve equivalent bottom padding in page/footer content so neither control obscures it.

## 3. Content architecture

Keep site content in a single versioned PHP configuration/data class, for example `app/Support/PortfolioData.php`, rather than database models and seeders. The portfolio is editorially static, has no admin UI, and a typed PHP data structure keeps translations, verified URLs, and asset references colocated and simple to test. Controllers/pages must read the data; Blade must not contain the canonical datasets.

Use these schemas consistently:

```text
Skill:          name, category, proficiency|null, icon
Experience:     company, role, location, start_date, end_date_or_present, summary, achievements[], technologies[]
Education:      institution, degree, location, start_year|null, end_year
Website:        title, thumbnail_image, description, technologies[], live_url, github_url|null
FullStackApp:   title, thumbnail_image, description, technologies[], live_url|null, github_url|null
Package:        title, thumbnail_image, description, technologies[], github_url, live_url|null
ContactChannel: type, value, display_label
```

Each user-facing textual field is an `{en, fr}` translation pair. Dates, URL strings, technology names, image paths, and contact values are locale-neutral. `thumbnail_image` must contain a local final asset path, never a blank or an unsourced remote image.

### Identity and contact data

```yaml
name: Nken Mandeng Ange Arsene
short_name: Ange Arsene
location: Douala, Cameroon
email: nkenmandenga@gmail.com
phone: '+237 699 512 438'
linkedin: https://www.linkedin.com/in/ange-arsene-nken-mandeng-58895827a/
github: https://github.com/AngeArsene
previous_portfolio: https://angearsene.github.io/portfolio/
languages: [French (native), English (professional working proficiency)]
contact_channels:
  - { type: email, value: nkenmandenga@gmail.com, display_label: Email }
  - { type: phone, value: '+237 699 512 438', display_label: Phone }
  - { type: whatsapp, value: https://wa.me/237699512438, display_label: WhatsApp }
  - { type: linkedin, value: https://www.linkedin.com/in/ange-arsene-nken-mandeng-58895827a/, display_label: LinkedIn }
  - { type: github, value: https://github.com/AngeArsene, display_label: GitHub }
```

Use the following bio as the factual boundary. EN: “Full-Stack Engineer with 3+ years of experience building WordPress/Elementor/WP Bakery sites and full-stack web apps with Laravel, React and Inertia.js. Strong background in payment-gateway integrations, WhatsApp API automation, e-commerce, performance optimisation, technical SEO and WordPress security. Native French speaker with professional English proficiency; comfortable delivering end-to-end in remote-first work.” FR must say the same facts without adding claims, metrics, client names, or availability not supplied here.

### Skills

| Category | Skills |
| --- | --- |
| Backend | PHP, Laravel 11+, MySQL, Eloquent ORM, Queues, Notifications, REST APIs, SQLite, PostgreSQL |
| Frontend | React.js, Inertia.js, Tailwind CSS, Zustand, HTML5, CSS3, Responsive Design |
| WordPress / CMS | WordPress, Elementor, Elementor Pro, WooCommerce, WCFM, WP Bakery, Gutenberg, plugin development, theme customization, template systems |
| APIs & Integrations | MTN Mobile Money API, Orange Money / Smobilpay S3P API, WhatsApp API, Webhooks, Google Sheets Integration |
| Optimisation & Security | Performance tuning, caching, image compression, minification, technical SEO, WordPress hardening & backups, site migrations |
| Tools & Practices | Git, GitHub, Docker, Postman, Conventional Commits, GitHub Flow, Laravel Pint / PSR-12, PHPUnit/Pest |

Set `proficiency` to `null` for every skill: no proficiency measurement was supplied. Use a relevant line icon for `icon`; never represent an unverified proficiency level as a bar or percentage.

### Experience and education

Populate these entries in most-recent-first order, translating all role names, summaries, and achievements:

1. **NuBet** — WordPress & Elementor Developer / Integrator; Remote; January 2026-Present. Summary: translates UI/UX mockups into modern fully responsive WordPress/Elementor builds. Achievements: theme adaptation/customisation and display fixes; performance work through caching, image compression, and CSS/JS minification plus SEO practices; install security, maintenance, backups and migrations; collaboration, client support, bug fixes and technology watch. Technologies: WordPress, Elementor, Elementor Pro, PHP, JavaScript, HTML5, CSS3, caching, technical SEO.
2. **Allready 237 Sarl** — PHP Backend Developer & WordPress Developer; Douala, Cameroon; September 2023-January 2026. Summary: delivered end-to-end products across WordPress/WooCommerce and Laravel/React/Inertia. Achievements: built multi-vendor e-commerce with WCFM, WP Bakery and Woodmart; integrated MTN Mobile Money and Orange Money via Smobilpay S3P with webhooks and bilingual notifications; built React/Inertia responsive interfaces; automated WhatsApp Excel validation/segmentation and Google Sheets prospecting workflows; collaborated on product, architecture and UX while retaining clean, testable code. Technologies: PHP, Laravel, React, Inertia.js, WordPress, WooCommerce, WCFM, WP Bakery, Smobilpay S3P API, MTN MoMo, Orange Money, WhatsApp API, Google Sheets.
3. **BJFT Academy** — Web Development Intern; Douala, Cameroon; April 2022-September 2022. Summary: supported responsive WordPress delivery. Achievements: WordPress websites and frontend customisations; research and documentation; Agile code reviews and sprint planning. Technologies: WordPress, HTML5, CSS3, JavaScript, Agile.

Education: **Higher National Diploma (HND), Software Engineering**, I.U.G - I.S.T.A, Cameroon, October 2022-June 2024; and **GCE Advanced Level, Science & Mathematics**, G.B.H.S Genie Militaire, Cameroon, 2021. Do not fabricate a start year for the latter.

### Projects

The following list supersedes old portfolio entries. Do **not** add AllReady237 or Optimum Fly: both are down. Preserve the precise URLs below. Website descriptions should name only the publicly evident business sector until the owner provides a richer case-study brief; do not claim product features from inference. App/package summaries may use only the repository title plus the verified README facts below.

#### Websites

| Title | live_url | Description / technologies | Asset state |
| --- | --- | --- | --- |
| Chaudronnerie Tuyauterie St Laurent | https://chaudronneriestlaurent.gogency.fr/ | French industrial metalwork/piping business website. Tags: WordPress, Elementor, Responsive Design. | Capture current site after confirming permission. |
| Le Four a Bois | https://four-a-bois.gogency.fr/ | French wood-fired oven business website. Tags: WordPress, Elementor, Responsive Design. | Capture current site after confirming permission. |
| Pony Gones | https://www.pony-gones69.fr/ | French pony/equestrian business website. Tags: WordPress, Elementor, Responsive Design. | Capture current site after confirming permission. |
| Dynam'Êcens | https://dynamecens-86.gogency.fr/ | Business website. Tags: WordPress, Elementor, Responsive Design. | Capture current site after confirming permission. |
| Iroise Demolition | https://iroise-demolition.gogency.fr/ | Demolition business website. Tags: WordPress, Elementor, Responsive Design. | Capture current site after confirming permission. |
| LC Meca | https://lcmeca.gogency.fr/ | Mechanical-services business website. Tags: WordPress, Elementor, Responsive Design. | Capture current site after confirming permission. |
| Institut Beaute Nature Zen | https://www.nature-zen-esthetique-ilharre.fr/ | Beauty/wellness institute website. Tags: WordPress, Elementor, Responsive Design. | Capture current site after confirming permission. |
| EMDG | https://www.emdg.fr/ | Business website. Tags: WordPress, Elementor, Responsive Design. | Capture current site after confirming permission. |
| The WoodLintz Company | https://woodlintz.fr/ | Business website. Tags: WordPress, Elementor, Responsive Design. | Capture current site after confirming permission. |
| Le 19 Cent 73 | https://restaurant-le-19cent73.gogency.fr/ | Restaurant website. Tags: WordPress, Elementor, Responsive Design. | Capture current site after confirming permission. |

Every Website has `github_url: null`. Its CTA says `Visit website` / `Voir le site` and opens the specified URL in a new tab with `rel="noopener noreferrer"`.

#### Full-stack apps

| Title | github_url | Description | Technologies | Asset state |
| --- | --- | --- | --- | --- |
| Chirper | https://github.com/AngeArsene/chirper | Laravel 13 microblogging application with a paginated social feed, authentication, profile management, policies and protected ownership actions. | Laravel 13, Blade, Tailwind CSS v4, SQLite, PHP | Generate a local abstract terminal/code thumbnail; do not pretend it is a product screenshot. |
| Car Findal Service | https://github.com/AngeArsene/Car_Findal_Service | Public repository; no verified functional description supplied. | Use only technologies visible in its repository at implementation time. | Generate a local abstract technical thumbnail. |
| WhatsApp Campaign Hub | https://github.com/AngeArsene/WhatsApp_Campaign_Hub | Dashboard to manage WhatsApp marketing campaigns, contacts, reports, scheduling and CSV/Excel contact import. | Laravel 10+, PHP 8+, React, Inertia.js, Tailwind CSS, Lucide | Generate a local abstract technical thumbnail. |
| TaskFlow | https://github.com/AngeArsene/TaskFlow | Task management app with project organisation, priority sorting and drag-and-drop. | Laravel, Inertia.js, React, TypeScript | Generate a local abstract technical thumbnail. |
| Attendance Monitoring System | https://github.com/AngeArsene/Attendance-Monitoring-System | Public repository; no verified functional description supplied. | Use only technologies visible in its repository at implementation time. | Generate a local abstract technical thumbnail. |

All FullStackApp entries have `live_url: null` unless the repository README identifies a currently working public deployment at implementation time. Their CTA is `View source` / `Voir le code`; do not render an inactive live-demo action.

#### Packages

| Title | github_url | Description | Technologies | Asset state |
| --- | --- | --- | --- | --- |
| Chat | https://github.com/AngeArsene/chat | Public package repository; no verified functional description supplied. | Use only technologies visible in its repository at implementation time. | Generate a local abstract technical thumbnail. |
| WooWA Webhooks | https://github.com/AngeArsene/woowa-webhooks | WooCommerce integration for real-time WhatsApp order alerts and abandoned-cart notifications. | WordPress, WooCommerce, WhatsApp API, Webhooks, PHP | Generate a local abstract technical thumbnail. |
| WooCommerce Smobilpay Gateway | https://github.com/AngeArsene/wc-smobilpay | WooCommerce gateway accepting MTN MoMo and Orange Money through Smobilpay S3P, with automatic webhooks, email/WhatsApp notifications and bilingual EN/FR errors. | WordPress, WooCommerce, PHP, Smobilpay S3P API, MTN MoMo, Orange Money, Webhooks | Generate a local abstract technical thumbnail. |
| Custom PHP MVC Framework | https://github.com/AngeArsene/php_mvc_framework | Lightweight extensible PHP MVC framework with routing and a flexible plugin system. | PHP, MVC, Routing, Plugin System | Generate a local abstract technical thumbnail. |

All Package entries have `live_url: null` and a source CTA only.

## 4. Assets

There are no project screenshots in the repository. Use this precise, non-placeholder asset policy:

1. Before capturing any live client site, obtain owner permission. If granted, capture its real current home page at desktop width, crop only enough to protect unrelated personal data, convert it to WebP, and save it as `public/images/projects/websites/<slug>.webp`. Its asset register entry is `Source: first-party client-site capture; licence/permission: client approval on file`.
2. For every app/package, create an original abstract technical thumbnail during implementation (a compact schema, terminal, or workflow graphic using the Structural tokens) and save it under `public/images/projects/apps/` or `public/images/projects/packages/`. It must be an original work, not an imitation of a third-party brand or a falsely labelled screenshot. Its register entry is `Source: original portfolio artwork; licence: copyright Ange Arsene`.
3. If permission for a client capture is unavailable, substitute an appropriately themed image from **Unsplash** and record the exact photo page URL, creator name, download date, and Unsplash License in an `Asset attribution` section in the footer/legal page. Do not use an opaque query URL, generic stock placeholder, AI image labelled as a real site, or an uncredited asset.
4. No image card may render without a real local asset path. Defer a card until its compliant image exists rather than shipping a blank image region.

## 5. Functional behaviour

### Language and content

Use Laravel localisation files for interface and page copy; store the entity translation pairs in the portfolio data class. The language switcher must preserve the equivalent route and must label the current language accessibly. French defaults to `fr`; English is complete and equivalent, not a partial machine translation. `hreflang="fr"`, `hreflang="en"`, and `hreflang="x-default"` point to the matching locale URLs.

### Contact form

Build a real POST endpoint in `routes/web.php` with a controller and Form Request. Fields are name, email, subject, and message. Validate required strings, a valid email, and reasonable maximum lengths; preserve valid old input on validation failure. Protect the endpoint with CSRF and a named rate limiter. Send a Laravel Mailable to `nkenmandenga@gmail.com`, set the reply-to address to the validated sender, and render a bilingual success or error callout after submission. Read recipient/sender settings from configuration/environment rather than hard-coding mail transport credentials. The application must fail safely and expose no exception details to the visitor.

### SEO and accessibility

- Provide unique descriptions: Home - “Full-stack and WordPress portfolio of Ange Arsene in Douala, Cameroon.” / French equivalent; About - “Skills, education and working approach of Ange Arsene.” / French equivalent; Experience - “Professional experience in WordPress, Laravel and React.” / French equivalent; Projects - “Selected websites, web applications and PHP packages.” / French equivalent; Contact - “Contact Ange Arsene for WordPress and full-stack web work.” / French equivalent.
- Render page-specific canonical URL, Open Graph title/description/type/image, and Twitter `summary_large_image` tags. OG images must use an owned portrait/brand graphic, not a third-party project screenshot without permission.
- Add `Person` JSON-LD on every page using the identity/contact/social data; add a `CreativeWork`/`SoftwareSourceCode` JSON-LD item only when the project has a public source URL and use `WebSite`/`CreativeWork` only for public client sites.
- Generate `public/sitemap.xml` for all locale routes and ensure `public/robots.txt` allows indexing and links to it.
- Use landmarks (`header`, `nav`, `main`, `footer`), one H1 per page, hierarchical headings, semantic lists, descriptive alt text, external-link announcement text, labelled icon buttons, skip link, visible focus states, and WCAG AA contrast.
- Optimise local images to WebP, set width/height to prevent layout shift, lazy-load non-hero media, and keep Vite/Tailwind/Fontaine as the sole asset pipeline.

## 6. Implementation and QA checklist

1. Inspect existing Folio and Blade conventions; add the pages, shared layout/components, data provider, localisation files, contact controller/request/mailable, and tests with Laravel conventions. Do not introduce dependencies.
2. Ensure every primary nav link, CTA, resume download, social link, WhatsApp link, phone link, GitHub link, project source link, and site link works. Every external link must use `noopener noreferrer`.
3. Confirm EN and FR show the same entities, dates, URLs, and meaning; persistence survives ordinary page navigation; manual locale URLs render correctly.
4. Test the contact endpoint for valid delivery (using `Mail::fake()`), validation errors, rate limiting, bilingual status feedback, and reply-to data. Test each page/locale for a 200 response, canonical/hreflang/metadata/JSON-LD presence, and the two global floating links.
5. Verify at 375px, 768px, 1024px, and 1440px: navigation/menu, grids, long badges, resume controls, language switcher, project filters, and stacked floating buttons neither overflow nor cover content.
6. Run the narrow relevant Pest tests, `vendor/bin/pint --dirty --format agent` after PHP edits, and the Vite production build. Ask the owner to run the full suite afterwards.
7. Manually review every route in both languages: no Lorem ipsum, no down AllReady237/Optimum Fly card, no dead CTA, no unsourced image, no missing alt text, no shadow/gradient violation, no unlabelled status colour, and no lost content from the current confirmed project catalog.

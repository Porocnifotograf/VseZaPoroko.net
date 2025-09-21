<?php
return [
    'tiers' => [
        'tier1' => [
            'label' => 'Glavne storitve',
            'slug' => 'glavne-storitve',
            'services' => [
                [
                    'name' => 'Poročna fotografija',
                    'slug' => 'porocna-fotografija',
                    'description' => 'Celostno poročno fotografiranje s poudarkom na pripovedovanju zgodbe vašega dne.',
                    'keywords' => ['poročni fotograf', 'wedding photography', 'destinacijska poroka'],
                    'offerings' => [
                        ['name' => 'Celo-dnevna poroka', 'price' => '1200–2000 €'],
                        ['name' => 'Intimne poroke', 'price' => '500–1000 €'],
                        ['name' => 'Destinacijske poroke', 'price' => '2000–5000+ €'],
                        ['name' => 'Predporočno fotografiranje', 'price' => '150–400 €'],
                        ['name' => 'After wedding / trash the dress', 'price' => '200–500 €'],
                        ['name' => 'Civilni in cerkveni obredi', 'price' => '300–700 €'],
                        ['name' => 'Priprave neveste in ženina', 'price' => '200–400 €'],
                        ['name' => 'Večerna zabava & ples', 'price' => '300–600 €'],
                    ],
                    'landingPages' => [
                        '/sl/storitve/porocna-fotografija/',
                        '/sl/storitve/porocna-fotografija/poroka-na-bledu/',
                        '/sl/storitve/porocna-fotografija/poroka-v-ljubljani/',
                        '/sl/storitve/porocna-fotografija/poroka-na-otoccu/',
                        '/sl/storitve/porocna-fotografija/destinacijske-poroke/',
                    ],
                ],
                [
                    'name' => 'Družinska fotografija',
                    'slug' => 'druzinska-fotografija',
                    'description' => 'Topla družinska fotografiranja v studiu, naravi in na dogodkih.',
                    'keywords' => ['družinsko fotografiranje', 'newborn fotografija'],
                    'offerings' => [
                        ['name' => 'Studio ali narava', 'price' => '150–400 €'],
                        ['name' => 'Posebni dogodki', 'price' => '200–500 €'],
                        ['name' => 'Multigeneracijske družine', 'price' => '300–500 €'],
                        ['name' => 'Nosečniško fotografiranje', 'price' => '150–400 €'],
                        ['name' => 'Otroško fotografiranje', 'price' => '150–400 €'],
                        ['name' => 'Newborn fotografija', 'price' => '200–600 €'],
                    ],
                    'landingPages' => [
                        '/sl/storitve/druzinska-fotografija/',
                        '/sl/storitve/druzinska-fotografija/novorojencki/',
                        '/sl/storitve/druzinska-fotografija/nosecnisko-fotografiranje/',
                        '/sl/storitve/druzinska-fotografija/otroci/',
                    ],
                ],
                [
                    'name' => 'Portretna fotografija',
                    'slug' => 'portretna-fotografija',
                    'description' => 'Umetniški in poslovni portreti, ki izražajo osebnost in profesionalnost.',
                    'keywords' => ['portret', 'boudoir', 'modna fotografija'],
                    'offerings' => [
                        ['name' => 'Klasični portreti', 'price' => '80–300 €'],
                        ['name' => 'Umetniški portreti', 'price' => '150–500 €'],
                        ['name' => 'Karakterni portreti', 'price' => '120–400 €'],
                        ['name' => 'Street portrait', 'price' => '100–350 €'],
                        ['name' => 'Boudoir fotografija', 'price' => '200–800 €'],
                        ['name' => 'Modna fotografija', 'price' => '150–3000 €'],
                    ],
                ],
                [
                    'name' => 'Korporativna fotografija',
                    'slug' => 'korporativna-fotografija',
                    'description' => 'Profesionalni vizualni materiali za podjetja in organizacije.',
                    'keywords' => ['corporate photography', 'PR fotograf'],
                    'offerings' => [
                        ['name' => 'Fotografiranje zaposlenih', 'price' => '100–300 €/oseba'],
                        ['name' => 'Konference in sejmi', 'price' => '300–1500 €'],
                        ['name' => 'Team building', 'price' => '200–800 €'],
                        ['name' => 'PR fotografija', 'price' => '400–1500 €'],
                        ['name' => 'Letna poročila', 'price' => '500–2500 €'],
                        ['name' => 'Poslovni portreti', 'price' => '80–250 €'],
                    ],
                ],
                [
                    'name' => 'Produktna fotografija',
                    'slug' => 'produktna-fotografija',
                    'description' => 'Prodajno naravnane fotografije izdelkov v studiu in na lokaciji.',
                    'keywords' => ['product photography', 'packshot'],
                    'offerings' => [
                        ['name' => 'Studijska produktna fotografija', 'price' => '25–200 €/produkt'],
                        ['name' => 'Flat lay produktna fotografija', 'price' => '20–150 €/set'],
                        ['name' => '360° produktna fotografija', 'price' => '50–300 €/produkt'],
                        ['name' => 'Packshot fotografija', 'price' => '10–80 €/produkt'],
                        ['name' => 'Kreativna produktna fotografija', 'price' => '30–250 €/set'],
                        ['name' => 'Makro produktna fotografija', 'price' => '40–200 €/posnetek'],
                        ['name' => 'Premium produktna fotografija', 'price' => '100–500 €/produkt'],
                    ],
                ],
            ],
        ],
        'tier2' => [
            'label' => 'Specializirane storitve',
            'slug' => 'specializirane-storitve',
            'services' => [
                'komercialna-fotografija' => [
                    'name' => 'Komercialna (reklamna) fotografija',
                    'items' => [
                        ['name' => 'Oglaševalske kampanje', 'price' => '800–5000 €'],
                        ['name' => 'Katalogi in brošure', 'price' => '500–3000 €'],
                        ['name' => 'Billboard fotografija', 'price' => '1000–8000 €'],
                        ['name' => 'Digitalne kampanje', 'price' => '600–4000 €'],
                        ['name' => 'POS materiali', 'price' => '300–2000 €'],
                    ],
                ],
                'food-fotografija' => [
                    'name' => 'Food fotografija',
                    'items' => [
                        ['name' => 'Restavracijski meniji', 'price' => '200–1000 €'],
                        ['name' => 'Kuharske knjige & blogi', 'price' => '300–1500 €'],
                        ['name' => 'Komercialna kulinarična', 'price' => '400–2000 €'],
                        ['name' => 'Social media food', 'price' => '150–800 €'],
                        ['name' => 'Hotelska kulinarika', 'price' => '300–1500 €'],
                    ],
                ],
                'nepremicninska-fotografija' => [
                    'name' => 'Nepremičninska fotografija',
                    'items' => [
                        ['name' => 'Stanovanja/hiše', 'price' => '100–500 €'],
                        ['name' => 'Airbnb/Booking', 'price' => '150–600 €'],
                        ['name' => 'Komercialne nepremičnine', 'price' => '300–1500 €'],
                        ['name' => 'Luksuzne vile/resorti', 'price' => '500–2000 €'],
                    ],
                ],
                'arhitekturna-fotografija' => [
                    'name' => 'Arhitekturna fotografija',
                    'items' => [
                        ['name' => 'Interier', 'price' => '200–1000 €'],
                        ['name' => 'Eksterier', 'price' => '300–1200 €'],
                        ['name' => 'Urbanistična', 'price' => '400–1500 €'],
                        ['name' => 'Dokumentacija projektov', 'price' => '500–2000 €'],
                    ],
                ],
                'dogodkovna-fotografija' => [
                    'name' => 'Dogodkovna fotografija',
                    'items' => [
                        ['name' => 'Korporativni dogodki', 'price' => '300–1500 €'],
                        ['name' => 'Zasebni dogodki', 'price' => '200–1000 €'],
                        ['name' => 'Javne prireditve', 'price' => '400–1200 €'],
                        ['name' => 'Dobrodelni dogodki', 'price' => '150–800 €'],
                    ],
                ],
                'turisticna-fotografija' => [
                    'name' => 'Turistična / destinacijska fotografija',
                    'items' => [
                        ['name' => 'Hoteli/resorti', 'price' => '500–2500 €'],
                        ['name' => 'Znamenitosti', 'price' => '300–1500 €'],
                        ['name' => 'Promocija regij/občin', 'price' => '800–3000 €'],
                        ['name' => 'Aktivnosti', 'price' => '200–1000 €'],
                    ],
                ],
            ],
        ],
        'tier3' => [
            'label' => 'Niche storitve',
            'slug' => 'niche-storitve',
            'mentions' => [
                'industrijska-fotografija' => [
                    'name' => 'Industrijska fotografija',
                    'items' => [
                        ['name' => 'Proizvodni procesi', 'price' => '400–2000 €'],
                        ['name' => 'Stroji in naprave', 'price' => '300–1500 €'],
                        ['name' => 'Gradbišča', 'price' => '200–1200 €'],
                        ['name' => 'Energetski objekti', 'price' => '500–2500 €'],
                    ],
                ],
                'lifestyle-fotografija' => [
                    'name' => 'Lifestyle fotografija',
                    'items' => [
                        ['name' => 'Social media lifestyle', 'price' => '200–1000 €'],
                        ['name' => 'Influencer fotografija', 'price' => '150–800 €'],
                        ['name' => 'Blagovne znamke v rabi', 'price' => '300–1500 €'],
                        ['name' => 'Storytelling za osebne znamke', 'price' => '400–2000 €'],
                    ],
                ],
                'ecommerce-fotografija' => [
                    'name' => 'E-commerce fotografija',
                    'items' => [
                        ['name' => 'Bulk produkti', 'price' => '5–50 €/produkt'],
                        ['name' => 'Katalog e-trgovine', 'price' => '10–80 €/produkt'],
                        ['name' => 'Hitri packshoti', 'price' => '8–40 €/produkt'],
                        ['name' => '360° prikazi', 'price' => '50–200 €/produkt'],
                    ],
                ],
                'specializirana-fotografija' => [
                    'name' => 'Specializirana fotografija',
                    'items' => [
                        ['name' => 'Koncertna fotografija', 'price' => '200–2000 €'],
                        ['name' => 'Športna fotografija', 'price' => '150–800 €'],
                        ['name' => 'Reportažna fotografija', 'price' => '150–1500 €'],
                    ],
                ],
                'umetniska-fotografija' => [
                    'name' => 'Umetniška & kreativna fotografija',
                    'items' => [
                        ['name' => 'Črno-bela fotografija', 'price' => '200–1000 €'],
                        ['name' => 'Konceptualna/avtorska fotografija', 'price' => '300–2000 €'],
                        ['name' => 'Pokrajinska fotografija', 'price' => '150–1200 €'],
                        ['name' => 'Umetniška fotografija', 'price' => '200–2000 €'],
                    ],
                ],
            ],
        ],
    ],
];

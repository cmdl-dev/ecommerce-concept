<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Making the items from another store to have real data
        $data = [
            [
                'name' => "Yeezy Boost 700",
                'description' => "The Yeezy Boost 700, designed by music and fashion icon Kanye West, first debuted at the Yeezy Season 5 fashion show in February 2017. This 'Utility Black' colorway from June 2019 sees the design in a mesh upper with both plush suede and smooth leather overlays. At the bottom, the Yeezy Boost 700's chunky midsole encapsulates adidas' revolutionary Boost cushioning in a full-length format, underscored by gum rubber tread.",
                'brand' => 'Addidas',
                'slug' => 'yeezy-boost-700',
                'price' => '290.00',
                'qty' => '10',
                'imgRoute' => 'https://image.goat.com/crop/750/attachments/product_template_additional_pictures/images/022/999/991/original/517542_01.jpg.jpeg?1561750511'
            ],
            [
                'name' => "AFTERGAME SNEAKER BOOT",
                'description' => "The Aftergame sneaker boot in black stretch textile is an extremely lightweight, supple style characterized by its sock-like upper. This sleek hi-top features an elastic strap with the Louis Vuitton signature, as well as a rubber outsole decorated with the emblematic Malletage pattern, inspired by the lining of the historic trunks.",
                'brand' => 'Lous Vuitton',
                'slug' => 'aftergame-sneaker-boot',
                'price' => '950.00',
                'qty' => '4',
                'imgRoute' => 'https://image.goat.com/crop/750/attachments/product_template_additional_pictures/images/022/999/991/original/517542_01.jpg.jpeg?1561750511'
            ],
            [
                'name' => "LV ARCHLIGHT SNEAKER",
                'description' => "The statement look of Louis Vuitton's Spring/Summer 2018 fashion show, this futuristic sneaker balances a springy wave-shaped outsole and an oversized tongue with a low cut around the ankle for a delicate, feminine touch",
                'brand' => 'Lous Vuitton',
                'slug' => 'lv-archlight-sneaker',
                'price' => '1090.00',
                'qty' => '4',
                'imgRoute' => 'https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_M/louis-vuitton-lv-archlight-sneaker-shoes--AE5U3BMI61_PM2_Front%20view.jpg?wid=621&hei=621'
            ],
            [
                'name' => "SILHOUETTE SANDAL",
                'description' => "The Silhouette sandal contrasts the sleek simplicity of its upper in black patent calf leather with its distinctive Monogram flower-shaped heel, which is covered in iconic Monogram canvas. A delicate strap around the ankle adds to the femininity of this design.",
                'brand' => 'Lous Vuitton',
                'slug' => 'silhouette-sandal',
                'price' => '895.00',
                'qty' => '11',
                'imgRoute' => 'https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_M/louis-vuitton-silhouette-sandal-shoes--AGSS3HTC02_PM2_Front%20view.jpg?wid=621&hei=621'
            ],
            [
                'name' => "CHAIN REACTION SNEAKERS",
                'description' => "The Chain Reaction, a sneaker that embodies the strongest elements of the Versace identity. Eclectic details create a one-of-a-kind shoe characterized by a lightweight, chain-linked rubber sole that takes inspiration from iconic Versace chain jewellery.  Signature elements on the newest Versace sneaker include the iconic Greek Key pattern, the 'Chain Reaction' logo patch and braille 'love' lettering expressing the concept that love is blind.",
                'brand' => 'Versace',
                'slug' => 'chain-reaction-sneakers',
                'price' => '1350.00',
                'qty' => '11',
                'imgRoute' => 'https://www.versace.com/dw/image/v2/ABAO_PRD/on/demandware.static/-/Sites-ver-master-catalog/default/dw934926ae/original/90_DSU7071E-D15VG_DMXR_20_ChainReactionTrainers-Sneakers-versace-online-store_0_0.jpg?sw=748&sh=1050&sm=fit&sfrm=png'
            ],
            [
                'name' => "NEMESIS HIGH TOP SNEAKERS",
                'description' => "High top, lace-up sneakers with a runner sole and off-centre lacing. Crafted out of leather and neoprene, they feature puff croc quilting detail. The sole is embellished by the Greca pattern and animalier print",
                'brand' => 'Versace',
                'slug' => 'nemesis-high-top-sneakers',
                'price' => '612.00',
                'qty' => '11',
                'imgRoute' => "https://www.versace.com/dw/image/v2/ABAO_PRD/on/demandware.static/-/Sites-ver-master-catalog/default/dwe6919e95/original/90_DSU7168-D5VFG_KU72O_20_NemesisHighTopSneakers-Sneakers-versace-online-store_0_1.jpg?sw=748&sh=1050&sm=fit&sfrm=png"
            ],
            [
                'name' => "TRACK.2 TRAINERS",
                'description' => "High top, lace up sneakers with a leather upper embellished by a rubberized 3D Medusa on the sides. Enriched with the Nastro Versace.",
                'brand' => 'Balenciaga',
                'slug' => 'nastro-versace-high-top-cerus-sneakers',
                'price' => '497.00',
                'qty' => '21',
                'imgRoute' => "https://www.balenciaga.com/66/11/11731431rh_12_a_f.jpg"
            ],
            [
                'name' => "TRIPLE S CLEAR SOLE TRAINERS",
                'description' => "High top, lace up sneakers with a leather upper embellished by a rubberized 3D Medusa on the sides. Enriched with the Nastro Versace.",
                'brand' => 'Balenciaga',
                'slug' => 'triple-s-clear-sole-trainers',
                'price' => '995.00',
                'qty' => '1',
                'imgRoute' => "https://www.balenciaga.com/66/11/11606276ib_12_a_f.jpg"
            ],
            [
                'name' => "SPEED TRAINERS",
                'description' => "High top, lace up sneakers with a leather upper embellished by a rubberized 3D Medusa on the sides. Enriched with the Nastro Versace.",
                'brand' => 'Balenciaga',
                'slug' => 'speed-trainers',
                'price' => '780.00',
                'qty' => '3',
                'imgRoute' => "https://www.balenciaga.com/66/11/11680766jj_12_a_f.jpg"
            ],
        ];
        DB::table('items')->insert($data);
        $this->call([CategorySeeder::class]);
        $categories = App\Category::all();

        App\Item::all()->each(function ($item) use ($categories) {
            $item->category()->attach(
                $categories->random(rand(3,6))->pluck('id')->toArray()
            );
        });
    }
}
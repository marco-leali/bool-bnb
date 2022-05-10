<?php

use Illuminate\Database\Seeder;
use App\Models\Apartment;
use App\Models\Service;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_service_id = Service::pluck('id')->toArray();
 /*        $apartments = config('apartments'); */

        $apartments = [
            [
                'title_desc' => 'Condominio Attilio Franchi',
                'image' => 'https://www.lodgis.com/photos/lpa/ap/22782/orange/appartamento-rue-championnet-paris-18--picL.jpg?v=1648549678',
                'room' => 3,
                'bathroom' => 2,
                'bed' => 2,
                'square_meters' => 50,
            ],
            [
                'title_desc' => 'Appartamento Roccascalegna Via Roma',
                'image' => 'https://www.hotelthea.it/wp-content/uploads/2016/06/Pareo-Soggirno-640x360.jpg',
                'room' => 2,
                'bathroom' => 1,
                'bed' => 1,
                'square_meters' => 40,
            ],
            [
                'title_desc' => 'Appartamento Casa del Sole di Furci Siculo',
                'image' => 'https://pic.trovacasa.net/image/1142095838/xxs-c.jpg',
                'room' => 3,
                'bathroom' => 2,
                'bed' => 2,
                'square_meters' => 150,
            ],
            [
                'title_desc' => 'Appartamento La Valle di Gissi',
                'image' => 'https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://www.altspaur.it/wp-content/uploads/2021/10/Alt-Spaur-appartamenti-bilocale-010.jpg',
                'room' => 5,
                'bathroom' => 1,
                'bed' => 1, 'square_meters' => 130,
            ],
            [
                'title_desc' => 'Appartamento Tre Monti di Napoli',
                'image' => 'https://appartamentisirmione.it/wp-content/uploads/2020/06/IMG_6453-scaled.jpg',
                'room' => 1, 'bathroom' => 1,
                'bed' => 1, 'square_meters' => 35,
            ],
            [
                'title_desc' => 'Appartamento La Ruota di Peruzzo',
                'image' => 'https://www.appartamenti-lagomaggiore.it/img_upload/p1e9ndvpmj1veiho5tfb1cjohok7.jpg',
                'room' => 5, 'bathroom' => 5,
                'bed' => 3, 'square_meters' => 200,
            ],
            [
                'title_desc' => 'Condominio Lo Scoglio di Pestello',
                'image' => 'https://www.ibizappartamenti.it/wp-content/uploads/2018/10/terrazzino-appartamenti-figuretasbasicst-ibiza-525x328.jpg',
                'room' => 2, 'bathroom' => 2,
                'bed' => 2, 'square_meters' => 85,
            ],
            [
                'title_desc' => 'Appartamento Gropada',
                'image' => 'https://www.appartamenti-lagomaggiore.it/img_upload/p1e9ndipmo1ske1obu618eq3ldr7.jpg',
                'room' => 7, 'bathroom' => 3, 'bed' => 3, 'square_meters' => 95,
            ],
            [
                'title_desc' => 'Condominio La Luna di Reano',
                'image' => 'https://www.mupan.it/fileadmin/_processed_/f/5/csm_GCA_1690_95ea25278f.jpg',
                'room' => 4, 'bathroom' => 2,
                'bed' => 4, 'square_meters' => 155,
            ],
            [
                'title_desc' => 'Appartamento La Stecca di Riazzolo',
                'image' => 'https://www.gruppoabc.it/wp-content/uploads/2020/12/appartamenti-delmonte-700x400-1.jpg',
                'room' => 8, 'bathroom' => 2,
                'bed' => 6, 'square_meters' => 240,
            ],
            [
                'title_desc' => 'Appartamento Rocca di Arcore',
                'image' => 'https://form.lamantinera.it/images/02-appartamenti.jpg',
                'room' => 6, 'bathroom' => 2,
                'bed' => 2, 'square_meters' => 80,
            ],
            [
                'title_desc' => 'Condominio Ornati di Arcore',
                'image' => 'https://www.parktowers.it/wp-content/uploads/2020/09/appartamenti-slider-footer_1900px10_bedroom.jpg',
                'room' => 2, 'bathroom' => 1,
                'bed' => 1, 'square_meters' => 40,
            ],
            [
                'title_desc' => 'Condominio Cavour ',
                'image' => 'https://www.sartu.info/filemanager/files/img-principale/appartamento-spei.jpg',
                'room' => 3, 'bathroom' => 1,
                'bed' => 2, 'square_meters' => 45,
            ],
            [
                'title_desc' => 'Casa Sallustri di Arcore',
                'image' => 'https://www.familyhotelresidence.it/wp-content/uploads/2017/10/Appartamenti-bilocali-02-Club-Family-Hotel-Costa-dei-Pini.jpg',
                'room' => 4, 'bathroom' => 2,
                'bed' => 2, 'square_meters' => 90,
            ],
            [
                'title_desc' => 'Appartamento Marghera',
                'image' => 'https://hotelparcoriccione.it/wp-content/uploads/2019/03/Hotel-Parco_Residence-209-992x661.jpg',
                'room' => 2, 'bathroom' => 1,
                'bed' => 1, 'square_meters' => 40,
            ],
            [
                'title_desc' => 'Appartamento La Trota Marghera',
                'image' => 'https://www.sturent.it/img/Venezia/appartamenti/slide/40_3.jpg',
                'room' => 3, 'bathroom' => 2,
                'bed' => 1, 'square_meters' => 50,
            ],
            [
                'title_desc' => 'Appartamento Tron Marghera',
                'image' => 'https://hotelparcoriccione.it/wp-content/uploads/2019/03/Hotel-Parco_Residence-209-992x661.jpg',
                'room' => 4, 'bathroom' => 2,
                'bed' => 2, 'square_meters' => 55,
            ],
            [
                'title_desc' => 'Appartamento Unicorno Marghera',
                'image' => 'https://www.lampedusaappartamenti.it/images/appartamenti-lampedusa/mariella.jpg',
                'room' => 8, 'bathroom' => 2,
                'bed' => 3, 'square_meters' => 125,
            ],
            [
                'title_desc' => 'Appartamento La Scarpa Ladispoli',
                'image' => 'https://www.hotelbianchibibione.com/wp-content/uploads/2022/04/Appartamenti-Bianchi-camera-1024x790.jpg',
                'room' => 3, 'bathroom' => 2,
                'bed' => 1, 'square_meters' => 55,
            ],
            [
                'title_desc' => 'Appartamento  Ladispoli',
                'image' => 'https://www.hotel-santer.com/media/550_x_300/92dd616c-31cd-4e38-806f-0bd3f46af15a/appartamento-villa-santer-a-dobbiaco-camera-da-letto.jpg',
                'room' => 2, 'bathroom' => 1,
                'bed' => 3, 'square_meters' => 75,
            ],
            [
                'title_desc' => 'Appartamento Unicorno Ladispoli',
                'image' => 'https://www.villaless.com/images/experts/cucina.jpg',
                'room' => 4, 'bathroom' => 2,
                'bed' => 1, 'square_meters' => 95,
            ],
            [
                'title_desc' => 'Appartamento Paperino di Macello',
                'image' => 'https://www.hotel-santer.com/media/550_x_300/92dd616c-31cd-4e38-806f-0bd3f46af15a/appartamento-villa-santer-a-dobbiaco-camera-da-letto.jpg',
                'room' => 3, 'bathroom' => 1,
                'bed' => 1, 'square_meters' => 55,
            ],
            [
                'title_desc' => 'Appartamento De Medici di Macello',
                'image' => 'https://www.villaless.com/images/experts/cas1.jpg',
                'room' => 4, 'bathroom' => 1,
                'bed' => 1, 'square_meters' => 65,
            ],
            [
                'title_desc' => 'Appartamento La Spina Macello',
                'image' => 'https://static.locasun.com/locasun/photo/5/4/3/1920x1080/543941a.jpg',
                'room' => 4, 'bathroom' => 2,
                'bed' => 1, 'square_meters' => 65,
            ],
            [
                'title_desc' => 'Appartamento La Conca Motta San Giovanni',
                'image' => 'https://www.ufficio-vacanze.it/ch24.img/hotel/Bilo__(75).JPG',
                'room' => 4, 'bathroom' => 2,
                'bed' => 2, 'square_meters' => 70,
            ],
            [
                'title_desc' => 'Appartamento Il Cerchio Motta San Giovanni',
                'image' => 'https://static.locasun.com/locasun/photo/5/4/3/1920x1080/543941a.jpg',
                'room' => 6, 'bathroom' => 2,
                'bed' => 2, 'square_meters' => 85,
            ],
            [
                'title_desc' => 'Appartamento Vasto',
                'image' => 'https://a0.muscache.com/im/pictures/83d45a40-1236-4b0a-b088-70af9f284dbf.jpg',
                'room' => 4, 'bathroom' => 2,
                'bed' => 2, 'square_meters' => 55,
            ],
            [
                'title_desc' => 'Appartamento Rocca Vasto',
                'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-17182074/original/3474aae3-8c47-4f9e-9ae5-946934346fa7.jpeg',
                'room' => 2, 'bathroom' => 1,
                'bed' => 1, 'square_meters' => 35,
            ],
            [
                'title_desc' => 'Appartamento Palazzo d\'Avalos Vasto',
                'image' => 'https://www.padovaresidence.com/wp-content/uploads/2019/05/appartamento-palazzo-della-ragione-appartamento-affitto-a-padova-centro-storico-salone-divani-padovaresidence.jpg',
                'room' => 4, 'bathroom' => 2,
                'bed' => 2, 'square_meters' => 75,
            ],
            [
                'title_desc' => 'Palazzo Avorio Vasto',
                'image' => 'https://agestanet.risorseimmobiliari.it/public/annunci/01260/1412052/F_181832.jpg',
                'room' => 4, 'bathroom' => 2,
                'bed' => 2, 'square_meters' => 95,
            ],
            [
                'title_desc' => 'Monolocale Ercole Caselle',
                'image' => 'https://img3.idealista.it/blur/WEB_DETAIL_TOP-L-L/0/id.pro.it.image.master/99/51/73/24789561.jpg',
                'room' => 1, 'bathroom' => 1,
                'bed' => 1, 'square_meters' => 30,
            ],
            [
                'title_desc' => 'Appartamento Modelle Caselle',
                'image' => 'https://www.villaless.com/images/experts/cas1.jpg',
                'room' => 4, 'bathroom' => 2,
                'bed' => 2, 'square_meters' => 75,
            ],
            [
                'title_desc' => 'Monolocale Crespi Barcellona Pozzo di Gotto',
                'image' => 'https://www.villabrunamalcesine.com/wp-content/gallery/ferienwohnung-t1-a/ferienwohnung-malcesine-2-personen-1.jpg',
                'room' => 1, 'bathroom' => 1,
                'bed' => 1, 'square_meters' => 35,
            ],
            [
                'title_desc' => 'Villa Barioschi Barcellona Pozzo di Gotto',
                'image' => 'https://img3.idealista.it/blur/WEB_DETAIL_TOP-L-L/0/id.pro.it.image.master/2c/cc/a8/277480317.jpg',
                'room' => 12, 'bathroom' => 3,
                'bed' => 5, 'square_meters' => 185,
            ],
            [
                'title_desc' => 'Casa Girasole Barcellona Pozzo di Gotto',
                'image' => 'https://img3.idealista.it/blur/WEB_DETAIL_TOP-L-L/0/id.pro.it.image.master/9f/11/9a/292288855.jpg',
                'room' => 8, 'bathroom' => 2,
                'bed' => 3, 'square_meters' => 105,
            ],
            [
                'title_desc' => 'Casa Papavero Bagolino',
                'image' => 'https://img3.idealista.it/blur/WEB_DETAIL-M-L/0/id.pro.it.image.master/64/25/88/191957513.jpg',
                'room' => 8, 'bathroom' => 3,
                'bed' => 3, 'square_meters' => 125,
            ],
            [
                'title_desc' => 'Bilocale Crisci Bagolino',
                'image' => 'https://www.hotel-santer.com/media/550_x_300/92dd616c-31cd-4e38-806f-0bd3f46af15a/appartamento-villa-santer-a-dobbiaco-camera-da-letto.jpg',
                'room' => 2, 'bathroom' => 1,
                'bed' => 2, 'square_meters' => 85,
            ],
            [
                'title_desc' => 'Appartamento Puglie Bagolino',
                'image' => 'https://www.sabbiaemare.com/wp-content/uploads/2020/06/residence-sabbia-e-mare-rosolina-mare-appartamenti-in-affito-casa-vacanze-12.jpg',
                'room' => 4, 'bathroom' => 2,
                'bed' => 1, 'square_meters' => 115,
            ],
        ];
        
        foreach ($apartments as $apartment) {

            $new_apartment = new Apartment();
            $new_apartment->user_id = rand(1, 4);
            $new_apartment->fill($apartment);
            $new_apartment->save();


            //popolo per ogni giro servizi randomici
            $rand_services = Arr::random($arr_service_id, rand(1, 4));
            $new_apartment->services()->attach($rand_services);
        }
    }
}

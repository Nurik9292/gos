<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\About;
use App\Models\AboutImage;
use App\Models\AboutText;
use App\Models\Banner;
use App\Models\Card;
use App\Models\Content;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Logo;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::create([
             'name' => 'Admin',
             'email' => 'admin@example.com',
             'password' => Hash::make('qwert12345')
         ]);

        Logo::factory(2)->create([
            'image' => '/image/logo.png',
        ]);

        Banner::factory()->create([
            'image' => '/image/5.jpg',
        ]);

        Banner::factory()->create([
            'image' => '/image/5.jpg',
            'tm_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate deleniti dolores doloribus ex, id molestiae nostrum officiis omnis pariatur quibusdam quod rem repellendus similique velit? Aliquam at culpa, debitis est eveniet incidunt, iusto labore libero maiores omnis perferendis quibusdam, quis repellat repellendus ullam! Aspernatur cupiditate deleniti doloremque ex fugit ipsa minima, numquam odio optio quaerat sit ullam vitae! Ad alias eius labore odit ut. Adipisci aperiam at debitis eaque eligendi eos est eum labore modi pariatur quam qui, voluptas?',
            'ru_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate deleniti dolores doloribus ex, id molestiae nostrum officiis omnis pariatur quibusdam quod rem repellendus similique velit? Aliquam at culpa, debitis est eveniet incidunt, iusto labore libero maiores omnis perferendis quibusdam, quis repellat repellendus ullam! Aspernatur cupiditate deleniti doloremque ex fugit ipsa minima, numquam odio optio quaerat sit ullam vitae! Ad alias eius labore odit ut. Adipisci aperiam at debitis eaque eligendi eos est eum labore modi pariatur quam qui, voluptas?',
            'en_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate deleniti dolores doloribus ex, id molestiae nostrum officiis omnis pariatur quibusdam quod rem repellendus similique velit? Aliquam at culpa, debitis est eveniet incidunt, iusto labore libero maiores omnis perferendis quibusdam, quis repellat repellendus ullam! Aspernatur cupiditate deleniti doloremque ex fugit ipsa minima, numquam odio optio quaerat sit ullam vitae! Ad alias eius labore odit ut. Adipisci aperiam at debitis eaque eligendi eos est eum labore modi pariatur quam qui, voluptas?',
        ]);

        Banner::factory()->create([
            'image' => '/image/otel.jpg',
            'tm_title' => 'Şäheriň arassalygy biziň gözegçiligimizde',
            'ru_title' => 'Чистота города под нашем контролем',
            'en_title' => 'The cleanliness of the city is under our control'
        ]);

        Card::factory()->create([
            'tm_content' => 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem',
            'ru_content' => 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem',
            'en_content' => 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem',
            'image' => '/image/card/flower.svg',
        ]);
        Card::factory()->create([
            'tm_content' => 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem',
            'ru_content' => 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem',
            'en_content' => 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem',
            'image' => '/image/card/tool.svg',
        ]);
        Card::factory()->create([
            'tm_content' => 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem',
            'ru_content' => 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem',
            'en_content' => 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem',
            'image' => '/image/card/search.svg',
        ]);
        Card::factory()->create([
            'tm_content' => 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem',
            'ru_content' => 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem',
            'en_content' => 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem',
            'image' => '/image/card/water.svg',
        ]);

        Content::factory()->create([
            'image' => '/image/art2.webp',
            'ru_title' => 'Президент Туркменистана',
            'tm_title' => 'Türkmenistanyň prezidenti',
            'en_title' => 'President of Turkmenistan',
            'ru_content' => '2024 год в Туркменистане объявлен годом
                    <br>Кладезь разума<br>Махтумкули Фраги<br>
                    В соответствии с Постановлением О праздновании 300 летия со дня рождения
                    великоо мыслителя и поэта-классика Востока Махтукули Фраги, в стране
                    и за рубежом проводится комплексная работа в целях изучения и
                    популяризации в мире богатого и бисценного литературного наследия великого мастера слов',
            'en_content' => '2024 has been declared a year in Turkmenistan
                    <br>Treasury of reason<br>Makhtumkuli Fragi<br>
                    In accordance with the Resolution on the celebration of the 300th anniversary of the birth of
                    great thinker and classical poet of the East Makhtukuli Fragi, in the country
                    and abroad, comprehensive work is being carried out to study and
                    popularization in the world of the rich and scenic literary heritage of the great master of words',
            'tm_content' => '2024-nji ýyl Türkmenistanda bir ýyl diýlip yglan edildi
                    <br> Sebäbiň hazynasy <br> Makhtumkuli Fragi <br>
                    Dogulmagynyň 300 ýyllygyny bellemek baradaky Karara laýyklykda
                    ýurtdaky Gündogar Makhtukuli Fraginiň beýik akyldary we nusgawy şahyry
                    we daşary ýurtlarda öwrenmek üçin giňişleýin işler alnyp barylýar we
                    beýik söz ussasynyň baý we ajaýyp edebi mirasy dünýäsinde meşhurlyk',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Вызов холодильных отходов с территории города Ашхабада',
            'tm_content' => 'Aşgabat şäheriniň çäginden sowadyjy galyndylary çagyrmak',
            'en_content' => 'Calling refrigerated waste from the territory of the city of Ashgabat',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Полив и мойка улиц города Ашхабада',
            'tm_content' => 'Aşgabadyň köçelerini suwarmak we ýuwmak',
            'en_content' => 'Watering and washing the streets of Ashgabat',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Механизм очистка пешеходной части города Ашхабада',
            'tm_content' => 'Aşgabat şäheriniň pyýada bölegini arassalamagyň mehanizmi',
            'en_content' => 'Mechanism for cleaning the pedestrian part of the city of Ashgabat',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Отлов бездоммных собак и кошек, сбор отходов животноводства черте города',
            'tm_content' => 'Azaşan itleri we pişikleri tutmak, şäherdäki haýwan galyndylaryny ýygnamak',
            'en_content' => 'Catching stray dogs and cats, collecting animal waste within the city',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Мониторинг работы специлизироанного транспорта, перевозящего твердые и жидкие отходы',
            'tm_content' => 'Gaty we suwuk galyndylary daşaýan ýöriteleşdirilen ulaglaryň işleýşine gözegçilik etmek',
            'en_content' => 'Monitoring the operation of specialized transport transporting solid and liquid waste',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Чистота дорого и тротуаров, подземных по направлению к бульварам и улицам',
            'tm_content' => 'Roadollaryň we pyýadalaryň arassalygy, bulvarlara we köçelere ýerasty',
            'en_content' => 'Cleanliness of roads and sidewalks, underground towards boulevards and streets',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Размещение и замена мусорныз баков на мусопроводах',
            'tm_content' => 'Zibil bankalaryny zibilhana ýerleşdirmek we çalyşmak',
            'en_content' => 'Placement and replacement of garbage cans on garbage chutes',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Зимнее время посыпаются улицы, магистрали, стоянки, дороги песком и солью, расчщается снег',
            'tm_content' => 'Gyş aýlarynda köçeler, awtoulag ýollary, awtoulag duralgalary, ýollar guma we duz sepilýär, gar arassalanýar',
            'en_content' => 'In winter, streets, highways, parking lots, roads are sprinkled with sand and salt, snow is cleared',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Строительно-мотножные работы, проведеные ремотных работ и контроль за ходом работ',
            'tm_content' => 'Gurluşyk we gurnama işleri, abatlaýyş işleri we işleriň gidişine gözegçilik etmek',
            'en_content' => 'Construction and installation work, repair work carried out and monitoring the progress of work',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Контроль за чистотой и содержанием памятников и монументов в Ашхабаде',
            'tm_content' => 'Aşgabatdaky ýadygärlikleriň arassalygyna we hyzmat edilmegine gözegçilik etmek',
            'en_content' => 'Monitoring the cleanliness and maintenance of monuments in Ashgabat',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Дезинфекция полигонов ТБО',
            'tm_content' => 'Gaty galyndy poligonlaryny dezinfeksiýa etmek',
            'en_content' => 'Disinfection of solid waste landfills',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Вызов мусора по договору с учереждениями и предприятиями, расположенными в черте города не имеющими возможности вывозить свой мусор',
            'tm_content' => 'Zibil ýygnamak, şäheriň içinde ýerleşýän edaralar we kärhanalar bilen baglaşylan şertnama laýyklykda zibil ýygnamak mümkinçiligi ýok',
            'en_content' => 'Garbage collection under an agreement with institutions and enterprises located within the city that do not have the opportunity to remove their garbage   ',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Уборка листьев с улиц и тротуаров',
            'tm_content' => 'Cleaning leaves from streets and sidewalks',
            'en_content' => 'Köçelerden we pyýadalardan ýapraklary arassalamak',
        ]);

        Service::factory()->create([
            'image' => '/image/service.jpg',
            'ru_content' => 'Выращивание фруктовых содов, цвтов разной окраски и внешнего вида, превращение города в сад',
            'tm_content' => 'Miwe sodalaryny, dürli reňkli gülleri ösdürip ýetişdirmek, şäheri bagda öwürmek',
            'en_content' => 'Growing fruit sodas, flowers of different colors and appearance, turning the city into a garden',
        ]);

        Footer::factory()->create([
            'ru_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam assumenda beatae dolorem est ex natus, nobis officia quia sed similique voluptas? At, delectus deserunt dolorem, eos, eum fuga itaque minima mollitia natus possimus rem sapiente tempora ullam unde vero? Aspernatur at cupiditate ducimus illum itaque laudantium magnam non tempore?',
            'en_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam assumenda beatae dolorem est ex natus, nobis officia quia sed similique voluptas? At, delectus deserunt dolorem, eos, eum fuga itaque minima mollitia natus possimus rem sapiente tempora ullam unde vero? Aspernatur at cupiditate ducimus illum itaque laudantium magnam non tempore?',
            'tm_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam assumenda beatae dolorem est ex natus, nobis officia quia sed similique voluptas? At, delectus deserunt dolorem, eos, eum fuga itaque minima mollitia natus possimus rem sapiente tempora ullam unde vero? Aspernatur at cupiditate ducimus illum itaque laudantium magnam non tempore?',
        ]);


        $aboutText = AboutText::create([
            'tm_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A culpa cupiditate deleniti distinctio dolores earum excepturi, incidunt itaque labore laboriosam maxime, nesciunt nihil officia perspiciatis placeat praesentium quas quis quo reiciendis reprehenderit repudiandae saepe sit sunt, totam veritatis voluptas voluptatum. A ab aut commodi dignissimos dolor eius enim error esse, facere illo laborum libero pariatur perspiciatis provident quis repellendus repudiandae rerum soluta ullam unde ut veniam, vero voluptate. Ab, accusamus, accusantium asperiores at dolor dolore doloremque dolorum est et harum minus nesciunt optio quia saepe, sapiente totam unde voluptas voluptatibus! Accusantium aspernatur cum fuga impedit magnam maiores quae quisquam rem.',
            'ru_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A culpa cupiditate deleniti distinctio dolores earum excepturi, incidunt itaque labore laboriosam maxime, nesciunt nihil officia perspiciatis placeat praesentium quas quis quo reiciendis reprehenderit repudiandae saepe sit sunt, totam veritatis voluptas voluptatum. A ab aut commodi dignissimos dolor eius enim error esse, facere illo laborum libero pariatur perspiciatis provident quis repellendus repudiandae rerum soluta ullam unde ut veniam, vero voluptate. Ab, accusamus, accusantium asperiores at dolor dolore doloremque dolorum est et harum minus nesciunt optio quia saepe, sapiente totam unde voluptas voluptatibus! Accusantium aspernatur cum fuga impedit magnam maiores quae quisquam rem.',
            'en_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A culpa cupiditate deleniti distinctio dolores earum excepturi, incidunt itaque labore laboriosam maxime, nesciunt nihil officia perspiciatis placeat praesentium quas quis quo reiciendis reprehenderit repudiandae saepe sit sunt, totam veritatis voluptas voluptatum. A ab aut commodi dignissimos dolor eius enim error esse, facere illo laborum libero pariatur perspiciatis provident quis repellendus repudiandae rerum soluta ullam unde ut veniam, vero voluptate. Ab, accusamus, accusantium asperiores at dolor dolore doloremque dolorum est et harum minus nesciunt optio quia saepe, sapiente totam unde voluptas voluptatibus! Accusantium aspernatur cum fuga impedit magnam maiores quae quisquam rem.'
        ]);

        $about1 = About::create([
            'image' => '/image/gallery/gallery1.jpg',
            'about_text_id' => $aboutText->id,
            'tm_title' => 'Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň Şertnama bölümi',
            'ru_title' => 'Уборка, благоустройство города Ашхабад Договорный отдел Ассоциации',
            'en_title' => 'Ashgabat city Cleaning, beautification Association is Contracts Department',
            'tm_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.',
            'ru_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.',
            'en_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.',
        ]);

        $about2 = About::create([
            'image' => '/image/gallery/gallery1.jpg',
            'about_text_id' => $aboutText->id,
            'tm_title' => 'Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň Şertnama bölümi',
            'ru_title' => 'Уборка, благоустройство города Ашхабад Договорный отдел Ассоциации',
            'en_title' => 'Ashgabat city Cleaning, beautification Association is Contracts Department',
            'tm_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.',
            'ru_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.',
            'en_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.',
        ]);

        $about3 = About::create([
            'image' => '/image/gallery/gallery1.jpg',
            'about_text_id' => $aboutText->id,
            'tm_title' => 'Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň Şertnama bölümi',
            'ru_title' => 'Уборка, благоустройство города Ашхабад Договорный отдел Ассоциации',
            'en_title' => 'Ashgabat city Cleaning, beautification Association is Contracts Department',
            'tm_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.',
            'ru_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.',
            'en_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.',
        ]);

        $about4 = About::create([
            'image' => '/image/gallery/gallery1.jpg',
            'about_text_id' => $aboutText->id,
            'tm_title' => 'Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň Şertnama bölümi',
            'ru_title' => 'Уборка, благоустройство города Ашхабад Договорный отдел Ассоциации',
            'en_title' => 'Ashgabat city Cleaning, beautification Association is Contracts Department',
            'tm_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.',
            'ru_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.',
            'en_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.',
        ]);

        Gallery::factory()->create([
            'title' => 'first',
            'image' => '/image/gallery/gallery1.jpg'
        ]);

        Gallery::factory()->create([
            'title' => 'first',
            'image' => '/image/gallery/gallery2.jpg'
        ]);

        Gallery::factory()->create([
            'title' => 'first',
            'image' => '/image/gallery/gallery3.jpg'
        ]);

        Gallery::factory()->create([
            'title' => 'first',
            'image' => '/image/gallery/gallery4.jpg'
        ]);

        Gallery::factory()->create([
            'title' => 'first',
            'image' => '/image/gallery/gallery6.jpg'
        ]);

        Gallery::factory()->create([
            'title' => 'first',
            'image' => '/image/gallery/gallery7.jpg'
        ]);

        Gallery::factory()->create([
            'title' => 'first',
            'image' => '/image/gallery/gallery8.jpg'
        ]);

        AboutImage::factory()->create([
            'image' => '/image/5.jpg'
        ]);
    }
}

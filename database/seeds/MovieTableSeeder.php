<?php

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         *Comedy 
        */        
        Movie::create(['title'=>'Deadpool',
                       'release_date'=>'2016-12-02',
                       'release_year'=>2016,
                       'duration'=>109,                       
                       'image'=>'https://i.pinimg.com/originals/fb/9b/a0/fb9ba0a2593b248fbe63b21605d202eb.jpg',
                       'synopsis'=>'Wade Wilson, un ex- oficial de las Fuerzas Singulares, es buen hombre de los desalmados, quien, conforme con sus reglas, está en su basura una vez que dejó el ejército. Vanessa, que termina de ingresar a su vida, tiene una enorme armonía y encara el hecho de que considera que algo va bien, mas es cancerosa. Wade, quien dejó su amor por salvarla de ver este doloroso proceso, se une a un proyecto científico que le ofrece esperanzas de tratamiento.Mas este proyecto solo va a curar los cánceres como un “efecto secundario”. El principal objetivo es activar algo de ADN. Wade, que no viene a la psique, tiene una autoridad superior cuando todo llega a su fin. ¡Mas con todas y cada una estas peculiaridades solo hay un fin, vengarse de Ajax “Francis”! En la historia del héroe que comparte una parte de su vida con nosotros, el Maestro X,',
                       'gender_id'=>1]);

        Movie::create(['title'=>'¿Quién *&$%! son los Miller?',
                       'release_date'=>'2013-08-07',
                       'release_year'=>2013,
                       'duration'=>110,
                       'image'=>'https://sxlvxsh.files.wordpress.com/2017/07/993598_511491092253684_241553509_n.jpg?w=770',
                       'synopsis'=>'Quienes Son Los Miller HD 1080p Latino Bajo nivel de marihuana narcotraficante David Clark se le roba su dinero y escondite, algunos de los cuales se debe a su proveedor. Su jefe, el acaudalado narcotraficante Brad Gurdlinger fuerzas de David para el contrabando de marihuana desde México a fin de limpiar su deuda. Al darse cuenta de que un hombre tratando de pasar por la aduana es demasiado sospechoso, contrata a una desnudista llamada Rose, una adolescente fuera de keep watch over y ladrón llamado Casey, y sus 18 años de edad, vecino de Kenny para hacerse pasar por una familia ficticia llamada “Millers”. Debido a la carga adicional de la marihuana en la RV, una de las mangueras del radiador se rompe al subir una pendiente pronunciada. Una familia que habían encontrado en la frontera llamado los Fitzgerald, que consta de Don, Edie, y Melissa, ponerse al día con ellos y remolque RV de los Miller a un taller de reparaciones. En el viaje a la tienda, David se entera de que Don Fitzgerald es un DEA agente después de encontrar su placa y su pistola en la guantera. Quienes Son Los Miller HD 1080p Latino',
                       'gender_id'=>1]);                       
        
        /*         
         *Romance          
        */        
        Movie::create(['title'=>'Pasajeros',
                       'release_date'=>'2016-12-21',
                       'release_year'=>2016,
                       'duration'=>116,
                       'image'=>'https://www.elespectadorimaginario.com/assets/pasajeros-poster.jpg',
                       'synopsis'=>'En un futuro no muy distante, la humanidad se ha visto obligada a salir en pos de nuevos planetas que colonizar. Esta travesía supone un largo recorrido por el espacio, haciendo imposible viajar despierto, puesto que su duración es de ciento veinte años. Tras muchas negociaciones, los altos mandos de la Tierra deciden mandar a un conjunto de cinco mil pasajeros a una colonia lejana, que se trasladarán en un estado de sueño inducido en una nave espacial',
                       'gender_id'=>2]);                       
        
        Movie::create(['title'=>'Focus',
                       'release_date'=>'2015-02-27',
                       'release_year'=>2015,
                       'duration'=>104,
                       'image'=>'https://es.web.img2.acsta.net/c_215_290/pictures/15/01/21/10/16/138096.jpg',
                       'synopsis'=>'Una atractiva joven esta bajo la protección de un veterano estafador que la acoge, pero el tiempo que pasan juntos empieza a nacer algo entre ellos así que ambos comienzan un romance lo que traerá complicaciones. Todo esto empieza cuando Nicky (Will Smith), un estafador maestro que se a consumado en el negocio, comienza a salir con Jess (Margot Robbie), una chica sin experiencia en este mundo de las apuestas. Mientras el le va enseñando los trucos de este oficio, ella empieza a enamorarse de el estrechando demasiado los lazos afectivos con Nicky, pero sin mas ni menos el decide romper repentinamente la relación. Tres años más tarde, esta mujer a la que le rompieron el corazón y había encendido una llama en él, reaparece convertida en una mujer fatal, en la ciudad de Buenos Aires en un circuito de carreras en el que se juega mucho dienro',
                       'gender_id'=>2]);                                                  
                           
        /*         
         *Horror          
        */
        Movie::create(['title'=>'La hora de tu muerte',
                       'release_date'=>'2020-01-31',
                       'release_year'=>2020,
                       'duration'=>90,
                       'image'=>'https://mx.web.img3.acsta.net/pictures/19/09/30/19/07/0383342.jpg',
                       'synopsis'=>'Es una cinta de suspenso, escrita y dirigida por Julian Dec (corto Boats), que prosigue la historia de una enfermera, la que, a sugerencia de uno de los pacientes que atiende, descarga una extraña aplicación para el móvil que, asegura, puede pronosticar el instante preciso en el que una persona morirá. En una primera impresión, la muchacha duda de la veracidad y estima que solo se trata de una estafa para producir dinero. Mas en el momento en que un paciente muere repentinamente, prueba dicha aplicación, descubriendo que ha puesto la data precisa.',
                       'gender_id'=>3]);                                           
        
        Movie::create(['title'=>'Sputnik: extraño pasajero',
                       'release_date'=>'2020-09-17',
                       'release_year'=>2020,
                       'duration'=>114,
                       'image'=>'https://mx.web.img3.acsta.net/c_215_290/pictures/20/09/11/23/31/5841171.jpg',
                       'synopsis'=>'Después de que una cápsula espacial choca en el planeta Tierra, la psicóloga Tatiana debe encargarse de curar al astronauta en mando, sin saber que pudo haber traído un parásito que amenaza con consumirlos a todos.',
                       'gender_id'=>3]);                                             
        /*        
         *Cartoon                          
        */        
        Movie::create(['title'=>'Trolls 2',
                       'release_date'=>'2020-09-24',
                       'release_year'=>2020,
                       'duration'=>94,
                       'image'=>'https://es.web.img3.acsta.net/c_215_290/pictures/20/01/22/17/44/3549668.jpg',
                       'synopsis'=>'Los trolls son coloridos y aman la música, ¡eso está claro! Lo que Poppy aún no estaba claro: ella y sus amigos no son los únicos trolls en el mundo, hay muchas otras tribus y cada una rinde homenaje otro genero Hay funk, pop, rock, techno, country y clásico, y todos los trolls tienen sus propias danzas y costumbres.',
                       'gender_id'=>4]);
        
        Movie::create(['title'=>'Toy Story 4',
                       'release_date'=>'2019-06-21',
                       'release_year'=>2019,
                       'duration'=>100,
                       'image'=>'https://vignette.wikia.nocookie.net/disney/images/5/5c/Toy_Story_4_official_poster_%282%29.jpg/revision/latest?cb=20190627043631&path-prefix=es',
                       'synopsis'=>'Woody, Buzz y el resto viven en paz con Bonnie, pese a que el pequeño no ama a Woody como Andy lo amaba y con frecuencia lo deja en el guardarropa. Woody, no obstante, continúa lleno de afabilidad hacia ella y, cuando Bonnie se encara al primer día de jardín de infantes, se mete en su mochila para acompañarla. Por ende, acaba contribuyendo a la creación de Forky, un juguete construido por la pequeña con un tenedor / cuchase que piensa que es basura y solo desea tirar a la basura.',
                       'gender_id'=>4]);                       
        
        /*
         *Action          
        */
        Movie::create(['title'=>'Upgrade',
                       'release_date'=>'2018-10-03',
                       'release_year'=>2018,
                       'duration'=>95,
                       'image'=>'https://s3.amazonaws.com/statics3.cinemex.com/movie_posters/Pom4uBifHOfrgsa-360x540.jpg',
                       'synopsis'=>'Tras quedarse paralítico y perder a su mujer en un ataque, Grey Trace decide admitir un tratamiento experimental para recuperar la movilidad. Merced a un implante de inteligencia artificial llamado STEM, Trace vuelve a la normalidad mas pronto se percata de que el implante es considerablemente más de lo que pensaba',
                       'gender_id'=>5]);                       
        
        Movie::create(['title'=>'Rapidos y furiosos 8',
                       'release_date'=>'2017-04-04',
                       'release_year'=>2017,
                       'duration'=>135,
                       'image'=>'https://i.pinimg.com/originals/01/8b/91/018b9165fff57199826f18fb53a9a061.jpg',
                       'synopsis'=>'Dom es mandado a Rusia para utilizar el dispositivo EMP para desactivar un submarino nuclear , lo que deja a Cipher raptarlo y también procurar emplear su arsenal para provocar una guerra nuclear. Son de nuevo detenidos por el equipo, proveído de automóviles cambiados por Petty.En el momento en que Deckard notifica que el pequeño está a salvo, Dom vuelve a Cipher y mata a Rodas, vengando la muerte de Elena, ya antes de reunirse con su equipo. Indignado, Cipher lanza un misil infrarrojo en Dom, mas se aparta de su equipo y maniobras alrededor de él, Haciendo que el misil golpee el submarino en su sitio.El equipo de manera rápida forma un bloqueo vehicular cerca de Dom, resguardándolo de la consecuente explosión. Cuando Deckard llega a la parte delantera del aeroplano y se encara a Cipher, se escapa saliendo en paracaídas del aeroplano',
                       'gender_id'=>5]);                                                  
                           
        /*
         *Musical                 
        */
        Movie::create(['title'=>'High School Musical',
                       'release_date'=>'2006-01-20',
                       'release_year'=>2006,
                       'duration'=>98,
                       'image'=>'https://upload.wikimedia.org/wikipedia/en/a/a5/HSMposter.jpg',
                       'synopsis'=>'Troy y Gabriela se conocen en un karaoke durante las vacaciones. Troy es una estrella de baloncesto, y Gabriela es la nueva estudiante. Al volver al colegio, se presentan al casting para el musical de la escuela, pero deben superar varios obstáculos',
                       'gender_id'=>6]);                                              
        
        Movie::create(['title'=>'La La Land',
                       'release_date'=>'2016-12-09',
                       'release_year'=>2016,
                       'duration'=>128,
                       'image'=>'https://es.web.img3.acsta.net/pictures/16/11/30/17/44/581119.jpg',
                       'synopsis'=>'Sebastian, un pianista de jazz, y Mia, una aspirante a actriz, se enamoran locamente; pero la ambición desmedida que tienen por triunfar en sus respectivas carreras, en una ciudad como Los Ángeles, repleta de competencia y carente de piedad, pone en peligro su amor',
                       'gender_id'=>6]);                                                  
    }
}

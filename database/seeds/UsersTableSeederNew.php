<?php
use App\User;
use Illuminate\Database\Seeder;
class UsersTableSeederNew extends Seeder
{
     public function run()
     {
          User::create(
             ['name'=>'Master del módulo',
              'email'=>'ucss.horarios@gmail.com',
              'password' => bcrypt('ucss20505378629'),
             ]);
          User::create(
             ['name'=>'Administrador FCEC Lima',
              'email'=>'ucss.fcec.lim@gmail.com',
              'password' => bcrypt('ucss20505378629'),
             ]);
          User::create([
               'name' => 'ABANTO ARRELUCEA, JOSE LUIS',
               'email' => 'jabanto@ucss.edu.pe',
               'password' => bcrypt('09625409'),
          ]);
          User::create([
               'name' => 'ABANTO GRADOS, CINTHIA DENISSE',
               'email' => 'cabanto@ucss.edu.pe',
               'password' => bcrypt('41881274'),
          ]);
          User::create([
               'name' => 'ACEVEDO ESPINOLA, ROMAN CARLOS',
               'email' => 'racevedo@ucss.edu.pe',
               'password' => bcrypt('44862545'),
          ]);
          User::create([
               'name' => 'ACHO RIOS, NIMIA',
               'email' => 'nacho@ucss.edu.pe',
               'password' => bcrypt('43374968'),
          ]);
          User::create([
               'name' => 'ACOSTA QUISPE, PAUL HENRY',
               'email' => 'pacosta@ucss.edu.pe',
               'password' => bcrypt('10198993'),
          ]);
          User::create([
               'name' => 'ACUÑA BERROSPI, ALEX',
               'email' => 'aacuna@ucss.edu.pe',
               'password' => bcrypt('06740033'),
          ]);
          User::create([
               'name' => 'ADVINCULA CLEMENTE, JOSE ANTONIO',
               'email' => 'jadvinculac@ucss.edu.pe',
               'password' => bcrypt('10602526'),
          ]);
          User::create([
               'name' => 'AGREDA PALOMINO, RICARDO NOE',
               'email' => 'ragreda@ucss.edu.pe',
               'password' => bcrypt('02786328'),
          ]);
          User::create([
               'name' => 'AGUILAR CORI, GABRIEL FELIX',
               'email' => 'gaguilarc@ucss.edu.pe',
               'password' => bcrypt('09512476'),
          ]);
          User::create([
               'name' => 'AGUILAR IBARRA, ALBERTO FELIX',
               'email' => 'aaguilar@ucss.edu.pe',
               'password' => bcrypt('08456541'),
          ]);
          User::create([
               'name' => 'AGUILAR LAGUNA, ASTRID',
               'email' => 'aaguilarl@ucss.edu.pe',
               'password' => bcrypt('22502265'),
          ]);
          User::create([
               'name' => 'AGUILAR MAS, NEISER ALBERTO',
               'email' => 'naguilar@ucss.edu.pe',
               'password' => bcrypt('40451252'),
          ]);
          User::create([
               'name' => 'AGUILAR MUÑOZ, JOSE ENRIQUE GUADALUPE',
               'email' => 'jaguilar@ucss.edu.pe',
               'password' => bcrypt('09648477'),
          ]);
          User::create([
               'name' => 'AGUILAR PAREDES, ERNESTO',
               'email' => 'eaguilarp@ucss.edu.pe',
               'password' => bcrypt('32987729'),
          ]);
          User::create([
               'name' => 'AGUILAR RUIZ, DANIEL',
               'email' => 'daguilar@ucss.edu.pe',
               'password' => bcrypt('00821796'),
          ]);
          User::create([
               'name' => 'AGUILAR RUIZ, EZSEQUIEL',
               'email' => 'eaguilar@ucss.edu.pe',
               'password' => bcrypt('00838529'),
          ]);
          User::create([
               'name' => 'AGUILAR VASQUEZ, FIORELLA DEL ROSARIO',
               'email' => 'faguilar@ucss.edu.pe',
               'password' => bcrypt('47446443'),
          ]);
          User::create([
               'name' => 'AGUIRRE ARREDONDO, CARMEN',
               'email' => 'caguirre@ucss.edu.pe',
               'password' => bcrypt('23904119'),
          ]);
          User::create([
               'name' => 'AGUIRRE QUINTANILLA, MERLE MILAGROS',
               'email' => 'maguirre@ucss.edu.pe',
               'password' => bcrypt('40377484'),
          ]);
          User::create([
               'name' => 'AGUIRRE SAMANIEGO, WILLIAM ROBERTO',
               'email' => 'waguirre@ucss.edu.pe',
               'password' => bcrypt('40810168'),
          ]);
          User::create([
               'name' => 'AHUMADA BARRIOS, MARGARITA ESTHER',
               'email' => 'mahumada@ucss.edu.pe',
               'password' => bcrypt('45015462'),
          ]);
          User::create([
               'name' => 'ALAMA TABOADA, MARITA YSABEL',
               'email' => 'malama@ucss.edu.pe',
               'password' => bcrypt('10196230'),
          ]);
          User::create([
               'name' => 'ALARCON CONDOR, JUAN CARLOS',
               'email' => 'jalarcon@ucss.edu.pe',
               'password' => bcrypt('10742262'),
          ]);
          User::create([
               'name' => 'ALARCON CORDERO, PATRICIA ELSA',
               'email' => 'palarcon@ucss.edu.pe',
               'password' => bcrypt('09477166'),
          ]);
          User::create([
               'name' => 'ALARCON MORE, MODESTO',
               'email' => 'malarcon@ucss.edu.pe',
               'password' => bcrypt('07143360'),
          ]);
          User::create([
               'name' => 'ALATA OLIVARES, ERICK LEONARDO',
               'email' => 'ealata@ucss.edu.pe',
               'password' => bcrypt('25716735'),
          ]);
          User::create([
               'name' => 'ALBA MINAYA, ANA MELVA',
               'email' => 'aalba@ucss.edu.pe',
               'password' => bcrypt('09790294'),
          ]);
          User::create([
               'name' => 'ALBITES CHANCO, CLEODALIA',
               'email' => 'calbites@ucss.edu.pe',
               'password' => bcrypt('09744707'),
          ]);
          User::create([
               'name' => 'ALBITRES INFANTES, JHONNY JAVIER',
               'email' => 'jalbitres@ucss.edu.pe',
               'password' => bcrypt('18067237'),
          ]);
          User::create([
               'name' => 'ALBORNOZ ISHUIZA, ANUSKA',
               'email' => 'aalbornoz@ucss.edu.pe',
               'password' => bcrypt('43097418'),
          ]);
          User::create([
               'name' => 'ALBUJAR DE LA CRUZ, MARIA MALENA',
               'email' => 'malbujar@ucss.edu.pe',
               'password' => bcrypt('41349511'),
          ]);
          User::create([
               'name' => 'ALBURQUEQUE CASTRO, LEYLA ELSA',
               'email' => 'lalburqueque@ucss.edu.pe',
               'password' => bcrypt('09852738'),
          ]);
          User::create([
               'name' => 'ALBURQUEQUE UCEDA, SILVIA JOHANNA',
               'email' => 'salburqueque@ucss.edu.pe',
               'password' => bcrypt('40236568'),
          ]);
          User::create([
               'name' => 'ALCALDE POMA, RAMON FERNANDO',
               'email' => 'ralcalde@ucss.edu.pe',
               'password' => bcrypt('26681667'),
          ]);
          User::create([
               'name' => 'ALCANTARA BOZA, FRANCISCO ALEJANDRO',
               'email' => 'falcantara@ucss.edu.pe',
               'password' => bcrypt('27074721'),
          ]);
          User::create([
               'name' => 'ALEGRE CALDERON, LUIS ENRIQUE',
               'email' => 'alegre@ucss.edu.pe',
               'password' => bcrypt('32899961'),
          ]);
          User::create([
               'name' => 'ALEGRIA SABOGAL, DIEGO CRISTOBAL',
               'email' => 'dalegria@ucss.edu.pe',
               'password' => bcrypt('42772477'),
          ]);
          User::create([
               'name' => 'ALEJOS HERRERA, NATIVIDAD DE JESUS',
               'email' => 'nalejos@ucss.edu.pe',
               'password' => bcrypt('05293848'),
          ]);
          User::create([
               'name' => 'ALFARO LUPERDI, MARIO ARTURO',
               'email' => 'malfaro@ucss.edu.pe',
               'password' => bcrypt('40222434'),
          ]);
          User::create([
               'name' => 'ALFARO PALACIOS DE HUAITA, EDITH BETTY',
               'email' => 'ealfaro@ucss.edu.pe',
               'password' => bcrypt('06095016'),
          ]);
          User::create([
               'name' => 'ALIAGA CASTRO, WALTER YURI',
               'email' => 'waliaga@ucss.edu.pe',
               'password' => bcrypt('06292056'),
          ]);
          User::create([
               'name' => 'ALIAGA RODRIGUEZ, LUIS HUMBERTO',
               'email' => 'laliaga@ucss.edu.pe',
               'password' => bcrypt('07885027'),
          ]);
          User::create([
               'name' => 'ALIAGA ROTA, LUIS ANTONIO',
               'email' => 'laliagar@ucss.edu.pe',
               'password' => bcrypt('19850381'),
          ]);
          User::create([
               'name' => 'ALIAGA VISALOT, FREDY ITALO',
               'email' => 'faliaga@ucss.edu.pe',
               'password' => bcrypt('08425709'),
          ]);
          User::create([
               'name' => 'ALIPAZAGA ALVARADO, CESAR',
               'email' => 'calipazaga@ucss.edu.pe',
               'password' => bcrypt('42098805'),
          ]);
          User::create([
               'name' => 'ALLENDE TORRES, DORIS',
               'email' => 'dallende@ucss.edu.pe',
               'password' => bcrypt('09934500'),
          ]);
          User::create([
               'name' => 'ALTAMIRANO CUBAS, WILMER',
               'email' => 'waltamirano@ucss.edu.pe',
               'password' => bcrypt('10719947'),
          ]);
          User::create([
               'name' => 'ALTAMIRANO ESPINOZA, ALDO JORGE',
               'email' => 'aaltamirano@ucss.edu.pe',
               'password' => bcrypt('40088543'),
          ]);
          User::create([
               'name' => 'ALTAMIRANO REQUEJO, CESAR HERNANDO',
               'email' => 'caltamirano@ucss.edu.pe',
               'password' => bcrypt('43926960'),
          ]);
          User::create([
               'name' => 'ALTAMIRANO SUAREZ, SAMUEL',
               'email' => 'saltamirano@ucss.edu.pe',
               'password' => bcrypt('45647199'),
          ]);
          User::create([
               'name' => 'ALTUNA OLAECHEA, JUAN CARLOS',
               'email' => 'jaltuna@ucss.edu.pe',
               'password' => bcrypt('42229461'),
          ]);
          User::create([
               'name' => 'ALVA CABRERA, RUBEN JESUS',
               'email' => 'rjalva@ucss.edu.pe',
               'password' => bcrypt('07909742'),
          ]);
          User::create([
               'name' => 'ALVA CAMPOS, LEONARDO ALFREDO',
               'email' => 'lalva@ucss.edu.pe',
               'password' => bcrypt('40223526'),
          ]);
          User::create([
               'name' => 'ALVA PALOMARES, GLADIA MARIBEL',
               'email' => 'galvap@ucss.edu.pe',
               'password' => bcrypt('09638521'),
          ]);
          User::create([
               'name' => 'ALVA PRETEL, ROSSIO DEL PILAR',
               'email' => 'ralva@ucss.edu.pe',
               'password' => bcrypt('17831799'),
          ]);
          User::create([
               'name' => 'ALVA RONDON, SUSANA OFELIA',
               'email' => 'salva@ucss.edu.pe',
               'password' => bcrypt('15620974'),
          ]);
          User::create([
               'name' => 'ALVAN CABANILLAS, SERGIO HERMES',
               'email' => 'salvan@ucss.edu.pe',
               'password' => bcrypt('18113751'),
          ]);
          User::create([
               'name' => 'ALVARADO CAMPOS DE CIURLIZZA, EVELYN',
               'email' => 'ealvarado@ucss.edu.pe',
               'password' => bcrypt('41239490'),
          ]);
          User::create([
               'name' => 'ALVARADO CARBONEL, MARCO ANTONIO',
               'email' => 'malvaradoc@ucss.edu.pe',
               'password' => bcrypt('40568513'),
          ]);
          User::create([
               'name' => 'ALVARADO CUTIPA FLORES, GERMAN FELIPE',
               'email' => 'galvarado@ucss.edu.pe',
               'password' => bcrypt('07754077'),
          ]);
          User::create([
               'name' => 'ALVARADO LACHIRA, ARNALDO MARTIN',
               'email' => 'aalvarado@ucss.edu.pe',
               'password' => bcrypt('43490242'),
          ]);
          User::create([
               'name' => 'ALVARADO PANDURO, JORGE SALOMON',
               'email' => 'jalvaradop@ucss.edu.pe',
               'password' => bcrypt('41326636'),
          ]);
          User::create([
               'name' => 'ALVARADO VIGO, NOEMI',
               'email' => 'nalvarado@ucss.edu.pe',
               'password' => bcrypt('07898843'),
          ]);
          User::create([
               'name' => 'ALVARADO VILLASIS, JOILER',
               'email' => 'jalvarado@ucss.edu.pe',
               'password' => bcrypt('01151879'),
          ]);
          User::create([
               'name' => 'ALVARADO VIVAR DE BEJAR, ROXANNA MARIA DE LOURDES',
               'email' => 'malvarado@ucss.edu.pe',
               'password' => bcrypt('08267860'),
          ]);
          User::create([
               'name' => 'ALVARADO VIZCARDO, BETSY ROCIO',
               'email' => 'balvarado@ucss.edu.pe',
               'password' => bcrypt('10680956'),
          ]);
          User::create([
               'name' => 'ALVAREZ BERNARDO, RENZO IVAN',
               'email' => 'ralvarez@ucss.edu.pe',
               'password' => bcrypt('41923408'),
          ]);
          User::create([
               'name' => 'ALVAREZ FALCONI, PEDRO PABLO',
               'email' => 'palvarez@ucss.edu.pe',
               'password' => bcrypt('07431653'),
          ]);
          User::create([
               'name' => 'ALVAREZ GARRIDO, HENDERSON EDUARDO',
               'email' => 'halvarez@ucss.edu.pe',
               'password' => bcrypt('46594422'),
          ]);
          User::create([
               'name' => 'ALVAREZ PAREDES, JULIAN',
               'email' => 'jalvarez@ucss.edu.pe',
               'password' => bcrypt('19931205'),
          ]);
          User::create([
               'name' => 'ALVITES HUAMANI, CLEOFE GENOVEVA',
               'email' => 'calvites@ucss.edu.pe',
               'password' => bcrypt('08495141'),
          ]);
          User::create([
               'name' => 'ALZAMORA ENCALADA, SEGUNDO JUAN',
               'email' => 'salzamora@ucss.edu.pe',
               'password' => bcrypt('02749260'),
          ]);
          User::create([
               'name' => 'AMAYA ROJAS, JANETH CRISTINA',
               'email' => 'jamaya@ucss.edu.pe',
               'password' => bcrypt('43605473'),
          ]);
          User::create([
               'name' => 'AMBROSIO GARCIA, GIULLIANA PATRICIA',
               'email' => 'gambrosio@ucss.edu.pe',
               'password' => bcrypt('41185035'),
          ]);
          User::create([
               'name' => 'AMBULAY BRICEÑO, JOHNNY PERCY',
               'email' => 'jambulay@ucss.edu.pe',
               'password' => bcrypt('41809938'),
          ]);
          User::create([
               'name' => 'ANAYA RAYMUNDO, MARIO ANTONIO',
               'email' => 'manaya@ucss.edu.pe',
               'password' => bcrypt('09763452'),
          ]);
          User::create([
               'name' => 'ANCAJIMA ENCALADA, JULISSA DEL CARMEN',
               'email' => 'jancajimae@ucss.edu.pe',
               'password' => bcrypt('40428275'),
          ]);
          User::create([
               'name' => 'ANCAJIMA TIMANA, JUAN CARLOS',
               'email' => 'jancajima@ucss.edu.pe',
               'password' => bcrypt('43925029'),
          ]);
          User::create([
               'name' => 'ANDIA VILCAPOMA, DAVID HERNAN',
               'email' => 'dandia@ucss.edu.pe',
               'password' => bcrypt('42457051'),
          ]);
          User::create([
               'name' => 'ANDRADE QUIÑONES, LILIANA JESUS',
               'email' => 'landrade@ucss.edu.pe',
               'password' => bcrypt('40325761'),
          ]);
          User::create([
               'name' => 'ANGLAS LOSTAUNAU, CARLOS ALBERTO',
               'email' => 'canglas@ucss.edu.pe',
               'password' => bcrypt('25682186'),
          ]);
          User::create([
               'name' => 'ANGULO VALDIVIA, RAFAEL MARTIN',
               'email' => 'rangulo@ucss.edu.pe',
               'password' => bcrypt('40706660'),
          ]);
          User::create([
               'name' => 'ANTICONA RODRIGUEZ, SANDRO FABRICIO',
               'email' => 'santicona@ucss.edu.pe',
               'password' => bcrypt('21102916'),
          ]);
          User::create([
               'name' => 'ANTONIO BASILIO, DORILA TEODOSIA',
               'email' => 'dantonio@ucss.edu.pe',
               'password' => bcrypt('22406535'),
          ]);
          User::create([
               'name' => 'AQUINO VARGAS, ELSA',
               'email' => 'eaquino@ucss.edu.pe',
               'password' => bcrypt('10042157'),
          ]);
          User::create([
               'name' => 'AQUISSE TORRES, TEODORO',
               'email' => 'taquisse@ucss.edu.pe',
               'password' => bcrypt('25552563'),
          ]);
          User::create([
               'name' => 'ARAGON OJEDA, MIGUEL ANGEL',
               'email' => 'maragon@ucss.edu.pe',
               'password' => bcrypt('10312728'),
          ]);
          User::create([
               'name' => 'ARAKAKI REBATTA, ANGELLA ROXANA',
               'email' => 'aarakaki@ucss.edu.pe',
               'password' => bcrypt('25861575'),
          ]);
          User::create([
               'name' => 'ARAMBURU ARIAS, MILAGRITO AQUILA',
               'email' => 'maramburu@ucss.edu.pe',
               'password' => bcrypt('08620113'),
          ]);
          User::create([
               'name' => 'ARANA ASPAJO, JUNIOR MEDARDO',
               'email' => 'jarana@ucss.edu.pe',
               'password' => bcrypt('41994466'),
          ]);
          User::create([
               'name' => 'ARANA CABRERA, OSCAR GUSTAVO',
               'email' => 'oarana@ucss.edu.pe',
               'password' => bcrypt('21524245'),
          ]);
          User::create([
               'name' => 'ARANA MARESCA, CARMEN PILAR',
               'email' => 'carana@ucss.edu.pe',
               'password' => bcrypt('15730143'),
          ]);
          User::create([
               'name' => 'ARANA VERA, PAOLA JOHANA',
               'email' => 'parana@ucss.edu.pe',
               'password' => bcrypt('42760556'),
          ]);
          User::create([
               'name' => 'ARANIBAR RIVERO, RUTH MILAGROS',
               'email' => 'raranibar@ucss.edu.pe',
               'password' => bcrypt('07197659'),
          ]);
          User::create([
               'name' => 'ARAOZ MONZON, JUAN CANCIO',
               'email' => 'jaraoz@ucss.edu.pe',
               'password' => bcrypt('80677549'),
          ]);
          User::create([
               'name' => 'ARASHIRO TAMASHIRO, ANA CECILIA',
               'email' => 'aarashiro@ucss.edu.pe',
               'password' => bcrypt('10283796'),
          ]);
          User::create([
               'name' => 'ARAUZO RAMIREZ, FREDO',
               'email' => 'farauzo@ucss.edu.pe',
               'password' => bcrypt('06799010'),
          ]);
          User::create([
               'name' => 'ARCE HAYA, JORGE ARMANDO',
               'email' => 'jarce@ucss.edu.pe',
               'password' => bcrypt('00822382'),
          ]);
          User::create([
               'name' => 'ARCE REYNOSO, MONICA YULIANA',
               'email' => 'marce@ucss.edu.pe',
               'password' => bcrypt('42515821'),
          ]);
          User::create([
               'name' => 'ARELLANO ADRIANZEN, MANUEL JESUS',
               'email' => 'marellanoa@ucss.edu.pe',
               'password' => bcrypt('44455537'),
          ]);
          User::create([
               'name' => 'ARELLANO CABO, MARIETTA ZORAIDA SOCORRO',
               'email' => 'marellano@ucss.edu.pe',
               'password' => bcrypt('07739006'),
          ]);
          User::create([
               'name' => 'ARELLANO VEGA, CRISTHIAN ERICK',
               'email' => 'carellano@ucss.edu.pe',
               'password' => bcrypt('44470430'),
          ]);
          User::create([
               'name' => 'AREVALO AVILA, FRANCIS LOIS PHILIP',
               'email' => 'farevalo@ucss.edu.pe',
               'password' => bcrypt('45088433'),
          ]);
          User::create([
               'name' => 'ARIAS ARONE, EDITH',
               'email' => 'eariasa@ucss.edu.pe',
               'password' => bcrypt('40947585'),
          ]);
          User::create([
               'name' => 'ARIAS CAYCHO, JESUS',
               'email' => 'jarias@ucss.edu.pe',
               'password' => bcrypt('09984365'),
          ]);
          User::create([
               'name' => 'ARIAS MARCOS, ADA GRABIELA',
               'email' => 'garias@ucss.edu.pe',
               'password' => bcrypt('08578047'),
          ]);
          User::create([
               'name' => 'ARIAS PALOMINO, MARCO ANTONIO',
               'email' => 'ariaspm@ucss.edu.pe',
               'password' => bcrypt('10585743'),
          ]);
          User::create([
               'name' => 'ARIAS RIMARI, ELIANA MARIA',
               'email' => 'erimari@ucss.edu.pe',
               'password' => bcrypt('21289640'),
          ]);
          User::create([
               'name' => 'ARMAS CALDERON, RAUL MARCELO',
               'email' => 'rarmas@ucss.edu.pe',
               'password' => bcrypt('07156168'),
          ]);
          User::create([
               'name' => 'ARMAS VEGA, PRUDENCIO ELEUTERIO',
               'email' => 'parmas@ucss.edu.pe',
               'password' => bcrypt('44931858'),
          ]);
          User::create([
               'name' => 'ARRIOLA SANCHEZ, DIANA DEL CARMEN',
               'email' => 'darriola@ucss.edu.pe',
               'password' => bcrypt('25524808'),
          ]);
          User::create([
               'name' => 'ARROYO BARRIOS, JULIO TARCISIO',
               'email' => 'jarroyo@ucss.edu.pe',
               'password' => bcrypt('09746803'),
          ]);
          User::create([
               'name' => 'ARROYO LOPEZ, CARLOS ANTONIO',
               'email' => 'carroyo@ucss.edu.pe',
               'password' => bcrypt('40427145'),
          ]);
          User::create([
               'name' => 'ARRUNATEGUI SALDARRIAGA, SILVER ANDRES',
               'email' => 'sarrunategui@ucss.edu.pe',
               'password' => bcrypt('44105190'),
          ]);
          User::create([
               'name' => 'ARTEAGA CRISANTO, JONY MARTIN',
               'email' => 'jarteaga@ucss.edu.pe',
               'password' => bcrypt('41953001'),
          ]);
          User::create([
               'name' => 'ARTICA COSME, NATIVIDAD LOURDES',
               'email' => 'nartica@ucss.edu.pe',
               'password' => bcrypt('19863257'),
          ]);
          User::create([
               'name' => 'ARTICA GONZALES, MARIO ALEJANDRO',
               'email' => 'martica@ucss.edu.pe',
               'password' => bcrypt('15855736'),
          ]);
          User::create([
               'name' => 'ASCENCIO GONZALES, JUDITH PETRONILA',
               'email' => 'jascencio@ucss.edu.pe',
               'password' => bcrypt('17434489'),
          ]);
          User::create([
               'name' => 'ASENCIOS ORMEÑO, VICTOR HUGO',
               'email' => 'vasencios@ucss.edu.pe',
               'password' => bcrypt('43426818'),
          ]);
          User::create([
               'name' => 'ASENJO GARCIA, YOVANNY JESUS',
               'email' => 'yasenjo@ucss.edu.pe',
               'password' => bcrypt('42299155'),
          ]);
          User::create([
               'name' => 'ASPAUZA GARCIA, JENNIFER LINNET',
               'email' => 'jaspauza@ucss.edu.pe',
               'password' => bcrypt('43150274'),
          ]);
          User::create([
               'name' => 'ASPILCUETA PEREZ, CRISTOBAL URIEL',
               'email' => 'caspilcueta@ucss.edu.pe',
               'password' => bcrypt('08569906'),
          ]);
          User::create([
               'name' => 'ASTETE VINCES, CARLOS ERNESTO',
               'email' => 'castete@ucss.edu.pe',
               'password' => bcrypt('09864519'),
          ]);
          User::create([
               'name' => 'ATACHAHUA URSUA, WILMER MANUEL',
               'email' => 'watachahua@ucss.edu.pe',
               'password' => bcrypt('07763494'),
          ]);
          User::create([
               'name' => 'AURORA FERNANDEZ, ANIBAL JAVIER',
               'email' => 'aaurora@ucss.edu.pe',
               'password' => bcrypt('18151195'),
          ]);
          User::create([
               'name' => 'AVILA COCHACHI, BENITO LEANDRO',
               'email' => 'bavila@ucss.edu.pe',
               'password' => bcrypt('21132821'),
          ]);
          User::create([
               'name' => 'AYALA CALDERON, KRISTHIAN OLIVER',
               'email' => 'kayala@ucss.edu.pe',
               'password' => bcrypt('07501770'),
          ]);
          User::create([
               'name' => 'AYALA CALDERON, RODRIGO HERNANDO',
               'email' => 'rayala@ucss.edu.pe',
               'password' => bcrypt('10475467'),
          ]);
          User::create([
               'name' => 'AYALA DIAZ, MARCOS AQUILES',
               'email' => 'mayala@ucss.edu.pe',
               'password' => bcrypt('02848481'),
          ]);
          User::create([
               'name' => 'AYALA PAUCAR, ROBINSON WILMER',
               'email' => 'rwayala@ucss.edu.pe',
               'password' => bcrypt('09976214'),
          ]);
          User::create([
               'name' => 'AYLLON VALDIVIA, CESAR ARTURO',
               'email' => 'cayllon@ucss.edu.pe',
               'password' => bcrypt('09998411'),
          ]);
          User::create([
               'name' => 'AYUDANTE RELAIZA, ELIZABETH',
               'email' => 'eayudante@ucss.edu.pe',
               'password' => bcrypt('06783487'),
          ]);
          User::create([
               'name' => 'AZCONA AVALOS, GUISELLA',
               'email' => 'gazcona@ucss.edu.pe',
               'password' => bcrypt('43991476'),
          ]);
          User::create([
               'name' => 'AZULA DIAZ, HENRY EDILBERTO',
               'email' => 'hazula@ucss.edu.pe',
               'password' => bcrypt('42109759'),
          ]);
          User::create([
               'name' => 'BAHAMONDE QUINTEROS, SONIA AURORA',
               'email' => 'sbahamonde@ucss.edu.pe',
               'password' => bcrypt('09748136'),
          ]);
          User::create([
               'name' => 'BALCAZAR GALLO, JORSI ERICSON JOEL',
               'email' => 'jbalcazar@ucss.edu.pe',
               'password' => bcrypt('41668500'),
          ]);
          User::create([
               'name' => 'BALDEON DAY, OSCAR ALFONSO',
               'email' => 'obaldeon@ucss.edu.pe',
               'password' => bcrypt('21079106'),
          ]);
          User::create([
               'name' => 'BALDEON SULCA, MARIA LUISA',
               'email' => 'mbaldeon@ucss.edu.pe',
               'password' => bcrypt('08617906'),
          ]);
          User::create([
               'name' => 'BALLENA DOMINGUEZ, VICTOR GIOVANNY',
               'email' => 'vballena@ucss.edu.pe',
               'password' => bcrypt('09853135'),
          ]);
          User::create([
               'name' => 'BALLESTEROS MACO, LUIS FERNANDO',
               'email' => 'lballesteros@ucss.edu.pe',
               'password' => bcrypt('41772740'),
          ]);
          User::create([
               'name' => 'BALTODANO DIAZ, RAUL IVAN',
               'email' => 'rbaltodano@ucss.edu.pe',
               'password' => bcrypt('09549434'),
          ]);
          User::create([
               'name' => 'BALVIN EGAS, EFRAIN',
               'email' => 'ebalvin@ucss.edu.pe',
               'password' => bcrypt('20006543'),
          ]);
          User::create([
               'name' => 'BANCES MEZA, ALCIBIADES',
               'email' => 'abances@ucss.edu.pe',
               'password' => bcrypt('44127737'),
          ]);
          User::create([
               'name' => 'BANCES MEZA, WILLIAM HENRY',
               'email' => 'wbances@ucss.edu.pe',
               'password' => bcrypt('27710359'),
          ]);
          User::create([
               'name' => 'BAQUERIZO SEDANO, LUIS MIGUEL',
               'email' => 'lbaquerizo@ucss.edu.pe',
               'password' => bcrypt('43822518'),
          ]);
          User::create([
               'name' => 'BARBOSA BROU, MARIA DEL CARMEN',
               'email' => 'mbarbosa@ucss.edu.pe',
               'password' => bcrypt('02613745'),
          ]);
          User::create([
               'name' => 'BARGIGIA, PAOLO',
               'email' => 'pbargigia@ucss.edu.pe',
               'password' => bcrypt('000518916'),
          ]);
          User::create([
               'name' => 'BARNETT GUILLEN, LIDA ESTHER',
               'email' => 'lbarnett@ucss.edu.pe',
               'password' => bcrypt('08584551'),
          ]);
          User::create([
               'name' => 'BARRAGAN MARIN, JORGE MASSARO',
               'email' => 'jbarragan@ucss.edu.pe',
               'password' => bcrypt('42241290'),
          ]);
          User::create([
               'name' => 'BARRETO DEL CASTILLO, WILSON EDGARD',
               'email' => 'wbarreto@ucss.edu.pe',
               'password' => bcrypt('40058938'),
          ]);
          User::create([
               'name' => 'BARRETO TORO, JUAN ALEXANDER',
               'email' => 'jbarreto@ucss.edu.pe',
               'password' => bcrypt('43113275'),
          ]);
          User::create([
               'name' => 'BARTOLO ACHICAHUALA, CARLOS MARTIN',
               'email' => 'cbartolo@ucss.edu.pe',
               'password' => bcrypt('72145586'),
          ]);
          User::create([
               'name' => 'BARTUREN CASTILLA, CRISTIAN SANTOS',
               'email' => 'cbarturen@ucss.edu.pe',
               'password' => bcrypt('70435333'),
          ]);
          User::create([
               'name' => 'BARZOLA COLLANTES, NELIDA HAYDEE',
               'email' => 'nbarzola@ucss.edu.pe',
               'password' => bcrypt('06192583'),
          ]);
          User::create([
               'name' => 'BASTO MUÑOZ, ROSA LILIANA',
               'email' => 'rbasto@ucss.edu.pe',
               'password' => bcrypt('10621491'),
          ]);
          User::create([
               'name' => 'BASUALDO LOPEZ, ELIAS IVAN',
               'email' => 'ebasualdo@ucss.edu.pe',
               'password' => bcrypt('40611601'),
          ]);
          User::create([
               'name' => 'BASUALDO PORRAS, LUZ',
               'email' => 'lbasualdo@ucss.edu.pe',
               'password' => bcrypt('21289682'),
          ]);
          User::create([
               'name' => 'BAUTISTA RUIZ, EVA',
               'email' => 'ebautista@ucss.edu.pe',
               'password' => bcrypt('001821541'),
          ]);
          User::create([
               'name' => 'BAZALAR CANTERA, JOSE LUIS',
               'email' => 'jbazalar@ucss.edu.pe',
               'password' => bcrypt('15735307'),
          ]);
          User::create([
               'name' => 'BECERRA GARCIA, DANIEL',
               'email' => 'dbecerra@ucss.edu.pe',
               'password' => bcrypt('00160971'),
          ]);
          User::create([
               'name' => 'BECERRA PEREZ, PEDRO ANGEL',
               'email' => 'pbecerra@ucss.edu.pe',
               'password' => bcrypt('25748466'),
          ]);
          User::create([
               'name' => 'BELLIDO GUTIERREZ, FERNANDO WALTER',
               'email' => 'fbellido@ucss.edu.pe',
               'password' => bcrypt('08737612'),
          ]);
          User::create([
               'name' => 'BELLINA SHOLS, GIANCARLO JOSE',
               'email' => 'gbellina@ucss.edu.pe',
               'password' => bcrypt('10223961'),
          ]);
          User::create([
               'name' => 'BELTRAN VEGA, CESAR OSCAR',
               'email' => 'cbeltran@ucss.edu.pe',
               'password' => bcrypt('17903802'),
          ]);
          User::create([
               'name' => 'BENAMU IZQUIERDO, SHALON MARTIN',
               'email' => 'sbenamu@ucss.edu.pe',
               'password' => bcrypt('10169818'),
          ]);
          User::create([
               'name' => 'BENDEZU ZORRILLA, JERBER EMILIO',
               'email' => 'jbendezuz@ucss.edu.pe',
               'password' => bcrypt('20018941'),
          ]);
          User::create([
               'name' => 'BENITES GUERRA, MARIA DEL PILAR',
               'email' => 'mbenites@ucss.edu.pe',
               'password' => bcrypt('41925808'),
          ]);
          User::create([
               'name' => 'BENITO RODRIGUEZ, JOSE ANTONIO',
               'email' => 'jbenito@ucss.edu.pe',
               'password' => bcrypt('000105841'),
          ]);
          User::create([
               'name' => 'BERMEJO BENITES, JORGE LUIS',
               'email' => 'jbermejo@ucss.edu.pe',
               'password' => bcrypt('03317828'),
          ]);
          User::create([
               'name' => 'BERMUDEZ TAPIA, MANUEL ALEXIS',
               'email' => 'mbermudez@ucss.edu.pe',
               'password' => bcrypt('09854795'),
          ]);
          User::create([
               'name' => 'BERNAL DIAZ, ORLANDO RAUL',
               'email' => 'obernal@ucss.edu.pe',
               'password' => bcrypt('15610495'),
          ]);
          User::create([
               'name' => 'BERNARDO TORRES, AMPARO DE JESUS',
               'email' => 'abernardo@ucss.edu.pe',
               'password' => bcrypt('09480431'),
          ]);
          User::create([
               'name' => 'BERRIOS LEON, IGNACIO',
               'email' => 'iberrios@ucss.edu.pe',
               'password' => bcrypt('22429247'),
          ]);
          User::create([
               'name' => 'BETTINI, TERESA',
               'email' => 'tbettini@ucss.edu.pe',
               'password' => bcrypt('000825061'),
          ]);
          User::create([
               'name' => 'BIDINOST, PAOLO',
               'email' => 'pbidinost@ucss.edu.pe',
               'password' => bcrypt('000332855'),
          ]);
          User::create([
               'name' => 'BIEBERACH MUGRUZA, CRISTOPHER DANIEL',
               'email' => 'cbieberachm@ucss.edu.pe',
               'password' => bcrypt('41729724'),
          ]);
          User::create([
               'name' => 'BIEBERACH SANCHEZ, CARLOS ROBERTO',
               'email' => 'cbieberach@ucss.edu.pe',
               'password' => bcrypt('09438000'),
          ]);
          User::create([
               'name' => 'BIO GAIDOLFI, CARLA MARIA',
               'email' => 'carlabio@ucss.edu.pe',
               'password' => bcrypt('25629280'),
          ]);
          User::create([
               'name' => 'BIO GAIDOLFI, FAUSTO MICHELE',
               'email' => 'fbio@ucss.edu.pe',
               'password' => bcrypt('25746345'),
          ]);
          User::create([
               'name' => 'BIZARRO TAPARA, RAUL',
               'email' => 'rbizarro@ucss.edu.pe',
               'password' => bcrypt('10199176'),
          ]);
          User::create([
               'name' => 'BLAS MONTENEGRO, LUZ PETRONILA',
               'email' => 'lblas@ucss.edu.pe',
               'password' => bcrypt('07796524'),
          ]);
          User::create([
               'name' => 'BOLIS, GIAN BATTISTA FAUSTO',
               'email' => 'gbattista@ucss.edu.pe',
               'password' => bcrypt('000044710'),
          ]);
          User::create([
               'name' => 'BOLIVAR BRAVO, GABRIEL AUGUSTO',
               'email' => 'gbolivar@ucss.edu.pe',
               'password' => bcrypt('10632045'),
          ]);
          User::create([
               'name' => 'BOLIVAR BRAVO, MAURO ENRIQUE',
               'email' => 'mbolivar@ucss.edu.pe',
               'password' => bcrypt('09825946'),
          ]);
          User::create([
               'name' => 'BONIFACIO RAMIREZ, PEDRO JESUS',
               'email' => 'pbonifacio@ucss.edu.pe',
               'password' => bcrypt('08663673'),
          ]);
          User::create([
               'name' => 'BORDA MIRANDA, NORMA MARLENE',
               'email' => 'nborda@ucss.edu.pe',
               'password' => bcrypt('08018545'),
          ]);
          User::create([
               'name' => 'BORDA OLIVAS, MABEL TEODORA',
               'email' => 'mborda@ucss.edu.pe',
               'password' => bcrypt('08149714'),
          ]);
          User::create([
               'name' => 'BOZA OLAECHEA, MARGARITA LUISA',
               'email' => 'mboza@ucss.edu.pe',
               'password' => bcrypt('21448115'),
          ]);
          User::create([
               'name' => 'BRAVO CORONEL, NATALY CLAUDIA',
               'email' => 'nbravo@ucss.edu.pe',
               'password' => bcrypt('41829782'),
          ]);
          User::create([
               'name' => 'BRAVO LOPEZ, NATALY',
               'email' => 'nbravol@ucss.edu.pe',
               'password' => bcrypt('10530728'),
          ]);
          User::create([
               'name' => 'BRAVO REBATTA, FERNANDO',
               'email' => 'fbravo@ucss.edu.pe',
               'password' => bcrypt('06865510'),
          ]);
          User::create([
               'name' => 'BRAVO ROBLES, JORGE ORLANDO',
               'email' => 'jbravo@ucss.edu.pe',
               'password' => bcrypt('09856623'),
          ]);
          User::create([
               'name' => 'BRAVO SAAVEDRA, NOEMI PAOLA',
               'email' => 'npbravo@ucss.edu.pe',
               'password' => bcrypt('41957078'),
          ]);
          User::create([
               'name' => 'BRAVO SAENZ, WALTER ALEJANDRO',
               'email' => 'wbravo@ucss.edu.pe',
               'password' => bcrypt('08080775'),
          ]);
          User::create([
               'name' => 'BRIOZZO PEREYRA, MARIA TERESA',
               'email' => 'tbriozzo@ucss.edu.pe',
               'password' => bcrypt('000367365'),
          ]);
          User::create([
               'name' => 'BRITO AVILA, JOSMELL',
               'email' => 'jbrito@ucss.edu.pe',
               'password' => bcrypt('42264395'),
          ]);
          User::create([
               'name' => 'BUENDIA ROMERO, CESAR ANTONIO',
               'email' => 'cbuendia@ucss.edu.pe',
               'password' => bcrypt('40723640'),
          ]);
          User::create([
               'name' => 'BUENO BENANCIO, SYCHELLES',
               'email' => 'sbueno@ucss.edu.pe',
               'password' => bcrypt('45459768'),
          ]);
          User::create([
               'name' => 'BUITRON CARRASCO, LUIS ALBERTO',
               'email' => 'lbuitron@ucss.edu.pe',
               'password' => bcrypt('43868699'),
          ]);
          User::create([
               'name' => 'BULLON POSADAS, RICARDO MANUEL',
               'email' => 'rbullon@ucss.edu.pe',
               'password' => bcrypt('20722821'),
          ]);
          User::create([
               'name' => 'BURGA CARRANZA, SEGUNDO',
               'email' => 'sburga@ucss.edu.pe',
               'password' => bcrypt('27283565'),
          ]);
          User::create([
               'name' => 'BURGA GUTIERREZ, ROSA MARIA',
               'email' => 'rburga@ucss.edu.pe',
               'password' => bcrypt('07747856'),
          ]);
          User::create([
               'name' => 'BURGOS BASTIDAS, ANGIE ROMY',
               'email' => 'aburgos@ucss.edu.pe',
               'password' => bcrypt('40067119'),
          ]);
          User::create([
               'name' => 'BUSTAMANTE MAITA, SHERLY TANIA',
               'email' => 'sbustamante@ucss.edu.pe',
               'password' => bcrypt('46443726'),
          ]);
          User::create([
               'name' => 'CABALLERO CANTU, JOSE JEREMIAS',
               'email' => 'jcaballero@ucss.edu.pe',
               'password' => bcrypt('15746875'),
          ]);
          User::create([
               'name' => 'CABANILLAS BARRETO, JUDITH JOHANA',
               'email' => 'jcabanillas@ucss.edu.pe',
               'password' => bcrypt('41284870'),
          ]);
          User::create([
               'name' => 'CABANILLAS ROJAS, WILLIAM EUGENIO',
               'email' => 'wcabanillas@ucss.edu.pe',
               'password' => bcrypt('09869377'),
          ]);
          User::create([
               'name' => 'CABELLO TORRES, RITA JAQUELINE',
               'email' => 'rcabello@ucss.edu.pe',
               'password' => bcrypt('08947396'),
          ]);
          User::create([
               'name' => 'CABEZA MOLINA, LUIS FELIPE',
               'email' => 'lcabeza@ucss.edu.pe',
               'password' => bcrypt('41536992'),
          ]);
          User::create([
               'name' => 'CABRACANCHA MONTESINOS, LENIN ROLANDO',
               'email' => 'lcabracancha@ucss.edu.pe',
               'password' => bcrypt('10690533'),
          ]);
          User::create([
               'name' => 'CABREJOS AMARINGO, KEILA',
               'email' => 'kcabrejos@ucss.edu.pe',
               'password' => bcrypt('00127774'),
          ]);
          User::create([
               'name' => 'CABRERA ABRAMONTE, PERCY MARTIN',
               'email' => 'pcabrera@ucss.edu.pe',
               'password' => bcrypt('03368743'),
          ]);
          User::create([
               'name' => 'CABRERA RONDOY, ROSA MERCEDES',
               'email' => 'rcabrera@ucss.edu.pe',
               'password' => bcrypt('09437845'),
          ]);
          User::create([
               'name' => 'CABRERA VILLENA, MISTER JOEL',
               'email' => 'mcabrera@ucss.edu.pe',
               'password' => bcrypt('27427329'),
          ]);
          User::create([
               'name' => 'CABRERA ZALDIVAR, MERCEDES MARTINA',
               'email' => 'mcabreraz@ucss.edu.pe',
               'password' => bcrypt('07031648'),
          ]);
          User::create([
               'name' => 'CACERES GUERRERO, FREDY OMIS',
               'email' => 'fcaceres@ucss.edu.pe',
               'password' => bcrypt('0758216'),
          ]);
          User::create([
               'name' => 'CACERES LEVI, ZALESKY DIANA',
               'email' => 'zcaceres@ucss.edu.pe',
               'password' => bcrypt('70912682'),
          ]);
          User::create([
               'name' => 'CACERES ORTEGA DE SANTIAGO, PATRICIA',
               'email' => 'pcaceres@ucss.edu.pe',
               'password' => bcrypt('10208095'),
          ]);
          User::create([
               'name' => 'CACHAY ORTIZ, WILHELM',
               'email' => 'wcachay@ucss.edu.pe',
               'password' => bcrypt('00807031'),
          ]);
          User::create([
               'name' => 'CADENILLAS REYMER, NEDDA NATIVIDAD',
               'email' => 'ncadenillas@ucss.edu.pe',
               'password' => bcrypt('10065160'),
          ]);
          User::create([
               'name' => 'CAHUANA RIOS, ESTEFANY CAROL',
               'email' => 'ecahuana@ucss.edu.pe',
               'password' => bcrypt('46816560'),
          ]);
          User::create([
               'name' => 'CAJACURI MARTINEZ, EDWIN WILLIAM',
               'email' => 'ecajacuri@ucss.edu.pe',
               'password' => bcrypt('09598166'),
          ]);
          User::create([
               'name' => 'CALDERON CAHUANA, DIANA LUCIA',
               'email' => 'dcalderon@ucss.edu.pe',
               'password' => bcrypt('40648408'),
          ]);
          User::create([
               'name' => 'CALDERON CASAS, EDGAR SANTIAGO',
               'email' => 'ecalderon@ucss.edu.pe',
               'password' => bcrypt('10248422'),
          ]);
          User::create([
               'name' => 'CALDERON CHAVEZ, JAIME TOMAS',
               'email' => 'jcalderonc@ucss.edu.pe',
               'password' => bcrypt('09128112'),
          ]);
          User::create([
               'name' => 'CALDERON DIAZ, GRIMALDO EDWIN',
               'email' => 'gcalderon@ucss.edu.pe',
               'password' => bcrypt('06664005'),
          ]);
          User::create([
               'name' => 'CALDERON FLORES, DANIEL ROLANDO',
               'email' => 'dcalderonf@ucss.edu.pe',
               'password' => bcrypt('10204648'),
          ]);
          User::create([
               'name' => 'CALDERON LEANDRO, JUAN MANUEL',
               'email' => 'jcalderon@ucss.edu.pe',
               'password' => bcrypt('16003105'),
          ]);
          User::create([
               'name' => 'CALDERON SALAZAR, ANTHONY',
               'email' => 'acalderon@ucss.edu.pe',
               'password' => bcrypt('09858493'),
          ]);
          User::create([
               'name' => 'CALIXTO ALIAGA, SILVIO GUSTAVO',
               'email' => 'scalixto@ucss.edu.pe',
               'password' => bcrypt('19857956'),
          ]);
          User::create([
               'name' => 'CALLE CALLE, SEGUNDO GERARDO',
               'email' => 'scalle@ucss.edu.pe',
               'password' => bcrypt('03303477'),
          ]);
          User::create([
               'name' => 'CALLE CASTILLO, RICARDO ALONSO',
               'email' => 'rcalle@ucss.edu.pe',
               'password' => bcrypt('03362563'),
          ]);
          User::create([
               'name' => 'CALLE CHANG, FELIPE',
               'email' => 'fcalle@ucss.edu.pe',
               'password' => bcrypt('07305392'),
          ]);
          User::create([
               'name' => 'CALLE CHEJE, YURI HOLSIN',
               'email' => 'ycalle@ucss.edu.pe',
               'password' => bcrypt('29587019'),
          ]);
          User::create([
               'name' => 'CALLE FLORES, JUVER DUBERLY',
               'email' => 'jcalle@ucss.edu.pe',
               'password' => bcrypt('40977900'),
          ]);
          User::create([
               'name' => 'CALLE QUINTANA, YONATAN FIDEL',
               'email' => 'ycallec@ucss.edu.pe',
               'password' => bcrypt('42812349'),
          ]);
          User::create([
               'name' => 'CALUA VASQUEZ, DAVID',
               'email' => 'dcalua@ucss.edu.pe',
               'password' => bcrypt('43747699'),
          ]);
          User::create([
               'name' => 'CAMARENA ARESTEGUI, JHON JHONY',
               'email' => 'jcamarena@ucss.edu.pe',
               'password' => bcrypt('08667250'),
          ]);
          User::create([
               'name' => 'CAMINO RIVERA, CRISTIAN ENMANUEL',
               'email' => 'ccamino@ucss.edu.pe',
               'password' => bcrypt('42658184'),
          ]);
          User::create([
               'name' => 'CAMPOBLANCO HIDALGO, VIVIANA YSABEL',
               'email' => 'vcampoblanco@ucss.edu.pe',
               'password' => bcrypt('43005695'),
          ]);
          User::create([
               'name' => 'CAMPOS DIAZ, HECTOR ALBERTO',
               'email' => 'hcampos@ucss.edu.pe',
               'password' => bcrypt('41920636'),
          ]);
          User::create([
               'name' => 'CAMPOS HUAMAN, JUAN MARTIN',
               'email' => 'jcampos@ucss.edu.pe',
               'password' => bcrypt('08676160'),
          ]);
          User::create([
               'name' => 'CAMPOS TORRES, CARLOS MOISES',
               'email' => 'ccampos@ucss.edu.pe',
               'password' => bcrypt('42035498'),
          ]);
          User::create([
               'name' => 'CAMPOS ZEVALLOS, DIOGENES',
               'email' => 'dcampos@ucss.edu.pe',
               'password' => bcrypt('46472698'),
          ]);
          User::create([
               'name' => 'CANALES SARMIENTO, NANCY CARMELA',
               'email' => 'ncanales@ucss.edu.pe',
               'password' => bcrypt('21561021'),
          ]);
          User::create([
               'name' => 'CANCHUCAJA RUIZ, EDELMIRA',
               'email' => 'ecanchucaja@ucss.edu.pe',
               'password' => bcrypt('07234855'),
          ]);
          User::create([
               'name' => 'CAÑOTE TABAKO, VADHI',
               'email' => 'vcanote@ucss.edu.pe',
               'password' => bcrypt('41772611'),
          ]);
          User::create([
               'name' => 'CAPUÑAY GONZALES, MARIA LIDIA',
               'email' => 'mcapunay@ucss.edu.pe',
               'password' => bcrypt('80278308'),
          ]);
          User::create([
               'name' => 'CARBAJAL ENCISO, CARLOS RODOLFO',
               'email' => 'ccarbajal@ucss.edu.pe',
               'password' => bcrypt('10684230'),
          ]);
          User::create([
               'name' => 'CARBAJAL MORRIS, GIOVANNA ROCIO',
               'email' => 'gcarbajal@ucss.edu.pe',
               'password' => bcrypt('10203983'),
          ]);
          User::create([
               'name' => 'CARDENAS CABEZAS, JESUS MEDALIT',
               'email' => 'mcardenas@ucss.edu.pe',
               'password' => bcrypt('04304833'),
          ]);
          User::create([
               'name' => 'CARDENAS LEDESMA, BLUIDSON',
               'email' => 'bcardenas@ucss.edu.pe',
               'password' => bcrypt('08665105'),
          ]);
          User::create([
               'name' => 'CARDENAS MENDEZ, DIEGO FERMIN',
               'email' => 'fcardenas@ucss.edu.pe',
               'password' => bcrypt('000599606'),
          ]);
          User::create([
               'name' => 'CARDENAS MORALES, CAROLA LUCIA',
               'email' => 'ccardenas@ucss.edu.pe',
               'password' => bcrypt('42671620'),
          ]);
          User::create([
               'name' => 'CARDENAS SAAVEDRA, ABRAHAM',
               'email' => 'acardenas@ucss.edu.pe',
               'password' => bcrypt('07424958'),
          ]);
          User::create([
               'name' => 'CARHUARICRA ALCA, JOSE LUIS',
               'email' => 'jcarhuaricra@ucss.edu.pe',
               'password' => bcrypt('42688342'),
          ]);
          User::create([
               'name' => 'CARPIO VARGAS, MIGUEL JOHN ROLLY',
               'email' => 'mcarpio@ucss.edu.pe',
               'password' => bcrypt('43204251'),
          ]);
          User::create([
               'name' => 'CARRANZA MACEDO, OLGA MARINA',
               'email' => 'ocarranza@ucss.edu.pe',
               'password' => bcrypt('08711261'),
          ]);
          User::create([
               'name' => 'CARRANZA VILLALOBOS, SAMUEL',
               'email' => 'scarranza@ucss.edu.pe',
               'password' => bcrypt('42111772'),
          ]);
          User::create([
               'name' => 'CARRASCAL VIZARRETA, URSULA',
               'email' => 'ucarrascal@ucss.edu.pe',
               'password' => bcrypt('10735921'),
          ]);
          User::create([
               'name' => 'CARRASCO HURTADO, CIRILO',
               'email' => 'ccarrasco@ucss.edu.pe',
               'password' => bcrypt('09571296'),
          ]);
          User::create([
               'name' => 'CARRASCO LOPEZ, ILIANOV PABLO',
               'email' => 'icarrasco@ucss.edu.pe',
               'password' => bcrypt('09982771'),
          ]);
          User::create([
               'name' => 'CARREÑO MARTINEZ, JUAN ELIAS',
               'email' => 'jcarreno@ucss.edu.pe',
               'password' => bcrypt('09339841'),
          ]);
          User::create([
               'name' => 'CARREÑO ROLDAN, ALBERTO DANILO',
               'email' => 'acarreno@ucss.edu.pe',
               'password' => bcrypt('15612175'),
          ]);
          User::create([
               'name' => 'CARRERA SAAVEDRA, CESAR EDUARDO',
               'email' => 'ccarrera@ucss.edu.pe',
               'password' => bcrypt('09792944'),
          ]);
          User::create([
               'name' => 'CARRIL LLANOS, EDGARD JHONAS',
               'email' => 'ecarril@ucss.edu.pe',
               'password' => bcrypt('09634286'),
          ]);
          User::create([
               'name' => 'CARRILLO JARA, DANIEL ANDRES',
               'email' => 'dcarrillo@ucss.edu.pe',
               'password' => bcrypt('43971306'),
          ]);
          User::create([
               'name' => 'CARRION RAMOS, ROQUE VLADIMIR',
               'email' => 'rcarrion@ucss.edu.pe',
               'password' => bcrypt('09900445'),
          ]);
          User::create([
               'name' => 'CARRION ROSILLO, HENDERSON NOE',
               'email' => 'hcarrion@ucss.edu.pe',
               'password' => bcrypt('44130651'),
          ]);
          User::create([
               'name' => 'CASASOLA PEÑA, YOCELIN ERMILA',
               'email' => 'ycasasola@ucss.edu.pe',
               'password' => bcrypt('41117242'),
          ]);
          User::create([
               'name' => 'CASELLI, CLARA GEMMA MARIA ESTER',
               'email' => 'ccaselli@ucss.edu.pe',
               'password' => bcrypt('000188886'),
          ]);
          User::create([
               'name' => 'CASIQUE CORONADO, AMALIA RUBIELA',
               'email' => 'acasique@ucss.edu.pe',
               'password' => bcrypt('46443460'),
          ]);
          User::create([
               'name' => 'CASIQUE CORONADO, LUZMILA',
               'email' => 'lcasique@ucss.edu.pe',
               'password' => bcrypt('00159135'),
          ]);
          User::create([
               'name' => 'CASTAÑEDA CHIRRE, ELVIRA TEOFILA',
               'email' => 'ecastaneda@ucss.edu.pe',
               'password' => bcrypt('15744138'),
          ]);
          User::create([
               'name' => 'CASTAÑEDA RAMIREZ, CESAR WALTER',
               'email' => 'ccastaneda@ucss.edu.pe',
               'password' => bcrypt('06188898'),
          ]);
          User::create([
               'name' => 'CASTAÑEDA SANCHEZ, MAGDA  ISABEL',
               'email' => 'mcastanedas@ucss.edu.pe',
               'password' => bcrypt('40459287'),
          ]);
          User::create([
               'name' => 'CASTILLA CRUZ, HILARIO',
               'email' => 'hcastilla@ucss.edu.pe',
               'password' => bcrypt('00163075'),
          ]);
          User::create([
               'name' => 'CASTILLO ALBINES, CARLOS HILDEBRANDO',
               'email' => 'ccastillo@ucss.edu.pe',
               'password' => bcrypt('05643958'),
          ]);
          User::create([
               'name' => 'CASTILLO DE LA CADENA, JORGE MARTIN',
               'email' => 'jcastillo@ucss.edu.pe',
               'password' => bcrypt('10523047'),
          ]);
          User::create([
               'name' => 'CASTILLO GUTIERREZ, GIANCARLO',
               'email' => 'gcastillo@ucss.edu.pe',
               'password' => bcrypt('41648542'),
          ]);
          User::create([
               'name' => 'CASTILLO JIMENEZ, ARACELY',
               'email' => 'acastillo@ucss.edu.pe',
               'password' => bcrypt('41388744'),
          ]);
          User::create([
               'name' => 'CASTILLO MEDINA, SIXTA ISABEL',
               'email' => 'scastillo@ucss.edu.pe',
               'password' => bcrypt('25839374'),
          ]);
          User::create([
               'name' => 'CASTILLO MORE, FRANCISCO',
               'email' => 'fcastillo@ucss.edu.pe',
               'password' => bcrypt('15589942'),
          ]);
          User::create([
               'name' => 'CASTILLO PEREZ, VERONICA MILAGROS',
               'email' => 'mcastillo@ucss.edu.pe',
               'password' => bcrypt('10728565'),
          ]);
          User::create([
               'name' => 'CASTILLO PICHEN, SEGUNDO CESAR',
               'email' => 'scastillop@ucss.edu.pe',
               'password' => bcrypt('08124577'),
          ]);
          User::create([
               'name' => 'CASTILLO PINTADO, YENNIFER DEL PILAR',
               'email' => 'ycastillo@ucss.edu.pe',
               'password' => bcrypt('41227137'),
          ]);
          User::create([
               'name' => 'CASTILLO TORRES, ROBERTO GALO',
               'email' => 'rgcastillo@ucss.edu.pe',
               'password' => bcrypt('44141806'),
          ]);
          User::create([
               'name' => 'CASTRO ARELLANO, PAOLA DEL MILAGRO',
               'email' => 'pcastro@ucss.edu.pe',
               'password' => bcrypt('41197905'),
          ]);
          User::create([
               'name' => 'CASTRO BARTOLOME, HECTOR JORGE',
               'email' => 'hcastro@ucss.edu.pe',
               'password' => bcrypt('15601765'),
          ]);
          User::create([
               'name' => 'CASTRO CURI, SABINA',
               'email' => 'scastro@ucss.edu.pe',
               'password' => bcrypt('42260573'),
          ]);
          User::create([
               'name' => 'CASTRO DIAZ, GLADYS ANTONIETA',
               'email' => 'gcastro@ucss.edu.pe',
               'password' => bcrypt('17892495'),
          ]);
          User::create([
               'name' => 'CASTRO GONGORA, ELMER',
               'email' => 'ecastro@ucss.edu.pe',
               'password' => bcrypt('46100384'),
          ]);
          User::create([
               'name' => 'CASTRO LARREA, ABEL GREGORIO',
               'email' => 'acastro@ucss.edu.pe',
               'password' => bcrypt('10304324'),
          ]);
          User::create([
               'name' => 'CASTRO MEDINA, MAXIMILIANA IRENE',
               'email' => 'mcastro@ucss.edu.pe',
               'password' => bcrypt('06962611'),
          ]);
          User::create([
               'name' => 'CASTRO MITAC, JOSE DAVID',
               'email' => 'jcastro@ucss.edu.pe',
               'password' => bcrypt('21574065'),
          ]);
          User::create([
               'name' => 'CASTRO RETES, AUGUSTO ANGEL',
               'email' => 'acastror@ucss.edu.pe',
               'password' => bcrypt('07266254'),
          ]);
          User::create([
               'name' => 'CAUTI DE LA CRUZ, JORGE ANTONIO',
               'email' => 'jcauti@ucss.edu.pe',
               'password' => bcrypt('06702268'),
          ]);
          User::create([
               'name' => 'CAVENAGO CACERES, VANESSA ALESSANDRA',
               'email' => 'vcavenago@ucss.edu.pe',
               'password' => bcrypt('41496145'),
          ]);
          User::create([
               'name' => 'CECILIANO CAMONES, SHIRLEY',
               'email' => 'sceciliano@ucss.edu.pe',
               'password' => bcrypt('45473955'),
          ]);
          User::create([
               'name' => 'CERNA ARGUELLES, WILMER VICTORIANO',
               'email' => 'wcerna@ucss.edu.pe',
               'password' => bcrypt('08097326'),
          ]);
          User::create([
               'name' => 'CERON SALAZAR, NORMA JULIETA',
               'email' => 'nceron@ucss.edu.pe',
               'password' => bcrypt('10207235'),
          ]);
          User::create([
               'name' => 'CESPEDES PANDURO, BERNARDO',
               'email' => 'bcespedes@ucss.edu.pe',
               'password' => bcrypt('17615559'),
          ]);
          User::create([
               'name' => 'CESPEDES PANDURO, JACOBA DEL PILAR',
               'email' => 'pcespedes@ucss.edu.pe',
               'password' => bcrypt('17561750'),
          ]);
          User::create([
               'name' => 'CESPEDES PANDURO, SUGEIT EMPERATRIZ',
               'email' => 'scespedes@ucss.edu.pe',
               'password' => bcrypt('17634166'),
          ]);
          User::create([
               'name' => 'CHALCO BRAVO, FANNY ISABEL',
               'email' => 'fchalco@ucss.edu.pe',
               'password' => bcrypt('09242842'),
          ]);
          User::create([
               'name' => 'CHAPARRO GAMARRA, KATIA DENISSE',
               'email' => 'kchaparro@ucss.edu.pe',
               'password' => bcrypt('41983544'),
          ]);
          User::create([
               'name' => 'CHAVEZ AGUIRRE, FELIX ALFONSO',
               'email' => 'fchavez@ucss.edu.pe',
               'password' => bcrypt('29720988'),
          ]);
          User::create([
               'name' => 'CHAVEZ BARCES, MARIA ELENA',
               'email' => 'echavez@ucss.edu.pe',
               'password' => bcrypt('08500622'),
          ]);
          User::create([
               'name' => 'CHAVEZ BRAVO, BAYRON FANOR',
               'email' => 'bchavez@ucss.edu.pe',
               'password' => bcrypt('44543868'),
          ]);
          User::create([
               'name' => 'CHAVEZ CHOCANO, JORGE LUIS',
               'email' => 'jchavezc@ucss.edu.pe',
               'password' => bcrypt('70425201'),
          ]);
          User::create([
               'name' => 'CHAVEZ CONDE, JIMMY RICHARD',
               'email' => 'rchavez@ucss.edu.pe',
               'password' => bcrypt('10186311'),
          ]);
          User::create([
               'name' => 'CHAVEZ DE PIEROLA, MARIA PILAR',
               'email' => 'mchavez@ucss.edu.pe',
               'password' => bcrypt('09643513'),
          ]);
          User::create([
               'name' => 'CHAVEZ FILINICH, TATIANA MYRLENKO',
               'email' => 'tchavez@ucss.edu.pe',
               'password' => bcrypt('29736982'),
          ]);
          User::create([
               'name' => 'CHAVEZ HERRERA, HERNANDO',
               'email' => 'hchavezh@ucss.edu.pe',
               'password' => bcrypt('10008675'),
          ]);
          User::create([
               'name' => 'CHAVEZ HIDALGO, KELY',
               'email' => 'kchavezh@ucss.edu.pe',
               'password' => bcrypt('32544356'),
          ]);
          User::create([
               'name' => 'CHAVEZ MEDRANO, VICTOR RICARDO',
               'email' => 'vchavez@ucss.edu.pe',
               'password' => bcrypt('09883255'),
          ]);
          User::create([
               'name' => 'CHAVEZ NORABUENA, KARINA JUDITH',
               'email' => 'kchavez@ucss.edu.pe',
               'password' => bcrypt('09893536'),
          ]);
          User::create([
               'name' => 'CHAVEZ PRADO, ANGELICA MARITZA',
               'email' => 'achavez@ucss.edu.pe',
               'password' => bcrypt('09140700'),
          ]);
          User::create([
               'name' => 'CHAVEZ PRADO, PEDRO NICOLAS',
               'email' => 'pchavez@ucss.edu.pe',
               'password' => bcrypt('09140833'),
          ]);
          User::create([
               'name' => 'CHAVEZ RIOS, ERIC MIGUEL',
               'email' => 'echavezr@ucss.edu.pe',
               'password' => bcrypt('46615143'),
          ]);
          User::create([
               'name' => 'CHAVEZ VEGA, CARLOS',
               'email' => 'cchavez@ucss.edu.pe',
               'password' => bcrypt('08470274'),
          ]);
          User::create([
               'name' => 'CHICLLA SALAZAR, ARMANDO',
               'email' => 'achiclla@ucss.edu.pe',
               'password' => bcrypt('09967838'),
          ]);
          User::create([
               'name' => 'CHICLOTE ALIAGA, JULISSA JANET',
               'email' => 'jchiclote@ucss.edu.pe',
               'password' => bcrypt('09629747'),
          ]);
          User::create([
               'name' => 'CHICOMA BELLODAS, JORGE LUIS',
               'email' => 'jchicoma@ucss.edu.pe',
               'password' => bcrypt('17606850'),
          ]);
          User::create([
               'name' => 'CHINCHA ALVAREZ, ANA MARIA NINOSHKA',
               'email' => 'achincha@ucss.edu.pe',
               'password' => bcrypt('08185119'),
          ]);
          User::create([
               'name' => 'CHINCHAY QUISPE, CAROLINA ROSARIO',
               'email' => 'cchinchay@ucss.edu.pe',
               'password' => bcrypt('46141313'),
          ]);
          User::create([
               'name' => 'CHINERI PINEDO, EUSEBIO',
               'email' => 'echineri@ucss.edu.pe',
               'password' => bcrypt('00155369'),
          ]);
          User::create([
               'name' => 'CHINGUEL CRUZ, AGRIPINO',
               'email' => 'achinguel@ucss.edu.pe',
               'password' => bcrypt('02600843'),
          ]);
          User::create([
               'name' => 'CHIRINOS BANCAYAN, JESUS ANTONIO',
               'email' => 'jachirinos@ucss.edu.pe',
               'password' => bcrypt('08602290'),
          ]);
          User::create([
               'name' => 'CHIROQUE FARFAN, LUIS ALBERTO',
               'email' => 'lchiroque@ucss.edu.pe',
               'password' => bcrypt('03369121'),
          ]);
          User::create([
               'name' => 'CHIROQUE FLORES, VICTOR MANUEL',
               'email' => 'vchiroque@ucss.edu.pe',
               'password' => bcrypt('03317072'),
          ]);
          User::create([
               'name' => 'CHIROQUE VELASQUEZ, GRISEL VIOLETA',
               'email' => 'gchiroque@ucss.edu.pe',
               'password' => bcrypt('40664123'),
          ]);
          User::create([
               'name' => 'CHOCANO HURTADO, ANGEL',
               'email' => 'achocano@ucss.edu.pe',
               'password' => bcrypt('43562632'),
          ]);
          User::create([
               'name' => 'CHONG CENTURION, ERNESTO GALVARINO',
               'email' => 'echong@ucss.edu.pe',
               'password' => bcrypt('06157624'),
          ]);
          User::create([
               'name' => 'CHOQUEHUANCA FLORES, LEONOR',
               'email' => 'lchoquehuanca@ucss.edu.pe',
               'password' => bcrypt('08074761'),
          ]);
          User::create([
               'name' => 'CHUMACERO TORRES, SEGUNDO NICOLAS',
               'email' => 'schumacero@ucss.edu.pe',
               'password' => bcrypt('40908131'),
          ]);
          User::create([
               'name' => 'CHUMBES HENRIQUEZ, LILIANA ROCIO',
               'email' => 'lchumbes@ucss.edu.pe',
               'password' => bcrypt('15727683'),
          ]);
          User::create([
               'name' => 'CHUNGA TRELLES, WILLIAM NEMESIO',
               'email' => 'wchunga@ucss.edu.pe',
               'password' => bcrypt('03698107'),
          ]);
          User::create([
               'name' => 'CHURA RODRIGUEZ, EDDY RUBEN',
               'email' => 'echura@ucss.edu.pe',
               'password' => bcrypt('41605211'),
          ]);
          User::create([
               'name' => 'CIELO SANDOVAL, LUZ GLADYS',
               'email' => 'lcielo@ucss.edu.pe',
               'password' => bcrypt('32905530'),
          ]);
          User::create([
               'name' => 'CISNEROS AYALA, CLAUDIA',
               'email' => 'ccisnerosa@ucss.edu.pe',
               'password' => bcrypt('09673277'),
          ]);
          User::create([
               'name' => 'CISNEROS HUAMAN, CARLA ROCIO',
               'email' => 'ccisneros@ucss.edu.pe',
               'password' => bcrypt('44787926'),
          ]);
          User::create([
               'name' => 'CIUDAD LONCHARICH, ROSA CATALINA',
               'email' => 'rciudad@ucss.edu.pe',
               'password' => bcrypt('08193128'),
          ]);
          User::create([
               'name' => 'CJAHUA HUANACHI, ZITA SILVIA',
               'email' => 'zcjahua@ucss.edu.pe',
               'password' => bcrypt('08732585'),
          ]);
          User::create([
               'name' => 'CLAROS SANTIAGO, CARLOS EDUARDO',
               'email' => 'cclaros@ucss.edu.pe',
               'password' => bcrypt('40343126'),
          ]);
          User::create([
               'name' => 'CLAVIJO TARAZONA, JOSE LUIS',
               'email' => 'jclavijo@ucss.edu.pe',
               'password' => bcrypt('10533795'),
          ]);
          User::create([
               'name' => 'COARITE CABRERA, GIOVANNA MAGALY',
               'email' => 'gcoarite@ucss.edu.pe',
               'password' => bcrypt('25842157'),
          ]);
          User::create([
               'name' => 'COLACHAGUA PUCUHUAYLA, EDGAR DAVID',
               'email' => 'ecolachagua@ucss.edu.pe',
               'password' => bcrypt('10617831'),
          ]);
          User::create([
               'name' => 'COLAN VALLADARES, CESAR EDUARDO',
               'email' => 'ccolan@ucss.edu.pe',
               'password' => bcrypt('41376156'),
          ]);
          User::create([
               'name' => 'COLCAS ACUÑA, VLADIMIR',
               'email' => 'vcolcas@ucss.edu.pe',
               'password' => bcrypt('25854140'),
          ]);
          User::create([
               'name' => 'COLL NAVARRO, JOSE ABEL',
               'email' => 'jacoll@ucss.edu.pe',
               'password' => bcrypt('000403191'),
          ]);
          User::create([
               'name' => 'COLLANTES NAVARRETE, VICTOR EDUARDO',
               'email' => 'vcollantes@ucss.edu.pe',
               'password' => bcrypt('06090425'),
          ]);
          User::create([
               'name' => 'COLLAZOS GUTIERREZ, ADELMA ELIZABETH',
               'email' => 'acollazos@ucss.edu.pe',
               'password' => bcrypt('08042573'),
          ]);
          User::create([
               'name' => 'COLONIA COTRINA, SHERRYL HEIDI',
               'email' => 'scolonia@ucss.edu.pe',
               'password' => bcrypt('44001957'),
          ]);
          User::create([
               'name' => 'COLONNA ARANDA, MANUEL FRANCISCO',
               'email' => 'mcolonna@ucss.edu.pe',
               'password' => bcrypt('03460660'),
          ]);
          User::create([
               'name' => 'CONDEMARIN MARROQUIN, CARMEN LUISA',
               'email' => 'ccondemarin@ucss.edu.pe',
               'password' => bcrypt('07568116'),
          ]);
          User::create([
               'name' => 'CONTINI ., GIULIANA',
               'email' => 'gcontini@ucss.edu.pe',
               'password' => bcrypt('000420096'),
          ]);
          User::create([
               'name' => 'CONTRERAS FLORES, LEONARDO JAVIER',
               'email' => 'lcontreras@ucss.edu.pe',
               'password' => bcrypt('10194219'),
          ]);
          User::create([
               'name' => 'CONTRERAS FLORES, WALTER PEDRO',
               'email' => 'wcontreras@ucss.edu.pe',
               'password' => bcrypt('07743259'),
          ]);
          User::create([
               'name' => 'CONTRERAS LLALLICO, JULIAN ARMANDO',
               'email' => 'jcontreras@ucss.edu.pe',
               'password' => bcrypt('06010898'),
          ]);
          User::create([
               'name' => 'CONTRERAS ZAMBRANO, JESUS MANUEL',
               'email' => 'jmcontreras@ucss.edu.pe',
               'password' => bcrypt('10605631'),
          ]);
          User::create([
               'name' => 'CORAL PAJUELO, JULIA VILMA',
               'email' => 'jcoral@ucss.edu.pe',
               'password' => bcrypt('09080896'),
          ]);
          User::create([
               'name' => 'CORAL YGNACIO, MARCO ANTONIO',
               'email' => 'mcoral@ucss.edu.pe',
               'password' => bcrypt('09983907'),
          ]);
          User::create([
               'name' => 'CORDERO GOMEZ, SABRINA ZARELLA',
               'email' => 'scordero@ucss.edu.pe',
               'password' => bcrypt('41553981'),
          ]);
          User::create([
               'name' => 'CORDOVA ALVA, GERARDO ANTONIO',
               'email' => 'gcordova@ucss.edu.pe',
               'password' => bcrypt('03372644'),
          ]);
          User::create([
               'name' => 'CORDOVA CARRILLO, MARIBEL MERCEDES',
               'email' => 'mcordovac@ucss.edu.pe',
               'password' => bcrypt('43432718'),
          ]);
          User::create([
               'name' => 'CORDOVA HUAMAN, ERIKA MILAGROS',
               'email' => 'ecordova@ucss.edu.pe',
               'password' => bcrypt('41030442'),
          ]);
          User::create([
               'name' => 'CORDOVA HUAMANI, SAUL JORGE',
               'email' => 'scordova@ucss.edu.pe',
               'password' => bcrypt('07493198'),
          ]);
          User::create([
               'name' => 'CORDOVA RENGIFO, JESSICA JANETH',
               'email' => 'jcordova@ucss.edu.pe',
               'password' => bcrypt('46689210'),
          ]);
          User::create([
               'name' => 'CORDOVA SALCEDO, FELIMON DOMINGO',
               'email' => 'fcordova@ucss.edu.pe',
               'password' => bcrypt('16647035'),
          ]);
          User::create([
               'name' => 'CORNEJO GUERRERO, CARLOS ALEJANDRO',
               'email' => 'ccornejog@ucss.edu.pe',
               'password' => bcrypt('06204372'),
          ]);
          User::create([
               'name' => 'CORNEJO GUERRERO, CARLOS EDUARDO',
               'email' => 'ccornejo@ucss.edu.pe',
               'password' => bcrypt('21137302'),
          ]);
          User::create([
               'name' => 'CORONADO SANTILLAN, LUIS AUGUSTO',
               'email' => 'lcoronado@ucss.edu.pe',
               'password' => bcrypt('21444290'),
          ]);
          User::create([
               'name' => 'CORONEL DELGADO, ELMER TEOFILO',
               'email' => 'ecoroneld@ucss.edu.pe',
               'password' => bcrypt('27748885'),
          ]);
          User::create([
               'name' => 'CORONEL QUINTEROS, EDITH MARIA',
               'email' => 'ecoronel@ucss.edu.pe',
               'password' => bcrypt('21060243'),
          ]);
          User::create([
               'name' => 'CORTEZ HEREDIA, NORBERTO PIERO',
               'email' => 'ncortez@ucss.edu.pe',
               'password' => bcrypt('21532032'),
          ]);
          User::create([
               'name' => 'CORTEZ MONDRAGON, CESAR SEGUNDO',
               'email' => 'ccortez@ucss.edu.pe',
               'password' => bcrypt('08569923'),
          ]);
          User::create([
               'name' => 'CORTEZ VASQUEZ, AUGUSTO PARCEMON',
               'email' => 'acortez@ucss.edu.pe',
               'password' => bcrypt('08634618'),
          ]);
          User::create([
               'name' => 'CORZO MARTINEZ, BEATRIZ NORMA LEONOR',
               'email' => 'bcorzo@ucss.edu.pe',
               'password' => bcrypt('06058890'),
          ]);
          User::create([
               'name' => 'CORZO NAVARRETE, FRESIA BRUSELAS',
               'email' => 'fcorzo@ucss.edu.pe',
               'password' => bcrypt('07628241'),
          ]);
          User::create([
               'name' => 'COSME FELIX, MIRYAM MILAGROS',
               'email' => 'mcosme@ucss.edu.pe',
               'password' => bcrypt('06326376'),
          ]);
          User::create([
               'name' => 'COSTA RODRIGUEZ, JORGE EDUARDO',
               'email' => 'jcosta@ucss.edu.pe',
               'password' => bcrypt('10063247'),
          ]);
          User::create([
               'name' => 'COZ CONTRERAS, SOFIA',
               'email' => 'scoz@ucss.edu.pe',
               'password' => bcrypt('40580884'),
          ]);
          User::create([
               'name' => 'COZ CONTRERAS, VANESA CAROLINA',
               'email' => 'vcoz@ucss.edu.pe',
               'password' => bcrypt('06807083'),
          ]);
          User::create([
               'name' => 'CRIOLLO LAOS, PEDRO LORENZO',
               'email' => 'pcriollo@ucss.edu.pe',
               'password' => bcrypt('08245231'),
          ]);
          User::create([
               'name' => 'CRISANTO PLASENCIA, ILICH CARLOS DEMETRIO',
               'email' => 'icrisanto@ucss.edu.pe',
               'password' => bcrypt('45304826'),
          ]);
          User::create([
               'name' => 'CRISTOBAL VELASQUEZ, DORIS HILDA',
               'email' => 'dcristobal@ucss.edu.pe',
               'password' => bcrypt('08780148'),
          ]);
          User::create([
               'name' => 'CRUZ ACUÑA, EDGAR ODON',
               'email' => 'ecruz@ucss.edu.pe',
               'password' => bcrypt('06660409'),
          ]);
          User::create([
               'name' => 'CRUZ ALBURQUEQUE, CARLOS EDUARDO',
               'email' => 'ccruz@ucss.edu.pe',
               'password' => bcrypt('47171351'),
          ]);
          User::create([
               'name' => 'CRUZ CAMPOVERDE, GILMER',
               'email' => 'gcruz@ucss.edu.pe',
               'password' => bcrypt('42979340'),
          ]);
          User::create([
               'name' => 'CRUZ RUIZ, OSWALDO',
               'email' => 'ocruiz@ucss.edu.pe',
               'password' => bcrypt('09413797'),
          ]);
          User::create([
               'name' => 'CRUZ VENEGAS, AUGUSTO ARMANDO',
               'email' => 'acruz@ucss.edu.pe',
               'password' => bcrypt('02636114'),
          ]);
          User::create([
               'name' => 'CRUZ ZEVALLOS, JORGE ARMANDO II',
               'email' => 'jcruz@ucss.edu.pe',
               'password' => bcrypt('40454394'),
          ]);
          User::create([
               'name' => 'CRUZADO MELENDEZ, MELINA ROXANA',
               'email' => 'mcruzado@ucss.edu.pe',
               'password' => bcrypt('40113161'),
          ]);
          User::create([
               'name' => 'CUADROS ANGULO, JOHN EDWARD',
               'email' => 'jcuadros@ucss.edu.pe',
               'password' => bcrypt('07757444'),
          ]);
          User::create([
               'name' => 'CUBA HUANAY, YNEZ ESTRELLA',
               'email' => 'ycuba@ucss.edu.pe',
               'password' => bcrypt('20016271'),
          ]);
          User::create([
               'name' => 'CUBOS SIFUENTES, UVER',
               'email' => 'ucubos@ucss.edu.pe',
               'password' => bcrypt('42739887'),
          ]);
          User::create([
               'name' => 'CUENCA CARTAGENA, VIOLETA EMPERATRIZ',
               'email' => 'vcuenca@ucss.edu.pe',
               'password' => bcrypt('08423996'),
          ]);
          User::create([
               'name' => 'CUEVA QUINTANILLA, MARCO ANTONIO',
               'email' => 'mcuevaq@ucss.edu.pe',
               'password' => bcrypt('20029355'),
          ]);
          User::create([
               'name' => 'CUNGUIA PIEDRA, DEYVI DAVID',
               'email' => 'dcunguia@ucss.edu.pe',
               'password' => bcrypt('45926539'),
          ]);
          User::create([
               'name' => 'CURI RAMOS, SAMUEL RUBEN',
               'email' => 'scuri@ucss.edu.pe',
               'password' => bcrypt('20104104'),
          ]);
          User::create([
               'name' => 'CUROTTO ALMEIDA, FELIX AMADOR',
               'email' => 'fcurotto@ucss.edu.pe',
               'password' => bcrypt('25504596'),
          ]);
          User::create([
               'name' => 'DAVALOS ARCA, JOSEPH KENNETH',
               'email' => 'jdavalos@ucss.edu.pe',
               'password' => bcrypt('41414387'),
          ]);
          User::create([
               'name' => 'DAVILA DIAZ, MARIA ELENA',
               'email' => 'mdavila@ucss.edu.pe',
               'password' => bcrypt('06606627'),
          ]);
          User::create([
               'name' => 'DAVILA HUIVIN, GIANNINA',
               'email' => 'gdavila@ucss.edu.pe',
               'password' => bcrypt('44358036'),
          ]);
          User::create([
               'name' => 'DAVILA LAGUNA, RONALD FERNANDO',
               'email' => 'rdavila@ucss.edu.pe',
               'password' => bcrypt('22423025'),
          ]);
          User::create([
               'name' => 'DAVILA MELENDEZ, JORGE LUIS',
               'email' => 'jdavilam@ucss.edu.pe',
               'password' => bcrypt('09155340'),
          ]);
          User::create([
               'name' => 'DAVILA TAPIA, JOSE VICENTE',
               'email' => 'jdavila@ucss.edu.pe',
               'password' => bcrypt('08519098'),
          ]);
          User::create([
               'name' => 'DE FREITAS ESPINOZA, CLOTILDE ZORAIDA',
               'email' => 'cdefreitas@ucss.edu.pe',
               'password' => bcrypt('06180497'),
          ]);
          User::create([
               'name' => 'DE LA CALLE VEGA, PAOLO RENZO',
               'email' => 'pdelacalle@ucss.edu.pe',
               'password' => bcrypt('43831405'),
          ]);
          User::create([
               'name' => 'DE LA CRUZ CAMACO, DANTE PEDRO',
               'email' => 'ddelacruz@ucss.edu.pe',
               'password' => bcrypt('07681903'),
          ]);
          User::create([
               'name' => 'DE LA CRUZ SUAREZ, CARLOS',
               'email' => 'cdelacruz@ucss.edu.pe',
               'password' => bcrypt('42556680'),
          ]);
          User::create([
               'name' => 'DE LA ROSA VALVERDE, CECILIA MELCHORA',
               'email' => 'cdelarosa@ucss.edu.pe',
               'password' => bcrypt('08707499'),
          ]);
          User::create([
               'name' => 'DE LA ROSA VALVERDE, PEDRO LUIS ENRIQUE',
               'email' => 'pdelarosa@ucss.edu.pe',
               'password' => bcrypt('08737456'),
          ]);
          User::create([
               'name' => 'DE PAZ BERROSPI, ERICA MERCEDES',
               'email' => 'edepaz@ucss.edu.pe',
               'password' => bcrypt('09631501'),
          ]);
          User::create([
               'name' => 'DE SOUZA FERREYRA LLAQUE, CARLOS ANIBAL',
               'email' => 'cdesouza@ucss.edu.pe',
               'password' => bcrypt('08716573'),
          ]);
          User::create([
               'name' => 'DEL AGUILA ESCOBEDO, LIA LUZ',
               'email' => 'ldaguila@ucss.edu.pe',
               'password' => bcrypt('07708074'),
          ]);
          User::create([
               'name' => 'DEL AGUILA PINEDO, MERCY MILUSKA',
               'email' => 'mdelaguila@ucss.edu.pe',
               'password' => bcrypt('46284951'),
          ]);
          User::create([
               'name' => 'DEL AGUILA TRIGOSO, NONOY',
               'email' => 'ndaguila@ucss.edu.pe',
               'password' => bcrypt('00160097'),
          ]);
          User::create([
               'name' => 'DEL BUSTO BRETONECHE, RAFAEL MARTIN',
               'email' => 'rdbusto@ucss.edu.pe',
               'password' => bcrypt('07760676'),
          ]);
          User::create([
               'name' => 'DEL BUSTO BRETONECHE, RAUL ENRIQUE',
               'email' => 'rbustob@ucss.edu.pe',
               'password' => bcrypt('07764635'),
          ]);
          User::create([
               'name' => 'DEL CAMPO GAYTAN, TEOBALDO JULIO',
               'email' => 'tdelcampos@ucss.edu.pe',
               'password' => bcrypt('07876526'),
          ]);
          User::create([
               'name' => 'DEL CASTILLO VELA, ERICK',
               'email' => 'edcastillo@ucss.edu.pe',
               'password' => bcrypt('80211995'),
          ]);
          User::create([
               'name' => 'DELGADO DIAZ, DORA BELISA',
               'email' => 'ddelgado@ucss.edu.pe',
               'password' => bcrypt('46547993'),
          ]);
          User::create([
               'name' => 'DELGADO GUARDIA, ORLANDO ROSSBEL',
               'email' => 'odelgado@ucss.edu.pe',
               'password' => bcrypt('40883833'),
          ]);
          User::create([
               'name' => 'DELGADO HEREDIA, ELIAS',
               'email' => 'edelgado@ucss.edu.pe',
               'password' => bcrypt('41296093'),
          ]);
          User::create([
               'name' => 'DELGADO RAMIREZ, FELIX GERMAN',
               'email' => 'fdelgado@ucss.edu.pe',
               'password' => bcrypt('22264222'),
          ]);
          User::create([
               'name' => 'DELGADO ROSAS, LUIS ALBERTO',
               'email' => 'ldelgado@ucss.edu.pe',
               'password' => bcrypt('08627685'),
          ]);
          User::create([
               'name' => 'DELGADO TARA, JORGE MIGUEL',
               'email' => 'jmdelgado@ucss.edu.pe',
               'password' => bcrypt('25436014'),
          ]);
          User::create([
               'name' => 'DESULOVICH VERTIZ, OSCAR CARLOS ANTONIO',
               'email' => 'odesulovich@ucss.edu.pe',
               'password' => bcrypt('08781583'),
          ]);
          User::create([
               'name' => 'DIAZ CANO, JAIME EDUARDO',
               'email' => 'jdiaz@ucss.edu.pe',
               'password' => bcrypt('10315319'),
          ]);
          User::create([
               'name' => 'DIAZ DIAZ, LILIANA',
               'email' => 'ldiazd@ucss.edu.pe',
               'password' => bcrypt('10738430'),
          ]);
          User::create([
               'name' => 'DIAZ ENRIQUEZ, NOELIA',
               'email' => 'ndiaz@ucss.edu.pe',
               'password' => bcrypt('10624280'),
          ]);
          User::create([
               'name' => 'DIAZ GAMARRA, PATRICIA DEL PILAR',
               'email' => 'pdiaz@ucss.edu.pe',
               'password' => bcrypt('10506632'),
          ]);
          User::create([
               'name' => 'DIAZ GERVASI, GIOVANI MARTIN',
               'email' => 'gdiaz@ucss.edu.pe',
               'password' => bcrypt('10301350'),
          ]);
          User::create([
               'name' => 'DIAZ GONZALEZ, EMITERIO',
               'email' => 'ediaz@ucss.edu.pe',
               'password' => bcrypt('41879231'),
          ]);
          User::create([
               'name' => 'DIAZ HERMOZA, MILAGROS CECILIA',
               'email' => 'mdiaz@ucss.edu.pe',
               'password' => bcrypt('40088143'),
          ]);
          User::create([
               'name' => 'DIAZ LA TORRE, LLIMY',
               'email' => 'ldiaz@ucss.edu.pe',
               'password' => bcrypt('00828738'),
          ]);
          User::create([
               'name' => 'DIAZ LOPEZ, VICTOR LUIS',
               'email' => 'vdiazl@ucss.edu.pe',
               'password' => bcrypt('10376330'),
          ]);
          User::create([
               'name' => 'DIAZ MENDOZA, IRMA BEATRIZ',
               'email' => 'bdiaz@ucss.edu.pe',
               'password' => bcrypt('09677130'),
          ]);
          User::create([
               'name' => 'DIAZ MOGOLLON, MARIA DE LOURDES',
               'email' => 'mdiazmo@ucss.edu.pe',
               'password' => bcrypt('42914120'),
          ]);
          User::create([
               'name' => 'DIAZ MONTES, MILUSKA ZULEMA',
               'email' => 'mdiazm@ucss.edu.pe',
               'password' => bcrypt('43617296'),
          ]);
          User::create([
               'name' => 'DIAZ MONTES, YOLANDA ANTUANETH',
               'email' => 'ydiaz@ucss.edu.pe',
               'password' => bcrypt('40099192'),
          ]);
          User::create([
               'name' => 'DIAZ NONATO, MIGUEL ALCIDES',
               'email' => 'mdiazn@ucss.edu.pe',
               'password' => bcrypt('15693637'),
          ]);
          User::create([
               'name' => 'DIAZ NUNJA, JORGE ALEJANDRO',
               'email' => 'jdiazn@ucss.edu.pe',
               'password' => bcrypt('07554965'),
          ]);
          User::create([
               'name' => 'DIAZ PARDAVE, MIGUEL ANGEL',
               'email' => 'mdiazp@ucss.edu.pe',
               'password' => bcrypt('17970144'),
          ]);
          User::create([
               'name' => 'DIAZ PAYABA, HERCILIA',
               'email' => 'hdiaz@ucss.edu.pe',
               'password' => bcrypt('00165674'),
          ]);
          User::create([
               'name' => 'DIAZ REATEGUI, MONICA',
               'email' => 'mdiazr@ucss.edu.pe',
               'password' => bcrypt('09537647'),
          ]);
          User::create([
               'name' => 'DIAZ VARGAS, SAMUEL',
               'email' => 'sdiazv@ucss.edu.pe',
               'password' => bcrypt('41393616'),
          ]);
          User::create([
               'name' => 'DIAZ VARGAS, SELENI ADILIA',
               'email' => 'sadiaz@ucss.edu.pe',
               'password' => bcrypt('10603883'),
          ]);
          User::create([
               'name' => 'DIAZ ZEVALLOS, JULIO CESAR',
               'email' => 'jdiazze@ucss.edu.pe',
               'password' => bcrypt('26608237'),
          ]);
          User::create([
               'name' => 'DIAZ ZUBIATE, JOANY DEL PILAR',
               'email' => 'jdiazz@ucss.edu.pe',
               'password' => bcrypt('41149599'),
          ]);
          User::create([
               'name' => 'DIEGO DE LOS SANTOS, CHRISTIAN VICENTE',
               'email' => 'cdiego@ucss.edu.pe',
               'password' => bcrypt('41532404'),
          ]);
          User::create([
               'name' => 'DIONISIO ISLA, JUAN GABRIEL',
               'email' => 'jdionisio@ucss.edu.pe',
               'password' => bcrypt('43212870'),
          ]);
          User::create([
               'name' => 'DIOS CASTRO, GRETTEL LIZBETH',
               'email' => 'gdios@ucss.edu.pe',
               'password' => bcrypt('42400975'),
          ]);
          User::create([
               'name' => 'DIOSES ALEMAN, CECILIA JUBLEVERY',
               'email' => 'cdioses@ucss.edu.pe',
               'password' => bcrypt('44771166'),
          ]);
          User::create([
               'name' => 'DOCENTE POR, DEFINIR',
               'email' => 'aestrada@ucss.edu.pe',
               'password' => bcrypt('10000001'),
          ]);
          User::create([
               'name' => 'DOMINGUEZ ALDAVE, VICTOR ARTURO',
               'email' => 'vdominguez@ucss.edu.pe',
               'password' => bcrypt('41840280'),
          ]);
          User::create([
               'name' => 'DOMINGUEZ DEL AGUILA, DANNY',
               'email' => 'ddomingueza@ucss.edu.pe',
               'password' => bcrypt('10128456'),
          ]);
          User::create([
               'name' => 'DOMINGUEZ JARA, ALICIO VICTOR',
               'email' => 'adominguez@ucss.edu.pe',
               'password' => bcrypt('07149775'),
          ]);
          User::create([
               'name' => 'DOMINGUEZ QUISPE, MARIA PATRICIA',
               'email' => 'mdominguezq@ucss.edu.pe',
               'password' => bcrypt('06096573'),
          ]);
          User::create([
               'name' => 'DONAYRE HUAMAN, DELIA ROSARIO',
               'email' => 'ddonayre@ucss.edu.pe',
               'password' => bcrypt('06004658'),
          ]);
          User::create([
               'name' => 'DONGO QUINTANA, ALAIN DONUHUE',
               'email' => 'adongo@ucss.edu.pe',
               'password' => bcrypt('07350480'),
          ]);
          User::create([
               'name' => 'DORA MOSCOSO, JOSE MANUEL',
               'email' => 'jdora@ucss.edu.pe',
               'password' => bcrypt('45457404'),
          ]);
          User::create([
               'name' => 'DORIA PALOMINO, GIAN CARLO',
               'email' => 'gdoria@ucss.edu.pe',
               'password' => bcrypt('09677007'),
          ]);
          User::create([
               'name' => 'DUCOS CASAS, TEODORICO JESUS ADOLFO ST',
               'email' => 'tducos@ucss.edu.pe',
               'password' => bcrypt('07847018'),
          ]);
          User::create([
               'name' => 'DUQUE CASTRO, LEANDRO MILTON',
               'email' => 'lduque@ucss.edu.pe',
               'password' => bcrypt('07875553'),
          ]);
          User::create([
               'name' => 'ECA AVILA, ANIKA GUADALUPE',
               'email' => 'aecaa@ucss.edu.pe',
               'password' => bcrypt('70443300'),
          ]);
          User::create([
               'name' => 'ECHAVIGURIN TORRES, YUDITH MARLENI',
               'email' => 'yechavigurin@ucss.edu.pe',
               'password' => bcrypt('41355633'),
          ]);
          User::create([
               'name' => 'ECHE VELASCO, LUIS GABRIEL',
               'email' => 'leche@ucss.edu.pe',
               'password' => bcrypt('41994217'),
          ]);
          User::create([
               'name' => 'ECHEGARAY ROMERO, HECTOR ORLANDO',
               'email' => 'hechegaray@ucss.edu.pe',
               'password' => bcrypt('15607816'),
          ]);
          User::create([
               'name' => 'EDQUEN ALTAMIRANO, EDWIN',
               'email' => 'eedquen@ucss.edu.pe',
               'password' => bcrypt('10281031'),
          ]);
          User::create([
               'name' => 'EDQUEN SANCHEZ, PERCY GRIMANIEL',
               'email' => 'pedquen@ucss.edu.pe',
               'password' => bcrypt('27417597'),
          ]);
          User::create([
               'name' => 'EFFIO MACAVILCA, GUILLERMO MOISES',
               'email' => 'geffio@ucss.edu.pe',
               'password' => bcrypt('25597925'),
          ]);
          User::create([
               'name' => 'EGGERSTEDT PALACIOS, ROXANNA LUCIA',
               'email' => 'reggerstedt@ucss.edu.pe',
               'password' => bcrypt('07886803'),
          ]);
          User::create([
               'name' => 'EGOAVIL ARCE, IRMA ALIDA',
               'email' => 'iegoavil@ucss.edu.pe',
               'password' => bcrypt('06753872'),
          ]);
          User::create([
               'name' => 'EGOAVIL DE LA CRUZ, CARLOS HUGO',
               'email' => 'cegoavil@ucss.edu.pe',
               'password' => bcrypt('09887433'),
          ]);
          User::create([
               'name' => 'EGUSQUIZA ORTEGA, LUZ MARIBEL',
               'email' => 'eluz@ucss.edu.pe',
               'password' => bcrypt('08689114'),
          ]);
          User::create([
               'name' => 'ELESCANO CORDOVA, WILFREDO CLEMENTE',
               'email' => 'welescano@ucss.edu.pe',
               'password' => bcrypt('08581718'),
          ]);
          User::create([
               'name' => 'ENCISO ZAVALA, FAUSTA ISABEL',
               'email' => 'ienciso@ucss.edu.pe',
               'password' => bcrypt('10000717'),
          ]);
          User::create([
               'name' => 'ENRIQUE CORDOVA, ELBERT',
               'email' => 'eenrique@ucss.edu.pe',
               'password' => bcrypt('80224089'),
          ]);
          User::create([
               'name' => 'ENRIQUEZ CACERES, MANUEL IGNACIO',
               'email' => 'menriquez@ucss.edu.pe',
               'password' => bcrypt('29533833'),
          ]);
          User::create([
               'name' => 'ENRIQUEZ CANTO, YORDANIS',
               'email' => 'yenriquez@ucss.edu.pe',
               'password' => bcrypt('B324057'),
          ]);
          User::create([
               'name' => 'ERAZO CAMACHO, MILTON ROYER',
               'email' => 'merazo@ucss.edu.pe',
               'password' => bcrypt('44369968'),
          ]);
          User::create([
               'name' => 'ESCOBAR GARCIA, HECTOR ALONSO',
               'email' => 'hescobar@ucss.edu.pe',
               'password' => bcrypt('46347964'),
          ]);
          User::create([
               'name' => 'ESCOBAR RODRIGUEZ, SAUL',
               'email' => 'sescobar@ucss.edu.pe',
               'password' => bcrypt('00153354'),
          ]);
          User::create([
               'name' => 'ESCOBAR SOLDEVILLA, TANIA SILVIA',
               'email' => 'tescobar@ucss.edu.pe',
               'password' => bcrypt('43399816'),
          ]);
          User::create([
               'name' => 'ESCUDERO CASANOVA, SILVANA PAOLA',
               'email' => 'sescudero@ucss.edu.pe',
               'password' => bcrypt('70006233'),
          ]);
          User::create([
               'name' => 'ESCUDERO CORTEZ, CARMEN JANET',
               'email' => 'cescudero@ucss.edu.pe',
               'password' => bcrypt('09628010'),
          ]);
          User::create([
               'name' => 'ESCUDERO SALDAÑA, FLOR ANGEL',
               'email' => 'fescudero@ucss.edu.pe',
               'password' => bcrypt('01131907'),
          ]);
          User::create([
               'name' => 'ESCUDERO VIERA, JORGE LENIN',
               'email' => 'jescudero@ucss.edu.pe',
               'password' => bcrypt('00156856'),
          ]);
          User::create([
               'name' => 'ESPINOLA MARIÑOS, WILDER  ALEX',
               'email' => 'wespinola@ucss.edu.pe',
               'password' => bcrypt('18170287'),
          ]);
          User::create([
               'name' => 'ESPINOZA ALATA, REYNALDO VICTOR',
               'email' => 'respinoza@ucss.edu.pe',
               'password' => bcrypt('08042574'),
          ]);
          User::create([
               'name' => 'ESPINOZA ALVARADO, GILMER LORENZO',
               'email' => 'gespinoza@ucss.edu.pe',
               'password' => bcrypt('80152746'),
          ]);
          User::create([
               'name' => 'ESPINOZA APOLINARIO, YUDIT ZULEMA',
               'email' => 'yespinoza@ucss.edu.pe',
               'password' => bcrypt('42580535'),
          ]);
          User::create([
               'name' => 'ESPINOZA CASTILLO, ELVIS HENRRY',
               'email' => 'eespinoza@ucss.edu.pe',
               'password' => bcrypt('10624231'),
          ]);
          User::create([
               'name' => 'ESPINOZA RIOS, GUMERCINDO',
               'email' => 'gespinozar@ucss.edu.pe',
               'password' => bcrypt('00191412'),
          ]);
          User::create([
               'name' => 'ESQUEN PERALES, EDGARD MARTIN',
               'email' => 'eesquen@ucss.edu.pe',
               'password' => bcrypt('16626554'),
          ]);
          User::create([
               'name' => 'ESTARES PORRAS, OMAR EDUARDO',
               'email' => 'oestares@ucss.edu.pe',
               'password' => bcrypt('21134423'),
          ]);
          User::create([
               'name' => 'ESTEBAN JIMENEZ, JOSE LUIS RICARDO',
               'email' => 'jesteban@ucss.edu.pe',
               'password' => bcrypt('41160456'),
          ]);
          User::create([
               'name' => 'ESTRADA HERENCIA, VICTOR MANUEL',
               'email' => 'vestrada@ucss.edu.pe',
               'password' => bcrypt('41143892'),
          ]);
          User::create([
               'name' => 'ESTUPIÑAN MALDONADO, MAXIMO AUGUSTO',
               'email' => 'mestupinan@ucss.edu.pe',
               'password' => bcrypt('09634876'),
          ]);
          User::create([
               'name' => 'FAJARDO VIDAL, NARDA STELLA',
               'email' => 'nfajardo@ucss.edu.pe',
               'password' => bcrypt('40013789'),
          ]);
          User::create([
               'name' => 'FALCONI GALVEZ, JUAN TEODORO',
               'email' => 'jfalconi@ucss.edu.pe',
               'password' => bcrypt('07475254'),
          ]);
          User::create([
               'name' => 'FARFAN ZEGARRA, HAROLD MARTIN',
               'email' => 'hfarfan@ucss.edu.pe',
               'password' => bcrypt('32544407'),
          ]);
          User::create([
               'name' => 'FERNANDEZ ALVAREZ, MANUEL',
               'email' => 'mfernandeza@ucss.edu.pe',
               'password' => bcrypt('27673959'),
          ]);
          User::create([
               'name' => 'FERNANDEZ CAMPOS, JORGE ARMANDO MARTIN',
               'email' => 'jfernandez@ucss.edu.pe',
               'password' => bcrypt('07631106'),
          ]);
          User::create([
               'name' => 'FERNANDEZ CARDOZA, JANET DEL ROSARIO',
               'email' => 'jfernandezc@ucss.edu.pe',
               'password' => bcrypt('32543625'),
          ]);
          User::create([
               'name' => 'FERNANDEZ CONDORI, ROXANA CARLA',
               'email' => 'rfernandez@ucss.edu.pe',
               'password' => bcrypt('09600036'),
          ]);
          User::create([
               'name' => 'FERNANDEZ CRUZ, EMILIANO',
               'email' => 'efernandezc@ucss.edu.pe',
               'password' => bcrypt('42153498'),
          ]);
          User::create([
               'name' => 'FERNANDEZ MOLOCHO, WILTON NERI',
               'email' => 'wfernandez@ucss.edu.pe',
               'password' => bcrypt('40480320'),
          ]);
          User::create([
               'name' => 'FERNANDEZ MONTEMAYOR, VERONICA INES',
               'email' => 'vfernandez@ucss.edu.pe',
               'password' => bcrypt('40962158'),
          ]);
          User::create([
               'name' => 'FERNANDEZ PONCE, JAIME NAPOLEON',
               'email' => 'jfernandezp@ucss.edu.pe',
               'password' => bcrypt('18015541'),
          ]);
          User::create([
               'name' => 'FERNANDEZ REYES, EDEN BERLY',
               'email' => 'efernandez@ucss.edu.pe',
               'password' => bcrypt('19100057'),
          ]);
          User::create([
               'name' => 'FERNANDEZ SUASNABAR, SELENA CELESTE',
               'email' => 'scfernandez@ucss.edu.pe',
               'password' => bcrypt('21133103'),
          ]);
          User::create([
               'name' => 'FIGUEROA ALEJOS, DENNIS EDWARD',
               'email' => 'dfigueroa@ucss.edu.pe',
               'password' => bcrypt('10013186'),
          ]);
          User::create([
               'name' => 'FIGUEROA ANAMARIA, ERIKA LUZ',
               'email' => 'efigueroa@ucss.edu.pe',
               'password' => bcrypt('10195090'),
          ]);
          User::create([
               'name' => 'FIGUEROA ANAMARIA, JORGE HUGO',
               'email' => 'jfigueroa@ucss.edu.pe',
               'password' => bcrypt('10683741'),
          ]);
          User::create([
               'name' => 'FIGUEROA APESTEGUI, IVAN JESUS',
               'email' => 'ifigueroa@ucss.edu.pe',
               'password' => bcrypt('33343184'),
          ]);
          User::create([
               'name' => 'FIGUEROA REINOSO, JUAN EMILIO',
               'email' => 'jfigueroar@ucss.edu.pe',
               'password' => bcrypt('10177728'),
          ]);
          User::create([
               'name' => 'FIGUEROA YALAN, JUAN FIDEL',
               'email' => 'ffigueroa@ucss.edu.pe',
               'password' => bcrypt('09600298'),
          ]);
          User::create([
               'name' => 'FLORES ALCANTARA, FELICITAS YRENE',
               'email' => 'fflores@ucss.edu.pe',
               'password' => bcrypt('07944493'),
          ]);
          User::create([
               'name' => 'FLORES BALLESTEROS, TEODORO EMILIO',
               'email' => 'eflores@ucss.edu.pe',
               'password' => bcrypt('08612078'),
          ]);
          User::create([
               'name' => 'FLORES CONTRERAS, DANIEL RAFAEL',
               'email' => 'dflores@ucss.edu.pe',
               'password' => bcrypt('09953749'),
          ]);
          User::create([
               'name' => 'FLORES CRUZ, CARLOS ALBERTO',
               'email' => 'cfloresc@ucss.edu.pe',
               'password' => bcrypt('16804870'),
          ]);
          User::create([
               'name' => 'FLORES DURAND, RUDY WALTER',
               'email' => 'rflores@ucss.edu.pe',
               'password' => bcrypt('40277332'),
          ]);
          User::create([
               'name' => 'FLORES ESPINOZA, CARLOS GERARDO',
               'email' => 'cflorese@ucss.edu.pe',
               'password' => bcrypt('41621552'),
          ]);
          User::create([
               'name' => 'FLORES LOAYZA, EDUARDO ALBERTO',
               'email' => 'efloresf@ucss.edu.pe',
               'password' => bcrypt('09444223'),
          ]);
          User::create([
               'name' => 'FLORES LOAYZA, JULIA ELENA',
               'email' => 'jfloresl@ucss.edu.pe',
               'password' => bcrypt('07974793'),
          ]);
          User::create([
               'name' => 'FLORES MEJIA, LUCERO DEL MILAGRO',
               'email' => 'lflores@ucss.edu.pe',
               'password' => bcrypt('27738643'),
          ]);
          User::create([
               'name' => 'FLORES MONDRAGON, INGRID',
               'email' => 'iflores@ucss.edu.pe',
               'password' => bcrypt('09439087'),
          ]);
          User::create([
               'name' => 'FLORES MORALES, JORGE ALBERTO',
               'email' => 'jfloresm@ucss.edu.pe',
               'password' => bcrypt('08039505'),
          ]);
          User::create([
               'name' => 'FLORES MORI, DANIEL CALEB',
               'email' => 'dfloresm@ucss.edu.pe',
               'password' => bcrypt('42005039'),
          ]);
          User::create([
               'name' => 'FLORES ORTEGA, YESSIKA GRAYA',
               'email' => 'yflores@ucss.edu.pe',
               'password' => bcrypt('09854418'),
          ]);
          User::create([
               'name' => 'FLORES PALOMINO, FLORESMILO',
               'email' => 'fpalomino@ucss.edu.pe',
               'password' => bcrypt('06859230'),
          ]);
          User::create([
               'name' => 'FLORES PEÑA, CARMEN ROSA',
               'email' => 'cflores@ucss.edu.pe',
               'password' => bcrypt('07004671'),
          ]);
          User::create([
               'name' => 'FLORES RIVAS, JOSELPH LEONARDO',
               'email' => 'jflores@ucss.edu.pe',
               'password' => bcrypt('15450417'),
          ]);
          User::create([
               'name' => 'FLORES VILLANUEVA, WEIDI',
               'email' => 'wfloresv@ucss.edu.pe',
               'password' => bcrypt('07975167'),
          ]);
          User::create([
               'name' => 'FLORIAN CARRILLO, JESUS CHRISTIAN GUILLERMO',
               'email' => 'jflorian@ucss.edu.pe',
               'password' => bcrypt('10684596'),
          ]);
          User::create([
               'name' => 'FLORINDEZ AVILA, LUIS ALBERTO',
               'email' => 'lflorindez@ucss.edu.pe',
               'password' => bcrypt('08170171'),
          ]);
          User::create([
               'name' => 'FOLGADO RAMIREZ, VICENTE RAFAEL',
               'email' => 'vfolgado@ucss.edu.pe',
               'password' => bcrypt('40699314'),
          ]);
          User::create([
               'name' => 'FONSECA RIVERA, IRMA CAROLINA',
               'email' => 'ifonseca@ucss.edu.pe',
               'password' => bcrypt('17611959'),
          ]);
          User::create([
               'name' => 'FONT PEDRO, VICENT JOSEP',
               'email' => 'vjfont@ucss.edu.pe',
               'password' => bcrypt('000369180'),
          ]);
          User::create([
               'name' => 'FRANCO DEL CASTILLO, GLORIA NADIA',
               'email' => 'gfranco@ucss.edu.pe',
               'password' => bcrypt('41291740'),
          ]);
          User::create([
               'name' => 'FRANCO IPARRAGUIRRE, JOSE ANTONIO',
               'email' => 'jfranco@ucss.edu.pe',
               'password' => bcrypt('09377988'),
          ]);
          User::create([
               'name' => 'FUENTES CUBAS, ELVA',
               'email' => 'efuentes@ucss.edu.pe',
               'password' => bcrypt('40155189'),
          ]);
          User::create([
               'name' => 'FUENTES NEIRA, WILMER LUIS',
               'email' => 'wfuentes@ucss.edu.pe',
               'password' => bcrypt('40071922'),
          ]);
          User::create([
               'name' => 'FUENTES SUPANTA DE FUKUNAGA, NORMA',
               'email' => 'nfuentes@ucss.edu.pe',
               'password' => bcrypt('07708918'),
          ]);
          User::create([
               'name' => 'FUENTES VASQUEZ, JHON CRISTIAN',
               'email' => 'jfuentes@ucss.edu.pe',
               'password' => bcrypt('44979795'),
          ]);
          User::create([
               'name' => 'FUKUNAGA FUENTES, FERNANDO',
               'email' => 'ffukunaga@ucss.edu.pe',
               'password' => bcrypt('07730144'),
          ]);
          User::create([
               'name' => 'GABRYS, KRZYSZTOF',
               'email' => 'kgabrys@ucss.edu.pe',
               'password' => bcrypt('000040374'),
          ]);
          User::create([
               'name' => 'GAGO RODRIGO, KATIA ELVA',
               'email' => 'kgago@ucss.edu.pe',
               'password' => bcrypt('40660826'),
          ]);
          User::create([
               'name' => 'GALINDO GONZALES, TANIA DEL CARMEN',
               'email' => 'tgalindo@ucss.edu.pe',
               'password' => bcrypt('09607929'),
          ]);
          User::create([
               'name' => 'GALLARDO MEJIA, JOSE CARLOS',
               'email' => 'jgallardo@ucss.edu.pe',
               'password' => bcrypt('18182156'),
          ]);
          User::create([
               'name' => 'GALLO TORRES, LETICIA',
               'email' => 'lgallo@ucss.edu.pe',
               'password' => bcrypt('41196432'),
          ]);
          User::create([
               'name' => 'GALVEZ REYES, CARLOS ANTONIO',
               'email' => 'cgalvez@ucss.edu.pe',
               'password' => bcrypt('07622582'),
          ]);
          User::create([
               'name' => 'GAMARRA CUEVA, ALEXANDER',
               'email' => 'agamarra@ucss.edu.pe',
               'password' => bcrypt('43253292'),
          ]);
          User::create([
               'name' => 'GAMARRA LA ROSA, JOSE LUIS',
               'email' => 'jgamarra@ucss.edu.pe',
               'password' => bcrypt('40531630'),
          ]);
          User::create([
               'name' => 'GAMBATESA, RUGGIERO',
               'email' => 'rgambatesa@ucss.edu.pe',
               'password' => bcrypt('000834605'),
          ]);
          User::create([
               'name' => 'GAMBINI MIÑAN, ARTURO',
               'email' => 'agambini@ucss.edu.pe',
               'password' => bcrypt('10153240'),
          ]);
          User::create([
               'name' => 'GARAY TORRES, JOSE MARCELINO',
               'email' => 'jgaray@ucss.edu.pe',
               'password' => bcrypt('43409882'),
          ]);
          User::create([
               'name' => 'GARCES DIAZ, VICTOR',
               'email' => 'vgarces@ucss.edu.pe',
               'password' => bcrypt('32860015'),
          ]);
          User::create([
               'name' => 'GARCIA ABAD, MILNER',
               'email' => 'mgarciaa@ucss.edu.pe',
               'password' => bcrypt('46059510'),
          ]);
          User::create([
               'name' => 'GARCIA AGUILAR, PABLO ALBERTO',
               'email' => 'pgarcia@ucss.edu.pe',
               'password' => bcrypt('08740190'),
          ]);
          User::create([
               'name' => 'GARCIA ARISMENDIZ, ARTEMIZA',
               'email' => 'agarciaa@ucss.edu.pe',
               'password' => bcrypt('02638937'),
          ]);
          User::create([
               'name' => 'GARCIA COBOS, CARLOS ALBERTO',
               'email' => 'cgarcia@ucss.edu.pe',
               'password' => bcrypt('25778477'),
          ]);
          User::create([
               'name' => 'GARCIA HILARES, NILTON ALAN',
               'email' => 'nagarcia@ucss.edu.pe',
               'password' => bcrypt('43657709'),
          ]);
          User::create([
               'name' => 'GARCIA MASIAS, JESSICA VANESSA',
               'email' => 'jgmasias@ucss.edu.pe',
               'password' => bcrypt('10818578'),
          ]);
          User::create([
               'name' => 'GARCIA MOYA, OTILIO',
               'email' => 'ogarcia@ucss.edu.pe',
               'password' => bcrypt('000026169'),
          ]);
          User::create([
               'name' => 'GARCIA PANDURO, JORGE MIGUEL',
               'email' => 'jgarciap@ucss.edu.pe',
               'password' => bcrypt('00819048'),
          ]);
          User::create([
               'name' => 'GARCIA PEREZ, ANA TERESA',
               'email' => 'agarcia@ucss.edu.pe',
               'password' => bcrypt('46219254'),
          ]);
          User::create([
               'name' => 'GARCIA REGAL, RAUL FRANCISCO',
               'email' => 'rgarcia@ucss.edu.pe',
               'password' => bcrypt('07722412'),
          ]);
          User::create([
               'name' => 'GARCIA REYES, KARINA LISSETT',
               'email' => 'kgarcia@ucss.edu.pe',
               'password' => bcrypt('42608778'),
          ]);
          User::create([
               'name' => 'GARCIA ROJAS, MIGUEL',
               'email' => 'mgarcia@ucss.edu.pe',
               'password' => bcrypt('06853961'),
          ]);
          User::create([
               'name' => 'GARCIA ROJAS, VIDAL SATURNINO',
               'email' => 'vgarcia@ucss.edu.pe',
               'password' => bcrypt('09781789'),
          ]);
          User::create([
               'name' => 'GARCIA ROJAS, YRMA DORIS',
               'email' => 'ygarcia@ucss.edu.pe',
               'password' => bcrypt('06914150'),
          ]);
          User::create([
               'name' => 'GARCIA ROMERO, JESUS',
               'email' => 'jgarciar@ucss.edu.pe',
               'password' => bcrypt('01059317'),
          ]);
          User::create([
               'name' => 'GARCIA SALAS, GILMER HERNANDO',
               'email' => 'ghgarcia@ucss.edu.pe',
               'password' => bcrypt('21117249'),
          ]);
          User::create([
               'name' => 'GARCIA SALDAÑA, CARLOS ENRIQUE',
               'email' => 'cgarcias@ucss.edu.pe',
               'password' => bcrypt('44944208'),
          ]);
          User::create([
               'name' => 'GARCIA SUSANO, MARITZA GIOVANA',
               'email' => 'mggarcia@ucss.edu.pe',
               'password' => bcrypt('15727139'),
          ]);
          User::create([
               'name' => 'GARCIA TRIGOZO, JOSE ABEL',
               'email' => 'jagarcia@ucss.edu.pe',
               'password' => bcrypt('05256191'),
          ]);
          User::create([
               'name' => 'GARCIA VERGARA, RENZO MARTIN',
               'email' => 'rgarciav@ucss.edu.pe',
               'password' => bcrypt('25843121'),
          ]);
          User::create([
               'name' => 'GARCIA VILCAPOMA, GLADYS HORTENCIA',
               'email' => 'ggarcia@ucss.edu.pe',
               'password' => bcrypt('06889871'),
          ]);
          User::create([
               'name' => 'GASTELLO MATHEWS, WILLY',
               'email' => 'wgastello@ucss.edu.pe',
               'password' => bcrypt('09635561'),
          ]);
          User::create([
               'name' => 'GIL SANDOVAL, HECTOR ANTONIO',
               'email' => 'hgil@ucss.edu.pe',
               'password' => bcrypt('03684198'),
          ]);
          User::create([
               'name' => 'GIRON ESPINAL, MONICA ROCIO',
               'email' => 'mgiron@ucss.edu.pe',
               'password' => bcrypt('09350853'),
          ]);
          User::create([
               'name' => 'GOGIN CARREÑO, RONALD ARMANDO',
               'email' => 'rgogin@ucss.edu.pe',
               'password' => bcrypt('06858093'),
          ]);
          User::create([
               'name' => 'GOMERO ESPINOZA, CLARA ROSIO',
               'email' => 'cgomero@ucss.edu.pe',
               'password' => bcrypt('10117155'),
          ]);
          User::create([
               'name' => 'GOMERO VASQUEZ, HEMER ANUNCIACION',
               'email' => 'hgomero@ucss.edu.pe',
               'password' => bcrypt('09532347'),
          ]);
          User::create([
               'name' => 'GOMEZ ACUÑA, LUIS MARTIN CARLOS',
               'email' => 'lgomez@ucss.edu.pe',
               'password' => bcrypt('06762793'),
          ]);
          User::create([
               'name' => 'GOMEZ DIAZ, GILMER',
               'email' => 'ggomez@ucss.edu.pe',
               'password' => bcrypt('45156613'),
          ]);
          User::create([
               'name' => 'GOMEZ PEÑAHERRERA, DANILO',
               'email' => 'dgomez@ucss.edu.pe',
               'password' => bcrypt('07614326'),
          ]);
          User::create([
               'name' => 'GONZAGA ESPINOZA, MARIA NELLY',
               'email' => 'mgonzaga@ucss.edu.pe',
               'password' => bcrypt('09630967'),
          ]);
          User::create([
               'name' => 'GONZALES ALVA, ALEXANDER',
               'email' => 'agonzalesa@ucss.edu.pe',
               'password' => bcrypt('42306156'),
          ]);
          User::create([
               'name' => 'GONZALES ANAMPA, ENRIQUE MIRKO',
               'email' => 'egonzalez@ucss.edu.pe',
               'password' => bcrypt('40734099'),
          ]);
          User::create([
               'name' => 'GONZALES ANAMPA, LUIS  OMAR',
               'email' => 'lgonzales@ucss.edu.pe',
               'password' => bcrypt('10683679'),
          ]);
          User::create([
               'name' => 'GONZALES BARBARAN, RODRIGO',
               'email' => 'rsgonzales@ucss.edu.pe',
               'password' => bcrypt('42062008'),
          ]);
          User::create([
               'name' => 'GONZALES CALLE, FREDY ABELARDO',
               'email' => 'fgonzales@ucss.edu.pe',
               'password' => bcrypt('43667732'),
          ]);
          User::create([
               'name' => 'GONZALES CARRANZA, VERONICA JANET',
               'email' => 'vgonzales@ucss.edu.pe',
               'password' => bcrypt('41393066'),
          ]);
          User::create([
               'name' => 'GONZALES CONTRERAS, NORMA DE LOS MILAGROS',
               'email' => 'ngonzales@ucss.edu.pe',
               'password' => bcrypt('47017231'),
          ]);
          User::create([
               'name' => 'GONZALES CORNEJO, JUSTO VIRGILIO',
               'email' => 'jvgonzales@ucss.edu.pe',
               'password' => bcrypt('02292586'),
          ]);
          User::create([
               'name' => 'GONZALES COTRINA, JULIO CESAR',
               'email' => 'jgonzalesc@ucss.edu.pe',
               'password' => bcrypt('00165739'),
          ]);
          User::create([
               'name' => 'GONZALES GONZALEZ, ALEJANDRO LORENZO',
               'email' => 'agonzales@ucss.edu.pe',
               'password' => bcrypt('08460532'),
          ]);
          User::create([
               'name' => 'GONZALES GUEVARA, PABLO ROSS',
               'email' => 'pgonzalesg@ucss.edu.pe',
               'password' => bcrypt('41859805'),
          ]);
          User::create([
               'name' => 'GONZALES HUAMANI, JOSE SMITH',
               'email' => 'jgonzalesh@ucss.edu.pe',
               'password' => bcrypt('46127941'),
          ]);
          User::create([
               'name' => 'GONZALES MEZA, RONALD VLADIMIR',
               'email' => 'rgonzalesm@ucss.edu.pe',
               'password' => bcrypt('43377576'),
          ]);
          User::create([
               'name' => 'GONZALES MORE, JHOSEP GUSTAVO',
               'email' => 'jgonzalesm@ucss.edu.pe',
               'password' => bcrypt('43094481'),
          ]);
          User::create([
               'name' => 'GONZALES PALMA, JOSSELYNE DENISE',
               'email' => 'jgonzales@ucss.edu.pe',
               'password' => bcrypt('09625812'),
          ]);
          User::create([
               'name' => 'GONZALES PAUCAR, RIGOBERTO',
               'email' => 'rgonzalesp@ucss.edu.pe',
               'password' => bcrypt('02847218'),
          ]);
          User::create([
               'name' => 'GONZALES QUISPE, HUMBERTO FERNANDO',
               'email' => 'hgonzales@ucss.edu.pe',
               'password' => bcrypt('21135050'),
          ]);
          User::create([
               'name' => 'GONZALES SALVADOR, GAMANIEL DOMINGO',
               'email' => 'ggonzales@ucss.edu.pe',
               'password' => bcrypt('07122264'),
          ]);
          User::create([
               'name' => 'GONZALES TRUJILLO, VICTOR RAUL',
               'email' => 'vgonzalest@ucss.edu.pe',
               'password' => bcrypt('41817120'),
          ]);
          User::create([
               'name' => 'GONZALEZ FARFAN, MARIA EUGENIA',
               'email' => 'megonzalez@ucss.edu.pe',
               'password' => bcrypt('09486797'),
          ]);
          User::create([
               'name' => 'GONZALEZ GUIMARAY, OMAR ALFREDO',
               'email' => 'ogonzalez@ucss.edu.pe',
               'password' => bcrypt('07531379'),
          ]);
          User::create([
               'name' => 'GONZALEZ SAENZ, MODESTA MARIA ADELA',
               'email' => 'mogonzalez@ucss.edu.pe',
               'password' => bcrypt('06269543'),
          ]);
          User::create([
               'name' => 'GOYBURU MOLINA DE GOMEZ, MARLENE ESTHER',
               'email' => 'mgoyburu@ucss.edu.pe',
               'password' => bcrypt('25426710'),
          ]);
          User::create([
               'name' => 'GRADOS DEL MAR, MIGUEL ANGEL',
               'email' => 'mgrados@ucss.edu.pe',
               'password' => bcrypt('06235251'),
          ]);
          User::create([
               'name' => 'GRADOS MAGUIÑA, CARLOS WILFREDO',
               'email' => 'cgrados@ucss.edu.pe',
               'password' => bcrypt('08321872'),
          ]);
          User::create([
               'name' => 'GRADOS VITONERA, VICTOR FERNANDO',
               'email' => 'vgrados@ucss.edu.pe',
               'password' => bcrypt('45302476'),
          ]);
          User::create([
               'name' => 'GRANDEZ PORTOCARRERO, AUGUSTO MARINO',
               'email' => 'agrandez@ucss.edu.pe',
               'password' => bcrypt('00860188'),
          ]);
          User::create([
               'name' => 'GUANILO BAEZ, JUDITH ELENA',
               'email' => 'jguanilo@ucss.edu.pe',
               'password' => bcrypt('09283048'),
          ]);
          User::create([
               'name' => 'GUERRA ALVARADO, FERNANDO NESTOR',
               'email' => 'fguerra@ucss.edu.pe',
               'password' => bcrypt('41476388'),
          ]);
          User::create([
               'name' => 'GUERRERO JULCA, JORGE LUIS',
               'email' => 'jguerrero@ucss.edu.pe',
               'password' => bcrypt('16803037'),
          ]);
          User::create([
               'name' => 'GUERRERO MENDOZA, CASTINALDO BALDOMERO',
               'email' => 'cguerrero@ucss.edu.pe',
               'password' => bcrypt('40857239'),
          ]);
          User::create([
               'name' => 'GUEVARA LOPEZ, HERLINDA ESTELA',
               'email' => 'hguevara@ucss.edu.pe',
               'password' => bcrypt('07556886'),
          ]);
          User::create([
               'name' => 'GUISANO CAMACHO, GEORGE KENNETH',
               'email' => 'gguisano@ucss.edu.pe',
               'password' => bcrypt('41406260'),
          ]);
          User::create([
               'name' => 'GUPIOC NECOCHEA, GERMAN JHONEL',
               'email' => 'ggupioc@ucss.edu.pe',
               'password' => bcrypt('42437507'),
          ]);
          User::create([
               'name' => 'GUTIERREZ ASCARZA, LUZ YOLANDA',
               'email' => 'ygutierrez@ucss.edu.pe',
               'password' => bcrypt('10284099'),
          ]);
          User::create([
               'name' => 'GUTIERREZ AZCARZA, DORIS EDITH',
               'email' => 'dgutierrez@ucss.edu.pe',
               'password' => bcrypt('10280181'),
          ]);
          User::create([
               'name' => 'GUTIERREZ BUSTAMANTE, SILVIA',
               'email' => 'sgutierrez@ucss.edu.pe',
               'password' => bcrypt('23946287'),
          ]);
          User::create([
               'name' => 'GUTIERREZ MEJIA, JOSEPH CRISTHIAN',
               'email' => 'jgutierrezm@ucss.edu.pe',
               'password' => bcrypt('41151839'),
          ]);
          User::create([
               'name' => 'GUTIERREZ PRIVAT, LUZ MARLENE',
               'email' => 'lgutierrez@ucss.edu.pe',
               'password' => bcrypt('09632233'),
          ]);
          User::create([
               'name' => 'GUTIERREZ PUSARI, JUSTINIANO',
               'email' => 'jgutierrez@ucss.edu.pe',
               'password' => bcrypt('06957981'),
          ]);
          User::create([
               'name' => 'GUTIERREZ RIVAS, LUIS AUGUSTO',
               'email' => 'lagutierrez@ucss.edu.pe',
               'password' => bcrypt('07618282'),
          ]);
          User::create([
               'name' => 'GUTIERREZ RUIZ, ASTRID DOMY',
               'email' => 'agutierrezr@ucss.edu.pe',
               'password' => bcrypt('42560596'),
          ]);
          User::create([
               'name' => 'GUTIERREZ ZUÑIGA, BRIGIDA CAROLINA',
               'email' => 'bgutierrez@ucss.edu.pe',
               'password' => bcrypt('09583534'),
          ]);
          User::create([
               'name' => 'GUZMAN TENAZOA, CARLOS MARCELINO',
               'email' => 'cguzman@ucss.edu.pe',
               'password' => bcrypt('08354213'),
          ]);
          User::create([
               'name' => 'HERNANDEZ ATANACIO, VICTOR EDUARDO',
               'email' => 'vhernandez@ucss.edu.pe',
               'password' => bcrypt('40630640'),
          ]);
          User::create([
               'name' => 'HERNANDEZ CACERES, PILLY YENIFER',
               'email' => 'phernandez@ucss.edu.pe',
               'password' => bcrypt('10348744'),
          ]);
          User::create([
               'name' => 'HERNANDEZ CARMEN, ELIAS ROBESPIERRE',
               'email' => 'ehernandez@ucss.edu.pe',
               'password' => bcrypt('44933037'),
          ]);
          User::create([
               'name' => 'HERNANDEZ PALOMINO, LUQUE GUSMAN',
               'email' => 'lhernandez@ucss.edu.pe',
               'password' => bcrypt('27974432'),
          ]);
          User::create([
               'name' => 'HERNANDEZ PINO, GIOVANA LOURDES',
               'email' => 'ghernandez@ucss.edu.pe',
               'password' => bcrypt('10727756'),
          ]);
          User::create([
               'name' => 'HERNANDEZ VASQUEZ, ERICK BRANDUZ',
               'email' => 'ebhernandez@ucss.edu.pe',
               'password' => bcrypt('44008733'),
          ]);
          User::create([
               'name' => 'HERNANDO CASTRO, CARLOS ANDRES',
               'email' => 'chernando@ucss.edu.pe',
               'password' => bcrypt('20116618'),
          ]);
          User::create([
               'name' => 'HERRERA CONCHA, RENAN ALBERTO',
               'email' => 'rherrerac@ucss.edu.pe',
               'password' => bcrypt('40660575'),
          ]);
          User::create([
               'name' => 'HERRERA DIAZ, SANTOS CLEMENTE',
               'email' => 'sherrera@ucss.edu.pe',
               'password' => bcrypt('27409649'),
          ]);
          User::create([
               'name' => 'HERRERA PASTOR, VICTOR MANUEL',
               'email' => 'vherrera@ucss.edu.pe',
               'password' => bcrypt('40994021'),
          ]);
          User::create([
               'name' => 'HERRERA SANCHEZ, JOFRRE EDWIN',
               'email' => 'jherreras@ucss.edu.pe',
               'password' => bcrypt('42974395'),
          ]);
          User::create([
               'name' => 'HERVIAS COBA, ANA VANESA',
               'email' => 'ahervias@ucss.edu.pe',
               'password' => bcrypt('45564730'),
          ]);
          User::create([
               'name' => 'HIDALGO GOMEZ, ALFONSO GREGORIO',
               'email' => 'ahidalgo@ucss.edu.pe',
               'password' => bcrypt('06775252'),
          ]);
          User::create([
               'name' => 'HILARIO TENORIO, JULIA MARCELA',
               'email' => 'jhilario@ucss.edu.pe',
               'password' => bcrypt('42841945'),
          ]);
          User::create([
               'name' => 'HINOSTROZA MELENDEZ, PERCY ANGEL',
               'email' => 'phinostroza@ucss.edu.pe',
               'password' => bcrypt('40670542'),
          ]);
          User::create([
               'name' => 'HONORIO VILLARREAL, SARA MARISOL',
               'email' => 'shonorio@ucss.edu.pe',
               'password' => bcrypt('08742589'),
          ]);
          User::create([
               'name' => 'HUALLANCA SANCHEZ, RUBEN DARIO',
               'email' => 'rhuallanca@ucss.edu.pe',
               'password' => bcrypt('09623221'),
          ]);
          User::create([
               'name' => 'HUAMAN CASTRO, EDILBERTO',
               'email' => 'ehuaman@ucss.edu.pe',
               'password' => bcrypt('20077889'),
          ]);
          User::create([
               'name' => 'HUAMAN CASTRO, EVER',
               'email' => 'ehuamanc@ucss.edu.pe',
               'password' => bcrypt('21119074'),
          ]);
          User::create([
               'name' => 'HUAMAN CESPEDES, RICHARD WILLY',
               'email' => 'rhuaman@ucss.edu.pe',
               'password' => bcrypt('08453917'),
          ]);
          User::create([
               'name' => 'HUAMAN CULQUI, IRMA CONSUELO',
               'email' => 'ihuaman@ucss.edu.pe',
               'password' => bcrypt('08445893'),
          ]);
          User::create([
               'name' => 'HUAMAN ESPINOZA, LEONARDO OMAR',
               'email' => 'lhuaman@ucss.edu.pe',
               'password' => bcrypt('43734886'),
          ]);
          User::create([
               'name' => 'HUAMAN GUTIERREZ, JOSE MANUEL',
               'email' => 'jhuaman@ucss.edu.pe',
               'password' => bcrypt('09905355'),
          ]);
          User::create([
               'name' => 'HUAMAN GUTIERREZ, OSCAR GUSTAVO',
               'email' => 'ohuaman@ucss.edu.pe',
               'password' => bcrypt('10454580'),
          ]);
          User::create([
               'name' => 'HUAMAN MEDINA, SARA PATRICIA',
               'email' => 'shuaman@ucss.edu.pe',
               'password' => bcrypt('42791511'),
          ]);
          User::create([
               'name' => 'HUAMANI CAJALEON, DIANA LUCILA',
               'email' => 'dhuamani@ucss.edu.pe',
               'password' => bcrypt('43648948'),
          ]);
          User::create([
               'name' => 'HUANCAS DONAYRE, URSULA IDALINA',
               'email' => 'uhuancas@ucss.edu.pe',
               'password' => bcrypt('07613585'),
          ]);
          User::create([
               'name' => 'HUAPAYA CASTILLO, CAROLINA STEFANY',
               'email' => 'chuapaya@ucss.edu.pe',
               'password' => bcrypt('45668399'),
          ]);
          User::create([
               'name' => 'HUAPAYA PARDAVE, RICHARD JOAO',
               'email' => 'rhuapaya@ucss.edu.pe',
               'password' => bcrypt('44127158'),
          ]);
          User::create([
               'name' => 'HUAPAYA VASQUEZ, MARINA URGANDA REYNA',
               'email' => 'mrhuapaya@ucss.edu.pe',
               'password' => bcrypt('70542049'),
          ]);
          User::create([
               'name' => 'HUAROC SUAREZ, JHONNY ANGEL',
               'email' => 'jhuaroc@ucss.edu.pe',
               'password' => bcrypt('20069550'),
          ]);
          User::create([
               'name' => 'HUAROCO CUESTAS, CARLOS TARDELLI',
               'email' => 'chuaroco@ucss.edu.pe',
               'password' => bcrypt('43019263'),
          ]);
          User::create([
               'name' => 'HUATUCO TRINIDAD, SERGIO ANGEL',
               'email' => 'shuatuco@ucss.edu.pe',
               'password' => bcrypt('08145095'),
          ]);
          User::create([
               'name' => 'HUAYANAY PANTOJA, CARLOS',
               'email' => 'chuayanay@ucss.edu.pe',
               'password' => bcrypt('08555109'),
          ]);
          User::create([
               'name' => 'HUAYHUA BECERRA, JHON',
               'email' => 'jhuayhua@ucss.edu.pe',
               'password' => bcrypt('44739977'),
          ]);
          User::create([
               'name' => 'HUAYNATES BALDEON, MARIA LOURDES',
               'email' => 'mhuaynates@ucss.edu.pe',
               'password' => bcrypt('21138678'),
          ]);
          User::create([
               'name' => 'HUAYTALLA CORDOVA, NERIDA RENEE',
               'email' => 'nhuaytalla@ucss.edu.pe',
               'password' => bcrypt('21082137'),
          ]);
          User::create([
               'name' => 'HUERTAS SOSA, CANDELARIA',
               'email' => 'chuertas@ucss.edu.pe',
               'password' => bcrypt('02781106'),
          ]);
          User::create([
               'name' => 'HUERTAS VILLEGAS, GUSTAVO ANTONIO',
               'email' => 'ghuertas@ucss.edu.pe',
               'password' => bcrypt('07634149'),
          ]);
          User::create([
               'name' => 'HUIMAN SANDOVAL, JOSE ALBERTO',
               'email' => 'jhuiman@ucss.edu.pe',
               'password' => bcrypt('16170336'),
          ]);
          User::create([
               'name' => 'HURTADO LOPEZ, PAULA',
               'email' => 'phurtado@ucss.edu.pe',
               'password' => bcrypt('000829393'),
          ]);
          User::create([
               'name' => 'HURTADO MERINO, ALBERTO ZACARIAS',
               'email' => 'ahurtado@ucss.edu.pe',
               'password' => bcrypt('42643059'),
          ]);
          User::create([
               'name' => 'HURTADO VIDAL, CECIBEL SORAYA',
               'email' => 'churtado@ucss.edu.pe',
               'password' => bcrypt('41275193'),
          ]);
          User::create([
               'name' => 'IBERICO CHAVEZ, ROLANDO RAMIRO',
               'email' => 'riberico@ucss.edu.pe',
               'password' => bcrypt('10735796'),
          ]);
          User::create([
               'name' => 'IGREDA YACTAYO, ANA ISABEL',
               'email' => 'aigreda@ucss.edu.pe',
               'password' => bcrypt('10195656'),
          ]);
          User::create([
               'name' => 'IGUIA ESPINOZA, ISAAC ALBERTO',
               'email' => 'iiguia@ucss.edu.pe',
               'password' => bcrypt('40402313'),
          ]);
          User::create([
               'name' => 'IMAN MORAN, ANGHELA MIRELLA',
               'email' => 'aiman@ucss.edu.pe',
               'password' => bcrypt('46532718'),
          ]);
          User::create([
               'name' => 'INCA BAZAN, FERNANDO',
               'email' => 'finca@ucss.edu.pe',
               'password' => bcrypt('08646807'),
          ]);
          User::create([
               'name' => 'INCHICAQUI BAUTISTA, GENARO',
               'email' => 'ginchicaqui@ucss.edu.pe',
               'password' => bcrypt('10443498'),
          ]);
          User::create([
               'name' => 'INFANTE MONTERO, RAUL SERGIO',
               'email' => 'sinfante@ucss.edu.pe',
               'password' => bcrypt('42366552'),
          ]);
          User::create([
               'name' => 'INFANTES SANTILLAN, EDUARDO',
               'email' => 'einfantes@ucss.edu.pe',
               'password' => bcrypt('08396132'),
          ]);
          User::create([
               'name' => 'INGA GUILLEN, JANET GABY',
               'email' => 'jinga@ucss.edu.pe',
               'password' => bcrypt('44643177'),
          ]);
          User::create([
               'name' => 'INQUILLA QUISPE, RICARDO CARLOS',
               'email' => 'rinquilla@ucss.edu.pe',
               'password' => bcrypt('00515158'),
          ]);
          User::create([
               'name' => 'IPANAQUE ROÑA, JUAN MANUEL',
               'email' => 'jipanaque@ucss.edu.pe',
               'password' => bcrypt('32952515'),
          ]);
          User::create([
               'name' => 'IPARRAGUIRRE MEDINA, RINA LIZ',
               'email' => 'riparraguirre@ucss.edu.pe',
               'password' => bcrypt('40551983'),
          ]);
          User::create([
               'name' => 'IRIGOIN CUBAS, CARLOS ALBERTO',
               'email' => 'cirigoin@ucss.edu.pe',
               'password' => bcrypt('40713285'),
          ]);
          User::create([
               'name' => 'IZAGUIRRE VILLANUEVA, POUL MICHELL',
               'email' => 'pizaguirre@ucss.edu.pe',
               'password' => bcrypt('42978968'),
          ]);
          User::create([
               'name' => 'IZQUIERDO HERNANDEZ, DENIS',
               'email' => 'dizquierdo@ucss.edu.pe',
               'password' => bcrypt('43089939'),
          ]);
          User::create([
               'name' => 'JAIME SANCHEZ, FANNY ELENA',
               'email' => 'fjaime@ucss.edu.pe',
               'password' => bcrypt('40318174'),
          ]);
          User::create([
               'name' => 'JALANOCCA MONDALGO, MIGUEL ANGEL',
               'email' => 'mjalanocca@ucss.edu.pe',
               'password' => bcrypt('43310472'),
          ]);
          User::create([
               'name' => 'JANAMPA CORDOVA, CARLOS  RAFAEL',
               'email' => 'cjanampa@ucss.edu.pe',
               'password' => bcrypt('10279143'),
          ]);
          User::create([
               'name' => 'JARA ASENCIOS DE MENDOZA, IRMA VICTORIA',
               'email' => 'ijara@ucss.edu.pe',
               'password' => bcrypt('07589826'),
          ]);
          User::create([
               'name' => 'JARA DE LA CRUZ, ELMER',
               'email' => 'ejara@ucss.edu.pe',
               'password' => bcrypt('01150697'),
          ]);
          User::create([
               'name' => 'JARA ORTEGA, CARMEN REYNALDA',
               'email' => 'cjara@ucss.edu.pe',
               'password' => bcrypt('21139539'),
          ]);
          User::create([
               'name' => 'JARAMILLO NEYRA, CARLOS ALBERTO',
               'email' => 'cjaramillo@ucss.edu.pe',
               'password' => bcrypt('43826082'),
          ]);
          User::create([
               'name' => 'JARAMILLO SALDAÑA, FERNANDO AMADEO',
               'email' => 'fjaramillo@ucss.edu.pe',
               'password' => bcrypt('08570987'),
          ]);
          User::create([
               'name' => 'JAUREGUI JIMENEZ, JOSE ANDRES',
               'email' => 'jjauregui@ucss.edu.pe',
               'password' => bcrypt('15761994'),
          ]);
          User::create([
               'name' => 'JAUREGUI MORRIS, MARIA DEL ROSARIO',
               'email' => 'mjauregui@ucss.edu.pe',
               'password' => bcrypt('25508280'),
          ]);
          User::create([
               'name' => 'JAUREGUI NONGRADOS, NAPOLEON',
               'email' => 'njauregui@ucss.edu.pe',
               'password' => bcrypt('32853299'),
          ]);
          User::create([
               'name' => 'JAVIER SILVA, LUZ ALEXANDRA',
               'email' => 'ljavier@ucss.edu.pe',
               'password' => bcrypt('47623606'),
          ]);
          User::create([
               'name' => 'JIBAJA CRUZ, OMAR ENRIQUE',
               'email' => 'ojibaja@ucss.edu.pe',
               'password' => bcrypt('42607171'),
          ]);
          User::create([
               'name' => 'JIBAJA RAMIREZ, FRANK EULER',
               'email' => 'fjibaja@ucss.edu.pe',
               'password' => bcrypt('43648146'),
          ]);
          User::create([
               'name' => 'JIMENEZ BELLASMIL, JUAN NEPOMUCENO',
               'email' => 'jnjimenez@ucss.edu.pe',
               'password' => bcrypt('02621640'),
          ]);
          User::create([
               'name' => 'JIMENEZ PACHAS, ENRIQUE',
               'email' => 'ejimenez@ucss.edu.pe',
               'password' => bcrypt('10664289'),
          ]);
          User::create([
               'name' => 'JIMENEZ SAENZ, ALBERTO JESUS',
               'email' => 'jjimenez@ucss.edu.pe',
               'password' => bcrypt('40647577'),
          ]);
          User::create([
               'name' => 'JIMENEZ VILCHEZ, RICARDO JESUS',
               'email' => 'rjimenez@ucss.edu.pe',
               'password' => bcrypt('08417050'),
          ]);
          User::create([
               'name' => 'JUEP CAHUAZA, KJERSTI',
               'email' => 'kjuep@ucss.edu.pe',
               'password' => bcrypt('01053383'),
          ]);
          User::create([
               'name' => 'JUIPA CARRION, ZENAIDA BLANDINA',
               'email' => 'zjuipa@ucss.edu.pe',
               'password' => bcrypt('40096126'),
          ]);
          User::create([
               'name' => 'JULCA CHUQUISTA, EVELYN',
               'email' => 'ejulca@ucss.edu.pe',
               'password' => bcrypt('42514619'),
          ]);
          User::create([
               'name' => 'JUSCAMAYTA LOPEZ, JULIO EDUARDO',
               'email' => 'jjuscamayta@ucss.edu.pe',
               'password' => bcrypt('41819788'),
          ]);
          User::create([
               'name' => 'JUSTO ROJAS, LUIS FREDY',
               'email' => 'ljusto@ucss.edu.pe',
               'password' => bcrypt('09760752'),
          ]);
          User::create([
               'name' => 'KCOMT CHUCAN, OLINDA ROXANA',
               'email' => 'rkcomt@ucss.edu.pe',
               'password' => bcrypt('09304104'),
          ]);
          User::create([
               'name' => 'KREDERDT ARAUJO, SHERIN LUZ',
               'email' => 'skrederdt@ucss.edu.pe',
               'password' => bcrypt('08220420'),
          ]);
          User::create([
               'name' => 'KUONG MERIK, MIGUEL ANGEL',
               'email' => 'mkuong@ucss.edu.pe',
               'password' => bcrypt('09626330'),
          ]);
          User::create([
               'name' => 'LA ROSA BENEDICTO, CARLOS GIOVANI',
               'email' => 'clarosa@ucss.edu.pe',
               'password' => bcrypt('15736641'),
          ]);
          User::create([
               'name' => 'LA ROSA BOTONERO, JAVIER',
               'email' => 'jlarosa@ucss.edu.pe',
               'password' => bcrypt('07961578'),
          ]);
          User::create([
               'name' => 'LABAN ELERA, VICTOR',
               'email' => 'vlaban@ucss.edu.pe',
               'password' => bcrypt('02689556'),
          ]);
          User::create([
               'name' => 'LAFOSSE MASIAS, JORGE LUIS',
               'email' => 'jlafosse@ucss.edu.pe',
               'password' => bcrypt('40376829'),
          ]);
          User::create([
               'name' => 'LAGOS LIBERATO, DAVID',
               'email' => 'dlagos@ucss.edu.pe',
               'password' => bcrypt('42548764'),
          ]);
          User::create([
               'name' => 'LALUPU VALLADOLID, JOSE HUMBERTO',
               'email' => 'jlalupu@ucss.edu.pe',
               'password' => bcrypt('41494750'),
          ]);
          User::create([
               'name' => 'LANDAVERI JURADO, HERNAN ALEJANDRO',
               'email' => 'hlandaveri@ucss.edu.pe',
               'password' => bcrypt('06660573'),
          ]);
          User::create([
               'name' => 'LARCO AGUILAR, AMADA VICTORIA',
               'email' => 'alarco@ucss.edu.pe',
               'password' => bcrypt('40438250'),
          ]);
          User::create([
               'name' => 'LASTARRIA ZAPATA, JOSE ALEJANDRO',
               'email' => 'jlastarria@ucss.edu.pe',
               'password' => bcrypt('06121782'),
          ]);
          User::create([
               'name' => 'LAURENCIO LUNA, MANUEL ISMAEL',
               'email' => 'mlaurencio@ucss.edu.pe',
               'password' => bcrypt('42362708'),
          ]);
          User::create([
               'name' => 'LAVALLE BRACAMONTE, CESAR AUGUSTO',
               'email' => 'clavalle@ucss.edu.pe',
               'password' => bcrypt('09929263'),
          ]);
          User::create([
               'name' => 'LAZARTE GONZALES, IVAN JORGE',
               'email' => 'ilazarte@ucss.edu.pe',
               'password' => bcrypt('29639764'),
          ]);
          User::create([
               'name' => 'LECETA GOBITZ, ROSSINA ALDA',
               'email' => 'rleceta@ucss.edu.pe',
               'password' => bcrypt('10734053'),
          ]);
          User::create([
               'name' => 'LENGUA ALARCON, KARIN ROCIO',
               'email' => 'klengua@ucss.edu.pe',
               'password' => bcrypt('10662722'),
          ]);
          User::create([
               'name' => 'LENGUA ARTEAGA, INDIRA CRISTINA',
               'email' => 'ilengua@ucss.edu.pe',
               'password' => bcrypt('41609424'),
          ]);
          User::create([
               'name' => 'LEON CHAVEZ, MARIANA',
               'email' => 'mlchavez@ucss.edu.pe',
               'password' => bcrypt('42345347'),
          ]);
          User::create([
               'name' => 'LEON DEZAR, LUIS ALBERTO',
               'email' => 'lleon@ucss.edu.pe',
               'password' => bcrypt('07591992'),
          ]);
          User::create([
               'name' => 'LEON JIMENEZ, ROLANDO ALEXANDER',
               'email' => 'rleon@ucss.edu.pe',
               'password' => bcrypt('02865539'),
          ]);
          User::create([
               'name' => 'LEON MORALES, RUTH GIOVANNA',
               'email' => 'rleonm@ucss.edu.pe',
               'password' => bcrypt('41622652'),
          ]);
          User::create([
               'name' => 'LEON SOSA, JULIO CESAR',
               'email' => 'jleons@ucss.edu.pe',
               'password' => bcrypt('02808372'),
          ]);
          User::create([
               'name' => 'LEON UNTIVEROS, MIGUEL ANGEL',
               'email' => 'mleon@ucss.edu.pe',
               'password' => bcrypt('20052552'),
          ]);
          User::create([
               'name' => 'LEONARDO RAMOS, MILAGROS ELISA',
               'email' => 'mleonardo@ucss.edu.pe',
               'password' => bcrypt('41658689'),
          ]);
          User::create([
               'name' => 'LEONARDO VALVERDE, GUSTAVO ADOLFO',
               'email' => 'gleonardo@ucss.edu.pe',
               'password' => bcrypt('09372426'),
          ]);
          User::create([
               'name' => 'LEVA, MAURIZIO',
               'email' => 'mleva@ucss.edu.pe',
               'password' => bcrypt('48364818'),
          ]);
          User::create([
               'name' => 'LEYTON CARDENAS, CARLOS ALBERTO',
               'email' => 'cleyton@ucss.edu.pe',
               'password' => bcrypt('000754989'),
          ]);
          User::create([
               'name' => 'LEYVA CAMPOBLANCO, LUIS FERNANDO',
               'email' => 'lleyva@ucss.edu.pe',
               'password' => bcrypt('08586426'),
          ]);
          User::create([
               'name' => 'LEYVA CAMPOBLANCO, MANUEL',
               'email' => 'mleyva@ucss.edu.pe',
               'password' => bcrypt('08586427'),
          ]);
          User::create([
               'name' => 'LIJARZA OLIVERA, JAVIER',
               'email' => 'jlijarza@ucss.edu.pe',
               'password' => bcrypt('41837794'),
          ]);
          User::create([
               'name' => 'LIMACO LAPA, BLANCA IRENE',
               'email' => 'blimaco@ucss.edu.pe',
               'password' => bcrypt('42159121'),
          ]);
          User::create([
               'name' => 'LIMAYMANTA CAYCHO, JOSE',
               'email' => 'jlimaymanta@ucss.edu.pe',
               'password' => bcrypt('07108525'),
          ]);
          User::create([
               'name' => 'LIMONCHI CANALES, ITALO ALDO',
               'email' => 'ilimonchi@ucss.edu.pe',
               'password' => bcrypt('07924964'),
          ]);
          User::create([
               'name' => 'LINARES VELASQUEZ, ELIZABETH ROCIO',
               'email' => 'elinares@ucss.edu.pe',
               'password' => bcrypt('08890567'),
          ]);
          User::create([
               'name' => 'LINO QUICAÑA, HECTOR JOSE',
               'email' => 'hlino@ucss.edu.pe',
               'password' => bcrypt('07282807'),
          ]);
          User::create([
               'name' => 'LIÑAN PALOMINO, JESSICA GLORIA',
               'email' => 'jlinan@ucss.edu.pe',
               'password' => bcrypt('07472208'),
          ]);
          User::create([
               'name' => 'LITANO FAN, YASMIN GREGORIA',
               'email' => 'ylitano@ucss.edu.pe',
               'password' => bcrypt('40387848'),
          ]);
          User::create([
               'name' => 'LIZANO CARMEN, LAZARO ELIAS',
               'email' => 'llizano@ucss.edu.pe',
               'password' => bcrypt('03110339'),
          ]);
          User::create([
               'name' => 'LLACSAGUACHE CALLE, DARWIN MACOLL PRIMERO',
               'email' => 'dllacsaguache@ucss.edu.pe',
               'password' => bcrypt('45441288'),
          ]);
          User::create([
               'name' => 'LLANOS AGUILAR, MANUEL EDUARDO',
               'email' => 'mllanos@ucss.edu.pe',
               'password' => bcrypt('07404896'),
          ]);
          User::create([
               'name' => 'LLANOS DELGADO, HAYDEE',
               'email' => 'hllanosd@ucss.edu.pe',
               'password' => bcrypt('41912826'),
          ]);
          User::create([
               'name' => 'LLANOS MUÑOZ, HORSLEY EMERSON',
               'email' => 'hllanos@ucss.edu.pe',
               'password' => bcrypt('43092075'),
          ]);
          User::create([
               'name' => 'LOAYZA ROCA DE GUZMAN, FRILL ENMA',
               'email' => 'floayza@ucss.edu.pe',
               'password' => bcrypt('07259098'),
          ]);
          User::create([
               'name' => 'LOBATO CALDERON, GODOFREDO ROMAN',
               'email' => 'globato@ucss.edu.pe',
               'password' => bcrypt('21087618'),
          ]);
          User::create([
               'name' => 'LOLI PRUDENCIO, CRISTIAN AMADOR',
               'email' => 'cloli@ucss.edu.pe',
               'password' => bcrypt('31651849'),
          ]);
          User::create([
               'name' => 'LOLOY LAURENCIO, NATALY OIJANI',
               'email' => 'nloloy@ucss.edu.pe',
               'password' => bcrypt('44668261'),
          ]);
          User::create([
               'name' => 'LOMPARTE QUIJADA, PEDRO ERNESTO',
               'email' => 'plomparte@ucss.edu.pe',
               'password' => bcrypt('08021374'),
          ]);
          User::create([
               'name' => 'LOPEZ AVILES, NESTOR MANUEL',
               'email' => 'nlopez@ucss.edu.pe',
               'password' => bcrypt('06674117'),
          ]);
          User::create([
               'name' => 'LOPEZ BAUTISTA, JUAN',
               'email' => 'jlopezb@ucss.edu.pe',
               'password' => bcrypt('04309601'),
          ]);
          User::create([
               'name' => 'LOPEZ BRAVO, RODOLFO ODLANIER',
               'email' => 'rlopez@ucss.edu.pe',
               'password' => bcrypt('000380761'),
          ]);
          User::create([
               'name' => 'LOPEZ BULNES, JORGE LUIS',
               'email' => 'jllopez@ucss.edu.pe',
               'password' => bcrypt('04523113'),
          ]);
          User::create([
               'name' => 'LOPEZ CAHUAZA, BENJAMIN',
               'email' => 'blopez@ucss.edu.pe',
               'password' => bcrypt('01020675'),
          ]);
          User::create([
               'name' => 'LOPEZ CAHUAZA, ROBERTO',
               'email' => 'rlopezc@ucss.edu.pe',
               'password' => bcrypt('01045846'),
          ]);
          User::create([
               'name' => 'LOPEZ CHAVEZ, SAMUEL',
               'email' => 'slopez@ucss.edu.pe',
               'password' => bcrypt('40133441'),
          ]);
          User::create([
               'name' => 'LOPEZ CULQUI, TORIBIO',
               'email' => 'tlopez@ucss.edu.pe',
               'password' => bcrypt('33961903'),
          ]);
          User::create([
               'name' => 'LOPEZ DEL MAR, JOEL BENIGNO',
               'email' => 'jlopez@ucss.edu.pe',
               'password' => bcrypt('08584920'),
          ]);
          User::create([
               'name' => 'LOPEZ LEONARDO, ARNALDO',
               'email' => 'alopezl@ucss.edu.pe',
               'password' => bcrypt('18220511'),
          ]);
          User::create([
               'name' => 'LOPEZ LOJA, CARLOS',
               'email' => 'clopezl@ucss.edu.pe',
               'password' => bcrypt('00817425'),
          ]);
          User::create([
               'name' => 'LOPEZ MORENO, LOURDES MERCEDES',
               'email' => 'llopezm@ucss.edu.pe',
               'password' => bcrypt('07374424'),
          ]);
          User::create([
               'name' => 'LOPEZ OSORIO, ROBERT JOSE DEL CARMEN',
               'email' => 'rlopezo@ucss.edu.pe',
               'password' => bcrypt('45758174'),
          ]);
          User::create([
               'name' => 'LOPEZ REQUENA, JUAN EDUARDO',
               'email' => 'jelopez@ucss.edu.pe',
               'password' => bcrypt('00373720'),
          ]);
          User::create([
               'name' => 'LOPEZ ROJAS, JHON JAIRO',
               'email' => 'jlopezro@ucss.edu.pe',
               'password' => bcrypt('43672261'),
          ]);
          User::create([
               'name' => 'LOPEZ ROSAZZA, GLADIS YOLANDA',
               'email' => 'gylopez@ucss.edu.pe',
               'password' => bcrypt('07743965'),
          ]);
          User::create([
               'name' => 'LOPEZ VASQUEZ, MELANY LISETT',
               'email' => 'mlopez@ucss.edu.pe',
               'password' => bcrypt('70873711'),
          ]);
          User::create([
               'name' => 'LOPEZ VILLANUEVA, PABLO EDWIN',
               'email' => 'plopez@ucss.edu.pe',
               'password' => bcrypt('32920084'),
          ]);
          User::create([
               'name' => 'LOSTAUNAU NEIRA, ALEJANDRO',
               'email' => 'alostaunau@ucss.edu.pe',
               'password' => bcrypt('10803128'),
          ]);
          User::create([
               'name' => 'LOVERA SUAREZ, CARMEN ISABEL MODESTA',
               'email' => 'clovera@ucss.edu.pe',
               'password' => bcrypt('07236924'),
          ]);
          User::create([
               'name' => 'LOYOLA AZNARAN, GIANPAUL',
               'email' => 'gloyola@ucss.edu.pe',
               'password' => bcrypt('42364086'),
          ]);
          User::create([
               'name' => 'LOYOLA TAPIA, JUANA YANIRA',
               'email' => 'yloyola@ucss.edu.pe',
               'password' => bcrypt('06638600'),
          ]);
          User::create([
               'name' => 'LUCICH OSORIO, PERCY ARMANDO',
               'email' => 'plucich@ucss.edu.pe',
               'password' => bcrypt('10139533'),
          ]);
          User::create([
               'name' => 'LUCUMI QUINTEROS, WILFREDO ARMANDO',
               'email' => 'wlucumi@ucss.edu.pe',
               'password' => bcrypt('16582864'),
          ]);
          User::create([
               'name' => 'LUDEÑA MARIN, WILSON ROBERTO',
               'email' => 'wludena@ucss.edu.pe',
               'password' => bcrypt('27080180'),
          ]);
          User::create([
               'name' => 'LUGO REYNALTE, TEOFILO',
               'email' => 'tlugo@ucss.edu.pe',
               'password' => bcrypt('07541748'),
          ]);
          User::create([
               'name' => 'LUNA CORREA, CARLOS ISAAC',
               'email' => 'cluna@ucss.edu.pe',
               'password' => bcrypt('26715046'),
          ]);
          User::create([
               'name' => 'LUNA GARCIA, JAVIER GONZALO',
               'email' => 'jlunag@ucss.edu.pe',
               'password' => bcrypt('10271374'),
          ]);
          User::create([
               'name' => 'LUNA INGA, VILMA AUGUSTA',
               'email' => 'vluna@ucss.edu.pe',
               'password' => bcrypt('10553973'),
          ]);
          User::create([
               'name' => 'LUNA MIRANDA, RAUL',
               'email' => 'rluna@ucss.edu.pe',
               'password' => bcrypt('09639954'),
          ]);
          User::create([
               'name' => 'LUNA RAMIREZ, EDITH NORMA',
               'email' => 'nluna@ucss.edu.pe',
               'password' => bcrypt('10157753'),
          ]);
          User::create([
               'name' => 'LUNA SANTOS, JUAN CARLOS',
               'email' => 'jluna@ucss.edu.pe',
               'password' => bcrypt('15723552'),
          ]);
          User::create([
               'name' => 'LUQUE SERRANO, ROSA MARIA',
               'email' => 'rluque@ucss.edu.pe',
               'password' => bcrypt('09913213'),
          ]);
          User::create([
               'name' => 'LUY MONTEJO, CARLOS AUGUSTO',
               'email' => 'aluy@ucss.edu.pe',
               'password' => bcrypt('09392792'),
          ]);
          User::create([
               'name' => 'MACEDO BARRERA, EUFEMIO MAGNO',
               'email' => 'emacedo@ucss.edu.pe',
               'password' => bcrypt('15612229'),
          ]);
          User::create([
               'name' => 'MACEDO RUIZ, CARLOS OMAR',
               'email' => 'cmacedo@ucss.edu.pe',
               'password' => bcrypt('10341927'),
          ]);
          User::create([
               'name' => 'MACHA MIFFLIN, ITALO LEANDRO',
               'email' => 'imacha@ucss.edu.pe',
               'password' => bcrypt('43665922'),
          ]);
          User::create([
               'name' => 'MAGALLANES MALDONADO, MABEL',
               'email' => 'mmagallanes@ucss.edu.pe',
               'password' => bcrypt('08421950'),
          ]);
          User::create([
               'name' => 'MAGGI, GUIDO EUGENIO MARIO',
               'email' => 'gmaggi@ucss.edu.pe',
               'password' => bcrypt('000057480'),
          ]);
          User::create([
               'name' => 'MAGUIÑA ALVAREZ, MIRIAM GRACIELA',
               'email' => 'mgmaguina@ucss.edu.pe',
               'password' => bcrypt('08426244'),
          ]);
          User::create([
               'name' => 'MAGUIÑA MENDOZA, MARIO ARTURO',
               'email' => 'mmaguina@ucss.edu.pe',
               'password' => bcrypt('06217919'),
          ]);
          User::create([
               'name' => 'MAGUIÑA VARGAS, GINO ENRIQUE',
               'email' => 'gmaguina@ucss.edu.pe',
               'password' => bcrypt('42860016'),
          ]);
          User::create([
               'name' => 'MALDONADO FELIX, HECTOR HUGO',
               'email' => 'hmaldonado@ucss.edu.pe',
               'password' => bcrypt('09593669'),
          ]);
          User::create([
               'name' => 'MALDONADO SALVATIERRA, ORLANDO OSCAR',
               'email' => 'omaldonado@ucss.edu.pe',
               'password' => bcrypt('20043095'),
          ]);
          User::create([
               'name' => 'MALPARTIDA PORRAS, JUAN DAVID',
               'email' => 'jmalpartidap@ucss.edu.pe',
               'password' => bcrypt('09095358'),
          ]);
          User::create([
               'name' => 'MALPARTIDA QUISPE, MIGUEL ANGEL',
               'email' => 'mmalpartida@ucss.edu.pe',
               'password' => bcrypt('42160839'),
          ]);
          User::create([
               'name' => 'MALPARTIDA RAMIREZ, ANAMELBA',
               'email' => 'amalpartida@ucss.edu.pe',
               'password' => bcrypt('15727608'),
          ]);
          User::create([
               'name' => 'MAMANI CORDOVA, ALEX',
               'email' => 'amamani@ucss.edu.pe',
               'password' => bcrypt('02445284'),
          ]);
          User::create([
               'name' => 'MANAYAY RINZA, CARLOS',
               'email' => 'cmanayay@ucss.edu.pe',
               'password' => bcrypt('16734556'),
          ]);
          User::create([
               'name' => 'MANCILLA AGUILAR, MIRIAM LILIANA',
               'email' => 'mmancilla@ucss.edu.pe',
               'password' => bcrypt('09840836'),
          ]);
          User::create([
               'name' => 'MANRIQUE CIENFUEGOS, JORGE LUIS',
               'email' => 'jmanrique@ucss.edu.pe',
               'password' => bcrypt('08857904'),
          ]);
          User::create([
               'name' => 'MANRIQUE PINO, OSCAR',
               'email' => 'omanrique@ucss.edu.pe',
               'password' => bcrypt('08740729'),
          ]);
          User::create([
               'name' => 'MAQUERA VIZCARRA, PATRICIA',
               'email' => 'pmaquera@ucss.edu.pe',
               'password' => bcrypt('43087589'),
          ]);
          User::create([
               'name' => 'MARCELO DE LA CRUZ, FAUSTO MIGUEL',
               'email' => 'fmarcelo@ucss.edu.pe',
               'password' => bcrypt('08567570'),
          ]);
          User::create([
               'name' => 'MARCHENA DIOSES, JOSE MANUEL',
               'email' => 'jmarchena@ucss.edu.pe',
               'password' => bcrypt('45638601'),
          ]);
          User::create([
               'name' => 'MARIANO BRAVO, GELI MELQUIADES',
               'email' => 'gmariano@ucss.edu.pe',
               'password' => bcrypt('46338635'),
          ]);
          User::create([
               'name' => 'MARQUEZ MEZA, JAVIER ALEJANDRO',
               'email' => 'jmarquez@ucss.edu.pe',
               'password' => bcrypt('25801304'),
          ]);
          User::create([
               'name' => 'MARQUINA MAUNY, WILFREDO JAVIER',
               'email' => 'wmarquina@ucss.edu.pe',
               'password' => bcrypt('25620629'),
          ]);
          User::create([
               'name' => 'MARRUFO DELGADO, MARIO BLADIMIR',
               'email' => 'mmarrufo@ucss.edu.pe',
               'password' => bcrypt('42494891'),
          ]);
          User::create([
               'name' => 'MARTINEZ GUILLEN, MARIA SANTOS',
               'email' => 'mmartinez@ucss.edu.pe',
               'password' => bcrypt('10283460'),
          ]);
          User::create([
               'name' => 'MARTINEZ RUIZ, FERNANDO JAVIER',
               'email' => 'fmartinez@ucss.edu.pe',
               'password' => bcrypt('07489349'),
          ]);
          User::create([
               'name' => 'MARTINEZ SILVA, CESAR YAIR',
               'email' => 'cmartinez@ucss.edu.pe',
               'password' => bcrypt('44367120'),
          ]);
          User::create([
               'name' => 'MARTINEZ TRUJILLO, JEANETTE MARIA DEL PILAR',
               'email' => 'pmartinez@ucss.edu.pe',
               'password' => bcrypt('08667644'),
          ]);
          User::create([
               'name' => 'MARTINEZ VALLS, JOAQUIN',
               'email' => 'jmartinez@ucss.edu.pe',
               'password' => bcrypt('908275'),
          ]);
          User::create([
               'name' => 'MARTOS MACHUCA, SHIRLEY PAMELA',
               'email' => 'smartos@ucss.edu.pe',
               'password' => bcrypt('44253203'),
          ]);
          User::create([
               'name' => 'MAS CARO, NIXON LUIS',
               'email' => 'nmas@ucss.edu.pe',
               'password' => bcrypt('43272586'),
          ]);
          User::create([
               'name' => 'MASCELLARO LUPERDI, GIANCARLO ENZO PASCQUALE',
               'email' => 'gmascellaro@ucss.edu.pe',
               'password' => bcrypt('25739572'),
          ]);
          User::create([
               'name' => 'MASGO LARA, JOSE PERCY',
               'email' => 'jmasgo@ucss.edu.pe',
               'password' => bcrypt('08485127'),
          ]);
          User::create([
               'name' => 'MASGO LARA, LUIS ALBERTO',
               'email' => 'lmasgo@ucss.edu.pe',
               'password' => bcrypt('09607876'),
          ]);
          User::create([
               'name' => 'MATHEUS ROMERO, JORGE HERNANDO',
               'email' => 'jmatheus@ucss.edu.pe',
               'password' => bcrypt('09697998'),
          ]);
          User::create([
               'name' => 'MATIAS HERNANDEZ, LUIS EDGARDO',
               'email' => 'lmatias@ucss.edu.pe',
               'password' => bcrypt('03376472'),
          ]);
          User::create([
               'name' => 'MATTA SANTIVAÑEZ, KARINA',
               'email' => 'kmatta@ucss.edu.pe',
               'password' => bcrypt('10613109'),
          ]);
          User::create([
               'name' => 'MAURICIO BOCANEGRA, CINDY VANESA',
               'email' => 'cmauricio@ucss.edu.pe',
               'password' => bcrypt('45596535'),
          ]);
          User::create([
               'name' => 'MAYA FLORES, RIGOBERTO MIGLE',
               'email' => 'rmaya@ucss.edu.pe',
               'password' => bcrypt('25676997'),
          ]);
          User::create([
               'name' => 'MAYO NUÑEZ DE FERNANDEZ, ELVIRA ADELA',
               'email' => 'eamayo@ucss.edu.pe',
               'password' => bcrypt('06095530'),
          ]);
          User::create([
               'name' => 'MAZA CHUMPITAZ, ANGELA GIOVANA',
               'email' => 'amaza@ucss.edu.pe',
               'password' => bcrypt('40935708'),
          ]);
          User::create([
               'name' => 'MEDINA FERNANDEZ, WILLIAM',
               'email' => 'wmedina@ucss.edu.pe',
               'password' => bcrypt('17447661'),
          ]);
          User::create([
               'name' => 'MEDINA GARAY, ALDO WILLIAM',
               'email' => 'amedina@ucss.edu.pe',
               'password' => bcrypt('40021141'),
          ]);
          User::create([
               'name' => 'MEDINA HU, LUCERO CAROLL',
               'email' => 'lmedina@ucss.edu.pe',
               'password' => bcrypt('40749197'),
          ]);
          User::create([
               'name' => 'MEDINA INFANTE, MAGALY BETZABE',
               'email' => 'bmedina@ucss.edu.pe',
               'password' => bcrypt('32983656'),
          ]);
          User::create([
               'name' => 'MEDINA MUÑOZ, MARIA MERCEDES',
               'email' => 'mmedinam@ucss.edu.pe',
               'password' => bcrypt('000838970'),
          ]);
          User::create([
               'name' => 'MEDINA PEREZ, MARIA YOVANO',
               'email' => 'mmedinap@ucss.edu.pe',
               'password' => bcrypt('40517760'),
          ]);
          User::create([
               'name' => 'MEDINA SIRLOPU, MARTHA',
               'email' => 'mmedina@ucss.edu.pe',
               'password' => bcrypt('25791096'),
          ]);
          User::create([
               'name' => 'MEDINA VELARDE, CIRO RIQUELME',
               'email' => 'cmedina@ucss.edu.pe',
               'password' => bcrypt('08463475'),
          ]);
          User::create([
               'name' => 'MEDINA VICENTE, JOSE',
               'email' => 'jmedina@ucss.edu.pe',
               'password' => bcrypt('25595506'),
          ]);
          User::create([
               'name' => 'MEDINA ZELA, RAUL',
               'email' => 'rmedina@ucss.edu.pe',
               'password' => bcrypt('09687515'),
          ]);
          User::create([
               'name' => 'MEDRANO BELLIDO, MILAGRO DEL ROSARIO',
               'email' => 'mmedrano@ucss.edu.pe',
               'password' => bcrypt('09052256'),
          ]);
          User::create([
               'name' => 'MEDRANO GUTIERREZ, JOSE LUIS',
               'email' => 'jmedrano@ucss.edu.pe',
               'password' => bcrypt('09032866'),
          ]);
          User::create([
               'name' => 'MEJIA GALOC, JAIRO',
               'email' => 'jmejia@ucss.edu.pe',
               'password' => bcrypt('43596039'),
          ]);
          User::create([
               'name' => 'MEJIA RODRIGO, ENA LUZ',
               'email' => 'emejia@ucss.edu.pe',
               'password' => bcrypt('07354510'),
          ]);
          User::create([
               'name' => 'MEJIA VALLADOLID, WALTER FRAX',
               'email' => 'wmejia@ucss.edu.pe',
               'password' => bcrypt('42123528'),
          ]);
          User::create([
               'name' => 'MELENDEZ PAJUELO, LUIGI EDUARDO',
               'email' => 'lmelendez@ucss.edu.pe',
               'password' => bcrypt('43400528'),
          ]);
          User::create([
               'name' => 'MELENDEZ TORRES, FERNANDO',
               'email' => 'fmelendez@ucss.edu.pe',
               'password' => bcrypt('40711844'),
          ]);
          User::create([
               'name' => 'MELGAREJO ALCANTARA, MARLLURY YNES',
               'email' => 'mmelgarejoa@ucss.edu.pe',
               'password' => bcrypt('09620243'),
          ]);
          User::create([
               'name' => 'MELGAREJO SALAZAR, MARGARITA GLADYS',
               'email' => 'mmelgarejo@ucss.edu.pe',
               'password' => bcrypt('25634361'),
          ]);
          User::create([
               'name' => 'MELO MELO, LUIS ALBERTO',
               'email' => 'lmelo@ucss.edu.pe',
               'password' => bcrypt('10473017'),
          ]);
          User::create([
               'name' => 'MENDEZ URBINA, FELIX ROBERTO MARTIN',
               'email' => 'fmendez@ucss.edu.pe',
               'password' => bcrypt('19838571'),
          ]);
          User::create([
               'name' => 'MENDOZA BELLO, EDGAR',
               'email' => 'emendoza@ucss.edu.pe',
               'password' => bcrypt('10201431'),
          ]);
          User::create([
               'name' => 'MENDOZA CABALLERO, WILFREDO',
               'email' => 'wmendoza@ucss.edu.pe',
               'password' => bcrypt('23978854'),
          ]);
          User::create([
               'name' => 'MENDOZA CENTENO, ARMANDO',
               'email' => 'amendozac@ucss.edu.pe',
               'password' => bcrypt('40576386'),
          ]);
          User::create([
               'name' => 'MENDOZA GARCIA, ALPINO',
               'email' => 'amendozag@ucss.edu.pe',
               'password' => bcrypt('40711652'),
          ]);
          User::create([
               'name' => 'MENDOZA NAVARRO, AIDA LUZ',
               'email' => 'lmendoza@ucss.edu.pe',
               'password' => bcrypt('08308467'),
          ]);
          User::create([
               'name' => 'MENDOZA PALACIOS, ROSA ELVIRA',
               'email' => 'rmendoza@ucss.edu.pe',
               'password' => bcrypt('03369703'),
          ]);
          User::create([
               'name' => 'MENDOZA RIVERA, ADRIAN PEDRO',
               'email' => 'amendoza@ucss.edu.pe',
               'password' => bcrypt('25447438'),
          ]);
          User::create([
               'name' => 'MENENDEZ MUERAS, ROSA',
               'email' => 'rmenendez@ucss.edu.pe',
               'password' => bcrypt('10246770'),
          ]);
          User::create([
               'name' => 'MENESES CRISPIN, ANGEL RENATO',
               'email' => 'ameneses@ucss.edu.pe',
               'password' => bcrypt('20595160'),
          ]);
          User::create([
               'name' => 'MENESES ÑAÑACC HUARI, JANET SILVIA',
               'email' => 'jmeneses@ucss.edu.pe',
               'password' => bcrypt('46027355'),
          ]);
          User::create([
               'name' => 'MERA NAVAL, HUGO JAIME',
               'email' => 'hmera@ucss.edu.pe',
               'password' => bcrypt('01051153'),
          ]);
          User::create([
               'name' => 'MERINO ZEVALLOS, CARLOS ANTONIO',
               'email' => 'cmerino@ucss.edu.pe',
               'password' => bcrypt('07969037'),
          ]);
          User::create([
               'name' => 'MERMA MORA, MIGUEL ANGEL',
               'email' => 'mmerma@ucss.edu.pe',
               'password' => bcrypt('42280826'),
          ]);
          User::create([
               'name' => 'MESTAS VALERO, ROGER MANUEL',
               'email' => 'rmestas@ucss.edu.pe',
               'password' => bcrypt('23842285'),
          ]);
          User::create([
               'name' => 'MEZA MENDOZA, FLOR DE MARIA',
               'email' => 'fmeza@ucss.edu.pe',
               'password' => bcrypt('06869126'),
          ]);
          User::create([
               'name' => 'MEZA TORRES, ERIKA LEUCADIA',
               'email' => 'emeza@ucss.edu.pe',
               'password' => bcrypt('41244851'),
          ]);
          User::create([
               'name' => 'MEZA VELASQUEZ, MARCO ANTONIO',
               'email' => 'mmeza@ucss.edu.pe',
               'password' => bcrypt('06252711'),
          ]);
          User::create([
               'name' => 'MEZARINA GARCIA, SILVIO JESUS',
               'email' => 'smezarina@ucss.edu.pe',
               'password' => bcrypt('09671328'),
          ]);
          User::create([
               'name' => 'MICHCA MAGUIÑA, MARY HELLEN MARIELA',
               'email' => 'mmichca@ucss.edu.pe',
               'password' => bcrypt('41478652'),
          ]);
          User::create([
               'name' => 'MILACHAY ESPINOZA, PABLO ANTONIO',
               'email' => 'pmilachay@ucss.edu.pe',
               'password' => bcrypt('17931766'),
          ]);
          User::create([
               'name' => 'MILLA FIGUEROA, AMERICO CARLOS',
               'email' => 'amilla@ucss.edu.pe',
               'password' => bcrypt('07949586'),
          ]);
          User::create([
               'name' => 'MILLA SAMILLAN, MIGUEL ANGEL',
               'email' => 'mmilla@ucss.edu.pe',
               'password' => bcrypt('80328544'),
          ]);
          User::create([
               'name' => 'MILLONES RIVALLES, NELIDA MARGARITA',
               'email' => 'nmillones@ucss.edu.pe',
               'password' => bcrypt('08703181'),
          ]);
          User::create([
               'name' => 'MINAYA ARCE, MIGUEL ANGEL',
               'email' => 'mminaya@ucss.edu.pe',
               'password' => bcrypt('08012887'),
          ]);
          User::create([
               'name' => 'MINGA SARMIENTO, MILDER EDGAR',
               'email' => 'mminga@ucss.edu.pe',
               'password' => bcrypt('40016813'),
          ]);
          User::create([
               'name' => 'MINGA SARMIENTO, ROLANDO NOLVERTHY',
               'email' => 'rminga@ucss.edu.pe',
               'password' => bcrypt('00838777'),
          ]);
          User::create([
               'name' => 'MIRANDA CANALES, MANUEL JESUS',
               'email' => 'mmiranda@ucss.edu.pe',
               'password' => bcrypt('08437793'),
          ]);
          User::create([
               'name' => 'MIRANDA LOZANO, ALI',
               'email' => 'amiranda@ucss.edu.pe',
               'password' => bcrypt('41826418'),
          ]);
          User::create([
               'name' => 'MITTA CURAY, EVER RAMIRO',
               'email' => 'emitta@ucss.edu.pe',
               'password' => bcrypt('25697416'),
          ]);
          User::create([
               'name' => 'MOISES GONZALES, NORMA ROCIO',
               'email' => 'nmoises@ucss.edu.pe',
               'password' => bcrypt('40894989'),
          ]);
          User::create([
               'name' => 'MOLOCHO HERRERA, RONALD A.',
               'email' => 'rmolocho@ucss.edu.pe',
               'password' => bcrypt('40995382'),
          ]);
          User::create([
               'name' => 'MONDALGO PORRAS, WILBER',
               'email' => 'wmondalgo@ucss.edu.pe',
               'password' => bcrypt('20108417'),
          ]);
          User::create([
               'name' => 'MONDRAGON LIMA, MARITZA ELIZABETH',
               'email' => 'mmondragon@ucss.edu.pe',
               'password' => bcrypt('03688780'),
          ]);
          User::create([
               'name' => 'MONROE IGLESIAS, JUAN',
               'email' => 'jmonroe@ucss.edu.pe',
               'password' => bcrypt('09079377'),
          ]);
          User::create([
               'name' => 'MONTALBAN VILLEGAS, LEYTER CROVER',
               'email' => 'lmontalban@ucss.edu.pe',
               'password' => bcrypt('41062437'),
          ]);
          User::create([
               'name' => 'MONTEMAYOR MANTILLA, JOSE MIGUEL',
               'email' => 'jmontemayor@ucss.edu.pe',
               'password' => bcrypt('15611342'),
          ]);
          User::create([
               'name' => 'MONTENEGRO ALARCON, SEGUNDO MANUEL',
               'email' => 'smontenegro@ucss.edu.pe',
               'password' => bcrypt('16778965'),
          ]);
          User::create([
               'name' => 'MONTERO RAVELO, ALEXEI ARMANDO',
               'email' => 'amontero@ucss.edu.pe',
               'password' => bcrypt('18163651'),
          ]);
          User::create([
               'name' => 'MONTERROSO CORONADO, CESAR ANTONIO',
               'email' => 'amonterroso@ucss.edu.pe',
               'password' => bcrypt('10271073'),
          ]);
          User::create([
               'name' => 'MONTES VILLANUEVA, NILDA DORIS',
               'email' => 'nmontes@ucss.edu.pe',
               'password' => bcrypt('08633219'),
          ]);
          User::create([
               'name' => 'MONTEZA ACENJO, ROGER',
               'email' => 'rmonteza@ucss.edu.pe',
               'password' => bcrypt('46440523'),
          ]);
          User::create([
               'name' => 'MONTEZA ALARCON, EVER OSWALDO',
               'email' => 'emonteza@ucss.edu.pe',
               'password' => bcrypt('44046349'),
          ]);
          User::create([
               'name' => 'MONTEZA FERNANDEZ, IMER',
               'email' => 'imonteza@ucss.edu.pe',
               'password' => bcrypt('71066725'),
          ]);
          User::create([
               'name' => 'MONTOYA SALDAÑA, SILVIA MARIANA',
               'email' => 'smontoya@ucss.edu.pe',
               'password' => bcrypt('09994755'),
          ]);
          User::create([
               'name' => 'MONTOYA TEJADA, WILSON EDUARDO',
               'email' => 'wmontoya@ucss.edu.pe',
               'password' => bcrypt('02841777'),
          ]);
          User::create([
               'name' => 'MOQUILLAZA CASTILLA, JORGE LUIS',
               'email' => 'jmoquillaza@ucss.edu.pe',
               'password' => bcrypt('21521372'),
          ]);
          User::create([
               'name' => 'MORA CUMPA, LUIS ENRIQUE',
               'email' => 'lmora@ucss.edu.pe',
               'password' => bcrypt('16717938'),
          ]);
          User::create([
               'name' => 'MORA RAMIREZ, RAFAEL FELIX',
               'email' => 'rmora@ucss.edu.pe',
               'password' => bcrypt('43616314'),
          ]);
          User::create([
               'name' => 'MORAL LAZO, GUSTAVO LUIS',
               'email' => 'gmoral@ucss.edu.pe',
               'password' => bcrypt('07970751'),
          ]);
          User::create([
               'name' => 'MORALES CHAVEZ, JOSE DIONICIO',
               'email' => 'jdmorales@ucss.edu.pe',
               'password' => bcrypt('42554869'),
          ]);
          User::create([
               'name' => 'MORALES MENA, JAVIER JULIAN',
               'email' => 'jmorales@ucss.edu.pe',
               'password' => bcrypt('31683078'),
          ]);
          User::create([
               'name' => 'MORALES ROJAS, WILLIAN ANTONY',
               'email' => 'amorales@ucss.edu.pe',
               'password' => bcrypt('42007303'),
          ]);
          User::create([
               'name' => 'MORALES SALVADOR, MARTIN ALFONSSO',
               'email' => 'mmorales@ucss.edu.pe',
               'password' => bcrypt('46534673'),
          ]);
          User::create([
               'name' => 'MORALES SALVADOR, ROXANA',
               'email' => 'rmoraless@ucss.edu.pe',
               'password' => bcrypt('15733417'),
          ]);
          User::create([
               'name' => 'MORALES TELLO, LUIS FELIPE',
               'email' => 'lmorales@ucss.edu.pe',
               'password' => bcrypt('25458834'),
          ]);
          User::create([
               'name' => 'MORALES VASQUEZ, CESAR ALBERTO',
               'email' => 'cmorales@ucss.edu.pe',
               'password' => bcrypt('40064308'),
          ]);
          User::create([
               'name' => 'MORENO CUEVA, MAXIMO ALBERTO',
               'email' => 'mmoreno@ucss.edu.pe',
               'password' => bcrypt('08500743'),
          ]);
          User::create([
               'name' => 'MORENO PALOMINO, JEAN PAUL',
               'email' => 'jmoreno@ucss.edu.pe',
               'password' => bcrypt('21133559'),
          ]);
          User::create([
               'name' => 'MORENO PEREZ, TITO',
               'email' => 'tmorenop@ucss.edu.pe',
               'password' => bcrypt('70205109'),
          ]);
          User::create([
               'name' => 'MORILLO SOTOMAYOR, ALEX',
               'email' => 'amorillo@ucss.edu.pe',
               'password' => bcrypt('42266928'),
          ]);
          User::create([
               'name' => 'MORON ESPINOZA, EDUARDO LUCAS',
               'email' => 'emoron@ucss.edu.pe',
               'password' => bcrypt('07596363'),
          ]);
          User::create([
               'name' => 'MORON TACUNAN, NESTOR CESAR',
               'email' => 'ntacunan@ucss.edu.pe',
               'password' => bcrypt('21568191'),
          ]);
          User::create([
               'name' => 'MORY CHIPARRA, WILLIAM EDUARDO',
               'email' => 'wmchiparra@ucss.edu.pe',
               'password' => bcrypt('40831863'),
          ]);
          User::create([
               'name' => 'MOSCOSO CUARESMA, JULIO RICARDO',
               'email' => 'jmoscoso@ucss.edu.pe',
               'password' => bcrypt('43057085'),
          ]);
          User::create([
               'name' => 'MOSCOSO PORRAS, MIGUEL GIANCARLO',
               'email' => 'mmoscoso@ucss.edu.pe',
               'password' => bcrypt('46119048'),
          ]);
          User::create([
               'name' => 'MOTTA CANCHO, NINA KARINNA',
               'email' => 'mcancho@ucss.edu.pe',
               'password' => bcrypt('21553795'),
          ]);
          User::create([
               'name' => 'MUCHA MONTOYA, RUTH HAYDEE',
               'email' => 'rmucha@ucss.edu.pe',
               'password' => bcrypt('19870721'),
          ]);
          User::create([
               'name' => 'MUJICA YEPEZ, ALFREDO EULOGIO',
               'email' => 'amujica@ucss.edu.pe',
               'password' => bcrypt('09878384'),
          ]);
          User::create([
               'name' => 'MUJICA YEPEZ, JUAN CARLOS',
               'email' => 'jmujica@ucss.edu.pe',
               'password' => bcrypt('06095921'),
          ]);
          User::create([
               'name' => 'MUNIVE JAUREGUI, HONORIO ELOY',
               'email' => 'hmunive@ucss.edu.pe',
               'password' => bcrypt('20662522'),
          ]);
          User::create([
               'name' => 'MUÑANTE VILLAFUERTE, EDGAR JESUS',
               'email' => 'emunante@ucss.edu.pe',
               'password' => bcrypt('25851128'),
          ]);
          User::create([
               'name' => 'MUÑIZ PAUCARMAYTA, ABEL ALBERTO',
               'email' => 'amuniz@ucss.edu.pe',
               'password' => bcrypt('23851049'),
          ]);
          User::create([
               'name' => 'MUÑIZ PAUCARMAYTA, MARCO HERBER',
               'email' => 'mmuniz@ucss.edu.pe',
               'password' => bcrypt('23956433'),
          ]);
          User::create([
               'name' => 'MUÑOZ MARTICORENA, JORGE LUIS',
               'email' => 'jmunozm@ucss.edu.pe',
               'password' => bcrypt('21815155'),
          ]);
          User::create([
               'name' => 'MUÑOZ MARTICORENA, WILLIAM AMADEO',
               'email' => 'wmunoz@ucss.edu.pe',
               'password' => bcrypt('08269783'),
          ]);
          User::create([
               'name' => 'MUÑOZ QUICHIZ, JAVIER ANGEL',
               'email' => 'jmunoz@ucss.edu.pe',
               'password' => bcrypt('15761830'),
          ]);
          User::create([
               'name' => 'MUÑOZ RAMOS, LUIS AVELINO',
               'email' => 'lmunoz@ucss.edu.pe',
               'password' => bcrypt('06636692'),
          ]);
          User::create([
               'name' => 'MUÑOZ TORRE, HERLINDA MARLENI',
               'email' => 'hmunoz@ucss.edu.pe',
               'password' => bcrypt('09738114'),
          ]);
          User::create([
               'name' => 'MURILLO PONTE, RICARDO VICTOR',
               'email' => 'rmurillo@ucss.edu.pe',
               'password' => bcrypt('10230085'),
          ]);
          User::create([
               'name' => 'MURO LOPEZ, DAVID ANGEL DE JESUS',
               'email' => 'dmuro@ucss.edu.pe',
               'password' => bcrypt('00000000'),
          ]);
          User::create([
               'name' => 'MURO ZUÑIGA, MARIA LAURA',
               'email' => 'mmuro@ucss.edu.pe',
               'password' => bcrypt('16688931'),
          ]);
          User::create([
               'name' => 'NARRO SANDOVAL, WILLIAM NICOLAS',
               'email' => 'wnarro@ucss.edu.pe',
               'password' => bcrypt('42113697'),
          ]);
          User::create([
               'name' => 'NAUPARI CASTILLO, HEROINA DINA',
               'email' => 'dnaupari@ucss.edu.pe',
               'password' => bcrypt('09593605'),
          ]);
          User::create([
               'name' => 'NAVARRO ALBA, MARIO ALFREDO RICARDO',
               'email' => 'mnavarro@ucss.edu.pe',
               'password' => bcrypt('06128835'),
          ]);
          User::create([
               'name' => 'NAVARRO GUERRERO, TITO RICARDO',
               'email' => 'tnavarro@ucss.edu.pe',
               'password' => bcrypt('06145294'),
          ]);
          User::create([
               'name' => 'NAVARRO LINARES, JANINA DEL ROCIO',
               'email' => 'jnavarro@ucss.edu.pe',
               'password' => bcrypt('41438407'),
          ]);
          User::create([
               'name' => 'NAVARRO NAVARRO, BERTHA CONSUELO',
               'email' => 'bnavarro@ucss.edu.pe',
               'password' => bcrypt('07257202'),
          ]);
          User::create([
               'name' => 'NAVARRO RAYMUNDO, ANGEL FERNANDO',
               'email' => 'anavarror@ucss.edu.pe',
               'password' => bcrypt('41110448'),
          ]);
          User::create([
               'name' => 'NAVARRO SUAREZ, LEONORE LADY',
               'email' => 'lnavarro@ucss.edu.pe',
               'password' => bcrypt('10048890'),
          ]);
          User::create([
               'name' => 'NAVARRO VILCHEZ, IGOR',
               'email' => 'inavarro@ucss.edu.pe',
               'password' => bcrypt('07626510'),
          ]);
          User::create([
               'name' => 'NAVEA TALAVERA, RICARDO',
               'email' => 'rnavea@ucss.edu.pe',
               'password' => bcrypt('10683720'),
          ]);
          User::create([
               'name' => 'NEIRA MAGAN, CESAR AUGUSTO',
               'email' => 'cneira@ucss.edu.pe',
               'password' => bcrypt('09076357'),
          ]);
          User::create([
               'name' => 'NEME SANCHEZ, RAUF SAUD',
               'email' => 'rneme@ucss.edu.pe',
               'password' => bcrypt('40515752'),
          ]);
          User::create([
               'name' => 'NEYRA DE LA ROSA, LUIS',
               'email' => 'Lneyradlr@ucss.edu.pe',
               'password' => bcrypt('09952010'),
          ]);
          User::create([
               'name' => 'NEYRA DE LA ROSA, NILDRE GERALDINE',
               'email' => 'nneyra@ucss.edu.pe',
               'password' => bcrypt('09936559'),
          ]);
          User::create([
               'name' => 'NEYRA HUAMANI, LIDIA',
               'email' => 'lneyrah@ucss.edu.pe',
               'password' => bcrypt('10091682'),
          ]);
          User::create([
               'name' => 'NEYRA REATEGUI DE TIRADO, HILDA VICTORIA',
               'email' => 'hneyra@ucss.edu.pe',
               'password' => bcrypt('25721474'),
          ]);
          User::create([
               'name' => 'NIEBLES VILLARREAL, VIRGINIA ISABEL',
               'email' => 'vniebles@ucss.edu.pe',
               'password' => bcrypt('46921140'),
          ]);
          User::create([
               'name' => 'NINANYA ROJAS, JOEL',
               'email' => 'jninanya@ucss.edu.pe',
               'password' => bcrypt('20064562'),
          ]);
          User::create([
               'name' => 'NOEL TAMAYO, JOSE YAMSER',
               'email' => 'jnoel@ucss.edu.pe',
               'password' => bcrypt('10718418'),
          ]);
          User::create([
               'name' => 'NOLAZCO VICENTE, LUIS ARTURO',
               'email' => 'lnolasco@ucss.edu.pe',
               'password' => bcrypt('06902484'),
          ]);
          User::create([
               'name' => 'NORIEGA HIDALGO, TATIANA CAROLINA',
               'email' => 'tnoriega@ucss.edu.pe',
               'password' => bcrypt('70439664'),
          ]);
          User::create([
               'name' => 'NORIEGA MERCADO, JORGE',
               'email' => 'jnoriega@ucss.edu.pe',
               'password' => bcrypt('10397441'),
          ]);
          User::create([
               'name' => 'NUÑEZ APOLINARIO, BETSY JUANA',
               'email' => 'bnunez@ucss.edu.pe',
               'password' => bcrypt('46166675'),
          ]);
          User::create([
               'name' => 'NUÑEZ CORREA, ERICKA MILAGROS',
               'email' => 'enunez@ucss.edu.pe',
               'password' => bcrypt('40329590'),
          ]);
          User::create([
               'name' => 'NUÑEZ MANRIQUE, ANA MARIA',
               'email' => 'amnunez@ucss.edu.pe',
               'password' => bcrypt('09377701'),
          ]);
          User::create([
               'name' => 'NUÑEZ SOTO, LUIS GUILLERMO',
               'email' => 'lnunez@ucss.edu.pe',
               'password' => bcrypt('08820367'),
          ]);
          User::create([
               'name' => 'NUÑEZ VILELA, LUIS FERNANDO',
               'email' => 'lfnunez@ucss.edu.pe',
               'password' => bcrypt('10304267'),
          ]);
          User::create([
               'name' => 'NUREÑA PRADO, JUAN ANTONIO',
               'email' => 'jnurena@ucss.edu.pe',
               'password' => bcrypt('40087686'),
          ]);
          User::create([
               'name' => 'ÑAUPARI BALVIN, WILLIAM JUAN',
               'email' => 'wnaupari@ucss.edu.pe',
               'password' => bcrypt('21262483'),
          ]);
          User::create([
               'name' => 'ÑIQUE CADILLO, MIGUEL OSCAR',
               'email' => 'monc@ucss.edu.pe',
               'password' => bcrypt('18022048'),
          ]);
          User::create([
               'name' => 'OBISPO GAVINO, JHON HERBERT',
               'email' => 'jobispog@ucss.edu.pe',
               'password' => bcrypt('15728127'),
          ]);
          User::create([
               'name' => 'OBLITAS DIAZ, JOSE EULER',
               'email' => 'joblitas@ucss.edu.pe',
               'password' => bcrypt('70036111'),
          ]);
          User::create([
               'name' => 'OBREGON RAMOS, MAXIMO',
               'email' => 'mobregon@ucss.edu.pe',
               'password' => bcrypt('08161078'),
          ]);
          User::create([
               'name' => 'OCHOA MONTERO, JOSE MAXIMO',
               'email' => 'jochoa@ucss.edu.pe',
               'password' => bcrypt('09619560'),
          ]);
          User::create([
               'name' => 'OLAYA PEREZ, ISRAEL WLADIMIR',
               'email' => 'iolaya@ucss.edu.pe',
               'password' => bcrypt('08072544'),
          ]);
          User::create([
               'name' => 'OLIVA NAVARRO, JORGE ALEJANDRO',
               'email' => 'joliva@ucss.edu.pe',
               'password' => bcrypt('41110999'),
          ]);
          User::create([
               'name' => 'OLIVARES LLONA, EDUARDO EDMUNDO',
               'email' => 'eolivares@ucss.edu.pe',
               'password' => bcrypt('07729635'),
          ]);
          User::create([
               'name' => 'OLIVARES LLONA, JESUS REYNALDO',
               'email' => 'jolivares@ucss.edu.pe',
               'password' => bcrypt('10416498'),
          ]);
          User::create([
               'name' => 'ONTANEDA MANDUJANO, MARIA ALICIA',
               'email' => 'montaneda@ucss.edu.pe',
               'password' => bcrypt('10610280'),
          ]);
          User::create([
               'name' => 'ORDOÑEZ GUERRERO, IRIS CECILIA',
               'email' => 'iordonez@ucss.edu.pe',
               'password' => bcrypt('03244079'),
          ]);
          User::create([
               'name' => 'ORDOÑEZ GUEVARA, JOSE ALEXANDER',
               'email' => 'jordonez@ucss.edu.pe',
               'password' => bcrypt('40501603'),
          ]);
          User::create([
               'name' => 'ORE RIVAS, RAUL JAVIER',
               'email' => 'rore@ucss.edu.pe',
               'password' => bcrypt('08763051'),
          ]);
          User::create([
               'name' => 'OROSCO FABIAN, JHON RICHARD',
               'email' => 'jorosco@ucss.edu.pe',
               'password' => bcrypt('42470198'),
          ]);
          User::create([
               'name' => 'ORRILLO ASCAMA DE BARRIENTOS, MIRTHA JUANA',
               'email' => 'mjorrillo@ucss.edu.pe',
               'password' => bcrypt('09613677'),
          ]);
          User::create([
               'name' => 'ORTEGA MUÑOZ, CARLOS',
               'email' => 'cortega@ucss.edu.pe',
               'password' => bcrypt('10196265'),
          ]);
          User::create([
               'name' => 'ORTEGA SILVA, DOIVE SALVADOR',
               'email' => 'dortegas@ucss.edu.pe',
               'password' => bcrypt('09892789'),
          ]);
          User::create([
               'name' => 'ORTIZ ARICA, MARITZA MORAYMA',
               'email' => 'mortiz@ucss.edu.pe',
               'password' => bcrypt('40246975'),
          ]);
          User::create([
               'name' => 'ORTIZ BARBOZA, JOSE WALTER',
               'email' => 'jortizb@ucss.edu.pe',
               'password' => bcrypt('40107206'),
          ]);
          User::create([
               'name' => 'ORTIZ CHAUCA, EDUARDO',
               'email' => 'eortiz@ucss.edu.pe',
               'password' => bcrypt('08524908'),
          ]);
          User::create([
               'name' => 'ORTIZ DAMIANO, DAVID RUBEN',
               'email' => 'dortiz@ucss.edu.pe',
               'password' => bcrypt('21118106'),
          ]);
          User::create([
               'name' => 'ORTIZ DUCLOS, JUAN CARLOS',
               'email' => 'jortizd@ucss.edu.pe',
               'password' => bcrypt('08095469'),
          ]);
          User::create([
               'name' => 'ORTIZ MONTALVO, YONATHAN JOSUE',
               'email' => 'yortiz@ucss.edu.pe',
               'password' => bcrypt('46314694'),
          ]);
          User::create([
               'name' => 'ORTIZ ROMANI, KATHERINE JENNY',
               'email' => 'kortiz@ucss.edu.pe',
               'password' => bcrypt('45862398'),
          ]);
          User::create([
               'name' => 'ORTIZ VASQUEZ, NIRIA',
               'email' => 'nortiz@ucss.edu.pe',
               'password' => bcrypt('27049651'),
          ]);
          User::create([
               'name' => 'OSORIO FLORES, ALVARO JAVIER',
               'email' => 'aosorio@ucss.edu.pe',
               'password' => bcrypt('40029699'),
          ]);
          User::create([
               'name' => 'OTSU NAVARRETE, GRACIELA RAQUEL',
               'email' => 'gotsu@ucss.edu.pe',
               'password' => bcrypt('08801690'),
          ]);
          User::create([
               'name' => 'OVALLE FERNANDEZ, ALEXIS',
               'email' => 'aovalle@ucss.edu.pe',
               'password' => bcrypt('41670439'),
          ]);
          User::create([
               'name' => 'OYOLA BAYONA, MANUEL EDUARDO',
               'email' => 'moyola@ucss.edu.pe',
               'password' => bcrypt('46106990'),
          ]);
          User::create([
               'name' => 'PAAN QUISPE, EVELYN',
               'email' => 'epaan@ucss.edu.pe',
               'password' => bcrypt('08149753'),
          ]);
          User::create([
               'name' => 'PACAYA DIAZ, DARINKA',
               'email' => 'dpacaya@ucss.edu.pe',
               'password' => bcrypt('41786787'),
          ]);
          User::create([
               'name' => 'PACCOSI, GIOVANNI',
               'email' => 'paccosi@ucss.edu.pe',
               'password' => bcrypt('000080198'),
          ]);
          User::create([
               'name' => 'PACCOTAIPE ESPINOZA, SALOME',
               'email' => 'spaccotaipe@ucss.edu.pe',
               'password' => bcrypt('06851633'),
          ]);
          User::create([
               'name' => 'PACHAS ORTEGA, CESAR ANTONIO',
               'email' => 'cpachas@ucss.edu.pe',
               'password' => bcrypt('06211747'),
          ]);
          User::create([
               'name' => 'PACHECO CLAROS, LEMUEL ELMER',
               'email' => 'lpacheco@ucss.edu.pe',
               'password' => bcrypt('15764152'),
          ]);
          User::create([
               'name' => 'PACHECO MONZON, CARLOS ALBERTO',
               'email' => 'cpacheco@ucss.edu.pe',
               'password' => bcrypt('07150965'),
          ]);
          User::create([
               'name' => 'PACIFICO SOTO, CARLOS DELFIN',
               'email' => 'cpacifico@ucss.edu.pe',
               'password' => bcrypt('15760945'),
          ]);
          User::create([
               'name' => 'PADILLA ROMERO, CARMEN LIZ',
               'email' => 'cpadilla@ucss.edu.pe',
               'password' => bcrypt('72500188'),
          ]);
          User::create([
               'name' => 'PALACIOS CHINCHAY, WILLIAN EDUARDO',
               'email' => 'wpalacios@ucss.edu.pe',
               'password' => bcrypt('45019223'),
          ]);
          User::create([
               'name' => 'PALACIOS DE BRICEÑO, MERCEDES RENEE',
               'email' => 'mpalacios@ucss.edu.pe',
               'password' => bcrypt('02845588'),
          ]);
          User::create([
               'name' => 'PALACIOS FARFAN, PEDRO MIGUEL',
               'email' => 'ppalacios@ucss.edu.pe',
               'password' => bcrypt('32543302'),
          ]);
          User::create([
               'name' => 'PALACIOS FARFAN, VIVIANA DEL ROSARIO',
               'email' => 'vpalacios@ucss.edu.pe',
               'password' => bcrypt('40237606'),
          ]);
          User::create([
               'name' => 'PALACIOS FLORES, CARLOS ENRIQUE',
               'email' => 'cpalacios@ucss.edu.pe',
               'password' => bcrypt('07184532'),
          ]);
          User::create([
               'name' => 'PALACIOS RIVAS, GLORIA VERONICA',
               'email' => 'gpalacios@ucss.edu.pe',
               'password' => bcrypt('41085161'),
          ]);
          User::create([
               'name' => 'PALOMARES ROSALES, MARITZA YSOLDA',
               'email' => 'mpalomares@ucss.edu.pe',
               'password' => bcrypt('15727330'),
          ]);
          User::create([
               'name' => 'PALOMINO VALDEZ, MARIA ISABEL',
               'email' => 'mpalomino@ucss.edu.pe',
               'password' => bcrypt('03376528'),
          ]);
          User::create([
               'name' => 'PALOMINO VELAPATIÑO, GLADYS ZULY',
               'email' => 'gpalomino@ucss.edu.pe',
               'password' => bcrypt('40971047'),
          ]);
          User::create([
               'name' => 'PANEZ WUCHENAUER, ISBERT JOSE',
               'email' => 'ipanez@ucss.edu.pe',
               'password' => bcrypt('10725545'),
          ]);
          User::create([
               'name' => 'PANTOJA RIOS, VERONICA',
               'email' => 'vpantoja@ucss.edu.pe',
               'password' => bcrypt('17619336'),
          ]);
          User::create([
               'name' => 'PARAGUAY VILLA, YAZMYN LIZETTE',
               'email' => 'yparaguay@ucss.edu.pe',
               'password' => bcrypt('40115553'),
          ]);
          User::create([
               'name' => 'PARDO CASTILLO, FIORELLA CRISTINA',
               'email' => 'fpardo@ucss.edu.pe',
               'password' => bcrypt('70901573'),
          ]);
          User::create([
               'name' => 'PAREDES AGUIRRE, FREDY ROMAN',
               'email' => 'fparedes@ucss.edu.pe',
               'password' => bcrypt('15859960'),
          ]);
          User::create([
               'name' => 'PAREDES SERRANO, MARIA SALOME',
               'email' => 'mparedes@ucss.edu.pe',
               'password' => bcrypt('08677518'),
          ]);
          User::create([
               'name' => 'PAREJA FERNANDEZ, ANA CECILIA',
               'email' => 'apareja@ucss.edu.pe',
               'password' => bcrypt('07735674'),
          ]);
          User::create([
               'name' => 'PASACHE YARLEQUE, CARLOS ALBERTO',
               'email' => 'cpasache@ucss.edu.pe',
               'password' => bcrypt('03380174'),
          ]);
          User::create([
               'name' => 'PASCUAL MENDOZA, EDISSON PEDRO',
               'email' => 'epascual@ucss.edu.pe',
               'password' => bcrypt('40511186'),
          ]);
          User::create([
               'name' => 'PASTEN MONARDEZ, JUAN IGNACIO',
               'email' => 'jpasten@ucss.edu.pe',
               'password' => bcrypt('000812857'),
          ]);
          User::create([
               'name' => 'PASTRANA BANDAN, JESSICA MIRIAM',
               'email' => 'jpastrana@ucss.edu.pe',
               'password' => bcrypt('42750570'),
          ]);
          User::create([
               'name' => 'PATIÑO DURAND, LOURDES',
               'email' => 'lpatino@ucss.edu.pe',
               'password' => bcrypt('19963193'),
          ]);
          User::create([
               'name' => 'PATIÑO VIDAL, CARLOS DIEGO',
               'email' => 'cpatino@ucss.edu.pe',
               'password' => bcrypt('08678626'),
          ]);
          User::create([
               'name' => 'PAUCAR MOROCHO, EDDY',
               'email' => 'epaucarm@ucss.edu.pe',
               'password' => bcrypt('18196001'),
          ]);
          User::create([
               'name' => 'PAZ PANDURO, MOISES NEIL',
               'email' => 'mpaz@ucss.edu.pe',
               'password' => bcrypt('09678640'),
          ]);
          User::create([
               'name' => 'PAZ SILVA, GLENY DHAYANA',
               'email' => 'gpaz@ucss.edu.pe',
               'password' => bcrypt('41754599'),
          ]);
          User::create([
               'name' => 'PECEROS ARIAS, IRMA ROXANA',
               'email' => 'ipeceros@ucss.edu.pe',
               'password' => bcrypt('21814639'),
          ]);
          User::create([
               'name' => 'PELAEZ VARGAS, WILSON MARCIAL',
               'email' => 'wpelaez@ucss.edu.pe',
               'password' => bcrypt('10432834'),
          ]);
          User::create([
               'name' => 'PEÑA CANGA, HUGO EDUARDO',
               'email' => 'hpena@ucss.edu.pe',
               'password' => bcrypt('15607951'),
          ]);
          User::create([
               'name' => 'PEÑA HERRERA, CARMEN LUZ',
               'email' => 'cpena@ucss.edu.pe',
               'password' => bcrypt('40241319'),
          ]);
          User::create([
               'name' => 'PEÑA LEON, PEDRO DARIO',
               'email' => 'ppena@ucss.edu.pe',
               'password' => bcrypt('000944575'),
          ]);
          User::create([
               'name' => 'PEÑA MORENO, FRANK JONATHAN',
               'email' => 'fpena@ucss.edu.pe',
               'password' => bcrypt('41379090'),
          ]);
          User::create([
               'name' => 'PEÑA OXOLON, CESAR JESUS',
               'email' => 'cjpena@ucss.edu.pe',
               'password' => bcrypt('08152312'),
          ]);
          User::create([
               'name' => 'PEÑA QUISPE, PABLO CESAR',
               'email' => 'pcpena@ucss.edu.pe',
               'password' => bcrypt('72566570'),
          ]);
          User::create([
               'name' => 'PEÑA VALENZUELA, EDER JAVIER',
               'email' => 'epena@ucss.edu.pe',
               'password' => bcrypt('42356772'),
          ]);
          User::create([
               'name' => 'PEÑAHERRERA LAZO, DIEGO JOSE',
               'email' => 'dpenaherrera@ucss.edu.pe',
               'password' => bcrypt('42614227'),
          ]);
          User::create([
               'name' => 'PERACCHI, CARLA',
               'email' => 'cperacchi@ucss.edu.pe',
               'password' => bcrypt('000947981'),
          ]);
          User::create([
               'name' => 'PERALTA ALVAREZ, FRANK JORDAN',
               'email' => 'fperalta@ucss.edu.pe',
               'password' => bcrypt('45451111'),
          ]);
          User::create([
               'name' => 'PERALTA PEREZ, UVA',
               'email' => 'uperalta@ucss.edu.pe',
               'password' => bcrypt('27432363'),
          ]);
          User::create([
               'name' => 'PERALTA TRUJILLO, JIMMY LADISLAO',
               'email' => 'jlperalta@ucss.edu.pe',
               'password' => bcrypt('10748325'),
          ]);
          User::create([
               'name' => 'PERALTA VERA, JUAN CARLOS',
               'email' => 'jcperalta@ucss.edu.pe',
               'password' => bcrypt('10144128'),
          ]);
          User::create([
               'name' => 'PERALTA VILLANUEVA, JENNY MAGALY',
               'email' => 'jperalta@ucss.edu.pe',
               'password' => bcrypt('41925884'),
          ]);
          User::create([
               'name' => 'PERES NICOLAS, JOSE LUIS',
               'email' => 'jperes@ucss.edu.pe',
               'password' => bcrypt('46320749'),
          ]);
          User::create([
               'name' => 'PEREYRA ROMERO, FLOR DE MARIA',
               'email' => 'fpereyra@ucss.edu.pe',
               'password' => bcrypt('08661070'),
          ]);
          User::create([
               'name' => 'PEREZ AGUILAR, MIRELLA HAYDEE',
               'email' => 'mpereza@ucss.edu.pe',
               'password' => bcrypt('43137902'),
          ]);
          User::create([
               'name' => 'PEREZ ALDAVE, ANTONIO MARTIN',
               'email' => 'apereza@ucss.edu.pe',
               'password' => bcrypt('09641263'),
          ]);
          User::create([
               'name' => 'PEREZ CHUMBE, MARLENE HAYDEE',
               'email' => 'mhperez@ucss.edu.pe',
               'password' => bcrypt('09699751'),
          ]);
          User::create([
               'name' => 'PEREZ ESCAJADILLO, RUBY SUSSY',
               'email' => 'rperez@ucss.edu.pe',
               'password' => bcrypt('07637419'),
          ]);
          User::create([
               'name' => 'PEREZ ESTRELLA, EPIFANIA EULOGIA',
               'email' => 'eperez@ucss.edu.pe',
               'password' => bcrypt('09843721'),
          ]);
          User::create([
               'name' => 'PEREZ ESTRELLA, MAURO',
               'email' => 'mpereze@ucss.edu.pe',
               'password' => bcrypt('06083368'),
          ]);
          User::create([
               'name' => 'PEREZ FERNANDEZ, JOSE HIGINIO',
               'email' => 'jperezf@ucss.edu.pe',
               'password' => bcrypt('08805048'),
          ]);
          User::create([
               'name' => 'PEREZ MALDONADO, JUAN CARLOS',
               'email' => 'jperezm@ucss.edu.pe',
               'password' => bcrypt('40649941'),
          ]);
          User::create([
               'name' => 'PEREZ MORI, ANDERSON LEONID',
               'email' => 'aperezm@ucss.edu.pe',
               'password' => bcrypt('42996152'),
          ]);
          User::create([
               'name' => 'PEREZ PEREZ, ITALA',
               'email' => 'iperez@ucss.edu.pe',
               'password' => bcrypt('40292729'),
          ]);
          User::create([
               'name' => 'PEREZ RODRIGUEZ, RUTH EVELY',
               'email' => 'reperez@ucss.edu.pe',
               'password' => bcrypt('25777787'),
          ]);
          User::create([
               'name' => 'PEREZ TAPIA, GUILIANA TOMASA',
               'email' => 'gperez@ucss.edu.pe',
               'password' => bcrypt('08146846'),
          ]);
          User::create([
               'name' => 'PERICHE CHAMBA, MANFREDO RICARDO',
               'email' => 'mperiche@ucss.edu.pe',
               'password' => bcrypt('45057581'),
          ]);
          User::create([
               'name' => 'PERLECHE PERLECHE, CANDELARIO',
               'email' => 'cperleche@ucss.edu.pe',
               'password' => bcrypt('16795715'),
          ]);
          User::create([
               'name' => 'PEZO SEIJAS, JOSE AUGUSTO',
               'email' => 'jpezo@ucss.edu.pe',
               'password' => bcrypt('40148243'),
          ]);
          User::create([
               'name' => 'PICASSO MUÑOZ, JULIO',
               'email' => 'jpicasso@ucss.edu.pe',
               'password' => bcrypt('07904440'),
          ]);
          User::create([
               'name' => 'PICOY CHAMORRO, ROSA',
               'email' => 'rpicoy@ucss.edu.pe',
               'password' => bcrypt('07176888'),
          ]);
          User::create([
               'name' => 'PIEDRA TINEO, JOSE LUIS',
               'email' => 'jpiedra@ucss.edu.pe',
               'password' => bcrypt('45376157'),
          ]);
          User::create([
               'name' => 'PINAZO HERENCIA, RENE ALFREDO',
               'email' => 'rpinazo@ucss.edu.pe',
               'password' => bcrypt('01323959'),
          ]);
          User::create([
               'name' => 'PINEDA LEON, ROBERTO',
               'email' => 'rpineda@ucss.edu.pe',
               'password' => bcrypt('07119662'),
          ]);
          User::create([
               'name' => 'PINEDO BRAVO, JHOANNA DEL PILAR',
               'email' => 'jpinedo@ucss.edu.pe',
               'password' => bcrypt('43810217'),
          ]);
          User::create([
               'name' => 'PINEDO CANTA, JUAN JOSE',
               'email' => 'jpinedoc@ucss.edu.pe',
               'password' => bcrypt('01152072'),
          ]);
          User::create([
               'name' => 'PINEDO CHAVEZ, TONY',
               'email' => 'tpinedo@ucss.edu.pe',
               'password' => bcrypt('44483588'),
          ]);
          User::create([
               'name' => 'PINEDO FERNANDEZ, MARINA',
               'email' => 'mpinedo@ucss.edu.pe',
               'password' => bcrypt('21564297'),
          ]);
          User::create([
               'name' => 'PINTO ESPINOZA, PATRICIA TERESA',
               'email' => 'ppinto@ucss.edu.pe',
               'password' => bcrypt('06879217'),
          ]);
          User::create([
               'name' => 'PINTO JIMENEZ, IRIS KATHERINE',
               'email' => 'ipinto@ucss.edu.pe',
               'password' => bcrypt('25760216'),
          ]);
          User::create([
               'name' => 'PINTO TORPOCO, ALBERTO DONALD',
               'email' => 'apinto@ucss.edu.pe',
               'password' => bcrypt('07671136'),
          ]);
          User::create([
               'name' => 'PISCOYA PISCOYA, LETICIA',
               'email' => 'lpiscoya@ucss.edu.pe',
               'password' => bcrypt('07557339'),
          ]);
          User::create([
               'name' => 'PIZARDI DIAZ, PABLO ROLANDO',
               'email' => 'ppizardi@ucss.edu.pe',
               'password' => bcrypt('06635132'),
          ]);
          User::create([
               'name' => 'PIZARRO NEYRA, JESUS MARIO',
               'email' => 'jpizarro@ucss.edu.pe',
               'password' => bcrypt('00482428'),
          ]);
          User::create([
               'name' => 'PIZARRO PUENTE, ARTURO LEONEL',
               'email' => 'apizarro@ucss.edu.pe',
               'password' => bcrypt('21086869'),
          ]);
          User::create([
               'name' => 'PIZARRO RODAS, WILDER',
               'email' => 'wpizarro@ucss.edu.pe',
               'password' => bcrypt('33814433'),
          ]);
          User::create([
               'name' => 'POICON CORNEJO, HANAI MILUSKA',
               'email' => 'hpoicon@ucss.edu.pe',
               'password' => bcrypt('43369548'),
          ]);
          User::create([
               'name' => 'POLO NUÑEZ, CARLA MARISELLA',
               'email' => 'cmpolo@ucss.edu.pe',
               'password' => bcrypt('40005497'),
          ]);
          User::create([
               'name' => 'POLO PUELLES, JOSE MARTIN',
               'email' => 'jpolo@ucss.edu.pe',
               'password' => bcrypt('09435661'),
          ]);
          User::create([
               'name' => 'POMA RAMIREZ, JUAN DOMINGO',
               'email' => 'jpoma@ucss.edu.pe',
               'password' => bcrypt('21132877'),
          ]);
          User::create([
               'name' => 'POMA ROZAS, JOSE ARTURO',
               'email' => 'jpomar@ucss.edu.pe',
               'password' => bcrypt('42257916'),
          ]);
          User::create([
               'name' => 'POMPA CUYAN, JOSE WILLIAN',
               'email' => 'jpompa@ucss.edu.pe',
               'password' => bcrypt('44319007'),
          ]);
          User::create([
               'name' => 'PON QUISPE, JULIO CESAR',
               'email' => 'jpon@ucss.edu.pe',
               'password' => bcrypt('09768814'),
          ]);
          User::create([
               'name' => 'PONCE ROSAS, JOSEPH JESUS',
               'email' => 'jjponce@ucss.edu.pe',
               'password' => bcrypt('40383050'),
          ]);
          User::create([
               'name' => 'PONCE VEGA, LUIS ALBERTO',
               'email' => 'lponce@ucss.edu.pe',
               'password' => bcrypt('08268827'),
          ]);
          User::create([
               'name' => 'POQUIOMA RODRIGUEZ, ANGEL',
               'email' => 'apoquioma@ucss.edu.pe',
               'password' => bcrypt('05295151'),
          ]);
          User::create([
               'name' => 'PORRAS CARDENAS, OSCAR',
               'email' => 'oporras@ucss.edu.pe',
               'password' => bcrypt('84385277'),
          ]);
          User::create([
               'name' => 'PORTILLA DURAND, LUISA PRISCILIANA',
               'email' => 'lportilla@ucss.edu.pe',
               'password' => bcrypt('06869501'),
          ]);
          User::create([
               'name' => 'PORTOCARRERO CHAVEZ, VICTOR  FELIX',
               'email' => 'vportocarrero@ucss.edu.pe',
               'password' => bcrypt('07265119'),
          ]);
          User::create([
               'name' => 'PORTOCARRERO GARCIA, JHONNY EULER',
               'email' => 'jportocarrero@ucss.edu.pe',
               'password' => bcrypt('40033687'),
          ]);
          User::create([
               'name' => 'PORTUGAL-ALI ALI, MANUEL ANGEL',
               'email' => 'mportugal@ucss.edu.pe',
               'password' => bcrypt('09832241'),
          ]);
          User::create([
               'name' => 'POZO CCASANI, ZOSIMO REGULO',
               'email' => 'zpozo@ucss.edu.pe',
               'password' => bcrypt('25478348'),
          ]);
          User::create([
               'name' => 'PRADO ARTEAGA, AMALIA',
               'email' => 'aprado@ucss.edu.pe',
               'password' => bcrypt('45801089'),
          ]);
          User::create([
               'name' => 'PRIALE ARIAS, MISAEL JOSE',
               'email' => 'mpriale@ucss.edu.pe',
               'password' => bcrypt('70221124'),
          ]);
          User::create([
               'name' => 'PRIVAT MARAVI, LUZ MERCEDES',
               'email' => 'lprivat@ucss.edu.pe',
               'password' => bcrypt('08460860'),
          ]);
          User::create([
               'name' => 'PRUDENCIO GONZALES, EGO LUIS',
               'email' => 'eprudencio@ucss.edu.pe',
               'password' => bcrypt('25623741'),
          ]);
          User::create([
               'name' => 'PUCUHUARANGA ESPINOZA, LUIS MIGUEL',
               'email' => 'lpucuhuaranga@ucss.edu.pe',
               'password' => bcrypt('41872564'),
          ]);
          User::create([
               'name' => 'PUELLES ARIAS, JOHN',
               'email' => 'jpuelles@ucss.edu.pe',
               'password' => bcrypt('47022384'),
          ]);
          User::create([
               'name' => 'PUELLES CHUQUIZUTA, LUSGARDO WIAN',
               'email' => 'lpuelles@ucss.edu.pe',
               'password' => bcrypt('43884382'),
          ]);
          User::create([
               'name' => 'PUENTE BELLO, CARLOS WILBER',
               'email' => 'cpuente@ucss.edu.pe',
               'password' => bcrypt('42079485'),
          ]);
          User::create([
               'name' => 'PUENTE YAURI, WALTER FELIX',
               'email' => 'wpuente@ucss.edu.pe',
               'password' => bcrypt('20894256'),
          ]);
          User::create([
               'name' => 'PUERTAS PORRAS, MARIA ELIZABETH',
               'email' => 'mpuertas@ucss.edu.pe',
               'password' => bcrypt('09451560'),
          ]);
          User::create([
               'name' => 'PUICON MONTERO, CÉSAR',
               'email' => 'cpuicon@ucss.edu.pe',
               'password' => bcrypt('06205905'),
          ]);
          User::create([
               'name' => 'PULACHE PAEZ, MARIBEL ESTRELLA',
               'email' => 'mpulache@ucss.edu.pe',
               'password' => bcrypt('41303210'),
          ]);
          User::create([
               'name' => 'PULIDO POMA, OSCAR CARLOS',
               'email' => 'opulido@ucss.edu.pe',
               'password' => bcrypt('48079169'),
          ]);
          User::create([
               'name' => 'PURCA SUCASACA, RONALD JOSEPH',
               'email' => 'rpurca@ucss.edu.pe',
               'password' => bcrypt('44232067'),
          ]);
          User::create([
               'name' => 'PURCARO DALY, ARTHUR PATRICK',
               'email' => 'apurcaro@ucss.edu.pe',
               'password' => bcrypt('000176781'),
          ]);
          User::create([
               'name' => 'QUEREVALU SUAREZ, GRIMALDO',
               'email' => 'gquerevalu@ucss.edu.pe',
               'password' => bcrypt('06683186'),
          ]);
          User::create([
               'name' => 'QUESQUEN ALARCON, ERICK FELIX',
               'email' => 'equesquen@ucss.edu.pe',
               'password' => bcrypt('09973630'),
          ]);
          User::create([
               'name' => 'QUESQUEN CARRILLO, VICTOR EDGARDO',
               'email' => 'vquesquen@ucss.edu.pe',
               'password' => bcrypt('42374030'),
          ]);
          User::create([
               'name' => 'QUEVEDO DIOSES, VICTOR ENRIQUE',
               'email' => 'vquevedo@ucss.edu.pe',
               'password' => bcrypt('08070278'),
          ]);
          User::create([
               'name' => 'QUEVEDO GARCIA, WALTER ANIBAL',
               'email' => 'wquevedo@ucss.edu.pe',
               'password' => bcrypt('40339742'),
          ]);
          User::create([
               'name' => 'QUEZADA MURGA, DANIEL',
               'email' => 'dquezada@ucss.edu.pe',
               'password' => bcrypt('10342134'),
          ]);
          User::create([
               'name' => 'QUIJANO URBANO, PEDRO EDGAR',
               'email' => 'pquijano@ucss.edu.pe',
               'password' => bcrypt('06839480'),
          ]);
          User::create([
               'name' => 'QUINTANA FLORES, FREDY JEREMY',
               'email' => 'fquintana@ucss.edu.pe',
               'password' => bcrypt('40668001'),
          ]);
          User::create([
               'name' => 'QUINTANA INGA, JUAN FRANCISCO',
               'email' => 'jquintana@ucss.edu.pe',
               'password' => bcrypt('32544166'),
          ]);
          User::create([
               'name' => 'QUINTEROS CAMACHO, NORMA LUZ',
               'email' => 'nquinteros@ucss.edu.pe',
               'password' => bcrypt('06650975'),
          ]);
          User::create([
               'name' => 'QUINTO NEGLIA, ISAYO',
               'email' => 'iquinto@ucss.edu.pe',
               'password' => bcrypt('02894816'),
          ]);
          User::create([
               'name' => 'QUIÑONES CORDOVA, BIDELMINA MARUJA',
               'email' => 'bquinones@ucss.edu.pe',
               'password' => bcrypt('33240483'),
          ]);
          User::create([
               'name' => 'QUIÑONES ROJAS, KARIM SARITA',
               'email' => 'kquinones@ucss.edu.pe',
               'password' => bcrypt('41841978'),
          ]);
          User::create([
               'name' => 'QUIÑONEZ REYES, CHRISTIAN',
               'email' => 'cquinonez@ucss.edu.pe',
               'password' => bcrypt('72319421'),
          ]);
          User::create([
               'name' => 'QUIROZ AVILES, LUIS NAPOLEON',
               'email' => 'lquiroz@ucss.edu.pe',
               'password' => bcrypt('08703120'),
          ]);
          User::create([
               'name' => 'QUIROZ MARIN, OSWALDO RODOLFO',
               'email' => 'oquiroz@ucss.edu.pe',
               'password' => bcrypt('20066016'),
          ]);
          User::create([
               'name' => 'QUIROZ VASQUEZ, JORGE GUILLERMO',
               'email' => 'jquirozv@ucss.edu.pe',
               'password' => bcrypt('02816790'),
          ]);
          User::create([
               'name' => 'QUIROZ VELA, JUAN ENRIQUE',
               'email' => 'jquiroz@ucss.edu.pe',
               'password' => bcrypt('42087543'),
          ]);
          User::create([
               'name' => 'QUIROZ ZULUETA, ELENA RUT',
               'email' => 'equiroz@ucss.edu.pe',
               'password' => bcrypt('16758487'),
          ]);
          User::create([
               'name' => 'QUISPE ARELLANO, JHONNATAN HILARIO',
               'email' => 'jquispea@ucss.edu.pe',
               'password' => bcrypt('42030083'),
          ]);
          User::create([
               'name' => 'QUISPE CISNEROS, STALIN ELIOT',
               'email' => 'squispe@ucss.edu.pe',
               'password' => bcrypt('08674786'),
          ]);
          User::create([
               'name' => 'QUISPE CORONEL, JANET',
               'email' => 'jquispe@ucss.edu.pe',
               'password' => bcrypt('43683408'),
          ]);
          User::create([
               'name' => 'QUISPE SAJI, FLOR ROXANA',
               'email' => 'fquispe@ucss.edu.pe',
               'password' => bcrypt('29678059'),
          ]);
          User::create([
               'name' => 'QUITO MEZA, BEYALETY MINERVA',
               'email' => 'bquito@ucss.edu.pe',
               'password' => bcrypt('46691903'),
          ]);
          User::create([
               'name' => 'QUITO VERASTEGUI, MARIO CESAR MARTIN',
               'email' => 'mquito@ucss.edu.pe',
               'password' => bcrypt('07702366'),
          ]);
          User::create([
               'name' => 'RAMIREZ ACOSTA, MARIA GUISELA',
               'email' => 'mramirez@ucss.edu.pe',
               'password' => bcrypt('19848950'),
          ]);
          User::create([
               'name' => 'RAMIREZ ARELLANO, EDGARD JULIAN',
               'email' => 'eramireza@ucss.edu.pe',
               'password' => bcrypt('41462117'),
          ]);
          User::create([
               'name' => 'RAMIREZ ARELLANO, MIGUEL ANGEL',
               'email' => 'maramirez@ucss.edu.pe',
               'password' => bcrypt('10183687'),
          ]);
          User::create([
               'name' => 'RAMIREZ BEZADA, JESUS FERNANDO',
               'email' => 'jramirezb@ucss.edu.pe',
               'password' => bcrypt('08674403'),
          ]);
          User::create([
               'name' => 'RAMIREZ CALDAS, NORMA ETELVINA',
               'email' => 'eramirez@ucss.edu.pe',
               'password' => bcrypt('08153735'),
          ]);
          User::create([
               'name' => 'RAMIREZ CASTILLO, MARIA SUSANA',
               'email' => 'mramirezc@ucss.edu.pe',
               'password' => bcrypt('09477248'),
          ]);
          User::create([
               'name' => 'RAMIREZ DIAZ, CARLOS ALBERTO',
               'email' => 'cramirez@ucss.edu.pe',
               'password' => bcrypt('41027563'),
          ]);
          User::create([
               'name' => 'RAMIREZ LAMAR, WILMER ULISES',
               'email' => 'wramirez@ucss.edu.pe',
               'password' => bcrypt('42505841'),
          ]);
          User::create([
               'name' => 'RAMIREZ RIOS, YURI HARRY',
               'email' => 'yramirez@ucss.edu.pe',
               'password' => bcrypt('42074924'),
          ]);
          User::create([
               'name' => 'RAMIREZ VILLAJUAN, NESTOR ALFONSO',
               'email' => 'nramirez@ucss.edu.pe',
               'password' => bcrypt('09073090'),
          ]);
          User::create([
               'name' => 'RAMON MORALES, JUAN LEONIDAS',
               'email' => 'jramon@ucss.edu.pe',
               'password' => bcrypt('40713086'),
          ]);
          User::create([
               'name' => 'RAMOS ALONZO, ROBERT BARTOLOME',
               'email' => 'rramosa@ucss.edu.pe',
               'password' => bcrypt('40905952'),
          ]);
          User::create([
               'name' => 'RAMOS CHAVARRI, MAXIMO DAVID',
               'email' => 'mramosc@ucss.edu.pe',
               'password' => bcrypt('07699451'),
          ]);
          User::create([
               'name' => 'RAMOS DELGADO, CLAUDIA DANIELA',
               'email' => 'cramos@ucss.edu.pe',
               'password' => bcrypt('43118973'),
          ]);
          User::create([
               'name' => 'RAMOS LALUPU, YSABEL',
               'email' => 'yramos@ucss.edu.pe',
               'password' => bcrypt('07686388'),
          ]);
          User::create([
               'name' => 'RAMOS MENDOZA, LUIS ALVARO',
               'email' => 'lramos@ucss.edu.pe',
               'password' => bcrypt('08663343'),
          ]);
          User::create([
               'name' => 'RAMOS NIÑO NEIRA, ANA MARIA',
               'email' => 'aramos@ucss.edu.pe',
               'password' => bcrypt('40053375'),
          ]);
          User::create([
               'name' => 'RAMOS PEREZ, ERICK WILLIAMS',
               'email' => 'eramos@ucss.edu.pe',
               'password' => bcrypt('44380747'),
          ]);
          User::create([
               'name' => 'RAMOS ROMERO, MIGUEL FERNANDO',
               'email' => 'mframos@ucss.edu.pe',
               'password' => bcrypt('43437043'),
          ]);
          User::create([
               'name' => 'RAMOS SILVA, JORGE ARTURO',
               'email' => 'jramos@ucss.edu.pe',
               'password' => bcrypt('10613293'),
          ]);
          User::create([
               'name' => 'RAMOS TORREJON, REYNA TEODOSIA',
               'email' => 'tramos@ucss.edu.pe',
               'password' => bcrypt('09739932'),
          ]);
          User::create([
               'name' => 'RAMOS VASQUEZ, VICTOR',
               'email' => 'vramos@ucss.edu.pe',
               'password' => bcrypt('27291794'),
          ]);
          User::create([
               'name' => 'RANGEL VEGA, ANTIA',
               'email' => 'arangel@ucss.edu.pe',
               'password' => bcrypt('02820642'),
          ]);
          User::create([
               'name' => 'REATEGUI AREVALO, DANTE LUIS',
               'email' => 'dreategui@ucss.edu.pe',
               'password' => bcrypt('43277801'),
          ]);
          User::create([
               'name' => 'REMICIO CRUZ, CESAR',
               'email' => 'cremicio@ucss.edu.pe',
               'password' => bcrypt('10742495'),
          ]);
          User::create([
               'name' => 'REMUZGO BERROCAL, EVELIN MARIA',
               'email' => 'eremuzgo@ucss.edu.pe',
               'password' => bcrypt('41045355'),
          ]);
          User::create([
               'name' => 'RENGIFO DE LA CRUZ, ELIAS',
               'email' => 'erengifo@ucss.edu.pe',
               'password' => bcrypt('08690918'),
          ]);
          User::create([
               'name' => 'RENGIFO GONZALES, LENARD IBSEN',
               'email' => 'lrengifo@ucss.edu.pe',
               'password' => bcrypt('44403448'),
          ]);
          User::create([
               'name' => 'RENGIFO MONTES, MARIZA DEL CARMEN',
               'email' => 'mrengifo@ucss.edu.pe',
               'password' => bcrypt('10512982'),
          ]);
          User::create([
               'name' => 'RENTERIA MENDOZA, JOSE ANTONIO',
               'email' => 'jrenteria@ucss.edu.pe',
               'password' => bcrypt('16534297'),
          ]);
          User::create([
               'name' => 'REQUEJO PACHECO, GLADYS',
               'email' => 'grequejo@ucss.edu.pe',
               'password' => bcrypt('07221940'),
          ]);
          User::create([
               'name' => 'REQUENA TAYPE, ELIANA',
               'email' => 'erequena@ucss.edu.pe',
               'password' => bcrypt('40826450'),
          ]);
          User::create([
               'name' => 'RESPICIO LOPEZ, LUIS ALBERTO',
               'email' => 'lrespicio@ucss.edu.pe',
               'password' => bcrypt('15678673'),
          ]);
          User::create([
               'name' => 'RETAMOZO ZEGARRA, MARIA MARITZA',
               'email' => 'mretamozo@ucss.edu.pe',
               'password' => bcrypt('07010275'),
          ]);
          User::create([
               'name' => 'REYES DIAZ, LENIN HENRY',
               'email' => 'lreyes@ucss.edu.pe',
               'password' => bcrypt('42426817'),
          ]);
          User::create([
               'name' => 'REYES PADILLA, VICTOR ANTOLIN',
               'email' => 'vreyes@ucss.edu.pe',
               'password' => bcrypt('08611199'),
          ]);
          User::create([
               'name' => 'REYES SILVA, CESAR RAUL',
               'email' => 'creyes@ucss.edu.pe',
               'password' => bcrypt('43317744'),
          ]);
          User::create([
               'name' => 'REYES VASQUEZ, YRMA KUSSY',
               'email' => 'yreyes@ucss.edu.pe',
               'password' => bcrypt('09614409'),
          ]);
          User::create([
               'name' => 'REYNA GUEVARA, FRANCK KARLOS',
               'email' => 'freyna@ucss.edu.pe',
               'password' => bcrypt('18178726'),
          ]);
          User::create([
               'name' => 'RIMACHI GALVEZ, JANETT KARIN',
               'email' => 'jrimachi@ucss.edu.pe',
               'password' => bcrypt('09972367'),
          ]);
          User::create([
               'name' => 'RIMARI ARIAS, MIGUEL ANGEL',
               'email' => 'mrimari@ucss.edu.pe',
               'password' => bcrypt('06946354'),
          ]);
          User::create([
               'name' => 'RIMARI ARIAS, WILFREDO TOMAS',
               'email' => 'wrimari@ucss.edu.pe',
               'password' => bcrypt('21254399'),
          ]);
          User::create([
               'name' => 'RIOJA COBOS, CARMEN LILIAN',
               'email' => 'crioja@ucss.edu.pe',
               'password' => bcrypt('10273148'),
          ]);
          User::create([
               'name' => 'RIOJA TARICUARIMA, JUAN CARLOS',
               'email' => 'jrioja@ucss.edu.pe',
               'password' => bcrypt('00165738'),
          ]);
          User::create([
               'name' => 'RIOS CAHUAZA, OLIVER',
               'email' => 'orios@ucss.edu.pe',
               'password' => bcrypt('46436464'),
          ]);
          User::create([
               'name' => 'RIOS CUELLAR, HUMBERTO MOISES',
               'email' => 'hmrios@ucss.edu.pe',
               'password' => bcrypt('08528049'),
          ]);
          User::create([
               'name' => 'RIOS GARCIA, RODDY',
               'email' => 'rriosg@ucss.edu.pe',
               'password' => bcrypt('40360256'),
          ]);
          User::create([
               'name' => 'RIOS HUAMANI, CYNTHIA EDITH',
               'email' => 'criosh@ucss.edu.pe',
               'password' => bcrypt('40230793'),
          ]);
          User::create([
               'name' => 'RIOS LAVI, GRETI',
               'email' => 'grios@ucss.edu.pe',
               'password' => bcrypt('41176894'),
          ]);
          User::create([
               'name' => 'RIOS MANRIQUE, ELVIS ROLDAN',
               'email' => 'erios@ucss.edu.pe',
               'password' => bcrypt('09799606'),
          ]);
          User::create([
               'name' => 'RIOS PAREDES, CHRISTIAN EDWARD',
               'email' => 'crios@ucss.edu.pe',
               'password' => bcrypt('43164616'),
          ]);
          User::create([
               'name' => 'RIOS PAREDES, LUIS HUMBERTO',
               'email' => 'lrios@ucss.edu.pe',
               'password' => bcrypt('42027823'),
          ]);
          User::create([
               'name' => 'RIOS TEJADA, RAUL ERNESTO',
               'email' => 'rrios@ucss.edu.pe',
               'password' => bcrypt('09299598'),
          ]);
          User::create([
               'name' => 'RIOS VARGAS, JORGE MARCELL',
               'email' => 'jrios@ucss.edu.pe',
               'password' => bcrypt('09994223'),
          ]);
          User::create([
               'name' => 'RIVADENEIRA CHUMPITAZI, PERCY ANTONIO',
               'email' => 'privadeneira@ucss.edu.pe',
               'password' => bcrypt('09067186'),
          ]);
          User::create([
               'name' => 'RIVADENEIRA, VIRGINIA',
               'email' => 'vrivadeneira@ucss.edu.pe',
               'password' => bcrypt('48367422'),
          ]);
          User::create([
               'name' => 'RIVAS ARICA, IVAN JOEL',
               'email' => 'irivas@ucss.edu.pe',
               'password' => bcrypt('16790647'),
          ]);
          User::create([
               'name' => 'RIVAS MORI, JUNNIOR ARTURO',
               'email' => 'jrivasm@ucss.edu.pe',
               'password' => bcrypt('71131795'),
          ]);
          User::create([
               'name' => 'RIVAS VALLE, URBANO RAUL',
               'email' => 'urivas@ucss.edu.pe',
               'password' => bcrypt('03376056'),
          ]);
          User::create([
               'name' => 'RIVERA ALBINAGORTA, FULTON PAUL',
               'email' => 'frivera@ucss.edu.pe',
               'password' => bcrypt('43170067'),
          ]);
          User::create([
               'name' => 'RIVERA AÑAGUARI, GLORIA AIDA',
               'email' => 'griveraa@ucss.edu.pe',
               'password' => bcrypt('44610856'),
          ]);
          User::create([
               'name' => 'RIVERA CALLE, HUMBERTO',
               'email' => 'hrivera@ucss.edu.pe',
               'password' => bcrypt('17896043'),
          ]);
          User::create([
               'name' => 'RIVERA CALLE, PEDRO MANUEL',
               'email' => 'privera@ucss.edu.pe',
               'password' => bcrypt('41892402'),
          ]);
          User::create([
               'name' => 'RIVERA CARREÑO, KARL DENNIS',
               'email' => 'krivera@ucss.edu.pe',
               'password' => bcrypt('41040138'),
          ]);
          User::create([
               'name' => 'RIVERA CAVERO, SHEYLA MILAGROS',
               'email' => 'srivera@ucss.edu.pe',
               'password' => bcrypt('42633825'),
          ]);
          User::create([
               'name' => 'RIVERA CCOROPUNA, GISELLA ALICIA',
               'email' => 'grivera@ucss.edu.pe',
               'password' => bcrypt('40946953'),
          ]);
          User::create([
               'name' => 'RIVERA DAZA, ENVER ALEMBERT',
               'email' => 'erivera@ucss.edu.pe',
               'password' => bcrypt('40708171'),
          ]);
          User::create([
               'name' => 'RIVERA ROMERO, DAVID SOSIMO',
               'email' => 'drivera@ucss.edu.pe',
               'password' => bcrypt('06613176'),
          ]);
          User::create([
               'name' => 'RIVERA TABOADA, JUAN PABLO',
               'email' => 'jrivera@ucss.edu.pe',
               'password' => bcrypt('40404127'),
          ]);
          User::create([
               'name' => 'ROBLES CUEVA, HENRY',
               'email' => 'hrobles@ucss.edu.pe',
               'password' => bcrypt('43814807'),
          ]);
          User::create([
               'name' => 'RODAS MARTINEZ, RICARDO SALOMON',
               'email' => 'rrodas@ucss.edu.pe',
               'password' => bcrypt('41729686'),
          ]);
          User::create([
               'name' => 'RODRIGO HUANUCO, EDUARDO CELSO',
               'email' => 'erodrigo@ucss.edu.pe',
               'password' => bcrypt('40610782'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ ALVARADO, CESAR ANTONIO',
               'email' => 'crodriguez@ucss.edu.pe',
               'password' => bcrypt('08660706'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ ALVITES, ALINA PATRICIA',
               'email' => 'aprodriguez@ucss.edu.pe',
               'password' => bcrypt('10236949'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ CABEZUDO, NELLY GABRIELA',
               'email' => 'nrodriguez@ucss.edu.pe',
               'password' => bcrypt('09390985'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ CASTILLO, EDITH',
               'email' => 'erodriguez@ucss.edu.pe',
               'password' => bcrypt('10551660'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ CHAVEZ, REYLER YULFO',
               'email' => 'rrodriguezc@ucss.edu.pe',
               'password' => bcrypt('40851023'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ ENCALADA, JOSE ALEJANDRO',
               'email' => 'jrodrigueze@ucss.edu.pe',
               'password' => bcrypt('06801095'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ ESPINOZA, RONALD FERNANDO',
               'email' => 'rrodriguez@ucss.edu.pe',
               'password' => bcrypt('18222946'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ HERRERA, OSWALDO JEHOSHUA',
               'email' => 'jrodriguezh@ucss.edu.pe',
               'password' => bcrypt('41431521'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ ITURRI, ROGER RAFAEL ESTANISLAO',
               'email' => 'riturri@ucss.edu.pe',
               'password' => bcrypt('07821253'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ LLANCO, WILLIAM RENATO',
               'email' => 'wrodriguez@ucss.edu.pe',
               'password' => bcrypt('09019804'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ NUÑEZ, JOSE LUIS',
               'email' => 'jrodriguezn@ucss.edu.pe',
               'password' => bcrypt('15739966'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ PEREZ, LUIS EDUARDO',
               'email' => 'lrodriguez@ucss.edu.pe',
               'password' => bcrypt('31652355'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ QUIROZ, ROCIO GUADALUPE',
               'email' => 'rcrodriguez@ucss.edu.pe',
               'password' => bcrypt('29529438'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ RAMIREZ, PAOLA CATHERINE',
               'email' => 'prodriguez@ucss.edu.pe',
               'password' => bcrypt('41795284'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ RIOS, JANET MILAGROS',
               'email' => 'jrodriguez@ucss.edu.pe',
               'password' => bcrypt('08687395'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ RODRIGUEZ, BIANNY EUDES',
               'email' => 'brodriguez@ucss.edu.pe',
               'password' => bcrypt('17860372'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ SANDOVAL, JOSE MARTIN',
               'email' => 'jmrodriguez@ucss.edu.pe',
               'password' => bcrypt('02808952'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ TORRES, LAURA DEL MILAGRO',
               'email' => 'lrodriguezt@ucss.edu.pe',
               'password' => bcrypt('03376081'),
          ]);
          User::create([
               'name' => 'RODRIGUEZ VISALOTH, FLOR DE MARIA',
               'email' => 'frodriguez@ucss.edu.pe',
               'password' => bcrypt('07724410'),
          ]);
          User::create([
               'name' => 'ROJAS BUSTAMANTE, MARIO DENYS',
               'email' => 'mrojasb@ucss.edu.pe',
               'password' => bcrypt('46688479'),
          ]);
          User::create([
               'name' => 'ROJAS GUTIERREZ, WILLIAM JESUS',
               'email' => 'wrojas@ucss.edu.pe',
               'password' => bcrypt('40021221'),
          ]);
          User::create([
               'name' => 'ROJAS MESIA, TEODORO',
               'email' => 'trojas@ucss.edu.pe',
               'password' => bcrypt('09145285'),
          ]);
          User::create([
               'name' => 'ROJAS MORA, CARLOS DAVID',
               'email' => 'crojas@ucss.edu.pe',
               'password' => bcrypt('001852288'),
          ]);
          User::create([
               'name' => 'ROJAS SEGURA, GUSTAVO ADOLFO',
               'email' => 'grojas@ucss.edu.pe',
               'password' => bcrypt('41567183'),
          ]);
          User::create([
               'name' => 'ROJAS YGLESIAS, EDUARDO',
               'email' => 'erojasy@ucss.edu.pe',
               'password' => bcrypt('00821693'),
          ]);
          User::create([
               'name' => 'ROLLI ., FRANCESCO',
               'email' => 'frolli@ucss.edu.pe',
               'password' => bcrypt('000338357'),
          ]);
          User::create([
               'name' => 'ROMAN CAHUE, FLOR DEL ROCIO',
               'email' => 'froman@ucss.edu.pe',
               'password' => bcrypt('10263360'),
          ]);
          User::create([
               'name' => 'ROMAN RIVAS, YESSER BENJAMIN',
               'email' => 'yroman@ucss.edu.pe',
               'password' => bcrypt('41259474'),
          ]);
          User::create([
               'name' => 'ROMANI RAMIREZ, RAUL ANTONY',
               'email' => 'rromani@ucss.edu.pe',
               'password' => bcrypt('46446479'),
          ]);
          User::create([
               'name' => 'ROMERO ARRESE, HENRY JOSE',
               'email' => 'hromero@ucss.edu.pe',
               'password' => bcrypt('40544375'),
          ]);
          User::create([
               'name' => 'ROMERO CHANG, EDUARDO GUILLERMO',
               'email' => 'eromero@ucss.edu.pe',
               'password' => bcrypt('07378501'),
          ]);
          User::create([
               'name' => 'ROMERO DIAZ, ALEJANDRA  DULVINA',
               'email' => 'aromero@ucss.edu.pe',
               'password' => bcrypt('06173058'),
          ]);
          User::create([
               'name' => 'ROMERO LEYTON, CLAUDIA LISSETH',
               'email' => 'cromero@ucss.edu.pe',
               'password' => bcrypt('40949739'),
          ]);
          User::create([
               'name' => 'ROMERO OLORTEGUI, HECTOR MANUEL',
               'email' => 'hmromero@ucss.edu.pe',
               'password' => bcrypt('40945816'),
          ]);
          User::create([
               'name' => 'ROMERO RAMIREZ, ISABEL',
               'email' => 'iromero@ucss.edu.pe',
               'password' => bcrypt('15588970'),
          ]);
          User::create([
               'name' => 'ROMERO ROMERO, JORGE ANTONIO',
               'email' => 'jromero@ucss.edu.pe',
               'password' => bcrypt('40241541'),
          ]);
          User::create([
               'name' => 'ROMERO ROSAS, ISAIAS',
               'email' => 'iromeror@ucss.edu.pe',
               'password' => bcrypt('07749850'),
          ]);
          User::create([
               'name' => 'ROSALES PACHECO, ALDO HORACIO',
               'email' => 'arosales@ucss.edu.pe',
               'password' => bcrypt('07522448'),
          ]);
          User::create([
               'name' => 'ROSALES ROSALES, LUIS ANTONIO',
               'email' => 'lrosales@ucss.edu.pe',
               'password' => bcrypt('21068032'),
          ]);
          User::create([
               'name' => 'ROSALES ZAMORA, PABLO CESAR',
               'email' => 'prosales@ucss.edu.pe',
               'password' => bcrypt('45824064'),
          ]);
          User::create([
               'name' => 'ROSELL DE ALMEIDA, MARIA LOURDES',
               'email' => 'lrosell@ucss.edu.pe',
               'password' => bcrypt('41091647'),
          ]);
          User::create([
               'name' => 'ROSSATO RAVASIO, ELENA MARIA',
               'email' => 'erossato@ucss.edu.pe',
               'password' => bcrypt('122154'),
          ]);
          User::create([
               'name' => 'ROVEGNO FASCE, CLAUDIO LORENZO',
               'email' => 'crovegno@ucss.edu.pe',
               'password' => bcrypt('09861620'),
          ]);
          User::create([
               'name' => 'RUA GUTIERREZ, EDINSON',
               'email' => 'erua@ucss.edu.pe',
               'password' => bcrypt('42931091'),
          ]);
          User::create([
               'name' => 'RUBIO APONTE, JULIO CESAR',
               'email' => 'jrubio@ucss.edu.pe',
               'password' => bcrypt('25655141'),
          ]);
          User::create([
               'name' => 'RUEDA HUAMBACHANO, ROSA VICTORIA',
               'email' => 'rrueda@ucss.edu.pe',
               'password' => bcrypt('25777233'),
          ]);
          User::create([
               'name' => 'RUESTAS MAURICIO, ROSA MARIA',
               'email' => 'rruestas@ucss.edu.pe',
               'password' => bcrypt('09637385'),
          ]);
          User::create([
               'name' => 'RUIDIAS JUAREZ, MARINA',
               'email' => 'mruidias@ucss.edu.pe',
               'password' => bcrypt('03367079'),
          ]);
          User::create([
               'name' => 'RUIZ CCANCCE, JOSE VICTOR',
               'email' => 'jruizc@ucss.edu.pe',
               'password' => bcrypt('10150044'),
          ]);
          User::create([
               'name' => 'RUIZ ESPINOZA, DORIS VIOLETA',
               'email' => 'druiz@ucss.edu.pe',
               'password' => bcrypt('03376948'),
          ]);
          User::create([
               'name' => 'RUIZ ESPINOZA, MARIA ELENA',
               'email' => 'mruize@ucss.edu.pe',
               'password' => bcrypt('03357966'),
          ]);
          User::create([
               'name' => 'RUIZ GONZALEZ, CLAUDIA DEL PILAR',
               'email' => 'cruizg@ucss.edu.pe',
               'password' => bcrypt('40062218'),
          ]);
          User::create([
               'name' => 'RUIZ JANGE, BERTHA MARCELINA',
               'email' => 'bruiz@ucss.edu.pe',
               'password' => bcrypt('09729256'),
          ]);
          User::create([
               'name' => 'RUIZ JANJE, ALEJANDRO',
               'email' => 'aruiz@ucss.edu.pe',
               'password' => bcrypt('06960251'),
          ]);
          User::create([
               'name' => 'RUIZ LINARES, EBERALDO',
               'email' => 'eruizl@ucss.edu.pe',
               'password' => bcrypt('01146373'),
          ]);
          User::create([
               'name' => 'RUIZ RAFAEL, JORGE LUIS',
               'email' => 'jruizr@ucss.edu.pe',
               'password' => bcrypt('40661636'),
          ]);
          User::create([
               'name' => 'RUIZ RIOS, JAVIER',
               'email' => 'jruizri@ucss.edu.pe',
               'password' => bcrypt('42121243'),
          ]);
          User::create([
               'name' => 'RUIZ ROSALES, ERIBERTO',
               'email' => 'eruiz@ucss.edu.pe',
               'password' => bcrypt('16568565'),
          ]);
          User::create([
               'name' => 'RUIZ RUIZ, GUADALUPE',
               'email' => 'gruiz@ucss.edu.pe',
               'password' => bcrypt('25809384'),
          ]);
          User::create([
               'name' => 'RUIZ SANDOVAL, XIUXA',
               'email' => 'xruiz@ucss.edu.pe',
               'password' => bcrypt('44692647'),
          ]);
          User::create([
               'name' => 'RUIZ VALLES, RUBEN',
               'email' => 'rruiz@ucss.edu.pe',
               'password' => bcrypt('00818283'),
          ]);
          User::create([
               'name' => 'RUIZ VASQUEZ, CHRISTIAN',
               'email' => 'cruiz@ucss.edu.pe',
               'password' => bcrypt('42681809'),
          ]);
          User::create([
               'name' => 'RUIZ VASQUEZ, LUIS FELIPE',
               'email' => 'lruiz@ucss.edu.pe',
               'password' => bcrypt('00150440'),
          ]);
          User::create([
               'name' => 'RUIZ ZEVALLOS, JUAN RUBEN',
               'email' => 'jruizz@ucss.edu.pe',
               'password' => bcrypt('70442202'),
          ]);
          User::create([
               'name' => 'SAAVEDRA AYALA, JACQUELIN VERONICA',
               'email' => 'jsaavedra@ucss.edu.pe',
               'password' => bcrypt('10267206'),
          ]);
          User::create([
               'name' => 'SAAVEDRA BANCES, WALTER HUGO',
               'email' => 'wsaavedra@ucss.edu.pe',
               'password' => bcrypt('27713661'),
          ]);
          User::create([
               'name' => 'SAAVEDRA CHIU, ROXANA MARGARITA',
               'email' => 'rsaavedra@ucss.edu.pe',
               'password' => bcrypt('08363244'),
          ]);
          User::create([
               'name' => 'SAAVEDRA JIMENEZ, ROBERT ROY',
               'email' => 'rsaavedraj@ucss.edu.pe',
               'password' => bcrypt('40832175'),
          ]);
          User::create([
               'name' => 'SAAVEDRA MUÑOZ, NESTOR',
               'email' => 'nsaavedra@ucss.edu.pe',
               'password' => bcrypt('42915862'),
          ]);
          User::create([
               'name' => 'SABINO AREVALO, CARLOS HUGO',
               'email' => 'csabino@ucss.edu.pe',
               'password' => bcrypt('00117668'),
          ]);
          User::create([
               'name' => 'SALAS GUERE, RONALD FLAVIO',
               'email' => 'rsalas@ucss.edu.pe',
               'password' => bcrypt('40110819'),
          ]);
          User::create([
               'name' => 'SALAS ORDOÑO, ALBINA',
               'email' => 'asalas@ucss.edu.pe',
               'password' => bcrypt('10113543'),
          ]);
          User::create([
               'name' => 'SALAS RAMIREZ, CARLOS MANUEL',
               'email' => 'csalas@ucss.edu.pe',
               'password' => bcrypt('15609778'),
          ]);
          User::create([
               'name' => 'SALAZAR ASTETE, PAOLA EVELYN',
               'email' => 'psalazar@ucss.edu.pe',
               'password' => bcrypt('41120593'),
          ]);
          User::create([
               'name' => 'SALAZAR DIAZ, AUGUSTO ALBERTO',
               'email' => 'asalazar@ucss.edu.pe',
               'password' => bcrypt('08137612'),
          ]);
          User::create([
               'name' => 'SALAZAR FARFAN, MARIA DEL ROSARIO',
               'email' => 'msalazarf@ucss.edu.pe',
               'password' => bcrypt('10690956'),
          ]);
          User::create([
               'name' => 'SALAZAR ORSI, LUIS ENRIQUE',
               'email' => 'lsalazar@ucss.edu.pe',
               'password' => bcrypt('16161872'),
          ]);
          User::create([
               'name' => 'SALAZAR RIOS, ROBERTO',
               'email' => 'rsalazar@ucss.edu.pe',
               'password' => bcrypt('08195765'),
          ]);
          User::create([
               'name' => 'SALAZAR ROJAS, DAMIAN',
               'email' => 'dsalazar@ucss.edu.pe',
               'password' => bcrypt('06819093'),
          ]);
          User::create([
               'name' => 'SALAZAR TENORIO, JUAN FRANCISCO',
               'email' => 'jsalazar@ucss.edu.pe',
               'password' => bcrypt('09393377'),
          ]);
          User::create([
               'name' => 'SALAZAR TORRES, WILLIAM',
               'email' => 'wsalazar@ucss.edu.pe',
               'password' => bcrypt('16776482'),
          ]);
          User::create([
               'name' => 'SALAZAR VERGARAY, MARIO ALBERTO',
               'email' => 'msalazar@ucss.edu.pe',
               'password' => bcrypt('10219153'),
          ]);
          User::create([
               'name' => 'SALCEDO REYES, JOSE FRANCISCO',
               'email' => 'jsalcedo@ucss.edu.pe',
               'password' => bcrypt('42391396'),
          ]);
          User::create([
               'name' => 'SALDAÑA FUSTAMANTE, ORLANDO',
               'email' => 'osaldana@ucss.edu.pe',
               'password' => bcrypt('41861212'),
          ]);
          User::create([
               'name' => 'SALINAS MIGUEL, JORGE LUIS',
               'email' => 'jsalinas@ucss.edu.pe',
               'password' => bcrypt('40800562'),
          ]);
          User::create([
               'name' => 'SAMANAMUD VALENTIN, MIGUEL ANGEL MOISES',
               'email' => 'msamanamud@ucss.edu.pe',
               'password' => bcrypt('15725118'),
          ]);
          User::create([
               'name' => 'SAMANIEGO SALCEDO, ALEJANDRO',
               'email' => 'asamaniego@ucss.edu.pe',
               'password' => bcrypt('10184045'),
          ]);
          User::create([
               'name' => 'SAMPAIO COSTA, PAULO VINICIUS',
               'email' => 'pcosta@ucss.edu.pe',
               'password' => bcrypt('000433660'),
          ]);
          User::create([
               'name' => 'SANCHEZ ACOSTA, JUAN SANTIAGO',
               'email' => 'jsancheza@ucss.edu.pe',
               'password' => bcrypt('26952199'),
          ]);
          User::create([
               'name' => 'SANCHEZ ARAUJO, JUAN BAUTISTA',
               'email' => 'bsanchez@ucss.edu.pe',
               'password' => bcrypt('08203119'),
          ]);
          User::create([
               'name' => 'SANCHEZ CHAVEZ, HENRY DENNYS',
               'email' => 'hdsanchez@ucss.edu.pe',
               'password' => bcrypt('42140373'),
          ]);
          User::create([
               'name' => 'SANCHEZ COMETIVOS, ROMER',
               'email' => 'rsanchezc@ucss.edu.pe',
               'password' => bcrypt('41816255'),
          ]);
          User::create([
               'name' => 'SANCHEZ CRISOSTOMO, NANCY',
               'email' => 'nsanchez@ucss.edu.pe',
               'password' => bcrypt('000000'),
          ]);
          User::create([
               'name' => 'SANCHEZ DIAZ, JHON',
               'email' => 'jsanchezd@ucss.edu.pe',
               'password' => bcrypt('42135945'),
          ]);
          User::create([
               'name' => 'SANCHEZ GUEVARA, VICTOR ANGEL',
               'email' => 'vsanchez@ucss.edu.pe',
               'password' => bcrypt('10426844'),
          ]);
          User::create([
               'name' => 'SANCHEZ HINOSTROZA, JOSE LUIS',
               'email' => 'jsanchezh@ucss.edu.pe',
               'password' => bcrypt('15735488'),
          ]);
          User::create([
               'name' => 'SANCHEZ MEDRANO, AGUSTIN ENRIQUE',
               'email' => 'asanchezm@ucss.edu.pe',
               'password' => bcrypt('10206100'),
          ]);
          User::create([
               'name' => 'SANCHEZ QUISPE, DIEGO',
               'email' => 'dsanchez@ucss.edu.pe',
               'password' => bcrypt('41423556'),
          ]);
          User::create([
               'name' => 'SANCHEZ SANCHEZ, CESAR ULISES',
               'email' => 'csanchez@ucss.edu.pe',
               'password' => bcrypt('41947458'),
          ]);
          User::create([
               'name' => 'SANCHEZ SEGOVIA, KARLA ROCCIO',
               'email' => 'ksanchez@ucss.edu.pe',
               'password' => bcrypt('10352458'),
          ]);
          User::create([
               'name' => 'SANCHEZ SEMINARIO, FRANK OCTAVIO',
               'email' => 'fsanchezs@ucss.edu.pe',
               'password' => bcrypt('42451835'),
          ]);
          User::create([
               'name' => 'SANCHEZ TORRES, HEIDI ISABEL',
               'email' => 'hsanchezt@ucss.edu.pe',
               'password' => bcrypt('40484791'),
          ]);
          User::create([
               'name' => 'SANCHEZ VASQUEZ, HOMERO',
               'email' => 'hsanchezv@ucss.edu.pe',
               'password' => bcrypt('42846492'),
          ]);
          User::create([
               'name' => 'SANCHEZ VASQUEZ, JAIME OMAR',
               'email' => 'josanchez@ucss.edu.pe',
               'password' => bcrypt('41680459'),
          ]);
          User::create([
               'name' => 'SANCHEZ VILCARINO, JORGE DEMETRIO',
               'email' => 'jsanchez@ucss.edu.pe',
               'password' => bcrypt('09273004'),
          ]);
          User::create([
               'name' => 'SANCHEZ YAJAHUANCA, RENE',
               'email' => 'rsanchez@ucss.edu.pe',
               'password' => bcrypt('42333507'),
          ]);
          User::create([
               'name' => 'SANDOVAL LOZANO, GIOVANI',
               'email' => 'gsandoval@ucss.edu.pe',
               'password' => bcrypt('08181918'),
          ]);
          User::create([
               'name' => 'SANDOVAL LOZANO, SERGIO ALBERTO',
               'email' => 'ssandoval@ucss.edu.pe',
               'password' => bcrypt('08180998'),
          ]);
          User::create([
               'name' => 'SANDOVAL MEDINA, VICTORIA PAULA',
               'email' => 'vsandoval@ucss.edu.pe',
               'password' => bcrypt('47365528'),
          ]);
          User::create([
               'name' => 'SANDOVAL NORABUENA, ALFREDO JULIAN',
               'email' => 'asandoval@ucss.edu.pe',
               'password' => bcrypt('41867410'),
          ]);
          User::create([
               'name' => 'SANTIBAÑEZ ROJAS, GABRIELA NOEMI',
               'email' => 'gsantibanez@ucss.edu.pe',
               'password' => bcrypt('07762717'),
          ]);
          User::create([
               'name' => 'SANTILLAN ALVA, RICHARD',
               'email' => 'rsantillan@ucss.edu.pe',
               'password' => bcrypt('01046928'),
          ]);
          User::create([
               'name' => 'SANTILLAN GARCIA, LUIS DARIO',
               'email' => 'lsantillan@ucss.edu.pe',
               'password' => bcrypt('45056117'),
          ]);
          User::create([
               'name' => 'SANTISTEBAN PORTAL, LUIS JOSE',
               'email' => 'lsantisteban@ucss.edu.pe',
               'password' => bcrypt('74276482'),
          ]);
          User::create([
               'name' => 'SANTIVAÑEZ CALDERON, CARLA MARIA',
               'email' => 'csantivanez@ucss.edu.pe',
               'password' => bcrypt('06790833'),
          ]);
          User::create([
               'name' => 'SANTOS SALAZAR, LUIS EDUARDO',
               'email' => 'lsantos@ucss.edu.pe',
               'password' => bcrypt('06282054'),
          ]);
          User::create([
               'name' => 'SANTOS TELLO, WILLIAM CESAR',
               'email' => 'wsantos@ucss.edu.pe',
               'password' => bcrypt('41150208'),
          ]);
          User::create([
               'name' => 'SARMIENTO CARRANZA, HEBERT JAVIER',
               'email' => 'hsarmiento@ucss.edu.pe',
               'password' => bcrypt('42256190'),
          ]);
          User::create([
               'name' => 'SARMIENTO OCMIN DE ALTAMIRANO, JACQUELINE',
               'email' => 'jsarmiento@ucss.edu.pe',
               'password' => bcrypt('41430472'),
          ]);
          User::create([
               'name' => 'SATAKE ARROYO, JORGE ALBERTO',
               'email' => 'jsatake@ucss.edu.pe',
               'password' => bcrypt('10762624'),
          ]);
          User::create([
               'name' => 'SCHENONE BROMLEY, JOSE LUIS',
               'email' => 'jschenone@ucss.edu.pe',
               'password' => bcrypt('43720815'),
          ]);
          User::create([
               'name' => 'SEBASTIAN GONZALES, CESAR ABEL',
               'email' => 'csebastian@ucss.edu.pe',
               'password' => bcrypt('07633735'),
          ]);
          User::create([
               'name' => 'SEBASTIANI CARRANZA, GLORIA CLEMENTINA',
               'email' => 'gsebastiani@ucss.edu.pe',
               'password' => bcrypt('06017324'),
          ]);
          User::create([
               'name' => 'SEGOTA SEGOTA, BORIS',
               'email' => 'bsegota@ucss.edu.pe',
               'password' => bcrypt('46244715'),
          ]);
          User::create([
               'name' => 'SEGOVIA MURILLO, SOCRATES',
               'email' => 'ssegovia@ucss.edu.pe',
               'password' => bcrypt('29594908'),
          ]);
          User::create([
               'name' => 'SEGURA PEREZ, PERCY ENRIQUE',
               'email' => 'psegura@ucss.edu.pe',
               'password' => bcrypt('00087355'),
          ]);
          User::create([
               'name' => 'SEMINARIO LABRIN, MARIELA',
               'email' => 'mseminario@ucss.edu.pe',
               'password' => bcrypt('09314939'),
          ]);
          User::create([
               'name' => 'SEMINARIO OLORTIGUE, PABLO HUGO',
               'email' => 'pseminario@ucss.edu.pe',
               'password' => bcrypt('08031444'),
          ]);
          User::create([
               'name' => 'SEMINARIO OLORTIGUE, RAUL MARTIN',
               'email' => 'rseminario@ucss.edu.pe',
               'password' => bcrypt('08017508'),
          ]);
          User::create([
               'name' => 'SEQUEIROS PEÑA, ELLIANA',
               'email' => 'esequeiros@ucss.edu.pe',
               'password' => bcrypt('41413704'),
          ]);
          User::create([
               'name' => 'SERNA CHUMBES, MANUEL FERNANDO',
               'email' => 'mserna@ucss.edu.pe',
               'password' => bcrypt('40368074'),
          ]);
          User::create([
               'name' => 'SERNAQUE MENDOZA, WALTER CESAR',
               'email' => 'wsernaque@ucss.edu.pe',
               'password' => bcrypt('09428754'),
          ]);
          User::create([
               'name' => 'SERRANO ROJAS, MARLENE REYNA',
               'email' => 'mserrano@ucss.edu.pe',
               'password' => bcrypt('40381550'),
          ]);
          User::create([
               'name' => 'SFREGOLA, CARMELA',
               'email' => 'csfregola@ucss.edu.pe',
               'password' => bcrypt('001242418'),
          ]);
          User::create([
               'name' => 'SICCHA VALDERRAMA, TERESA MILAGROS',
               'email' => 'tsiccha@ucss.edu.pe',
               'password' => bcrypt('42258333'),
          ]);
          User::create([
               'name' => 'SIDIA CARRASCO, MIGUEL JOSE',
               'email' => 'msidia@ucss.edu.pe',
               'password' => bcrypt('07936807'),
          ]);
          User::create([
               'name' => 'SIFUENTES LEVANO, TEOFILO',
               'email' => 'tsifuentes@ucss.edu.pe',
               'password' => bcrypt('25538420'),
          ]);
          User::create([
               'name' => 'SILVA AGAPITO, ALCIDES',
               'email' => 'asilvaa@ucss.edu.pe',
               'password' => bcrypt('40644501'),
          ]);
          User::create([
               'name' => 'SILVA PARIAMACHI, LUCIA CAROLINA',
               'email' => 'lsilva@ucss.edu.pe',
               'password' => bcrypt('42868980'),
          ]);
          User::create([
               'name' => 'SIMONE, SAVERIO',
               'email' => 'ssimone@ucss.edu.pe',
               'password' => bcrypt('000947957'),
          ]);
          User::create([
               'name' => 'SOLANO SANTAMARIA, JOSE FRANCISCO',
               'email' => 'jsolano@ucss.edu.pe',
               'password' => bcrypt('44853901'),
          ]);
          User::create([
               'name' => 'SOLARI DE LA FUENTE, LUIS MARIA SANTIAGO EDUAR',
               'email' => 'lsolari@ucss.edu.pe',
               'password' => bcrypt('08229291'),
          ]);
          User::create([
               'name' => 'SOLIS CASTRO, JOSE ANIBAL',
               'email' => 'jsolis@ucss.edu.pe',
               'password' => bcrypt('40522072'),
          ]);
          User::create([
               'name' => 'SOLIS CESPEDES, PEDRO ANIBAL',
               'email' => 'psolisc@ucss.edu.pe',
               'password' => bcrypt('26601922'),
          ]);
          User::create([
               'name' => 'SOLIS CRUZ DE LOPEZ, CARMEN MARINA',
               'email' => 'csolis@ucss.edu.pe',
               'password' => bcrypt('01047316'),
          ]);
          User::create([
               'name' => 'SOLIS MAITA, DAVID',
               'email' => 'dsolis@ucss.edu.pe',
               'password' => bcrypt('40055135'),
          ]);
          User::create([
               'name' => 'SOLIS VARGAS, PABLO',
               'email' => 'psolis@ucss.edu.pe',
               'password' => bcrypt('08674754'),
          ]);
          User::create([
               'name' => 'SOPLA HUAYTA, SERGIO RAMON',
               'email' => 'ssopla@ucss.edu.pe',
               'password' => bcrypt('42917318'),
          ]);
          User::create([
               'name' => 'SOSA LEON, JOSE LUIS',
               'email' => 'jsosa@ucss.edu.pe',
               'password' => bcrypt('03891414'),
          ]);
          User::create([
               'name' => 'SOTO CANALES, PEDRO PASCUAL',
               'email' => 'psoto@ucss.edu.pe',
               'password' => bcrypt('09452164'),
          ]);
          User::create([
               'name' => 'SOTO CCOICCA, KAROL',
               'email' => 'ksoto@ucss.edu.pe',
               'password' => bcrypt('40536407'),
          ]);
          User::create([
               'name' => 'SOTO COCHON, CARLINA ROXANA',
               'email' => 'csoto@ucss.edu.pe',
               'password' => bcrypt('29538510'),
          ]);
          User::create([
               'name' => 'SOTO CRISTOBAL, FELICITAS TEODOMIRA',
               'email' => 'fsoto@ucss.edu.pe',
               'password' => bcrypt('08104717'),
          ]);
          User::create([
               'name' => 'SOTO HIPOLITO, DONATO CESAR',
               'email' => 'dsoto@ucss.edu.pe',
               'password' => bcrypt('06604413'),
          ]);
          User::create([
               'name' => 'SOTO PORRAS, JESUS GERARDO',
               'email' => 'jsoto@ucss.edu.pe',
               'password' => bcrypt('21076557'),
          ]);
          User::create([
               'name' => 'SOTO VERA, MARIA EUGENIA',
               'email' => 'msoto@ucss.edu.pe',
               'password' => bcrypt('08467995'),
          ]);
          User::create([
               'name' => 'SOTOMAYOR VERTIZ, ABDIAS TEOFILO',
               'email' => 'asotomayor@ucss.edu.pe',
               'password' => bcrypt('09339605'),
          ]);
          User::create([
               'name' => 'SUAREZ MONTALVO, ANTONIO OLAF',
               'email' => 'asuarez@ucss.edu.pe',
               'password' => bcrypt('20723430'),
          ]);
          User::create([
               'name' => 'SUAREZ REYMUNDO, JOHN PAUL',
               'email' => 'jsuarez@ucss.edu.pe',
               'password' => bcrypt('41167074'),
          ]);
          User::create([
               'name' => 'SUELDO VEGA, GREMY',
               'email' => 'gsueldo@ucss.edu.pe',
               'password' => bcrypt('09886713'),
          ]);
          User::create([
               'name' => 'SULLON LACHIRA, SAUL ARNALDO',
               'email' => 'ssullon@ucss.edu.pe',
               'password' => bcrypt('42390203'),
          ]);
          User::create([
               'name' => 'TABOADA GARCIA, MARCO',
               'email' => 'mtaboada@ucss.edu.pe',
               'password' => bcrypt('09647050'),
          ]);
          User::create([
               'name' => 'TACUCHI GAMARRA, MISVELA',
               'email' => 'mtacuchi@ucss.edu.pe',
               'password' => bcrypt('08159168'),
          ]);
          User::create([
               'name' => 'TACUNAN BONIFACIO, SANTIAGO',
               'email' => 'stacunan@ucss.edu.pe',
               'password' => bcrypt('09978369'),
          ]);
          User::create([
               'name' => 'TAFUR PORTILLA, RAUL ARTURO',
               'email' => 'rtafur@ucss.edu.pe',
               'password' => bcrypt('08794532'),
          ]);
          User::create([
               'name' => 'TAIPE AYLAS, MARIA DEL CARMEN',
               'email' => 'mtaipe@ucss.edu.pe',
               'password' => bcrypt('09732261'),
          ]);
          User::create([
               'name' => 'TALLEDO SAKUMOTO, JORGE ENRIQUE',
               'email' => 'jtalledo@ucss.edu.pe',
               'password' => bcrypt('41174708'),
          ]);
          User::create([
               'name' => 'TANANTA USHIÑAHUA, RONALD',
               'email' => 'rtananta@ucss.edu.pe',
               'password' => bcrypt('01136863'),
          ]);
          User::create([
               'name' => 'TANQUES ATCHUT, PANCHO',
               'email' => 'ptanques@ucss.edu.pe',
               'password' => bcrypt('00839330'),
          ]);
          User::create([
               'name' => 'TANTALEAN DEL AGUILA, MARTIN ALONSO',
               'email' => 'mtantalean@ucss.edu.pe',
               'password' => bcrypt('07724946'),
          ]);
          User::create([
               'name' => 'TANTALEAN PEDRAZA, ROBINSON',
               'email' => 'rtantalean@ucss.edu.pe',
               'password' => bcrypt('45400688'),
          ]);
          User::create([
               'name' => 'TAPIA NUÑEZ, LOURDES CECILIA',
               'email' => 'ltapia@ucss.edu.pe',
               'password' => bcrypt('09363458'),
          ]);
          User::create([
               'name' => 'TARRILLO VILLEGAS, ANA MARIA',
               'email' => 'atarrillov@ucss.edu.pe',
               'password' => bcrypt('45829609'),
          ]);
          User::create([
               'name' => 'TASSO BARRIOS, GINA PATRICIA',
               'email' => 'gtasso@ucss.edu.pe',
               'password' => bcrypt('09419325'),
          ]);
          User::create([
               'name' => 'TAXA AZABACHE, JORGE ALFREDO',
               'email' => 'jtaxa@ucss.edu.pe',
               'password' => bcrypt('10627824'),
          ]);
          User::create([
               'name' => 'TAYPE AMANCAES, VICTOR APOLINARIO',
               'email' => 'vtaype@ucss.edu.pe',
               'password' => bcrypt('40663885'),
          ]);
          User::create([
               'name' => 'TEJADA FARFAN, ANDREA GIULIANA',
               'email' => 'atejada@ucss.edu.pe',
               'password' => bcrypt('43252024'),
          ]);
          User::create([
               'name' => 'TEJADA RIVAS, ROBERTO ANTONIO',
               'email' => 'rtejada@ucss.edu.pe',
               'password' => bcrypt('07757302'),
          ]);
          User::create([
               'name' => 'TELLO BENITES, JESSICA VICTORIA',
               'email' => 'jvtello@ucss.edu.pe',
               'password' => bcrypt('10177764'),
          ]);
          User::create([
               'name' => 'TELLO GONZALES, JOSE REYNALDO',
               'email' => 'jrtello@ucss.edu.pe',
               'password' => bcrypt('21452854'),
          ]);
          User::create([
               'name' => 'TELLO MARIN, ROLAN',
               'email' => 'rtello@ucss.edu.pe',
               'password' => bcrypt('00821037'),
          ]);
          User::create([
               'name' => 'TELLO MARZOL, JACQUELINE ANGELICA',
               'email' => 'atello@ucss.edu.pe',
               'password' => bcrypt('06282789'),
          ]);
          User::create([
               'name' => 'TELLO PANDAL, NILO',
               'email' => 'ntello@ucss.edu.pe',
               'password' => bcrypt('15605059'),
          ]);
          User::create([
               'name' => 'TELLO VILLENA, JORGE LUIS',
               'email' => 'jtello@ucss.edu.pe',
               'password' => bcrypt('09864507'),
          ]);
          User::create([
               'name' => 'TENORIO DURAND, DANIEL',
               'email' => 'dtenorio@ucss.edu.pe',
               'password' => bcrypt('40685417'),
          ]);
          User::create([
               'name' => 'TENORIO MENDEZ, WALTER ORLANDO',
               'email' => 'otenorio@ucss.edu.pe',
               'password' => bcrypt('07585542'),
          ]);
          User::create([
               'name' => 'TENORIO MORA, JORGE ALBERTO',
               'email' => 'jtenorio@ucss.edu.pe',
               'password' => bcrypt('07194616'),
          ]);
          User::create([
               'name' => 'TERAN SANCHEZ, GERMAN ALEXANDER',
               'email' => 'gteran@ucss.edu.pe',
               'password' => bcrypt('07576555'),
          ]);
          User::create([
               'name' => 'TERRON CAHUANA, EDUARDO ANDRE',
               'email' => 'eterron@ucss.edu.pe',
               'password' => bcrypt('09901020'),
          ]);
          User::create([
               'name' => 'TERRONES SUAREZ, ORLANDO',
               'email' => 'oterroness@ucss.edu.pe',
               'password' => bcrypt('10618831'),
          ]);
          User::create([
               'name' => 'TICLLA BURGOS, DANIEL',
               'email' => 'dticlla@ucss.edu.pe',
               'password' => bcrypt('41686191'),
          ]);
          User::create([
               'name' => 'TICONA MICHILOT, JULIA MERCEDES',
               'email' => 'jticona@ucss.edu.pe',
               'password' => bcrypt('41903857'),
          ]);
          User::create([
               'name' => 'TIMANA ALVAREZ, MARCOS',
               'email' => 'mtimana@ucss.edu.pe',
               'password' => bcrypt('05643990'),
          ]);
          User::create([
               'name' => 'TIRADO PUCUHUAYLA, JUAN ANTONIO',
               'email' => 'jtirado@ucss.edu.pe',
               'password' => bcrypt('21082550'),
          ]);
          User::create([
               'name' => 'TIRAVANTI ZULOETA, EDWIN HANSEL',
               'email' => 'etiravanti@ucss.edu.pe',
               'password' => bcrypt('27281801'),
          ]);
          User::create([
               'name' => 'TITO CHURA, VIRGILIO FREDY',
               'email' => 'vtito@ucss.edu.pe',
               'password' => bcrypt('01333753'),
          ]);
          User::create([
               'name' => 'TOCAS MENA, EUSEBIO',
               'email' => 'etocas@ucss.edu.pe',
               'password' => bcrypt('15738947'),
          ]);
          User::create([
               'name' => 'TOLEDO VEGA, VIRGINIA',
               'email' => 'vtoledo@ucss.edu.pe',
               'password' => bcrypt('09728619'),
          ]);
          User::create([
               'name' => 'TOLENTINO ZAPATA, JUAN MANUEL',
               'email' => 'jtolentino@ucss.edu.pe',
               'password' => bcrypt('09639466'),
          ]);
          User::create([
               'name' => 'TONGO CARHUAJULCA, MARIA DEL ROSARIO',
               'email' => 'mtongo@ucss.edu.pe',
               'password' => bcrypt('16776262'),
          ]);
          User::create([
               'name' => 'TORO DEXTRE, ELISEO',
               'email' => 'etoro@ucss.edu.pe',
               'password' => bcrypt('07786573'),
          ]);
          User::create([
               'name' => 'TORO MIRANDA, ESTEBAN JESUS',
               'email' => 'etorom@ucss.edu.pe',
               'password' => bcrypt('09920777'),
          ]);
          User::create([
               'name' => 'TORRES ARGOMEDO, RODOLFO FERNANDO',
               'email' => 'rtorres@ucss.edu.pe',
               'password' => bcrypt('09467519'),
          ]);
          User::create([
               'name' => 'TORRES CHAVEZ, HECTOR IVAN',
               'email' => 'itorres@ucss.edu.pe',
               'password' => bcrypt('06664369'),
          ]);
          User::create([
               'name' => 'TORRES GRANADOS, JUAN',
               'email' => 'jtorres@ucss.edu.pe',
               'password' => bcrypt('00150790'),
          ]);
          User::create([
               'name' => 'TORRES GUEVARA, FIDEL ANGEL',
               'email' => 'ftorres@ucss.edu.pe',
               'password' => bcrypt('02890142'),
          ]);
          User::create([
               'name' => 'TORRES LOPEZ, EDGARDO',
               'email' => 'etorresl@ucss.edu.pe',
               'password' => bcrypt('29225031'),
          ]);
          User::create([
               'name' => 'TORRES MACEDO, ALEXANDER BRIAND',
               'email' => 'atorres@ucss.edu.pe',
               'password' => bcrypt('43110935'),
          ]);
          User::create([
               'name' => 'TORRES MANRIQUE, DANILO SANTIAGO',
               'email' => 'storres@ucss.edu.pe',
               'password' => bcrypt('43045009'),
          ]);
          User::create([
               'name' => 'TORRES MARQUINA, JUAN DANIEL',
               'email' => 'jdtorres@ucss.edu.pe',
               'password' => bcrypt('40594868'),
          ]);
          User::create([
               'name' => 'TORRES MENDEZ, MIGUEL CHRISTIAN',
               'email' => 'mtorres@ucss.edu.pe',
               'password' => bcrypt('07964178'),
          ]);
          User::create([
               'name' => 'TORRES ROJAS, HUBER EDINSON',
               'email' => 'htorres@ucss.edu.pe',
               'password' => bcrypt('46540197'),
          ]);
          User::create([
               'name' => 'TORRES RUIZ, SALLY',
               'email' => 'storresr@ucss.edu.pe',
               'password' => bcrypt('46098491'),
          ]);
          User::create([
               'name' => 'TORRES SANCHEZ, EFRAIN',
               'email' => 'etorres@ucss.edu.pe',
               'password' => bcrypt('41499287'),
          ]);
          User::create([
               'name' => 'TORRES URBINA, JOSEPH LUIS',
               'email' => 'jltorres@ucss.edu.pe',
               'password' => bcrypt('44968900'),
          ]);
          User::create([
               'name' => 'TORRES VALLES, JORGE ALBERTO',
               'email' => 'jtorresv@ucss.edu.pe',
               'password' => bcrypt('00808843'),
          ]);
          User::create([
               'name' => 'TOVAR BACA, MARILU',
               'email' => 'mtovar@ucss.edu.pe',
               'password' => bcrypt('40064100'),
          ]);
          User::create([
               'name' => 'TRABUCCO RICALDI, JUAN NAPOLEON',
               'email' => 'jtrabucco@ucss.edu.pe',
               'password' => bcrypt('08158930'),
          ]);
          User::create([
               'name' => 'TREJO SARE, JENNY',
               'email' => 'jtrejo@ucss.edu.pe',
               'password' => bcrypt('42824306'),
          ]);
          User::create([
               'name' => 'TRELLES VELASCO, MANUEL ANTONIO',
               'email' => 'mtrelles@ucss.edu.pe',
               'password' => bcrypt('03692039'),
          ]);
          User::create([
               'name' => 'TRINIDAD MARCELO, ROBERTO TITO',
               'email' => 'rtrinidad@ucss.edu.pe',
               'password' => bcrypt('22513592'),
          ]);
          User::create([
               'name' => 'TROYA PALOMINO, PERCY',
               'email' => 'ptroya@ucss.edu.pe',
               'password' => bcrypt('40490510'),
          ]);
          User::create([
               'name' => 'TRUJILLO ALVARADO, DOMINIC DANISA',
               'email' => 'dtrujilloa@ucss.edu.pe',
               'password' => bcrypt('42745634'),
          ]);
          User::create([
               'name' => 'TRUJILLO CHAVEZ, DELSY MARIELA',
               'email' => 'dtrujillo@ucss.edu.pe',
               'password' => bcrypt('10140056'),
          ]);
          User::create([
               'name' => 'TRUJILLO JURADO, JORGE AUGUSTO',
               'email' => 'jtrujillo@ucss.edu.pe',
               'password' => bcrypt('40167023'),
          ]);
          User::create([
               'name' => 'TRUJILLO TREJO, JOHN LEDGARD',
               'email' => 'jltrujillo@ucss.edu.pe',
               'password' => bcrypt('06187585'),
          ]);
          User::create([
               'name' => 'TSAJUPUT YAMPANCH, ALEJANDRO',
               'email' => 'atsajuput@ucss.edu.pe',
               'password' => bcrypt('33580659'),
          ]);
          User::create([
               'name' => 'TUCNO PACOTAYPE, SONIA ELIZABETH',
               'email' => 'stucno@ucss.edu.pe',
               'password' => bcrypt('40607992'),
          ]);
          User::create([
               'name' => 'TUESTA CASIQUE, ANGEL',
               'email' => 'atuesta@ucss.edu.pe',
               'password' => bcrypt('00839617'),
          ]);
          User::create([
               'name' => 'TULLUME CAPUÑAY, VICTOR RAUL',
               'email' => 'vtullume@ucss.edu.pe',
               'password' => bcrypt('02788696'),
          ]);
          User::create([
               'name' => 'TUME CHINCHAY, LUIS FELIPE',
               'email' => 'ltume@ucss.edu.pe',
               'password' => bcrypt('03568079'),
          ]);
          User::create([
               'name' => 'TUME RUIZ, JUAN MANUEL',
               'email' => 'jtume@ucss.edu.pe',
               'password' => bcrypt('03494013'),
          ]);
          User::create([
               'name' => 'UBILLUS SILVA, RUBEN',
               'email' => 'rubillus@ucss.edu.pe',
               'password' => bcrypt('02860918'),
          ]);
          User::create([
               'name' => 'UCAÑAN LEYTON, ROGER EUGENIO',
               'email' => 'rucanan@ucss.edu.pe',
               'password' => bcrypt('17970143'),
          ]);
          User::create([
               'name' => 'UCEDO SILVA, VICTOR HUGO',
               'email' => 'vucedo@ucss.edu.pe',
               'password' => bcrypt('08179851'),
          ]);
          User::create([
               'name' => 'ULLOQUE SAMATELO, CARLOS AUGUSTO',
               'email' => 'culloque@ucss.edu.pe',
               'password' => bcrypt('45007560'),
          ]);
          User::create([
               'name' => 'URBANO CHAVEZ, ANGELICA EULALIA',
               'email' => 'aurbano@ucss.edu.pe',
               'password' => bcrypt('08600005'),
          ]);
          User::create([
               'name' => 'URBANO GALIANO, LUIS AUGUSTO',
               'email' => 'lurbano@ucss.edu.pe',
               'password' => bcrypt('40113581'),
          ]);
          User::create([
               'name' => 'URBINA PEÑAHERRERA, JUAN JOSE',
               'email' => 'jurbina@ucss.edu.pe',
               'password' => bcrypt('40676315'),
          ]);
          User::create([
               'name' => 'URBIZAGASTIGUE CHINCHAY, ELVIS WILFREDO',
               'email' => 'eurbizagastigue@ucss.edu.pe',
               'password' => bcrypt('43142491'),
          ]);
          User::create([
               'name' => 'URCO CACERES, SANDRO ALEX',
               'email' => 'surco@ucss.edu.pe',
               'password' => bcrypt('44673089'),
          ]);
          User::create([
               'name' => 'URDANIVIA LERMO, FRANCESCO RENATO',
               'email' => 'furdanivia@ucss.edu.pe',
               'password' => bcrypt('44335816'),
          ]);
          User::create([
               'name' => 'URDAY VILLANUEVA, DANIEL FRANCISCO',
               'email' => 'durday@ucss.edu.pe',
               'password' => bcrypt('06105903'),
          ]);
          User::create([
               'name' => 'URIBE AMOROS, OSCAR ALBERTO',
               'email' => 'ouribe@ucss.edu.pe',
               'password' => bcrypt('10250242'),
          ]);
          User::create([
               'name' => 'URIBE MEDINA, CAROLINA',
               'email' => 'curibe@ucss.edu.pe',
               'password' => bcrypt('09516663'),
          ]);
          User::create([
               'name' => 'URIBE PORRAS, CARLOS ALBERTO',
               'email' => 'curibep@ucss.edu.pe',
               'password' => bcrypt('10272670'),
          ]);
          User::create([
               'name' => 'VADILLO CANALES, MAGNO ALBERTO',
               'email' => 'mvadillo@ucss.edu.pe',
               'password' => bcrypt('08460933'),
          ]);
          User::create([
               'name' => 'VALDERA SANCHEZ, WALTER',
               'email' => 'wvaldera@ucss.edu.pe',
               'password' => bcrypt('17603668'),
          ]);
          User::create([
               'name' => 'VALDEZ MENDO, HAMER DEY',
               'email' => 'hvaldez@ucss.edu.pe',
               'password' => bcrypt('43451510'),
          ]);
          User::create([
               'name' => 'VALDEZ VARGAS, ALDO NESTOR',
               'email' => 'avaldez@ucss.edu.pe',
               'password' => bcrypt('41180809'),
          ]);
          User::create([
               'name' => 'VALDIVIA ARENAS, CARMEN ROSA',
               'email' => 'cvaldivia@ucss.edu.pe',
               'password' => bcrypt('21796501'),
          ]);
          User::create([
               'name' => 'VALDIVIA TORRES, AUGUSTO GILTTER',
               'email' => 'avaldivia@ucss.edu.pe',
               'password' => bcrypt('07424538'),
          ]);
          User::create([
               'name' => 'VALDIVIA ZUÑIGA, MARIBEL EMILIA',
               'email' => 'mvaldivia@ucss.edu.pe',
               'password' => bcrypt('09223783'),
          ]);
          User::create([
               'name' => 'VALDIVIEZO PATIÑO, CLAUDIA ISABEL',
               'email' => 'cvaldiviezo@ucss.edu.pe',
               'password' => bcrypt('40679476'),
          ]);
          User::create([
               'name' => 'VALENCIA DIONICIO, BENITO ELPIDIO',
               'email' => 'bvalencia@ucss.edu.pe',
               'password' => bcrypt('22410598'),
          ]);
          User::create([
               'name' => 'VALENCIA DOIG, CESAR ALFREDO',
               'email' => 'cvalencia@ucss.edu.pe',
               'password' => bcrypt('45591968'),
          ]);
          User::create([
               'name' => 'VALQUI CASTAÑEDA, CARLOS ALFREDO',
               'email' => 'cvalqui@ucss.edu.pe',
               'password' => bcrypt('27421694'),
          ]);
          User::create([
               'name' => 'VALVERDE MANRIQUE, LUZ VIOLETA',
               'email' => 'lvalverde@ucss.edu.pe',
               'password' => bcrypt('08526045'),
          ]);
          User::create([
               'name' => 'VALVERDE OBREGON, ESKIM SANTIAGO',
               'email' => 'evalverde@ucss.edu.pe',
               'password' => bcrypt('45441025'),
          ]);
          User::create([
               'name' => 'VALVERDE SALAZAR, HECTOR WILDER',
               'email' => 'hvalverde@ucss.edu.pe',
               'password' => bcrypt('31652880'),
          ]);
          User::create([
               'name' => 'VALVERDE VALDERRAMA, MARIA ELENA',
               'email' => 'mvalverde@ucss.edu.pe',
               'password' => bcrypt('00166009'),
          ]);
          User::create([
               'name' => 'VARA AYALA, YENY GLORIA',
               'email' => 'yvara@ucss.edu.pe',
               'password' => bcrypt('10629725'),
          ]);
          User::create([
               'name' => 'VARGAS FERNANDEZ, MARITZA DE JESUS',
               'email' => 'mvargasf@ucss.edu.pe',
               'password' => bcrypt('09616753'),
          ]);
          User::create([
               'name' => 'VARGAS GUTIERREZ, DELICIA DE JESUS',
               'email' => 'dvargas@ucss.edu.pe',
               'password' => bcrypt('10556269'),
          ]);
          User::create([
               'name' => 'VARGAS MELENDEZ, KARINA',
               'email' => 'kvargas@ucss.edu.pe',
               'password' => bcrypt('42625630'),
          ]);
          User::create([
               'name' => 'VARGAS ROJAS, JUAN ORLANDO',
               'email' => 'jvargas@ucss.edu.pe',
               'password' => bcrypt('01046752'),
          ]);
          User::create([
               'name' => 'VARGAS ZEGARRA, FELIX DORIAN',
               'email' => 'fvargas@ucss.edu.pe',
               'password' => bcrypt('29637254'),
          ]);
          User::create([
               'name' => 'VASQUEZ BALAREZO, JOVITA',
               'email' => 'jvasquezb@ucss.edu.pe',
               'password' => bcrypt('00129361'),
          ]);
          User::create([
               'name' => 'VASQUEZ CARRANZA, JUAN RAFAEL',
               'email' => 'jvasquezc@ucss.edu.pe',
               'password' => bcrypt('09802672'),
          ]);
          User::create([
               'name' => 'VASQUEZ CASTAÑEDA, MARIA LUISA',
               'email' => 'mvasquez@ucss.edu.pe',
               'password' => bcrypt('40348999'),
          ]);
          User::create([
               'name' => 'VASQUEZ CASTILLO, FLOR DE MARIA',
               'email' => 'fvasquezc@ucss.edu.pe',
               'password' => bcrypt('09670973'),
          ]);
          User::create([
               'name' => 'VASQUEZ COLLANTES, JAIME',
               'email' => 'jvasquezco@ucss.edu.pe',
               'password' => bcrypt('16804411'),
          ]);
          User::create([
               'name' => 'VASQUEZ CUEVA, MIGUEL ANGEL',
               'email' => 'mavasquez@ucss.edu.pe',
               'password' => bcrypt('07364911'),
          ]);
          User::create([
               'name' => 'VASQUEZ MEDINA, PEDRO JAMES',
               'email' => 'pvasquez@ucss.edu.pe',
               'password' => bcrypt('16562688'),
          ]);
          User::create([
               'name' => 'VASQUEZ TERAN, OCTAVIO JOEL',
               'email' => 'ovasquez@ucss.edu.pe',
               'password' => bcrypt('16790005'),
          ]);
          User::create([
               'name' => 'VASQUEZ TUANAMA, HENRY LOLAN',
               'email' => 'hvasquez@ucss.edu.pe',
               'password' => bcrypt('41327678'),
          ]);
          User::create([
               'name' => 'VASQUEZ VALVERDE, DAVID MANUEL',
               'email' => 'dvasquez@ucss.edu.pe',
               'password' => bcrypt('44078197'),
          ]);
          User::create([
               'name' => 'VASQUEZ VICARIO, GREGORIO GUSTAVO',
               'email' => 'gvicario@ucss.edu.pe',
               'password' => bcrypt('07029214'),
          ]);
          User::create([
               'name' => 'VASSALLO FERNANDEZ, LUIGI EDGARDO',
               'email' => 'lvassallo@ucss.edu.pe',
               'password' => bcrypt('09442181'),
          ]);
          User::create([
               'name' => 'VAZQUEZ ZAVALA, CARLOS',
               'email' => 'cvazquez@ucss.edu.pe',
               'password' => bcrypt('001397661'),
          ]);
          User::create([
               'name' => 'VEGA BALDEON, AGUSTIN HEBERT',
               'email' => 'avega@ucss.edu.pe',
               'password' => bcrypt('08607374'),
          ]);
          User::create([
               'name' => 'VEGA DAVILA, SHANIBET',
               'email' => 'svega@ucss.edu.pe',
               'password' => bcrypt('42068723'),
          ]);
          User::create([
               'name' => 'VEGA QUISPE, JOSE JAVIER',
               'email' => 'jvega@ucss.edu.pe',
               'password' => bcrypt('80610882'),
          ]);
          User::create([
               'name' => 'VEGA YZQUIERDO, MARIA PRESENTACION',
               'email' => 'mvega@ucss.edu.pe',
               'password' => bcrypt('16687078'),
          ]);
          User::create([
               'name' => 'VEJARANO INGAR, MANUEL JESUS',
               'email' => 'mvejarano@ucss.edu.pe',
               'password' => bcrypt('10684755'),
          ]);
          User::create([
               'name' => 'VELA LOPEZ, WEYDER',
               'email' => 'wvela@ucss.edu.pe',
               'password' => bcrypt('42525907'),
          ]);
          User::create([
               'name' => 'VELA NORIEGA, EMERSON',
               'email' => 'evela@ucss.edu.pe',
               'password' => bcrypt('00859776'),
          ]);
          User::create([
               'name' => 'VELARDE ALIAGA, CARLOS RAFAEL',
               'email' => 'cvelarde@ucss.edu.pe',
               'password' => bcrypt('07633132'),
          ]);
          User::create([
               'name' => 'VELARDE FLORES, RUBEN ANTONIO',
               'email' => 'rvelarde@ucss.edu.pe',
               'password' => bcrypt('07238797'),
          ]);
          User::create([
               'name' => 'VELASQUEZ ESPINOZA, MONICA',
               'email' => 'mvelasquez@ucss.edu.pe',
               'password' => bcrypt('42071960'),
          ]);
          User::create([
               'name' => 'VELASQUEZ MARTINEZ, ELIZABETH EMPERATRIZ',
               'email' => 'evelasquez@ucss.edu.pe',
               'password' => bcrypt('10346988'),
          ]);
          User::create([
               'name' => 'VELASQUEZ RIVAS, ROGIANY DE LOS MILAGROS',
               'email' => 'rvelasquez@ucss.edu.pe',
               'password' => bcrypt('40404211'),
          ]);
          User::create([
               'name' => 'VELASQUEZ RODRIGUEZ, NORMA CONSTANZA',
               'email' => 'nvelasquez@ucss.edu.pe',
               'password' => bcrypt('08172294'),
          ]);
          User::create([
               'name' => 'VELASQUEZ ROSAS DE CUTIMBO, JULIA GLADYS',
               'email' => 'jvelasquez@ucss.edu.pe',
               'password' => bcrypt('10400322'),
          ]);
          User::create([
               'name' => 'VELASQUEZ VASQUEZ, JUAN ALFREDO',
               'email' => 'jvelasquezv@ucss.edu.pe',
               'password' => bcrypt('08834681'),
          ]);
          User::create([
               'name' => 'VELIZ PAREDES, GUILLERMO RENZO',
               'email' => 'gveliz@ucss.edu.pe',
               'password' => bcrypt('40715884'),
          ]);
          User::create([
               'name' => 'VELIZ RAFAEL, JOSE ANTONIO',
               'email' => 'jveliz@ucss.edu.pe',
               'password' => bcrypt('42435630'),
          ]);
          User::create([
               'name' => 'VENEGAS CAMPOS, MIRIAM ISABEL',
               'email' => 'mvenegas@ucss.edu.pe',
               'password' => bcrypt('41283752'),
          ]);
          User::create([
               'name' => 'VENTOCILLA GARCIA, JUANA TRACY',
               'email' => 'jventocilla@ucss.edu.pe',
               'password' => bcrypt('71924296'),
          ]);
          User::create([
               'name' => 'VENTURA VASQUEZ, WILLIAMS',
               'email' => 'wventura@ucss.edu.pe',
               'password' => bcrypt('44495796'),
          ]);
          User::create([
               'name' => 'VERA BROSSARD, LUIS FERNANDO',
               'email' => 'lvera@ucss.edu.pe',
               'password' => bcrypt('46376757'),
          ]);
          User::create([
               'name' => 'VERA CASTILLO, JUAN FRANCISCO',
               'email' => 'jvera@ucss.edu.pe',
               'password' => bcrypt('06011749'),
          ]);
          User::create([
               'name' => 'VERA GASTAÑADUI, ALVARO SAUL',
               'email' => 'avera@ucss.edu.pe',
               'password' => bcrypt('10218540'),
          ]);
          User::create([
               'name' => 'VERGARA MEDRANO, MARIA ELENA',
               'email' => 'mvergara@ucss.edu.pe',
               'password' => bcrypt('17807409'),
          ]);
          User::create([
               'name' => 'VERGARA PALACIOS, GLADYS ELIDA',
               'email' => 'gvergara@ucss.edu.pe',
               'password' => bcrypt('08725896'),
          ]);
          User::create([
               'name' => 'VERGARA TRUJILLO, JULIO DOUGLAS',
               'email' => 'jvergara@ucss.edu.pe',
               'password' => bcrypt('10777769'),
          ]);
          User::create([
               'name' => 'VIAÑA RUBIO, CARLOS GUILLERMO',
               'email' => 'cviana@ucss.edu.pe',
               'password' => bcrypt('43072572'),
          ]);
          User::create([
               'name' => 'VICUÑA ORIHUELA, CARMELA EMPERATRIZ',
               'email' => 'cvicuna@ucss.edu.pe',
               'password' => bcrypt('07503079'),
          ]);
          User::create([
               'name' => 'VIDAL ROJAS, MARIANELLA IVY',
               'email' => 'mvidal@ucss.edu.pe',
               'password' => bcrypt('06240042'),
          ]);
          User::create([
               'name' => 'VIGNOLO FARFAN, LUIS ANGEL',
               'email' => 'lvignolo@ucss.edu.pe',
               'password' => bcrypt('02665836'),
          ]);
          User::create([
               'name' => 'VILCA DELGADO, WILLIAMS SHANE',
               'email' => 'wvilca@ucss.edu.pe',
               'password' => bcrypt('06663188'),
          ]);
          User::create([
               'name' => 'VILCA DONGO, SOFIA ISOLINA',
               'email' => 'svilca@ucss.edu.pe',
               'password' => bcrypt('09412984'),
          ]);
          User::create([
               'name' => 'VILCAPUMA VINCES, PATRICIA BERNARDA',
               'email' => 'pvilcapuma@ucss.edu.pe',
               'password' => bcrypt('10796076'),
          ]);
          User::create([
               'name' => 'VILCHERREZ VILELA, DARWIN',
               'email' => 'dvilcherrez@ucss.edu.pe',
               'password' => bcrypt('03383213'),
          ]);
          User::create([
               'name' => 'VILCHERREZ VILELA, RITA DANITZA',
               'email' => 'rvilcherrez@ucss.edu.pe',
               'password' => bcrypt('43050155'),
          ]);
          User::create([
               'name' => 'VILCHEZ CAMPOVERDE, RICHARD JUNIOR',
               'email' => 'rvilchez@ucss.edu.pe',
               'password' => bcrypt('46135478'),
          ]);
          User::create([
               'name' => 'VILCHEZ GRANDEZ, KETTY',
               'email' => 'kvilchez@ucss.edu.pe',
               'password' => bcrypt('40138020'),
          ]);
          User::create([
               'name' => 'VILCHEZ GUERRERO, JOSE MIGUEL',
               'email' => 'jvilchez@ucss.edu.pe',
               'password' => bcrypt('44082677'),
          ]);
          User::create([
               'name' => 'VILCHEZ HUERTO, ANA MARIA ISABEL',
               'email' => 'avilchez@ucss.edu.pe',
               'password' => bcrypt('07960814'),
          ]);
          User::create([
               'name' => 'VILDOSO FLORES, ALEJANDRO',
               'email' => 'avildoso@ucss.edu.pe',
               'password' => bcrypt('10712728'),
          ]);
          User::create([
               'name' => 'VILDOSO QUIQUE, VIRGINIA CONCEPCION',
               'email' => 'vvildoso@ucss.edu.pe',
               'password' => bcrypt('29420092'),
          ]);
          User::create([
               'name' => 'VILELA TORRES, MARIA DEL CARMEN',
               'email' => 'mvilela@ucss.edu.pe',
               'password' => bcrypt('40242153'),
          ]);
          User::create([
               'name' => 'VILLA CORDOVA, GLORIA MARIA',
               'email' => 'gvilla@ucss.edu.pe',
               'password' => bcrypt('10293887'),
          ]);
          User::create([
               'name' => 'VILLA LIZANO, HEYDE ODO',
               'email' => 'hvilla@ucss.edu.pe',
               'password' => bcrypt('42565406'),
          ]);
          User::create([
               'name' => 'VILLA MOROCHO, CESAR AUGUSTO',
               'email' => 'cvilla@ucss.edu.pe',
               'password' => bcrypt('08459715'),
          ]);
          User::create([
               'name' => 'VILLACORTA BERTOLOTTO, LUIS FERNANDO',
               'email' => 'lbvillacorta@ucss.edu.pe',
               'password' => bcrypt('07942626'),
          ]);
          User::create([
               'name' => 'VILLACORTA BERTOLOTTO, VICTOR MARTIN',
               'email' => 'vvillacorta@ucss.edu.pe',
               'password' => bcrypt('07283279'),
          ]);
          User::create([
               'name' => 'VILLACORTA SANTAMATO, LUIS ANDRES',
               'email' => 'lvillacorta@ucss.edu.pe',
               'password' => bcrypt('25609588'),
          ]);
          User::create([
               'name' => 'VILLAFUERTE TIMOTEO, ANGELICA MARIA',
               'email' => 'avillafuerte@ucss.edu.pe',
               'password' => bcrypt('40638565'),
          ]);
          User::create([
               'name' => 'VILLALOBOS VILLEGAS, PACO',
               'email' => 'pvillalobos@ucss.edu.pe',
               'password' => bcrypt('42450089'),
          ]);
          User::create([
               'name' => 'VILLALOBOS VILLEGAS, WILTON',
               'email' => 'wvillalobos@ucss.edu.pe',
               'password' => bcrypt('80543304'),
          ]);
          User::create([
               'name' => 'VILLANUEVA HUAMAN, FRANCISCO',
               'email' => 'fvillanueva@ucss.edu.pe',
               'password' => bcrypt('46606605'),
          ]);
          User::create([
               'name' => 'VILLANUEVA MENGONI, ELIZABETH MARIA',
               'email' => 'evillanueva@ucss.edu.pe',
               'password' => bcrypt('09853325'),
          ]);
          User::create([
               'name' => 'VILLANUEVA TORRES, NOELIA EMPERATRIZ',
               'email' => 'nvillanueva@ucss.edu.pe',
               'password' => bcrypt('10681804'),
          ]);
          User::create([
               'name' => 'VILLAR JIMENEZ, CESAR AUGUSTO',
               'email' => 'cvillarj@ucss.edu.pe',
               'password' => bcrypt('08689974'),
          ]);
          User::create([
               'name' => 'VILLAR RODRIGUEZ, CESAR ABEL',
               'email' => 'cvillar@ucss.edu.pe',
               'password' => bcrypt('08532857'),
          ]);
          User::create([
               'name' => 'VILLARAN RODRIGO, CARMEN ROSA MARIA',
               'email' => 'cvillaran@ucss.edu.pe',
               'password' => bcrypt('07863429'),
          ]);
          User::create([
               'name' => 'VILLEGAS CORDOVA, RAFAEL',
               'email' => 'rvillegas@ucss.edu.pe',
               'password' => bcrypt('01123243'),
          ]);
          User::create([
               'name' => 'VILLEGAS FERNANDEZ, YURY JOSELINA',
               'email' => 'yvillegas@ucss.edu.pe',
               'password' => bcrypt('40971221'),
          ]);
          User::create([
               'name' => 'VILLEGAS FLORES, JORGE LUIS',
               'email' => 'jvillegas@ucss.edu.pe',
               'password' => bcrypt('02817874'),
          ]);
          User::create([
               'name' => 'VILLEGAS TORRES, LUIS FERNANDO',
               'email' => 'fvillegas@ucss.edu.pe',
               'password' => bcrypt('10866524'),
          ]);
          User::create([
               'name' => 'VIRGILIO, GIANLUCA',
               'email' => 'gvirgilio@ucss.edu.pe',
               'password' => bcrypt('YB248954'),
          ]);
          User::create([
               'name' => 'VIRTO BALBIN, DIANA STEFANIE',
               'email' => 'dvirto@ucss.edu.pe',
               'password' => bcrypt('47151239'),
          ]);
          User::create([
               'name' => 'VIVAR MANRIQUE, FRANCISCO JAVIER',
               'email' => 'fvivar@ucss.edu.pe',
               'password' => bcrypt('25536059'),
          ]);
          User::create([
               'name' => 'VIVIANO LLAVE, CARLOS ANDRES',
               'email' => 'cviviano@ucss.edu.pe',
               'password' => bcrypt('41991901'),
          ]);
          User::create([
               'name' => 'VIZCARDO CHIARELLA, CARLOS ANTONIO',
               'email' => 'cvizcardo@ucss.edu.pe',
               'password' => bcrypt('09152458'),
          ]);
          User::create([
               'name' => 'VOTO, CARMINE',
               'email' => 'cvoto@ucss.edu.pe',
               'password' => bcrypt('000923632'),
          ]);
          User::create([
               'name' => 'WISMANN MANRIQUE, ANSHIE JOSSELYN',
               'email' => 'awismann@ucss.edu.pe',
               'password' => bcrypt('45380704'),
          ]);
          User::create([
               'name' => 'YACSAHUANGA SANCHEZ, MARTHA RITA',
               'email' => 'myacsahuanga@ucss.edu.pe',
               'password' => bcrypt('06056749'),
          ]);
          User::create([
               'name' => 'YAFAC CASTILLO, CARLA VALERIE',
               'email' => 'cyafac@ucss.edu.pe',
               'password' => bcrypt('41707058'),
          ]);
          User::create([
               'name' => 'YANCE PICON, OSCAR SAMUEL',
               'email' => 'oyance@ucss.edu.pe',
               'password' => bcrypt('07192641'),
          ]);
          User::create([
               'name' => 'YAPU TICONA, ESTANISLAO',
               'email' => 'eyapu@ucss.edu.pe',
               'password' => bcrypt('06046075'),
          ]);
          User::create([
               'name' => 'YARLEQUE VILCHEZ, LUIS ENRIQUE',
               'email' => 'lyarleque@ucss.edu.pe',
               'password' => bcrypt('09962770'),
          ]);
          User::create([
               'name' => 'YARLEQUE VILCHEZ, NORMA MARIBEL',
               'email' => 'nyarleque@ucss.edu.pe',
               'password' => bcrypt('09971583'),
          ]);
          User::create([
               'name' => 'YARNOLD MARTINEZ, RAQUEL SOLEDAD',
               'email' => 'ryarnold@ucss.edu.pe',
               'password' => bcrypt('08088021'),
          ]);
          User::create([
               'name' => 'YASUDA GOICOCHEA, WALTER EDWIN',
               'email' => 'wyasuda@ucss.edu.pe',
               'password' => bcrypt('06058263'),
          ]);
          User::create([
               'name' => 'YENGLE VASQUEZ DE RAMOS, CARLA VERONICA',
               'email' => 'cyengle@ucss.edu.pe',
               'password' => bcrypt('18144037'),
          ]);
          User::create([
               'name' => 'YNGA LEAÑO, JULIO CESAR',
               'email' => 'jynga@ucss.edu.pe',
               'password' => bcrypt('41903850'),
          ]);
          User::create([
               'name' => 'YRENE CUBAS, VITALI',
               'email' => 'vyrene@ucss.edu.pe',
               'password' => bcrypt('41693036'),
          ]);
          User::create([
               'name' => 'YSEKI SALAZAR, SANDRA PATRICIA',
               'email' => 'syseki@ucss.edu.pe',
               'password' => bcrypt('06148522'),
          ]);
          User::create([
               'name' => 'YUCRA SEVILLANO, SANDRA',
               'email' => 'syucra@ucss.edu.pe',
               'password' => bcrypt('29481945'),
          ]);
          User::create([
               'name' => 'YUPANQUI BERROCAL, RICARDO IVAN',
               'email' => 'ryupanqui@ucss.edu.pe',
               'password' => bcrypt('06269975'),
          ]);
          User::create([
               'name' => 'ZAMBRANO ANGULO, VICTOR HUGO',
               'email' => 'vzambrano@ucss.edu.pe',
               'password' => bcrypt('10265508'),
          ]);
          User::create([
               'name' => 'ZAMBRANO GOICOCHEA, JUAN ANTONI',
               'email' => 'jzambranog@ucss.edu.pe',
               'password' => bcrypt('06164675'),
          ]);
          User::create([
               'name' => 'ZANETTI GRANDEZ, NICOLAS ALBERTO MARTIN',
               'email' => 'nzanetti@ucss.edu.pe',
               'password' => bcrypt('40051853'),
          ]);
          User::create([
               'name' => 'ZAPATA CESAREO, REMIGIO',
               'email' => 'rzapata@ucss.edu.pe',
               'password' => bcrypt('00165780'),
          ]);
          User::create([
               'name' => 'ZAPATA CORRALES, FELIX ALBERTO',
               'email' => 'fzapata@ucss.edu.pe',
               'password' => bcrypt('16727294'),
          ]);
          User::create([
               'name' => 'ZAPATA ESPERICUETA, CHRISTIAN DEIVI',
               'email' => 'czapata@ucss.edu.pe',
               'password' => bcrypt('43649062'),
          ]);
          User::create([
               'name' => 'ZAPATA NAVARRO, EDUARDO REMBERTO',
               'email' => 'ezapata@ucss.edu.pe',
               'password' => bcrypt('40065010'),
          ]);
          User::create([
               'name' => 'ZAPATA ROQUE, JOSE CARLOS',
               'email' => 'jzapata@ucss.edu.pe',
               'password' => bcrypt('32102213'),
          ]);
          User::create([
               'name' => 'ZAPATA VELASQUEZ, JESUS MANUEL',
               'email' => 'jzapatav@ucss.edu.pe',
               'password' => bcrypt('44457063'),
          ]);
          User::create([
               'name' => 'ZARATE AGUILAR, KARIN BELINDA',
               'email' => 'kzarate@ucss.edu.pe',
               'password' => bcrypt('41301023'),
          ]);
          User::create([
               'name' => 'ZARATE HERMOZA, JESUS ROBERTO',
               'email' => 'jzarate@ucss.edu.pe',
               'password' => bcrypt('08098554'),
          ]);
          User::create([
               'name' => 'ZARATE ROMAN, MARISA CONSUELO',
               'email' => 'mzarate@ucss.edu.pe',
               'password' => bcrypt('09533788'),
          ]);
          User::create([
               'name' => 'ZARZOSA MARQUEZ, LILIANA VICTORIANA',
               'email' => 'lzarzosa@ucss.edu.pe',
               'password' => bcrypt('31622746'),
          ]);
          User::create([
               'name' => 'ZAVALA ROJAS, NORA ISABEL',
               'email' => 'nzavala@ucss.edu.pe',
               'password' => bcrypt('08693482'),
          ]);
          User::create([
               'name' => 'ZAVALA VICUÑA, DIEGO ALEXANDER',
               'email' => 'dzavala@ucss.edu.pe',
               'password' => bcrypt('47079319'),
          ]);
          User::create([
               'name' => 'ZAVALETA ARTEAGA, MAGALI KATTY',
               'email' => 'mzavaleta@ucss.edu.pe',
               'password' => bcrypt('10650280'),
          ]);
          User::create([
               'name' => 'ZAVALETA LOPEZ, LUIS MARTIN',
               'email' => 'lzavaleta@ucss.edu.pe',
               'password' => bcrypt('17892953'),
          ]);
          User::create([
               'name' => 'ZEBALLOS ALCALDE, CINTHIA MONICA',
               'email' => 'czeballos@ucss.edu.pe',
               'password' => bcrypt('43078545'),
          ]);
          User::create([
               'name' => 'ZEGARRA ARELLANO, CLAUDIO IVAN',
               'email' => 'czegarra@ucss.edu.pe',
               'password' => bcrypt('08275597'),
          ]);
          User::create([
               'name' => 'ZEGARRA MARTINEZ, MARLENE MORAYMA',
               'email' => 'mzegarra@ucss.edu.pe',
               'password' => bcrypt('21087448'),
          ]);
          User::create([
               'name' => 'ZEGARRA PUMACAYO, JORGE LUIS',
               'email' => 'jzegarra@ucss.edu.pe',
               'password' => bcrypt('41704128'),
          ]);
          User::create([
               'name' => 'ZEVALLOS DE LAS CASAS, LUISA INES',
               'email' => 'lzevallos@ucss.edu.pe',
               'password' => bcrypt('06118755'),
          ]);
          User::create([
               'name' => 'ZORRILLA DOLORIER, RUTH KARINA',
               'email' => 'rzorrilla@ucss.edu.pe',
               'password' => bcrypt('42264810'),
          ]);
          User::create([
               'name' => 'ZULUETA ROMERO, EDELMIRA',
               'email' => 'ezulueta@ucss.edu.pe',
               'password' => bcrypt('01048995'),
          ]);
          User::create([
               'name' => 'ZUMAETA ROJAS, ESAU',
               'email' => 'ezumaeta@ucss.edu.pe',
               'password' => bcrypt('00158584'),
          ]);
          User::create([
               'name' => 'ZUÑIGA ALVARADO DE LA ROSA, NELIZA KELI',
               'email' => 'nzuniga@ucss.edu.pe',
               'password' => bcrypt('41340477'),
          ]);
          User::create([
               'name' => 'ZUÑIGA EURIBE, ARTURO PAUL',
               'email' => 'azuniga@ucss.edu.pe',
               'password' => bcrypt('05343430'),
          ]);
          User::create([
               'name' => 'ZUÑIGA TRELLES, JANET DEL MILAGRO',
               'email' => 'jzuniga@ucss.edu.pe',
               'password' => bcrypt('42748740'),
          ]);
     }
}

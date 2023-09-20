<?php

/**константы  для «майянские дни»,
 * M = (D + 1721425 – MAYA_ERA) % 1872000
 * 13.0.10.15.17
*/
define('A', 1721425);  // 1 января 1970 года
define('MAYA_ERA', 1872000);  // количество дней в 5125 лет количество дней в майянской эре
define('BEGIN_MAYA_ERA', 584281);   // 11 августа 3114 года до н.э. (начало майянской эры)
define('BEGIN_YULIAN', 584285);   // 13 августа 3114 года до н.э. (начало юлианского календаря)

$keyName = ["Imix'", "Ik'", "Ak'b'al", "K'an", "Chikchan", "Kimi", "Manik'", "Lamat", "Muluk", "Ok", "Chuwen", "Eb'", "B'en", "Ix", "Men", "K'ib'", "Kab'an", "Etz'nab'", "Kawak", "Ajaw"];
$keyNameHaab = ["Pop",
                "Wo",   
                "Sip",
                "Sotz'",
                "Tzek",
                "Xul",
                "Yaxk'",
                "Mol",
                "Ch'en",
                "Yax",
                "Sac",
                "Keh",
                "Mak",
                "K'ank'in",
                "Muwan",
                "Pax",
                "K'ayab'",
                "Kumk'u",
                "Wayeb'"];
// Aztec Tonalpohualli day name
$Aztec_name = [ "Cipactli – Crocodile",
                "Ehēcatl – Wind", 
                "Calli – House", 
                "Cuetzpalin – Lizard",
                "Coatl – Snake",
                "Miquiztli – Death",
                "Mazatl – Deer",
                "Tochtli – Rabbit",
                "Atl – Water",
                "Itzcuintli – Dog",
                "Ozomahtli – Monkey",
                "Malinalli – Grass",
                "Acatl – Reed",
                "Ocelotl – Jaguar or Ocelot",
                "Cuauhtli – Eagle",
                "Cozcacuauhtli – Vulture",
                "Ollin – Earthquake",
                "Tecpatl – Flint",
                "Quiahuitl – Rain",
                "Xochitl – Flower"
            ];
// Aztec Tonalpohualli day name Spirit
$Spirit_name = [
                    'Tonacatecuhtli',
                    'Quetzalcoatl',
                    'Tepeyollotl',
                    'Huehuecoyotl',
                    'Chalchihuitlicue',
                    'Tecciztecatl',
                    'Tlaloc',
                    'Mayahuel',
                    'Xiuhtecuhtli',
                    'Mictlantecuhtli',
                    'Xochipili',
                    'Patecatl',
                    'Tezcatlipoca',
                    'Tlazolteotl',
                    'Xipe Totec',
                    'Itzpapalotl',
                    'Xolotl',
                    'Chalchihuihtotolin',
                    'Tonatiuh',
                    'Xochiquetzal'
                ];

/**Назви днів в трацені */
$Name_Nahuatl = [
                    'Ce',
                    'Ome',
                    'Yei',
                    'Nahui',
                    'Mahcuilli',
                    'Chicuacen',
                    'Chicome',
                    'Chicuei',
                    'Chicunahui',
                    'Mahtlactli',
                    'Mahtlactli-once',
                    'Mahtlactli-omome',
                    'Mahtlactli-omei'
                ];
/**Назви днів в трацені Spirit*/
$Spirit_Nahuatl = [
                    'Xiuhtecuhtli',
                    'Tlaltecuhtli',
                    'Chalchihuitlicue',
                    'Tonatiuh',
                    'Tlazolteotl',
                    'Mictlantecuhtli',
                    'Centeotl',
                    'Tlaloc',
                    'Quetzalcoatl',
                    'Tezcatlipoca',
                    'Chalmecatecuhtli',
                    'Tlahuizcalpantecuhtli',
                    'Citlalicue'
                ];

/**Aztec Xiuhpohualli Month Name */
$Aztec_Xiuhpohualli = [
                        'Atlcahualo',
                        'Tlacaxipehualiztli',
                        'Tozoztontli',
                        'Hueytozoztli',
                        'Toxcatl',
                        'Etzalcualiztli',
                        'Tecuilhuitontli',
                        'Hueytecuilhuitl',
                        'Tlaxochimaco',
                        'Xocotlhuetzi',
                        'Ochpaniztli',
                        'Teotleco',
                        'Tepeihuitl',
                        'Quecholli',
                        'Panquetzaliztli',
                        'Atemoztli',
                        'Tititl',
                        'Izcalli',
                        'Nemontemi(5 unlucky days)'
                    ];

//Назви трацен (13-денніх періодів)
$name_Trecena13 = [
                    'Cipactli (Crocodile)-',
                    'Ocelotl (Jaguar)',
                    'Mazatl (Deer)',
                    'Xochitl (Flower)',
                    'Acatl (Reed)',
                    'Miquiztli (Death)',
                    'Quiahuitl (Rain)',
                    'Malinalli (Grass)',
                    'Coatl (Serpent)',
                    'Tecpatl (Flint)',
                    'Ozomatli (Monkey)',
                    'Cuetzpalin (Lizard)',
                    'Ollin (Movement)',
                    'Itzcuintli (Dog)',
                    'Calli (House)',
                    'Cozcacuauhtli (Vulture)',
                    'Atl (Water)',
                    'Ehecatl (Wind)',
                    'Cuauhtli (Eagle)',
                    'Tochtli (Rabbit)'
                ];
//Cardinal point
$Cardinal_point = [
                    'East',
                    'North',
                    'West',
                    'South',
                    'East',
                    'North',
                    'West',
                    'South',
                    'East',
                    'North',
                    'West',
                    'South',
                    'East',
                    'North',
                    'West',
                    'South',
                    'East',
                    'North',
                    'West',
                    'South'
                ];

 $yearNameAztec = [
                    'Calli',
                    'Tochtli',
                    'Acatl',
                    'Tecpatl'
                  ];          

$lord_noschi = [
    'Tlaloc',
    'Xiuhtecuhtli',
    'Itztli',
    'Piltzintecuhtli',
    'Centeotl',
    'Mictlantecuhtli',
    'Chalchiuhtlicue',
    'Tlazolteotl',
    'Tepeyollotl'
];
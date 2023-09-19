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
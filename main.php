<?php

ini_set('display_errors', 'on'); //  для отображения ошибок

/*
Plugin Name: Maya Calendar Plugin
Description: Maya Calendar Plugin.
Version: 1.0
Author: Seo Alex
*/

require_once __DIR__.'/funcs.php';  // подключение файла funcs с функциями
require_once __DIR__.'/conf.php';  // подключение файла conf c константами
require_once __DIR__.'/view/form_select_date.php'; // подключение файла с формой

$logger = __DIR__ . '/log/log.log';
    if (filesize($logger) > 35462000) file_put_contents($logger, '');      // проверка на размер лога если более 15mb очистка

$_data = array();


/**проверка на существование */
if (!empty($_GET['date'])) {
    
    file_put_contents($logger, date('Y-m-d H:i:s') . ' введенная дата - '.$_GET['date']. "\n", FILE_APPEND);
    // dd($_data);

    // Создаем объект DateTime для заданной даты
    $date = $_GET['date'];
    /**разобрать дату на день, месяц ,год */
    $_data = explode('-', $date);
    $_data = array_combine(['year', 'month', 'day'], $_data);
    
    // Создаем объект DateTime из строки
    $date = new DateTime($date);
    
    
    // Создаем объект DateTime для начала нашей эры (1 января 1 года)
    $beginningOfEra = new DateTime('0001-01-01');

    // Вычисляем разницу между датами
    $interval = $beginningOfEra->diff($date);

    // Используем DateInterval для вычисления общего количества дней
    // $daysSinceEra = $interval->format('%a');
    $daysSinceEra = $interval->days;

    // Выводим результат
    // echo "Количество дней с начала нашей эры до заданной даты: " . $daysSinceEra;

    file_put_contents($logger, date('Y-m-d H:i:s') . ' Количество дней с начала нашей эры до заданной даты:  - '.$daysSinceEra. "\n", FILE_APPEND);
    /**Майянские дни для дат нашей эры вычисляются как остаток от деления выражения 
    * M = (D + 1721425 – BEGIN_MAYA_ERA) % MAYA_ERA, где D – количество дней с начала нашей эры до заданной даты,
    */
    $MayaDays = ($daysSinceEra + A - BEGIN_MAYA_ERA) % MAYA_ERA;
    // dd($MayaDays);
    // echo "<br>Майянские дни для дат нашей эры: " . $MayaDays;
    file_put_contents($logger, date('Y-m-d H:i:s') . ' Майянские дни для дат нашей эры:  - '.$MayaDays. "\n", FILE_APPEND);

    /**получение  */
    $d = $MayaDays;
    $result = array();

    foreach (array(144000, 7200, 360, 20, 1) as $i) {
        // dd($d);
        // dd($i);
        list($t, $d) = custom_divmod($d, $i);
        // dd($t);
        $result[] = $t;
    }
    // exit;
    /**проверка на ноль первый знак  */
    if ($result[0] == 0) {
        $result[0] = '13';
    }
    // Вывести результат
    // echo "<br>Майянские дни для дат нашей эры: " . implode('.', $result);

    $CurrentMayaDays = implode('.', $result);
    file_put_contents($logger, date('Y-m-d H:i:s') . ' Майянские дни для дат нашей эры после пересчета:  - '.$CurrentMayaDays. "\n", FILE_APPEND);
    // dd($CurrentMayaDays);
    // echo '<br>Long Count Mayan calendar: ' . $CurrentMayaDays;
    
    /** Цолькин  T1 = (M + 19) % 20   T2 = (M + 3) % 13 + 1   */
    $T1 = ($MayaDays + 19) % 20;
    $T2 = ($MayaDays + 3) % 13 + 1;

    /** */
    $T5 = ($MayaDays + 19) % 20;
    $T6 = ($MayaDays + 20) % 18 + 1;
    // echo '<br>Назви місяців сонячного року: ' . $T5;
    // echo '<br>Назви місяців сонячного року: ' . $T6;

  
    
    // Определение солнечного месяца на основе $MayaDays
    $T4 = (($MayaDays - 296) / 365) % count($yearNameAztec);
    $monthNumber = (($MayaDays - 1) / 365) % 13 + 1;
    // dd($T4);
    $T4 = intval($T4); // Округляем до целого числа
    // dd($T4);
    /**проверка на  число на 24 октября*/
    // dd($_data['month']);
    if ($_data['month']>=10 && $_data['day']>=24) {
        $T4 += 1;
        $monthNumber += 1;
        if ($T4 == 4) {
            $T4 = 0;
        }
        // echo '<br>Назви місяців сонячного року: ' . $T4;
        // dd($T4);
    }else{
        // echo 'false';
    }

    // Получение названия месяца
    $Aztec_solar_year = $yearNameAztec[$T4];
    // echo 'Название solar year: ' . $Aztec_solar_year . '<br>';
    // echo 'Номер месяца: ' . $monthNumber . '<br>';

    
    /**name Day solkin
     * keyName in array conf.php
     */
    $NameSolkin = $keyName[$T1];
    // echo '<br>name Day solkin: ' . $NameSolkin;
    // echo '<br>номер дня solkin: '.($T2);
    // echo '<br>';

    // echo $MayaDays;
    
    $NameAztec = $Aztec_name[$T1];
    // echo '<br>name Day Aztec: ' . $NameAztec;

    //Назви днів в релігійному календарі SpritName
    $SpritName = $Spirit_name[$T1];

    //Назви днів в трацені
    $NahuatlName = $Name_Nahuatl[$T2-1];
    //Назви днів в трацені
    $NahuatlNameSpirit = $Spirit_Nahuatl[$T2-1];
    
    /**
     * name month haab
     */
    // list($H1, $H2) = custom_divmod(($MayaDays + 348) % 365, 20);
    /**для месяцев 365 ацтеки */
    list($H1, $H2) = custom_divmod(($MayaDays+441) % 365, 20);
    // dd($H1);
    if ($H1 == 0) {
        $H1 = 19;
    }
    $Aztec_mouth365 = $Aztec_Xiuhpohualli[$H1-1];

    // list($H3, $H4) = custom_divmod(($MayaDays) % 365, 18);
    // dd($H3);
    // dd($H4);
    // dd($Aztec_mouth365);
    // dd($H1);
    // dd($H2);
    // $NameHaab = $keyNameHaab[$H1];
    // echo '<br>name month haab: ' . $NameHaab;
    // echo '<br>number month haab: ' . $H2;
    // echo '<br>';
    // dd($NameHaab);
    // dd($H2);

    // вычислить владыку ночи

    $G = ($MayaDays+4) % 9;
    $lord = $lord_noschi[$G];
    // echo '<br>number владыку ночи: ' . $G;
    // echo '<br>name владыку ночи: ' . $lord_noschi[$G];
    // dd($G);

    /**подключение таблицы 
     * tables_date.php
     * $NameAztec
    */
    require_once __DIR__.'/view/tables_date.php';
   
}else{
    $_data = $_GET;
    foreach ($_data as $key => $value) {
        if (empty($_data[$key])){
            dd('Вы не ввели дату');
            file_put_contents($logger, date('Y-m-d H:i:s') . ' Вы не ввели данные - '.$key. "\n", FILE_APPEND);
        }
    }
    // dd($_data);
    exit;
}

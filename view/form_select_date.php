<?php
    ini_set('display_errors', 'on'); //  для отображения ошибок
        $true = true;
    if ( $true  ) {
    ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>    html, body{margin:0;padding:0;width:100%;height:100%;}    </style>
    </head>
        <body>
                <div class="row">
                    <div class="col">
                        <form action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="get" class="captcha-form text-center">
                            <br>
                            <h2 class="name_calendar">Aztec and Maya Calendar</h2>
                            <div class="form-group" >
                                <label for="month">Месяц:</label>
                                <select id="month" name="month">
                                    <option value="01">Январь</option>
                                    <option value="02">Февраль</option>
                                    <option value="03">Март</option>
                                    <option value="04">Апрель</option>
                                    <option value="05">Май</option>
                                    <option value="06">Июнь</option>
                                    <option value="07">Июль</option>
                                    <option value="08">Август</option>
                                    <option value="09">Сентябрь</option>
                                    <option value="10">Октябрь</option>
                                    <option value="11">Ноябрь</option>
                                    <option value="12">Декабрь</option>
                                </select>
                                <label for="day">День:</label>
                                    <input type="text" id="day" name="day" maxlength="2">
                                <label for="year">Год:</label>
                                    <input type="text" id="year" name="year" maxlength="4">
                                <input type="submit" value="Send">
                            </div>
                        </form>
                    </div> 
                </div> 
            </body>
<?php }?>
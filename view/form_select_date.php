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
                            <div class="form-group mx-auto form_width">
                                <label for="date">Выберите дату:</label>
                                <input type="date" id="date" name="date" class="form-control"></br>
                                <input type="submit" value="Send" class="form-control btn btn-primary">
                            </div>
                        </form>
                    </div> 
                </div> 
            </body>
<?php }?>
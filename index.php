<?php
    if(isset ($_POST['save'])){
        $text = $_POST['text'];
    }
    echo<<<_END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Note Book</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="reset.css">
    </head>
    <body>
    
        <div id="work_zone">
            <div class="form">
                <div class="pen_line_top"></div>
                <div class="pen_line_bot"></div>
                <form method="post" action="index.html" id="text_save" >
                    <input class="name_page" type="text" name="name_page" placeholder="Название записи">
                    <textarea name="note"></textarea>
                    <input class="save_note" type="submit" value="Save note" name="save">
                </form>
            </div>
    
        </div>
    
    </body>
    </html>
_END;

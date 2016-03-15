<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Simple MVC</title>
    </head>
    <body>
        <div class='container'>
            <div id='content' class='row-fluid'>
                <div class='span9 main'>
                    <?php include ROOT . DS . 'views' . DS . $template_file; ?>
                </div>
                <div class='span3 sidebar'>
                    <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'sidebar.php'; ?>
                </div>
            </div>
        </div>
    </body>
</html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Autour+One' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Knight Meal</h2>
        </div>
        <div class="nav">
            <a href="#" target="_blank">Catalog</a>
            <a href="#" target="_blank">Hours</a>
            <a href="#" target="_blank">Contact</a>
        </div>

        <div class="main">
            <div class="left-content">
                <div class="filters" id="filters">
                    <script>
                        $.ajax({
                            method:'get', 
                            url: 'api/categories.php',
                            success: (data) => {
                                data = JSON.parse(data);
                                data.forEach(element => {
                                    $('#filters').append('<a href="#" id="'+element.id +'" class="categories">' + element.name + '</a>');
                                });
                            }
                        });
                    </script>
                </div>
                <div class="products">
                    
                </div>
            </div>
            <div class="side-bar"></div>
        </div>


    </div>
</body>
</html>
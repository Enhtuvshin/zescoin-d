<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Мэдээлэл Оруулах 
                            <a href="index4.php" class="btn btn-danger float-end">Буцах</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form style="max-height: 500px; margin: auto; width: 500px" action="code.php" method="POST">

                            <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.5.3/dist/cleave.min.js"></script>

                            <div class="input-container">
                                <label>Анх гарсан койны хэмжээ</label>
                                <i class="fa fa-fire icon"></i>
                                <input class="input-field" type="text" name="name" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label>Шатаагдсан койн</label>
                                <input class="input-field" type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Одоо байгаа  хэмжээ</label>
                                <input class="input-field" type="text" name="course" class="form-control">
                            </div>
                            <div class="mb-3">
			                    <input type="date" type="text" name="date" value="2022-01-24"min="2010-01-01" max="2030-12-31">
		                    </div>
                            <div class="mb-3">
                            <label>он сар өдөр</label>
                                <button type="submit" name="save_student" class="btn btn-primary">Хадгалах</button>
                            </div>

                            <script>document.querySelectorAll('.input-field').forEach(inp => new Cleave(inp, {numeral: true,numeralThousandsGroupStyle: 'thousand'}));</script>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
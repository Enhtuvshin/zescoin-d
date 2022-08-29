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

    <title>Create2</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message2.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Мэдээлэл Оруулах 
                            <a href="index3.php" class="btn btn-danger float-end">Буцах</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form style="max-height: 500px; margin: auto; width: 500px" action="code2.php" method="POST">

                            <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.5.3/dist/cleave.min.js"></script>

                            <div class="mb-3">
                                <label>Анх гарсан тоо хэмжээ</label>
                                <i class="fa fa-history"></i>
                                <input class="input-field" type="text" name="numbers1" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Нийт шатаасан хэмжээ</label>
                                <i class="fa fa-fire icon"></i>
                                <input class="input-field" type="text" name="numbers2" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Одоогийн тоо хэмжээ</label>
                                <i class="fa fa-home icon"></i>
                                <input class="input-field" type="text" name="numbers3" class="form-control">
                            </div>
                            <div class="mb-3">
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
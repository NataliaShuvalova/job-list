<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Список дел</title>
</head>
<body>
<!--<div class="container">-->
    <div class="row mx-5 mt-2">
        <div class="col-8 ">
            <h2>Список заданий на ... </h2>
<!--            <div class="border">-->
                <table class="table table-bordered mt-5">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Задание</th>
                        <th scope="col">Статус</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
<!--</div>-->
        </div>

        <div class="col-4">
            <h2>Новое задание</h2><form>
            <div class="form-group">
                <label for="example-text-input" class="col-xs-2 col-form-label">Задание: </label>
                <input class="form-control" type="text"  id="example-text-input">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Описани задания</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
        <div class="form-group">
            <label for="inputDate">Назначить задание на:</label>
            <input type="date" class="form-control">
        </div>
                <div class="form-group">
                    <label for="exampleSelect1"> Исполнитель</label>
                    <select class="form-control" id="exampleSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
<!--</div>-->


<!--<div class="container">-->
<!--    <div class="row align-items-center">-->
<!--        <div class="col">-->
<!--            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            Praesent tincidunt porta tortor, ut gravida odio eleifend rhoncus. Donec ultricies vehicula facilisis.-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>
<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Test task 2</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.js"></script>
    <![endif]-->
</head>

<body>
<h1 class="title form-group">Тестовое задание №2 "BACK END" </h1>

<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <thead align="center">
            <tr>
                <td>ID</td>
                <td>Наименование товара</td>
                <td>Категория товара
                    <button class="text-default" title="Редактировать" data-toggle="modal" data-target="#category">
                        <i class="fa fa-pencil"></i>
                    </button></td>
                <td>Стоимость</td>
                <td>Редактирование</td>
            </tr>
            </thead>
            <tbody align="center">
            <tr>
                <td>
                    <span>ID</span>
                </td>
                <td>
                    <span>Наименование товара</span>
                </td>
                <td>
                    <span>Категория товара</span>
                </td>
                <td>
                    <span>Стоимость</span>
                </td>
                <td>
                    <button class="text-default" title="Редактировать">
                        <i class="fa fa-pencil"></i>
                    </button>
                    <button class="text-danger" title="Удалить">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<!--Modal windows-->
<!--Modal category-->
<div class="modal fade" id="category">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" id="close-modal-category" type="button" data-dismiss="modal">
                    <i class="fa fa-close"></i>
                </button>
                <h4 class="modal-title" align="center">Редактирование категорий</h4>
            </div>
            <div class="modal-body">
                <select class="act form-control form-group" id="act" name="act">
                    <option>Добавить категорию</option>
                    <option>Редактировать категорию</option>
                </select>
                <select class="list-category list-category-false form-control form-group" id="list-category" name="list-category">
                    <option>Список всех категорий</option>
                </select>
                <input type="text" class="name-category form-control" id="name-category" placeholder="Название категории" name="name-category">
                <span class="alert-danger alert-danger-false alert-danger form-control" id="alert-danger">Введите название категории</span>
            </div>
            <div class="modal-footer">
                <input type ="button" class="btn-save-category btn btn-success center-block" id="btn-save-category" value="Создать категорию" >
<!--                <input type ="button" class="btn-save-category btn btn-success center-block" id="btn-save-category" value="Создать категорию" data-dismiss = "modal">-->
            </div>
        </div>
    </div>
</div>
<!--END Modal category-->

<!--Modal good-->

<!--END Modal good-->

<!--END Modal windows-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="js/jquery-3.1.0.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<!--salvattore-->
<!--<script src="js/salvattore.min.js"></script>-->
<script src="js/scripts.js"></script>
</body>

</html>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача</title>
    <style>
        body {
            margin: auto;
        }

        header {
            padding: 25px 10px 20px 10px;
            text-align: center;
            background: #0d6efd;
            color: white;
            font-size: 20px;
        }

        .menu {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .menu-profile {
            display: flex;
            align-items: center;
        }

        .profile-link {
            padding-left: 20px;
            text-decoration: none;
            color: white;
        }

        .profile-icon {
            width: 30px;
            height: 30px;
            background: white;
            border-radius: 50px;
        }

        .menu-link {
            text-decoration: none;
            padding: 5px;
            color: #E7E5DD;
            border-radius: 12px;
        }

        .menu-link:hover {
            color: black;
            background: #E7E5DD;
        }

        .conteiner {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .task-input-form {
            display: flex;
            flex-direction: column;
            width: 320px;
        }

        .input-task-title {
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .input-task-description {
            padding: 30px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .input-form-submit-btn {
            display: inline-block;
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
            padding: 1rem 1.5rem;
            text-decoration: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .input-form-submit-btn:hover {
            background-color: white;
            color: black;
        }

        .task-list {
            width: 320px;
        }

        .task-layout {
            display: flex;
            flex-direction: column;
            width: inherit;
            border: 1px solid blue;
            border-radius: 18px;
            padding: 20px 10px 20px 10px;
            margin-top: 23px;
            box-sizing: border-box;
        }

        .task-title {
            font-size: 20px;
            text-decoration: underline;
            margin-bottom: 10px;
        }

        .done-btn {
            color: #fff;
            background-color: #0d6efd;
            text-decoration: none;
            border: 1px solid #0d6efd;
            border-radius: 3px;
            cursor: pointer;
            padding: 5px 2px 5px 2px;
            width: fit-content;
            margin-top: 19px;
        }

        .done-btn:hover {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <header>
        <?php include "menu.php" ?>
    </header>
    <div class="conteiner">
        <h3>Добавить задачу: </h3>
        <form class="task-input-form" action="/?controller=tasks&action=add" method="post">
            <input class="input-task-title" type="text" name="task" placeholder="Задача...">
            <input class="input-task-description" type="text" name="description" placeholder="Опишите свою задачу">
            <input class="input-form-submit-btn" type="submit" value="Добавить">
        </form>
        <h3>Ваши задачи:</h3>
        <?php foreach ($tasks as $task) : ?>
            <div class="task-list">
                <div class="task-layout">
                    <div class="task-title">
                        <?= $task->getTitle() ?>
                    </div>
                    <div class="task-description">
                        <?= $task->getDescription() ?>
                    </div>
                    <a class="done-btn" href="title=<?= $task->getTitle() ?>">Выполнено</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
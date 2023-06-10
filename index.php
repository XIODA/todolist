<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        head {
            margin: 0;
        }

        body {
            color: azure;
            background-color: #F3E0EC;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
        }

        .main {
            background-color: #CA9CE1;
            width: 500px;
            height: 40px;
            text-align: center;
            margin-left: 32%;
            margin-top: 20px;
            padding-top: 20px;
            border-radius: 10px;
            font-size: 20px;
        }

        .content {
            background-color: #685F74;
            width: 500px;
            height: 600px;
            text-align: center;
            margin-left: 32%;
            padding-top: 20px;
            border-radius: 5px;
            font-size: 15px;
        }

        .todos {
            margin-top: 10px;
            margin-left: 20px;
            text-align: start;
            font-size: large;
        }

        th {
            /* width: 40px; */
            padding-left: 40px;
            padding-top: 20px;
        }

        .button {
            font-size: 15px;
            color: white;
            background-color: #EAD5E6;
            border-radius: 20%;
            cursor: pointer;

        }

        input {
            border: 0;
            outline: none;
        }

        input[type=text] {
            border: 2px solid white;
            border-radius: 6px;
            text-align: center;
            background-image: url('searchicon.png');

        }
        td{
            font-size: 17px;
            padding-left:40px;
            padding-top: 15px;

            
        }
    </style>
</head>

<body>
    <div id="" class="main">To Do List</div>
    <div id="" class="content">
        <form>
            <input type="text" id="text" placeholder="請輸入代辦事項">
            <input type="submit" value="Add" class="button">
        </form>

        <div class="todos">Todos:
            <table>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </table>
        </div>
        <hr />
        <br />
        <br />
        <div class="todos">Done:
            <table>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>安安</td>
                    <td>2023-06-10</td>
                    <td>新增 修改 刪除</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>安安</td>
                    <td>2023-06-10</td>
                    <td>新增 修改 刪除</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>安安</td>
                    <td>2023-06-10</td>
                    <td>新增 修改 刪除</td>
                </tr>
            </table>


        </div>
    </div>
    </div>
</body>

</html>
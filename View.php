<html>
<head>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
        function setTable(){
            var table_id = $('#setTable').val();
            $.ajax({
                type: "GET",
                url: "index.php",
                data: {id:table_id}
            }).done(function( result )
            {
                $(".res").html( result );
            });
        }
    </script>

</head>

<body>
    <div class="res">
        <div >
            <table id="tbl" border="1px" >

            <? foreach ($matrix as $x => $row) : ?>

            <tr>
                <? foreach ($row as $y => $cell) :?>

                    <td <? if ($cell == 1) :?> bgcolor="#FF0000" <? endif;?>></td>

                <? endforeach; ?>
            </tr>

            <? endforeach; ?>

            </table>
        </div>

        <div>
            <form action="index.php" method="POST">
            <button type="submit" name="showTable">Заполнить</button>
            </form>
        </div>
        <div>
            <button type="submit" id="setTable" onClick = "setTable()">Изменить</button>
        </div>

    </div>
</body>
</html>

<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Comentario</th>
            </tr>
        </thead>
        <?php
            foreach ($userArray as $key => $value) {
                // echo "<pre>";
                // print_r($value);
                // echo "<pre>";
            echo "<tbody>
                    <tr>
                       <td>".$value->email."</td>
                       <td>".$value->name."</td>
                    </tr>
                </tbody>";
    }
    ?>
    </table>
    <br><br>
</div>
<div class="container">
<div id="tableHolder">
    <table >
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
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
                       <td>".$value->name."</td>
                       <td>".$value->email."</td>
                       <td>".$value->textarea."</td>
                    </tr>
                </tbody>";
    }
    ?>
    </table>
    <br><br>
</div>
</div>
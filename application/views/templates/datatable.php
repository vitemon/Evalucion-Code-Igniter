    <div class="container">
        <div id="tableHolder">
            <div class="center">
                <h2>Tabla de Comentarios</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Correo Electrónico</th>
                        <th>Comentario</th>
                    </tr>
                </thead>
                <?php
                foreach ($userArray as $key => $value)
                {
                echo "<tbody>
                    <tr>
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
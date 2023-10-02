

</style>
</html>

<table class="default">



    <tr>

        <th colspan="2">RADAR ELECTRONICA</th>

        <th colspan="1">Original</th>

        <th colspan="2">Contrato de Reparación</th>

    </tr>

    <tr>
        <th></th>
        <th><i>de Enri Cravero</i></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>

    <tr>
        <td>
            <dd>Moreno 286</dd>
            <dd>Huinca Renancó</dd>
        </td>

        <td>
            <dd>Tel 02336-495797</dd>
            <dd>WSP 2302521788</dd>
        </td>

        <td></td>

        <td>
            <ul>
                <dl>Orden de Reparación: <?= $ordenDeReparacion->id ?></dl>
                <dl>Fecha de Ingreso: <?= $ordenDeReparacion->fechaIngreso->format("d/m/Y"); ?></dl>
                <dl>Aparato: <?= $ordenDeReparacion->aparato ?></dl>
                <dl>Marca: <?= $ordenDeReparacion->marca ?></dl>
                <dl>Modelo: <?= $ordenDeReparacion->modelo ?></dl>
                <dl>Accesorios: <?= $ordenDeReparacion->accesorios ?></dl>
                <dl>Titular: <?= $ordenDeReparacion->titular ?></dl>
            </ul>
        </td>

    </tr>

    <tr>
        <th></th>
        <td></td>

        <td>35 km</td>

        <td>30 km</td>

        <td>35 km</td>

    </tr>

</table>




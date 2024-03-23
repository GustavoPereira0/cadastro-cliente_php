<?php
include 'conecta.php';
$pessoa = mysqli_query($conn, "SELECT * FROM pessoa");
$registros = mysqli_num_rows($pessoa);
if ($registros > 0) {
    echo "<table class='table table-hover'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NOME</th>";
    echo "<th>CELULAR</th>";
    echo "<th>E-MAIL</th>";
    echo "<th>AÇÕES</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($reg = $pessoa->fetch_array()) {
        $id = $reg['id'];
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $reg['nome'] . "</td>";
        echo "<td>" . $reg['celular'] . "</td>";
        echo "<td>" . $reg['email'] . "</td>";
        echo "<td><a href= 'editar.php?id=$id'><svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='Navy' class='bi bi-pencil-square' viewBox='0 0 16 16'>
        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
      </svg></a> | <a href='excluir.php?id=$id'><svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='red' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
      <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
    </svg></a></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='grey31' class='bi bi-hand-thumbs-down-fill' viewBox='0 0 16 16'>
        <path d='M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.38 1.38 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51q.205.03.443.051c.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.9 1.9 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2 2 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.2 3.2 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.8 4.8 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591'/>
      </svg>";
    echo "<br/>";
    echo "<center><h2><b>NÃO EXISTEM REGISTROS!</b></h2></center>";
}
echo "<b>Total de Registros: </b> " . $registros;

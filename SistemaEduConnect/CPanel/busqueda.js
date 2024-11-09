document.getElementById('consultar').addEventListener('click', function() {
    const busqueda = document.getElementById('caja_busqueda').value;
    fetch('busqueda_inasistencias.php?busqueda=' + busqueda)
        .then(response => response.json())
        .then(data => {
            let resultado = '';
            data.forEach(item => {
                resultado += `Fecha Inicio: ${item.fecha_inicio}, Fecha Fin: ${item.fecha_fin}, Motivo: ${item.Motivo}\n`;
            });
            document.getElementById('busqueda').innerText = resultado;
        })
        .catch(error => console.error('Error:', error));
});

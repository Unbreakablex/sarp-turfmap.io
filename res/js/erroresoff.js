$.ajax({
    url: 'https://unbreakablex.github.io/sarp-turfmap.io/engine.json.php',
    type: 'GET',
    dataType: 'json',
    success: function(response) {
        console.log(response);
    },
    error: function(xhr, status, error) {
        console.error('Error:', error);
        console.error('Respuesta completa:', xhr.responseText);
    }
});

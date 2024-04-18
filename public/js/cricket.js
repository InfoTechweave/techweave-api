
$(document).ready(function() {
    var PROJ_KEY = 'RS_P_1765988307742887937';
    var API_TOKEN = localStorage.getItem('rs-token'); 
    if (!API_TOKEN) {
        console.error('API_TOKEN not found in localStorage.');
        $('#error-message').text('API Token not found. Please log in or refresh the page.');
        return; 
    }
    $.ajax({
        url: 'https://api.sports.roanuz.com/v5/cricket/'+ PROJ_KEY +'/featured-matches-2/',
        type: 'GET',
        beforeSend: function(xhr) {
            console.log('Token type:',  API_TOKEN); 
            xhr.setRequestHeader('Authorization', 'Bearer ' + API_TOKEN);
        },
        success: function(response) {
            $('#api-response').text(JSON.stringify(response));
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            $('#error-message').text('Error fetching data from the API. Please try again later.');
        }
    });
});




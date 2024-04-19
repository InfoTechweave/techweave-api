
// $(document).ready(function() {
    // var PROJ_KEY = 'RS_P_1765988307742887937';
    // var API_TOKEN = localStorage.getItem('rs-token'); 
    // if (!API_TOKEN) {
    //     console.error('API_TOKEN not found in localStorage.');
    //     $('#error-message').text('API Token not found. Please log in or refresh the page.');
    //     return; 
    // }
   
    //   $.ajax({
    //     url: "/fetch-matches",
    //     method: "POST",
    //     headers: {
    //         "X-CSRF-TOKEN": "{{ csrf_token() }}" // Include the CSRF token from Laravel Blade
    //     },
    //     data: {
    //         code: PROJ_KEY, // Replace with your code,
    //         token:API_TOKEN
    //     },
    //     success: function(response) {
    //         // Handle the successful response here
    //         console.log("Response from API:", response);
    //         // You can do something with the response, such as updating the page
    //     },
    //     error: function(jqXHR, textStatus, errorThrown) {
    //         // Handle the error response here
    //         console.error("API request failed:", textStatus, errorThrown);
    //         // Optionally, you can display an error message to the user
    //     }
    // });

    // $.ajax({
    //     url: 'https://api.sports.roanuz.com/v5/cricket/'+ PROJ_KEY +'/featured-matches-2/',
    //     type: 'GET',
    //     beforeSend: function(xhr) {
    //         console.log('Token type:',  API_TOKEN); 
    //         xhr.setRequestHeader('rs-token',  API_TOKEN);
    //         xhr.setRequestHeader('Access-Control-Allow-Origin',  '*');
            
    //     },
    //     success: function(response) {
    //         $('#api-response').text(JSON.stringify(response));
    //     },
    //     error: function(xhr, status, error) {
    //         console.error(xhr.responseText);
    //         $('#error-message').text('Error fetching data from the API. Please try again later.');
    //     }
    // });
// });






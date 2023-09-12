// JavaScript/jQuery code
function editMovie(movieId) {
    // Send an AJAX request to fetch the movie data by its ID
    $.ajax({
        url: 'fetch_movie_data.php', // Create a PHP file for fetching data
        method: 'POST',
        data: { movie_id: movieId },
        dataType: 'json',
        success: function (response) {
            // Populate the input fields with the fetched data
            $('#txtsuaNamephim').val(response.ten_phim);
            $('#txtsuadaodien').val(response.dao_dien);
            $('#txtsuadienvien').val(response.dien_vien);
            $('#suatxtmota').val(response.mo_ta_phim);
            $('#myModal').modal('show'); // Show the modal
        },
        error: function () {
            alert('Failed to fetch movie data.');
        }
    });
}
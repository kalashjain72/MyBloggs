window.onload = function() {
    // Get the current date
    let today = new Date();

    // Get the date in YYYY-MM-DD format
    let date = today.toISOString().substr(0, 10);

    // Set the date value of the input element
    document.getElementById("date").value = date;
}
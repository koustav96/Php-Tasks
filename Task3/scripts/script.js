function fullName() {
    // Get the values from the first name and last name.
    var firstName = document.getElementById('first_name').value;
    var lastName = document.getElementById('last_name').value;

    // Add the values and display it on full name field.
    var fullNameField = document.getElementById('full_name');
    fullNameField.value = firstName + ' ' + lastName;
}

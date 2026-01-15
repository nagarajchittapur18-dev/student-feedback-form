function validateForm() {
    let name = document.getElementById("name").value;
    let subject = document.getElementById("subject").value;
    let rating = document.getElementById("rating").value;

    if (name === "" || subject === "" || rating === "") {
        alert("Please fill all required fields");
        return false;
    }
    return true;
}

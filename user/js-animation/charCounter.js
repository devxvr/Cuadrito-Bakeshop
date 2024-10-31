function updateCounter() {
    let textEntered = document.getElementById("message").value;
    let charCount = 1000 - textEntered.length;
    document.getElementById("charCount").innerText = charCount;
}
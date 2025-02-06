function navigateTo(url) {
    window.location.href = url; // Navigate to the given URL
}
function validateNumberInput(event) {
    const input = event.target;
    input.value = input.value.replace(/[^0-9 ]/g, "");
  }


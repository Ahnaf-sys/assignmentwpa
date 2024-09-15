function calculateBMI() {
    var weight = document.getElementById('weight').value;
    var height = document.getElementById('height').value;
    
    // Ensure the inputs are valid numbers
    if (isNaN(weight) || isNaN(height)) {
        alert('Please enter valid numbers for weight and height.');
        return;
    }
    
    // Convert height to meters if it's in centimeters
    if (height > 100) {
        height /= 100;
    }
    
    var bmi = weight / (height * height);
    var result = document.getElementById('bmi-result');
    result.innerHTML = 'Your BMI is: ' + bmi.toFixed(2);
}
/*function login() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    const apiUrl = 'YOUR_API_URL';

    const loginEndpoint = '/login';

    fetch(apiUrl + loginEndpoint, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ username, password }),
    })
    .then(response => response.json())
    .then(data => {
        // Handle the response from the API
        if (data.success) {
            document.getElementById('loginMessage').innerText = 'Login successful';
            
            // Redirect to index.html
            window.location.href = 'index.html';
        } else {
            document.getElementById('loginMessage').innerText = 'Login failed. Please check your credentials.';
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('loginMessage').innerText = 'An error occurred during login.';
    });
}
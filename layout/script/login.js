import { login } from "../api/api.js";

function handleLogin(token, userId, name) {
    localStorage.setItem('token', token);
    localStorage.setItem('userId', userId);
    localStorage.setItem('name', name);
}

async function handleSubmit(e) {
    e.preventDefault();

    const email = document.querySelector('input[name="id"]').value;
    const pass = document.querySelector('input[name="passw"]').value;

    const userData = {
        email: email,
        password: pass
    };

    try {
        const response = await login(userData);
        handleLogin(response.token, response.userId, response.Name);
        console.log(response);
    } catch (error) {
        console.log(error.message);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form.containerLogin');
    form.addEventListener('submit', handleSubmit);
});
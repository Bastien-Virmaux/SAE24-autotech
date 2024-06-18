const API_URL = 'http://192.168.0.110:3000/api';

export const signup = async (userData) => {
    try {
        const req = await fetch(`${API_URL}/auth/signup`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(userData)
        });

        if (!req.ok) {
            const errorData = await req.json();
            throw new Error(errorData.error);
        }

        return req.json();
    } catch (error) {
        throw new Error("Erreur lors de l'inscription " + error.message);
    }
};

export const login = async (userData) => {
    try {
        const req = await fetch(`${API_URL}/auth/login` , {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(userData)
        });

        if (!req.ok) {
            const errorData = await req.json();
            throw new Error(errorData.error);
        }

        return req.json();

    } catch (error) {
        throw new Error(error.message);
    }
};
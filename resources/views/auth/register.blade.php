@vite(['resources/css/app.css', 'resources/js/app.js'])

<div
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div class="text-center">
            <img class="mx-auto h-16 w-16 animate-bounce" src="https://img.icons8.com/clouds/100/000000/guest-male.png"
                alt="User icon">
            <h2 class="mt-6 text-center text-4xl font-extrabold text-gray-900 transform transition hover:scale-105">
                Join Our Community
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Already have an account?
                <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Sign in here
                </a>
            </p>
        </div>

        <form id="registerForm"
            class="mt-8 space-y-6 bg-white p-10 rounded-2xl shadow-xl transition-all duration-300 hover:shadow-2xl">
            <div class="rounded-md shadow-sm space-y-4">
                <div>
                    <label for="name" class="sr-only">Name</label>
                    <div class="relative">
                        <input id="name" name="name" type="text" autocomplete="name" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent placeholder-gray-500 transition-all"
                            placeholder="Full Name">
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M5 5a5 5 0 0110 0v2A5 5 0 015 7V5zM0 16.68A19.9 19.9 0 0110 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="email" class="sr-only">Email address</label>
                    <div class="relative">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent placeholder-gray-500 transition-all"
                            placeholder="Email Address">
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <div class="relative">
                        <input id="password" name="password" type="password" autocomplete="new-password" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent placeholder-gray-500 transition-all"
                            placeholder="Password">
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <div class="relative">
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent placeholder-gray-500 transition-all"
                            placeholder="Confirm Password">
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div id="error-message" class="hidden text-red-600 text-sm text-center"></div>

            <button type="submit"
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg
                       text-white bg-gradient-to-r from-indigo-500 to-blue-500 hover:from-indigo-600 hover:to-blue-600
                       font-medium shadow-md hover:shadow-lg transform transition-all duration-200 hover:-translate-y-0.5">
                Create Account
            </button>
        </form>

        <script>
            document.getElementById('registerForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const errorMessage = document.getElementById('error-message');
                errorMessage.classList.add('hidden');

                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                const passwordConfirmation = document.getElementById('password_confirmation').value;

                // Client-side validation
                if (password !== passwordConfirmation) {
                    errorMessage.textContent = "Passwords do not match!";
                    errorMessage.classList.remove('hidden');
                    return;
                }

                axios.post('/api/register', {
                        name: name,
                        email: email,
                        password: password,
                        password_confirmation: passwordConfirmation
                    })
                    .then(response => {
                        if (response.data.redirect) {
                            window.location.href = response.data.redirect;
                        } else {
                            window.location.href = '/dashboard';
                        }
                    })
                    .catch(error => {
                        if (error.response) {
                            const errors = error.response.data.errors || {};
                            let errorText = 'Registration failed. Please check your information.';

                            if (errors.email) errorText = errors.email[0];
                            if (errors.password) errorText = errors.password[0];

                            errorMessage.textContent = errorText;
                            errorMessage.classList.remove('hidden');
                        } else {
                            errorMessage.textContent = 'Network error. Please try again.';
                            errorMessage.classList.remove('hidden');
                        }
                    });
            });
        </script>
    </div>
</div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <div class="mb-8 text-center">
            <h2 class="text-2xl font-bold text-blue-500">Welcome to Scholar Verse</h2>
            <p class="text-gray-600">Create your account</p>
        </div>

        <form id="registerForm" action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Progress bar -->
            <div class="mb-4">
                <div class="flex justify-between mb-1">
                    <span class="text-sm font-medium text-blue-500 dark:text-white" id="progressText">Step 1/3</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                    <div class="bg-blue-600 h-2.5 rounded-full" id="progressBar" style="width: 33%"></div>
                </div>
            </div>

            <!-- Step 1: Basic Information -->
            <div id="step1" class="step">
                <h3 class="text-lg font-semibold mb-4">Basic Information</h3>
                <div class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                            required>
                    </div>
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" id="username" name="username"
                            class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                            required>
                    </div>
                </div>
            </div>

            <!-- Step 2: Account Details -->
            <div id="step2" class="step hidden">
                <h3 class="text-lg font-semibold mb-4">Account Details</h3>
                <div class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email"
                            class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                            required>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password"
                            class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                            required>
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi
                            Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                            required>
                    </div>
                </div>
            </div>

            <!-- Step 3: Verification -->
            <div id="step3" class="step hidden">
                <h3 class="text-lg font-semibold mb-4">Verification</h3>
                <div class="space-y-4">
                    <div>
                        <label for="otp" class="block text-sm font-medium text-gray-700">Masukkan Kode
                            Verifikasi</label>
                        <div class="flex justify-between mt-2">
                            <input type="text" maxlength="1"
                                class="otp-input w-12 h-12 text-center text-xl border-2 border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                required>
                            <input type="text" maxlength="1"
                                class="otp-input w-12 h-12 text-center text-xl border-2 border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                required>
                            <input type="text" maxlength="1"
                                class="otp-input w-12 h-12 text-center text-xl border-2 border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                required>
                            <input type="text" maxlength="1"
                                class="otp-input w-12 h-12 text-center text-xl border-2 border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                required>
                            <input type="text" maxlength="1"
                                class="otp-input w-12 h-12 text-center text-xl border-2 border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                required>
                            <input type="text" maxlength="1"
                                class="otp-input w-12 h-12 text-center text-xl border-2 border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                required>
                        </div>
                        <input type="hidden" id="otp" name="otp">
                    </div>
                    <p class="text-sm text-gray-500">Kode verifikasi telah dikirim ke email Anda. Berlaku selama 5
                        menit.</p>
                </div>
            </div>

            <div class="flex justify-between gap-4">
                <button type="button" id="prevBtn"
                    class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 hidden">Previous</button>
                <button type="button" id="nextBtn"
                    class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Next</button>
                <button type="submit" id="submitBtn"
                    class="bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50 hidden">Register</button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Already have an account? Login</a>
        </div>
    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 3;
        const form = document.getElementById('registerForm');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const submitBtn = document.getElementById('submitBtn');
        const progressBar = document.getElementById('progressBar');
        const progressText = document.getElementById('progressText');
        const otpInputs = document.querySelectorAll('.otp-input');
        const hiddenOtpInput = document.getElementById('otp');

        function updateStep(step) {
            document.querySelectorAll('.step').forEach(s => s.classList.add('hidden'));
            document.getElementById(`step${step}`).classList.remove('hidden');
            progressBar.style.width = `${(step / totalSteps) * 100}%`;
            progressText.textContent = `Step ${step}/${totalSteps}`;

            prevBtn.classList.toggle('hidden', step === 1);
            nextBtn.classList.toggle('hidden', step === totalSteps);
            submitBtn.classList.toggle('hidden', step !== totalSteps);
        }

        nextBtn.addEventListener('click', () => {
            if (currentStep < totalSteps) {
                if (currentStep === 2) {
                    // Trigger email verification before moving to step 3
                    sendVerificationEmail().then(() => {
                        currentStep++;
                        updateStep(currentStep);
                    });
                } else {
                    currentStep++;
                    updateStep(currentStep);
                }
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                updateStep(currentStep);
            }
        });

        function sendVerificationEmail() {
            const email = document.getElementById('email').value;
            return fetch('{{ route('send.verification.email') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        email: email
                    })
                })
                .then(response => {
                    console.log('Response Status:', response.status); // Menampilkan status
                    console.log('Response Status Text:', response.statusText); // Menampilkan status text
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text(); // Ubah ini dari response.json()
                })
                .then(text => {
                    console.log('Raw response:', text); // Cetak respons mentah
                    try {
                        return JSON.parse(text); // Coba parse sebagai JSON
                    } catch (error) {
                        console.error('Failed to parse JSON:', error);
                        throw new Error('Server returned non-JSON response');
                    }
                })
                .then(data => {
                    if (data.success) {
                        alert('Kode verifikasi berhasil dikirim ke email Anda.');
                    } else {
                        throw new Error(data.message || 'Unknown error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengirim kode verifikasi: ' + error.message);
                });
        }


        otpInputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                if (e.target.value.length === 1) {
                    if (index < otpInputs.length - 1) {
                        otpInputs[index + 1].focus();
                    }
                }
                updateHiddenOtpInput();
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && e.target.value.length === 0) {
                    if (index > 0) {
                        otpInputs[index - 1].focus();
                    }
                }
            });
        });

        function updateHiddenOtpInput() {
            hiddenOtpInput.value = Array.from(otpInputs).map(input => input.value).join('');
        }

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            // Add your form validation logic here
            // If validation passes, you can submit the form
            form.submit();
        });
    </script>
</body>

</html>

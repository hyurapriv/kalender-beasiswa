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
                    <div>
                        <label for="no_hp" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                        <input type="tel" id="no_hp" name="no_hp"
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
                        <label for="otp" class="block text-sm font-medium text-gray-700">Masukkan OTP</label>
                        <input type="text" id="otp" name="otp"
                            class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                            required>
                    </div>
                    <p class="text-sm text-gray-500">OTP telah dikirim ke nomor HP Anda. Berlaku selama 5 menit.</p>
                </div>
            </div>
            <div id="step3" class="step hidden">
                <h3 class="text-lg font-semibold mb-4">Verification</h3>
                <div class="space-y-4">
                    <div>
                        <label for="otp" class="block text-sm font-medium text-gray-700">Masukkan OTP</label>
                        <input type="text" id="otp" name="otp"
                            class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                            required>
                    </div>
                    <p class="text-sm text-gray-500">OTP telah dikirim ke nomor HP Anda. Berlaku selama 5 menit.</p>
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
                    // Trigger OTP sending before moving to step 3
                    sendOTP().then(() => {
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

        function sendOTP() {
            const no_hp = document.getElementById('no_hp').value;
            return fetch('{{ route('send.otp') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        no_hp: no_hp
                    })
                })
                .then(response => {
                    if (!response.ok) {
                        return response.text().then(text => {
                            throw new Error(text)
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        alert('OTP berhasil dikirim ke nomor HP Anda.');
                    } else {
                        throw new Error(data.message || 'Unknown error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengirim OTP: ' + error.message);
                    throw error;
                });
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

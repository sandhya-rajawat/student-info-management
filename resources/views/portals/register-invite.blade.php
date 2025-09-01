@vite('resources/css/app.css')

<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">

        {{-- Heading --}}
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Complete Your Registration
        </h2>

        <form action="{{ route('register-invite.store') }}" method="POST" class="space-y-5" enctype="multipart/form-data">
            @csrf

            {{-- Show all validation errors on top --}}
            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded">
                    <ul class="list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <input type="hidden" name="email" value="{{ $invite->email }}">

            {{-- Name --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>

            {{-- Image --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                <input type="file" name="image" required
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>

            {{-- Email --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="text" value="{{ $invite->email }}" disabled
                    class="w-full px-4 py-2 border rounded-lg bg-gray-100 text-gray-500 cursor-not-allowed">
            </div>

            {{-- Phone --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                <input type="text" name="phone" value="{{ old('phone') }}"
                    class="w-full px-4 py-2 border rounded-lg bg-white text-gray-800"
                    placeholder="Enter your phone number" required>
            </div>

            {{-- Gender --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                <select name="gender" required
                    class="w-full px-4 py-2 border rounded-lg bg-white text-gray-800">
                    <option value="" disabled {{ old('gender') ? '' : 'selected' }}>Select your gender</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            {{-- Password --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>

            {{-- Confirm Password --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" required
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>

            {{-- Submit --}}
            <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-lg font-semibold hover:bg-indigo-700 transition duration-200">
                Register
            </button>
        </form>
    </div>
</div>
    
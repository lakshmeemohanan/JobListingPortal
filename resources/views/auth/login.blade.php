<x-layout>
    <div class="bg-white rounded-lg shadow-md w-full md:max-w-xl mx-auto mt-12 p-8 py-12">
        <h2 class="text-4xl text-center font-bold mb-4">Login</h2>
        <form method="POST" action={{route('login.authenticate')}} >
            @csrf
            <x-inputs.text id="email" type="email" name="email" placeholder="Email ID" />
            <x-inputs.text id="password" type="password" name="password" placeholder="Password" />
            <x-inputs.button label="Login" type="submit" />
            <p class="mt-4 text-gray-400">Dont have an account?<a class="text-blue-900" href="{{route('register')}}">Register</a></p>
        </form>
    </div>
</x-layout>
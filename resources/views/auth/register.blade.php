<x-layout>
    <div class="bg-white rounded-lg shadow-md w-full md:max-w-xl mx-auto mt-12 p-8 py-12">
        <h2 class="text-4xl text-center font-bold mb-4">Register</h2>
        <form method="POST" action={{route('register.store')}} >
            @csrf
            <x-inputs.text id="name" name="name" placeholder="Fullname" />
            <x-inputs.text id="email" type="email" name="email" placeholder="Email ID" />
            <x-inputs.text id="password" type="password" name="password" placeholder="Password" />
            <x-inputs.text id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password" />
            <x-inputs.button label="Register" type="submit" />
            <p class="mt-4 text-gray-400">Already have an account?<a class="text-blue-900" href="{{route('login')}}">Login</a></p>
        </form>
    </div>
</x-layout>
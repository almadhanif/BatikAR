@extends('Auth.layout')

@section('title')
    Login
@endsection

@section('content')
<div
class="relative py-16 before:absolute before:inset-0 before:w-full before:h-[50%] before:bg-gradient-to-tr from-white to-putihsusu"
>
<div
  class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40"
>
  <div class="m-auto space-y-8 md:w-8/12 lg:w-full">
    <div>
      <a href="{{ url('/') }}">
        <img
          src="{{ asset('images/logo-transparent-small.png') }}"
          loading="lazy"
          class="w-60 h-20 ml-4 lg:hidden"
          alt="fit batik poster"
        />
      </a>
    </div>
    <div
      class="rounded-xl border bg-opacity-50 backdrop-blur-sm bg-[#373737] shadow-xl"
    >
      <div class="lg:grid lg:grid-cols-2">
        <div class="rounded-lg lg:block" hidden>
          <img
            src="{{ asset('images/login.png') }}"
            class="rounded-l-xl object-cover"
            loading="lazy"
            alt="background Login"
          />
        </div>
        <div class="p-6 sm:p-16">
          <h2 class="mb-8 text-2xl text-white font-bold">
            Sign in to your account
          </h2>
          @if (session('success'))
              <span class="text-green-600">{{ session('success') }}</span>
          @endif
          @if ($errors->any())
              @foreach ($errors->all() as $error)
                  <div class="text-red-600">{{ $error }}</div>
              @endforeach
          @endif
          <form action="{{ route('login.action') }}" method="POST" class="space-y-8">
            @csrf
            <div class="space-y-2">
              <label for="email" class="text-white">Email</label>
              <input
                type="email"
                name="email"
                id="email"
                class="block w-full px-4 py-3 rounded-md border border-gray-300 text-gray-600 transition duration-300 focus:ring-2 focus:ring-sky-300 focus:outline-none invalid:ring-2 invalid:ring-red-400"
              />
            </div>

            <div>
              <div class="flex items-center justify-between">
                <label for="pwd" class="text-white">Password</label>
              </div>
              <input
                type="password"
                name="password"
                id="pwd"
                class="block w-full px-4 py-3 rounded-md border border-gray-300 text-gray-600 transition duration-300 focus:ring-2 focus:ring-sky-300 focus:outline-none invalid:ring-2 invalid:ring-red-400"
              />
            </div>

            <button
              id="submit"
              class="w-full py-3 px-6 rounded-md bg-[#FFD700] active:bg-[#ffd900e0]"
            >
              <span class="text-[#373737]  font-bold">Login</span>
            </button>

            <p class="border-t pt-6 text-sm text-gray-200">
              Belum Memiliki Akun ?
              <a href="{{ route('register') }}" class="text-[#FFD700]">Sign up</a>
            </p>
          </form>
          <div class="text-center mt-20 text-gray-300 font-inter font-bold space-x-4">
            <span>&copy; Fit Batik</span>
            <a href="#" class="text-sm hover:text-white">Contact</a>
            <a href="#" class="text-sm hover:text-white">Privacy & Terms</a>
          </div>
        </div>
        
      </div>
    </div>
    
  </div>
</div>
</div>
@endsection
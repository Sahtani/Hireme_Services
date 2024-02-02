<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<div class="font-[sans-serif] text-gray-800 bg-white max-w-4xl flex items-center mx-auto md:h-screen p-4">
    <div class="grid md:grid-cols-3 items-center shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-xl overflow-hidden">
      <div class="max-md:order-1 flex flex-col justify-center space-y-16 max-md:mt-16 min-h-full bg-gradient-to-r from-orange-500 to-orange-400 lg:px-8 px-4 py-4">
        <div>
          <h4 class="text-white text-lg font-semibold">Create Your Annonce</h4>
          <p class="text-[13px] text-white mt-2">Welcome to our registration page! Get started by creating your account.</p>
        </div>
        <div>
          <h4 class="text-white text-lg font-semibold">Simple & Secure Registration</h4>
          <p class="text-[13px] text-white mt-2">Our registration process is designed to be straightforward and secure. We prioritize your privacy and data security.</p>
        </div>
      </div>
      <form class="md:col-span-2 w-full py-6 px-6 sm:px-16" method="post" action="{{route('store')}}">
       
       @csrf
        <div class="space-y-5">
          <div>
            <label class="text-sm mb-2 block">Title</label>
            <div class="relative flex items-center">
              <input name="title" type="text"  class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded-md outline-blue-500" placeholder="Enter title" value="{{ old('title') }}" />
              <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-4 h-4 absolute right-4" viewBox="0 0 24 24">
                <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z" data-original="#000000"></path>
              </svg>
            </div>
            <div class="text-red-500">
              @error('title')
              {{ $message }}
              @enderror
            </div>
          </div>
          <div>
            <label class="text-sm mb-2 block">Description</label>
            <div class="relative flex items-center">
              <textarea name="desc" type="text"  class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded-md outline-blue-500" placeholder="Enter content">{{old('desc')}}</textarea>
        
            </div>
          </div>
          <div class="text-red-500">
            @error('desc')
            {{ $message }}
            @enderror
          </div>
          <div>
            <label class="text-sm mb-2 block">Cost</label>
            <div class="relative flex items-center">
              <input name="cost" type="number" class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded-md outline-blue-500" placeholder="Enter title" value="{{old('cost')}}"/>
        
            </div>
          </div>
          <div class="text-red-500">
            @error('cost')
            {{ $message }}
            @enderror
          </div>
          <div>
            <label class="text-sm mb-2 block">Category</label>
          
               <select id="" name="cat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('cat')}}">
                @foreach ( $categories as $categorie )
                <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
       
            @endforeach
                </select>

          </div>
          <div class="text-red-500">
            @error('cat')
            {{ $message }}
            @enderror
          </div>
          <div>
            <label class="text-sm mb-2 block">Email</label>
            <div class="relative flex items-center">
              <input name="email" type="email"  class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded-md outline-blue-500" placeholder="Enter email" value="{{old('email')}}"/>
              <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-4 h-4 absolute right-4" viewBox="0 0 682.667 682.667">
                <defs>
                  <clipPath id="a" clipPathUnits="userSpaceOnUse">
                    <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                  </clipPath>
                </defs>
                <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                  <path fill="none" stroke-miterlimit="10" stroke-width="40" d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z" data-original="#000000"></path>
                  <path d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z" data-original="#000000"></path>
                </g>
              </svg>
            </div>
          </div>
          <div class="text-red-500">
            @error('email')
            {{ $message }}
            @enderror
          </div>
          <div>
            <label for="phone" class="text-sm mb-2 block">Phone</label>
            <div class="relative flex items-center">
                <input 
                    id="phone" 
                    name="phone" 
                    type="tel"
                    class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded-md outline-blue-500" 
                    placeholder="Enter your phone number" 
                    value="{{ old('phone') }}" 
                />
            </div>
        </div>
        
          <div class="text-red-500">
            @error('phone')
            {{ $message }}
            @enderror
          </div>
          
        </div>
        <div class="!mt-10">
          <button type="submit" name="submit" class="w-full py-3 px-4 text-sm font-semibold rounded text-white bg-orange-500 hover:bg-gray-800 focus:outline-none">
            Create an 
          </button>
        </div>
       
      </form>
    </div>
  </div>
</html>

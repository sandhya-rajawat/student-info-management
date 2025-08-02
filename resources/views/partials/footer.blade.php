@vite('resources/css/app.css')

<footer class=" mt-20 h-60 backdrop-blur-md bg-gray-200 p-6 text-gray-800 shadow-md">
  <div class=" p-6 text-gray-800  ">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-1">
      
      <!-- Left: Logo + School Info -->
      <div class="flex items-center gap-4">
        <img src="{{ asset('image/logo.png') }}" alt="Logo" class="w-14 h-14 rounded-full">
        <div>
         <h1 class="text-xl font-bold text-blue-900">𝙎𝙝𝙞𝙠𝙨𝙝𝙖</h1>
          <p class="text-sm">123, ABC Street, Jaipur, Rajasthan</p>
          <p class="text-sm">Email: info@myschool.com</p>
        </div>
      </div>

      <!-- Right: Social Links -->
   
      <div class="flex gap-4">
       
        <a href="#"><img src="{{asset('image/whatsapp.png')}}" class="w-6"></a>
        <a href="#"><img src="{{asset('image/facebook.png')}}" class="w-6"></a>
        <a href="#"><img src="{{asset('image/twitter.png')}}" class="w-6"></a>
        <a href="#"><img src="{{asset('image/message.png')}}" class="w-6"></a>
    </div>

    </div>

</div>
   
</footer>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>




    <!-- component -->
    <!-- Inspired by slack ui clone https://tailwindcomponents.com/component/slack-clone-1 -->

    <div class="font-sans antialiased w-full h-screen flex">
        <!-- Sidebar / channel list -->
        <div class="bg-gray-900 text-purple-lighter flex-none w-1/4 p-6 hidden md:block overflow-scroll">

            <div class="cursor-pointer mb-1 p-2 flex gap-3 items-center border border-gray-900 rounded-lg hover:bg-gray-700">
                <div
                    class="bg-white h-12 w-12 flex items-center justify-center text-black text-2xl font-semibold rounded-3xl mb-1 overflow-hidden">
                    <img src="https://cdn.discordapp.com/embed/avatars/0.png" alt="">
                    
                </div>
                <h6 class=" font-bold text-xl text-white">facebook</h6> 
            </div>

            <hr class=" mb-2">

            <div class="cursor-pointer mb-1 p-2 flex gap-3 items-center border border-gray-900 rounded-lg hover:bg-gray-700">
                <div
                    class="bg-white h-12 w-12 flex items-center justify-center text-black text-2xl font-semibold rounded-3xl mb-1 overflow-hidden">
                    <img src="https://cdn.discordapp.com/embed/avatars/0.png" alt="">
                    
                </div>
                <h6 class=" font-bold text-xl text-white">facebook</h6> 
            </div>



            <div class="cursor-pointer mb-1 p-2 flex gap-3 items-center border border-gray-900 rounded-lg hover:bg-gray-700">
                <div
                    class="bg-white h-12 w-12 flex items-center justify-center text-black text-2xl font-semibold rounded-3xl mb-1 overflow-hidden">
                    <img src="https://cdn.discordapp.com/embed/avatars/0.png" alt="">
                    
                </div>
                <h6 class=" font-bold text-xl text-white">facebook</h6> 
            </div>

            <div class="cursor-pointer mb-1 p-2 flex gap-3 items-center border border-gray-900 rounded-lg hover:bg-gray-700">
                <div
                    class="bg-white h-12 w-12 flex items-center justify-center text-black text-2xl font-semibold rounded-3xl mb-1 overflow-hidden">
                    <img src="https://cdn.discordapp.com/embed/avatars/0.png" alt="">
                    
                </div>
                <h6 class=" font-bold text-xl text-white">facebook</h6> 
            </div>
            <div class="cursor-pointer mb-1 p-2 flex gap-3 items-center border border-gray-900 rounded-lg hover:bg-gray-700">
                <div
                    class="bg-white h-12 w-12 flex items-center justify-center text-black text-2xl font-semibold rounded-3xl mb-1 overflow-hidden">
                    <img src="https://cdn.discordapp.com/embed/avatars/0.png" alt="">
                    
                </div>
                <h6 class=" font-bold text-xl text-white">facebook</h6> 
            </div>
            
            <div class="cursor-pointer mb-1 p-2 flex gap-3 items-center border border-gray-900 rounded-lg hover:bg-gray-700">
                <div
                    class="bg-white h-12 w-12 flex items-center justify-center text-black text-2xl font-semibold rounded-3xl mb-1 overflow-hidden">
                    <img src="https://cdn.discordapp.com/embed/avatars/0.png" alt="">
                    
                </div>
                <h6 class=" font-bold text-xl text-white">facebook</h6> 
            </div>

            <div class="cursor-pointer mb-1 p-2 flex gap-3 items-center border border-gray-900 rounded-lg hover:bg-gray-700">
                <div
                    class="bg-white h-12 w-12 flex items-center justify-center text-black text-2xl font-semibold rounded-3xl mb-1 overflow-hidden">
                    <img src="https://cdn.discordapp.com/embed/avatars/0.png" alt="">
                    
                </div>
                <h6 class=" font-bold text-xl text-white">facebook</h6> 
            </div>

            <div class="cursor-pointer mb-1 p-2 flex gap-3 items-center border border-gray-900 rounded-lg hover:bg-gray-700">
                <div
                    class="bg-white h-12 w-12 flex items-center justify-center text-black text-2xl font-semibold rounded-3xl mb-1 overflow-hidden">
                    <img src="https://cdn.discordapp.com/embed/avatars/0.png" alt="">
                    
                </div>
                <h6 class=" font-bold text-xl text-white">facebook</h6> 
            </div>

            <div class="cursor-pointer mb-1 p-2 flex gap-3 items-center border border-gray-900 rounded-lg hover:bg-gray-700">
                <div
                    class="bg-white h-12 w-12 flex items-center justify-center text-black text-2xl font-semibold rounded-3xl mb-1 overflow-hidden">
                    <img src="https://cdn.discordapp.com/embed/avatars/0.png" alt="">
                    
                </div>
                <h6 class=" font-bold text-xl text-white">facebook</h6> 
            </div>


            <div class="cursor-pointer p-1 flex gap-2 border border-gray-900 rounded-lg hover:bg-gray-700">
                <div
                    class="bg-white opacity-25 h-9 w-9 flex items-center justify-center text-black text-2xl font-semibold rounded-3xl mb-1 overflow-hidden">
                    <svg class="fill-current h-10 w-10 block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M16 10c0 .553-.048 1-.601 1H11v4.399c0 .552-.447.601-1 .601-.553 0-1-.049-1-.601V11H4.601C4.049 11 4 10.553 4 10c0-.553.049-1 .601-1H9V4.601C9 4.048 9.447 4 10 4c.553 0 1 .048 1 .601V9h4.399c.553 0 .601.447.601 1z" />
                    </svg>
                </div>
                <p class=" text-gray-600 font-bold">ADD ROMS</p>
            </div>



        </div>
        
        <!-- Chat content -->
        <div class="flex-1 flex flex-col w-3/4 bg-gray-700 overflow-hidden">
            <!-- Top bar -->
            <div class="border-b border-gray-600 flex px-6 py-2 items-center flex-none shadow-xl">
                <div class="flex flex-col">
                    <h3 class="text-white mb-1 font-bold text-xl ">
                        <span class="text-gray-400">#</span> general
                    </h3>
                </div>
            </div>
            <!-- Chat messages -->
            <div class="px-6 py-4 flex-1 overflow-y-scroll">
----

    <div class="flex-1 h-fit">
            
            
            <!-- Chat Messages -->
            
               <!-- Incoming Message -->
               <div class="flex mb-4 cursor-pointer">
                 <div class="w-9 h-9 rounded-full flex items-center justify-center mr-2">
                   <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-8 h-8 rounded-full">
                 </div>
                 <div class="flex max-w-96 bg-white rounded-lg p-3 gap-3">
                   <p class="text-gray-700">Hey Bob, how's it going?</p>
                 </div>
               </div>
               
               <!-- Outgoing Message -->
               <div class="flex justify-end mb-4 cursor-pointer">
                 <div class="flex max-w-96 bg-indigo-500 text-white rounded-lg p-3 gap-3">
                   <p>Hi Alice! I'm good, just finished a great book. How about you?</p>
                 </div>
                 <div class="w-9 h-9 rounded-full flex items-center justify-center ml-2">
                   <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-8 h-8 rounded-full">
                 </div>
               </div>
               
               <!-- Incoming Message -->
               <div class="flex mb-4 cursor-pointer">
                 <div class="w-9 h-9 rounded-full flex items-center justify-center mr-2">
                   <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-8 h-8 rounded-full">
                 </div>
                 <div class="flex max-w-96 bg-white rounded-lg p-3 gap-3">
                   <p class="text-gray-700">That book sounds interesting! What's it about?</p>
                 </div>
               </div>
               
               <!-- Outgoing Message -->
               <div class="flex justify-end mb-4 cursor-pointer">
                 <div class="flex max-w-96 bg-indigo-500 text-white rounded-lg p-3 gap-3">
                   <p>It's about an astronaut stranded on Mars, trying to survive. Gripping stuff!</p>
                 </div>
                 <div class="w-9 h-9 rounded-full flex items-center justify-center ml-2">
                   <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-8 h-8 rounded-full">
                 </div>
               </div>
               
               <!-- Incoming Message -->
               <div class="flex mb-4 cursor-pointer">
                 <div class="w-9 h-9 rounded-full flex items-center justify-center mr-2">
                   <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-8 h-8 rounded-full">
                 </div>
                 <div class="flex max-w-96 bg-white rounded-lg p-3 gap-3">
                   <p class="text-gray-700">I'm intrigued! Maybe I'll borrow it from you when you're done?</p>
                 </div>
               </div>
               
               <!-- Outgoing Message -->
               <div class="flex justify-end mb-4 cursor-pointer">
                 <div class="flex max-w-96 bg-indigo-500 text-white rounded-lg p-3 gap-3">
                   <p>Of course! I'll drop it off at your place tomorrow.</p>
                 </div>
                 <div class="w-9 h-9 rounded-full flex items-center justify-center ml-2">
                   <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-8 h-8 rounded-full">
                 </div>
               </div>
               
               <!-- Incoming Message -->
               <div class="flex mb-4 cursor-pointer">
                 <div class="w-9 h-9 rounded-full flex items-center justify-center mr-2">
                   <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-8 h-8 rounded-full">
                 </div>
                 <div class="flex max-w-96 bg-white rounded-lg p-3 gap-3">
                   <p class="text-gray-700">Thanks, you're the best!</p>
                 </div>
               </div>
               
               <!-- Outgoing Message -->
               <div class="flex justify-end mb-4 cursor-pointer">
                 <div class="flex max-w-96 bg-indigo-500 text-white rounded-lg p-3 gap-3">
                   <p>Anytime! Let me know how you like it. 😊</p>
                 </div>
                 <div class="w-9 h-9 rounded-full flex items-center justify-center ml-2">
                   <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-8 h-8 rounded-full">
                 </div>
               </div>
               
               <!-- Incoming Message -->
               <div class="flex mb-4 cursor-pointer">
                 <div class="w-9 h-9 rounded-full flex items-center justify-center mr-2">
                   <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-8 h-8 rounded-full">
                 </div>
                 <div class="flex max-w-96 bg-white rounded-lg p-3 gap-3">
                   <p class="text-gray-700">So, pizza next week, right?</p>
                 </div>
               </div>
               
               <!-- Outgoing Message -->
               <div class="flex justify-end mb-4 cursor-pointer">
                 <div class="flex max-w-96 bg-indigo-500 text-white rounded-lg p-3 gap-3">
                   <p>Absolutely! Can't wait for our pizza date. 🍕</p>
                 </div>
                 <div class="w-9 h-9 rounded-full flex items-center justify-center ml-2">
                   <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-8 h-8 rounded-full">
                 </div>
               </div>
               <!-- Incoming Message -->
               <div class="flex mb-4 cursor-pointer">
                 <div class="w-9 h-9 rounded-full flex items-center justify-center mr-2">
                   <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-8 h-8 rounded-full">
                 </div>
                 <div class="flex max-w-96 bg-white rounded-lg p-3 gap-3">
                   <p class="text-gray-700">Hoorayy!!</p>
                 </div>
               </div>
               
                <!-- A message -->
            </div>

            

            

            


        </div>


        <footer class="bg-white border-t border-gray-300 p-4 absolute bottom-0 w-3/4">
                <div class="flex items-center">
                    <input type="text" placeholder="Type a message..." class="w-full p-2 rounded-md border border-gray-400 focus:outline-none focus:border-blue-500">
                    <button class="bg-indigo-500 text-white px-4 py-2 rounded-md ml-2">Send</button>
                </div>
        </footer>

        
        


    </div>






</body>

</html>
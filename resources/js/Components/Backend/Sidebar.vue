<template>
    <section :class="{'block': showSidebar, 'hidden': ! showSidebar}" class="xs:hidden ">
        <div class="h-screen fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-green-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <span class="text-white text-2xl mx-2 font-semibold">Album Coomeva</span>
                </div>
            </div>
            <nav class="mt-10">
                <inertia-link
                    class="flex items-center mt-4 py-2 px-6 border-l-4"
                    :class="[$page.currentRouteName === 'games.index' ? activeClass : inactiveClass]"
                    href="/games">
                    <svg class="h-6 w-6 text-grey-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
                    </svg>
                    <span class="mx-4">Juegos</span>
                </inertia-link>
                <inertia-link
                    class="flex items-center mt-4 py-2 px-6 border-l-4"
                    :class="[$page.currentRouteName === 'calendar.index' ? activeClass : inactiveClass]"
                    href="/calendar">
                    <svg class="h-6 w-6 text-grey-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                    <span class="mx-4">Agenda</span>
                </inertia-link>
                <inertia-link
                    class="flex items-center mt-4 py-2 px-6 border-l-4"
                    :class="[$page.currentRouteName === 'reports' ? activeClass : inactiveClass]"
                    href="/reports" >
                    <svg class="h-6 w-6 text-grey-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                    </svg>
                    <span class="mx-4">Informes</span>
                </inertia-link>
                <p class="flex items-center mt-4 py-2 px-6 uppercase text-gray-100 font-bold">Ajustes</p>
                <inertia-link
                    class="flex items-center mt-4 py-2 px-6 border-l-4"
                    :class="[$page.currentRouteName === 'users.index' ? activeClass : inactiveClass]"
                    href="/users">
                    <svg class="h-6 w-6 text-grey-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                    </svg>
                    <span class="mx-4">Usuarios</span>
                </inertia-link>
                <inertia-link
                    class="flex items-center mt-4 py-2 px-6 border-l-4"
                    :class="[$page.currentRouteName === 'profile.show' ? activeClass : inactiveClass]"
                    href="/user/profile">
                    <svg class="h-6 w-6 text-grey-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    <span class="mx-4">Perfil</span>
                </inertia-link>
            </nav>
        </div>
    </section>
</template>

<script>
    export default {
        name: "BackendSidebar",
        props: {
            showSidebar: {
                type: Boolean,
                default: () => false
            }
        },
        data() {
            return {
                activeClass: "hover:bg-green-800 text-gray-100 border-green-100 font-bold shadow-lg ",
                inactiveClass: "border-green-900 text-green-200 hover:bg-green-600 hover:bg-opacity-25 hover:text-gray-100",
                
            }
        },
        
       
    };
</script>

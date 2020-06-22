<template>
    <div class="ml-3 relative">
        <div>
            <button @click="isOpen = !isOpen" class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true">
                <img class="h-8 w-8 rounded-full" src="/images/avatar.jpeg" alt="avatar" />
            </button>
        </div>

        <div v-if="isOpen" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
            <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                    Your Profile
                </a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                    Settings
                </a>
                <a href="#" @click="logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                    Sign out
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isOpen: false,
                errors: {}
            }
        },

        methods: {
            async logout () {
                this.$auth.logout('laravelSanctum', { data: this.form })
                .then(response => {
                    this.$router.push(`/login`)
                })
                .catch(({response}) => {
                    this.errors = response.data.errors
                })

            }
        },
    }
</script>
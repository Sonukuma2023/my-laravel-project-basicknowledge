<template>
    <div class="dashboard">

        <!-- Sidebar -->
        <aside class="sidebar">
            <h2 class="logo">My Dashboard</h2>

            <nav>
                <Link href="/dashboard" class="menu-item">
                    Dashboard
                </Link>

                <Link href="/products" class="menu-item">
                    Products
                </Link>

                <Link href="/categories" class="menu-item">
                    Categories
                </Link>
                <Link href="/dashboard" class="menu-item">
                     order list
                </Link>
                <Link href="/dashboard" class="menu-item">
                    payments list
                </Link>

                <button @click="logout" class="logout-btn">
                    Logout
                </button>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">

            <!-- Header -->
            <header class="header">
                <h1>Dashboard</h1>
            </header>

            <!-- Page Content -->
            <section class="content">
                <slot />
            </section>

        </main>

    </div>
</template>

<script setup>
import { Link, router } from '@inertiajs/vue3';

const logout = () => {
    router.post('/logout');
};
</script>

<style scoped>
.dashboard {
    display: flex;
    min-height: 100vh;
    background: #f5f6fa;
}

/* Sidebar */
.sidebar {
    width: 240px;
    background: #1f2937;
    color: white;
    padding: 20px;
}

.logo {
    margin-bottom: 30px;
}

nav {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.menu-item {
    color: white;
    text-decoration: none;
    padding: 12px 15px;
    border-radius: 6px;
}

.menu-item:hover {
    background: #374151;
}

.logout-btn {
    border: none;
    background: #dc2626;
    color: white;
    padding: 12px 15px;
    border-radius: 6px;
    cursor: pointer;
    text-align: left;
    margin-top: 20px;
}

.logout-btn:hover {
    background: #b91c1c;
}

/* Main */
.main-content {
    flex: 1;
}

.header {
    background: white;
    padding: 20px;
    border-bottom: 1px solid #ddd;
}

.header h1 {
    margin: 0;
}

.content {
    padding: 25px;
}
</style>
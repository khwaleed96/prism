const routes = [
    {
        path: '/',
        component: () => import('../Pages/Auth/Login.vue'),
        name: 'login',
        meta: {
            public: true,
            title: 'Login'
        }
    },
    {
        path: '/register',
        component: () => import('../Pages/Auth/Register.vue'),
        name: 'register',
        meta: {
            public: true,
            title: 'Register'
        }
    },
    {
        path: '',
        component: () => import('../Layouts/app-layout.vue'),
        children: [
            {
                path: '/dashboard',
                component: () => import('../Pages/Dashboard.vue'),
                name: 'dashboard',
                meta: {
                    authRequire: true,
                    title: 'Dashboard'
                }
            },
            {
                path: '/purchases',
                component: () => import('../Pages/Purchases/Purchases.vue'),
                name: 'purchases',
                meta: {
                    authRequire: true,
                    title: 'Purchases'
                }
            },
        ]
    }
]

export default routes;

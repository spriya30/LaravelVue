import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import NotFound from './components/NotFound';

export default {
    mode: 'history',
    linkActiveClass: 'font-bold',

    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Logo
        },
        {
            path: '/symbol',
            component: LogoSymbol
        },
        {
            path: '/colors',
            component: Colors,
            // name: 'about'
        }
    ]
};
import { Link } from '@inertiajs/react';

export default function NavLink({ active = false, className = '', children, ...props }) {
    return (
        <Link
            {...props}
            className={
                'inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none ' +
                (active
                    ? 'border-indigo-400 dark:border-indigo-600 text-black-900 dark:text-black-100 focus:border-indigo-700 '
                    : 'border-transparent text-black-500 dark:text-black-400 hover:text-black-700 dark:hover:text-black-300 hover:border-black-300 dark:hover:border-black-700 focus:text-black-700 dark:focus:text-black-300 focus:border-black-300 dark:focus:border-black-700 ') +
                className
            }
        >
            {children}
        </Link>
    );
}
